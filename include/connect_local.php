<?php

$user = 'ericing';
$pass = 'eric@ing%';

try{

    $bdd = new PDO('mysql:host=localhost; dbname=projetvod_ericing; port=3308' , $user, $pass);

    // set the PDO error mode to exception
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e)
{
    print "Erreur :" . $e->getMessage() . "<br*>";
    die;
}

?>