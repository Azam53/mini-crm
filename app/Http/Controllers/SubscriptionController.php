<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscription;
use App\Service;
use App\Http\Requests\StoreSubscription;
use Validator;
use App\Events\Subscribed;
use Event;

class SubscriptionController extends Controller
{
    public function index(){

       //  dd(Service::find(1)->with('subscription')->get());

       try{

            $subsciptions = Subscription::join('companies', 'companies.id', '=', 'subscriptions.companyId')
                                        ->join('services', 'services.id', '=', 'subscriptions.serviceId')
                                        ->select('subscriptions.*','services.serviceName','companies.name')
                                        ->get();
          //  dd($subsciptions);                            


            return view('subscription.index')->with('subsciptions',$subsciptions);

        }catch(\Exception $e) {

            return redirect()->back()->with('failed','This error ocurred.'.$e->getMessage());

      }
    	

    }

    public function create(){

        try{
               

            return view('subscription.create');

        }catch(\Exception $e) {

            return redirect()->back()->with('failed','This error ocurred.'.$e->getMessage());

      }

    }

     public function show($id){

        try{

            $subscription = Subscription::join('companies', 'companies.id', '=', 'subscriptions.companyId')
                                        ->join('services', 'services.id', '=', 'subscriptions.serviceId')
                                        ->select('subscriptions.*','services.*','companies.*')
                                        ->where('subscriptions.id',$id)
                                        ->get();

          //  dd($subscription);

            return view('subscription.details')->with('subscription',$subscription);

        }catch(\Exception $e) {

            return redirect()->back()->with('failed','This error ocurred.'.$e->getMessage());

      }
        
    }


     public function edit($id){

        try{

            $subscription = Subscription::find($id);

            return view('subscription.edit')->with('subscription',$subscription);

        }catch(\Exception $e) {

            return redirect()->back()->with('failed','This error ocurred.'.$e->getMessage());

      }
        
    }

      // function for creating new subscription
    public function store(StoreSubscription $request){

      try{
        
            $input = $request->all();
            $input['startDate'] = date("Y-m-d",strtotime($request->startDate)) ;
            $input['endDate'] = date("Y-m-d",strtotime($request->endDate));
           // dd($input);

            $subscription = Subscription::create($input);

             // fire event for subscription added
           // Event::fire(new Subscribed($subscription));

            return redirect('/subscription')->with('success','Subscription created successfully.');

      }catch(\Exception $e) {

            return redirect()->back()->with('failed','This error ocurred.'.$e->getMessage());

      }
        

    }


     // function for updating existing subscription
    public function update(StoreSubscription $request,$id){
          
        try{
                   
                $subscription = Subscription::find($id);  
                $input =  $request->toArray();
                $input['startDate'] = date("Y-m-d",strtotime($request->startDate)) ;
                $input['endDate'] = date("Y-m-d",strtotime($request->endDate));
              
                $subscription->update($input);
                
                
                return redirect('/subscription')->with('success','Subscription edited successfully.');

        }catch(\Exception $e) {

            return redirect()->back()->with('failed','This error ocurred.'.$e->getMessage());

      }
        


    }


    //function for deleting the subscription

    public function destroy($id){
         
         try{
                   $subscription = Subscription::find($id);
                   $subscription->delete();
                   
                   return redirect('/subscription')->with('success','Subscription deleted successfully.');

         }catch(\Exception $e) {

            return redirect()->back()->with('failed','This error ocurred.'.$e->getMessage());

      }

    }
}
