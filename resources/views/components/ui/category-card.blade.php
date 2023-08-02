@props(['title' => '','src'=>''])
<div class=" mr-5">
    <div {{ $attributes->merge(['class' => 'w-80 h-44 rounded-xl overflow-hidden  relative']) }}>
        <x-ui.category.category-image :src="$src" :text="$title"></x-ui.category.category-image>
    </div>
    <x-ui.category.category-text :text="$title"></x-ui.category.category-text>

</div>
