<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Http\Requests\StoreService;
use Validator;

class ServiceController extends Controller
{
     public function index(){

       try{

            $services = Service::all();


            return view('service.index')->with('services',$services);

       }catch(\Exception $e) {

            return redirect()->back()->with('failed','This error ocurred.'.$e->getMessage());

      }
    	

    }

    public function create(){

        try{

            return view('service.create');

        }catch(\Exception $e) {

            return redirect()->back()->with('failed','This error ocurred.'.$e->getMessage());

      }

    }


    public function edit($id){

        try{

            $service = Service::find($id);

            return view('service.edit')->with('service',$service);

        }catch(\Exception $e) {

            return redirect()->back()->with('failed','This error ocurred.'.$e->getMessage());

      }
     	
    }

     // function for creating new services
    public function store(StoreService $request){

      try{
        
            $input = $request->all();

            $service = Service::create($input);
            return redirect('/service')->with('success','Service created successfully.');

      }catch(\Exception $e) {

            return redirect()->back()->with('failed','This error ocurred.'.$e->getMessage());

      }
    	

    }


      // function for updating existing companies
    public function update(StoreService $request,$id){
          
        try{
                   
                $service = Service::find($id);   
              
                $service->update($request->toArray());
                
                
                return redirect('/service')->with('success','Service edited successfully.');

        }catch(\Exception $e) {

            return redirect()->back()->with('failed','This error ocurred.'.$e->getMessage());

      }
        


    }

    //function for deleting the service

    public function destroy($id){
		 
         try{
                   $service = Service::find($id);
                   $service->delete();
                   
                   return redirect('/service')->with('success','Service deleted successfully.');

         }catch(\Exception $e) {

            return redirect()->back()->with('failed','This error ocurred.'.$e->getMessage());

      }

	}


  // function for autocomplete service fill in subscription form
     public function autoCompleteService(Request $request){
        
        try{

            $query = $request->get('term');
        
            $services=Service::where('serviceName','LIKE','%'.$query.'%')
                                 ->get();
        
            $data=array();
            foreach ($services as $service) {

                    $data[]=array('name'=>$service->name,'value'=>$service->id);
            }

            if(count($data))
                 return $data;
            else
                return ['value'=>'No Result Found','id'=>''];



        } catch(\Exception $e) {

                   return redirect()->back()->with('failed','This error ocurred.'.$e->getMessage());

          } 

      

    }
}
