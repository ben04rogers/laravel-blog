@push('child-scripts')
    <script type="text/javascript" src="{{ URL::asset('js/postform.js') }}"></script>
@endpush
<x-layout>
    <x-setting :heading="'Edit Post: ' . $post->title">
        <form action="/admin/posts/{{ $post->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PATCH")
            <x-form.input name="title" :value="old('title', $post->title)" />
            <x-form.input name="slug" :value="old('slug', $post->slug)" />

            <div>
                <x-form.input name="thumbnail" type="file" :value="old('thumbnail', $post->thumbnail)"/>
                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="" class="rounded-xl" width="50">
            </div>

            <x-form.textarea name="excerpt">{{ old('excerpt', $post->excerpt) }}</x-form.textarea>
            <x-form.textarea name="body">{{ old('body', $post->body) }}</x-form.textarea>

            <div class="mb-2">
                <label for="category_id" class="block mb-2 uppercase font-bold text-xs text-gray-700">Category</label>
                @php
                    $categories = \App\Models\Category::all();
                @endphp

                <select name="category_id" id="category">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ ucwords($category->name) }}</option>
                    @endforeach
                </select>

                @error('category')
                {{ $message }}
                @enderror
            </div>

            <x-submit-button>Publish</x-submit-button>
        </form>
    </x-setting>

</x-layout>
