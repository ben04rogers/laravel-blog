@props(['name', 'type' => 'text'])
<div class="mb-6">
    <x-form.label name="{{ $name }}" />

    <input type="{{ $type }}"
           name="{{ $name }}"
           id="{{ $name }}"
           class="border border-gray-200 p-2 w-full rounded"
           {{ $attributes(['value' => old($name)]) }}
    >

    <x-form.error name="{{ $name }}" />
</div>
