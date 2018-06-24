<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});//框架入口
// Route::get('index.html',function(){
// 	return view('welcome');
// });

//前台路由
Route::any('index','admin\AdminController@index');//emu教育主页面
Route::any('yasi','admin\AdminController@yasi');//雅思培训
Route::any('emuteacher','admin\AdminController@emuteacher');//emu名师
Route::any('liuxueactive','admin\AdminController@liuxueactive');//澳洲留学---动态
Route::any('liuxuejieshao','admin\AdminController@liuxuejieshao');//澳洲学校---介绍
Route::any('estimate','admin\AdminController@estimate');//澳洲留学---在线评估
Route::any('whyus1','admin\AdminController@whyus1');//whyus跳转页面  联系我们---关于emu页面
Route::any('zxns','admin\AdminController@zxns');//联系我们---招贤纳士页面
Route::any('contact','admin\AdminController@contact');//联系我们---联系我们页面
Route::any('contactsubmit','admin\AdminController@contactsubmit');//联系我们提交
Route::any('yasisubmit','admin\AdminController@yasisubmit');//前台雅思免费试听登记表提交路由



//后台路由
Route::any('adminlogin','admin\AdminController@adminlogin');//后台登录页面
Route::any('adminloginprocess','admin\AdminController@adminloginprocess');//后台登录处理
Route::any('yan','admin\AdminController@yan');//验证码
Route::any('adminmanager','admin\AdminController@adminmanager');//后台管理中心主页
Route::any('whyus','admin\AdminController@whyus');//why us路由
Route::any('whysave','admin\AdminController@whysave');//whyus保存
Route::any('whydelete','admin\AdminController@whydelete');//whyus删除
Route::any('picture','admin\AdminController@picturechange');//图片切换
Route::any('upload1','admin\AdminController@uploadimg');//图片上传插入到数据库
Route::any('videode','admin\AdminController@video');//视频管理
Route::any('uploadvideo','admin\AdminController@uploadvideo');//视频插入数据库
Route::any('accountset','admin\AdminController@accountset');//账号设置页面
Route::any('active','admin\AdminController@activemng');//动态管理
Route::any('edit','admin\AdminController@edits');//动态管理的编辑页面
Route::any('imgupload','admin\AdminController@imgupload');//动态管理编辑 图片上传路由
//Route::any('actediprocess','admin\AdminController@actediprocess');//动态管理的编辑 图片提交处理
Route::any('actediprocess1','admin\AdminController@actediprocess1');//动态管理的编辑 修改表单提交处理
Route::any('teacherlist','admin\AdminController@teacherlist');
Route::any('liuxueactiveh','admin\AdminController@liuxueactiveh');



//模型
Route::any('model1','admin\AdminController@info');
Route::any('shujuku1','admin\AdminController@shujuku');




