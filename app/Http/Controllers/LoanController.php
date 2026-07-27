<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\Member;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:super-admin|admin|bendahara')->except(['index','show']);
    }

    public function index()
    {
        $loans = Loan::with('member')->latest()->paginate(15);
        return view('loans.index', compact('loans'));
    }

    public function create()
    {
        $members = Member::pluck('name','id');
        return view('loans.create', compact('members'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'loan_number' => 'required|unique:loans,loan_number',
            'member_id' => 'required|exists:members,id',
            'principal' => 'required|numeric',
            'interest_rate' => 'required|numeric',
            'term_months' => 'required|integer',
            'interest_type' => 'required|in:flat,declining',
        ]);

        Loan::create($data);

        return redirect()->route('loans.index')->with('success', 'Loan created');
    }

    public function show(Loan $loan)
    {
        $loan->load('member','installments');
        return view('loans.show', compact('loan'));
    }

    public function edit(Loan $loan)
    {
        $members = Member::pluck('name','id');
        return view('loans.edit', compact('loan','members'));
    }

    public function update(Request $request, Loan $loan)
    {
        $data = $request->validate([
            'loan_number' => 'required|unique:loans,loan_number,'.$loan->id,
            'member_id' => 'required|exists:members,id',
            'principal' => 'required|numeric',
            'interest_rate' => 'required|numeric',
            'term_months' => 'required|integer',
            'interest_type' => 'required|in:flat,declining',
        ]);

        $loan->update($data);

        return redirect()->route('loans.index')->with('success', 'Loan updated');
    }

    public function destroy(Loan $loan)
    {
        $loan->delete();
        return redirect()->route('loans.index')->with('success', 'Loan deleted');
    }
}
