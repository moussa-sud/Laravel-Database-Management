<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // in here we're just able to edit the given fields 

    protected $fillable = ['name', 'details', 'image']; 
}
