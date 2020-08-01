<?php


namespace app\database\controller;

use think\Db;

class Update
{
    // update 常规用法
    public function fun1()
    {
        return Db::name('wh_build')
            ->where('BUILDNAME', '=' ,'Test 1')
            ->update(['BUILDNAME' => 'thinkphp']);
    }

    // update 更改多个字段的值
    public function fun2()
    {
        return Db::name('wh_borrow_code')
            ->where('IDX', '=', 42)
            ->update(
                [
                    'CODE_NAME' => 'J002',
                    'LENDER' => 'lxm',
                    'MODEL' => 'Squirrel'
                ]
            );
    }

}