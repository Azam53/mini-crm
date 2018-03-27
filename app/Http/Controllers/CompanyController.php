<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Company;

class CompanyController extends Controller
{
    public function index(){

    	$companies = Company::all();


    	return view('company.index')->with('companies',$companies);

    }

    public function create(){

        return view('company.create');
    }

     public function edit($id){

     	$company = Company::find($id);

        return view('company.edit')->with('company',$company);
    }

   // function for creating new companies
    public function store(Request $request){
          
           
        $input = $request->all();
        $input['status'] = '1';

    	$company = Company::create($input);
        return redirect('/company')->with('success','Company created successfully.');


    }

     // function for updating existing companies
    public function update(Request $request,$id){
          
           
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


    }

    // function for autocomplete country fill in company form
     public function autoComplete(Request $request){


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

    }

    //function for deleting the companies

    public function destroy($id){
		 
                   $company = Company::find($id);
                   $company->delete();
                   
		return redirect('/company')->with('success','Company deleted successfully.');
	}



}
