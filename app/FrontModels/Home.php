<?php

namespace App\FrontModels;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
	  protected $fillable = [
        'name',
        'description',
		'image',
		'price',
        'status'
    ];
   protected $table = 'products';
}
