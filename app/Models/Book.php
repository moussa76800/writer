<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
   
    protected $fillable =[

        'id' ,
        'titre' ,
        'description' ,
        'nbrepages' ,
        'isbn' ,
        'price' ,
        'language' ,
        'image'  ,
        'created_at' 
    ];
}
