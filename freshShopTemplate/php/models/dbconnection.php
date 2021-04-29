<?php
/* returns database connection
@ returns PDO */
function getPdo() : PDO 
{
    $pdo = new PDO('mysql:host=localhost;dbname=webshop;charset=utf8', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

        return $pdo;
}
// to call the function you need to:
// require 'PDOconnection.php'
//call the function: $pdo = getPdo();