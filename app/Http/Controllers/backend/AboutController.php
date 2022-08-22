<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use DB;
use Auth;
use Illuminate\Support\Str;
use Image;

class AboutController extends Controller
{
   public function index(){

    	$data['about_us']=About::where(['status'=>'1'])->first();
        //dd($data['all_news']);

    	return view('admin.overview.index',$data);


    }




    public function add(){

           return view('admin.overview.add_about');

        }
     

    public function store(Request $request){
       // dd($request->all());

        $request->validate([

            "title" => "required|max:390", 
           

            'image' => 'required|max:2048'] 
            );
        //dd($request->all());
        $data = new About();

        $input = array_filter($request->all());

        $input['title'] = $request->title;
      
        $input['des'] = $request->des;
        $input['slug'] = Str::slug($request->title, '-');
      
     

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(1200,500)->save('backend/overview/'.$name_gen);
        $save_url = 'backend/overview/'.$name_gen;


       
       
        $input['image'] = $save_url;
        $input['status']=$request->status;
        $data->create($input);

        return redirect()->route('about.all')->with("added", __("Over view has been created !"));



     }

     public function edit($id){

        $data['edit_data']=About::where('id',$id)->first();

        return view('admin.overview.edit_about',$data);


     }

     public function update(Request $request,$id){

        $news = About::findOrFail($id);
        $input = array_filter($request->all());

      
        $input['title'] = $request->title;
      
        $input['des'] = $request->des;
        $input['slug'] = Str::slug($request->title, '-');
       // dd($input['des']);

       

       //dd($input['slug']);
         if($request->file('image')!=Null){

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('backend/overview/'.$name_gen);
        $save_url = 'backend/overview/'.$name_gen;


       
       
        $input['image'] = $save_url;

         }

         $input['status']=$request->status;
        $news->update($input);

        return redirect()->route('about.all')->with('updated', __('Silder  has been updated !'));


     }


     public function delete($id){

         $about = About::find($id);

     
        if ($about->image != '' && file_exists(public_path() . '/backend/overview/' . $about->image)) {
            unlink(public_path() . '/backend/overview/' . $about->image);
        }

        $value = $about->delete();
        if ($value) {
            session()->flash("deleted", __("Overview has been deleted"));
            return redirect()->route('about.all');
        }
     }
}
