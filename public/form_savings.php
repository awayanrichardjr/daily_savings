<?php
include '../web/index.php';
include '../web/nav.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // $save_id = $_POST['save_id'];
    $save_savings = $_POST['save_savings'];
    $save_date = $_POST['save_date'];
    $save_total = $_POST['save_total'];

    $sql = "INSERT INTO savings (save_savings, save_date, save_total) VALUES ('$save_savings','$save_date','$save_total')";

    if ($conn->query($sql) === TRUE) {
        header('location: savings.php');
        $conn->close();
    } else {
        header('location: form_savings.php?error');
        $conn->close();
    }
}
include '../form/savings.php';