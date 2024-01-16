<?php

namespace Bank\App\Controllers;

use Bank\App\App;


class BankController
{
    public function index()
    {
        $number = rand(1, 100);
        
        return App::view('home', [
            'homeNumber' => $number
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