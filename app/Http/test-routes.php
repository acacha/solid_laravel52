<?php

use App\User;

Route::group(['middleware' => ['web']], function () {
    Route::get('testSendEmail1','ContactEmailController@sendEmail');

    Route::get('/testSendEmail2', function (User $user) {
        //Profiling
        Debugbar::startMeasure("SendSubscriptionEmail");

        dispatch(new \App\Jobs\SendSubscriptionEmail($user));
        Debugbar::stopMeasure("SendSubscriptionEmail");
        return 'Done!';
    });
});