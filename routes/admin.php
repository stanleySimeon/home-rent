<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'namespace' => 'App\Http\Controllers\Admin',
    'prefix' => 'admin',
    'middleware' => ['auth', 'verified'],
], function () {
    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
    Route::get('/users', 'AdminController@users')->name('admin.users');
    Route::get('/users/{id}', 'AdminController@user')->name('admin.user');
    Route::get('/users/{id}/edit', 'AdminController@editUser')->name('admin.user.edit');
    Route::put('/users/{id}', 'AdminController@updateUser')->name('admin.user.update');
    Route::delete('/users/{id}', 'AdminController@deleteUser')->name('admin.user.delete');
    Route::get('/roles', 'AdminController@roles')->name('admin.roles');
    Route::get('/roles/{id}', 'AdminController@role')->name('admin.role');
    Route::get('/roles/{id}/edit', 'AdminController@editRole')->name('admin.role.edit');
    Route::put('/roles/{id}', 'AdminController@updateRole')->name('admin.role.update');
    Route::delete('/roles/{id}', 'AdminController@deleteRole')->name('admin.role.delete');
    Route::get('/permissions', 'AdminController@permissions')->name('admin.permissions');
    Route::get('/permissions/{id}', 'AdminController@permission')->name('admin.permission');
    Route::get('/permissions/{id}/edit', 'AdminController@editPermission')->name('admin.permission.edit');
    Route::put('/permissions/{id}', 'AdminController@updatePermission')->name('admin.permission.update');
    Route::delete('/permissions/{id}', 'AdminController@deletePermission')->name('admin.permission.delete');
});
