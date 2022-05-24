<?php

require_once "../model/conexao.php";

require_once "../model/pessoa.php";

if (isset($_POST["testtt"])) {

$nome = $_POST['nome'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$dt_nascimento = $_POST['dt_nascimento'];

$person->setNome($nome);
$person->setEmail($email);
$person->setCelular($celular);
$person->setDt_nascimento($dt_nascimento);

//Insere no Banco de Dados, usando Prepared Statements.

$person->add();

}else{
    echo "filha da puta";
}

?>