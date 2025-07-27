<?php
session_start();

include '../view/index.php';
include '../view/nav.php';
include '../table/income_thead.php';


$sql = "SELECT * FROM income ORDER BY income_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        include '../.db/session/income.php';
        include '../table/income_tbody.php';
    }
} else {
    echo "No Income data found";
}

$conn->close();
