<?php 
include 'db.php';

$sql = "SELECT * FROM notas";

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
                        <a href='update.php?id={$row['id']}'>Editar</a> |
                        <a href='delete.php?id={$row['id']}'>Excluir</a>
                    </td>
                </tr>";
        }
    echo "</table>";
}else{
    echo "Nenhuma nota encontrada.";
}
$conn -> close();

?>



