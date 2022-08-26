<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use DB;
use App\Models\User;
use App\Models\Place;
use App\Models\Order;
use App\Notifications\MailNotification;
use Notification;

class IndexController extends Controller
{
      


    public function UserLogout(){
    	Auth::logout();
    	return Redirect()->route('login');
    }


    public function UserProfile(){
    	//dd('ok');
    	$id = Auth::user()->id;
    	$user = User::find($id);
    	return view('profile.user_profile',compact('user'));
    }



    public function UserProfileStore(Request $request){
        $data = User::find(Auth::user()->id);
		$data->name = $request->name;
		$data->email = $request->email;
		$data->phone = $request->phone;
 

		if ($request->file('profile_photo_path')) {
			$file = $request->file('profile_photo_path');
			@unlink(public_path('upload/user_images/'.$data->profile_photo_path));
			$filename = date('YmdHi').$file->getClientOriginalName();
			$file->move(public_path('upload/user_images'),$filename);
			$data['profile_photo_path'] = $filename;
		}
		$data->save();

		$notification = array(
			'message' => 'User Profile Updated Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('dashboard')->with($notification);

    } // end method 


    public function UserChangePassword(){
    	$id = Auth::user()->id;
    	$user = User::find($id);
    	return view('profile.change_password',compact('user'));
    }
 

    public function UserPasswordUpdate(Request $request){

		$validateData = $request->validate([
			'oldpassword' => 'required',
			'password' => 'required|confirmed',
		]);

		$hashedPassword = Auth::user()->password;
		if (Hash::check($request->oldpassword,$hashedPassword)) {
			$user = User::find(Auth::id());
			$user->password = Hash::make($request->password);
			$user->save();
			Auth::logout();
			return redirect()->route('user.logout');
		}else{
			return redirect()->back();
		}


	}// end method

 

	



	




 // Product Seach 
	public function ProductSearch(Request $request){

		$request->validate(["search" => "required"]);

		$item = $request->search;
		// echo "$item";
        $categories = Category::orderBy('category_name_en','ASC')->get();
		$products = Product::where('product_name_en','LIKE',"%$item%")->get();
		return view('frontend.product.search',compact('products','categories'));

	} // end method 


	///// Advance Search Options 

	public function SearchProduct(Request $request){

		$request->validate(["search" => "required"]);

		$item = $request->search;		 
        
		$products = Product::where('product_name_en','LIKE',"%$item%")->select('product_name_en','product_thambnail','selling_price','id','product_slug_en')->limit(5)->get();
		return view('frontend.product.search_product',compact('products'));



	} // end method 



	public function OrderSave(Request $request){
		//dd('ok');
		//if(Auth::check()!=true){
			//redirect()->route('login');
		//}

         $request->validate([


         	"start_date" => "required",
         	"end_date" => "required"



         ]);

         $order = new Order();

         $order->tour_id =$request->place_id;
         $order->type =$request->type;
         $order->amount =$request->amount;
         $order->start_date =$request->start_date;
         $order->end_date =$request->end_date;
         $order->user_id =Auth::user()->id;
         $order->status = '0';
       
         $order->save();




      $user = Auth::user();
  
        $project = [
            'greeting' => 'Hi '.$user->name.',',
            'body' => 'This is the  Booking to you.',
            'thanks' => 'Thank you this is from example.com',
            'actionText' => 'View Order',
            'actionURL' => url('/')
            
        ];
  
        Notification::send($user, new MailNotification($project));
       
         
            $notification = array(
            'message' => 'Order  sent',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

	}


}
