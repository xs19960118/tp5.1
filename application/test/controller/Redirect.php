<?php


namespace app\test\controller;


use think\Controller;
use think\facade\Session;
use think\Request;

class Redirect extends Controller
{
    // 重定向到外部地址 URL 重定向
    public function test1()
    {
        $this->redirect('https://www.kancloud.cn/manual/thinkphp5_1/353981');
    }

    // 重定向到操作行为 action
    public function test2()
    {
        $this->redirect('Redirect/test3', ['cate_id' => 2], 302, ['data' => 'hello']);
    }

    // test3
    public function test3(Request $req)
    {
        $cate_id = $req->param('cate_id');
//        $data = $req->param('data');
        $data = Session::get('data');
        return json([
            'cate_id' => $cate_id,
            'data' => $data
        ]);
    }
}