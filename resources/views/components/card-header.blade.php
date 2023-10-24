@props(['title', 'desc'])

<div class="mb-5 overflow-hidden shadow-lg rounded-2xl bg-white-50">
    <div class="p-4">
        <div class="flex items-center">
            <div class="p-5 mr-4 bg-yellow-50 rounded-xl">
                {{ $img }}
            </div>
            <div>
                <p class="text-xl font-bold text-gray-900">{{ $title }}</p>
                <p class="hidden text-gray-600 md:block">{{ $desc }}</p>
            </div>
        </div>
    </div>
</div>
