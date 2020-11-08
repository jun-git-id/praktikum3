# Praktikum3

Belajar Select Tabel Mudah, dengan memanfaatkan data Regional di Indonesia

- Provinsi
- Kabupaten
- kecamatan
- dll

1. Sebelum memulai, buat dulu sebuah database.

2. # Buat tabel provinsi

   CREATE TABLE IF NOT EXISTS `provinsi` (
   `id` int(11) NOT NULL AUTO_INCREMENT,
   `nama` varchar(100) NOT NULL,
   PRIMARY KEY (`id`)
   ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
   =====================================

3. # Buat tabel Kabupaten/Kota
   CREATE TABLE IF NOT EXISTS `kota` (
   `id` int(11) NOT NULL AUTO_INCREMENT,
   `id_provinsi` int(11) NOT NULL,
   `nama` varchar(100) NOT NULL,
   PRIMARY KEY (`id`)
   ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
   ======================================
