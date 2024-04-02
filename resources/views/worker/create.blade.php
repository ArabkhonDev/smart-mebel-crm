<x-app-layout>
    <div class='flex items-center justify-center min-h-screen from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'>
        <div class='w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-xl'>
            <div class='max-w-md mx-auto space-y-6'>

                <form action="{{ route('worker.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h2 class="text-2xl font-bold ">Ishchi Yaratish</h2>
                    <hr class="my-6">
                    <input type="text" name="name" placeholder="ishchini ismi va familyasi"
                        class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200">
                    <input type="text" name="email" placeholder="ishchisini emaili" required
                        class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded">
                    <input type="password" name="password" placeholder="password" required
                        class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded">
                    <input type="file" name="photo" placeholder="password" required
                        class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded">
                    <input type="submit"
                        class="py-3 px-6 my-2 bg-emerald-500 text-white font-medium rounded hover:bg-indigo-500 cursor-pointer ease-in-out duration-300"
                        value="Send">
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
