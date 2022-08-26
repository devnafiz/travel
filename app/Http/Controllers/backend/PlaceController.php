<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
Use Auth;
use App\Models\PlaceAttributes;
use App\Models\MultiImage;
use App\Models\Place;
use App\Models\FaqPlace;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Str;
use Image;
use Carbon\Carbon;

class PlaceController extends Controller
{

	 public  function index(){

        $data['all_place'] = DB::table('places')
               ->leftjoin('place_attributes','places.id','place_attributes.place_id')
               ->select('places.*','place_attributes.attr_tag')
               ->where('places.status','1')
               ->orderBy('places.id','desc')
               ->paginate(10);
               //->get();
//dd($data['all_place']);

          return view('admin.place.index',$data);     
       

	 }

   public function addplace(){

        return view('admin.place.add_place');
   }




   public function store(Request $request){
     //dd($request->all());
        $request->validate([

            "heading" => "required|max:190", 

            "main_image" => "required|max:2048"], 
            [

            "heading.required" => __("place heading is required"), 

        ]);
   


         $data = new Place;

         $input = array_filter($request->all());

         $input['heading']  =$request->heading;

         //dd($input['heading']);
         $input['slug'] = Str::slug($request->heading, '-');
         $input['des'] = $request->des;
         $input['type'] = $request->type;
         $input['p_name'] = $request->p_name;
         $input['sale_price'] = $request->sale_price;
         $input['discount_price'] = $request->discount_price;
         $input['location'] = $request->location;
         $input['start_date'] = $request->start_date;
         $input['end_date'] = $request->end_date;
       

        

       //dd($input['slug']);

        $image = $request->file('main_image');
         
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(1200,500)->save('backend/place/'.$name_gen);
        $uploadPath = 'backend/place/'.$name_gen;

       
       
       
        $input['mainimage']= $uploadPath;
        //dd($input['main_image']);
        $data->create($input);

        return redirect()->route('place.all')->with("added", __("Place has been created !"));


   }


    public function edit($id){
          $data['edit_data']=Place::where('id',$id)->first();
          return view('admin.place.edit_place',$data);
    }

    public function update(Request $request,$id){

      //dd($request->all());

         $data=Place::where('id',$id)->first();

         $input = array_filter($request->all());

         $input['heading']  =$request->heading;

         //dd($input['heading']);
         $input['slug'] = Str::slug($request->slug,'-');
         $input['des'] = $request->des;
         $input['type'] = $request->type;
         $input['p_name'] = $request->p_name;
         $input['sale_price'] = $request->sale_price;
         $input['discount_price'] = $request->discount_price;
         $input['location'] = $request->location;
         $input['start_date'] = $request->start_date;
         $input['end_date'] = $request->end_date;
       

        

       //dd($input['slug']);
         if(file_exists($request->file('mainimage'))){
           //unlink(public_path().'backend/place/'.$data->mainimage);
               $image = $request->file('mainimage');
             
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(1200,500)->save('backend/place/'.$name_gen);
            $uploadPath = 'backend/place/'.$name_gen;
           $input['mainimage']= $uploadPath;
         }

       // $image = $request->file('main_image');
       //  
       // $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
       // Image::make($image)->resize(1200,500)->save('backend/place/'.$name_gen);
        //$uploadPath = 'backend/place/'.$name_gen;

       
       
       
       
        //dd($input['main_image']);
        $data->update($input);

        return redirect()->route('place.all')->with("added", __("Place has been created !"));
    }



	 //muti image  add
	  public function addMultiImage($id){
	  	    $data['id']=$id;
            //dd( $data['id']);
	  	return view('admin.place.mutiimage_add',$data);



	  }

	  public function MultiImagestore(Request $request){
	  	  //dd('ok');

               //  $request->validate([
               //   'image' => 'required|mimes:jpeg,png,jpg,zip,pdf|max:2048',
               // ]);
                   $place_id =$request->place_id;
                   //dd($place_id);
              
                   $images=$request->file('image');


                   foreach ($images as $image) {


			         $make_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
			        Image::make($image)->resize(917,1000)->save('backend/place/multi-image/'.$make_name);
			        $uploadPath = 'backend/place/multi-image/'.$make_name;
                   	

                   	 MultiImage::insert([

                              'place_id'=>$place_id,

                              'image' =>$uploadPath,
                              'created_at' => Carbon::now(), 

                   	 ]);
                   }

                   return redirect()->route('place.all')->with('success','Successfully add  image');   



                   
            

	  }

    public function editmutiImage($id){
         $data['edit_data']=MultiImage::where('id',$id)->first();

        return view('admin.place.edit_multiimage',$data);

    }

    public function mutiImagedel($id){

      $img= MultiImage::where('id',$id)->first();

      if($img->image !='' && file_exists(public_path().'/backend/place/multi-image/'.$img->image)){
        unlink(public_path().'/backend/place/multi-image/'.$img->image);

      } 

      $img->delete();

      return redirect()->back()->with('success','Successfully Image deleted');
    }


    public function details(Request $request,$id){

        $data['p_details'] = DB::table('places')
               ->leftjoin('place_attributes','place_attributes.place_id','places.id')
               ->leftjoin('multi_images','multi_images.place_id','places.id')
               ->select('places.*','place_attributes.attr_tag','multi_images.image','multi_images.id as m_id')
               ->where('places.status','1')
               ->where('places.id',$id)
               ->get()
               ->toArray();

               //dd( $data['p_details']);

        return view('admin.place.single_place',$data);   
    }


    
}
