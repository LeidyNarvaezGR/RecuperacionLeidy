<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
      public function editorial(){
        return $this->belongsTo('App\Models\Editorial');
    }  
    
    public function author(){
        return $this->belongsTo('App\Models\Author');
    } 

     public function copies()
    {
        return $this->hasMany('App\Models\Copy');
    }
}
