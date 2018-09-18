@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:#3399FF; font-weight:bolder; color:white;">検索結果</div>
                <div class="panel-body">

                {{{Form::open(['method' => 'GET'])}}}
                @foreach ($data as $item)
                     <div class="checkbox">    
                        <label name="item_name_list" style="font-size:20px;list-style:none; padding:10px;">
                        <input type="checkbox" name="checkBox[]" value="{{{ $item->id }}}"   {{{$item ->done ? 'checked' : '' }}} />
                        {{{ $item->item_name }}}</label><small><a href="{{{ URL('delete',$item->id)}}}" style="color:#888888;">delete(削除)</a></small> 
                    </div>        
                     @endforeach

                     @foreach($errors->all() as $error)
                        <p class="error" style="color:red; font-weight:bolder;">{{ $error }}</p>
                    @endforeach
                     <input type="text" name="search_txt" placeholder="search text" class="form-control" >
                    <input type="submit" value="検索" class="btn btn-primary" style="float:right;width:100%; margin:10px auto;"/>
                {{{Form::close()}}}
          
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
