<?php

namespace Bank\App\Controllers;

use Bank\App\App;
use App\DB\FileBase;

class AccountController {
    
    public function index() {
        $writer = new FileBase('acounts');
        $accounts = $writer->showAll();

        return App::view('accounts/index', [
            'title' => 'All account',
            'accounts' => $accounts
        ]);
    }
    
    public function create() {
        return App::view('accounts/create');
    }

    public function store($request) {
        $vardas_pavarde = $request['vardas_pavarde'] ?? null;
        $akId = $request['akId'] ?? null;

        $writer = new FileBase('accounts');
        $writer->create((object) [
            'vardas_pavarde' => $vardas_pavarde,
            'akId' =>  $akId
        ]);

        return App::redirect('accounts');
    }
}