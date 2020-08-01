<?php


namespace app\database\controller;


use think\Db;
use think\Exception;

class Conn
{
    // 使用全局配置信息连接数据库
    public function conn1 ()
    {
        return Db::table('wh_build')
                ->where('IDX', '=', 12)
                ->value('BUILDNAME');
    }

    // 动态连接数据库
    public function conn2()     {
        try {
            $res = Db::connect('db_config1')
                ->table('wh_build')
                ->where('IDX', '=', 13)
                ->value('BUILDNAME');
        } catch (Exception $e) {
            return 'conn fail';
        }

        return is_null($res) === false ? json($res) : '没有查到数据!';
    }
}