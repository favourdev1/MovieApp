<div
    {{ $attributes->merge([
        'class' => '   rounded-2xl bg-no-repeat px-3 pt-5 pb-3 bg-center',
        'style' => "  width:16rem;
                    background: linear-gradient(to bottom, transparent, #00000000), url('{$imgUrl}');
                     background-position:center center;
                      background-size:cover",
    ]) }}>

    {{-- Ratings section  --}}
    <div class="flex items-center bg-zinc-950 rounded-full w-max px-2 py-1">
        <x-icon.star2-icon class="text-yellow-600"></x-icon.star2-icon>
        <small class="text-neutral-400 ml-2 text-xs">{{ $rating }}</small>
    </div>


    
    <div class="flex flex-col pt-16 text-white h-full justify-end">


        <div class="mb-3">
            <p class="font-semibold text-lg  ">
                {{ $title }}
            </p>
            <p class="font-light text-sm">
                {{ $description }}
            </p>
        </div>

        <div class="flex justify-between ">
           
            <p class="bg-red-600/50 cursor-pointer hover:bg-red-600 px-4 py-3 rounded-full text-sm">Watch Now</p>

            <x-icon.plus-icon class="h-min p-2 rounded-full text-white bg-neutral-800 bg-opacity-50">
            </x-icon.plus-icon>

        </div>
    </div>


</div>
