

@extends('app')

@section('content')
<div class="login_form">
    @foreach($errors->all() as $error)
        
        <p class="error">{{ $error }}</p>
    @endforeach
    
{!! Form::open(array('autocomplete'=>'off',)) !!}
    <input type="text" name="username" placeholder="username"/>
    <input type="password" name="password" placeholder="Password"/>
    <input type="submit" name="action" value="Sign In" class="login_btn">
{!! Form::close() !!}
   </div>
@endsection