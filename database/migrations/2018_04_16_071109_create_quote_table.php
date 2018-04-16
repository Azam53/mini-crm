<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quote', function (Blueprint $table) {
            $table->increments('id');
            
            $table->json('services');
            $table->text('comments')->nullable();
            $table->integer('depth')->nullable();
            $table->enum('subscribedStatus', ['0', '1'])->nullable();
            $table->integer('total');

              //adding foreign key
            $table->integer('companyId')->unsigned()->nullable(); 
            $table->index('companyId');   // adding index of companyId
            $table->foreign('companyId')->references('id')->on('companies')->onDelete('cascade'); // making companyId foreign from company table

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
        Schema::table('quote', function (Blueprint $table) {

             // dropping foreign serviceId from subscription table
            $table->dropForeign('quote_companyId_foreign');
            $table->dropIndex('quote_companyId_index');
            $table->dropColumn('companyId'); 

        });

        Schema::dropIfExists('quote');
    }
}
