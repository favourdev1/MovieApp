<div class=" flex flex-col w-1/6 bg-zinc-900 overflow-y-auto px-4 pb-4 no-scrollbar">


    <div class="flex-1  ">

        <div class=" ">
            <div class="flex px- items-center  h-20   ">
                <x-profile-head></x-profile-head>
                <div class="flex-1 px-3">
                    <p class="text-neutral-200 text-md font-medium ">John Doe</p>

                    <p class="text-neutral-500 text-sm m-0">baby@gmail.com</p>
                </div>
                <div>
                    <x-icon.down-icon class="hover:bg-zinc-800  rounded-full p-2"></x-icon.down-icon>
                </div>
            </div>

            {{-- SEARCH BAR --}}
            <div class="flex flex-col flex-1  mt-2  ">
                <x-ui.search-bar></x-ui.search-bar>
            </div>

        </div>






        <div class="my-6  ">
            <p class="text-neutral-400 mt-4 mb-3">Genre</p>

            <div class="grid grid-cols-2 gap-2 text-md overflow-x-auto no-scrollbar  ">
                <div
                    class="rounded-full flex items-center justify-between  bg-red-600 text-neutral-300 px-4 font-medium py-3 h-full ">
                    Action

                    <x-icon.tick-icon></x-icon.tick-icon>

                </div>

                <div
                    class="rounded-full flex items-center justify-between  bg-neutral-950 text-neutral-300 px-4 font-medium py-3 h-full  ">
                    Comedy
                    <x-icon.plus-icon></x-icon.plus-icon>


                </div>

                <div
                    class="rounded-full flex items-center justify-between bg-neutral-950 text-neutral-300 px-4 font-medium py-3 h-full">
                    Horror
                    <x-icon.plus-icon></x-icon.plus-icon>
                </div>

                <div
                    class="rounded-full flex items-center justify-between bg-neutral-950 text-neutral-300 px-4 font-medium py-3 h-full">
                    Thriller
                    <x-icon.plus-icon></x-icon.plus-icon>
                </div>

                <div
                    class="rounded-full flex items-center justify-between bg-neutral-950 text-neutral-300 px-4 font-medium py-3 h-full">
                    Adventure
                    <x-icon.plus-icon></x-icon.plus-icon>
                </div>

                <div
                    class="rounded-full flex items-center justify-between bg-neutral-950 text-neutral-300 px-4 font-medium py-3 h-full">
                    Animation
                    <x-icon.plus-icon></x-icon.plus-icon>
                </div>

                <div
                    class="rounded-full flex items-center justify-between bg-neutral-950 text-neutral-300 px-4 font-medium py-3 h-full">
                    Historical
                    <x-icon.plus-icon></x-icon.plus-icon>
                </div>

                <div
                    class="rounded-full flex items-center justify-between bg-neutral-950 text-neutral-300 px-4 font-medium py-3 h-full">
                    Mystery
                    <x-icon.plus-icon></x-icon.plus-icon>
                </div>

            </div>
        </div>


        <div class="">
            <div>
                <div class="flex items-center justify-between my-4  ">
                    <p class="text-white text-xl font-semibold">Recent Download</p>
                    <div class="inline-flex items-center text-neutral-400">
                        <p>See more</p>
                        <x-icon.right-icon></x-icon.right-icon>
                    </div>

                </div>

                <ul class="flex  overflow-x-auto no-scrollbar ">

                    <li class="  ">
                        <x-ui.play-card class="w-11/12 h-56" title="Ironman" date="2021" imgUrl="img/armyofdead.jpg"
                            starttime="50:09" endtime="1:24:30"></x-ui.play-card>
                    </li>
                </ul>
            </div>


            <div>
                <div class="flex items-center justify-between my-4">
                    <p class="text-white text-xl font-semibold">Bookmarked</p>
                    <div class="inline-flex items-center text-neutral-400">
                        <p>See more</p>
                        <x-icon.right-icon></x-icon.right-icon>
                    </div>

                </div>

                <ul class="flex  overflow-x-aut0 no-scrollbar ">

                    <li class="  ">
                        <x-ui.play-card class="w-11/12 h-56 " title="Ironman" date="2021" imgUrl="img/kate.jpeg"
                            starttime="50:09" endtime="1:24:30"></x-ui.play-card>
                    </li>
                </ul>
            </div>
        </div>

    </div>



</div>