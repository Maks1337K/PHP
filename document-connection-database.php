<?php
require_once 'document-config.php';
$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if(!$connect) {
    echo "Error: cannot establish connection с MySQL." . PHP_EOL;
    echo "Code error errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Text error error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
$connect->set_charset(DB_CHARSET);
//echo "Вітаємо сам дурзі";
?>