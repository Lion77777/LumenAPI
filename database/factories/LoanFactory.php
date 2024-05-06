<?php

namespace Database\Factories;

use App\Models\Loan;
use Illuminate\Database\Eloquent\Factories\Factory;

class LoanFactory extends Factory
{
    protected $model = Loan::class;

    public function definition()
    {
        return [
            'loaner' => $this->faker->name,
            'sum' => $this->faker->numberBetween(1000, 5000),
            'loan_date' => $this->faker->dateTimeThisMonth(),
        ];
    }
}
