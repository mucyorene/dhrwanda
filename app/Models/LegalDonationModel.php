<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LegalDonationModel extends Model
{
   public $fillable = ['startAt','endAt','institutionName','email','amount','country','message'];
}
