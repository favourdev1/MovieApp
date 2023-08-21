@props(['src'=>''])
<img {{$attributes->merge(['class'=>"object-cover scale-y-90","src"=>$src, "alt"=>"horror-image"])}}/>