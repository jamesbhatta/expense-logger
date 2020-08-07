@extends('layouts.app')

@section('content')
<div class="md:container mx-auto">
    <div class="bg-white shadow-sm rounded-md p-6 w-1/2 mx-auto">
        @if((Session::has('success')))
        <div class="mb-4">

        </div>
        @endif
        <div class="mb-4">
            <h1 class="font-semibold text-2xl text-gray-700"># Record New Expense</h1>
        </div>
        <form action="{{ route('expense.store') }}" method="POST" class="">
            @csrf
            <div class="mb-5">
                <label for="input-title" class="block mb-5 italic">Title</label>
                <input type="text" name="title" class="block p-2 w-full bg-gray-200 rounded text-gray-700 leading-tight border border-gray-200 focus:bg-white focus:outline-none @error('title') border-red-500 @enderror" id="input-title" placeholder="Title" autofocus>
                <x-invalid-feedback field="title"></x-invalid-feedback>
            </div>
            <div class="mb-5">
                <label for="input-date" class="block mb-5 italic">Date</label>
                <input type="text" name="date" class="block p-2 w-full bg-gray-200 rounded text-gray-700 leading-tight border border-gray-200 focus:bg-white focus:outline-none @error('date') border-red-500 @enderror" id="input-date" placeholder="YYYY-MM-DD">
                <x-invalid-feedback field="date"></x-invalid-feedback>

            </div>
            <div class="mb-5">
                <label for="input-price" class="block mb-5 italic">Price</label>
                <input type="number" name="price" class="block p-2 w-full bg-gray-200 rounded text-gray-700 leading-tight border border-gray-200 focus:bg-white focus:outline-none @error('price') border-red-500 @enderror" id="input-price" placeholder="NRs.">
                <x-invalid-feedback field="price"></x-invalid-feedback>
            </div>
            <div class="mb-5">
                <label for="textarea-details" class="block mb-5 italic">Details</label>
                <textarea name="details" name="details" class="block p-2 w-full bg-gray-200 rounded text-gray-700 leading-tight border border-gray-200 focus:bg-white focus:outline-none @error('details') border-red-500 @enderror" id="textarea-details" cols="30" rows="10"></textarea>
                <x-invalid-feedback field="details"></x-invalid-feedback>
            </div>
            <div class="mb-5">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold p-4 rounded-full w-1/2 shadow italic">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection
