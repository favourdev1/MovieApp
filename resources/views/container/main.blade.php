<div class=" bg-neutral-950 w-2/3 h-100">
    <div class="px-4 h-20 flex items-center border-b border-neutral-900">

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

    <div class="flex flex-col">
        <div class="flex items-center justify-between p-4">
            <p class="text-md font-medium text-white text-lg">Trending Movies</p>
            <div class="flex items-center ">
                <p class="text-sm text-neutral-500 mr-3">See all</p>
                <x-icon.right-icon class="text-neutral-500"></x-icon.right-icon>
            </div>
        </div>



        <div class="w-full h-60 px-5">
            <div class="glide w-full">

                <ul class="flex w-full overflow-x-auto no-scrollbar">

                    <li class=" mr-12   ">
                        <x-ui.carousel-card title="Army of the dead" description="2021" imgUrl="img/armyofdead.jpg">
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

                    <li class=" mr-12   ">
                        <x-ui.carousel-card title="Army of the dead" description="2021" imgUrl="img/armyofdead.jpg">
                        </x-ui.carousel-card>
                    </li>
                </ul>

                <div class="glide__bullets" data-glide-el="controls[nav]">
                    <button class="glide__bullet" data-glide-dir="=0"></button>
                    <button class="glide__bullet" data-glide-dir="=1"></button>
                    <button class="glide__bullet" data-glide-dir="=2"></button>
                </div>
            </div>
        </div>


    </div>


</div>
