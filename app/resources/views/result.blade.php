@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:#3399FF; font-weight:bolder; color:white;">検索結果</div>
                <div class="panel-body" style="max-width:100%; text-align:center;" >
                @foreach ($data as $result)
                <p>
                    <small><a href="{{{ URL('uncheck',$result->id)}}}"  style="color:black; font-size:12px;font-weight:bolder; margin-right:10px;">
                                <span>uncheck (未完成チェック)</span></a></small>
                        <input type="checkbox" name="checkBox[]" disabled="disabled"  {{{$result ->done ? 'checked' : '' }}} />
                            
                                <a href="{{{ URL('check',$result->id)}}}"  style="color:#888888;font-size:22px; font-weight:bolder;">{{{ $result->item_name }}}</a>
                                <input type="hidden" name="checkBox[]" value="">
                        <small><a href="{{{ URL('resultdDelete',$result->id)}}}"  style="color:red;margin-left:10px;">delete(削除)</a></small><br>
                    </p>
                @endforeach
               
          
                </div>
                
            </div>
        <a  href="{{ URL('/') }}" class="search_page" style="float:right;width:100%;color:white; font-size:20px; font-weight:bolder;  text-align:center; background-color:#3399FF; border-radius:5px;margin-bottom:15px;">ホームへ</a>
        <a  href="{{ URL('search') }}" class="search_page" style="float:right;width:100%;color:white; font-size:20px; font-weight:bolder;  text-align:center; background-color:#3399FF; border-radius:5px;">検索ページへ</a>

        </div>
    </div>
</div>
@endsection
