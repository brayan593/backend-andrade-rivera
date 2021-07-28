<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class Patrol extends Model
{

  //use HasFactory;
  protected $table = 'patrol';
  protected $fillable = [
      'number patrol',
      'type of patrol',
      'color of patrol',
      'patrol size'
  ];

  protected $hidden = [
      'password',
      'remember_token',
  ];



function cops(){
  return $this->hasMany(related:policeman::class);
} 



function setPasswordAttribute($value){
  $this->attributes['password'] = Hash::make($value); 
}
}