<?php
include '../web/index.php';
include '../web/nav.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // $income_id = $_POST['income_id'];
    $income_cap = $_POST['income_cap'];
    $income_inc = $_POST['income_inc'];
    $income_date = $_POST['income_date'];
    $income_total = $_POST['income_total'];
    $income_fund = $_POST['income_fund'];

    $sql = "INSERT INTO income (income_cap, income_inc, income_date, income_total, income_fund)
VALUES ('$income_cap','$income_inc','$income_date','$income_total','$income_fund')";

    if ($conn->query($sql) === TRUE) {
        header('location: income.php');
        // exit();
        $conn->close();
    } else {
        header('location: form_income.php?error');
        // exit();
        $conn->close();
    }
}
include '../form/income.php';