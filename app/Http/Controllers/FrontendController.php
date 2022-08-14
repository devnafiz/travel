<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use DB;
use App\Models\Place;
use App\Models\News;
use App\Models\News_cat;

class FrontendController extends Controller
{
    

    public function index(Request $request){

       $data['place']= Place::where('status','1')->orderBy('id','desc')->limit(4)->get();
       //dd($data['place']);

     return view('frontend.home',$data);

    }

    //news 

    public function latestNews(Request $request){

    	 $data['news']=News::where('status','1')->paginate(9);
    	 $data['cat'] =News_cat::all();
    	 //dd($data['news']);

    	 return view('frontend.news',$data);
    }

     public function newsDetails(Request $request,$slug){
          $data['news']=News::where('status','1')->paginate(6);
         $data['news_details']=News::where('slug',$slug)->first();
         $data['cat'] =News_cat::all();
         //dd($data['news']);

         return view('frontend.news_details',$data);
    }


}
