<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Country;
use App\Company;
use App\Http\Requests\UpdateCompany;
use Validator;
use Auth;

class AdminCompanyController extends Controller
{
     public function index(){

       try{
             // to fetch companyid of current admin
             $companyId = Auth::user()->companyId; 

             $company = Company::find($companyId);


              return view('company.adminindex')->with('company',$company);


       }  catch(\Exception $e) {

            Log::info('Company list page ');

            return redirect()->back()->with('failed','This error ocurred.'.$e->getMessage());

        }


    }

    // public function create(){

    //     try{

    //         return view('company.create');

    //     }catch(\Exception $e) {

    //         return redirect()->back()->with('failed','This error ocurred.'.$e->getMessage());

    //     }

        
    // }

     public function edit($id){

        try{

            $company = Company::find($id);

            return view('company.adminedit')->with('company',$company);

        }catch(\Exception $e) {

            return redirect()->back()->with('failed','This error ocurred.'.$e->getMessage());

        }

     	
    }

   // function for creating new companies
    // public function store(StoreCompany $request){
          
    //       try {


    //         $input = $request->all();

    //         $company = Company::create($input);

    //         return redirect('/company')->with('success','Company created successfully.');

    //       } catch(\Exception $e) {
    //         throw new \Exception($e);
    //         return redirect()->back()->with('failed','This error ocurred.'.$e->getMessage());

    //       }
        


    // }

     // function for updating existing companies
    public function update(UpdateCompany $request,$id){
        
        try {

                    $company = Company::find($id);   
                    $data = $request->toArray();
                   
                    $company->update($data);
                    
                    
                    return redirect('/admincompany')->with('success','Company edited successfully.');


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
        
                   
                  return redirect('/admincompany')->with('success','Company deleted successfully.');


        } catch(\Exception $e) {

                   return redirect()->back()->with('failed','This error ocurred.'.$e->getMessage());

        } 
		 
                  
	}


}
