@extends('sms::layouts.app')

@section('content')
    <header class="bg-white shadow">
        <div class="justify-between max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold leading-tight text-gray-900">
                مدیریت پیش نویس ها
            </h1>
        </div>
    </header>
    <main>
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <div class="px-4 py-6 sm:px-0">
                @livewire('smsComponent::template',['mode'=>$mode, "template_id"=>$template_id??null])
            </div>
        </div>
    </main>
@endsection
