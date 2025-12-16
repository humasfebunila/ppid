<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $jenis = $_POST['jenis_permohonan'];
    $isi = $_POST['isi_permohonan'];

    $stmt = $pdo->prepare("INSERT INTO permohonan (nama, email, jenis_permohonan, isi_permohonan) VALUES (?, ?, ?, ?)");
    $stmt->execute([$nama, $email, $jenis, $isi]);

    echo "Permohonan berhasil dikirim. Terima kasih!";
}
?>
