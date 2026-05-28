<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orthia Veiligheidsprotocol</title>

    <style>

        body{
            font-family: Arial, sans-serif;
            background:#f4f4f4;
            margin:0;
            padding:0;
        }

        .container{
            width:80%;
            margin:auto;
            padding:20px;
        }

        .content{
            background:white;
            padding:30px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
        }

        h1{
            color:#0066cc;
        }

        ul{
            line-height:2;
        }

        /* Klein formulier onderaan */

        .sign-form{
            margin-top:40px;
            padding:15px;
            width:300px;
            background:#fafafa;
            border:1px solid #ddd;
            border-radius:8px;
        }

        .sign-form input{
            width:100%;
            padding:8px;
            margin-top:10px;
            margin-bottom:10px;
        }

        .sign-form button{
            width:100%;
            padding:10px;
            background:#0066cc;
            color:white;
            border:none;
            cursor:pointer;
        }

        .sign-form button:hover{
            background:#004999;
        }

    </style>
</head>
<body>

<div class="container">

    <div class="content">

        <h1>Orthia Veiligheidsprotocol</h1>

        <p>
            Hieronder staan de basismaatregelen voor veiligheid en hygiëne.
        </p>

        <ul>
            <li>Handen regelmatig wassen</li>
            <li>Gebruik van beschermende kleding</li>
            <li>Werkplekken schoonhouden</li>
            <li>Veilig omgaan met patiënten</li>
            <li>Meld ziekteverschijnselen direct</li>
        </ul>

        <!-- Klein formulier onder website -->

        <div class="sign-form">

            <h3>Aftekenen</h3>

            <form action="save.php" method="POST">

                <input type="text" name="name" placeholder="Naam" required>

                <input type="text" name="signature" placeholder="Handtekening" required>

                <button type="submit">Opslaan</button>

            </form>

        </div>

    </div>

</div>

</body>
</html>
