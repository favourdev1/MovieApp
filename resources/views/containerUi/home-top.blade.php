<x-newDashboard.home-Hero class="px-7 lg:px-12">
    @include('layouts.navbar')

    <div class="h-full pb-12  flex flex-col justify-end mt-auto">
        <p class="text-md rounded-full bg-slate-400 bg-opacity-50 text-white w-max py-2 px-4 mb-6">
            New Movie
        </p>
        <div class="text-white w-full md:w-2/3 xl:w-2/4">
            {{-- TITLE  --}}

            <h3 class="text-8xl font-bold">Keluarga Cemara</h3>
            {{-- Description --}}
            <p class="text-2xl text-slate-200 font-light">
                This movie decipates a very desireable family without any problems and always get along everyday, until
                a father figure leaves his family and everything changes.
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
                    class="rounded-full bg-transparent px-7 py-3 text-slate-100 border border-slate-100 flex items-center">
                    <p>See More</p>
                    <x-icon.right-icon class="ps-2"></x-icon.right-icon>

                </div>
            </div>



            {{-- @foreach ($categories['genres'] as $genre)
          
            @php
                print_r($genre['name']);
            @endphp
        @endforeach --}}



            <div class="w-full flex items-center justify-start overflow-scroll-x no-scrollbar text-white ">
                 @foreach ($topRated as $genre)
                    <x-ui.category-card :title=" $genre['title'] " :src="asset('img/horror.jpg')"></x-ui.category-card>

                   

                  
                @endforeach 
  @php
                        // print_r($topRated);

                        // count($topRated)
                    @endphp
                {{-- {{$categories}} --}}
                {{-- <x-ui.category-card title="Horror Sega" :src="asset('img/horror.jpg')"></x-ui.category-card>

                <x-ui.category-card title="Horror Sega" :src="asset('img/horror.jpg')"></x-ui.category-card>

                <x-ui.category-card title="Horror Sega" :src="asset('img/horror.jpg')"></x-ui.category-card> --}}

            </div>
        </div>




    </div>



</x-newDashboard.home-Hero>
