<?php


namespace app\venue\model;


use think\Model;
use think\model\concern\SoftDelete;

class Venues extends Model
{
    /**
     * 场馆表
     */

    use SoftDelete;

    // 对应的数据表
    protected $table = 'venues';

    // 对应的主键
    protected $pk = 'id';

    // 软删除使用
    protected $deleteTime = 'delete_time';

    // 设置自动类型转换
    protected $type = [
        'delete_time'  =>  'datetime'
    ];

    // 模型初始化
    protected static function init()
    {
        // TODO:初始化内容
    }
}