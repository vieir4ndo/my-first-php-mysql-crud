<?php

require_once "../model/conexao.php";

require_once "../model/pessoa.php";

$cod = $_POST["esse"];

if (isset($_POST["procura"])) {

$sql = "SELECT * FROM pessoa where cod='".$cod."'";

$result = $GLOBALS['conn']->query($sql);

    echo '<form name="form3" method="POST" action="../controller/edit.php">';

    while($row = $result->fetch_assoc()) {
        echo 'cod<input name="cod" type="text" value="'.$row["cod"].'"> <br />';

        echo 'nome<input name="nome" type="text" value="'.$row["nome"].'"> <br />';
        
        echo 'email<input name="email" type="text" value="'.$row["email"].'"> <br />';
        
        echo 'celular<input name="celular" type="text" value="'.$row["celular"].'"> <br />';
        
        echo 'data de nascimento<input name="dt_nascimento" type="text" value="'.$row["dt_nascimento"].'"> <br />';
    }

    echo '<input value="Salvar" type="submit" name="editar"></form>';
} else {
echo "Nenhuma leitura encontrada";
}

?>