<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [
    	'program_name',
    	'date',
    	'department',
    	'scholarship',
    	'criteria',
    	'image'
    ];
}
