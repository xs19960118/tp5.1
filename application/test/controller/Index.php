<?php


namespace app\test\controller;


class Index
{
    public function hello($name = '向上')
    {
        // 输出hello,world!

        $n = 1;
        $n = 2;
        $n = 3;

        return 'hello,world!' . $name;
    }

    public function json()
    {
        // 输出JSON
        $data = [
            'name' => 'xs',
            'age' => 24,
            'sex' => 'male'
        ];
        return json($data);
    }

    public function read()
    {
        // 渲染默认模板输出
        return view('../application/test/view/goods.html');
    }

    public function test1()
    {
        return [
            'name' => 'xs',
            'age' => 24
        ];
    }
}