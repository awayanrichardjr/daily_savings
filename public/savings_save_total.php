<?php
session_start();

include '../web/index.php';
include '../web/nav.php';

$sql = "SELECT SUM(save_savings) AS save_total FROM savings";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {

    $_SESSION['save_total'] = $row['save_total'];

    include '../table/savings_total_table.php';
  }
} else {
  echo "0 result";
}
$conn->close();