@php
    $apiUrl = 'https://image.tmdb.org/t/p/original';
@endphp

<x-newDashboard.home-Hero class="pl-4 md:pl-7 lg:pl-12  pb-20"
    style="background-image: linear-gradient(to bottom,  transparent, #000000), url({{$apiUrl. $mainImage['backdrop_path'] }})">

    @include('layouts.navbar')

    <div class="h-full pb-12 mt-36 flex flex-col justify-end mt-auto">
        <p
            class="text-white rounded-full px-5 py-2 backdrop-blur-sm backdrop-brightness-10 bg-white/30 w-max  text-sm md:text-md mb-6">
            New Movie
        </p>
        <div class="text-white  w-full md:w-2/3 xl:w-3/4">

            <h3 class="text:lg xl:text-8xl font-bold">{{ $mainImage['title'] }}</h3>

            <p class="text-md lg:text-2xl text-slate-200 font-light">
                {{ $mainImage['overview'] }}
            </p>
        </div>

        <div class="flex mt-4 items-center ">

            {{-- Buttons  --}}
            <div class="rounded-full bg-white px-8 py-4 text-slate-900 flex items-center mr-5">
                <x-icon.play-icon class="pr-2"></x-icon.play-icon>
                <p>Watch Movie</p>
            </div>

            <div class="rounded-full bg-transparent px-8 py-4 text-slate-100 border border-slate-100 flex items-center">
                <p>More Info</p>
                <x-icon.right-icon class="ps-2"></x-icon.right-icon>

            </div>
        </div>

        {{-- Trending --}}

        <div class="w-full text-white my-12">
            <div class="flex items-center justify-between">
                <x-ui.category.category-text-head>Trending Movies</x-ui.category.category-text-head>
                <div
                    class="rounded-full bg-transparent px-6 mr-8 py-2 text-slate-100 border border-slate-100 flex items-center">
                    <p>See More</p>
                    <x-icon.right-icon class="ps-2"></x-icon.right-icon>

                </div>
            </div>

            {{-- @foreach ($categories['genres'] as $genre) --}}

            <div class="div">
                <div class="w-full flex items-center justify-start overflow-x-scroll  no-scrollbar text-white ">

                    @foreach ($trending['results'] as $trendingMovie)
                        <x-ui.category-card :title="''" :src="$apiUrl . $trendingMovie['poster_path']"></x-ui.category-card>
                    @endforeach


                </div>
            </div>

            <div class="w-full flex items-center justify-start overflow-x-scroll no-scrollbar text-white ">

                {{--  <x-ui.category-card title="Horror Sega" :src="asset('img/horror.jpg')"></x-ui.category-card> --}}

            </div>
        </div>




    </div>



</x-newDashboard.home-Hero>
