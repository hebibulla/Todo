        
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
            <li class="sidebar-brand">
                    <a href="#">
                        local test
                    </a>
                </li>
                @foreach($sidebar as $item)
                <li>
                    <a href="{{url('/')}}/{{ $item->name}}">{{ $item->name}}</a>
                </li>
                    

                @endforeach

                
            </ul>
        </div>
       

        <?php
//      $dbhost = '153.126.153.193:8005';
//          $dbuser ='test5';
//          $dbpass = '';

//          try {
//             $dbh = new PDO("mysql:host=$dbhost;dbname=test5", $dbuser, $dbpass);
//             $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//             echo "connect successfully </br>";

//         } catch (PDOException $e) {
//             echo 'Connection failed: ' . $e->getMessage();
//         }
//         $dbh = null;

// ?>
