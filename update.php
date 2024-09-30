<?php
include 'db.php';
$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $nota = $_POST['nota'];

    $sql = "UPDATE nota SET titulo = '$titulo', nota = '$nota' WHERE id = $id";

    if ($conn -> query($sql) === TRUE) {
        echo "Nota atualizado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    };
};
    $sql = "SELECT * FROM nota WHERE id=$id";
    $result = $conn -> query($sql);
    $row = $result -> fetch_assoc();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Nota</title>
</head>
<body>
    
<form method="POST" action=" update.php?id=<?php echo $row['id'];?>">
    <label for="titulo">Título da Nota</label>
    <input type="text" name="titulo" value="<?php echo $row['titulo']; ?>" required>
    <label for="nota">Conteúdo da Nota:</label>
    <input type="text" name="nota" value="<?php echo $row['nota']; ?>" required>
    <input type="submit" value="Atualizar">
</form>
    <a href="read.php">Ver registros.</a>
</body>
</html>