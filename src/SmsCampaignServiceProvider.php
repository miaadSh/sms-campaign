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

        $this->configurePublishing();

        Livewire::component('smsComponent::campaign', Campaign::class);
        Livewire::component('smsComponent::group', Group::class);
        Livewire::component('smsComponent::template', Template::class);
    }


    /**
     * Configure publishing for the package.
     *
     * @return void
     */
    protected function configurePublishing()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../public' => public_path('vendor/zoomila/sms-campaign'),
            ], 'zoomila-assets');

            $this->publishes([
                __DIR__.'/../config/sms-campaign.php' => config_path('sms-campaign.php'),
            ], 'zoomila-config');

            $this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/zoomila'),
            ], 'zoomila-lang');

            /* $this->publishes([
                __DIR__.'/../resources/stubs/providers/CanvasServiceProvider.stub' => app_path(
                    'Providers/CanvasServiceProvider.php'
                ),
            ], 'zoomila-provider'); */
        }
    }

}
