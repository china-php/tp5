<?php
namespace app\home\controller;

use app\common\controller\Home;

class Index extends Home
{
    public function _initialize()
    {
        parent::_initialize();
        //echo 99;
    }

    public function index()
    {
        echo 22;
        //sleep(20);
        //session('thinkphp_1',12233);
        //phpinfo();
        exit();
    }

    public function demo()
    {
        echo session('thinkphp_1');
        //echo 22;
    }

    public function test()
    {
        echo 44;
    }

    public function hello()
    {
        $id = request()->route('id');
        echo $id;
        echo 111;
    }
}
