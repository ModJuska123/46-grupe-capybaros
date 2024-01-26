<?php

namespace Bank\App\Controllers;

use Bank\App\App;
use App\DB\FileBase;
use App\DB\MariaBase;
use Bank\App\Message;


class AccountController {
    

    public function index($request) {

        // $writer = new FileBase('accounts');      //pakeiciame, kad mach-intu arba file arba maria
        $writer = match (DB) {                      //sukuriame, kad mach-intu arba file arba maria
            'file' => new FileBase('accounts'),
            'maria' => new MariaBase('accounts'),
        };
        $accounts = $writer->showAll();

        $sort = $request['sort'] ?? null;           //sorto pradzia...
        if ($sort == 'size-asc') {
            usort($accounts, fn($a, $b) => $a->vardas_pavarde <=> $b->vardas_pavarde);
            $sortValue = 'size-desc';
        } elseif($sort == 'size-desc') {
            usort($accounts, fn($a, $b) => $b->vardas_pavarde <=> $a->vardas_pavarde);
            $sortValue = 'size-asc';
        } else {
            $sortValue = 'size-asc';
        }                                            //sorto pabaiga...

        return App::view('accounts/index', [
            'title' => 'All account',
            'accounts' => $accounts,
            'sortValue' => $sortValue
        ]);
    }
    

    public function create() {
        return App::view('accounts/create', 
        ['title' => 'Create new account'
    ]);
    }


    public function store($request) {
        $vardas_pavarde = $request['vardas_pavarde'] ?? null;
        $akId = $request['akId'] ?? null;
// var_dump($akId);
// die;

        $iban = $request['iban'] ?? null;            
        // $balance = $request['balance'] ?? null;  
        
        
        // if(strlen($fname) < 4 || strlen($lname) < 4){
        //     Message::get()->set('danger', 'Vardas ir pavardė turi būti ilgesni nei 3 simboliai');
        //     return App::redirect('create');
        // }



        // $writer = new FileBase('accounts');      //pakeiciame, kad mach-intu arba file arba maria
        $writer = match (DB) {                      //sukuriame, kad mach-intu arba file arba maria
            'file' => new FileBase('accounts'),
            'maria' => new MariaBase('accounts')
        };

        $writer->create((object) [
            'vardas_pavarde' => $vardas_pavarde,
            'akId' =>  $akId,
            'iban' => "LT8970440" . rand(10000000000, 99999999999),
            'balance' => 0
        ]);

        Message::get()->set('success', 'New account was created');

        return App::redirect('accounts');
    }

    public function destroy($id) {

       // $writer = new FileBase('accounts');      //pakeiciame, kad mach-intu arba file arba maria
       $writer = match (DB) {                      //sukuriame, kad mach-intu arba file arba maria
        'file' => new FileBase('accounts'),
        'maria' => new MariaBase('accounts')
       };

        $writer->delete($id);

        Message::get()->set('danger', 'Account was deleted');

        return App::redirect('accounts');
    }
    
    public function edit($id) {

        // $writer = new FileBase('accounts');      //pakeiciame, kad mach-intu arba file arba maria
        $writer = match (DB) {                      //sukuriame, kad mach-intu arba file arba maria
            'file' => new FileBase('accounts'),
            'maria' => new MariaBase('accounts')
            };

        $account = $writer->show($id);

        return App::view('accounts/edit', [
            'title' => 'Edit account',
            'account' => $account
        ]);
    }

    public function update($id, $request) {
        
        // $writer = new FileBase('accounts');      //pakeiciame, kad mach-intu arba file arba maria
        $writer = match (DB) {                      //sukuriame, kad mach-intu arba file arba maria
            'file' => new FileBase('accounts'),
            'maria' => new MariaBase('accounts')
        };

        $vardas_pavarde = $request['vardas_pavarde'] ?? null;
        $akId = $request['akId'] ?? null;
    
        
        $userData = $writer->show($id);
        $userData->vardas_pavarde = $vardas_pavarde;
        $userData->akId = $akId;
      
        $writer->update($id, $userData);

        Message::get()->set('warning', 'Account was adjusted');

        return App::redirect('accounts');
    }

    public function withdraw($id)
    {
        // $writer = new FileBase('accounts');      //pakeiciame, kad mach-intu arba file arba maria
        $writer = match (DB) {                      //sukuriame, kad mach-intu arba file arba maria
            'file' => new FileBase('accounts'),
            'maria' => new MariaBase('accounts')
        };

        $account = $writer->show($id);

        return App::view('accounts/withdraw', [
            'title' => 'Withdraw money',
            'account' => $account
        ]);
    }

    public function updateWithdraw($id, $request)
    {
        $withdraw = $request['withdraw'];
        // $writer = new FileBase('accounts');      //pakeiciame, kad mach-intu arba file arba maria
        $writer = match (DB) {                      //sukuriame, kad mach-intu arba file arba maria
            'file' => new FileBase('accounts'),
            'maria' => new MariaBase('accounts')
        };

        $userData = $writer->show($id);

        if($userData->balance < $withdraw){
            Message::get()->set('danger', 'Not posible to withdraw then limits established (0 EUR)');
            return App::redirect('accounts'); 
        }
        $userData->balance -= $withdraw;
        
        $writer->update($id, $userData);

        Message::get()->set('danger', "$withdraw" . 'EUR was withdrawn from ' . "$userData->vardas_pavarde" . " account. ");

        return App::redirect('accounts');
        }
    
    public function addFunds($id) 
    {
    
       // $writer = new FileBase('accounts');      //pakeiciame, kad mach-intu arba file arba maria
       $writer = match (DB) {                      //sukuriame, kad mach-intu arba file arba maria
        'file' => new FileBase('accounts'),
        'maria' => new MariaBase('accounts')
    };

        $accounts = $writer->show($id);
        return App::view('accounts/addFunds', [
            'title' => 'Add Funds',
            'accounts' => $accounts
        ]);
    }
        
    public function updateAdd ($id, $request)
    {
    // if (!AccountUpdateRequest::validate($request)) {
    //     return App::redirect("accounts/index");
    // }
        $addmoney = $request['addmoney'] ?? null;

    // $writer = new FileBase('accounts');      //pakeiciame, kad mach-intu arba file arba maria
    $writer = match (DB) {                      //sukuriame, kad mach-intu arba file arba maria
        'file' => new FileBase('accounts'),
        'maria' => new MariaBase('accounts')
    };
    $userData = $writer->show($id);
    $userData->balance += $addmoney;
    
    $writer->update($id, $userData);
    Message::get()->set('success', "$addmoney" . 'EUR was added to ' . "$userData->vardas_pavarde" . " account.");

    return App::redirect('accounts');
    }
}