<!DOCTYPE html>
<html>
<head>
    <title>NFQ Akademijos 2017 Užduotis</title>
</head>
<body>
    <?php
        require('/includes/db_conn.php');
        echo "<form method = 'get' action = 'index.php'>
                <input type='textbox' name='search' placeholder='Įveskite knygos pavadinimą'>
                <br />
                <input type='radio' name='sortByName'>Rikiuoti pagal Pavadinimą (A-Z)
                <input type='radio' name='sortByDate'> Rikiuoti Pagal išleidimo datą (Naujausias-Seniausias)
                <br />
                <input type='submit' name='searchBtn' value='Paieška'>
                </form>"; //formuojamas paieskos laukas ir pasirinkimai rikiavimo
        $conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name); // prisijungimo prie db uzklausa
        if ($_GET['search']==NULL) // Tikrinam ar yra kas nors ivesta i paieskos lauka, jeigu ne vykdoma sita dalis
        {

            if ($conn == false) // tikrinam ar sekmingai prisijungta prie DB
            {
                echo "MYSQL Connection failed: "; //isvedama kad neimanoma prisijungt
                exit();
            }

            $querySelBooks = "SELECT `book_id` ,`book_name` FROM `books` "; // selectinami duomenys is duombazes visam atvaizdavimui
            $queryResult = mysqli_query($conn,$querySelBooks);
            while(($data = mysqli_fetch_assoc($queryResult)))
            {
                echo('<ul><a href="content.php?book='.$data[book_id].'">'.$data[book_name] .'</a></ul>'); // atvaizduojami duomenys nuorodu pavidalu
                echo '<hr>';

            }
        }
        else if ($_GET['search'] != NULL) // jeigu yra ivesta i paieskos lauka
        {

            $searchBoxValue=$_GET['search'];  // priskiriama paieskos lauko verte is $_GET
            if ($conn == false)
            {
                echo "MYSQL Connection failed "; // tikrinamas prisijungimas prie DB
                exit();
            }
            $querySelBooks = "SELECT `book_id` ,`book_name` FROM `books` WHERE book_name LIKE '%".$searchBoxValue."%' "; //pradine uzklausa
            if (isset($_GET['sortByName'])){ // jeigu pazymetas rikiavimas pagal pavadinima
                $querySelBooks .= " ORDER BY `book_name`";
            }
            else if (isset($_GET['sortByDate'])){ // jeigu pazymetas vyksta rikiavimas pagal metus
                $querySelBooks .= " ORDER BY `publishYear`";

            }
            $queryResult = mysqli_query($conn,$querySelBooks);// vykdoma uzklausa
            while(($data = mysqli_fetch_assoc($queryResult)))
            {
                echo('<ul><a href="content.php?book='.$data[book_id].'">'.$data[book_name] .'</a></ul>'); //atvaizduojami duomenys nuorodu pavidalu
                echo '<hr>';

            }
        }
        mysqli_close($conn);

     ?>
</body>
</html>