<?php

$conn = new mysqli(
    "orthia-db",
    "orthia",
    "debian",
    "orthia"
);

if ($conn->connect_error) {
    die("Database fout");
}

?>
