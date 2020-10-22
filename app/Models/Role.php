<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	use HasFactory; 

	protected $fillable = [ 
    	'name',
    ];

    public function users(){ // dit kan je alles noemen
        return $this->hasMany('App\Models\User');
    }
    
}
