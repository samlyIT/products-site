<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'pid';

    protected $fillable = [
        'title',
        'price',
        'qty'
    ];

    //
}