<?php


namespace app\database\controller;


use think\Db;
use think\db\Query;
use think\Controller;

class Chain extends Controller
{

    /**
     * 链式操作 where
     * name：不含表名前缀
     * table：可以含有表前缀
     */

    // 多个 where() 连用
    public function fun1()
    {
        $data = Db::name('wh_record')
            ->where('IDX', '>', 80000)
            ->where('UNIT', '=', 2)
            ->where('status', '=', '归还')
            ->select();

        return json($data);
    }

    // name方法替换table方法
    public function fun2()
    {
        $data = Db::table('wh_record')
            ->where('IDX', '>', 80000)
            ->where('UNIT', '=', 2)
            ->where('STATUS', '=', '归还')
            ->select();

        return json($data);
    }

    // 将所有条件设置为数组
    public function fun3()
    {
        $data = Db::table('wh_record')
            ->where([
                'UNIT' => 2,
                'STATUS' => '归还'
            ])
            ->where('IDX', '>', 80000)
            ->select();

        return json($data);
    }

    // IN 条件
    public function fun4()
    {
        $data = Db::table('wh_record')->where([
            'UNIT' => 2,
            'STATUS' => ['归还', '借出'],
        ])->select();

        return json($data);
    }

    // 索引数组
    public function fun5()
    {
        $data = Db::table('wh_record')->where([
            ['IDX', '>', 10000],
            ['UNIT', '=', 2],
            ['STATUS', 'IN', ['归还', '借出']],
        ])->select();

        return json($data);
    }

    /**
     * 字符串条件
     */

    // 字符串操作，注意转义字符
    public function fun6()
    {
        $data = Db::table('wh_record')
            ->where('IDX > 10000 AND STATUS IN (\'归还\', \'借出\') AND UNIT = 2')
            ->select();

        return json($data);
    }

    // 字符串配合与处理机制
    public function fun7()
    {
        $IDX = 10000;
        $UNIT = 2;
        $data = Db::table('wh_record')
            ->where("IDX>:IDX AND UNIT=:UNIT",
                ['IDX' => $IDX , 'UNIT' => $UNIT, ])
            ->select();

        return json($data);
    }

    /**
     * filed
     */

    // 用于查询
    public function fun8()
    {
        $data = Db::table('wh_record')
            ->where([
                ['IDX', '>', 150000],
                ['UNIT', '=', 2],
                ['STATUS', 'IN', ['归还', '借出']],
            ])
            ->field('IDX, BUILD, ISN, STATUS')
            ->select();

        return json($data);
    }

    // 可以设置别名
    public function fun9()
    {
        $data = Db::table('wh_record')
            ->where([
                ['IDX', '>', 150000],
                ['UNIT', '=', 2],
                ['STATUS', 'IN', ['归还', '借出']],
            ])
            ->field('IDX AS ID, BUILD AS 阶段, ISN AS 序列号, STATUS AS 状态')
            ->select();

        return json($data);
    }

    /**
     * limit
     */

    // 限定结果和数量
    public function limit1()
    {
        $data = Db::table('wh_record')
            ->where([
                ['IDX', '>', 150000],
                ['UNIT', '=', 2],
                ['STATUS', 'IN', ['归还', '借出']],
            ])
            ->field('IDX AS ID, BUILD AS 阶段, ISN AS 序列号, STATUS AS 状态')
            ->limit(10)
            ->select();

        return json($data);
    }

    // 用于分页
    public function limit2()
    {
        $data = Db::table('wh_record')
            ->where([
                ['IDX', '>', 150000],
                ['UNIT', '=', 2],
                ['STATUS', 'IN', ['归还', '借出']],
            ])
            ->field('IDX AS ID, BUILD AS 阶段, ISN AS 序列号, STATUS AS 状态')
            ->limit(0, 10)
            ->select();

        return json($data);
    }

    /**
     * order
     */

    // order 排序
    public function order1()
    {
        $data = Db::table('wh_record')
            ->where([
                ['IDX', '>', 150000],
                ['UNIT', '=', 2],
                ['STATUS', 'IN', ['归还', '借出']],
            ])
            ->field('IDX AS ID, BUILD AS 阶段, ISN AS 序列号, STATUS AS 状态')
            ->order('IDX', 'DESC')
            ->page(1, 10)
            ->select();

        return json($data);
    }

    // 支持多字段排序
    public function order2()
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


    /**
     * fetchSql
     */
    public function getSql()
    {
        return Db::table('wh_record')
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
            ->fetchSql(true)
            ->select();
    }

    /**
     * 获取器
     */

    public function test1()
    {
        $data = Db::table('wh_record')
            ->withAttr('BUILD', function($value) {
                return strtolower($value);
            })
            ->findOrEmpty();

        return json($data);
    }


    /**
     * 监听SQL
     */
    public function test2()
    {



        Db::listen(function ($sql, $time, $explain) {
            // 记录SQL
            echo $sql . ' [' . $time . 's]';
            // 查看性能分析结果
            dump($explain);
        });

        return Db::table('wh_record')
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
            ->fetchSql(true)
         ->select();
    }


}