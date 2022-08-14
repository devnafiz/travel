<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\News_cat;

class NewsCatController extends Controller
{
     public function index(Request $request){


     	  $category = News_cat::orderBy('position', 'asc')->get();
        return view("admin.category.index", compact("category"));
     }


     public function addCategory(){


     	 return view("admin.category.add_category");
     }



     public function store(Request $request){

     	//dd($request->all());

     	$request->validate(["title" => "required"], [
            "title.required" => __("Category name is required")
        ]);

        $input = array_filter($request->all());

        $input['description'] = $request->description;

        $cat = new News_cat();

        if ($request->image != null) {

            if(!str_contains($request->image, '.png') && !str_contains($request->image, '.jpg') && !str_contains($request->image, '.jpeg') && !str_contains($request->image, '.webp') && !str_contains($request->image, '.gif')){
                    
                return back()->withInput()->withErrors([
                    'image' => __('Invalid image type for category thumbnail')
                ]);

            }

            $input['image'] = $request->image;

        }

        $input['position'] = (News_cat::count() + 1);

        $cat->create($input);

        return back()->with("added", __("Category has been added !"));


     }


     public function edit($id){

     	$data['category']=News_cat::where('id',$id)->first();
     	//dd($data['category']);

      return  view('admin.category.edit_category',$data);

     }


     public function update(Request $request,$id){

     	    $request->validate( 
            [
                "title" => "required"
            ],[
                "title.required" => __("Title is required !")
            ]
        );

        $cat = News_cat::findOrFail($id);

        $category = News_cat::findOrFail($id);
        $input = array_filter($request->all());

        $input['description'] = $request->description;

        if ($request->image) {

            if(!str_contains($request->image, '.png') && !str_contains($request->image, '.jpg') && !str_contains($request->image, '.jpeg') && !str_contains($request->image, '.webp') && !str_contains($request->image, '.gif')){
                    
                return back()->withInput()->withErrors([
                    'image' => __('Invalid image type for category thumbnail')
                ]);

            }

            $input['image'] = $request->image;

        }

        $category->update($input);

        return redirect()->route('news.category.index')->with('updated', __('Category has been updated'));


     }



     public function delete($id){



     }
}
