<?php

//后台路由
Route::group(['prefix' => 'admin','namespace' => 'Admin'], function(){
    //测试无限极分类
    Route::get('/tree', 'TreeController@index');
    //登录展示页面
    Route::get('/login', 'LoginController@index');
    //登录行为
    Route::post('/login', 'LoginController@login');
    //登出行为
    Route::get('/logout', 'LoginController@logout');

    Route::group(['middleware' => 'auth:admin'], function(){
        //后台首页
        Route::get('/', 'HomeController@index');
        Route::get('/reset', 'LoginController@resetPassword');
        Route::post('/reset', 'LoginController@resetPassword');
        Route::get('/show', 'NoticeController@show');
//        Route::group(['middleware' => 'can:platform'], function(){
            Route::group(['middleware' => 'can:roles_setting'], function(){
                //管理人员模块
                Route::get('users', 'UserController@index');
                Route::get('users/create', 'UserController@create');
                Route::post('users/store', 'UserController@store');
                Route::get('users/{users}/edit', 'UserController@edit');
                Route::get('users/{users}/delete', 'UserController@delete');
                Route::post('users/{users}', 'UserController@update');
                Route::get('users/{user}/role', 'UserController@role');
                Route::post('users/{user}/role', 'UserController@storeRole');
                //角色
                Route::get('/roles', 'RoleController@index');
                Route::get('/roles/create', 'RoleController@create');
                Route::post('/roles/store', 'RoleController@store');
                Route::get('roles/{role}/permission', 'RoleController@permission');
                Route::post('roles/{role}/permission', 'RoleController@storePermission');
                //权限
                Route::get('/permissions', 'PermissionController@index');
                Route::get('/permissions/create', 'PermissionController@create');
                Route::post('/permissions/store', 'PermissionController@store');
            });
//        });
        Route::group(['middleware' => 'can:curriculum_manager'], function(){
            //课程管理
            Route::get('curriculums', 'CurriculumController@index');
            Route::post('curriculums', 'CurriculumController@index');
            Route::get('curriculums/create', 'CurriculumController@create');
            Route::post('curriculums/create', 'CurriculumController@create');
            //课程推荐
            Route::get('recommend', 'CurriculumController@recommend');
            Route::post('recommend', 'CurriculumController@recommend');
            Route::post('changeOrder', 'CurriculumController@changeOrder');
            Route::get('isRecommend/{curriculumId}', 'CurriculumController@isRecommend');
        });
        Route::group(['middleware' => 'can:classify_manager'], function(){
            //分类管理
            Route::get('categories', 'CategoryController@index');
            Route::get('categories/create', 'CategoryController@create');
            Route::post('categories/create', 'CategoryController@create');
            Route::get('categories/{category}/createChild', 'CategoryController@createChild');
            Route::post('categories/{category}/createChild', 'CategoryController@createChild');
            Route::get('categories/{category}/update', 'CategoryController@update');
            Route::post('categories/{category}/update', 'CategoryController@update');
            Route::get('categories/{category}/delete', 'CategoryController@delete');
        });
//        Route::group(['middleware' => 'can:user'], function(){
            Route::group(['middleware' => 'can:teacher_manager'], function(){
                Route::get('teachers', 'TeacherController@index');
                Route::get('teachers/create', 'TeacherController@create');
                Route::post('teachers/create', 'TeacherController@create');
                Route::get('teachers/{teacher}/update', 'TeacherController@update');
                Route::post('teachers/{teacher}', 'TeacherController@update');
                Route::get('teachers/{teacher}/delete', 'TeacherController@delete');
            });
//        });
//        Route::group(['middleware' => 'can:operate'], function(){
            Route::group(['middleware' => 'can:instation_notice'], function(){
                Route::resource('notices', 'NoticeController', ['only' => ['index',  'create', 'store']]);
            });
//        });
    });
});

