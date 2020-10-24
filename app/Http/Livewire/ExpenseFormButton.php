<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ExpenseFormButton extends Component
{
    public function toggleExpenseForm()
    {
        $this->emit('showExpenseForm');
    }
    
    public function render()
    {
        return view('livewire.expense-form-button');
    }
}
