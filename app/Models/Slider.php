<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Slider extends Model
{
    use HasFactory;
       use HasTranslations;
      public $translatable = ['heading', 'topheading', 'buttonname', 'des'];

    protected $fillable = [
        'heading', 'des', 'status', 'image', 'category_id', 'child', 'grand_id', 'topheading', 'buttonname', 'buttonlink','btnbgcolor',
    ];
}
