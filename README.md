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

Contoh Data

INSERT INTO `kota` (`id`, `id_provinsi`, `nama`) VALUES
(1, 1, 'Aceh Besar'),
(2, 1, 'Aceh Barat'),
(3, 1, 'Aceh Selatan'),
(4, 2, 'Medan'),
(5, 2, 'Siantar');

INSERT INTO `provinsi` (`id`, `nama`) VALUES
(1, 'Aceh'),
(2, 'Sumatera Utara');

#

![praktikum3](https://user-images.githubusercontent.com/31401238/98458741-5ea45000-21c6-11eb-9377-5186039b6538.PNG)
