<?php


namespace app\index\controller;


use think\Request;

class Blog
{
    public function archive($year, $month = '')
    {
        return 'year:' . $year . ' month:' . $month;
    }

//    public function read(Request $req, $id)
//    {
//        $status = request()->param('status');
//        $app_id = request()->param('app_id');
//        return "id = $id;status = $status; app_id = $app_id ";
//    }

    public function read($id)
    {
        return 'read:' . $id;
    }
}