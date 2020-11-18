<?php

namespace SmsCampaign;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use SmsCampaign\Http\Livewire\Sms\Campaign;
use SmsCampaign\Http\Livewire\Sms\Group;
use SmsCampaign\Http\Livewire\Sms\Template;

class SmsCampaignServiceProvider extends ServiceProvider{

    public function register(){

    }

    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views','sms');
        $this->loadViewsFrom(__DIR__.'/../resources/views/livewire','smsComponent');

        Livewire::component('smsComponent::campaign', Campaign::class);
        Livewire::component('smsComponent::group', Group::class);
        Livewire::component('smsComponent::template', Template::class);
    }

}
