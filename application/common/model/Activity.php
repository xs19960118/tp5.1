<?php


namespace app\common\model;

use think\Model;
use think\model\concern\SoftDelete;

class Activity extends Model
{
    use SoftDelete;

    // 数据库连接
    protected $connection = 'db_config4';

    // 对应的数据表
    protected $table = 'activity';

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

    // 将 unix时间戳装换成 datetime 类型
//    public function setDeleteTime($value)
//    {
//        return date('Y-m-d h:i:s', $value);
//    }

}