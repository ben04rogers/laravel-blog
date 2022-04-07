@props(['heading'])
<section class="py-8 max-w-4xl mx-auto">
    <h1 class="text-2xl font-bold mb-8 text-left border-b pb-4">{{ $heading }}</h1>

    <div class="flex">
        <aside class="w-48">

            <h4 class="font-semibold mb-4">Links</h4>
            <ul>
                <li>
                    <a href="/admin/dashboard" class="{{ request()->is("admin/dashboard") ? 'text-blue-500' : '' }}">Dashboard</a>
                </li>
                <li>
                    <a href="/admin/posts/create" class="{{ request()->is("admin/posts/create") ? 'text-blue-500' : '' }}">New Post</a>
                </li>
            </ul>
        </aside>

        <main class="flex-1">
            <x-panel class="max-w-sm mx-auto">
                {{ $slot }}
            </x-panel>
        </main>
    </div>
</section>
