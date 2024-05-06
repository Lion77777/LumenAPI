<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Http\Request;


class LoansController extends Controller 
{
    public function showAllLoans() 
    {
        $loans = Loan::all();

        return response()->json($loans);
    }

    public function showOneLoan($id) 
    {
        $loan = Loan::find($id);

        return response()->json($loan);
    }

    public function createLoan(Request $request) 
    {
        $loan = Loan::create($request->all());

        return response()->json($loan, 201);
    }

    public function updateLoan($id, Request $request) 
    {
        $loan = Loan::findOrFail($id);

        $loan->update($request->all());

        return response()->json(["message" => "Loan updated successfully"], 200);
    }

    public function deleteLoan($id) 
    {
        $loan = Loan::findOrFail($id);

        $loan->delete();

        return response()->json(["message" => "Loan deleted successfully"], 200);
    }
}
