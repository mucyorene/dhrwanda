<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleComments extends Model
{
    //protected $table = "PostComments";
    protected $fillable = ['names','email','message'];

    public function ArticlesModels(){
        return $this->belongsTo('App\Models\ArticlesModels');
    }
}

