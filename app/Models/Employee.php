<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class Employee extends Model
{
    //use HasFactory;
    protected $table = 'employee';
    protected $fillable = [
        'age',
        'name',
        'email',
        'ponhe',
        'identification'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

 

function office(){
    return $this->belongsTo(related:Office::class);
} 



function setPasswordAttribute($value){
    $this->attributes['password'] = Hash::make($value); 
}
}
