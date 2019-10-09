<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Name
    protected $table='products';
    //Primary Key
    public $primaryKey='productID';
    //Timestamps
    public $timestamps=true;
}

