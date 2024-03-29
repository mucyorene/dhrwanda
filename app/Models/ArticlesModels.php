<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticlesModels extends Model
{
    //protected $table = 'ArticlesModels';
    public $fillable = ['postTitle','content'];

    public function comments(){
        return $this->hasMany('App\Models\PostComments');
    }
}
