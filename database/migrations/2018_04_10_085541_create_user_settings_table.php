<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->float('discountRule', 8, 2);
            
            //adding userid as foreign key from user table
            $table->integer('userId')->unsigned()->nullable(); 
            $table->index('userId');   // adding index of companyId
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade'); // making companyId foreign from company table

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('subscriptions', function (Blueprint $table) {

             // dropping foreign serviceId from subscription table
            $table->dropForeign('user_settings_userId_foreign');
            $table->dropIndex('user_settings_userId_index');
            $table->dropColumn('userId');   

        });

        Schema::dropIfExists('user_settings');
    }
}
