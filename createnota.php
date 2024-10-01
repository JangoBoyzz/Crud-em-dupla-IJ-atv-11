<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $nota = $_POST['nota'];

    $sql = "INSERT INTO notas (titulo, nota) VALUES ('$titulo', '$nota')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo registro criado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Nota</title>
</head>
<body>
    
    <form method="POST" action="createnota.php">
        <label for="titulo">Título da nota: </label>
        <input type="text" name="titulo" require>
        <label for="nota">Nota: </label>
        <input type="text" name="nota" require>
        <input  type="submit" value="Adicionar"> 

    </form> 
    <a href="read.php">Ver registros de notas.</a>
</body>