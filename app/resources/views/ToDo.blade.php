<!DOCTYPE html>
<html>
@include('include.header1')
<body>
  
<div class="list_label">
<h1 class="header">To Do</h1>
 <ul class="items">
    <li><span calss="item">買い物</span>
        <a href="#" class="done_btn">mark as done</a>
    </li>
    <li><span class="item_Done">勉強</span></li>
 
 </ul>
 <form action="add.php" class="item_add" method="post">
   <input type="text" name="name" placeholder="新しいリスト追加記述してください！" class="input" autocomplet="off" require>
   <input type="submit" value="add" class="add_btn">  
</form>




</div>
</body>
</html>