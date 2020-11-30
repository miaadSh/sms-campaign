@extends('sms::layouts.app')

@section('content')
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold leading-tight text-gray-900">
                مدیریت پیش نویس ها
            </h1>
            <a class="btn success" href="{{ route('sms-template.create') }}">
                <i class="fa fa-plus"></i> افزودن پیش نویس
            </a>
        </div>
    </header>
    <main>
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <div class="px-4 py-6 sm:px-0">
                @livewire('smsComponent::template')
            </div>
        </div>
    </main>
@endsection
