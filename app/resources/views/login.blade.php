

@extends('app')

@section('content')

    @foreach($errors->all() as $error)
        
        <p class="error">{{ $error }}</p>
    @endforeach
    <div calss="login_label">
{!! Form::open(array('autocomplete'=>'off','class'=>'login_form')) !!}
    <input type="text" name="username" placeholder="Username"/>
    <input type="password" name="password" placeholder="Password"/>
    <input type="submit" name="action" value="Sign In" class="login_btn">
{!! Form::close() !!}
   </div>
@endsection