<div {{ $attributes->merge(['class' => '']) }}>
    <form action="#" method="get">
        <input type="text" name="search"
            class="border rounded-full bg-neutral-950 text-sm text-neutral-200 border-transparent  focus:outline-0 w-full py-3 px-4"
            placeholder="Search here...." value="{{ $slot }}" id="search">
    </form>
</div>
