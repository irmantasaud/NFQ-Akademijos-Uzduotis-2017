<!DOCTYPE html>
<html>
<head>
    <title>Knygos aprašymas</title>
</head>
<body>
    <?php
        require('/includes/db_conn.php');
        $conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
        if ($conn == false)
        {
            echo "Connection to database Failed " . mysqli_connect_error();
            exit();
        }
        $bookID = $_GET['book'];
        $query = "SELECT * FROM `books` WHERE `book_id` = ".$bookID  ;
        $result = mysqli_query($conn,$query);
        $data = mysqli_fetch_assoc($result);
        echo "Knygos autorius: " . $data['book_author'] . "<br />" . "Knygos pavadinimas: " .$data['book_name'] . "<br />" . "Išleidimo metai: " . $data['publishYear'] . "<br />" . " Knygos žanras: " . $data['book_genre'] . "<br />"  ;
        echo "<a href= 'index.php' > Atgal </a>"

    ?>
</body>
</html>