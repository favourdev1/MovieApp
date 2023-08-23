@props(['src'=>''])
<img {{$attributes->merge(['class'=>"object-cover ","src"=>$src, "alt"=>"horror-image"])}}/>