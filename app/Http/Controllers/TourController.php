<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;

class TourController extends Controller
{
    public function index(){

    	dd('ok');
    }


    public function single_place($id){
    	$data['place']=Place::where('id',$id)->first();
    	//dd($data['place']);

    	return view('frontend.single_tour',$data);
    }
}
