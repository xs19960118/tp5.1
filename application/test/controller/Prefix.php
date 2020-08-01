<?php


namespace app\test\controller;

use think\Controller;

class Prefix extends Controller
{
    protected $beforeActionList = [
        'first' => ['only' => 'go'],
        'second' => ['except' => 'main'],
        'third',
    ];

    protected function first()
    {
        echo 'first <br/>';
    }

    protected function second()
    {
        echo 'second <br/>';
    }

    protected function third()
    {
        echo 'third <br/>';
    }

    public function main()
    {
        echo 'main';
    }
}