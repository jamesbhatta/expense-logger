<?php

namespace App\Http\Livewire;

use App\Expense;
use Livewire\Component;
use Livewire\WithPagination;

class ExpenseTable extends Component
{
    use WithPagination;

    public function render()
    {
        $expenses = Expense::latest('date')->paginate(15);

        return view('livewire.expense-table', compact(
            'expenses'
        ));
    }
}
