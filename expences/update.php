<?php

include '../connection/connection.php';

function update($connection)
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['method'] == 'PUT') {
        
        $montant = $_POST['montant'];
        $description = $_POST['description'];
        $id = $_POST['id'];
        $statement = $connection->prepare("UPDATE expenses SET montant = ? , description = ? WHERE id = ?");
        //prepare used to prevent sql injection 
        $statement->bind_param("isi", $montant, $description, $id);
        $statement->execute();
        $statement->close();

    }
}

update($connection);

header("Location: ../index.php");
exit;
