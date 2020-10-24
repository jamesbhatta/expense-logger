<?php

namespace App\Http\Livewire;

use App\Expense;
use Livewire\Component;
use Livewire\WithPagination;

class ExpenseTable extends Component
{
    use WithPagination;

    public $searchString;

    protected $listeners = ['expenseAdded', 'expenseSearchInitiated' => 'setExpenseSearchString'];

    public function expenseAdded()
    {
        //
    }

    public function setExpenseSearchString($searchString)
    {
        $this->searchString = $searchString;
    }

    public function render()
    {
        $expenses = Expense::latest('date');
        if ($this->searchString) {
            $expenses = $expenses->where('title', 'like', '%' . $this->searchString . '%');
        }
        $expenses = $expenses->paginate(15);

        return view('livewire.expense-table', compact(
            'expenses'
        ));
    }
}
