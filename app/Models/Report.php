<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Report extends Eloquent
{
    protected $connection = 'mongodb';

    protected $collection = 'reports';


    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    protected $fillable = [

        'billNo', 'itemNo', 'reason'

    ];
}
