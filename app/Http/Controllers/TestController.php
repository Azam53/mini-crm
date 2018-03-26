<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //function to test the api
    
		

		public function request($string, $select) {
             
           
            $appurl = 'https://app.jortt.nl/api/'; 
            $appname = 'refresh-crm';
            $apptoken = 'd4ee95d4-f00f-4aec-ab19-ca7f77e8a969';

			$request = curl_init();
			$headers = array(
				'Content-Type: application/json',
				'Accept: application/json',
				'Authorization: Basic '.base64_encode($appname.':'.$apptoken)
			);
			$config = array(
				'APPNAME' => $appname,
				'APITOKEN' => $apptoken,
				'APIURL' => $appurl
			);
			$command = json_encode($string);
			curl_setopt($request, CURLOPT_URL, $config['APIURL'].$select);
			curl_setopt($request, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
			curl_setopt($request, CURLOPT_POST, true);
			curl_setopt($request, CURLOPT_POSTFIELDS, $command);
			curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($request, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($request, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($request, CURLOPT_SSL_VERIFYHOST, false);
			curl_setopt($request, CURLOPT_HEADER, false);	
			curl_setopt($request, CURLOPT_USERPWD, base64_encode($config['APPNAME'].':'.$config['APITOKEN']));
			$result = curl_exec($request);
			if ($result == FALSE) {
				throw new Exception('<p>Curl failed: '.curl_error($request).'</p>');
			}
			// Close connection
			curl_close($request);
			//
			print $result;
		}

		public function index(){

			    $appname = 'refresh-crm';
                $apptoken = 'd4ee95d4-f00f-4aec-ab19-ca7f77e8a969';

				$api = $this->request($appname, $apptoken);
				$data = [
					'customer' => [
						'company_name' => 'Test via api',
						'attn' => '',
						"email" => 'test@gmail.co.in',
						'extra_information' => '',
						'invoice_language' => 'NL',
						'address' =>[
						        'street' => 'Hazratganj',
							'postal_code' => '226001',
				        		'city' => 'Lucknow',
				        		'country_code' => 'NL'
						]
					]
				];


                
			   $response = $api->request($data, 'customers');
			   dd($response);
		}

}
