<?php

namespace app\index\controller;

class Goods
{
    // 默认方法
    public function index()
    {
        echo 'goods-index-function()';
    }

    // get 参数处理
    public function fun1($id = 0)
    {
        dump($id);
    }

    // add
    public function add($no = 0)
    {
        return '需要添加的商品编号是：' . $no;
    }

    // add2
    public function add2($no = 0)
    {
        return 'in add2 需要添加的商品编号是：' . $no;
    }

    // add3
    public function add3($no = 0)
    {
        return 'in add3 需要添加的商品编号是：' . $no;
    }

    // add4
    public function add4($no = 0)
    {
        return 'in add4 需要添加的商品编号是：' . $no;
    }

    // buyBook
    public function buyBook($cate)
    {
        return 'buyBook ' . $cate;
    }
}
