<?php
require 'config.php';
$info = $pdo->query("SELECT * FROM informasi ORDER BY created_at DESC")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>PPID BPS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>PPID BPS</h1>
        <nav>
            <a href="index.php">Informasi Publik</a> |
            <a href="permohonan_form.php">Ajukan Permohonan / Keberatan</a>
        </nav>
    </header>

    <main>
        <h2>Daftar Informasi Publik</h2>
        <?php foreach($info as $i): ?>
            <div class="info-card">
                <h3><?= htmlspecialchars($i['judul']) ?> (<?= $i['jenis'] ?>)</h3>
                <p><?= nl2br(htmlspecialchars($i['isi'])) ?></p>
                <small>Dipublikasikan: <?= $i['created_at'] ?></small>
            </div>
        <?php endforeach; ?>
    </main>

    <footer>
        <p>&copy; <?= date('Y') ?> BPS</p>
    </footer>
</body>
</html>

<?php include 'header.php'; ?>

<h2>Daftar Informasi Publik</h2>
<?php include 'info_list.php'; ?>

<?php include 'footer.php'; ?>

