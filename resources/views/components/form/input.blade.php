@props(['name', 'type' => 'text'])
<div class="mb-6">
    <x-form.label name="{{ $name }}" />

    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" class="border border-gray-400 p-2 w-full" value="{{ old($name) }}" required>

    <x-form.error name="{{ $name }}" />
</div>
