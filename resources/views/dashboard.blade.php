<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (auth()->user()->role->name == 'manager')
                    <h1 class="text-xl font-bold py-2">Sotilgan maxsulotlar</h1>
                    @include('soldProduct.index')
                    @else
                       @include('soldProduct.create')
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
