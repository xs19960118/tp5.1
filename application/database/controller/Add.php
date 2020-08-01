<?php


namespace app\database\controller;

use think\Db;

class Add
{

    // 使用Db类的 insert 方法向数据库提交数据,添加一条数据
    public function add1()
    {
        $logs = [
            'IP' => '127.0.0.1',
            'USER' => 'W18001643',
            'TIME' => '2020-05-11 09:52:48',
            'OPERATION' => 'SELECT',
            'LOGS' => '测试11'
        ];

        $res = Db::name('logs')->insert($logs);

        return $res === 1 ? '添加一笔数据成功' : '添加一笔数据失败';
    }

    // 使用 replace
    public function add2()
    {
        $record = [
            'PRODUCT' => 'Mongoose'
        ];

        $res = Db::name('wh_product')
                ->strict(false)
                ->insert($record, true);

        return $res > 0 ? '添加一笔数据成功' : '添加一笔数据失败';
    }

    // 添加多笔数据 insertAll
    public function add3()
    {
        $data = [
            ['BUILDNAME' => 'Test 1'],
            ['BUILDNAME' => 'Test 2'],
            ['BUILDNAME' => 'Test 3']
        ];

        return Db::name('wh_build')->insertAll($data);
    }

    // 能匹配吗
    public function add4()
    {
        $data = [
            ['BUILDNAME1' => 'Test 4'],
            ['BUILDNAME' => 'Test 5'],
            ['BUILDNAME' => 'Test 6']
        ];

        return Db::name('wh_build')->strict(false)->insertAll($data);
    }

}