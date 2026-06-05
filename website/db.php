<?php

$conn = new mysqli(
    "orthia-db",
    "orthia",
    "orthia",
    "orthia"
);

if ($conn->connect_error) {
    die("Database fout");
}

?>
