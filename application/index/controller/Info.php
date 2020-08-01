<?php


namespace app\index\controller;
use think\App;

class Info
{
    public function showVersion()
    {
        return App::VERSION; // 5.1.39 LTS
    }
}