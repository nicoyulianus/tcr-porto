<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // $menus = [
        //     ['name' => 'home', 'url' => '/'],
        //     ['name'=> 'about us','url'=> '/about'],
        //     ['name'=> 'why us ','url'=> '/contact'],
        //     ['name'=> 'our service','url'=> '/contact'],
        //     ['name'=> 'portofolio ','url'=> '/contact'],
        //     ['name'=> 'contact us ','url'=> '/contact'],
        // ];
        // view()->share('menus', $menus);
    }
}
