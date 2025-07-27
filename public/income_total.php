<?php
session_start();

include '../view/index.php';
include '../view/nav.php';

$sql = "SELECT SUM(income_cap) AS income_fund, SUM(income_inc) AS income_total FROM income";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {

    $_SESSION['income_fund'] = $row['income_fund'];
    $_SESSION['income_total'] = $row['income_total'];

    include '../table/income_total_table.php';
  }
} else {
  echo "0 result";
}
$conn->close();
