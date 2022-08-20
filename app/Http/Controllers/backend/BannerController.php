<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

use DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
//use Intervention\Image\ImageManagerStatic as Image;
use App\Models\News;
use App\Models\News_cat;

use Illuminate\Support\Str;
use Image;
use App\Models\Banner;


class BannerController extends Controller
{
    public function index(){

    	$data['all_banner']=Banner::where(['status'=>'1'])->paginate(10);
        //dd($data['all_news']);

    	return view('admin.banner.index',$data);


    }




    public function addbanner(){

           return view('admin.banner.add_banner');

        }
     

    public function store(Request $request){

       // dd($request->all());
    	$banner=Banner::where(['cat'=>$request->cat])->first();
    	if(!empty($banner)){
    		return redirect()->back();
    	}

        $request->validate([

            "cat" => "required|max:190", 
         

            'image' => 'required|max:2048'], 
           );
        //dd($request->all());
        $slider = new Banner;

        $input = array_filter($request->all());

        $input['cat'] = $request->cat;
     
       // dd($input['des']);

       

       //dd($input['slug']);

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(1200,500)->save('backend/banner/'.$name_gen);
        $save_url = 'backend/banner/'.$name_gen;


       
       
        $input['image'] = $save_url;
        $input['status']=$request->status;
        $slider->create($input);

        return redirect()->route('banner.all')->with("added", __("Banner has been created !"));



     }

     public function edit($id){

        $data['edit_data']=Banner::where('id',$id)->first();

        return view('admin.banner.edit_banner',$data);


     }

     public function update(Request $request,$id){


        $banner = Banner::findOrFail($id);
        $input = array_filter($request->all());

      
        $input['cate'] = $request->cat;
     
       // dd($input['des']);

       

       //dd($input['slug']);
         if($request->file('image')!=Null){

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(1200,500)->save('backend/banner/'.$name_gen);
        $save_url = 'backend/banner/'.$name_gen;


       
       
        $input['image'] = $save_url;

         }

         $input['status']=$request->status;
        $banner->update($input);

        return redirect()->route('banner.all')->with('updated', __('Banner  has been updated !'));


     }


     public function delete($id){

         $banner = Banner::find($id);

     
        if ($banner->image != '' && file_exists(public_path() . '/backend/banner/' . $banner->image)) {
            unlink(public_path() . '/backend/banner/' . $banner->image);
        }

        $value = $banner->delete();
        if ($value) {
            session()->flash("deleted", __("banner has been deleted"));
            return redirect()->route('banner.all');
        }
     }
}
