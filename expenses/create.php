<?php

include '../connection/connection.php';

function create($connection)
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $montant = $_POST['montant'];
        $description = $_POST['description'];
        $created_at = date('Y/m/d h:m:s') ;
        if($_POST['created_at'] != NULL) $created_at = $_POST['created_at'] ;
        $statement = $connection->prepare("INSERT INTO expenses (montant, description , created_at) VALUES (? , ?  , ?)");
        //used to prevent sql injection 
        $statement->bind_param('iss', $montant, $description , $created_at);
        $statement->execute();
        $statement->close();
    }
}

create($connection);

header("Location: ../index.php");
exit;
