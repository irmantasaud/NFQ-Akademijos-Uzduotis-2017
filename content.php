<!DOCTYPE html>
<html>
<head>
    <title>Knygos aprašymas</title>
</head>
<body>
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
        echo "Knygos autorius: " . $data['book_author'] . "<br />" . "Knygos pavadinimas: " .$data['book_name'] . "<br />" . "Išleidimo metai: " . $data['publishYear'] . "<br />" . " Knygos žanras: " . $data['book_genre'] . "<br />"  ; //atvaizduojami
        echo "<a href= 'index.php' > Atgal </a>"; // formuojamas atgal mygtukas
        mysqli_close($conn); //nutraukiamas su DB rysis
    ?>
</body>
</html>