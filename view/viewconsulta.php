<!DOCTYPE html>
<html>

<head>
    <title>SITE TESTE</title>
</head>

<body>
    <h1>CONSULTA PESSOA</h1>

    <?php

    include_once "../model/conexao.php";

    $sql = "SELECT * FROM pessoa order by cod";

    $result = $GLOBALS['conn'] ->query($sql);

    if ($result->num_rows > 0) {
    echo "<h2>Pessoas</h2><table border=1><center>
    <tr>
        <th>cod</th>
        <th>nome</th>
        <th>email</th>
        <th>celular</th>
        <th>dt_nascimento</th>
    </tr>";
    // saída gerada em cada coluna do sql
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>".$row["cod"]."</td>
        <td>".$row["nome"]." </td>
        <td>".$row["email"]."</td>
        <td>".$row["celular"]."</td>
        <td>".$row["dt_nascimento"]."</td>
        </tr>";
    }
    echo "</center></table>";
} else {
    echo "Nenhuma leitura encontrada";
}
?>

</body>

</html>