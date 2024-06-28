@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm leading-none']) }}>
    {{ $value ?? $slot }}
</label>
