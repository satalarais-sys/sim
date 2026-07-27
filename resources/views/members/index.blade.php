@extends('layouts.app')

@section('content')
    <h1>Members</h1>
    <p><a href="{{ route('members.create') }}">Create new member</a></p>

    <table border="1" width="100%" cellpadding="6">
        <thead>
            <tr>
                <th>#</th>
                <th>Member Number</th>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($members as $m)
            <tr>
                <td>{{ $m->id }}</td>
                <td>{{ $m->member_number }}</td>
                <td>{{ $m->name }}</td>
                <td>{{ $m->email }}</td>
                <td>{{ $m->status }}</td>
                <td>
                    <a href="{{ route('members.show', $m) }}">View</a> |
                    <a href="{{ route('members.edit', $m) }}">Edit</a> |
                    <form action="{{ route('members.destroy', $m) }}" method="POST" style="display:inline">@csrf @method('DELETE')<button type="submit" onclick="return confirm('Delete?')">Delete</button></form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $members->links() }}
@endsection
