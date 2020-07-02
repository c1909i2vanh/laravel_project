<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table ='product';

    protected $fillable =['name','image','price','content','description','status','unit','meta_title'];
}
