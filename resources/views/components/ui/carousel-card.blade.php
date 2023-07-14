<div
    {{ $attributes->merge(['class' => 'h-72  bg-cover rounded-3xl bg-no-repeat px-5 py-5', 'style' => " width:30rem;background: linear-gradient(to bottom, transparent, #00000095), url('{$imgUrl}')"]) }}>
    <div class="flex flex-col py-4 text-white h-full justify-end">
        <div>
            <p class="font-medium text-2xl">
                {{ $title }}
            </p>

        </div>

        <div class="flex justify-between">
            <div>
                <p class="font-light text-sm">
                    {{ $description }}
                </p>
                <div class="flex items-center">
                    <x-image.imbd-image></x-image.imbd-image>
                    <small class="text-neutral-300 ml-2">{{ $rating }}</small>
                </div>


            </div>

            <div class="inline-flex items-center">
                <p class="bg-red-600 bg-opacity-50 px-4 py-2 rounded-full text-sm">Watch Now</p>

                <x-icon.plus-icon class="ml-2 p-2 rounded-full text-white bg-neutral-500 bg-opacity-50">
                </x-icon.plus-icon>
            </div>
        </div>
    </div>
</div>
