<?php

namespace Tests;

use App\Models\Loan;
use Database\Factories\LoanFactory;
use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class LoansControllerTest extends TestCase
{
    use DatabaseMigrations;

    public function testShowAllLoans()
    {
        $response = $this->get('/api/loans');

        $response->seeStatusCode(200);
    }

    public function testShowOneLoan()
    {
        $factory = LoanFactory::new();

        $loan = $factory->create();
        $response = $this->get('/api/loans/' . $loan->id);

        $response->seeStatusCode(200);
    }

    public function testCreateLoan()
    {
        $loanData = [
            'loaner' => 'Some Loaner',
            'sum' => 1000,
            'loan_date' => '2023-12-03'
        ];

        $response = $this->post('/api/loans', $loanData);

        $response->seeStatusCode(201);
    }

    public function testUpdateLoan()
    {
        $factory = LoanFactory::new();
        $loan = $factory->create();
        $loanData = [
            'loaner' => 'Updated Loaner',
            'sum' => 2000,
            'loan_date' => '2024-12-11'
        ];

        $response = $this->put('/api/loans/' . $loan->id, $loanData);

        $response->seeStatusCode(200);
    }

    public function testDeleteLoan()
    {
        $factory = LoanFactory::new();
        $loan = $factory->create();
        $response = $this->delete('/api/loans/' . $loan->id);

        $response->seeStatusCode(200);
    }
}
