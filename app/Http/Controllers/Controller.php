<?php

namespace App\Http\Controllers;

class Controller
{
    public function index()
    {
        $data = [
            ['name' => 'home', 'url' => '/'],
            ['name'=> 'about us','url'=> '/about'],
            ['name'=> 'why us ','url'=> '/contact'],
            ['name'=> 'our service','url'=> '/service'],
            ['name'=> 'portfolio ','url'=> '/portfolio'],
            ['name'=> 'contact us ','url'=> '/contact'],
        ];
        return view('pages.welcome', compact('data'));
    }
}