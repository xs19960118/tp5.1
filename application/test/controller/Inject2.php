<?php


namespace app\test\controller;


use think\Controller;

class Inject2 extends Controller
{
    public function index()
    {
        return $this->request->method();
    }
}