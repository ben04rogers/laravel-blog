@props(['name'])
<div class="mb-6">
   <x-form.label name="{{ $name  }}" />

    <textarea name="{{ $name }}" id="{{ $name }}" class="border border-gray-200 p-2 w-full rounded" required>
           {{ $slot ?? old($name) }}
    </textarea>

    <x-form.error name="{{ $name }}" />
</div>
