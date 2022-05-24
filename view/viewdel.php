<!DOCTYPE html>
<html>

<head>
    <title>SITE TESTE</title>
</head>

<body>
    <h1>DELETAR PESSOA</h1>

    <form name="formprocurar1" method="POST" action="viewdel.php">
    cod<input name="esse" type="text">

    <input value="buscar" type="submit" name="procura">

</form>

<?php

require_once "../model/conexao.php";

require_once "../model/pessoa.php";

$cod = $_POST["esse"];

if (isset($_POST["procura"])) {

$sql = "SELECT * FROM pessoa where cod='".$cod."'";

$result = $GLOBALS['conn']->query($sql);

    echo '<form name="form3" method="POST" action="../controller/del.php">';

    while($row = $result->fetch_assoc()) {
        echo 'cod<input name="cod" type="text" value="'.$row["cod"].'"> <br />';

        echo 'nome<input name="nome" type="text" value="'.$row["nome"].'"> <br />';
        
        echo 'email<input name="email" type="text" value="'.$row["email"].'"> <br />';
        
        echo 'celular<input name="celular" type="text" value="'.$row["celular"].'"> <br />';
        
        echo 'data de nascimento<input name="dt_nascimento" type="text" value="'.$row["dt_nascimento"].'"> <br />';
    }

    echo '<input value="DEL" type="submit" name="deletar"></form>';
} else {
echo "Nenhuma leitura encontrada";
}

?>
</body>

</html>