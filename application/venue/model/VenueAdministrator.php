<?php


namespace app\venue\model;


use think\Model;

class VenueAdministrator extends Model
{
    /**
     * 管理员表
     */

    // 对应的数据表
    protected $table = 'venue_administrator';

    // 对应的主键
    protected $pk = 'id';
}