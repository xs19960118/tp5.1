<?php


namespace app\test\controller;

use think\facade\Env;
use think\response\Download;

class MyDownload
{

//    public function download1()
//    {
//        $root =  Env::get('root_path');
//        return new Download($root. '/upload/a.txt');
//    }

//    // 使用助手函数
//    public function download2()
//    {
//        return download(Env::get('root_path') . '/upload/a.txt', 'xx.txt');
//    }

    private $rootPath = '';

    public function __construct()
    {
        $this->rootPath = Env::get('root_path');
    }

    public function download ()
    {
        return new Download($this->rootPath . '/upload/a.txt');
    }

}