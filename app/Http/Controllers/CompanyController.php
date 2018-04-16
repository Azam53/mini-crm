<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Country;
use App\Company;
use App\Service;
use App\Quote;
use App\Http\Requests\StoreCompany;
use App\Http\Requests\QuoteCheck;
use Validator;
use App\Events\QuoteMail;
use Event;
use DB;

class CompanyController extends Controller
{
    public function index(){

       try{
             $companies = Company::all();


              return view('company.index')->with('companies',$companies);


       }  catch(\Exception $e) {

            Log::info('Company list page ');

            return redirect()->back()->with('failed','This error ocurred.'.$e->getMessage());

        }


    }

    public function create(){

        try{

            return view('company.create');

        }catch(\Exception $e) {

            return redirect()->back()->with('failed','This error ocurred.'.$e->getMessage());

        }

        
    }

     public function edit($id){

        try{

            $company = Company::find($id);

            return view('company.edit')->with('company',$company);

        }catch(\Exception $e) {

            return redirect()->back()->with('failed','This error ocurred.'.$e->getMessage());

        }

     	
    }

   // function for creating new companies
    public function store(StoreCompany $request){
          
          try {


            $input = $request->all();

            $company = Company::create($input);

            return redirect('/company')->with('success','Company created successfully.');

          } catch(\Exception $e) {
            throw new \Exception($e);
            return redirect()->back()->with('failed','This error ocurred.'.$e->getMessage());

          }
        


    }

     // function for updating existing companies
    public function update(StoreCompany $request,$id){
        
        try {

                    $company = Company::find($id);   
                    $data = $request->toArray();
                   
                    $company->update($data);
                    
                    
                    return redirect('/company')->with('success','Company edited successfully.');


        }  catch(\Exception $e) {

                   return redirect()->back()->with('failed','This error ocurred.'.$e->getMessage());

          } 
       


    }

    // function for autocomplete country fill in company form
     public function autoComplete(Request $request){
        
        try{

            $query = $request->get('term');
        
            $countries=Country::where('name','LIKE','%'.$query.'%')->get();
        
            $data=array();
            foreach ($countries as $country) {

                    $data[]=array('value'=>$country->name,'id'=>$country->id);
            }

            if(count($data))
                 return $data;
            else
                return ['value'=>'No Result Found','id'=>''];



        } catch(\Exception $e) {

                   return redirect()->back()->with('failed','This error ocurred.'.$e->getMessage());

          } 

    	

    }

    //function for deleting the companies

    public function destroy($id){

        try{
                   $company = Company::find($id);
                   $company->delete();
        
                   
                  return redirect('/company')->with('success','Company deleted successfully.');


        } catch(\Exception $e) {

                   return redirect()->back()->with('failed','This error ocurred.'.$e->getMessage());

        } 
		 
                  
	}


   // function for autocomplete company fill in subscription form
     public function autoCompleteCompany(Request $request){
        
        try{

            $query = $request->get('term');
        
            $companies=Company::where('name','LIKE','%'.$query.'%')
                                 ->get();
        
            $data=array();
            foreach ($companies as $company) {

                    $data[]=array('name'=>$company->name,'value'=>$company->id);
            }

            if(count($data))
                 return $data;
            else
                return ['value'=>'No Result Found','id'=>''];



        } catch(\Exception $e) {

                   return redirect()->back()->with('failed','This error ocurred.'.$e->getMessage());

          } 

      

    }

     // function to show quote form
     public function quote($id){

        try{
               //dd($id);
             $services = Service::all();
             $companyId = $id;

            return view('company.quote')->with('services',$services)->with('companyId',$companyId);

        }catch(\Exception $e) {

            return redirect()->back()->with('failed','This error ocurred.'.$e->getMessage());

        }

        
    }


     // function to send quote 
     public function sendQuote(QuoteCheck $request){

        try{
               
              
            $services = Service::whereIn('id',$request->services)->get();
            $total    = $request->total;
            $companyId = $request->companyId;

            $company = Company::where('id',$companyId)->get();

            $email = $company[0]->email;

            // code to save the quote details in database

            $input = $request->all();
            $input['companyId'] = $companyId;
            $input['total'] = $total;
            $input['services'] = json_encode($request->services);

            $quote = Quote::create($input);

            $quoteId = $quote->id;

            /* Here we can't use callbacks from model since I need some dynamic content which is required in email */

             // fire event for subscription added
            Event::fire(new QuoteMail($services,$total,$email,$quoteId));

             return redirect('/company')->with('success','Quote sended successfully.');

        }catch(\Exception $e) {

            return redirect()->back()->with('failed','This error ocurred.'.$e->getMessage());

        }

        
    }

     // function to show quote form step2
     public function showQuote($id){

        try{
               
                $quote = Quote::find($id);

                $services =  json_decode($quote->services);

                $services = Service::whereIn('id',$services)->get();

             return view('company.quoteChat')->with('quote',$quote)->with('services',$services);

           

        }catch(\Exception $e) {

            return redirect()->back()->with('failed','This error ocurred.'.$e->getMessage());

        }

        
    }



}
