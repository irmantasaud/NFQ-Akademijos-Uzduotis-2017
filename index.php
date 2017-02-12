<!DOCTYPE html>
<html>
<head>
    <title>NFQ Akademijos 2017 Užduotis</title>
</head>
<body>
    <?php
        require('/includes/db_conn.php');
        $conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
        if ($conn == false)
        {
            echo "MYSQL Connection failed: " . mysqli_connect_error();
            exit();
        }
        $querySelBooks = "SELECT `book_id` ,`book_name` FROM `books`";
        $queryResult = mysqli_query($conn,$querySelBooks);
        while(($data = mysqli_fetch_assoc($queryResult)))
        {
            echo('<ul><a href="content.php/book='.$data[book_id].'">'.$data[book_name] .'</a></ul>');
            echo '<hr>';

        }
        mysqli_close($conn);
     ?>
</body>
</html>