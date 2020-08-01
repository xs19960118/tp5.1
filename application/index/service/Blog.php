<?php


namespace app\index\service;


class Blog
{
    public function read1($id)
    {
        return 'app\index\service\blog@read1 id = ' . $id;
    }

    public static function read2($id)
    {
        return 'app\index\service\blog::read2 id = ' . $id;
    }
}