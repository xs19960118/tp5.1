<?php


namespace app\test\controller;


use think\Request;

class Error
{
    public function index(Request $request)
    {
        // 获取控制器名称，并将控制器名称作为一个参数，传递给下面的方法 city
        $cityName = $request->controller();

        return $this->city($cityName);
    }

    // 注意 city方法 本身是 protected 方法
    protected function city($name)
    {
        // 和$name这个城市相关的处理
        return '当前城市' . $name;
    }
}