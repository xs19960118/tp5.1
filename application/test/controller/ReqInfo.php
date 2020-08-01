<?php


namespace app\test\controller;


use think\Request;

class ReqInfo
{
    // 查看请求参数的
    public function info(Request $req)
    {
        return json([
            '请求类型' => $req->method(),
            '主机名' => $req->host(),
            '域名' => $req->domain(),
            '子域名' => $req->subDomain(),
            '泛域名' => $req->panDomain(),
            'url' => $req->url(),
            'baseUrl' => $req->baseUrl(),
            '当前执行的文件' => $req->baseFile(),
            '访问的ROOT地址' => $req->root(),
            'pathinfo' => $req->pathinfo(),
            'pathinfo（不含后缀）' => $req->path(),
            '当前模块名' => $req->module(),
            '当前控制器名' => $req->controller(),
            '当前操作名' => $req->action(),
            '当前语言集' => $req->langset(),
            '当前请求的参数' => $req->param('name'),
        ]);
    }
}