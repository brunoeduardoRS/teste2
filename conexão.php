<?php

$hostname = "localhost";
$bancodedados = "exame";
$usuario = "root";
$senha = "";

$mysqli = new mysqli ($hostname,$usuario,$senha,$bancodedados);
if ($mysqli->connect_errno){
    echo "falha ao conectar: (",$mysqli-> connect_errno . ")" . $mysqli-> connect_error ;
}

$sql = "CREATE TABLE IF NOT EXISTS Questions(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Nome VARCHAR(160) NOT NULL,
        DtNasc VARCHAR(40) NOT NULL,
        Email VARCHAR(120) NOT NULL,
        Celular VARCHAR(12) NOT NULL,
        Cidade VARCHAR(12) NOT NULL,
        6qt char(1) Not Null,
        7qt char(1) Not Null,
        8qt char(1) Not Null,
        9qt char(1) Not Null,
        10qt char(1) Not Null,
        11qt char(1) Not Null,
        12qt char(1) Not Null,
        13qt char(1) Not Null,
        14qt char(1) Not Null,
        15qt char(1) Not Null,
        Escola varchar(30) Not Null,
        Curso varchar(30) Not Null,
        18qt char(1) Not Null,
        Faculdade varchar (30) Not Null,
        formacao varchar (100) Not Null,
        Area varchar (30) Not Null,
        prodTec varchar (30) Not Null,
        Tecnologia varchar (220) Not Null,
        24qt char (1) Not Null,
        25qt char (1) Not Null,
        26qt char (1) Not Null,
        nocodelowcode varchar(100),
        nvProf varchar(20),
        experiencia varchar(60),
        30qt char (1) Not Null,
        31qt char (1) Not Null,
        NivelIng varchar(80),
        Contrato varchar(20),
        37qt char (1) Not Null,
        38qt char (1) Not Null,
        39qt char (1) Not Null,
        Indicacao varchar (30) Not Null,
        Importante varchar (60) Not Null
    )";

if (mysqli_query($mysqli, $sql)) {
    
} else {
    echo "Deu ruim: " . mysqli_error($mysqli);
}

mysqli_close($mysqli);


?>