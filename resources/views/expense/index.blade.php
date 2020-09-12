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
            <a href="{{ route('expenses.create') }}" class="border-2 border-indigo-500 hover:bg-indigo-500 text-indigo-600 hover:text-white font-semibold text-sm px-4 py-2 rounded-full focus:outline-none"><span class="svg-icon svg-baseline mr-2 text-base">@include('svg.plus')</span>Add Expense</a>
        </div>
        <div class="ml-auto self-center">
            <div class="bg-white px-4 rounded-full shadow-xs">
                <span class="svg-icon svg-baseline mr-2 text-base text-gray-500">@include('svg.search')</span>
                <input type="text" class="py-2 focus:outline-none" placeholder="Search...">
            </div>
        </div>
    </div>

    <div class="my-6"></div>

    {{-- @livewire('expense-table') --}}
    <livewire:expense-table />

    <div class="p-6"></div>


</div>
@endsection

@push('scripts')
<script>
    // $(function() {
    //     $('#expenses-table').DataTable({
    //         "processing": true
    //         , "serverSide": true
    //         , "ajax": "{{ route('expenses.index') }}"
    //         , 'columns': [{
    //                 data: 'id'
    //                 , name: 'id'
    //                 , orderable: false
    //                 , searchable: false
    //             }
    //             , {
    //                 data: 'date'
    //                 , name: 'date'
    //             }
    //             , {
    //                 data: 'title'
    //                 , title: 'title'
    //             }
    //             , {
    //                 data: 'amount'
    //                 , name: 'amount'
    //             }
    //         ]
    //     });
    //     console.log('created');
    // });

</script>
@endpush
