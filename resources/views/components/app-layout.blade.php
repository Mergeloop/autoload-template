<!DOCTYPE html>
<html lang="{{ \str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="{!! config('app.name') !!}" />
        <meta property="og:locale" content="en_US" />

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <x-autoload::header>
            @vite(['resources/css/app.css'])
        </x-autoload::header>

        <title>{{ $title }}</title>
    </head>
    <body>
        <x-autoload::notification-bar placement="above_header" class="mb-2 mx-auto max-w-5xl  flex items-center justify-between gap-x-6 bg-gray-900 px-6 py-2.5 sm:rounded-xl sm:py-3 sm:pl-4 sm:pr-3.5 text-white" />
        <header class="bg-gray-100">
            <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Main Navigation">
                <div class="flex lg:flex-1">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Logo</span>
                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
                @isset($main_navigation)
                    <div class="hidden lg:flex lg:gap-x-12">
                        @foreach($main_navigation['menu_items'] as $navigation_item)
                            <a href="{{ $navigation_item['link'] }}" class="text-sm font-semibold leading-6 text-gray-900">
                                {{ $navigation_item['name'] }}
                            </a>
                        @endforeach
                    </div>
                @endisset
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    <a href="/admin" class="text-sm font-semibold leading-6 text-gray-900">
                        Filament CMS <span aria-hidden="true">&rarr;</span>
                    </a>
                </div>
            </nav>
        </header>
        <x-autoload::notification-bar placement="below_header" class="mt-2 mx-auto max-w-5xl flex items-center justify-between gap-x-6 bg-gray-900 px-6 py-2.5 sm:rounded-xl sm:py-3 sm:pl-4 sm:pr-3.5 text-white" />

        <main class="flex flex-col mx-auto max-w-7xl px-6 lg:px-8 py-4" role="main">
            {{ $slot }}
        </main>

        <footer class="bg-gray-100">
            <div class="mx-auto max-w-7xl px-6 py-12 md:flex md:items-center md:justify-between lg:px-8">
                @isset($footer_navigation)
                    <div class="flex justify-center space-x-6 md:order-2">
                        @foreach($footer_navigation['menu_items'] as $navigation_item)
                            <a href="{{ $navigation_item['link'] }}" class="text-gray-400 hover:text-gray-500 text-center underline underline-offset-2">
                                {{ $navigation_item['name'] }}
                            </a>
                        @endforeach
                    </div>
                @endisset
                <div class="mt-8 md:order-1 md:mt-0">
                    <p class="text-center text-xs leading-5 text-gray-500">&copy; {{ date('Y') }} Website Name. All rights reserved.</p>
                </div>
            </div>
        </footer>

        <x-autoload::footer>
            @vite(['resources/js/app.js'])
        </x-autoload::footer>
    </body>
</html>
