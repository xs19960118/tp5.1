<?php


namespace app\test\controller;


use think\Controller;

class Jump extends Controller
{
    public function index()
    {
        $flag = true;

        if ($flag) {
            // 设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
            $this->success('新增成功!', '');
        }else {
            // 错误页面的默认跳转页面是返回前一页，通常不需要设置
            $this->error('新增失败!');
        }
    }
}