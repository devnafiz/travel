<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;
use Jackiedo\DotenvEditor\Facades\DotenvEditor;
use App\Models\Genral;
use DB;


class GeneralController extends Controller
{
        
    public function index()
    {
      

        $row = Genral::first();
        //$copy = DB::table('genrals')->first()->copyright;
        //dd($copy);

        $env_files = ['APP_NAME' => env('APP_NAME')];

        return view("admin.general.edit", compact("row", "env_files"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      

        $input = array_filter($request->all());
        //dd($input);

        $active = @file_get_contents(public_path() . '/config.txt');

        if (!$active) {
            $putS = 1;
            file_put_contents(public_path() . '/config.txt', $putS);
        }

        $d = \Request::getHost();
         //dd($d );
        $domain = str_replace("www.", "", $d);

       $this->quicksettings($request);

		return $this->verifiedupdate($input,$request);


    }



    //public function

    public function verifiedupdate($input, $request)
    {

     

        $cat = Genral::first();

        $env_keys_save = DotenvEditor::setKeys([
            'APP_NAME' => $request->APP_NAME,
            'APP_URL' => $request->APP_URL,
            'NOCAPTCHA_SECRET' => $request->NOCAPTCHA_SECRET,
            'NOCAPTCHA_SITEKEY' => $request->NOCAPTCHA_SITEKEY,
            'OPEN_EXCHANGE_RATE_KEY' => $request->OPEN_EXCHANGE_RATE_KEY,
            'APP_DEBUG' => isset($request->APP_DEBUG) ? "true" : "false",
            'COD_ENABLE' => isset($request->COD_ENABLE) ? "1" : "0",
            'ENABLE_PRELOADER' => isset($request->ENABLE_PRELOADER) ? "1" : "0",
            'TIMEZONE' => $request->TIMEZONE,
            'MAILCHIMP_APIKEY' => $request->MAILCHIMP_APIKEY,
            'MAILCHIMP_LIST_ID' => $request->MAILCHIMP_LIST_ID,
            
            
            'PRICE_DISPLAY_FORMAT' => $request->PRICE_DISPLAY_FORMAT ? 'comma' : 'decimal',
            'SHOW_IMAGE_INSTEAD_COLOR' => $request->SHOW_IMAGE_INSTEAD_COLOR ? 'true' : 'false',
            'PUSHER_APP_ID' => $request->PUSHER_APP_ID,
            'PUSHER_APP_KEY' => $request->PUSHER_APP_KEY,
            'PUSHER_APP_SECRET' => $request->PUSHER_APP_SECRET,
            'PUSHER_APP_CLUSTER' => $request->PUSHER_APP_CLUSTER
        ]);

        $env_keys_save->save();

       
        if ($request->file('logo') != null) {

              $image = $request->file('logo');
              //dd($image);
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(106,60)->save('backend/general/'.$name_gen);
              $save_url = 'backend/general/'.$name_gen;
              $input['logo'] = $save_url;

            
               // $input['logo'] = $request->logo;

            }

        //dd($input['logo']);
        //dd($request->file('fevicon'));
           //dd($request->right_click);
           
        if (isset($request->right_click)) {
            $input['right_click'] = '1';
        } else {
            $input['right_click'] = '0';
        }
         // dd($input['right_click']);
        

        if (isset($request->inspect)) {
            $input['inspect'] = '1';
        } else {
            $input['inspect'] = '0';
        }

        if (isset($request->login)) {
            $input['login'] = '1';
        } else {
            $input['login'] = '0';
        }

        if (isset($request->guest_login)) {
            $input['guest_login'] = '1';
        } else {
            $input['guest_login'] = '0';
        }

       
           $input['copyright'] =$request->copyright;
           $input['mobile'] =$request->mobile;
           $input['address'] =$request->address;
           $input['f_content'] =$request->f_content;
      

        if ($request->file('preloader')) {
            $dir = 'images/preloader';
            $leave_files = array('index.php');

            foreach (glob("$dir/*") as $file2) {
                if (!in_array(basename($file2), $leave_files)) {
                    unlink($file2);
                }
            }

            $image = $request->file('preloader');
            $img = Image::make($image->path());
            $preloader = 'preloader.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/preloader');
            $img->resize(300, 300, function ($constraint) {
                $constraint->aspectRatio();
            });

            $img->save($destinationPath . '/' . $preloader);
        }

       //dd($input);     

        $cat->update($input);

        //notify()->success(__("Genral Setting Has Been Updated !"));
        return redirect()->back()->with('success',__("Genral Setting Has Been Updated !"));

    }

   
    public function quicksettings(Request $request){

       

        $env = DotenvEditor::setkeys([

            'ENABLE_PRELOADER'  => $request->ENABLE_PRELOADER ? 1 : 0,
            'APP_DEBUG'         => $request->APP_DEBUG ? "true" : "false",
            'COD_ENABLE'        => $request->COD_ENABLE ? 1 : 0,
            'HIDE_SIDEBAR'      => $request->HIDE_SIDEBAR ? 1 : 0,

        ]);

        $env->save();

        $settings = Genral::first();

      
        $settings->right_click                    = $request->right_click ? '1' : '0';
        $settings->inspect                        = $request->inspect ? '1' : '0';
        $settings->login                          =  $request->login ? '1' : '0';
       
        
        $settings->save();

       

        return back();

    }

}
