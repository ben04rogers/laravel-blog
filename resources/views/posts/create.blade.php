@push('child-scripts')
    <script type="text/javascript" src="{{ URL::asset('js/postform.js') }}"></script>
@endpush

<x-layout>
    <section class="px-6 py-8">
        <h1 class="text-2xl font-bold mb-6 text-center">Create a new post</h1>
        <x-panel class="max-w-sm mx-auto">
            <form action="/admin/posts" method="POST" enctype="multipart/form-data">
                @csrf
                <x-form.input name="title" />
                <x-form.input name="slug" />
                <x-form.input name="thumbnail" type="file"/>
                <x-form.textarea name="excerpt" />
                <x-form.textarea name="body" />

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
        </x-panel>
    </section>
</x-layout>
