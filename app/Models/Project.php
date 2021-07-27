<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //use HasFactory;
    protected $table = 'projects';
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

/*function author(){
    return $this->hasOne(Author::class);
} */

 function authors(){
    return $this->hasMany(Author::class);
} 

/* function authors(){
    return $this->belongsToMany(related:Author::class)->withTimestamps();
} */

//mutadores
function setCodeAttribute($value){
    $this->attribute['code'] = strtoupper($value);
}

function setCodeAttribute($value){
    $this->attribute['date'] = 'hola';
}

//accesors
function getFullNameAttribute(){
    return  $this->attribute['code'].$this->attribute['description'];
}

}




