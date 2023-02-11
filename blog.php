<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<?php
    $username = "root";
    $password = "";
    $servername = "localhost";
    $db = "cms";
     $conn = mysqli_connect($servername, $username, $password,$db);
     $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
     $url_components = parse_url($url);
 
     // Use parse_str() function to parse the
     // string passed via URL
     parse_str($url_components['query'], $params);
          
     // Display result
      
     $query = "SELECT * FROM content WHERE ID=".$params['p'];
     $result = mysqli_query($conn,$query);

     if(mysqli_num_rows($result) > 0){?>
     <p id="content">
        <?php
        while($row = mysqli_fetch_assoc($result)) {
            echo "<h2> ".$row['title']. "</h2> <br>",$row['content'] ."";
          }
     }
    ?></>

    </div>
</body>
</html>