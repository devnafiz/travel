<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\models\Language;
use Session;
use DB;
use Auth;


class SwitchLangauge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if (!Session::has('changed_language')) {

           try{
                $defLang = Language::where('def','=',1)->first();
                
                if(isset($defLang)){
                    Session::put('changed_language', str_replace('_', '-', $defLang->lang_code));
                }
                else{
                    Session::put('changed_language', 'en');
                }
           }catch(\Exception $e){
                Session::put('changed_language', 'en');
           }

        }

        App::setLocale(Session::get('changed_language'));
        return $next($request);
    }
    
}
