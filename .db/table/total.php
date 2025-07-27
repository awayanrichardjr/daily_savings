<?php
$sql = "CREATE TABLE IF NOT EXISTS total (
    total_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    total_cost INT(255) NOT NULL,
    total_payment INT(255) NOT NULL,
    total_balance INT(255) NOT NULL,
    total_remaining INT(255) NOT NULL,
    total_gap INT(255) NOT NULL
)";
