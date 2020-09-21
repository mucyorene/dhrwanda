<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = ['postTitle','content','thumb'];
    
    public function comments(){
        return $this->hasMany(Comments::class);
    }
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
