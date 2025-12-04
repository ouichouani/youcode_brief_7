<?php

include 'connection/connection.php';

$expenses = [] ;
function index_expenses($connection, &$table)
{
    $statement = $connection->prepare('SELECT * FROM expenses');
    $statement->execute();

    $results = $statement->get_result();

    while ($row = $results->fetch_assoc()) {
        $table[] = $row;
    }

    $statement->close();
}


index_expenses($connection, $expenses);
// header("Location: ../index.php");
// exit;
