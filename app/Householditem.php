<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Householditem extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
