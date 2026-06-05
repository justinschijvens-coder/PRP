<?php

$conn = new mysqli(
    "orthia-db",
    "orthia-db",
    "orthia-db",
    "orthia-db"
);

if ($conn->connect_error) {
    die("Database fout");
}

?>
