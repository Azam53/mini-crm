<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Http\Requests\StoreSettings;
use Auth;



class SettingController extends Controller
{
     public function index(){

       try{

            $settings = Setting::all();


            return view('setting.index')->with('settings',$settings);

       }catch(\Exception $e) {

            return redirect()->back()->with('failed','This error ocurred.'.$e->getMessage());

      }
    	

    }

     public function create(){

        try{

            return view('setting.create');

        }catch(\Exception $e) {

            return redirect()->back()->with('failed','This error ocurred.'.$e->getMessage());

      }

    }

     public function edit($id){

        try{

            $setting = Setting::find($id);

            return view('setting.edit')->with('setting',$setting);

        }catch(\Exception $e) {

            return redirect()->back()->with('failed','This error ocurred.'.$e->getMessage());

      }
      
    }


     // function for creating new settings
    public function store(StoreSettings $request){

      try{
        
            $input = $request->all();
            $input['userId'] = Auth::user()->id;

            $service = Setting::create($input);
            return redirect('/setting')->with('success','Setting created successfully.');

      }catch(\Exception $e) {

            return redirect()->back()->with('failed','This error ocurred.'.$e->getMessage());

      }
    	

    }


    // function for updating existing companies
    public function update(StoreSettings $request,$id){
          
        try{
                   
                $service = Setting::find($id);   
              
                $service->update($request->toArray());
                
                
                return redirect('/setting')->with('success','Setting edited successfully.');

        }catch(\Exception $e) {

            return redirect()->back()->with('failed','This error ocurred.'.$e->getMessage());

      }
        


    }

      //function for deleting the service

    public function destroy($id){
		 
         try{
                   $setting = Setting::find($id);
                   $setting->delete();
                   
                   return redirect('/setting')->with('success','Setting deleted successfully.');

         }catch(\Exception $e) {

            return redirect()->back()->with('failed','This error ocurred.'.$e->getMessage());

      }

	}

}
