<?php


namespace app\database\controller;

use think\Controller;
use think\Db;
use think\db\Query;

class QueryEvent extends Controller
{

    protected function initialize()
    {
        // parent::initialize();

        // 注册查询一批记录的前置操作
        Query::event('before_select', function ($query) {
            // 进行事件处理... ...

            // 完成事件处理
            echo '完成 select() 查询前置操作 <br/>';
        });

        // 注册查询一条记录的前置操作
        Query::event('before_select', function () {
            echo '完成 find() 查询前置操作 <br/>';
        });

        // 注册删除后置事件
        Query::event('after_delete', function () {
            echo '完成 delete() 查询前置操作 <br/>';
        });

        // 注册添加后置操作
        Query::event('after_insert', function () {
            echo '完成 insert() 查询前置操作 <br/>';
        });

        // 注册修改后置操作
        Query::event('after_update', function () {
            echo '完成 update() 查询前置操作 <br/>';
        });
    }

    // 查询 select
    public function select()
    {
        $data = Db::table('wh_record')
            ->where([
                ['IDX', '>', 150000],
                ['UNIT', '=', 2],
                ['STATUS', 'IN', ['归还', '借出']],
            ])
            ->field('IDX AS ID, BUILD AS 阶段, ISN AS 序列号, STATUS AS 状态')
            ->order([
                'IDX' => 'DESC',
                'UNIT' => 'ASC'
            ])
            ->page(1, 10)
            ->select();

        return json($data);
    }

    // 查询单个记录的操作
    public function find()
    {
        $IDX = 88888;
        $data = Db::table('wh_record')
            ->where([
                ['IDX', '=', $IDX]
            ])
            ->field([
                'IDX' => 'ID',
                'BUILD' => 'Build',
                'CONCAT(ISN, "-", UNIT)' => 'No',

            ])
            ->findOrEmpty();

        return json($data);
    }

    // insert
    public function insert()
    {

    }

    // update
    public function update()
    {

    }

    // delete
    public function delete()
    {

    }

}