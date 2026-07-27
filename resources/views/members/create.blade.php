@extends('layouts.app')

@section('content')
    <h1>Create Member</h1>
    <form action="{{ route('members.store') }}" method="POST">
        @csrf
        <div>
            <label>Member Number</label>
            <input type="text" name="member_number" value="{{ old('member_number') }}" required>
        </div>
        <div>
            <label>Name</label>
            <input type="text" name="name" value="{{ old('name') }}" required>
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}">
        </div>
        <div>
            <label>Status</label>
            <select name="status">
                <option value="active">active</option>
                <option value="inactive">inactive</option>
                <option value="suspended">suspended</option>
            </select>
        </div>
        <div>
            <button type="submit">Save</button>
        </div>
    </form>
@endsection
