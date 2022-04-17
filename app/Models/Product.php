<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
	
	/**
     * Indicates if the model should be timestamped. New Branch Test
     *
     * @var bool
     */
    public $timestamps = true;
	
	protected $fillable = [
        'name', 
        'detail',
		'author',
		'created_at',
		'updated_at',
    ];
}
