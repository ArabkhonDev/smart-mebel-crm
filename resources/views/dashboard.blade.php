<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (auth()->user()->role->name == 'manager')
                    <h1 class="text-xl font-bold py-2">Sotilgan maxsulotlar</h1>
                        @include('components.soldProduct')
                    @else
                       @include('components.sell-form')
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
