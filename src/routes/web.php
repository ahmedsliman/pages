<?php

Route::group(['namespace' => 'AhmedSliman\Pages\Http\Controllers'], function (){
    Route::get('pages', 'PagesController@index');
});
