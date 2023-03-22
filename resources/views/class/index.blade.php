<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Class') }}
        </h2>
    </x-slot>
    <x-slot name="head">
        <title>Class | {{ config('app.name', 'Laravel') }}</title>
        @livewireStyles
        @livewireScripts
    </x-slot>
    <body>
        <div class="mx-14 mt-5 pb-10">
            <button class="flex hover:bg-gray-300 p-2 rounded mr-4 mb-4">
                <img src="/icons/audit.png" alt="" class="w-5 mr-2">
                <p>Daftar Tugas</p>
            </button>
            <div class=" grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-4">
                {{-- @foreach ($names as $name) --}}
                    <div class="bg-white rounded-lg p-4 w-72 h-72 relative hover:shadow-md">
                        <div>
                            <p class="text-medium">RPL Bimbel 1</p>
                            <p class="text-sm">Smk idn boarding school</p>
                            <p class="text-sm">daffa</p>
                        </div>
                        <div class="bottom-4 right-4 absolute  flex ">
                            <button>
                                <img src="/icons/form.png" alt="" class="w-5">
                            </button>
                            <img src="/icons/file.png" alt="" class="w-5 ml-4">
                        </div>
                    </div>
                {{-- @endforeach --}}
            </div>
        </div>
        
    </body>
</x-app-layout>
