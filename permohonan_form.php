<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Ajukan Permohonan / Keberatan</title>
</head>
<body>
    <h2>Formulir Permohonan Informasi Publik / Keberatan</h2>
    <form action="permohonan_submit.php" method="post">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Jenis Permohonan:</label><br>
        <select name="jenis_permohonan" required>
            <option value="Informasi Publik">Informasi Publik</option>
            <option value="Keberatan">Keberatan</option>
        </select><br><br>

        <label>Isi Permohonan:</label><br>
        <textarea name="isi_permohonan" rows="5" required></textarea><br><br>

        <button type="submit">Kirim</button>
    </form>
</body>
</html>
