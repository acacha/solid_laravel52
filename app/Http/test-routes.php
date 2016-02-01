<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('testSendEmail1','ContactEmailController@sendEmail');

    Route::get('/testSendEmail2', function () {
        //Profiling
        Debugbar::startMeasure("SendSubscriptionEmail");
        dispatch(new \App\Jobs\SendSubscriptionEmail());
        Debugbar::stopMeasure("SendSubscriptionEmail");
        return 'Done!';
    });
});