<?php

use Illuminate\Http\Request;

Route::match(['options','post'],'/mst_prefecres/search', 'MstPrefectureController@index');
Route::match(['options','post'],'/mst_prefecres', 'MstPrefectureController@store');
