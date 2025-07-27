<?php
include '../view/index.php';
include '../view/nav.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // $income_id = $_POST['income_id'];
    $exp_person = $_POST['exp_person'];
    $exp_item = $_POST['exp_item'];
    $exp_cost = $_POST['exp_cost'];
    $exp_payment = $_POST['exp_payment'];
    $exp_balance = $_POST['exp_balance'];
    $exp_date = $_POST['exp_date'];

    $sql = "INSERT INTO expenses (exp_person, exp_item, exp_cost, exp_payment, exp_balance, exp_date)
VALUES ('$exp_person','$exp_item','$exp_cost','$exp_payment','$exp_balance','$exp_date')";

    if ($conn->query($sql) === TRUE) {
        header('location: expenses.php');
        // exit();
        $conn->close();
    } else {
        header('location: form_expenses.php?error');
        $conn->close();
    }
}
include '../form/expenses.php';
