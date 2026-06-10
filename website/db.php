<?php

$conn = new mysqli(
    "orthia-db",
    "root",
    "orthia",
    "orthia"
);

if ($conn->connect_error) {
    die("Database fout");
}

?>
