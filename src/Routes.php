<?php 
/*
|---------------------------------------------------------------------------
| REGISTER OR CAVILOCK ROUTE URI HERE
|---------------------------------------------------------------------------
*/
Route::get('applock/verify', function(){
	return Applock::verifySoftware();
});

Route::get('expired', function(){
	return view('applock::expired');
});

Route::get('invalid', function(){
	return view('applock::invalid');
});