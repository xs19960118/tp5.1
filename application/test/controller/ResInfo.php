<?php


namespace app\test\controller;


use think\Response;

class ResInfo
{
    public function index(Response $res)
    {
        $data = '向上;24';
        return dump($res->data($data));
    }

    // json
    public function json()
    {
        return json()->data([
            'name' => 'xs',
            'age' => 24
        ]);
    }

    // getContent
    public function getContent(Response $res)
    {
        $data = '向上;24';
        return $res->data($data)->getContent();
    }

    // 使用助手函数重定向’
    public function redirect()
    {
        return redirect('http://www.thinkphp.cn');
    }


    // 跳转后执行的方法
    public function hello($name)
    {
        return '嘿嘿!' . $name;
    }

    // 完整地址组装 URL
    public function redirect1()
    {
        return redirect('/test/res_info/hello/name/xs');
    }

    // 配合 params()
    public function redirect2()
    {
        return redirect('/test/res_info/hello')->params(['name' => 'xs2']);
    }

    // 直接使用助手函数传参
    public function redirect3()
    {
        return redirect('/test/res_info/hello', ['name' => 'xs3']);
    }

    public function hello2()
    {
        return session('name');
    }

    // 使用 with() 闪存数据到 session中
    public function redirect4()
    {
        return redirect('/test/res_info/hello2')->with(['name' => 'xs4']);
    }
}