<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
    	'title',
    	'description',
    ];
    public function product(){
        return $this->belongsTo('App\Models\Product');
    }
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
}
