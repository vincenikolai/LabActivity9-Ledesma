@props(['title'])

<div class="bg-white border rounded shadow-sm">
    <div class="border-b p-4">
        <h2 class="text-lg font-semibold">{{ $title }}</h2>
    </div>

    <div class="p-4">
        {{ $slot }}
    </div>
</div>
