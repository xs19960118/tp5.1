<?php


namespace app\test\controller;


use think\facade\Request;

class Inject4
{
    public function index()
    {
        return Request::url();
    }
}