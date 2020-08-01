<?php


namespace app\test\controller;


use think\Request;

class Inject3
{
    public function index(Request $req)
    {
        return $req->ip();
    }
}