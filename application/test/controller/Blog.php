<?php


namespace app\test\controller;


class Blog
{
    public function index()
    {
        return 'index';
    }

    public function add()
    {
        return 'add';
    }

    public function edit($id)
    {
        return 'edit:'.$id;
    }
}