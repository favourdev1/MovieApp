<div class="hidden flex flex-col w-1/6 bg-zinc-900 overflow-y-auto px-4 pb-4 no-scrollbar">


    <div class="flex-1  ">

        <div class=" ">
            <div class="flex px- items-center  h-20   hover:cursor-pointer  hover:border-neutral-200 hover:rounded-xl ">


                <x-profile-head></x-profile-head>


                <div class="flex-1 px-3">
                    <p class="text-neutral-200 text-md font-medium ">{{ Auth::user()->firstname}}{{ Auth::user()->lastname}}</p>

                    <p class="text-neutral-500 text-sm m-0">{{ Auth::user()->email }}</p>
                </div>


                <x-dropdown align="right" width="48">

                    <x-slot name="trigger">
                        <div>
                            <x-icon.down-icon class="hover:bg-zinc-800  rounded-full p-2"></x-icon.down-icon>
                        </div>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>


                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>

    {{-- ###################### --}}






    {{-- SEARCH BAR --}}
    <div class="flex flex-col flex-1  mt-2  ">
        <x-ui.search-bar></x-ui.search-bar>
    </div>

    {{-- </div> --}}






    <div class="my-6  ">
        <p class="text-neutral-400 mt-4 mb-3">Genre</p>

        <div class="grid grid-cols-2 gap-2 text-sm overflow-x-auto no-scrollbar  ">
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
                <p class="text-white text-md font-semibold">Recent Download</p>
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
                <p class="text-white text-md font-semibold">Bookmarked</p>
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
