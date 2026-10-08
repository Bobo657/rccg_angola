@props(['href', 'variant' => 'primary', 'icon' => 'arrow-right', 'external' => false])
<a href="{{ $href }}" @if($external) target="_blank" rel="noopener" @endif {{ $attributes->class(['btn', 'btn-'.$variant]) }}>
    <span>{{ $slot }}</span>
    @if($icon)<x-icon :name="$icon" :size="18" />@endif
</a>
