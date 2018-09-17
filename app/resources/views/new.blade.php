@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:#3399FF; font-weight:bolder; color:white;">新しいリスト追加</div>

                <div class="panel-body">
                {{{Form::open()}}}
                @foreach($errors->all() as $error)
        
                    <p class="error" style="color:red; font-weight:bolder;">{{ $error }}</p>
                @endforeach
                    <input type="text" name="item_name" placeholder="新しいリスト追加記述してください！" class="form-control" autocomplet="off" require > 
                    <input type="submit" value="create" class="btn btn-primary" style="float:right;width:100%; margin:10px auto;">
                {{{Form::close()}}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
