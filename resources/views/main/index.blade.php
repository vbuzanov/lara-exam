@extends('layouts.app')

@section('content')
    <h2 class="ml-3">Welcome</h2>


    @if (Auth::check() && Auth::user()->ban == 1)
        <div class="alert alert-danger">
            You are banned!
        </div>
@endif
@endsection