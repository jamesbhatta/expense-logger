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
            <button type="button" class="modal-open border-2 border-indigo-500 hover:bg-indigo-500 text-indigo-600 hover:text-white font-semibold text-sm px-4 py-2 rounded-full focus:outline-none" data-toggle="modal" data-target="#expenseFormModal">
                <span class="svg-icon svg-baseline mr-2 text-base">@include('svg.plus')</span>Add Expense
            </button>
        </div>
        <div class="ml-auto self-center">
            <livewire:expense-search />
        </div>
    </div>

    <div class="my-6"></div>

    {{-- New Expense Modal --}}
    <livewire:expense-form />

    <livewire:expense-table />

    <div class="p-6"></div>


</div>
@endsection

@push('scripts')

<script>
    var openmodal = document.querySelectorAll('.modal-open')
    for (var i = 0; i < openmodal.length; i++) {
        openmodal[i].addEventListener('click', function(event) {
            event.preventDefault()
            toggleModal()
        })
    }

    const overlay = document.querySelector('.modal-overlay')
    overlay.addEventListener('click', toggleModal)

    var closemodal = document.querySelectorAll('.modal-close')
    for (var i = 0; i < closemodal.length; i++) {
        closemodal[i].addEventListener('click', toggleModal)
    }

    document.onkeydown = function(evt) {
        evt = evt || window.event
        var isEscape = false
        if ("key" in evt) {
            isEscape = (evt.key === "Escape" || evt.key === "Esc")
        } else {
            isEscape = (evt.keyCode === 27)
        }
        if (isEscape && document.body.classList.contains('modal-active')) {
            toggleModal()
        }
    };


    function toggleModal() {
        const body = document.querySelector('body')
        const modal = document.querySelector('.modal')
        modal.classList.toggle('opacity-0')
        modal.classList.toggle('pointer-events-none')
        body.classList.toggle('modal-active')
    }

</script>
@endpush
