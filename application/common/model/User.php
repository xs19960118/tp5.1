<?php


namespace app\common\model;

use think\Model;
use think\model\concern\SoftDelete;

class User extends Model
{
    use SoftDelete;

    // 数据库连接
    protected $connection = 'db_config3';

    // 对应的数据表
    protected $table = 'user';

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

    // 获取器 [数据转化 转换性别]
    public function getGenderAttr($value)
    {
        $gender = [1 => '男', 2 => '女'];

        return $gender[$value];
    }

    // 修改器
    public function setNameAttr($value)
    {
        return strtolower($value);
    }

}