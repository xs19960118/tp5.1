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
        Hook::add('daily', [
            'app\\test2\\behavior\\Test2',
            'app\\test2\\behavior\\Test3',
            'app\\test2\\behavior\\Test4']
        );
        Hook::listen('daily', 'param1');


        return '完事了 ... ...';
    }
}