@extends('layouts.app')

@section('content')
<div class="max-w-screen-md mx-auto">
    <div class="mb-3">
        @includeIf(config('app_settings.flash_partial'))
    </div>
    <form method="post" action="{{ config('app_settings.url') }}" class="form-horizontal mb-3" enctype="multipart/form-data" role="form">
        {!! csrf_field() !!}

        @if( isset($settingsUI) && count($settingsUI) )

        @foreach(Arr::get($settingsUI, 'sections', []) as $section => $fields)
        @component('app_settings.section', compact('fields'))
        <div class="px-5 py-0">
            @foreach(Arr::get($fields, 'inputs', []) as $field)
            @if(!view()->exists('app_settings::fields.' . $field['type']))
            <div style="background-color: #f7ecb5; box-shadow: inset 2px 2px 7px #e0c492; border-radius: 0.3rem; padding: 1rem; margin-bottom: 1rem">
                Defined setting <strong>{{ $field['name'] }}</strong> with
                type <code>{{ $field['type'] }}</code> field is not supported. <br>
                You can create a <code>fields/{{ $field['type'] }}.balde.php</code> to render this input however you want.
            </div>
            @endif
            @includeIf('app_settings.fields.' . $field['type'] )
            @endforeach
        </div>
        @endcomponent
        @endforeach
        @endif

        <div class="">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-sm">
                {{ Arr::get($settingsUI, 'submit_btn_text', 'Save Settings') }}
            </button>
        </div>
    </form>

</div>
@endsection
