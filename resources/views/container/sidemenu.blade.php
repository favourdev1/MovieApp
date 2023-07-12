<div class=" flex w-1/6 bg-zinc-900 ">
    @include('container.profile-container  ')

    <div class="flex flex-1 w-full flex-col  pt-20 pb-4  px-5 ">

        <div class="">
        <p class="text-neutral-400 text-sm mb-3 px-2">MENU</p>
        <x-sidebar.menu>
                <x-icon.home-icon class="text-red-600"></x-icon.home-icon>
                <x-text.sidebar-text class="text-neutral-100 font-medium">Home</x-text.sidebar-text>

            </x-sidebar.menu>
            <x-sidebar.menu>
                <x-icon.discover-icon class="text-neutral-500"></x-icon.discover-icon>
                <x-text.sidebar-text>Discover</x-text.sidebar-text>

            </x-sidebar.menu>
            <x-sidebar.menu>

                <x-icon.group-icon class="text-neutral-500"></x-icon.group-icon>
                <x-text.sidebar-text>Community</x-text.sidebar-text>
            </x-sidebar.menu>

            <x-sidebar.menu>

                <x-icon.clock-icon class="text-neutral-500"></x-icon.clock-icon>
                <x-text.sidebar-text>Coming Soon</x-text.sidebar-text>
                <div class="bg-red-800  rounded-full p-3 py-1 ms-auto  text-center ">
                    <p class="m-0 text-neutral-300 text-sm">2</p>
                </div>

            </x-sidebar.menu>



        </div>
        <hr class="my-8 border-b-1 border-neutral-800">



        <div class="">

            <p class="text-neutral-400 text-sm mb-3 px-2">Library</p>

            <x-sidebar.menu>
                <x-icon.clock-icon></x-icon.clock-icon>
                <x-text.sidebar-text class="text-neutral-400 ">Recent</x-text.sidebar-text>

            </x-sidebar.menu>
            <x-sidebar.menu>
                <x-icon.bookmark-icon class="text-neutral-500"></x-icon.bookmark-icon>
                <x-text.sidebar-text>BookMark</x-text.sidebar-text>

            </x-sidebar.menu>
            <x-sidebar.menu>

                <x-icon.star-icon class="text-neutral-500"></x-icon.star-icon>
                <x-text.sidebar-text>Top rated</x-text.sidebar-text>
            </x-sidebar.menu>

            <x-sidebar.menu>

                <x-icon.download-icon class="text-neutral-500"></x-icon.download-icon>
                <x-text.sidebar-text>Downloaded</x-text.sidebar-text>

            </x-sidebar.menu>


            <hr class="my-6 border-b-1 border-neutral-800">
        </div>


        <div class="flex-1">

           

            <x-sidebar.menu>
                <x-icon.setting-icon></x-icon.setting-icon>
                <x-text.sidebar-text class="text-neutral-400 ">Settings</x-text.sidebar-text>

            </x-sidebar.menu>
            <x-sidebar.menu>
                <x-icon.help-icon class="text-neutral-500"></x-icon.help-icon>
                <x-text.sidebar-text>Help</x-text.sidebar-text>

            </x-sidebar.menu>
           
        </div>

        <x-sidebar.menu>
            <x-icon.logout-icon class="text-neutral-500"></x-icon.logout-icon>
            <x-text.sidebar-text>Logout</x-text.sidebar-text>

        </x-sidebar.menu>
    </div>

</div>
