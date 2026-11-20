<?php
$sisiA = 3;
$sisiB = 4;
$sisiMiring = sqrt(($sisiA ** 2) + ($sisiB ** 2));
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menghitung Sisi Miring Segitiga</title>
</head>
<body>
    <h1>Menghitung Sisi Miring Segitiga</h1>
    <p>Rumus: c = &radic;(a<sup>2</sup> + b<sup>2</sup>)</p>
    <p>Contoh menggunakan sisi a = <?= $sisiA ?> dan sisi b = <?= $sisiB ?>.</p>

    <h2>Kode Program PHP</h2>
    <pre><code>&lt;?php
$sisiA = 3;
$sisiB = 4;
$sisiMiring = sqrt(($sisiA ** 2) + ($sisiB ** 2));
echo "Sisi miring segitiga adalah: " . $sisiMiring;
?&gt;</code></pre>

    <h2>Hasil Eksekusi</h2>
    <p>Sisi miring segitiga adalah: <?= htmlspecialchars((string) $sisiMiring, ENT_QUOTES, 'UTF-8') ?></p>
</body>
</html>
