<?php
require 'config.php';

$info = $pdo->query("SELECT * FROM informasi ORDER BY created_at DESC")->fetchAll(PDO::FETCH_ASSOC);

if (!$info) {
    echo "<p>Tidak ada informasi publik saat ini.</p>";
} else {
    foreach($info as $i) {
        echo '<div class="info-card">';
        echo '<h3>' . htmlspecialchars($i['judul']) . ' (' . $i['jenis'] . ')</h3>';
        echo '<p>' . nl2br(htmlspecialchars($i['isi'])) . '</p>';
        echo '<small>Dipublikasikan: ' . $i['created_at'] . '</small>';
        echo '</div>';
    }
}
?>
