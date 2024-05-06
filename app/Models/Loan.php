<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $fillable = ['loaner', 'sum', 'loan_date'];

    protected $hidden = [];
}
