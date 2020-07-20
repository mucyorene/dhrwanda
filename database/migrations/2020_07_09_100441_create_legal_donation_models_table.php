<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLegalDonationModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legal_donation_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('startAt');
            $table->String('endAt');
            $table->String('institutionName');     
            $table->String('email');
            $table->String('amount');
            $table->String('country');
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
        Schema::dropIfExists('legal_donation_models');
    }
}
