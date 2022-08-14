<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\Page;


use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PageController extends Controller
{
     
       public function index(){

    	$data['all_page']=Page::where(['status'=>'1'])->paginate(10);
        //dd($data['all_news']);

    	return view('admin.pages.index',$data);


    }




    public function addPage(){


    
      //cd dd($data['news_cat']);

      return view('admin.pages.add_page');

    }
     public function store(Request $request){
        //dd($request->all());

        $request->validate([

            "name" => "required | max:190" ],
             
           
            [

            "name.required" => __("Page name is required"), 

        ]);

        $page = new Page;

        $input = array_filter($request->all());

        $input['name'] = $request->name;
         $input['des'] = $request->des;

        $input['slug'] = Str::slug($request->name, '-');
       // dd($input['des']);

       

       //dd($input['slug']);

        $input['status']=$request->status;
        $page->create($input);

        return redirect()->route('page.all')->with("added", __("Page has been created !"));



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
         $input['buttonname'] = $request->buttonname;
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
