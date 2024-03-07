<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>

<?php

require_once 'lib.php';

//Creamos el objeto Cryp
$cryp = new CrypX();
//Creamos un clave aleatoria puedes hacerla de la cantdad de bytes que quieras
$key = $cryp->randKey(16);
//Creamos un IV aleatorio
$iv = $cryp->randIv();

//Encriptamos y desencriptamos y enviamos las variables $key y $iv tanto 
//para encriptar como para desencriptar si ambas no coinciden no se podra desencriptar
$encriptado = $cryp->encrypt("Library for encryption and decryption of strings or integers, based on PHP",$key,$iv);
$desencriptado = $cryp->decrypt($encriptado,$key,$iv);

//Imprimimos los valores
echo "Key: ".$key."<br>";
echo "IV: ".$iv."<br>";

var_dump($encriptado);
echo "<br>";
var_dump($desencriptado);

//Nota: Puedes definir las claves de forma estatica si lo deseas