@extends('layouts.app')

@section('content')
    <h1>Edit Member</h1>
    <form action="{{ route('members.update', $member) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Member Number</label>
            <input type="text" name="member_number" value="{{ old('member_number', $member->member_number) }}" required>
        </div>
        <div>
            <label>Name</label>
            <input type="text" name="name" value="{{ old('name', $member->name) }}" required>
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email', $member->email) }}">
        </div>
        <div>
            <label>Status</label>
            <select name="status">
                <option value="active" {{ $member->status=='active'?'selected':'' }}>active</option>
                <option value="inactive" {{ $member->status=='inactive'?'selected':'' }}>inactive</option>
                <option value="suspended" {{ $member->status=='suspended'?'selected':'' }}>suspended</option>
            </select>
        </div>
        <div>
            <button type="submit">Update</button>
        </div>
    </form>
@endsection
