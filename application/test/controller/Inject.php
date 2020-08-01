<?php


namespace app\test\controller;


use think\Request;

class Inject
{
    /**
     * 构造方法注入请求对象
     */

    // 用来保存 think\Request 的实例
    protected $request;

    // 构造方法
    public function __construct(Request $req)
    {
        $this->request = $req;
    }

    // 默认action
    public function index()
    {
        // 返回请求的参数,查询字符串中 name 对应的值
        return $this->request->param('name');
    }
}