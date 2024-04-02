<div class='flex items-center justify-center min-h-screen from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'>
    <div class='w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-xl'>
        <div class='max-w-md mx-auto space-y-6'>

            <form action="{{route('soldProduct.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <h2 class="text-2xl font-bold ">Sotilgan maxsulot</h2>
                <p class="my-4 opacity-70">Xaridor ismi va manzili</p>
                <hr class="my-6">
                <input type="text" name="name" placeholder="sotilgan maxsulot xaqida malumot" class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200">
                <input type="text" name="client_name" placeholder="Xaridor ismi" required class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded">
                <input type="number" name="client_phone_number" placeholder="Xaridor tel nomeri +998(__) ___ __ __" required class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded">
                <input type="text" name="client_address" placeholder="Xaridor manzili" required class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded">
                <input type="number" name="orginal_price" placeholder="Tan narxi" required class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded">
                <input type="number" name="sale_price" placeholder="sotilgan narxi" required class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded">
                <input type="file" name="photo" placeholder="Maxsulot" required class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded">
                <input type="submit" class="py-3 px-6 my-2 bg-emerald-500 text-white font-medium rounded hover:bg-indigo-500 cursor-pointer ease-in-out duration-300" value="Send">
            </form>

        </div>
    </div>
</div>