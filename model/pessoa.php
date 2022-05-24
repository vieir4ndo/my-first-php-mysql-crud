<?php

include_once "../model/conexao.php";

class Pessoa{
public $cod="";
public $nome="";
public $email="";
public $celular="";
public $dt_nascimento="";

//METODOS
public function setNome($string) {
    $this->nome = $string;
}
public function getNome() {
    return $this->nome;
}
public function setEmail($string) {
    $this->email = $string;
}
public function getEmail() {
    return $this->email;
}
public function setCelular($string) {
    $this->celular = $string;
}
public function getCelular() {
    return $this->celular;
}
public function setDt_nascimento($date) {
    $this->dt_nascimento = $date;
}
public function getDt_nascimento() {
    return $this->dt_nascimento;
}

function __construct(){
    $this->nome = "";
    $this->celular = "";
    $this->email = "";
    $this->dt_nascimento = "";
    }

    
function add(){
       
    //codigo fonte
    $sql = "INSERT INTO pessoa (nome, email, celular, dt_nascimento) VALUES ('".$this->nome."',
    '" . $this->email . "',
    '" .$this->celular ."',
    '". $this->dt_nascimento."')";

    if ($GLOBALS['conn']->query($sql) == TRUE) {
    echo "<br >New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;
    
    }
}

function del($cod){
    //codigo fonte

    $sql = "delete from pessoa where cod='". $cod."'";
    if ($GLOBALS['conn']->query($sql) == TRUE) {
    echo "<br > record deleted successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;
    
    }
    }

function edit($cod){
    //codigo fonte
$sql = "UPDATE teste1.pessoa SET nome='{$this->nome}'
, email='{$this->email}'
, celular='{$this->celular}'
, dt_nascimento= '{$this->dt_nascimento}' WHERE cod='{$cod}'";

    if ($GLOBALS['conn']->query($sql) == TRUE) {
    echo "<br > record updated successfully";
    echo $sql;
    } else {
    echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;
    
    }
    }
}

$GLOBALS['person'] = new Pessoa();

?>
