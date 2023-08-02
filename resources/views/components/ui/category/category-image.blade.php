@props(['text','src'])
<x-image.horror-image src="{{$src}}" class="h-full w-80 "></x-image.horror-image>
<p class="text-white rounded-full px-5 py-2 backdrop-blur-sm backdrop-brightness-50 bg-white/30 absolute  text-sm "
    style="top:5%; left:5%;">
  {{{$text}}}
</p>
