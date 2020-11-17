<?php

namespace SmsCampaign;

use Illuminate\Support\ServiceProvider;

class SmsCampaignServiceProvider extends ServiceProvider{

    public function register(){

    }

    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }

}
