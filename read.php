<?php 
include 'db.php';

$sql = "SELECT * FROM notas ";

$result = $conn -> query($sql);

if ($result -> num_rows > 0){
    echo "<table border='1'>
        <tr>
            <th> Titulo da nota </th>
            <th> Conteúdo </th>
            <th> Dono da nota </th>
        </tr>";
        while($row = $result -> fetch_assoc()){
            echo "<tr>
                    <td> {$row['titulo']} </td>
                    <td> {$row['nota']} </td>
                    <td> {$row['dono']} </td> 
                    <td> 
                        <a href='updatenota.php?id={$row['id']}'>Editar</a> |
                        <a href='deletenota.php?id={$row['id']}'>Excluir</a>
                    </td>
                </tr>";
        }
    echo "</table>";
}else{
    echo "Nenhuma nota encontrada.";
}
$conn -> close();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloco de Notas</title>
</head>
<body>
    <br>
    <br>
    <a href="create.php">Novo usuario.</a>
    <br>
    <a href="createnota.php">Nova nota.</a>
</body>
</html>



