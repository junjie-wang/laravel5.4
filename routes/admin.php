<?php

//后台路由
Route::group(['prefix' => 'admin'], function(){

    Route::get('/tree', '\App\Admin\Controllers\TreeController@index');
    //登录展示页面
    Route::get('/login', '\App\Admin\Controllers\LoginController@index');
    //登录行为
    Route::post('/login', '\App\Admin\Controllers\LoginController@login');
    //登出行为
    Route::get('/logout', '\App\Admin\Controllers\LoginController@logout');

    Route::group(['middleware' => 'auth:admin'], function(){
        //后台首页
        Route::get('/', '\App\Admin\Controllers\HomeController@index');
        Route::group(['middleware' => 'can:platform'], function(){
            Route::group(['middleware' => 'can:system_setting'], function(){
                //管理人员模块
                Route::get('users', '\App\Admin\Controllers\UserController@index');
                Route::get('users/create', '\App\Admin\Controllers\UserController@create');
                Route::post('users/store', '\App\Admin\Controllers\UserController@store');
                Route::get('users/{users}/edit', '\App\Admin\Controllers\UserController@edit');
                Route::get('users/{users}/delete', '\App\Admin\Controllers\UserController@delete');
                Route::post('users/{users}', '\App\Admin\Controllers\UserController@update');
                Route::get('users/{user}/role', '\App\Admin\Controllers\UserController@role');
                Route::post('users/{user}/role', '\App\Admin\Controllers\UserController@storeRole');
                //角色
                Route::get('/roles', '\App\Admin\Controllers\RoleController@index');
                Route::get('/roles/create', '\App\Admin\Controllers\RoleController@create');
                Route::post('/roles/store', '\App\Admin\Controllers\RoleController@store');
                Route::get('roles/{role}/permission', '\App\Admin\Controllers\RoleController@permission');
                Route::post('roles/{role}/permission', '\App\Admin\Controllers\RoleController@storePermission');
                //权限
                Route::get('/permissions', '\App\Admin\Controllers\PermissionController@index');
                Route::get('/permissions/create', '\App\Admin\Controllers\PermissionController@create');
                Route::post('/permissions/store', '\App\Admin\Controllers\PermissionController@store');
            });
        });
        Route::group(['middleware' => 'can:user'], function(){
            Route::group(['middleware' => 'can:teacher_manager'], function(){
                Route::get('teachers', '\App\Admin\Controllers\TeacherController@index');
                Route::get('teachers/create', '\App\Admin\Controllers\TeacherController@create');
                Route::post('teachers/create', '\App\Admin\Controllers\TeacherController@create');
                Route::get('teachers/{teacher}/update', '\App\Admin\Controllers\TeacherController@update');
                Route::post('teachers/{teacher}', '\App\Admin\Controllers\TeacherController@update');
                Route::get('teachers/{teacher}/delete', '\App\Admin\Controllers\TeacherController@delete');
            });
        });
    });
});

