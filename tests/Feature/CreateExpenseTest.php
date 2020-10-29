<?php

namespace Tests\Feature;

use App\Expense;
use App\Http\Livewire\ExpenseForm;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreateExpenseTest extends TestCase
{
    use RefreshDatabase;

    public function setup(): void
    {
        parent::setUp();
        $this->actingAs(factory('App\User')->create(['name' => 'Unit Test User']));
    }

    public function newExpensePipeline()
    {
        return Livewire::test(ExpenseForm::class)
            ->set('title', 'foo')
            ->set('date', '2020-02-20')
            ->set('amount', 200)
            ->set('details', 'I am description')
            ->call('storeExpense');
    }

    /** @test */
    public function can_create_expense()
    {
        $this->newExpensePipeline();

        $this->assertTrue(Expense::whereTitle('foo')->exists());
    }


    /** @test */
    public function title_date_amount_is_required()
    {
        Livewire::test(ExpenseForm::class)
            ->set('details', 'I am description')
            ->call('storeExpense')
            ->assertHasErrors([
                'title' => 'required',
                'date' => 'date',
                'amount' => 'required'
            ]);
    }

    /** @test */
    public function expense_added_event_is_emitted_after_creating_expense()
    {
        $this->newExpensePipeline()->assertEmitted('expenseAdded');
    }

    /** @test */
    // public function session_has_expense_added_after_successfully_creating_expense()
    // {
    //     $this->newExpensePipeline()->assertSessionHas('expenseAdded');
    // }
}
