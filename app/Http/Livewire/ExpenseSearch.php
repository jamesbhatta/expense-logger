<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ExpenseSearch extends Component
{
    public $searchString;

    public function updatedSearchString()
    {
        $this->emit('expenseSearchInitiated', $this->searchString);
    }

    public function render()
    {
        return view('livewire.expense-search');
    }
}
