<div {{$attributes->merge(['class' => 'text-lg flex items-center justify-center rounded shadow-md w-full h-12'])}}>
    <p class="pointer-events-none">
    {{$slot}}
    </p>
</div>