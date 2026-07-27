@extends('layouts.app')

@section('content')
    <h1>Edit Loan</h1>
    <form action="{{ route('loans.update', $loan) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Loan Number</label>
            <input type="text" name="loan_number" value="{{ old('loan_number', $loan->loan_number) }}" required>
        </div>
        <div>
            <label>Member</label>
            <select name="member_id">
                @foreach($members as $id => $name)
                    <option value="{{ $id }}" {{ $loan->member_id==$id? 'selected':'' }}>{{ $name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label>Principal</label>
            <input type="number" name="principal" step="0.01" value="{{ old('principal', $loan->principal) }}" required>
        </div>
        <div>
            <label>Interest Rate (%)</label>
            <input type="number" name="interest_rate" step="0.01" value="{{ old('interest_rate', $loan->interest_rate) }}" required>
        </div>
        <div>
            <label>Term (months)</label>
            <input type="number" name="term_months" value="{{ old('term_months', $loan->term_months) }}" required>
        </div>
        <div>
            <label>Interest Type</label>
            <select name="interest_type">
                <option value="flat" {{ $loan->interest_type=='flat'?'selected':'' }}>flat</option>
                <option value="declining" {{ $loan->interest_type=='declining'?'selected':'' }}>declining</option>
            </select>
        </div>
        <div>
            <button type="submit">Update</button>
        </div>
    </form>
@endsection
