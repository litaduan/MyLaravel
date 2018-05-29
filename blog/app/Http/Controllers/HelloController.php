<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class HelloController extends Controller
{
    public function index ()
    {
        /*$redis = new redis();
        $redis->connect('127.0.0.1', 6379);
        $redis->auth("123321");
        $redis->set('redistest','666666');
        echo $redis->get('redistest');die;*/
        return view('hello');
    }

    public function testredis ()
    {
        $redis = new redis();
        $redis->connect('127.0.0.1', 6379);
        $redis->auth("123321");
        $redis->set('redistest','666666');
        echo $redis->get('redistest');

    }

}
