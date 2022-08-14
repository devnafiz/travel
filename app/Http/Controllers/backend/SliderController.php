<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

use Auth;

use DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
//use Intervention\Image\ImageManagerStatic as Image;
use App\Models\News;
use App\Models\News_cat;

use Illuminate\Support\Str;
use Image;

class SliderController extends Controller
{
    
     public function index(){

    	$data['all_slider']=Slider::where(['status'=>'1'])->paginate(10);
        //dd($data['all_news']);

    	return view('admin.slider.index',$data);


    }




    public function addSlider(){


    
      //cd dd($data['news_cat']);

      return view('admin.slider.add_slider');

    }
     public function store(Request $request){
        //dd($request->all());

        $request->validate([

            "heading" => "required | max:190'", 
              "topheading" => "required | max:190'", 

            'image' => 'required | max:1000'], 
            [

            "heading.required" => __("Slider heading is required"), 

        ]);

        $slider = new Slider;

        $input = array_filter($request->all());

        $input['heading'] = $request->heading;
         $input['topheading'] = $request->topheading;
         $input['	buttonname'] = $request->buttonname;
       // dd($input['des']);

       

       //dd($input['slug']);

         $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('backend/slider/'.$name_gen);
        $save_url = 'backend/slider/'.$name_gen;


       
       
        $input['image'] = $save_url;
        $input['status']=$request->status;
        $slider->create($input);

        return redirect()->route('news.all')->with("added", __("Slider has been created !"));



     }

     public function edit($id){

        $data['edit_data']=Slider::where('id',$id)->first();

        return view('admin.slider.edit_slider',$data);


     }

     public function update(Request $request,$id){

         $news = Slider::findOrFail($id);
        $input = array_filter($request->all());

      
         $input['heading'] = $request->heading;
         $input['topheading'] = $request->topheading;
         $input['	buttonname'] = $request->buttonname;
       // dd($input['des']);

       

       //dd($input['slug']);
         if($request->file('image')!=Null){

              $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('backend/slider/'.$name_gen);
        $save_url = 'backend/slider/'.$name_gen;


       
       
        $input['image'] = $save_url;

         }

       
        $news->update($input);

        return redirect()->route('slider.all')->with('updated', __('Silder  has been updated !'));


     }


     public function delete($id){

         $slider = Slider::find($id);

     
        if ($slider->image != '' && file_exists(public_path() . '/backend/slider/' . $slider->image)) {
            unlink(public_path() . '/backend/slider/' . $slider->image);
        }

        $value = $slider->delete();
        if ($value) {
            session()->flash("deleted", __("slider has been deleted"));
            return redirect()->route('slider.all');
        }
     }
}
