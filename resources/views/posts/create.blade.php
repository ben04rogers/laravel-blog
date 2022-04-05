<x-layout>
    <section class="px-6 py-8">
        <x-panel class="max-w-sm mx-auto">
            <form action="/admin/posts" method="POST">
                @csrf

                <div class="mb-6">
                    <label for="title" class="block mb-2 uppercase font-bold text-xs text-gray-700">Title</label>
                    <input type="text" name="title" id="title" class="border border-gray-400 p-2 w-full" value="{{ old("title") }}" required>
                    @error('title')
                        {{ $message }}
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="slug" class="block mb-2 uppercase font-bold text-xs text-gray-700">Slug</label>
                    <input type="text" name="slug" id="title" class="border border-gray-400 p-2 w-full" value="{{ old("slug") }}" required>
                    @error('slug')
                    {{ $message }}
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="excerpt" class="block mb-2 uppercase font-bold text-xs text-gray-700">Excerpt</label>
                    <textarea name="excerpt" id="excerpt" class="border border-gray-400 p-2 w-full" required>
                       {{ old("excerpt") }}
                    </textarea>
                    @error('excerpt')
                    {{ $message }}
                    @enderror
                </div>

                <div class="mb-2">
                    <label for="body" class="block mb-2 uppercase font-bold text-xs text-gray-700">Body</label>
                    <textarea name="body" id="body" class="border border-gray-400 p-2 w-full" required>
                        {{ old("body") }}
                    </textarea>
                    @error('body')
                    {{ $message }}
                    @enderror
                </div>

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
