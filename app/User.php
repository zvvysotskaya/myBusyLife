<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use App\Grocery;
use App\Householditem;
use App\Clothing;
use App\Householdchore;
use App\Mytodo;
use App\Worktodo;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function groceries()
    {
      return $this->hasMany(Grocery::class);
    }

    public function householditems()
    {
        return $this->hasMany(Householditem::class);
    }
    public function clothings()
    {
      return $this->hasMany(Clothing::class);
    }
    public function householdchores(){
      return $this->hasMany(Householdchore::class);
    }
    public function mytodos(){
      return $this->hasMany(Mytodo::class);
    }
    public function worktodos(){
      return $this->hasMany(Worktodo::class);
    }
}
