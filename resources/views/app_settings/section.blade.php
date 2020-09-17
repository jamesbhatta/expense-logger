<div class="bg-white rounded overflow-hidden shadow-sm border border-solid border-gray-200 mb-5 pb-4 section-{{ Str::slug($fields['title']) }}">
    <div class="flex bg-gray-200 p-3 text-gray-700 text-xl font-semibold">
        <i class="{{ Arr::get($fields, 'icon', 'glyphicon glyphicon-flash') }}"></i>
        {{ $fields['title'] }}
    </div>

    {{-- Section desciption --}}
    @if( $desc = Arr::get($fields, 'descriptions') )
        <div class="py-2 px-4">
            <p class="text-md text-gray-700">{{ $desc }}</p>
        </div>
    @endif

    {{ $slot }}
</div>