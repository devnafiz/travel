<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use DB;

class UserController extends Controller
{
    public function index(){

      $data['all_user']=User::paginate(10);
      return view('admin.user.index',$data);
    }
    public function delete($id){

    	$user=User::find($id);
    	$user->delete();

    	return redirect()->back();
    }
}
