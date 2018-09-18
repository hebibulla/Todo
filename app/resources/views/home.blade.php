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
                     <div class="col-md-6">
                   
                    {!! Form::open(['action' => 'HomeController@postIndex']) !!}
                    {{{ csrf_field() }}}

                    @foreach ($data as $item)
                     <div class="checkbox">    
                        <label name="item_name_list" style="font-size:20px;list-style:none; padding:10px;">
                        <input type="checkbox" name="checkBox[]" value="{{{ $item->id }}}"   {{{$item ->done ? 'checked' : '' }}} />
                        {{{ $item->item_name }}}</label><small><a href="{{{ URL('delete',$item->id)}}}"  style="color:#888888;">delete(削除)</a></small> 
                    </div>
    
                     @endforeach
                        <input type="submit" value="保存" class="btn btn-primary" style="float:right;width:100%; margin:10px auto;">
                         
                        {!! Form::close() !!}
                        <a  href="{{ URL('new') }}" class="add_item" style="float:right;width:100%; margin:10px auto;">ADD NEW</a>
  
                </div>
            </div>
        </div>
        <a  href="{{ URL('search') }}" class="search_page" style="float:right;width:100%;color:white; font-size:20px; font-weight:bolder;  text-align:center; background-color:#3399FF; border-radius:5px;">検索ページへ</a>
      
    </div>
    
</div>

@endsection
