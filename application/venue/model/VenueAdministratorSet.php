<?php


namespace app\venue\model;


use think\Model;

class VenueAdministratorSet extends Model
{
    /**
     * 管理员权限设置表
     */

    // 对应的数据表
    protected $table = 'venue_administrator_set';

    // 对应的主键
    protected $pk = 'id';

}