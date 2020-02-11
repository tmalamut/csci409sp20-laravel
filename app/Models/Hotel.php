<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    //
    protected $fillable = [
      'name',
      'location',
      'description',
      'image',
    ];//end fillable

    public function rooms() {
        return $this->hasMany('App\Models\Room');
    }//end rooms functions
}//end Hotel class
