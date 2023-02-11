<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?" <?php echo time(); ?>" />
    <title>Document</title>
    
</head>
<body>
    <h1>Ana Sayfa</h1>
    <div class="navbar" >
    <?php
    $username = "root";
    $password = "";
    $servername = "localhost";
    $db = "cms";
     $conn = mysqli_connect($servername, $username, $password,$db);
     $query = "SELECT title,ID FROM content";
     $result = mysqli_query($conn,$query);

     if(mysqli_num_rows($result) > 0){?>
     <ul id="titles">
        <?php
        while($row = mysqli_fetch_assoc($result)) {
            ?><a href='<?php echo "blog.php?p=$row[ID]"; ?>'class='e'><li><?php echo "$row[title]"; ?></li></a>
        <?php }
     }?>
    
    </ul>

    </div>
    <span id="cards">
        <script src="script.js"></script>
    </span>
</body>
</html>