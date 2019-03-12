<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grocery extends Model
{
    protected $guarded = [];

    public function user1()
    {
      return $this->belongsTo(User::class);
    }



}
