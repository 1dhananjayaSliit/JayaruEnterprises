<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;


class Product extends Model
{
    use HasFactory;


//class Product extends Eloquent
//{
//    protected $connection = 'mongodb';
//
//    protected $collection = 'products';
//
//    protected $fillable =[
//        'title', 'description', 'image', 'price'
//    ];


}
