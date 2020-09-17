<div>
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
                        <td class="px-4 py-5"><span class="text-m text-gray-600">{{ settings()->get('currency') }}</span> {{ number_format($expense->amount) }}</td>
                        <td class="px-4 py-5">
                            <a class="table-action bg-gray-200 hover:bg-indigo-500 hover:text-white px-4 py-2 text-indigo-900 text-xs rounded-full mr-2" href=""><span class="svg-icon svg-baseline mr-1 text-base">@include('svg.eye')</span> View</a>
                            <a class="table-action bg-gray-200 hover:bg-indigo-500 hover:text-white px-4 py-2 text-indigo-900 text-xs rounded-full mr-2" href=""><span class="svg-icon svg-baseline mr-1 text-base">@include('svg.pencil')</span> Edit</a>
                            <a class="table-action bg-gray-200 hover:bg-indigo-500 hover:text-white px-4 py-2 text-indigo-900 text-xs rounded-full mr-2" href=""><span class="svg-icon svg-baseline mr-1 text-base">@include('svg.trash')</span> Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="my-3">
                {{ $expenses->links() }}
            </div>
        </div>
    </div>
</div>
