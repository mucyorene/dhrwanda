<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class testComments extends Model
{   
    protected $fillable = ['id','names','email','message','postId'];
    public function testPost(){
        return $this->belongsTo('App\testPost','foreign_key');
    }
}
