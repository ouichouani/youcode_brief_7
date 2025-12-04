<?php

include '../connection/connection.php';

function update($connection)
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['method'] == 'PUT') {
        
        $montant = $_POST['montant'];
        $description = $_POST['description'];
        $id = $_POST['id'];
        $created_at = date('Y-m-d H:i:s'); // generate current datetime
        if($_POST['created_at'] != NULL) $created_at = $_POST['created_at'];


        $statement = $connection->prepare("UPDATE expenses SET montant = ? , description = ? , created_at = ? WHERE id = ?");
        //prepare used to prevent sql injection 
        $statement->bind_param("issi", $montant, $description, $created_at , $id );
        $statement->execute();
        $statement->close();

    }
}

update($connection);

header("Location: ../index.php");
exit;
