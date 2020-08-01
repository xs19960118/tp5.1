<?php

use think\Response;
use think\facade\Route;
use think\Request;

/**
 * 路由到操作方法
 */
//Route::get('blog/:id', '@index/blog/read');

/**
 * 路由绑定到service层的方法
 */

# 绑定非静态方法
//Route::get('blog1/:id', '\app\index\service\Blog@read1');

# 绑定静态方法
//Route::get('blog2/:id', '\app\index\service\Blog::read2');

/**
 * 路由重定向
 */

//Route::redirect('blog3/:id', 'http://tp5.1.com/blog2/:id', 302);

/**
 * 路由绑定视图
 */

# 不添加参数
//Route::view('hello1/:name', 'index@hello');

# 添加参数
//Route::view('hello2/:name', 'index@hello2', ['city' => 'shanghai']);


/**
 * 使用闭包
 */

# 不传递参数
//Route::get('hi/:name', function () {
//    return 'Hi';
//});

# 传递参数
//Route::get('hi2/:name', function ($name) {
//    return 'Hi '. $name;
//});

//# 闭包中使用依赖注入
//Route::rule('hello/:name', function (Request $request, $name) {
//    // 获取请求方法的类型
//    $method = $request->method();
//    return '[' . $method . '] Hello,' . $name;
//});

# 注入一个响应对象
//Route::rule('hello/:name', function (Response $rep, $name) {
//    return $rep
//        ->data('Hello,' . $name)
//        ->code(200)
//        ->contentType('text/plain');
//});

/**
 * 分组路由
 */

// 使用闭包的方式注册分组路由
//Route::group('blog', function () {
//    Route::rule(':id', 'blog/read');
//    Route::rule(':name', 'blog/read');
//})->ext('html')->pattern(['id' => '\d+', 'name' => '\w+']);

return [

];