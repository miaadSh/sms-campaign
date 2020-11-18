<?php

namespace SmsCampaign\Http\Livewire\Sms;

use Livewire\Component;

class Campaign extends Component
{
    public $excrement = 'poop';
    public $count;

    public function mount()
    {
        $this->count = 10;
    }

    public function increment() {
        $this->count += 1;
    }

    public function decrement() {
        $this->count -= 1;
    }
    public function render()
    {
        return view('smsComponent::sms.campaign');
    }
}
