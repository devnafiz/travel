<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Genral extends Model
{
    use HasFactory;

    use HasTranslations;

	public $translatable = ['project_name','title'];

    protected $fillable=[
	
		'project_name','email','title','currency_code','currency_symbol','pincode','logo','address','mobile','store_owner','login','status','copyright','inspect','fevicon','guest_login','f_content','captcha_enable','otp_enable','email_verify_enable'

	];
}
