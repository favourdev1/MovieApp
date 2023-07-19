{{-- @php
    static $hasLine = false;
@endphp --}}
<div {{$attributes->merge(['class' => 'text-neutral-400 flex items-center my-2 py-2 pl-2 hover:rounded-l-xl hover:bg-zinc-800  cursor-pointer'])}}>
    {{$slot}}

 {{-- @if (!$hasLine)
        <p class="h-6 w-1.5 bg-red-600 rounded-l-full"></p>
        @php($hasLine = true)
 @endif
      --}}
 
</div>


