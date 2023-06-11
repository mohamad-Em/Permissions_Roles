@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New Customer</h2>
        </div>

    </div>
</div>
<form action="{{ route('customer.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name">
    @error('name')
    <h5>{{ $message }}</h5>
    @enderror
    <input type="email" name="email" placeholder="Email">
    @error('email')
    <h5>{{ $message }}</h5>
    @enderror
    <input type="password" name="password" placeholder="Password">
    @error('password')
    <h5>{{ $message }}</h5>
    @enderror
    <input type="text" name="mobile" placeholder="Mobile">
    @error('mobile')
    <h5>{{ $message }}</h5>
    @enderror
    <input type="submit" value="send" >
</form>

@endsection
