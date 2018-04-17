<?php

use Illuminate\Database\Seeder;
use App\Company;
use Illuminate\Support\Facades\Hash;


class AdminCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$companyId = Company::first()->get();
    	$companyId = $companyId[0]->id;

         DB::table('users')->insert([

                
                [
                   'name' => 'Admin',
                   'email' => 'admin@yahoo.com',
                   'password' => Hash::make('1234567'),
                   'role'   => 2,
                   'companyId' => $companyId,
                ]
         ]);       
    }
}
