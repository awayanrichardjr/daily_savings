<?php
$sql = "CREATE TABLE IF NOT EXISTS savings (
    save_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    save_savings INT(255) NOT NULL,
    save_date VARCHAR(255) NOT NULL,
    save_total INT(255) NOT NULL
)";
