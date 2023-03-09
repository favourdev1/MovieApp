@props(['style'=>''])
<div {{ $attributes->merge(['class' => 'w-full bg-center bg-cover ', 'style' => $style]) }}>

    {{ $slot }}
</div>
