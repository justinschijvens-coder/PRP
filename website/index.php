<!-- website/index.php -->

<?php
$host = "orthia-db";
$user = "orthia";
$password = "secret";
$database = "orthia";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connectie mislukt: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS aanwezigheid (
    id INT AUTO_INCREMENT PRIMARY KEY,
    naam VARCHAR(100) NOT NULL,
    aanwezig ENUM('Ja','Nee') NOT NULL
)";

$conn->query($sql);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $naam = $_POST['naam'];
    $aanwezig = $_POST['aanwezig'];

    $stmt = $conn->prepare("INSERT INTO aanwezigheid (naam, aanwezig) VALUES (?, ?)");

    $stmt->bind_param("ss", $naam, $aanwezig);

    $stmt->execute();
}
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Orthia Aanwezigheid</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Orthia Aanwezigheidsregistratie</h1>

    <form method="POST">

        <input type="text" name="naam" placeholder="Naam" required>

        <select name="aanwezig">
            <option value="Ja">Ja</option>
            <option value="Nee">Nee</option>
        </select>

        <button type="submit">Opslaan</button>

    </form>

    <h2>Registraties</h2>

    <table>

        <tr>
            <th>Naam</th>
            <th>Aanwezig</th>
        </tr>

        <?php

        $result = $conn->query("SELECT * FROM aanwezigheid");

        while($row = $result->fetch_assoc()) {

            echo "
            <tr>
                <td>{$row['naam']}</td>
                <td>{$row['aanwezig']}</td>
            </tr>
            ";
        }

        ?>

    </table>

</div>

</body>
</html>
