<form action="#" method="get"
    {{ $attributes->merge(['class' => 'rounded-full bg-neutral-950 text-sm text-neutral-500 py-1 px-4 flex items-center']) }}>

    <x-icon.search-icon></x-icon.search-icon>
    <input type="text" name="search" class=" text-sm border-transparent bg-transparent  focus:outline-0 w-full ml-2 font-light"
        placeholder="Search movies" value="{{ $slot }}" id="search">
    <x-icon.filter-icon></x-icon.filter-icon>
        
</form>
