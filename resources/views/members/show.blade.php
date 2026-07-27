@extends('layouts.app')

@section('content')
    <h1>Member Details</h1>
    <p><strong>Member Number:</strong> {{ $member->member_number }}</p>
    <p><strong>Name:</strong> {{ $member->name }}</p>
    <p><strong>Email:</strong> {{ $member->email }}</p>
    <p><strong>Status:</strong> {{ $member->status }}</p>
    <p><a href="{{ route('members.index') }}">Back to list</a></p>
@endsection
