<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ExpenseForm extends Component
{
    public $visible, $title, $date, $amount, $details;

    protected $listeners = ['showExpenseForm'];

    public function mount()
    {
        $this->visible = false;
    }

    public function showExpenseForm()
    {
        $this->visible = true;
    }

    public function closeExpenseForm()
    {
        $this->visible = false;
        $this->emit('closeExpenseForm');
    }

    public function storeExpense()
    {
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
        $this->closeExpenseForm();
    }

    public function render()
    {
        return view('livewire.expense-form');
    }
}
