<?php


namespace app\test2\facade;


class View extends \think\Facade
{
    // 获取要代理的类
    protected static function getFacadeClass()
    {
        return '\think\View';
    }
}