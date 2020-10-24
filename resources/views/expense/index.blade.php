@extends('layouts.app')

@section('content')
<div class="md:container mx-auto">
    <div class="flex">
        <div class="text-4xl text-indigo-800 font-bold mr-3"><span class="svg-icon svg-baseline">@include('svg.expenses')</span> Expenses</div>

    </div>

    <div class="my-6"></div>

    <div class="flex">
        <div class="self-center mr-3">
            <button class="bg-indigo-500 hover:bg-indigo-600 text-white font-semibold px-5 py-2 rounded-full focus:outline-none"><span class="svg-icon svg-baseline mr-2 text-base">@include('svg.filter')</span>Filter</button>
        </div>
        <div class="self-center">
            <livewire:expense-form-button />
        </div>
        <div class="ml-auto self-center">
           <livewire:expense-search />
        </div>
    </div>

    <div class="my-6"></div>

    <livewire:expense-form />

    {{-- @livewire('expense-table') --}}
    <livewire:expense-table />

    <div class="p-6"></div>


</div>
@endsection

@push('scripts')
@endpush
