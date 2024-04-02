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
                    <a href="{{route('worker.create')}}" class="btn  btn-secondary p-2" >ishchi qoshish Yaratish</a>
                    <h1 class="text-xl font-bold py-2">Sotilgan maxsulotlar</h1>
                    @include('components.soldProduct')
                    @elseif (auth()->user()->role->name == 'hisobchi')
                    @include('worker.create');
                    @else
                       @include('components.sell-form')
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
