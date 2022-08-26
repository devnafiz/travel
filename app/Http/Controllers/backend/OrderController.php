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
                          ->orderBy('orders.id','desc')
                          ->where('orders.status','0')
                          ->paginate(10);
                     //dd( $data['all_data']);     

        return view('admin.order.index',$data);
     }

     public function activeOrder(){
        $data['all_data']=DB::table('orders')
                          ->leftjoin('places','orders.tour_id','places.id')
                          ->leftjoin('users','orders.user_id','users.id')
                          ->select('orders.*','places.heading','users.name','users.phone','users.email')

                          ->where('orders.status','1')
                          ->get();
                     //dd( $data['all_data']);     

        return view('admin.order.index',$data);

     }
      public function CancelOrder(){
        $data['all_data']=DB::table('orders')
                          ->leftjoin('places','orders.tour_id','places.id')
                          ->leftjoin('users','orders.user_id','users.id')
                          ->select('orders.*','places.heading','users.name','users.phone','users.email')

                          ->where('orders.status','2')
                          ->get();
                     //dd( $data['all_data']);     

        return view('admin.order.index',$data);

     }


     public function orderDetails(Request $request,$id){

        $data['data_details']=DB::table('orders')
                          ->leftjoin('places','orders.tour_id','places.id')
                          ->leftjoin('users','orders.user_id','users.id')
                          ->select('orders.*','places.heading','users.name','users.phone','users.email')

                          ->where('orders.id',$id)
                          ->first();
                          //dd( $data['data_details']);

              return view('admin.order.order_details',$data);            


     }

    public function orderStatus(Request $request,$id){

       DB::table('orders')->where('id',$id)->update(['status'=>$request->status]);
       return redirect()->back()->with('success','updated status');
    } 


  //seo

    public function seo(){
    	//dd('ok');

        $seo =DB::table('seos')->first();
        //dd($seo);

        return view('admin.seo.index',compact('seo'));
    }

     public function updateSeo(Request $request){
      //dd($request->id);

            $id=$request->id;

            $data=array();
            $data['meta_title']=$request->meta_title;
            $data['mata_author']=$request->mata_author;
            $data['meta_tag']=$request->meta_tag;
            $data['meta_description']=$request->meta_description;
            $data['google_analytics']=$request->google_analytics;
            $data['bing_analytics']=$request->bing_analytics;
            
          //dd($data);

             $row= DB::table('seos')->where('id',$id)->first();
            if( $row==null){
                 DB::table('seos')->insert($data);
                  $notification = array(
            'message' => 'SEO insert Successfully',
            'alert-type' => 'success'
        );
            }else{
               DB::table('seos')->where('id',$id)->update($data);
                $notification = array(
            'message' => 'SEO update Successfully',
            'alert-type' => 'success'
        );
            }
           
            

        return redirect()->back()->with($notification);

     }
}
