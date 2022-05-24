<?php

require_once "../model/conexao.php";

require_once "../model/pessoa.php";


if (isset($_POST["deletar"])) {

$GLOBALS['person']->del($_POST['cod']);

}else{
    echo "filha da puta";
}

?>