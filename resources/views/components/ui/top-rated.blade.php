
<div
    {{ $attributes->merge(['class' => 'h-56   rounded-2xl bg-no-repeat px-3 bg-center', 
    'style' => "  width:16rem;
    background: linear-gradient(to bottom, transparent, #00000000), url('{$imgUrl}');
     background-position:center center;
      background-size:cover"]) }}>
    <div class="flex flex-col py-4 text-white h-full justify-end">
        <div class="mb-3">
            <p class="font-semibold text-lg  ">
                {{ $title }}
            </p>
            <p class="font-light text-sm">
                {{ $description }}
            </p>
        </div>

        <div class="flex justify-between ">
            {{-- <div>
               
                <div class="flex items-center">
                    <x-image.imbd-image></x-image.imbd-image>
                    <small class="text-neutral-300 ml-2">{{ $rating }}</small>
                </div>


            </div> --}}
                <p class="bg-red-600/50 cursor-pointer hover:bg-red-600 px-4 py-3 rounded-full text-sm">Watch Now</p>

                <x-icon.plus-icon class="h-min p-2 rounded-full text-white bg-neutral-800 bg-opacity-50">
                </x-icon.plus-icon>
          
        </div>
    </div>


</div>
