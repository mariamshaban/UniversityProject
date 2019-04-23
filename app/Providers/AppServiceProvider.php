<?php

namespace App\Providers;

use App\About;
use App\Setting;
use App\Time;
use App\Article;
use App\Contact;


use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;
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
        //
        $aboutus= About::first();
        view()->share('aboutus', $aboutus);

        $about= About::first();
        view()->share('about', $about);

        $setting= Setting::first();
        view()->share('setting', $setting);

        $university= Setting::first();
        view()->share('university', $university);

        $time= Time::first();
        view()->share('time', $time);

        $contact=Contact::first();
        view()->share('contact', $contact);



        $lastarticles = Article::orderBy('id','DESC')->take(3)->get();
        view()->share('lastarticles', $lastarticles);

    }
}
