<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currencey extends Model
{
    use HasFactory;
     protected $fillable = [

     		'currencey_code','value',

     ];
}
