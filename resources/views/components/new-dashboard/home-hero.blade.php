<div {{ $attributes->merge(['class'=>'   w-full bg-center bg-cover ' , 'style'=>'background-image: linear-gradient(to bottom,  transparent, #000000), url(\''.asset("img/movieTop.jpg").'\')' ]) }} >

   {{$slot}}
</div>