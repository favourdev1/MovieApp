<div class=" bg-neutral-950 w-2/3 h-full relative overflow-y-auto no-scrollbar ">

    {{-- top nav --}}
    <div class="px-5 h-20 flex items-center bg-neutral-950 fixed  border-b border-neutral-900 w-2/3">

        <div class="inline-flex flex-1">
            <x-sidebar.menu class="font-medium text-white ">Movies </x-sidebar.menu>
            <x-sidebar.menu class="mx-3 font-light"> Series </x-sidebar.menu>
            <x-sidebar.menu class="font-light">TV Shows </x-sidebar.menu>

        </div>
        <div class="inline-flex">
            <x-icon.signal-icon class="mx-2 hover:bg-neutral-800 small p-3 rounded-full"></x-icon.signal-icon>
            <x-icon.notification-icon class="mx-2 hover:bg-neutral-800 small p-3 rounded-full">
            </x-icon.notification-icon>
            {{-- <x-icon.notification-icon class="mx-2"></x-icon.notification-icon> --}}
            <x-icon.dropdown-icon class="mx-2 hover:bg-neutral-800 small p-3 rounded-full"></x-icon.dropdown-icon>

        </div>
    </div>





    {{-- this is where i am trying to use it in  --}}
    <div class=" h-full px-8 mt-20">
        <div>
            <x-ui.main-section-head name="Trending movies"></x-ui.main-section-head>

            <div class="w-full ">


                <ul class="flex w-full overflow-x-auto no-scrollbar">

                    <li class=" mr-7   ">
                        <x-ui.carousel-card title="Transformers" description="2023" imgUrl="img/transformer.webp">
                        </x-ui.carousel-card>
                    </li>


                    <li class=" mr-7   ">
                        <x-ui.carousel-card title="Army of the dead" description="2021" imgUrl="img/armyofdead.jpg">
                        </x-ui.carousel-card>
                    </li>


                    <li class=" mr-7   ">
                        <x-ui.carousel-card title="Across the spiderverse" description="2021"
                            imgUrl="img/spiderman.jpg">
                        </x-ui.carousel-card>
                    </li>




                    <li class=" mr-7   ">
                        <x-ui.carousel-card title="Army of the dead" description="2021" imgUrl="img/armyofdead.jpg">
                        </x-ui.carousel-card>
                    </li>
                </ul>



            </div>

        </div>


        <div>
            <x-ui.main-section-head name="Continue watching" class="mt-4"></x-ui.main-section-head>

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
                {{-- <li class=" mr-7   ">
                    <x-ui.play-card title="" date="2021"></x-ui.play-card>
                </li> --}}
            </ul>
        </div>


        <!-- Anime Section -->
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






</div>
