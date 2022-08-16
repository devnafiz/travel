<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PopularDes;
use DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
//use Intervention\Image\ImageManagerStatic as Image;
use App\Models\News;
use App\Models\News_cat;

use Illuminate\Support\Str;
use Image;



class PopularDesController extends Controller
{
    public function index(){

    	$data['all_data']=PopularDes::where(['status'=>'1'])->paginate(10);
        //dd($data['all_news']);

    	return view('admin.destination.index',$data);


    }




    public function addDes(){

           return view('admin.destination.add_des');

        }
     

    public function store(Request $request){
       // dd($request->all());

        $request->validate([

            "title" => "required|max:190", 
            "Pname" => "required|max:190'", 

            'image' => 'required|max:2048'], 
            [

            "title.required" => __("title heading is required"), 

        ]);
        //dd($request->all());
        $data = new PopularDes;

        $input = array_filter($request->all());

        $input['title'] = $request->title;
        $input['Pname'] = $request->Pname;
        $input['des'] = $request->des;
        $input['slug'] = Str::slug($request->name,'-');
       // dd($input['des']);

       

       //dd($input['slug']);

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(1200,500)->save('backend/destination/'.$name_gen);
        $save_url = 'backend/destination/'.$name_gen;


       
       
        $input['image'] = $save_url;
        $input['status']=$request->status;
        $data->create($input);

        return redirect()->route('des.all')->with("added", __("Destination has been created !"));



     }

     public function edit($id){

        $data['edit_data']=PopularDes::where('id',$id)->first();

        return view('admin.destination.edit_des',$data);


     }

     public function update(Request $request,$id){

        $news = PopularDes::findOrFail($id);
        $input = array_filter($request->all());

      
        $$input['title'] = $request->title;
        $input['Pname'] = $request->Pname;
        $input['des'] = $request->des;
        $input['slug'] = Str::slug($request->name,'-');
       // dd($input['des']);

       

       //dd($input['slug']);
         if($request->file('image')!=Null){

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('backend/destination/'.$name_gen);
        $save_url = 'backend/destination/'.$name_gen;


       
       
        $input['image'] = $save_url;

         }

         $input['status']=$request->status;
        $news->update($input);

        return redirect()->route('des.all')->with('updated', __('Destination  has been updated !'));


     }


     public function delete($id){

         $des = PopularDes::find($id);

     
        if ($des->image != '' && file_exists(public_path() . '/backend/destination/' . $des->image)) {
            unlink(public_path() . '/backend/destination/' . $des->image);
        }

        $value = $des->delete();
        if ($value) {
            session()->flash("deleted", __("popular destination has been deleted"));
            return redirect()->route('des.all');
        }
     }
}
