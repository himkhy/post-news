<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Categories;
use App\Tag;
use App\Article;
use App\AdsPost;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

       
        View::share('articleview', Article::orderBy('id', 'DESC')->paginate(8));
        View::share('article', Article::orderBy('id', 'DESC')->paginate(8));
        View::share('categorysssss', Categories::orderBy('id', 'DESC')->where('order_level',1)->get());
        View::share('tagssss', Tag::orderBy('id', 'DESC')->where('order_level',1)->get());

      
      
        View::share('adspressbarbottom', AdsPost::orderBy('id', 'desc')->where('adsposition_id',6)->get());
        View::share('adspressbarcenter', AdsPost::orderBy('id', 'desc')->where('adsposition_id',5)->get());
        View::share('adspressbartop', AdsPost::orderBy('id', 'desc')->where('adsposition_id',4)->get());
        View::share('adstoppress', AdsPost::orderBy('id', 'desc')->where('adsposition_id',3)->get());
    }

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
