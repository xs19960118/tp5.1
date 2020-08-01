<?php


namespace app\database\controller;

use think\Db;

class Query
{

    // 使用 select 查询数据多笔数据
    public function fun1()
    {
        return json(Db::table('user')->where('IDENTITY', 'FA100')->select());
    }

    // selectOrFail
    public function fun2()
    {
        return json(Db::table('user')->where('IDENTITY', 'FA10')->selectOrFail());
    }

    //
//    public function fun3()
//    {
//        return json(Db::table('user')->where('IDENTITY','FA10')->selectOrEmpty());
//    }

    // 查询单笔数据
    public function fun3()
    {
        return json(Db::table('user')->where('IDENTITY', 'FA100')->find());
    }

    // 查询单笔数据，出问题，抛出异常
    public function fun4()
    {
        return json(Db::table('user')->where('IDENTITY', 'FA10')->findOrFail());
    }

    // 查询单笔数据，查不到数据，返回空数组
    public function fun5()
    {
        return json(Db::table('user')->where('IDENTITY', 'FA10')->findOrEmpty());
    }


    // 助手函数-1
    public function fun6()
    {
        return json(db('user')->where('USERNAME', 'W10000001')->findOrEmpty());
    }

    // 助手函数-2
    public function fun7()
    {
        $data = db('user', 'db_config1')->where('IDENTITY', 'FA100')->select();

        return json($data);
    }

    /**
     * 列字段的查询
     */

    // 查询某一个字段可以使用 value
    public function fun8()
    {
        // 返回某个字段的值
        return Db::table('wh_build')
            ->where('IDX', '=', 14)
            ->value('BUILDNAME');
    }

    // 查询多个字段使用 column
    public function fun9()
    {
        $data =  DB::table('logs')
            ->where('OPERATION', '=', 'SELECT')
            ->column('IP, USER, TIME');

        return json($data);
    }

    // 查询多个字段 column id 作为索引
    public function fun10()
    {
        $data =  DB::table('logs')
            ->where([
                'OPERATION' => 'SELECT',
                'USER' => 'W18001643'
            ])
            ->column('USER, TIME','IP');

        return json($data);
    }

    // 查询所有字段 idx 作为索引
    public function fun11()
    {
        $data =  DB::table('logs')
            ->where([
                'OPERATION' => 'SELECT',
                'USER' => 'W18001643'
            ])
            ->column('*','IDX');

        return json($data);
    }

    /**
     * 分批次处理数据
     */

    public function fun12()
    {

        $logsInfo = [];

        Db::table('logs')
            ->where([
                'OPERATION' => 'SELECT',
                'USER' => 'W18001643'
            ])
            ->chunk(10, function($logs) use($logsInfo){

                foreach ($logs as $key => $value) {
                    $info = '时间：' . $value['TIME'] .
                            ' ;用户：'. $value['USER'].
                            ' ;操作：' . $value['OPERATION'];
                    array_push($logsInfo, $info);


                }
            });

        return json($logsInfo);
    }

    /**
     * 查询条件表达式
     */

//    public function fun13()
//    {
//       return Db::name('user')->whereName('=','jinx');
//    }

}