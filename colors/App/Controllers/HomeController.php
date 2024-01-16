<?php

namespace Colors\App\Controllers;

use Colors\App\App;


class HomeController
{
    public function index()
    {
        $number = rand(1, 100);
        
        return App::view('home', [
            'homeNumberIsKurCia' => $number
        ]);
        return '<h1>Home</h1>';
    }

    public function color($color)
    {
        return App::view('home-color', [
            'homeColor' => $color,
            'title' => 'Home sweet home'
        ]);
    }
}