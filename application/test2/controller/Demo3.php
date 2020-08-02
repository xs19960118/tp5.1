<?php


namespace app\test2\controller;


use think\facade\Hook;

class Demo3
{
    // 测试行为的方法
    public function fun1()
    {

    }

    public function fun2()
    {
        Hook::listen('eat', '吃饭');

        return '... ...';
    }

    public function fun3()
    {
        Hook::listen('eat', '吃饭');
        Hook::listen('sleep', '睡觉');
        Hook::listen('coding', '编码');

        return '完事了 ... ...';
    }
}