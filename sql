-- Tabel informasi publik
CREATE TABLE informasi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    jenis ENUM('Berkala','Setiap Saat','Serta-merta','Lainnya') NOT NULL,
    judul VARCHAR(255) NOT NULL,
    isi TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Tabel permohonan informasi
CREATE TABLE permohonan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    jenis_permohonan ENUM('Informasi Publik','Keberatan') NOT NULL,
    isi_permohonan TEXT NOT NULL,
    status ENUM('Pending','Diproses','Selesai') DEFAULT 'Pending',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);
