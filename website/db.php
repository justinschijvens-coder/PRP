<?php

$conn = new mysqli(
    "orthia",
    "orthia",
    "orthia",
    "orthia"
);

if ($conn->connect_error) {
    die("Database fout");
}

?>
