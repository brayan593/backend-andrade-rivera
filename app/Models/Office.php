<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    //use HasFactory;
    protected $table = 'office';
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

protected $attributes = ['full_name'];


 function employees(){
    return $this->hasMany(employee::class);
} 



function setCodeAttribute($value){
    $this->attribute['code'] = strtoupper($value);
}

function setDateAttribute($value){
    $this->attribute['date'] = 'hola';
}

function getFullNameAttribute(){
    return  $this->attribute['code'].$this->attribute['description'];
}
}