<?php

/*Route::get('contact-us',function(){
	dd('contact us');
});*/


Route::group(['middleware' => 'web'], function () {
    
    Route::get('contact-us','Sharmag\Contactus\ContactusController@index')->name('getcontact');   
    Route::post('contact-us','Sharmag\Contactus\ContactusController@postForm')->name('contactus'); 
});




