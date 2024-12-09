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
        $menus = [
            ['name' => 'Home', 'url' => '/'],
            ['name'=> 'About Us','url'=> '/about'],
            ['name'=> 'Why us ','url'=> '/contact'],
            ['name'=> 'Our Service','url'=> '/contact'],
            ['name'=> 'Portofolio ','url'=> '/contact'],
            ['name'=> 'Contact Us ','url'=> '/contact'],
        ];
        view()->share('menus', $menus);
    }
}
