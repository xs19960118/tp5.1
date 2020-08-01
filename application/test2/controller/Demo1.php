<?php


namespace app\test2\controller;


use app\common\model\User;
use think\Controller;
use think\facade\View;

class Demo1 extends Controller
{
    public function fun1()
    {
        $user = User::get(2);

        // assign 去赋值模板变量
        View::assign('var', $user);

        // fetch 方法是加载模板输出
        return View::fetch();
    }

    // toArray
    public function fun2()
    {
        $user = User::get(2);

        dump($user->toArray());
    }

}