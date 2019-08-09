<?php
Route::get('/','IndexController@index');

//分类
Route::prefix('cate')->group(function () {

});


//章节
Route::prefix('chapter')->group(function () {

});


//课程
Route::prefix('course')->group(function () {

});


//用户
Route::prefix('user')->group(function () {
});
