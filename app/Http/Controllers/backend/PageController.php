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

        $data['edit_data']=Page::where('id',$id)->first();

        return view('admin.pages.edit_page',$data);


     }

     public function update(Request $request,$id){

        $news = Page::findOrFail($id);
        $input = array_filter($request->all());

      
        $input['name'] = $request->name;
        $input['des'] = $request->des;
         // $input['buttonname'] = $request->buttonname;
         // dd($input['des']);
        $input['slug'] = Str::slug($request->slug, '-');
            
        $input['status']=$request->status;
       
        $news->update($input);
 
        return redirect()->route('page.all')->with('updated', __('Page  has been updated !'));


     }


     public function delete($id){

         $pages = Page::find($id);

     
       
        $pages = $pages->delete();
        if ($value) {
            session()->flash("deleted", __("Page has been deleted"));
            return redirect()->route('page.all');
        }
     }
}
