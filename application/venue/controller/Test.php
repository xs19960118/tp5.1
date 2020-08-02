<?php


namespace app\venue\controller;


use think\Controller;

class Test extends Controller
{
    /**
     * 测试控制器类
     */

    // 测试使用模型 OK
    public function fun1()
    {
        return json(model('venue/Venues')::get(1));
    }

}