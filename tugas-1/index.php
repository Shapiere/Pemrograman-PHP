<?php
// Tugas 1 - Struktur Kendali & Form Processing
// Form input: Nama, Email, Nilai Ujian

$nama   = '';
$email  = '';
$nilai  = '';
$status = '';

if (isset($_POST['proses'])) {
    $nama  = trim($_POST['nama'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $nilai = trim($_POST['nilai'] ?? '');

    if ($nilai === '' || !is_numeric($nilai)) {
        $status = 'Nilai ujian wajib diisi dengan angka.';
    } elseif ($nilai > 70) {
        $status = 'Lulus';
    } else {
        $status = 'Remedial';
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas 1 - Form Nilai Ujian</title>
</head>
<body>
    <h1>Form Nilai Ujian</h1>

    <form action="" method="post">
        <p>
            <label for="nama">Nama</label><br>
            <input type="text" id="nama" name="nama" value="<?= htmlspecialchars($nama) ?>" required>
        </p>
        <p>
            <label for="email">Email</label><br>
            <input type="email" id="email" name="email" value="<?= htmlspecialchars($email) ?>" required>
        </p>
        <p>
            <label for="nilai">Nilai Ujian</label><br>
            <input type="number" id="nilai" name="nilai" value="<?= htmlspecialchars($nilai) ?>" min="0" max="100" step="any" required>
        </p>
        <p>
            <button type="submit" name="proses" value="1">Proses</button>
        </p>
    </form>

    <?php if ($status !== ''): ?>
        <hr>
        <h2>Hasil</h2>
        <p>Nama: <?= htmlspecialchars($nama) ?></p>
        <p>Email: <?= htmlspecialchars($email) ?></p>
        <p>Nilai Ujian: <?= htmlspecialchars($nilai) ?></p>
        <p>Status: <strong><?= htmlspecialchars($status) ?></strong></p>
    <?php endif; ?>
</body>
</html>
