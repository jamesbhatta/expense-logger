<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ExpenseForm extends Component
{
    public $title, $date, $amount, $details;

    protected $listeners = ['showExpenseForm'];

    public function mount()
    {
    }

    public function storeExpense()
    {
        $this->resetErrorBag();

        $this->validate([
            'title' => 'required',
            'date' => 'date',
            'amount' => 'required',
            'details' => 'nullable'
        ]);

        auth()->user()->expenses()->create([
            'title' => $this->title,
            'date' => $this->date,
            'amount' => $this->amount,
            'details' => $this->details,
        ]);

        $this->emit('expenseAdded');
        session()->flash('expenseAdded', 'Saved');
    }

    public function render()
    {
        return view('livewire.expense-form');
    }
}
