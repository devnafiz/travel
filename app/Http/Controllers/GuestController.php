<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class GuestController extends Controller
{
     public function changelang(Request $request)
    {
    	dd($request->lang);
        Session::put('changed_language', $request->lang);
    }
}
