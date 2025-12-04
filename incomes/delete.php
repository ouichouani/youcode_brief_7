<?php

include '../connection/connection.php';

function delete($connection)
{
    if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST["method"] == 'DELETE') {
        $id = $_POST['id'];
        $statement = $connection->prepare('DELETE FROM incomes WHERE id = ? ');
        $statement->bind_param('i', $id);
        $statement->execute();
        $statement->close();
    }
}

delete($connection);

header("Location: ../index.php");
exit;
