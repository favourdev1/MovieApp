@extends('app')

@section('content')
    <div class="flex min-h-screen">
        @include('containerUi.home-top')
        hvhjjvh
    </div>


    <div class="px-7 lg:px-12 ">
        @include('containerUi.category-vids')

        <div>
            <x-ui.main-section-head name="Anime">

            </x-ui.main-section-head>
            {{-- <x-icon.star-icon></x-icon.star-icon> --}}


            <ul class="flex w-full overflow-x-auto no-scrollbar ">

                <li class=" mr-7   ">
                    <x-ui.top-rated title="Attack on titan" description="2021" imgUrl="img/mikasa_wallpaper.jpg">
                    </x-ui.top-rated>
                </li>
                <li class=" mr-7   ">
                    <x-ui.top-rated title="One Piece" description="2021" imgUrl="img/onepiece.jpg">
                    </x-ui.top-rated>
                </li>

                <li class=" mr-7   ">
                    <x-ui.top-rated title="Naruto" description="2021" imgUrl="img/naruto.jpg">
                    </x-ui.top-rated>
                </li>

                <li class=" mr-7   ">
                    <x-ui.top-rated title="Demon Slayer" description="2021" imgUrl="img/demon_slayer.jpg">
                    </x-ui.top-rated>
                </li>



                <li class=" mr-7   ">
                    <x-ui.top-rated title="Death note" description="2021" imgUrl="img/deathnote.jpg">
                    </x-ui.top-rated>
                </li>


            </ul>
        </div>
    </div>
@endsection
