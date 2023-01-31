<?php
Route::group([
    'namespace' => 'Pebblemark\Contact\Http\Controllers','middleware' => ['web']
], function () {
    Route::get('contact', 'ContactController@contact')->name('contact');
    Route::post('contact', 'ContactController@contactSubmit')->name('contactSubmit');
});
