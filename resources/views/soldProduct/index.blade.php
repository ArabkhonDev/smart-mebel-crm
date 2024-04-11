    <div>
        sotilgan maxsulotlar
    </div>
    <!-- This is an example component -->
    {{-- @dd($soldProducts)
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
    @endforeach --}}

        <div class="p-4">
            <div class="bg-white p-8 rounded-md w-full">
                <div class=" flex items-center justify-between pb-6">
                    <div>
                        <h2 class="text-gray-600 font-semibold">Studentlar</h2>
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <form method="GET" class="flex w-full bg-gray-50 items-center p-2 rounded-md">
                            @method('GET')
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd" />
                            </svg>
                            <select name="group_id" id="" class="py-2 px-4 outline-none rounded ml-2">
                                <option>Xammasi</option>
                                @foreach ($workers as $worker)
                                @if (request()->worker_id == $worker->id)
                                <option selected='true' value="{{ $worker->id }}">{{ $worker->name }}</option>
                                @else
                                <option value="{{ $worker->id }}">{{ $worker->name }}</option>
                                @endif
                                @endforeach
                            </select>
                            <input value="{{ request()->search }}" class="bg-gray-50 ml-1 w-full outline-none block"
                                type="text" name="search" placeholder="search...">
                        </form>
                        <div class="lg:ml-2 ml-1 space-x-8" style="width: 200px">
                            <a href="{{ route('users.create') }}"
                                class="bg-indigo-600 px-1 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">Student kiritish</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                            <table class="min-w-full leading-normal">
                                <thead>
                                    <tr>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Ism familiya
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Guruxi
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Eski maktabi
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            telefon raqami
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            tug'ulgan sanasi
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Yashash manzili
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <div class="flex items-center">
                                                    <div class="ml-3">
                                                        <a href="{{route('users.show', ['user'])}}"></a>
                                                        <p class="text-gray-900 whitespace-no-wrap font-bold">
                                                            {{ $worker->name }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                         
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <img src="#" class="text-gray-900 whitespace-no-wrap">
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    <a
                                                        href="tel:{{ $worker->phones->first() ? $worker->phones->first()->number : '--' }}">
                                                        {{ $worker->phones->first() ? $worker->phones->first()->number : '--' }}</a>
                                                </p>
                                            </td>
                                            <td class="px-1 py-5">
                                                <span style="display: flex; max-width:300px">
                                                    {{ $worker->birthday }}
                                                </span>
                                            </td>
                                            <td class="px-1 py-5">
                                                <span style="display: flex; max-width:300px">
                                                    {{ $worker->address }}
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between">
                                {{ $workers->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    