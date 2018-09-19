@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:#3399FF; font-weight:bolder; color:white;">削除結果</div>
                <div class="panel-body" style="font-size:28px;text-align:center; font-weight:bolder">  
                
                <p>Deleted!</p>
                <p>削除完了しました！</p>
                      
                </div>
                
            </div>
        <a  href="{{ URL('/') }}" class="search_page" style="float:right;width:100%;color:white; font-size:20px; font-weight:bolder;  text-align:center; background-color:#3399FF; border-radius:5px;margin-bottom:15px;">ホームへ</a>
        <a  href="{{ URL('search') }}" class="search_page" style="float:right;width:100%;color:white; font-size:20px; font-weight:bolder;  text-align:center; background-color:#3399FF; border-radius:5px;">検索ページへ</a>

        </div>
    </div>
</div>
@endsection
