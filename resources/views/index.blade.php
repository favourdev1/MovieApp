@extends('app')

@section('content')
    <div class="flex min-h-screen">
        @include('containerUi.home-top')
    </div>


<div class="px-7 lg:px-12 ">
    <div >
        <x-ui.category.category-text-head class="font-bold">Tv Shows</x-ui.category.category-text-head>


        <ul class="flex w-full overflow-x-auto no-scrollbar ">

            <li class=" mr-7   ">
                <x-ui.play-card title="Ironman" date="2021" imgUrl="img/ironman.webp" starttime="50:09"
                    endtime="1:24:30"></x-ui.play-card>
            </li>
            <li class=" mr-7   ">
                <x-ui.play-card title="TheFlash s03 E18" date="2020" imgUrl="img/the-flash.webp"
                    starttime="23:04" endtime="49:34"></x-ui.play-card>
            </li>
            <li class=" mr-7   ">
                <x-ui.play-card title="Guardians of the galaxy" date="2021" imgUrl="img/rocket.webp"
                    starttime="23:04" endtime="49:34"></x-ui.play-card>
            </li>
            
            
            <li class=" mr-7   ">
                <x-ui.play-card title="Ironman" date="2021" imgUrl="img/ironman.webp" starttime="50:09"
                    endtime="1:24:30"></x-ui.play-card>
            </li>
            <li class=" mr-7   ">
                <x-ui.play-card title="TheFlash s03 E18" date="2020" imgUrl="img/the-flash.webp"
                    starttime="23:04" endtime="49:34"></x-ui.play-card>
            </li>
            <li class=" mr-7   ">
                <x-ui.play-card title="Guardians of the galaxy" date="2021" imgUrl="img/rocket.webp"
                    starttime="23:04" endtime="49:34"></x-ui.play-card>
            </li>
            
            <li class=" mr-7   ">
                <x-ui.play-card title="Ironman" date="2021" imgUrl="img/ironman.webp" starttime="50:09"
                    endtime="1:24:30"></x-ui.play-card>
            </li>
            <li class=" mr-7   ">
                <x-ui.play-card title="TheFlash s03 E18" date="2020" imgUrl="img/the-flash.webp"
                    starttime="23:04" endtime="49:34"></x-ui.play-card>
            </li>
            <li class=" mr-7   ">
                <x-ui.play-card title="Guardians of the galaxy" date="2021" imgUrl="img/rocket.webp"
                    starttime="23:04" endtime="49:34"></x-ui.play-card>
            </li>
        </ul>
    </div>

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
    </div></div>
@endsection
