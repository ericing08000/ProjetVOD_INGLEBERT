<?php

$user = 'ericing';
$pass = 'eric@ing%';

try{

    $db = new PDO('mysql:host=localhost; dbname=cinema_exo; port=3308' , $user, $pass);

    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e)
{
    print "Erreur :" . $e->getMessage() . "<br*>";
    die;
}

?>