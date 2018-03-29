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

            $table->string('lastName')->nullable();
            $table->string('title')->nullable();
            $table->string('contactNumber')->nullable();
            $table->string('designation')->nullable();
            $table->enum('role', ['1', '2', '3'])->nullable();
            $table->enum('status', ['0', '1'])->nullable();

            //adding foreign key
            $table->integer('companyId')->unsigned()->nullable(); 
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
