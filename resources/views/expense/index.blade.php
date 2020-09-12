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

    <div class="flex">
        <div class="self-end text-gray-600">
            Showing 20 of 200 entries
        </div>
    </div>

    <div class="my-2"></div>

    <div class="bg-white shadow-sm rounded-lg">
        <div class="p-5">
            <table class="table-fized w-full">
                <thead class="text-indigo-600 text-sm text-left">
                    <tr class="border-b">
                        <th class="px-4 py-4"><input type="checkbox"></th>
                        <th class="px-4 py-4">#</th>
                        <th class="px-4 py-4">Date</th>
                        <th class="px-4 py-4">Title</th>
                        <th class="px-4 py-4">Amount</th>
                        <th class="px-4 py-4"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($expenses as $expense)
                    <tr class="text-lg border-b border-dashed">
                        <td class="px-4 py-5"><input type="checkbox"></td>
                        <td class="px-4 py-5">{{ $expense->id }}</td>
                        <td class="px-4 py-5">{{ $expense->date }}</td>
                        <td class="px-4 py-5">{{ $expense->title }}</td>
                        <td class="px-4 py-5"><span class="text-m text-gray-600">Rs.</span> {{ number_format($expense->amount) }}</td>
                        <td class="px-4 py-5">
                            <a class="table-action bg-gray-200 hover:bg-indigo-500 hover:text-white px-4 py-2 text-indigo-900 text-xs rounded-full mr-2" href=""><span class="svg-icon svg-baseline mr-1 text-base">@include('svg.eye')</span> View</a>
                            <a class="table-action bg-gray-200 hover:bg-indigo-500 hover:text-white px-4 py-2 text-indigo-900 text-xs rounded-full mr-2" href=""><span class="svg-icon svg-baseline mr-1 text-base">@include('svg.pencil')</span> Edit</a>
                            <a class="table-action bg-gray-200 hover:bg-indigo-500 hover:text-white px-4 py-2 text-indigo-900 text-xs rounded-full mr-2" href=""><span class="svg-icon svg-baseline mr-1 text-base">@include('svg.trash')</span> Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="p-6"></div>


    <div class="rounded shadow-sm bg-white hidden">
        <div class="p-5">
            <table id="expenses-table" class="table-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2">#</th>
                        <th class="px-4 py-2">Date</th>
                        <th class="px-4 py-2">Title</th>
                        <th class="px-4 py-2">amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-4 py-2">1</td>
                        <td class="px-4 py-2">2077-04-12</td>
                        <td class="px-4 py-2">Cooler</td>
                        <td class="px-4 py-2">14000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(function() {
        $('#expenses-table').DataTable({
            "processing": true
            , "serverSide": true
            , "ajax": "{{ route('expenses.index') }}"
            , 'columns': [{
                    data: 'id'
                    , name: 'id'
                    , orderable: false
                    , searchable: false
                }
                , {
                    data: 'date'
                    , name: 'date'
                }
                , {
                    data: 'title'
                    , title: 'title'
                }
                , {
                    data: 'amount'
                    , name: 'amount'
                }
            ]
        });
        console.log('created');
    });

</script>
@endpush
