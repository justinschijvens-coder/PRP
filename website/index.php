<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orthia Veiligheidsprotocol</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family: Arial, sans-serif;
            background:#eef3f8;
            color:#333;
        }

        header{
            background:#0066cc;
            color:white;
            padding:30px;
            text-align:center;
            box-shadow:0 2px 8px rgba(0,0,0,0.2);
        }

        header h1{
            font-size:38px;
            margin-bottom:10px;
        }

        header p{
            font-size:18px;
        }

        .container{
            width:90%;
            max-width:1100px;
            margin:40px auto;
        }

        .card{
            background:white;
            padding:35px;
            border-radius:15px;
            box-shadow:0 5px 15px rgba(0,0,0,0.1);
        }

        .card h2{
            color:#0066cc;
            margin-bottom:20px;
            font-size:30px;
        }

        .card p{
            margin-bottom:25px;
            line-height:1.8;
            font-size:17px;
        }

        .measures{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
            gap:20px;
            margin-top:20px;
        }

        .measure-box{
            background:#f8fbff;
            border-left:5px solid #0066cc;
            padding:20px;
            border-radius:10px;
            transition:0.3s;
        }

        .measure-box:hover{
            transform:translateY(-5px);
            box-shadow:0 5px 12px rgba(0,0,0,0.1);
        }

        .measure-box h3{
            margin-bottom:10px;
            color:#0066cc;
        }

        .sign-section{
            margin-top:50px;
            padding:30px;
            background:#f9f9f9;
            border-radius:15px;
            border:1px solid #ddd;
        }

        .sign-section h2{
            margin-bottom:20px;
            color:#0066cc;
        }

        form{
            display:flex;
            flex-direction:column;
            gap:15px;
            max-width:400px;
        }

        input{
            padding:12px;
            border:1px solid #ccc;
            border-radius:8px;
            font-size:16px;
        }

        button{
            padding:12px;
            background:#0066cc;
            color:white;
            border:none;
            border-radius:8px;
            font-size:16px;
            cursor:pointer;
            transition:0.3s;
        }

        button:hover{
            background:#004999;
        }

        footer{
            text-align:center;
            padding:20px;
            margin-top:40px;
            background:#0066cc;
            color:white;
        }

    </style>
</head>
<body>

    <header>
        <h1>Orthia Veiligheidsprotocol</h1>
        <p>Gezondheid, veiligheid en verantwoordelijkheid binnen de zorgsector</p>
    </header>

    <div class="container">

        <div class="card">

            <h2>Basismaatregelen</h2>

            <p>
                Hieronder staan de belangrijkste veiligheidsmaatregelen die binnen Orthia worden toegepast.
                Medewerkers dienen deze maatregelen te lezen en digitaal af te tekenen.
            </p>

            <div class="measures">

                <div class="measure-box">
                    <h3>Handhygiëne</h3>
                    <p>Was en desinfecteer regelmatig de handen.</p>
                </div>

                <div class="measure-box">
                    <h3>Beschermende kleding</h3>
                    <p>Draag waar nodig handschoenen en beschermende kleding.</p>
                </div>

                <div class="measure-box">
                    <h3>Werkplek reinigen</h3>
                    <p>Maak oppervlakken en materialen dagelijks schoon.</p>
                </div>

                <div class="measure-box">
                    <h3>Ziek melden</h3>
                    <p>Meld klachten of ziekteverschijnselen direct.</p>
                </div>

            </div>

            <div class="sign-section">

                <h2>Digitaal Aftekenen</h2>

                <form action="save.php" method="POST">

                    <input 
                        type="text" 
                        name="name" 
                        placeholder="Volledige naam" 
                        required
                    >

                    <input 
                        type="text" 
                        name="signature" 
                        placeholder="Digitale handtekening" 
                        required
                    >

                    <button type="submit">
                        Aftekenen
                    </button>

                </form>

            </div>

        </div>

    </div>

    <footer>
        © 2026 Orthia - Veiligheidsportaal
    </footer>

</body>
</html>
