<?php


namespace app\venue\model;


use think\Model;

class VenueCurator extends Model
{
    /**
     * 馆长表
     */

    // 对应的数据表
    protected $table = 'venue_curator';

    // 对应的主键
    protected $pk = 'id';
}