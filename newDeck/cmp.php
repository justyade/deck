<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cmp.css">
</head>

<body>

    <div class="main">

        <h1>Blog Yazılarınız</h1>
        <div class="blogs">
            <form onsubmit="event.preventDefault();" action="cmp.php" method="POST">
                <label for="title">Title</label><br><input type="text" name="title"><br><br>

                <input type="file" id="myfile" name="myfile" accept=".jpg, .jpeg, .png"><br><br>
                <div class="content">
                    <br><textarea name="content" id="text" cols="50" rows="20"></textarea><br>
                    <img id="img">
                </div>
                <br>
                <input name="submit" type="submit" value="Submit">
            </form>
        </div>

    </div>

    <script>
        var div = document.getElementsByClassName("content")
        var text = document.getElementById("text");
        var p = document.createElement("p");
        var img = document.getElementById("img");
        var x = document.getElementById("myfile");

        const readUrl = event => {
            if (event.files && event.files[0]) {
                let reader = new FileReader();
                reader.onload = event => img.src = event.target.result;
                reader.readAsDataURL(event.files[0])
            }
        }

        x.onchange = function() {
            readUrl(this);
        };

    </script>

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
     
    //echo "Connected successfully";
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        
        $title = $_POST['title'];
        $content = $_POST['content'];
        
        $sql = "INSERT INTO content (content, title)
        VALUES ('$content', '$title')";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } 
        
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }         
    }
    ?>




</body>

</html>
