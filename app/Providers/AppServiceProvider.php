<?php

namespace  App\Providers;


use App\Models\Allcountry;
use App\Models\AutoDetectGeo;


use  App\Models\Config;

use  App\Models\Genral;
use  App\Models\Location;
//use  App\Models\Mostsearched;
use  App\Models\MultiCurrency;
use  App\Models\Seo;
use  App\Models\Social;
use App\Models\News_cat;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;


use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      // $title = DB::table('seos')->find('1')->project_name;
        
        if(env('FORCE_HTTPS') == '1'){
            \URL::forceScheme('https');
        }


        Paginator::useBootstrap();
        
        Schema::defaultStringLength(125);
         Blade::directive('infloat', function ($expression) {
            return "<?php echo sprintf('%.2f',$expression); ?>";
        });

          try {

           // \DB::connection()->getDatabaseName();

            $data = array();
              //dd( Schema::hasTable('seos'));
            if (Schema::hasTable('genrals') && Schema::hasTable('seos')) {

                $defCurrency = DB::table('multi_currencies')->where('default_currency', '=', 1)->first();
             //dd($defCurrency) ;
                $rightclick = DB::table('genrals')->find('1')->right_click ;

                $guest_login = DB::table('genrals')->find('1')->guest_login;
               

                $inspect =DB::table('genrals')->find('1')->inspect;
                 
                $seoset = Seo::first();
                 //dd($seoset);
                $title =Genral::first()->project_name;
                // DB::table('seos')->find('1')->project_name;
                //dd($title);
               

                $fevicon = Genral::first()->fevicon;
                //dd($fevicon);
                //DB::table('genrals')->find('1')->fevicon;
              

                $Copyright =  Genral::first()->copyright;

                //DB::table('genrals')->find('1')->copyright;
                 //dd($Copyright);
                $front_logo =Genral::first()->logo;
                //DB::table('genrals')->find('1')->logo;
                //dd($front_logo);
               // $price_login = Genral::first()->login;
                $genrals_settings = Genral::first();
                // dd($genrals_settings);
              
                $config = Config::first();
              

              
             

             

                

                $data = array(
                    

                    'defCurrency' => $defCurrency ?? '',
                    'rightclick' => $rightclick ?? '',
                    'guest_login' => $guest_login ?? '',
                    'inspect' => $inspect ?? '',
                    'seoset' => $seoset ?? '',
                    'title' => $title ?? '',
                    'fevicon' => $fevicon ?? '',
                    'Copyright' => $Copyright ?? '',
                    'front_logo' => $front_logo ?? '',
                    //'price_login' => $price_login ?? '',
                    'genrals_settings' => $genrals_settings ?? '',
                   
                    'config' => $config ?? '',
                
                    'multiCurrency' => MultiCurrency::all(),
                    'langauges' => DB::table('locales')->where('status', '=', 1)->get(),

                    //'auto' => AutoDetectGeo::first(),
                   
                  
                  'selected_lang' => selected_lang() ?? config('translatable.fallback_locale')
                );

             //dd($data['Copyright']);

               
                

                

                
            
              
             

                View::composer('*', function ($view) use ($data) {
                    //dd($data);
                   

                    try {
                        $view->with([
                            'selected_language' => $data['selected_lang'],
                            
                           
                          
                            'seoset' => $data['seoset'],
                           
                            'defCurrency' => $data['defCurrency'],
                          
                            
                           
                            'configs' => $data['config'],
                            'rightclick' => $data['rightclick'],
                            'inspect' => $data['inspect'],
                            'title' => $data['title'],
                            'fevicon' => $data['fevicon'],
                          
                            
                            'guest_login' => $data['guest_login'],
                            'Copyright' => $data['Copyright'],
                          
                            'genrals_settings' => $data['genrals_settings'],
                         
                           
                          
                          
                            'multiCurrency' => $data['multiCurrency'],
                            'langauges' => $data['langauges'],
                           
                        ]);

                    } catch (\Exception $e) {

                    }

                });

            }

        } catch (\Exception $e) {

        }




       

    }
}
