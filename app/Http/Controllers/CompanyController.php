<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Company;
use Validator;

class CompanyController extends Controller
{
    public function index(){

       try{
             $companies = Company::all();


              return view('company.index')->with('companies',$companies);


       }  catch(\Exception $e) {

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
    public function store(Request $request){
          
          try {

            //validation at server level
            $validator = Validator::make($request->all(), [
                'name' => 'required|min:5|max:15',
                'address' => 'required',
                'postalCode' => 'required',
                'province' => 'required',
                'country' => 'required',
                'contactNumber' => 'required|min:9|max:10',
                'email' => 'required|min:5|max:15|unique:companies',
                'url' => 'required',
                'bankNumber' => 'required|min:14|max:20',
            ]);  
             
             if ($validator->fails()) {
              return redirect()->back()
                          ->withErrors($validator)
                          ->withInput();
              }


            $input = $request->all();
            $input['status'] = '1';

            $company = Company::create($input);
            return redirect('/company')->with('success','Company created successfully.');

          } catch(\Exception $e) {
            throw new \Exception($e);
            return redirect()->back()->with('failed','This error ocurred.'.$e->getMessage());

          }
        


    }

     // function for updating existing companies
    public function update(Request $request,$id){
        
        try {

                //validation at server level
                        $validator = Validator::make($request->all(), [
                            'name' => 'required|min:5|max:15',
                            'address' => 'required',
                            'postalCode' => 'required',
                            'province' => 'required',
                            'country' => 'required',
                            'contactNumber' => 'required|min:9|max:10',
                            'email' => 'required|min:5|max:15',
                            'url' => 'required',
                            'bankNumber' => 'required|min:14|max:20',
                        ]); 

                        if ($validator->fails()) {
                          return redirect()->back()
                                      ->withErrors($validator)
                                      ->withInput();
                          } 

                    $company = Company::find($id);   
                    $company->name = $request->get('name');
                    $company->address = $request->get('address');
                    $company->postalCode   = $request->get('postalCode');
                    $company->province = $request->get('province');
                    $company->country  = $request->get('country');
                    $company->contactNumber = $request->get('contactNumber');
                    $company->email = $request->get('email');
                    $company->url = $request->get('url');
                    $company->bankNumber = $request->get('bankNumber') ;
                    $company->status = '1';
                    $company->save();
                    
                    
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



}
