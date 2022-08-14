<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News_cat extends Model
{
    use HasFactory;
    public $translatable = ['title','description'];
    protected $table ='news_cats';

	protected $fillable = [
		'title','description','status','image','featured','icon','position'
	];
}
