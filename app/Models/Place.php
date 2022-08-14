<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Place extends Model
{
    use HasFactory;

    use HasTranslations;
    protected $translatable =['heading','des','location'];
    protected $fillable =['heading','des','mainimage','type','p_name','sale_price','discount_price','location','start_date','end_date'];


    public function images(){

     return $this->hasMany(MultiImage::class,'place_id','id');
    }
}
