@props(['style'=>''])
<div {{ $attributes->merge(['class' => 'w-full bg-center bg-cover ']) }}>

    {{ $slot }}
</div>
