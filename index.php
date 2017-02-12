<!DOCTYPE html>
<html>
<head>
    <title>NFQ Akademijos 2017 Užduotis</title>
</head>
<body>
    <!-- <form method = 'post' action = 'index.php'>
    <input type="textbox" name="search" placeholder="Įveskite knygos pavadinimą"> <input type="button" name="searchBtn" value="Paieška" onCli>
    </form> -->
    <script type="text/javascript">

    </script>
    <?php
        require('/includes/db_conn.php');
        echo "<form method = 'get' action = 'index.php'>
                <input type='textbox' name='search' placeholder='Įveskite knygos pavadinimą'>
                <br />
                <input type='checkbox' name='search'>Rikiuoti Pagal Pavadinimą <input type='checkbox' name='search'> Rikiuoti pagal Išleidimo metus (Naujausia-seniausia)
                <br />
                <input type='submit' name='searchBtn' value='Paieška'>
                </form>";

        $conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
        if ($_GET['search']==NULL)
        {

            if ($conn == false)
            {
                echo "MYSQL Connection failed: " . mysqli_connect_error();
                exit();
            }

            $querySelBooks = "SELECT `book_id` ,`book_name` FROM `books` ";
            $queryResult = mysqli_query($conn,$querySelBooks);
            while(($data = mysqli_fetch_assoc($queryResult)))
            {
                echo('<ul><a href="content.php?book='.$data[book_id].'">'.$data[book_name] .'</a></ul>');
                echo '<hr>';

            }
        }
        else if ($_GET['search'] != NULL)
        {

            $searchBoxValue=$_GET['search'];
            if ($conn == false)
            {
                echo "MYSQL Connection failed: " . mysqli_connect_error();
                exit();
            }
            $querySelBooks = "SELECT `book_id` ,`book_name` FROM `books` WHERE book_name LIKE '%".$searchBoxValue."%' ";
            $queryResult = mysqli_query($conn,$querySelBooks);

            while(($data = mysqli_fetch_assoc($queryResult)))
            {
                echo('<ul><a href="content.php?book='.$data[book_id].'">'.$data[book_name] .'</a></ul>');
                echo '<hr>';

            }
        }

        mysqli_close($conn);

     ?>
</body>
</html>