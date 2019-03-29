<?php

namespace App\Providers;

use App\Announcement;
use App\Menus;
use App\News;
use App\References;
use App\Solitions;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        Schema::defaultStringLength(191);
        //view share
        $solutions = Solitions::all();
        $menus = Menus::all();
        $news = News::all();
        $announcement = Announcement::all();
        $references = References::all();
        View::Share([
            'solutions'     => $solutions,
            'menus'         => $menus,
            'news'          => $news,
            'announcement'  => $announcement,
            'references'    => $references,
        ]);

    }
}
