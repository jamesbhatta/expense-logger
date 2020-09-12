@extends('layouts.app')

@push('styles')
<style>
    .modal {
        transition: opacity 0.25s ease;
    }

    body.modal-active {
        overflow-x: hidden;
        overflow-y: visible !important;
    }

</style>
@endpush

@section('content')
<div class="md:container mx-auto">
    <div class="bg-white shadow-sm rounded-md p-6 w-1/2 mx-auto">
        @if ($errors->any())
        <div class="p-2 text-gray-700">
            @foreach ($errors->all() as $error)
            <div class="mb-3">{{ $error}}</div>
            @endforeach
        </div>
        @endif
        @if(Session::has('error'))
        <div class="p-2 text-gray-700">
            {{ Session::get('error') }}
        </div>
        @endif
        @if((Session::has('success')))
        <div class="mb-4">
            {{ Session::get('success') }}
        </div>
        @endif
        <div class="mb-4">
            <h1 class="font-semibold text-4xl text-indigo-900"># Record New Expense</h1>
        </div>
        <form action="{{ route('expenses.store') }}" method="POST" class="">
            @csrf
            <div class="mb-5">
                <label for="input-title" class="block mb-5 italic">Title</label>
                <input type="text" name="title" class="block p-2 w-full bg-gray-200 rounded text-gray-700 leading-tight border border-gray-200 focus:bg-white focus:outline-none @error('title') border-red-500 @enderror" id="input-title" value="{{ old('title') }}" placeholder="Title" autofocus>
                <x-invalid-feedback field="title"></x-invalid-feedback>
            </div>
            <div class="mb-5">
                <label for="input-date" class="block mb-5 italic">Date</label>
                <input type="text" name="date" class="block p-2 w-full bg-gray-200 rounded text-gray-700 leading-tight border border-gray-200 focus:bg-white focus:outline-none @error('date') border-red-500 @enderror" id="input-date" placeholder="YYYY-MM-DD">
                <x-invalid-feedback field="date"></x-invalid-feedback>

            </div>
            <div class="mb-5">
                <label for="input-amount" class="block mb-5 italic">amount</label>
                <input type="number" name="amount" class="block p-2 w-full bg-gray-200 rounded text-gray-700 leading-tight border border-gray-200 focus:bg-white focus:outline-none @error('amount') border-red-500 @enderror" id="input-amount" placeholder="NRs.">
                <x-invalid-feedback field="amount"></x-invalid-feedback>
            </div>
            <div class="mb-5">
                <label for="textarea-details" class="block mb-5 italic">Details</label>
                <textarea name="details" name="details" class="block p-2 w-full bg-gray-200 rounded text-gray-700 leading-tight border border-gray-200 focus:bg-white focus:outline-none @error('details') border-red-500 @enderror" id="textarea-details" cols="30" rows="10"></textarea>
                <x-invalid-feedback field="details"></x-invalid-feedback>
            </div>
            <div class="mb-5">
                <button type="submit" class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold px-6 py-3 rounded-full">Save</button>
            </div>
        </form>
    </div>
</div>

<button class="modal-open bg-transparent border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold py-2 px-4 rounded-full" data-toggle="modal" data-target="#modalOne">Modal One</button>
<button class="modal-open bg-transparent border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold py-2 px-4 rounded-full" data-toggle="modal" data-target="#modalTwo">Modal Two</button>

<!-- Modal One -->
<div id="modalOne" class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

        <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
            <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
            </svg>
            <span class="text-sm">(Esc)</span>
        </div>

        <!-- Add margin if you want to see some of the overlay behind the modal-->
        <div class="modal-content py-4 text-left px-6">
            <!-- Modal Title -->
            <div class="flex justify-between items-center pb-3">
                <p class="text-2xl font-bold">Simple Modal!</p>
                <div class="modal-close cursor-pointer z-50">
                    <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                    </svg>
                </div>
            </div>

            <!-- Mocal Body -->
            <p>Modal content can go here</p>

            <!-- Modal Footer -->
            <div class="flex justify-end pt-2">
                <button class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2">Action</button>
                <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Close</button>
            </div>

        </div>
    </div>
</div>

<!-- Modal Twp -->
<div id="modalTwo" class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

        <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
            <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
            </svg>
            <span class="text-sm">(Esc)</span>
        </div>

        <!-- Add margin if you want to see some of the overlay behind the modal-->
        <div class="modal-content py-4 text-left px-6">
            <!-- Modal Title -->
            <div class="flex justify-between items-center pb-3">
                <p class="text-2xl font-bold">Modal Two!</p>
                <div class="modal-close cursor-pointer z-50">
                    <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                    </svg>
                </div>
            </div>

            <!-- Mocal Body -->
            <p>Modal Two content can go here</p>

            <!-- Modal Footer -->
            <div class="flex justify-end pt-2">
                <button class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2">Action</button>
                <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Close</button>
            </div>

        </div>
    </div>
</div>

<script>
    const body = document.querySelector('body')
    var openModal = document.querySelectorAll('[data-toggle=modal]');

    for (var i = 0; i < openModal.length; i++) {
        openModal[i].addEventListener('click', function(event) {
            event.preventDefault();
            toggleModal(this.dataset.target);
        })
    }

    const overlay = document.querySelector('.modal-overlay');
    overlay.addEventListener('click', closeAllModal);

    var closemodal = document.querySelectorAll('.modal-close');
    for (var i = 0; i < closemodal.length; i++) {
        // closemodal[i].addEventListener('click', toggleModal);
        // closemodal[i].addEventListener('click', closeAllModal);
        closemodal[i].addEventListener('click', function() {
            console.log(this.closest('.modal'));
            closeModal(this.closest('.modal'));
        });
    }

    document.onkeydown = function(evt) {
        evt = evt || window.event;
        var isEscape = false;
        if ("key" in evt) {
            isEscape = (evt.key === "Escape" || evt.key === "Esc");
        } else {
            isEscape = (evt.keyCode === 27);
        }
        if (isEscape && document.body.classList.contains('modal-active')) {
            closeAllModal();
        }
    };

    // function toggleModal() {
    //     const body = document.querySelector('body')
    //     const modal = document.querySelector('.modal')
    //     modal.classList.toggle('opacity-0')
    //     modal.classList.toggle('pointer-events-none')
    //     body.classList.toggle('modal-active')
    // }

    function toggleModal(modalId) {
        console.log(modalId);
        const modal = document.querySelector(modalId)
        modal.classList.toggle('opacity-0')
        modal.classList.toggle('pointer-events-none')
        body.classList.toggle('modal-active')
    }

    function closeAllModal() {
        let modals = document.querySelectorAll('.modal');
        for (var i = 0; i < modals.length; i++) {
            console.log('closing');
            modals[i].classList.remove('opacity-0')
            modals[i].classList.remove('pointer-events-none')
            body.classList.remove('modal-active')
            console.log('closed');
        }
    }

    function closeModal(modal) {
        console.log('closing');
        modal.classList.remove('opacity-0')
        modal.classList.remove('pointer-events-none')
        body.classList.remove('modal-active')
        console.log('closed');
    }

</script>
@endsection
