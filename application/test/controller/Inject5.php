<?php


namespace app\test\controller;


class Inject5
{
    public function index()
    {
        return request()->method();
    }
}