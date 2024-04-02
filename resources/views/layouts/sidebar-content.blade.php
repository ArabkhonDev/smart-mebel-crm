<div class="bg-white shadow h-full relative pl-4">
    <div class="links" style="transform: translateX(27px);">
        <style>
            .link_item {
                width: 90%;
                padding: 5px 10px;
                transition: 0.3s ease-in-out;
            }

            .link_item:hover {
                background-color: rgb(210, 174, 246);
            }
        </style>
        @if (auth()->user()->role->name == 'manager')
            <div class="link_item">
                <a href="{{route('worker.index')}}" class="fond-bold">Ishchilar</a>
            </div>
        @else
            <div class="link_item">
                <a href="#" class="fond-bold">Maxsulot sotish</a>
            </div>
        @endif
        <div class="link_item">
            <a href="{{route('soldProduct.index')}}" class="fond-bold">Sotilgan maxsulotlar</a>
        </div>
        <div class="link_item">
            <a href="#" class="fond-bold">Kunlik daromad</a>
        </div>
        <div class="link_item">
            <a href="#" class="fond-bold">Oylik daromad</a>
        </div>
        <div class="link_item">
            <a href="#" class="fond-bold">Yillik daromad</a>
        </div>
    </div>
</div>