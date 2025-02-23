<?php
$sql = "CREATE TABLE expenses (
    exp_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    exp_person VARCHAR(255) NOT NULL,
    exp_item VARCHAR(255) NOT NULL,
    exp_cost INT(255) NOT NULL,
    exp_payment INT(255) NOT NULL,
    exp_balance INT(255) NOT NULL,
    exp_date VARCHAR(255) NOT NULL
)";
