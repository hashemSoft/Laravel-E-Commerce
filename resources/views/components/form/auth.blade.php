@props(['tap' => '1'])
@php
    $title;
    public int $tap;
    if(request()->routIs('login')){
        $tap
    }
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/icon.png') }}" style="whidth: 16px;" />

    <title>{{ $title }}</title>

    <!-- Fonts -->
    @include('layouts.fonts')
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-neutral-200 font-display antialiased ">
    <div class="min-h-screen flex flex-col sm:justify-start items-center py-4 ">
        <div class="mb-4 flex justify-center items-center    ">
            <a href="/" class="py-2 px-4 h-14 inline-block bg-white rounded-lg shadow-md">
                <x-app.application-logo class="h-full fill-current text-gray-500" />
            </a>
        </div>
        {{ $slot }}

    </div>
</body>

</html>
