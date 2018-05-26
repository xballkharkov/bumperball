<?php

/*Route::get('', function () {
    return redirect('/auth/login');
});     */

Route::get('dashboard', 'Admin\HomeController@index')->name('admin.dashboard');

Route::get('xorders', ['as' => 'adminOrders', 'uses' => 'Admin\XorderController@index'])->name('admin.xorders');
Route::get('stadiums', ['as' => 'adminStadiums', 'uses' => 'Admin\StadiumController@index'])->name('admin.stadiums');
