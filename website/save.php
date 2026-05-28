<?php

include 'db.php';

$name = $_POST['name'];
$signature = $_POST['signature'];

$sql = "INSERT INTO signatures (name, signature)
VALUES (?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param(
    "ss",
    $name,
    $signature
);

$stmt->execute();

echo "
<h1>Succesvol afgetekend</h1>
<a href='index.php'>Terug</a>
";

?>
