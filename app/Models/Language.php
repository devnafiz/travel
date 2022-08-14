<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    protected $table = 'locales';

    protected $fillable = ['lang_code','name','def','rtl_available'];

    public $timestamps = false;
}
