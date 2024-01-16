<?php
namespace Bank\App;

use Bank\App\Controllers\BankController;

class App
{
    public static function run()
    {

    $server = $_SERVER['REQUEST_URI']; 
    $url = explode('/', $server);
    array_shift($url);
    print_r($url); //........................
    
    return self::router($url);
    }
    
    
    private static function router($url)
    {
        $method = $_SERVER['REQUEST_METHOD'];
        
        if ('GET' == $method && count($url) == 1 && $url[0] == '') {
            return (new BankController)->index();
        }
        if ('GET' == $method && count($url) == 2 && $url[0] == 'home') {
            return (new BankController)->color($url[1]);
        }

        return '<h1>404 neatitiko App if...</h1>';
    }

    public static function view($view, $data = [])
    {
        extract($data);
        ob_start();
        require ROOT . 'views/top.php';
        require ROOT . "views/home_color.php";
        require ROOT . 'views/bottom.php';
        $content = ob_get_clean();
        return $content;
    }
}