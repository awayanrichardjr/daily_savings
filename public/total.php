<?php
session_start();

include '../web/index.php';
include '../web/nav.php';

$sql = "SELECT

SUM(exp_cost) AS total_cost,
SUM(exp_payment) AS total_payment,
(SUM(exp_cost) - SUM(exp_payment)) AS total_remaining

FROM expenses";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        
        $_SESSION['total_cost'] = $row['total_cost'];
        $_SESSION['total_payment'] = $row['total_payment'];
        $_SESSION['total_balance'] = $row['total_cost'] - $row['total_payment'];
        $_SESSION['total_remaining'] = $row['total_remaining'];
        $_SESSION['total_gap'] = $row['total_remaining'];
        
        include '../table/total_table.php';
}
} else {
  echo "0 result";
}
$conn->close();