<!DOCTYPE html>
<html>
<head>
    <title>Knygos aprašymas</title>
</head>
<body>
    <link href="css/main.css" rel="stylesheet" type="text/css" >
    <?php
        require('/includes/db_conn.php'); //includinami DB duomenys
        $conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name); //jungiamasi prie db
        if ($conn == false)
        {
            echo "Connection to database Failed "; // Jeigu nepavyksta prisijungti prie DB
            exit();
        }
        $bookID = $_GET['book']; //
        $query = "SELECT * FROM `books` WHERE `book_id` = ".$bookID  ; //vykdoma uzklausa kurioje isrenkama pasirinktos knygos duomenys
        $result = mysqli_query($conn,$query);
        $data = mysqli_fetch_assoc($result); //gaunami knygos duomenys
        echo "<p>Knygos autorius: " . $data['book_author'] . "<br />" . "Knygos pavadinimas: " .$data['book_name'] . "<br />" . "Išleidimo metai: " . $data['publishYear'] . "<br />" . " Knygos žanras: " . $data['book_genre'] . "</p><br />"  ; //atvaizduojami
        echo "<a href= 'index.php' class='book' > Atgal </a>"; // formuojamas atgal mygtukas
        mysqli_close($conn); //nutraukiamas su DB rysis
    ?>
</body>
</html>