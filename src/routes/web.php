<?php

Route::get('/', function () {
    return view('reservation');
});

Route::get('reservation', 'ReservationController@create'); // 入力フォーム
Route::post('reservation', 'ReservationController@store'); // 送信先
