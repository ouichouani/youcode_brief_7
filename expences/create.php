<?php

include '../connection/connection.php';

function create($connection)
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $montant = $_POST['montant'];
        $description = $_POST['description'];
        $statement = $connection->prepare("INSERT INTO expenses (montant, description) VALUES (? , ? )");
        //used to prevent sql injection 
        $statement->bind_param('is', $montant, $description);
        $statement->execute();
        $statement->close();
    }
}

create($connection);

header("Location: ../index.php");
exit;
