<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->string('lastName');
            $table->string('title');
            $table->string('contactNumber');
            $table->string('designation');
            $table->enum('role', ['1', '2', '3']);
            $table->enum('status', ['0', '1']);

            //adding foreign key
            $table->integer('companyId')->unsigned(); 
            $table->index('companyId');   // adding index of companyId
            $table->foreign('companyId')->references('id')->on('companies')->onDelete('cascade'); // making companyId foreign from company table

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->dropColumn('lastName');
            $table->dropColumn('title');
            $table->dropColumn('contactNumber');
            $table->dropColumn('designation');
            $table->dropColumn('role');
            $table->dropColumn('status');

            // dropping foreign companyId from users table
            $table->dropForeign('users_companyId_foreign');
            $table->dropIndex('users_companyId_index');
            $table->dropColumn('companyId');   

        });
    }
}
