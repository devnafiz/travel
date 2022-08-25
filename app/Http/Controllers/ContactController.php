<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;


class ContactController extends Controller
{
     public function index(){

     	return view('frontend.contact');
     }

     public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }

    public function ContactSave(Request $request){

      $request->validate([
           'name'=>'required|max:250',
           'email'=>'required|email',
           'phone'=>'required|max:13',
           'message'=>'required|max:500'


      ]);

       $data= new Contact();

       $data->name =$request->name;
       $data->email =$request->email;
       $data->phone =$request->phone;
       $data->country =$request->country;
       $data->message =$request->message;

       $data->save();
       

       return redirect()->back()->with('success','Successfully  sent message');




    }
}
