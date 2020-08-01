<?php


namespace app\test\controller;

use think\Controller;
use app\common\service\UserService;

class User extends Controller
{


    // 查询用户信息通过 ID
    public function fun1(UserService $service, $id)
    {
        return $service->selOneUseById($id);
    }

    // 添加一名用户的信息
    public function fun2(UserService $service)
    {
        $user = [
            'name' => 'HELLO WORLD',
            'gender' => 1,
            'age:' => 24,
            'email' => 'wangwu@gmail.com'
        ];

        return $service->addOneUser($user);
    }

    // 增加一批用户的信息
    public function fun3(UserService $service)
    {
        $users = [
            ['name' => 'test1', 'gender' => 1, 'age' => 24, 'email' => 'wangwu@gmail.com'],
            ['name' => 'test2', 'gender' => 1, 'age' => 24, 'email' => 'wangwu@gmail.com'],
            ['name' => 'test3', 'gender' => 1, 'age' => 24, 'email' => 'wangwu@gmail.com'],
            ['name' => 'test4', 'gender' => 1, 'age' => 24, 'email' => 'wangwu@gmail.com'],
            ['name' => 'test5', 'gender' => 1, 'age' => 24, 'email' => 'wangwu@gmail.com'],
        ];

        return $service->addMulUser($users);
    }

    // 增加用户数据 使用 create
    public function fun4(UserService $service)
    {
        $users = [
            ['name' => 'test1', 'gender' => 1, 'age' => 24, 'email' => 'wangwu@gmail.com'],
            ['name' => 'test2', 'gender' => 1, 'age' => 24, 'email' => 'wangwu@gmail.com'],
            ['name' => 'test3', 'gender' => 1, 'age' => 24, 'email' => 'wangwu@gmail.com'],
            ['name' => 'test4', 'gender' => 1, 'age' => 24, 'email' => 'wangwu@gmail.com'],
            ['name' => 'test5', 'gender' => 1, 'age' => 24, 'email' => 'wangwu@gmail.com'],
        ];

        return $service->addUser($users);
    }

    // 获取新增用户的 ID
    public function fun5(UserService $service)
    {
        $user = ['name' => '大鸡腿', 'gender' => 1, 'age' => 24, 'email' => 'djt@gmail.com'];

        return $service->getNewId($user);
    }

    // create 是否可以添加多条记录
    public function fun6(UserService $service)
    {
        $users = [
            ['name' => 'test1', 'gender' => 1, 'age' => 24, 'email' => 'wangwu@gmail.com'],
            ['name' => 'test2', 'gender' => 1, 'age' => 24, 'email' => 'wangwu@gmail.com'],
            ['name' => 'test3', 'gender' => 1, 'age' => 24, 'email' => 'wangwu@gmail.com'],
            ['name' => 'test4', 'gender' => 1, 'age' => 24, 'email' => 'wangwu@gmail.com'],
            ['name' => 'test5', 'gender' => 1, 'age' => 24, 'email' => 'wangwu@gmail.com'],
        ];

        return $service->test1($users);
    }

    // 删除数据 delete()
    public function fun7(UserService $service, $id)
    {
        return $service->delOneUserById($id);
    }

    // 删除数据 destroy()
    public function fun8(UserService $service)
    {
        return $service->delMulUserByID([6, 7]);
    }

    // 删除数据 destroy() + 闭包
    public function fun9(UserService $service)
    {
        return $service->delByConditions1();
    }

    // 修改数据
    public function fun10(UserService $service, $id)
    {
        return $service->updOneUserById($id);
    }

    // 修改数据
    public function fun11(UserService $service, $id)
    {
        return $service->updOneUserById2($id);
    }

    // 查询用户信息通过 ID
    public function fun12(UserService $service, $id)
    {
        return $service->selOneUseById2($id);
    }

    // 查询多个用户的信息
    public function fun13(UserService $service)
    {
        return $service->selMulUserById([1, 3, 4, 5]);
    }

    //
    public function fun14(UserService $service, $id)
    {
        $service->getter1($id);
    }

    // 测试软删除使用
    public function fun15(UserService $service, $id)
    {
        return $service->softDel($id);
    }

    // 测试 1
    public function fun16()
    {
        return json(model('common/Activity')::all([520, 521]));
    }

    // 测试 2 软删除
    public function fun17()
    {
        $res = model('common/Activity')::destroy([520]);

        return $res ? 'OK' : 'Fail';
    }



}