<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Policeman extends Model
{
  use HasFactory;
  protected $table = 'app.policeman';
  protected $fillable = [
        'code',
        'description',
        'date',
        'is_aproved',
        'title',
  ];

  protected $casts = [
    'is_aproved' => 'boolean',
    'date' => 'datatime:Y-m-d',

    ];

    protected $attributes = ['full_name']


    function cops(){
        return $this->hasMany(policeman::class);
    } 


    function setCodeAttribute($value){
     $this->attribute['code'] = strtoupper($value);
    }

    function setCodeAttribute($value){
        $this->attribute['date'] = 'hola';
    }

    function getFullNameAttribute(){
        return  $this->attribute['code'].$this->attribute['description'];
    }
}