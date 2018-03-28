<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

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
    public function store(Request $request){

      try{

            //validation at server level
            $this->validate($request, [
                'name' => 'required|min:5|max:15',
                'price' => 'required',
                'description' => 'required',
                'rate' => 'required',
            ]);

                  
            $input = $request->all();

            $service = Service::create($input);
            return redirect('/service')->with('success','Service created successfully.');

      }catch(\Exception $e) {

            return redirect()->back()->with('failed','This error ocurred.'.$e->getMessage());

      }
    	

    }


      // function for updating existing companies
    public function update(Request $request,$id){
          
        try{

            //validation at server level
                $this->validate($request, [
                    'name' => 'required|min:5|max:15',
                    'price' => 'required',
                    'description' => 'required',
                    'rate' => 'required',
                ]);
                   
                $service = Service::find($id);   
                $service->name = $request->get('name');
                $service->price = $request->get('price');
                $service->description = $request->get('description');
                $service->rate = $request->get('rate');
              
                $service->save();
                
                
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
}
