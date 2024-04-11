<x-app-layout>
    <!-- This is an example component -->
    @dd($soldProducts)
    @foreach ($soldProducts as $soldProduct)
        <div class="mt-4 rounded-xl border p-5 shadow-md w-9/12 bg-white">
            <div class="flex w-full items-center justify-between border-b pb-3">
                <div class="flex items-center space-x-3">
                    <div class="h-8 w-8 rounded-full bg-slate-400 bg-[url('https://i.pravatar.cc/32')]"></div>
                    <div class="text-lg font-bold text-slate-700">{{ $soldProduct->user->name }}</div>
                </div>
                <div class="flex items-center space-x-8">
                    <button
                        class="rounded-2xl border bg-neutral-100 px-3 py-1 text-xs font-semibold">{{ $soldProduct->id }}</button>
                    <div class="text-xs text-neutral-500">{{ $soldProduct->created_at }}</div>
                </div>
            </div>

            <div class="mt-4 mb-6">
                <div class="flex">
                    <div class="">
                        <p class="mb-3 text-xl font-bold">{{ $soldProduct->client_name }}
                            {{ $soldProduct->client_phone_number }}</p>
                        <div class="text-xl font-bold text-neutral-600">{{ $soldProduct->client_address }}</div>
                    </div>
                    <div class="img m-2 flex">
                        <img src="{{ asset($soldProduct->photo) }}" alt="mebel rasmi rasmi">
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-between text-slate-500">
                <div class="flex space-x-4 md:space-x-8">
                    <div class="cursor-pointer items-center transition hover:text-slate-600">
                        <span>Tan narxi: 800</span>
                    </div>
                    <div class="cursor-pointer items-center transition hover:text-slate-600">
                        <span>Sotilgan narxi: 900</span>
                    </div>
                    <div class="text-sm font-bold">
                        <span>Foyda: 100</span>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</x-app-layout>
