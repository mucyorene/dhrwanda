<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = ['postTitle','content','thumb'];
    
    public function comments(){
        return $this->hasMany(Comments::class);
    }
    public function posts(){
        return $this->belongsTo(User::class);
    }
}
