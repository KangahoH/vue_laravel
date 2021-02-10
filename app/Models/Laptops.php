<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptops extends Model
{
    use HasFactory;
    protected $table = "laptops";
    public $timestamps = true;

    protected $fillable = [
		'brand','model','price'
	];
}
