<div
    {{ $attributes->merge([
        'class' => 'h-60 w-96  rounded-3xl bg-no-repeat px-5 ',
        'style' => "  background: linear-gradient(to bottom, transparent, #000000ea), url('{$imgUrl}'); background-position:center center; background-size:cover",
    ]) }}>
    <div class="flex flex-col py-4 text-neutral-200 h-full justify-end">

        <div class="inline-flex flex-1
     items-end justify-center">
            <x-icon.play-icon class="bg-gray-600 bg-opacity-50 rounded-full p-3 cursor-pointer mb-4"></x-icon.play-icon>
        </div>
        <div class="mb-2">
            <p class="font-semibold text-lg cursor-pointer">
               {{$title}}
            </p>
            <p class="font-light text-xs">
               {{$date}}
            </p>
        </div>

        <div class="flex justify-center items-center p-0 text-neutral-400">

            <small> {{$starttime}}</small>
            <progress class="progress-bar flex-1 rounded-full h-1 mx-3 " value="50" max="100"></progress>
            <small>{{$endtime}}</small>

        </div>
    </div>
</div>
