<?php
namespace app\index\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        return 'ThinkPHP完美运行中。。。';
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'This is Index App => hello,' . $name;
    }
}
