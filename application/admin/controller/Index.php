<?php
namespace app\admin\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        echo 'aaaa';
        return $this->fetch();
    }
}