<?php

$namespace = 'SmsCampaign\Http\Controllers';

Route::group([
    "namespace"=>$namespace,
    'middleware' => 'web',
],function(){
    Route::resource('sms-campaign', 'SmsCampaignController');
    Route::resource('sms-template', 'SmsTemplateController');
    Route::resource('sms-group', 'SmsGroupController');
    Route::resource('dashboard', 'DashboardController');
});

