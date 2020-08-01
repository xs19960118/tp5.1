<?php


namespace app\test\controller;


use think\facade\Request;

class InputVariable
{
    public function fun1()
    {
        return (Request::has('id', 'get')) ? '设置了' : '没设置';
    }

    public function fun2()
    {
        return (Request::has('id', 'post')) ? '设置了' : '没设置';
    }

    // 获取当前请求的全部变量
    public function fun3()
    {
        return json(Request::param());
    }

    //
    public function fun4(\think\Request $req)
    {
        return $req->name;
    }

    // 获取路由变量
    public function fun5()
    {
        return Request::route('name');
    }

    // 查看 header 信息
    public function fun6()
    {
        return json(Request::header());
    }

    // 查看 header 中的某一项的信息
    public function fun7()
    {
        return json(Request::header('user-agent'));
    }
}