@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:#3399FF; font-weight:bolder; color:white;">ダッシュボード</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
    
                            {{ session('status') }}
                        </div>
                       
                    @endif
                    
                    

                   


                     {!! Form::open(['action' => 'HomeController@postIndex']) !!}
                     <!-- {{{ csrf_field() }}} -->
                     <div class="col-md-6">
                    
                    @foreach ($data as $item)
                     <div class="checkbox">
                        
                        <label style="font-size:20px;list-style:none; padding:10px;">
                        <input type="checkbox" value="{{{ $item->id }}}" {{{$item ->done ? 'checked' : '' }}} />
                        {{{ $item->item_name }}}</label>
                    </div>
                    
                     
                     @endforeach
                        <input type="text" name="add_name" placeholder="新しいリスト追加記述してください！" class="form-control" autocomplet="off" require > 
                        <input type="submit" value="SAVE" class="btn btn-primary" style="float:right;width:100%; margin:10px auto;">
                        
                        {!! Form::close() !!}
  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
