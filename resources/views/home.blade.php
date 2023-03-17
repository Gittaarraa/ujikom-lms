<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>
    <x-slot name="head">
        <title>Home | {{ config('app.name', 'Laravel') }}</title>
        @livewireStyles
        @livewireScripts
    </x-slot>
</x-app-layout>
