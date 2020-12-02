<?php

namespace SmsCampaign\Http\Livewire\Sms;

use Livewire\Component;

class Template extends Component
{
    public $mode;
    public $template_id;

    public function render()
    {
        return view('smsComponent::sms.template');
    }
}
