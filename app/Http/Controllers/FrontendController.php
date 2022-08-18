<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use DB;
use App\Models\Place;
use App\Models\News;
use App\Models\News_cat;
use App\Models\Page;
use App\Models\Slider;
use App\Models\Map;
use App\Models\PopularDes;

class FrontendController extends Controller
{
    

    public function index(Request $request){
        $data['lang'] = session()->get('changed_language');
        $data['sliders']= Slider::where('status','1')->orderBy('id','desc')->limit(8)->get();
        $data['maps']= Map::where('status','1')->orderBy('id','desc')->limit(5)->get();
          $data['p_des']= PopularDes::where('status','1')->orderBy('id','desc')->limit(3)->get();
        $data['news']=News::where('status','1')->orderBy('id','desc')->limit(3)->get();
          //dd($data['news']);

        $data['place']= Place::where('status','1')->orderBy('id','desc')->limit(4)->get();
       //dd($data['place']);

     return view('frontend.home',$data);

    }

    //news 

    public function latestNews(Request $request){
         $data['lang'] = session()->get('changed_language');

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

    public function pageDetails(Request $request,$slug){

          $data['page']=Page::where('slug',$slug)->first();

          return view('frontend.page',$data);

    }


    public function HotelBooking(Request $request){
             $data['hotels']=Place::where('status','1')->where('type','hotel')->orderBy('id','desc')->paginate(9);
             //dd($data['hotels']);


             return view('frontend.hotel.index',$data);


    }

    public function TourBooking(Request $request){
             $data['tours']=Place::where('status','1')->where('type','tour')->orderBy('id','desc')->paginate(9);
             //dd($data['hotels']);


             return view('frontend.tour.index',$data);


    }

    public function singleDestination(Request $request,$slug){
         $data['hotels']=Place::where('status','1')->where('type','hotel')->orderBy('id','desc')->limit(5)->get();
        
          $data['p_des']= PopularDes::where('status','1')->orderBy('id','desc')->limit(3)->get();
         //dd( $data['hotels']);

         $data['destination']=PopularDes::where('slug',$slug)->first();
        return view('frontend.single_destination',$data);
    }


}
