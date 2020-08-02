<?php


namespace app\test2\controller;


use think\Controller;
use think\facade\Log;
use think\facade\Request;

class Demo2 extends Controller
{

    // 测试记录日志
    public function fun1()
    {
        Log::write('测试日志');
    }

    // 可以设置日志的级别
    public function fun2()
    {
        Log::write('测试日志信息，这是警告级别，并且实时写入','notice');
    }

    // 直接使用助手函数
    public function fun3()
    {
        trace('测试','info');
    }

    // 也可以直接调用具体的日志级别的方法
    public function fun4()
    {
        Log::error('错误日志');
    }

}