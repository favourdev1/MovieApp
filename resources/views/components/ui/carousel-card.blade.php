<div
    {{ $attributes->merge(['class' => 'h-64   rounded-2xl bg-no-repeat px-5 bg-center ', 
    'style' => " width:27rem; 
    background: linear-gradient(to bottom, transparent, #000000bb), url('{$imgUrl}');
     background-position:center center;
      background-size:cover"]) }}>
    <div class="flex flex-col py-4 text-white h-full justify-end">
        <div>
            <p class="font-semibold text-2xl">
                {{ $title }}
            </p>

        </div>

        <div class="flex justify-between">
            <div>
                <p class="font-light text-sm drop-shadow-2xl">
                    {{ $description }}
                </p>
                <div class="flex items-center">
                    <x-image.imbd-image></x-image.imbd-image>
                    <small class="text-neutral-300 ml-2">{{ $rating }}</small>
                </div>


            </div>

            <div class="inline-flex items-center">
                <p class="bg-red-600/50 cursor-pointer hover:bg-red-600 px-4 py-3 rounded-full text-sm">Watch Now</p>

                <x-icon.plus-icon class="ml-2 p-2 rounded-full text-white bg-neutral-800 bg-opacity-50">
                </x-icon.plus-icon>
            </div>
        </div>
    </div>


</div>
