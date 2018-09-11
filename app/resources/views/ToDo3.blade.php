<?php
session_start();

$password="";
$_SESSION['user_id']=1;

try {
    $db =new PDO('mysql:dbname=todo;host=localhost',root,$password);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
}
catch(PDOException $e){

    echo "Connection failed: " . $e->getMessage();
}

    $itemsQuery = $db->prepare("
    SELECT id, name ,done
    FROM items
    WHERE user = :user

    ");

    $itemsQuery->execute([
        'user' => $_SESSION['user_id']
    ]);

    $items = $itemsQuery->rowCount() ? $itemsQuery :[];
    echo'<pre>' , print_r($items,ture),'</pre>';
?>




<!DOCTYPE html>
<html>

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