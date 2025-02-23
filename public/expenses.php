<?php
session_start();

include '../web/index.php';
include '../web/nav.php';
include '../table/expenses_thead.php';

$sql = "SELECT *, (exp_cost-exp_payment) AS exp_balance FROM expenses";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        include '../.db/session/expenses.php';
        include '../table/expenses_tbody.php';
    }
} else {
    echo "0 result";
}
$conn->close();