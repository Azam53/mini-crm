<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->increments('id');

             //adding foreign key
            $table->integer('serviceId')->unsigned()->nullable(); 
            $table->index('serviceId');   // adding index of companyId
            $table->foreign('serviceId')->references('id')->on('services')->onDelete('cascade'); // making companyId foreign from company table

             //adding foreign key
            $table->integer('companyId')->unsigned()->nullable(); 
            $table->index('companyId');   // adding index of companyId
            $table->foreign('companyId')->references('id')->on('companies')->onDelete('cascade'); // making companyId foreign from company table

            $table->boolean('recurring');
            $table->date('startDate'); 
            $table->date('endDate'); 
            $table->float('discount', 8, 2);
            $table->text('description');
            $table->enum('rate', ['0', '1']);
            $table->enum('status', ['0', '1']);
            $table->timestamps();

        });

        $query =  "ALTER TABLE `subscriptions` CHANGE `status` `status` ENUM('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'";

        \DB::statement($query);
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
            $table->dropForeign('subscriptions_companyId_foreign');
            $table->dropIndex('subscriptions_companyId_index');
            $table->dropColumn('companyId'); 

            // dropping foreign companyId from subscription table
            $table->dropForeign('subscriptions_serviceId_foreign');
            $table->dropIndex('subscriptions_service_index');
            $table->dropColumn('serviceId');   

        });

        Schema::dropIfExists('subscriptions');
    }
}
