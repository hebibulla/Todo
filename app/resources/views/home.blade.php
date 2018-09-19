@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" >
        <div class="col-md-8 col-md-offset-2" >
        
            <div class="panel panel-default">
            
                <div class="panel-heading" style="background-color:#3399FF; font-weight:bolder; color:white;">ダッシュボード</div>

                
                    @if (session('status'))
                        <div class="alert alert-success">
    
                            {{ session('status') }}
                        </div>
                       
                    @endif         
                     <div class="col-md-12" style="background-color:#ffffff; 
                     box-shadow: 0px 3px 10px rgba(0,0,0,.3); margin-bottom:20px;
                     border-bottom-right-radius:5px; border-bottom-left-radius:5px;
                     text-align:center;">
                     <div class="panel-body">
                    {!! Form::open() !!}
                    {{{ csrf_field() }}}

                    @foreach ($data as $item)
                    <p>
                    <small><a href="{{{ URL('uncheck',$item->id)}}}"  style="color:black; font-size:12px;font-weight:bolder; margin-right:10px;">
                                <span>uncheck (未完成チェック)</span></a></small>
                        <input type="checkbox" name="checkBox[]" disabled="disabled"  {{{$item ->done ? 'checked' : '' }}} />
                            
                                <a href="{{{ URL('check',$item->id)}}}"  style="color:#888888;font-size:22px; font-weight:bolder;">{{{ $item->item_name }}}</a>
                                <input type="hidden" name="checkBox[]" value="">
                        <small><a href="{{{ URL('resultdDelete',$item->id)}}}"  style="color:red;margin-left:10px;">delete(削除)</a></small><br>
                    </p>
    
                     @endforeach
                         
                        {!! Form::close() !!}
                        
                        <a  href="{{ URL('new') }}" class="add_item" style="float:right;width:100%; margin:10px auto;">ADD NEW</a>
  
                        </div>
                        
            </div>
        </div>
        <a  href="{{ URL('search') }}" class="search_page" style="float:right;width:100%;color:white; 
        font-size:20px; font-weight:bolder;  text-align:center; 
        background-color:#3399FF; border-radius:5px;
        box-shadow: 0px 3px 10px rgba(0,0,0,.3);">検索ページへ</a><br>
        
        <p style="float:right;width:100%;height:100px;margin-top:20px;color:black; 
        font-size:18px;  background-color:white; text-align:center; border-radius:5px;
        box-shadow: 0px 3px 10px rgba(0,0,0,.3); padding:20px;">リストをクリックして完成チェック入れられます。</p>
        
    </div>
    
</div>

@endsection
