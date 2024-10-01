<?php
include 'db.php';
$id = $_GET['id'];
    $sql = "DELETE FROM notas WHERE id = $id";

    if ($conn -> query($sql) === TRUE) {
        echo "Nota deletado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }


    $result = $conn -> query($sql);
    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
    <br>
    <br>
    <a href="read.php">Ver registros.</a>
</body>
</html>
