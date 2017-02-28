<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
  *   
    *public function boot()
   * {
    *    //导航展示
   *     $navData = DB::table('tcs_header')->orderBy('header_id')->get();
*
   *     view()->share('nav', $navData);
   * }
*/
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
