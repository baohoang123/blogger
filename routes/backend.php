<?php

Route::group([
    

	], function(){
	Route::get('/', 'BackController@index');

	Route::get('/backtest', 'BackController@backtest');

	Route::get('/login', 'AuthController@getLogin');
	});

