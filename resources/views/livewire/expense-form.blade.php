<div id="expense-form" class="bg-white p-4 md:max-w-xl mx-auto mb-4 shadow-lg rounded-lg @if(!$visible) h-0 overflow-hidden opacity-0 @endif">
    <style>
        #expense-form {
            transition: all .5s linear;
        }

    </style>
    <div class="mb-4">
        <h1 class="font-semibold text-2xl text-indigo-900"># Record New Expense</h1>
    </div>

    <form wire:submit.prevent="storeExpense" method="POST" class="">
        <div class="mb-5">
            <input type="text" wire:model="title" name="title" class="block p-2 w-full bg-gray-100 rounded text-gray-700 leading-tight border border-gray-200 focus:bg-white focus:outline-none @error('title') border-red-500 @enderror" id="input-title" value="{{ old('title') }}" placeholder="Title" autofocus>
            <x-invalid-feedback field="title"></x-invalid-feedback>
        </div>
        <div class="mb-5">
            <input type="text" wire:model="date" name="date" class="block p-2 w-full bg-gray-100 rounded text-gray-700 leading-tight border border-gray-200 focus:bg-white focus:outline-none @error('date') border-red-500 @enderror" id="input-date" placeholder="YYYY-MM-DD">
            <x-invalid-feedback field="date"></x-invalid-feedback>

        </div>
        <div class="mb-5">
            <input type="number" wire:model="amount" name="amount" class="block p-2 w-full bg-gray-100 rounded text-gray-700 leading-tight border border-gray-200 focus:bg-white focus:outline-none @error('amount') border-red-500 @enderror" id="input-amount" placeholder="NRs.">
            <x-invalid-feedback field="amount"></x-invalid-feedback>
        </div>
        <div class="mb-5">
            <textarea name="details" wire:model="details" name="details" class="block p-2 w-full bg-gray-100 rounded text-gray-700 leading-tight border border-gray-200 focus:bg-white focus:outline-none @error('details') border-red-500 @enderror" id="textarea-details" cols="30" rows="10"></textarea>
            <x-invalid-feedback field="details"></x-invalid-feedback>
        </div>
        <div class="mb-5 flex">
            <button type="submit" class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold px-6 py-2 rounded-lg">Save</button>
            <button wire:click="closeExpenseForm" type="reset" class="ml-auto hover:bg-gray-200 text-red-500 font-bold px-6 py-2 rounded-lg">Cancel</button>
        </div>
    </form>
</div>
