<?php

include 'connection/connection.php';
$incomes = [] ;
function index_incomes($connection, &$table)
{
    $statement = $connection->prepare('SELECT * FROM incomes');
    $statement->execute();

    $results = $statement->get_result();

    while ($row = $results->fetch_assoc()) {
        $table[] = $row;
    }

    $statement->close();
}


index_incomes($connection, $incomes);
// header("Location: ../index.php");
// exit;
