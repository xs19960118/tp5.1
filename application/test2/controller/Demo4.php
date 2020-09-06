<?php


namespace app\test2\controller;


use think\facade\Cache;

class Demo4
{
    /**
     * 用于测试 TP 连接Redis
     */


    public function fun1()
    {
        Cache::set('name', 'xs', 3600);
    }

}