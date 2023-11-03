<?php
include "./connection.php";


$result = $conn->query("SELECT * FROM stagiaires");

$stagaires = $result->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($stagaires);
echo "</pre>";




