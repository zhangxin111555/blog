<?php
/*
 * @Description: 
 * @Autor: yeyunyang
 * @Date: 2019-12-27 10:59:01
 * @LastEditTime : 2020-01-14 10:44:47
 */

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
});

Route::get('/wei', function () {
    return "yi";
});

Route::get('/aa','indexController@data');

Route::view('/bb','yi',['name'=>"张."]);

Route::view('/cc','er');

Route::post('/login','indexController@login');


// Route::get('/goods/{id}','indexController@goods')->where('id','\d+');

Route::get('/goods/{id}/{name?}','indexController@getgoods')->where('id','\d+');


Route::get('/Brand/create','BrandController@create');
Route::post('/Brand/store','BrandController@store');
Route::get('/Brand/index','BrandController@index')->middleware('checkLogin');
Route::get('/brand/edit/{id}','BrandController@edit');
Route::post('Brand/updates{id}','BrandController@updates');
Route::get('/brand/destroy/{id}','BrandController@destroy');


//测试1
Route::get('/Exercise/tj','ExerciseControlller@tj');
Route::post('/Exercise/tjyi','ExerciseControlller@tjyi');
Route::get('/Exercise/zs','ExerciseControlller@zs');

//测试二
Route::get('/Exerciseyi/tj','Exerciseyi@tj');
Route::post('/Exerciseyi/tjyi','Exerciseyi@tjyi');
Route::get('/Exerciseyi/zs','Exerciseyi@zs');
Route::get('/Exerciseyi/destroy/{id}','Exerciseyi@destroy');
Route::get('/Exerciseyi/edit/{id}','Exerciseyi@edit');
Route::post('Exerciseyi/updates{id}','Exerciseyi@updates');


//测试三
Route::get('/Exerciser/tj','Exerciser@tj');
Route::post('/Exerciser/tjyi','Exerciser@tjyi');
Route::get('/Exerciser/zs','Exerciser@zs');
Route::get('/Exerciser/destroy/{id}','Exerciser@destroy');
Route::get('/Exerciser/edit/{id}','Exerciser@edit');
Route::post('Exerciser/updates{id}','Exerciser@updates');


//无限极分类
Route::get('/CategoryController/create','CategoryController@create');
Route::post('/CategoryController/store','CategoryController@store');
Route::get('/CategoryController/index','CategoryController@index');
Route::get('/CategoryController/edit/{id}','CategoryController@edit');
Route::post('CategoryController/updates{id}','CategoryController@updates');
Route::get('/CategoryController/destroy/{id}','CategoryController@destroy');


//测试3
Route::get('MeasurementControllers/tj','MeasurementControllers@tj');
Route::post('MeasurementControllers/tjyi','MeasurementControllers@tjyi');
Route::get('MeasurementControllers/zs','MeasurementControllers@zs');


//登录
Route::get('Logo/tj','LogoControllers@tj');
Route::post('Logo/tjyi','LogoControllers@tjyi');
Route::get('Logo/tc','LogoControllers@tc');

//周测1
Route::get('Weekly/tj','Weekly@tj');
Route::post('Weekly/tjyi','Weekly@tjyi');

// 测试4
Route::get('Test/tj','Test@tj');
Route::post('Test/tjyi','Test@tjyi');
Route::get('Test/zs','Test@zs');
Route::get('/Test/destroy/{id}','Test@destroy');
Route::get('/Test/wyx','Test@wyx');
Route::get('/Test/show/{id}','Test@show');

//商品测试表
Route::get('Goodss/tj','Goodss@tj');





//测试5
Route::get('/Lou/tj','Lou@tj')->middleware('checkLogin');
Route::post('/Lou/tjyi','Lou@tjyi');
Route::get('/Lou/zs','Lou@zs')->middleware('checkLogin');
Route::get('/Lou/zss','Lou@zss')->middleware('checkLogin');
Route::get('/Lou/destroy/{id}','Lou@destroy');
Route::get('/Lou/show/{id}','Lou@show');


//qq邮箱发送测试
Route::get('/Lou/sendemail','Lou@sendemail');