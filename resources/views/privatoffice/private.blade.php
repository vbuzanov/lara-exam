@extends('layouts.app')

@section('content')

    @if(session('success'))
    <div class="alert alert-success">{{session('success')}}</div>    
    @endif

    <h2 class="ml-3">Hello, {{auth()->user()->name}}</h2>


    {!! Form::model(auth()->user(), ['url' => '/private', 'files' => true, 'method' => 'put']) !!}
    <div class="w-50 p-3 ml-3">

    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class'=>'form-control' . ($errors->has('name') ? ' is-invalid' : '')]) !!}
        @error('name') 
            <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>
    
    
    <div class="form-group">
        {!! Form::label('email', 'E-Mail Address:') !!}
        {!! Form::text('email', null, ['class'=>'form-control' . ($errors->has('email') ? ' is-invalid' : '')]) !!}
        @error('email') 
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>
 
    
    <div class="form-group">
        {!! Form::label('phone', 'Phone Number:') !!}
        {!! Form::number('phone', null, ['placeholder'=>'380', 'class'=>'form-control']) !!}
    </div>

    

    <div class="form-group">
        {!! Form::label('avatar', 'Avatar:') !!}
        {!! Form::file('avatar', ['class'=>'form-control']) !!}
        @error('avatar') 
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>

   
    
    <button class="btn btn-primary">Save</button>
    </div>
    {!! Form::close() !!}




@endsection
