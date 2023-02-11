<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Content Management Page</h1>
    <div class="blogs">
    <form action="cmp.php" method="POST">
        <label for="title">Title</label><br><input type="text" name="title"><br>
        <label for="content">Content</label><br><textarea name="content" id="" cols="50" rows="20">    </textarea><br>
        <input name="submit" type="submit" value="Submit">
    </form> </div>
    <div class="cardtexts">
        <form action="">
            <input type="text">
            <input type="text">
            <input type="text">
        </form>
    </div>
    <?php
    $username = "root";
    $password = "";
    $servername = "localhost";
    $db = "cms";
     $conn = mysqli_connect($servername, $username, $password,$db);

     // Check connection
     if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
     }
     
     echo "Connected successfully";
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        
        $title = $_POST['title'];
        $content = $_POST['content'];
        
        $sql = "INSERT INTO content (content, title)
        VALUES ('$content', '$title')";

        if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }         
    }
    ?>





</body>
</html>