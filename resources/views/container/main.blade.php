<div class=" bg-neutral-950 w-2/3 h-100">
    <div class="px-5 h-20 flex items-center border-b border-neutral-900">

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






    <div class="flex flex-col px-8">
        <div>
            <x-ui.main-section-head name="Trending movies"></x-ui.main-section-head>

            <div class="w-full ">


                <ul class="flex w-full overflow-x-auto no-scrollbar">

                    <li class=" mr-12   ">
                        <x-ui.carousel-card title="Transformers" description="2023" imgUrl="img/transformer.webp">
                        </x-ui.carousel-card>
                    </li>

                    <li class=" mr-12   ">
                        <x-ui.carousel-card title="Across the spiderverse" description="2021"
                            imgUrl="img/spiderman.jpg">
                        </x-ui.carousel-card>
                    </li>

                    <li class=" mr-12   ">
                        <x-ui.carousel-card title="Army of the dead" description="2021" imgUrl="img/armyofdead.jpg">
                        </x-ui.carousel-card>
                    </li>


                    <li class=" mr-12   ">
                        <x-ui.carousel-card title="Army of the dead" description="2021" imgUrl="img/armyofdead.jpg">
                        </x-ui.carousel-card>
                    </li>
                </ul>



            </div>

        </div>


        <div>
            <x-ui.main-section-head name="Continue watching" class="mt-4"></x-ui.main-section-head>

            <ul class="flex w-full overflow-x-auto no-scrollbar ">

                <li class=" mr-12   ">
                    <x-ui.play-card title="Ironman" date="2021" imgUrl="img/ironman.webp" starttime="50:09" endtime="1:24:30"></x-ui.play-card>
                </li>
                <li class=" mr-12   ">
                    <x-ui.play-card title="Flash s03 E18" date="2020" imgUrl="img/the-flash.webp" starttime="23:04" endtime="49:34"></x-ui.play-card>
                </li>
                {{-- <li class=" mr-12   ">
                    <x-ui.play-card title="" date="2021"></x-ui.play-card>
                </li>
                <li class=" mr-12   ">
                    <x-ui.play-card title="" date="2021"></x-ui.play-card> --}}
                </li>
            </ul>
        </div>
    </div>






</div>
