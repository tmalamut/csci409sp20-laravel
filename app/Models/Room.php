<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    protected $fillable = [
      'hotel_id',
      'type',
      'description',
      'price',
      'image'
    ];

    public function hotels() {
        return $this->belongsTo('App\Models\Hotel');
    }//end rooms functions
}
