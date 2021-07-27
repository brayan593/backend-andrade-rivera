<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class Author extends Model
{
    //use HasFactory;
    protected $table = 'authors';
    protected $fillable = [
        'name',
        'email',
        'ponhe',
        'identification'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

  /*   function proyect(){
        return $this->belongsTo(related:Project::class)
    }
 */

function proyect(){
    return $this->belongsTo(related:Project::class);
} 

/*  function proyects(){
    return $this->belongsToMany(related:Project::class)->withTimestamps();
}  */

function setPasswordAttribute($value){
    $this->attributes['password'] = Hash::make($value); 
}
}
