<div class="my-5 {{ $errors->has($field['name']) ? Arr::get( $field, 'input_error_class', config('app_settings.input_error_class', 'has-danger')) : '' }}">
    @if( $label = Arr::get($field, 'label') )
    {{-- Label --}}
    <label for="{{ Arr::get($field, 'name') }}" class="block my-1 text-gray-700 font-semibold">{{ $label }}</label>
    @endif

    {{ $slot }}

    @include('app_settings.fields._hint')
</div>
