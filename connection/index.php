<html>
<head>
    <meta charset="UTF-8">
    <title> PAI </title>
</head>
<body>

    <?php
        
        require_once 'connection.php';

        if($conn ->connect_error) die($conn->connect_error);

        $query = "SELECT * FROM users";
        $result = $conn->query($query);
        if(!$result) die($conn->error);

        $rows = $result->num_rows;
        for($j =0; $j < $rows; ++$j)
        {
            $result->data_seek($j);
            $row = $result->fetch_array(MYSQLI_ASSOC);
            echo 'Autor: ' .$row['Imie'] .'<br>';
            echo 'Tytuł: ' .$row['Nazwisko'] .'<br>';
            echo 'Rok: ' .$row['Data_urodzenia'] .'<br><br>';
        }
        $result -> close();
        $conn -> close();
   
    ?>

</body>
</html>