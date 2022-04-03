@auth
    <x-panel>
        <form action="/posts/{{ $post->slug }}/comments" method="POST">
            @csrf

            <header class="flex items-center">
                <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" height="40" width="40" class="rounded-full">
                <h2 class="ml-4">Want to participate?</h2>
            </header>

            <textarea name="body" id="" cols="30" rows="5" class="w-full p-3 mt-10 rounded text-sm focus:ring focus:outline-none" placeholder="Quick, Think of something to say!" required></textarea>
            @error('body')
            <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror

            <div class="flex justify-end border-t border-gray-200 mt-3">
                <x-submit-button>Post</x-submit-button>
            </div>
        </form>
    </x-panel>
@else
    <p>
        <a href="/login" class="hover:underline text-blue-500">Login to leave a comment</a>
    </p>
@endauth
