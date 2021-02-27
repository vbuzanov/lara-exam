@extends('admin.layouts.index')

@section('content')
    <h1>Edit User</h1>
    {!! Form::model($user, ['url' => '/admin/user/'.$user->id, 'files' => true, 'method' => 'put']) !!}
    
    @include('admin.user._form')

    {!! Form::close() !!}
  
@endsection


