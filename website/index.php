<!DOCTYPE html>
<html>
<head>
    <title>Orthia Aftekenen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Orthia - Aftekenen</h1>

<form method="POST" action="save.php">

    <input type="text" name="name" placeholder="Naam" required>

    <h3>Handtekening:</h3>

    <canvas id="signature-pad" width="400" height="200"></canvas>

    <input type="hidden" name="signature" id="signature">

    <br><br>

    <button type="submit">Aftekenen</button>

    <button type="button" onclick="clearPad()">Wissen</button>

</form>

<script>

const canvas = document.getElementById('signature-pad');
const ctx = canvas.getContext('2d');

let drawing = false;

canvas.addEventListener('mousedown', start);
canvas.addEventListener('mouseup', stop);
canvas.addEventListener('mousemove', draw);

function start(e) {
    drawing = true;
    draw(e);
}

function stop() {
    drawing = false;
    ctx.beginPath();

    document.getElementById('signature').value =
        canvas.toDataURL();
}

function draw(e) {

    if (!drawing) return;

    ctx.lineWidth = 2;
    ctx.lineCap = 'round';

    ctx.lineTo(
        e.offsetX,
        e.offsetY
    );

    ctx.stroke();

    ctx.beginPath();

    ctx.moveTo(
        e.offsetX,
        e.offsetY
    );
}

function clearPad() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
}

</script>

</body>
</html>
