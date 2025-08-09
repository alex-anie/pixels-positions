@php
    $classes = 'p-4 mt-4 bg-white/5 rounded-xl flex gap-x-6 gap-y-6 border border-transparent hover:border-blue-900 transition-colors duration-1000 group';
@endphp

<div {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</div>