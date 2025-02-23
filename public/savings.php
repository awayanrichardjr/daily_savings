<?php
session_start();

include '../web/index.php';
include '../web/nav.php';
include '../table/savings_thead.php';

$sql = "SELECT * FROM savings";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        
        $_SESSION['save_savings'] = $row['save_savings'];
        $_SESSION['save_date'] = $row['save_date'];
        
        include '../table/savings_tbody.php';
  }
} else {
  echo "0 result";
}
$conn->close();