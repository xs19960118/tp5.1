<?php


namespace app\test2\behavior;

class Test
{
    // 测试系统钩子
//    public function run()
//    {
//        echo '我是一个行为';
//    }

    // 初始化行为方法
    public function appInit()
    {
        echo '我是初始化方法 <br/>';
    }

    // 自定义行为
    public function eat($param)
    {
        echo $param . '</>';
    }
}