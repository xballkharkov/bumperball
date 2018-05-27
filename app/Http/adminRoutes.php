<?php

/*Route::get('', function () {
    return redirect('/auth/login');
});     */

Route::get('dashboard', 'Admin\HomeController@index')->name('admin.dashboard');

//Callbacks
Route::get('xorders', ['uses' => 'Admin\XorderController@index'])->name('admin.xorders');
Route::get('xorder/edit/{id}', ['uses' => 'Admin\XorderController@edit'])->name('admin.xorderEdit');
Route::put('xorder/save/{id}', 'Admin\XorderController@save')->name('admin.xorderSave');
Route::delete('xorder/delete/{id}', 'Admin\XorderController@delete')->name('admin.xorderDelete');

//Stadiums
Route::get('stadiums', ['uses' => 'Admin\StadiumController@index'])->name('admin.stadiums');
Route::get('stadium/edit/{id}', ['uses' => 'Admin\StadiumController@edit'])->name('admin.stadiumEdit');
Route::put('stadium/save/{id}', 'Admin\StadiumController@save')->name('admin.stadiumSave');
