<div class="form-group">
    {!! Form::label('name', 'User Name:') !!}
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



@if (!$user->hasRole('admin') || auth()->user()->id != $user->id)
<div class="form-group">
    {!! Form::label('ban', 'Ban:') !!}
    {!! Form::hidden('ban', 0) !!}
    {!! Form::checkbox('ban', 1) !!}
</div>
@endif





@if (!$user->hasRole('admin') || auth()->user()->id != $user->id)
<div class="form-group">
    {!! Form::label('role_id', 'User Role:') !!}
    {!! Form::select('role_id', $roles) !!}
</div>
@endif




<button class="btn btn-primary">Save</button>