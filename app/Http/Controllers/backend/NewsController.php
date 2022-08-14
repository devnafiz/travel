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



class NewsController extends Controller
{
    public function index(){

    	$data['all_news']=News::where(['status'=>'1'])->orderby('id','desc')->paginate(10);
        //dd($data['all_news']);

    	return view('admin.news.index',$data);


    }




    public function addNews(){


      $data['news_cat']=News_cat::where(['status'=>'1'])->get();
      //cd dd($data['news_cat']);

      return view('admin.news.news_add',$data);

    }
     public function store(Request $request){
       // dd($request->all());

        $request->validate([

            "heading" => "required|max:250", 

            'image' => 'required|max:2048'], 
            [

            "heading.required" => __("Slider heading is required"), 

        ]);

        $blog = new News;

        $input = array_filter($request->all());
        $input['heading']=$request->heading;

        $input['des'] = $request->des;
       // dd($input['des']);

        $input['slug'] = Str::slug($request->heading, '-');
        $input['cat_id'] = $request->cat_id;
        //$input['user'] = Auth::admin();

      // dd($input['user']);

         $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('backend/news/'.$name_gen);
        $save_url = 'backend/news/'.$name_gen;


       
       
        $input['image'] = $save_url;
        $blog->create($input);

        return redirect()->route('news.all')->with("added", __("Blog has been created !"));



     }

     public function edit($id){

        $data['edit_data']=News::where('id',$id)->first();

        return view('admin.news.news_edit',$data);


     }

     public function update(Request $request,$id){

         $news = News::findOrFail($id);
        $input = array_filter($request->all());

      
          $input['image'] = $request->image;

        $input['des'] = $request->des;
        $input['slug'] = Str::slug($request->heading, '-');


         $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('backend/news/'.$name_gen);
        $save_url = 'backend/news/'.$name_gen;
         $input['image'] = $save_url;
        $news->update($input);

        return redirect()->route('news.all')->with('updated', __('Blog post has been updated !'));


     }


     public function delete($id){

         $news = News::find($id);

     
        if ($news->image != '' && file_exists(public_path() . '/backend/news/' . $news->image)) {
            unlink(public_path() . '/backend/news/' . $news->image);
        }

        $value = $news->delete();
        if ($value) {
            session()->flash("deleted", __("News has been deleted"));
            return redirect()->route('news.all');
        }
     }
}
