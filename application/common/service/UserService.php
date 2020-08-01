<?php


namespace app\common\service;

use app\common\model\User as userModel;


class UserService
{

    // 新增一个用户 save
    public function addOneUser($user)
    {
        $model = new userModel();

        return ($model->save($user)) ? '增加成功' : '增加失败';
    }

    // 获取主键新增的 ID
    public function getNewId($user)
    {
        $user = UserModel::create($user);

        return '新增的ID是:' . $user->id;
    }


    // 增加多个用户 saveAll, saveAll方法新增数据返回的是包含新增模型（带自增ID）的数据集对象。
    public function addMulUser($users)
    {
        $model = new userModel();

        $offectRows = count($model->saveAll($users));

        return '添加记录 ' . $offectRows . '条';
    }

    // 增加用户，可以是一个也可以是多个
    public function addUser($user)
    {
        $offectRows = count(userModel::create($user));

        return '添加记录 ' . $offectRows . '条';
    }

    // 删除一个用户通过 ID
    public function delOneUserById($id)
    {
        $offectRows = UserModel::get($id)->delete();

        return $offectRows ? '删除成功' : '删除失败';
    }

    // 删除多个用户通过 ID
    public function delMulUserByID($arr)
    {
        return (UserModel::destroy($arr)) ? '删除成功' : '删除失败';
    }

    // 条件删除闭包
    public function delByConditions1()
    {
        $res = UserModel::destroy(function ($query) {
            $query->where('gender', '=', 2);
        });

        return $res ? '删除成功' : '删除失败';
    }

    // 修改一个用户 查询后修改
    public function updOneUserById($id)
    {
        $user = UserModel::get($id);
        $user->name = 'thinkphp';
        $user->email = 'thinkphp@qq.com';
        $user->age = 17;
        return ($user->save()) ? '修改成功' : '修改失败';
    }

    // 修改一条记录 直接修改数据
    public function updOneUserById2($id)
    {
        // save方法第二个参数为更新条件
        $res = (new UserModel())->save([
            'name' => 'thinkphp',
            'email' => 'thinkphp@qq.com'
        ], ['id' => $id]);

        return $res ? '修改成功' : '修改失败';
    }

    // 查询一个用户 查询构造器
    public function selOneUseById($id)
    {
        return json(userModel::where('id', '=', $id)->findOrEmpty());
    }

    // 查询一个用户 get() 方法
    public function selOneUseById2($id)
    {
        return json(userModel::get($id));
    }

    // create 是否可以添加多条数据
    public function test1($user)
    {
        return userModel::create($user);
    }

    // 查询多条数据 all 方法
    public function selMulUserById($arr)
    {
        return json(userModel::all($arr));
    }

    // 获取器
    public function getter1($id)
    {
        $user = UserModel::get($id);

        // 通过获取器获取字段
        echo $user->gender;

        // 获取原始字段数据
        echo $user->getData('gender');

        // 获取全部原始数据
        dump($user->getData());
    }

    // 使用软删除
    public function softDel($id)
    {
        return (UserModel::destroy($id)) ? '删除成功' : '删除失败';
    }


}