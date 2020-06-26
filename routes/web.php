<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can registration web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//utama
Route::get('/', function () {
    return view('dashboard');
});
//auth
Route::get('login', 'LoginUser@login');
Route::get('admins', 'LoginUser@admins');
Route::post('loginPost', 'LoginUser@loginPost'); 
Route::get('register', 'LoginUser@register');
Route::post('/registerPost', 'LoginUser@registerPost'); 
Route::get('dashboard', 'LoginUser@dashboard'); 
Route::get('logout', 'LoginUser@logout');

//admin obyek wisata
Route::get('/admin/objek_wisata', 'Viewcontroller@indexAdmin');
Route::get('/objek_wisata/tambah','Viewcontroller@tambah');
Route::post('/objek_wisata/submit','Viewcontroller@submit');
Route::get('/objek_wisata/edit/{id}','Viewcontroller@edit');
Route::post('/objek_wisata/update','Viewcontroller@update');
Route::get('/objek_wisata/hapus/{id}','Viewcontroller@hapus');
Route::get('/objek_wisata/lihat/{id}','Viewcontroller@lihatAdmin');
Route::get('/objek_wisata/cari','Viewcontroller@cari');

//admin merchandise
Route:: get('/admin/merchandise', 'MerchandiseController@indexAdmin');
Route:: get('/merchandise/user', 'MerchandiseController@index_merchan_user');
Route:: get('/merchandise/tambah_merchan', 'MerchandiseController@tambah_merchan');
Route:: post('/merchandise/submit_merchan', 'MerchandiseController@submit_merchan');
Route:: get('/merchandise/edit_merchan/{id}', 'MerchandiseController@edit_merchan');
Route:: post('/merchandise/update_merchan', 'MerchandiseController@update_merchan');
Route:: get('/merchandise/hapus_merchan/{id}', 'MerchandiseController@hapus_merchan');
Route:: get('/merchandise/lihat_merchan/{id}', 'MerchandiseController@lihat_merchan_admin');

//user obyek wisata
Route::get('/user/objek_wisata', 'Viewcontroller@indexUser');
Route::get('/user/objek_wisata/lihat/{id}','Viewcontroller@lihatUser');
Route::get('/user/objek_wisata/beli/{id}','Viewcontroller@lihatDetailTiket');

//user merchandise
Route:: get('/user/merchandise', 'MerchandiseController@indexUser');
Route:: get('/merchandise/lihat_merchan/{id}', 'MerchandiseController@lihat_merchan_user');
