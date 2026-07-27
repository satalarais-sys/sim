@extends('layouts.app')

@section('content')
    <h1>Loan Details</h1>
    <p><strong>Loan Number:</strong> {{ $loan->loan_number }}</p>
    <p><strong>Member:</strong> {{ optional($loan->member)->name }}</p>
    <p><strong>Principal:</strong> {{ $loan->principal }}</p>
    <p><strong>Interest Rate:</strong> {{ $loan->interest_rate }}</p>
    <p><strong>Term (months):</strong> {{ $loan->term_months }}</p>
    <p><a href="{{ route('loans.index') }}">Back to list</a></p>
@endsection
