<?php
namespace Bank\App;

use Bank\App\Controllers\BankController;
use Bank\App\Controllers\AccountController;
use Bank\App\Controllers\LoginController;
use Bank\App\Message;
use Bank\App\Auth;


class App
{
    public static function run()
    {
    $server = $_SERVER['REQUEST_URI']; 
    $server = preg_replace('/\?.*$/', '', $server);
    $url = explode('/', $server);
    array_shift($url);
    
    return self::router($url);
}


private static function router($url)
{
    $method = $_SERVER['REQUEST_METHOD'];
    
    if ($url[0] == 'accounts' && !Auth::get()->getStatus()) {
        return self::redirect('login');
    }
    if ('GET' == $method && count($url) == 1 && $url[0] == '') {
        return (new BankController)->index();
    }
    if ('GET' == $method && count($url) == 1 && $url[0] == 'login') {
        return (new LoginController)->index();
    }
    if ('POST' == $method && count($url) == 1 && $url[0] == 'login') {
        return (new LoginController)->login($_POST);
    }
    if ('POST' == $method && count($url) == 1 && $url[0] == 'logout') {
        return (new LoginController)->logout();
    }
    if ('GET' == $method && count($url) == 1 && $url[0] == 'accounts') {
        return (new AccountController)->index($_GET);
    }
    if ('GET' == $method && count($url) == 2 && $url[0] == 'accounts' && $url[1] == 'create') {
        return (new AccountController)->create();
    }
    if ('POST' == $method && count($url) == 2 && $url[0] == 'accounts' && $url[1] == 'store') {
        return (new AccountController)->store($_POST);
    }
    if ('GET' == $method && count($url) == 3 && $url[0] == 'accounts' && $url[1] == 'destroy') {
        return (new AccountController)->destroy($url[2]);
    }
    
    if ('GET' == $method && count($url) == 3 && $url[0] == 'accounts' && $url[1] == 'edit') {
        return (new AccountController)->edit($url[2]);
    }

    if ('POST' == $method && count($url) == 3 && $url[0] == 'accounts' && $url[1] == 'update') {
        return (new AccountController)->update($url[2], $_POST);
    }
    if ('GET' == $method && count($url) == 3 && $url[0] == 'accounts' && $url[1] == 'withdraw') {
        return (new AccountController)->withdraw($url[2]);
    }
    if ('POST' == $method && count($url) == 3 && $url[0] == 'accounts' && $url[1] == 'updateWithdraw') {
        return (new AccountController)->updateWithdraw($url[2], $_POST);
    }
    if ('GET' == $method && count($url) == 3 && $url[0] == 'accounts' && $url[1] == 'addFunds') {
        return (new AccountController)->addFunds($url[2]);
    }
    if ('POST' == $method && count($url) == 3 && $url[0] == 'accounts' && $url[1] == 'addFunds') {
    // print_r($_POST);
    // die;
        return (new AccountController)->updateAdd($url[2], $_POST);
    }


    return '<h1>404 neatitiko App if...</h1>';
}

    public static function view($view, $data = [])
{
        extract($data);
        $msg = Message::get()->show();
        $auth = Auth::get()->getStatus();
        ob_start();
        require ROOT . 'views/top.php';
        require ROOT . "views/$view.php";
        require ROOT . 'views/bottom.php';
        $content = ob_get_clean();
        return $content;
    }
    
    public static function redirect($url)
    {
        header('Location: '.URL.'/'.$url);
        return null;
    
    }
}