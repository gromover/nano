<?php

/*
	Home page
*/
Route::get('/', function() {
	return new View('home');
});

/*
	404 catch all
*/
Route::any('*', function() {
	return Response::error(404);
});