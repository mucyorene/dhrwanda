<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class testPost extends Model
{
    public $fillable = ['id','title','content'];
    public function comments(){
        return $this->hasMany('App\testComments','foreign_key','local_key');
    }
}
