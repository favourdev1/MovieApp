@props(['src'=>''])
<img {{$attributes->merge(['class'=>"object-fit","src"=>$src, "alt"=>"horror-image"])}}/>