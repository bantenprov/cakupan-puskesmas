<?php

Route::group(['prefix' => 'cakupan-puskesmas'], function() {
    Route::get('demo', 'Bantenprov\CakupanPuskesmas\Http\Controllers\CakupanPuskesmasController@demo');
});
