<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = ['names','email','message','post_id'];
    
    public function posts(){
        return $this->belongsTo(Post::class);
    }
}
