<?php
$sql = "CREATE TABLE IF NOT EXISTS income (
    income_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    income_cap INT(255) NOT NULL,
    income_inc INT(255) NOT NULL,
    income_date VARCHAR(255) NOT NULL,
    income_total INT(255) NOT NULL,
    income_fund INT(255) NOT NULL
)";
