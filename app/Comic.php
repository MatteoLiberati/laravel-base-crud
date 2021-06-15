<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable=[
        'name',
        'description',
        'image',
        'series',
        'sale_date',
        'price',
        'type',
        'slug',
    ];
}
