@extends('app')
@section('content')

<div class="list_label">
<h1 class="header">To Do</h1>
 <!-- <ul class="items">
    <li><span calss="item">買い物</span>
        <a href="#" class="done_btn">mark as done</a>
    </li>
    <li><span class="item_Done">勉強</span></li>
 
 </ul> -->
 @foreach($data as $d)
 {{ $d->name }}
  @endforeach


 {!! Form::open(array('autocomplete'=>'off','class'=>'todo_form')) !!}
 <!-- <form action="add.php" class="item_add" method="post" class=""> -->
   <input type="text" name="name" placeholder="新しいリスト追加記述してください！" class="input" autocomplet="off" require>
   <input type="submit" value="add" class="add_btn">  
<!-- </form> -->
{!! Form::close() !!}



</div>
@endsection
