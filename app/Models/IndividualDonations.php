<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IndividualDonations extends Model
{
    public $fillable = ['startAt','endAt','firstName','lastName','email','country','phoneNumber','amount','message'];
}
