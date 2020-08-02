<?php


namespace app\test2\controller;


use think\facade\Hook;

class Demo3
{
    // 测试行为的方法
    public function fun1()
    {

    }

    // 自定义钩子
    public function fun2()
    {
        Hook::listen('eat', '吃饭');

        return '... ...';
    }
}