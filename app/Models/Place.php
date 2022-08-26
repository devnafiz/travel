<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Place extends Model
{
    use HasFactory;

   
   
    protected $fillable =['heading','des','mainimage','type','p_name','slug','sale_price','discount_price','location','long_des','feature','start_date','end_date'];


    public function images(){

     return $this->hasMany(MultiImage::class,'place_id','id');
    }
}
