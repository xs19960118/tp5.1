<?php

/**
 * 这是一个自定义的 路由定义文件
 */

/**
 * 基本操作
 */

//# 闭包
//Route::get('test1', function () {
//    return 'test1';
//});

//
//# 不限制访问的请求类型
//Route::rule('test2', function () {
//    return 'test2';
//});
//
//# 限制访问的请求类型为 post 请求
//Route::rule('test3', function () {
//    return 'test3';
//}, 'post');
//
//# 结合控制器使用
//Route::get('add/:no', 'index/goods/add');
//
//# 不设置请求类型的限制
//Route::rule('add2/:no', 'index/goods/add2');
//
//# rule 设置请求类型限定
//Route::rule('add3/:no', 'index/goods/add3', 'post');
//
//# get post 都可以请求到
//Route::rule('add4/:no', 'index/goods/add4', 'get|post');

/**
 * 规则表达式
 */

// Route::rule('/', 'index'); // 首页访问路由
// Route::rule('my', 'Member/myinfo'); // 静态地址路由
// Route::rule('blog/:id', 'Blog/read'); // 静态地址和动态地址结合
// Route::rule('new/:year/:month/:day', 'News/read'); // 静态地址和动态地址结合
// Route::rule(':user/:blog_id', 'Blog/read'); // 全动态地址

# 可选参数
//Route::get('blog/:year/[:month]', 'Blog/archive');

# 完全匹配
//Route::get('new/:cate$', 'goods/buybook');


# 额外参数
//Route::get('blog/:id', 'blog/read?status=1&app_id=5');

# 查看下php的版本
//Route::get('info', 'info/showVersion');

# 路由标识
//Route::name('new_read')->rule('new', 'News/read', 'get');

/**
 * 分组路由
 */



return [

];