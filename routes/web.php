<?php

$namespace = 'SmsCampaign\Http\Controllers';

Route::group([
    "namespace"=>$namespace,
],function(){
    Route::resource('sms-campaign', 'SmsCampaignController');
    Route::resource('sms-template', 'SmsTemplateController');
    Route::resource('sms-group', 'SmsGroupController');
});

