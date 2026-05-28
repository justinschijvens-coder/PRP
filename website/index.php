<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hygiëne en Persoonlijke Bescherming</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: Arial, sans-serif;
        }

        body{
            background:#f4f7fb;
            color:#333;
            line-height:1.6;
        }

        header{
            background:linear-gradient(135deg,#0f4c81,#1e88e5);
            color:white;
            padding:60px 20px;
            text-align:center;
        }

        header h1{
            font-size:42px;
            margin-bottom:10px;
        }

        header p{
            font-size:18px;
            opacity:0.9;
        }

        .container{
            width:90%;
            max-width:1200px;
            margin:40px auto;
        }

        .section{
            background:white;
            border-radius:16px;
            padding:30px;
            margin-bottom:30px;
            box-shadow:0 4px 12px rgba(0,0,0,0.08);
            transition:0.3s;
        }

        .section:hover{
            transform:translateY(-5px);
        }

        .section h2{
            color:#0f4c81;
            margin-bottom:20px;
            border-left:6px solid #1e88e5;
            padding-left:12px;
        }

        .item{
            margin-bottom:20px;
        }

        .item h3{
            color:#1565c0;
            margin-bottom:8px;
        }

        .item p{
            padding-left:10px;
        }

        footer{
            text-align:center;
            padding:20px;
            background:#0f4c81;
            color:white;
            margin-top:40px;
        }

        @media(max-width:768px){
            header h1{
                font-size:30px;
            }

            .section{
                padding:20px;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>Hygiëne & Persoonlijke Bescherming</h1>
    <p>Richtlijnen voor veilige zorg en infectiepreventie</p>
</header>

<div class="container">

    <!-- Handhygiëne -->
    <div class="section">
        <h2>Handhygiëne & Desinfectie</h2>

        <div class="item">
            <h3>Handdesinfectie</h3>
            <p>
                Handen worden intensief gedesinfecteerd voor en na elk patiëntcontact.
            </p>
        </div>

        <div class="item">
            <h3>Beschermingsmiddelen</h3>
            <p>
                Het gebruik van medische mondneusmaskers, spatbrillen en schorten 
                is verplicht volgens de actuele landelijke richtlijnen.
            </p>
        </div>

        <div class="item">
            <h3>Kuch- en nieshygiëne</h3>
            <p>
                Hoesten en niezen gebeurt in de elleboog. (WHO, 2019)
            </p>
        </div>
    </div>

    <!-- Quarantaine -->
    <div class="section">
        <h2>Quarantaine</h2>

        <div class="item">
            <h3>Bij klachten thuisblijven</h3>
            <p>
                Zorgmedewerkers met klachten die wijzen op een luchtweginfectie 
                blijven in isolatie tot zij klachtenvrij zijn of volgens het protocol 
                weer veilig kunnen werken.
            </p>
        </div>

        <div class="item">
            <h3>Actieve screening</h3>
            <p>
                Patiënten, cliënten en bezoekers worden bij binnenkomst gescreend op symptomen.
            </p>
        </div>

        <div class="item">
            <h3>Quarantaineprotocol</h3>
            <p>
                Personen die in nauw contact zijn geweest met een besmette patiënt of collega 
                volgen de daarvoor geldende quarantaineprotocollen. (COVID-19, 2019)
            </p>
        </div>
    </div>

    <!-- Patiëntenstromen -->
    <div class="section">
        <h2>Patiëntenstromen</h2>

        <div class="item">
            <h3>Scheiden van stromen</h3>
            <p>
                Verdachte of besmette patiënten worden strikt gescheiden gehouden 
                van niet-besmette patiënten.
            </p>
        </div>

        <div class="item">
            <h3>Afschaling & Opschaling</h3>
            <p>
                Planbare en niet-acute zorg wordt in crisissituaties afgeschaald 
                om capaciteit, bedden en personeel vrij te maken voor acute en 
                pandemie-gerelateerde zorg. (Volksgezondheid, 2019)
            </p>
        </div>
    </div>

    <!-- Bezoekersbeleid -->
    <div class="section">
        <h2>Bezoekersbeleid</h2>

        <div class="item">
            <h3>Toegangsbeperking</h3>
            <p>
                Het aantal bezoekers per patiënt/cliënt wordt geminimaliseerd.
            </p>
        </div>

        <div class="item">
            <h3>Screening van bezoekers</h3>
            <p>
                Bezoekers worden geweigerd wanneer zij symptomen vertonen.
            </p>
        </div>
    </div>

</div>

<footer>
    © 2026 - Hygiëne en Veiligheidsrichtlijnen
</footer>

</body>
</html>
