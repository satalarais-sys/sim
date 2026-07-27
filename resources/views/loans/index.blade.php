@extends('layouts.app')

@section('content')
    <h1>Loans</h1>
    <p><a href="{{ route('loans.create') }}">Create new loan</a></p>

    <table border="1" width="100%" cellpadding="6">
        <thead>
            <tr>
                <th>#</th>
                <th>Loan Number</th>
                <th>Member</th>
                <th>Principal</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($loans as $l)
            <tr>
                <td>{{ $l->id }}</td>
                <td>{{ $l->loan_number }}</td>
                <td>{{ optional($l->member)->name }}</td>
                <td>{{ $l->principal }}</td>
                <td>{{ $l->status }}</td>
                <td>
                    <a href="{{ route('loans.show', $l) }}">View</a> |
                    <a href="{{ route('loans.edit', $l) }}">Edit</a> |
                    <form action="{{ route('loans.destroy', $l) }}" method="POST" style="display:inline">@csrf @method('DELETE')<button type="submit" onclick="return confirm('Delete?')">Delete</button></form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $loans->links() }}
@endsection
