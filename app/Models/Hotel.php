<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    //
    protected $fillable = [
      'name',
      'address_1',
      'description',
      'image',
      'address_2',
      'city',
      'state',
      'zip'
    ];//end fillable

    public function rooms() {
        return $this->hasMany('App\Models\Room');
    }//end rooms functions
}//end Hotel class
