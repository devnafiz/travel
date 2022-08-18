<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\Order;


class OrderController extends Controller
{
  
     public  function index(){

        $data['all_data']=DB::table('orders')
                          ->leftjoin('places','orders.tour_id','places.id')
                          ->leftjoin('users','orders.user_id','users.id')
                          ->select('orders.*','places.heading','users.name','users.phone','users.email')

                          ->where('orders.status','0')
                          ->get();
                     //dd( $data['all_data']);     

        return view('admin.order.index',$data);
     }

  //seo

    public function seo(){
    	//dd('ok');

        $seo =DB::table('seos')->first();
        //dd($seo);

        return view('admin.seo.index',compact('seo'));
    }

     public function updateSeo(Request $request){

            $id=$request->id;

            $data=array();
            $data['meta_title']=$request->meta_title;
            $data['mata_author']=$request->mata_author;
            $data['meta_tag']=$request->meta_tag;
            $data['meta_description']=$request->meta_description;
            $data['google_analytics']=$request->google_analytics;
            $data['bing_analytics']=$request->bing_analytics;
            

            DB::table('seos')->where('id',$id)->update($data);
             $notification = array(
            'message' => 'SEO update Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

     }
}
