<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndividualDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individual_donations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('startAt');
            $table->String('endAt');
            $table->String('firstName');
            $table->String('lastName');
            $table->String('email');   
            $table->String('country');   
            $table->String('phoneNumber');      
            $table->String('amount');
            $table->String('message');                
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
        Schema::dropIfExists('individual_donations');
    }
}
