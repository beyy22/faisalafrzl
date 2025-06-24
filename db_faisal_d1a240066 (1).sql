-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jun 2025 pada 14.58
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_faisal_d1a240066`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id_about` int(11) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_about`
--

INSERT INTO `tbl_about` (`id_about`, `about`) VALUES
(9, 'Website ini dikembangkan oleh saya, Faisal Mahfuzh Afrizal, mahasiswa Universitas Subang, sebagai bagian dari pembelajaran dan pengembangan dalam bidang teknologi informasi.\r\n\r\nTujuan utama dari website ini adalah sebagai sarana berbagi informasi, pengetahuan, serta dokumentasi artikel dan galeri yang berkaitan dengan dunia teknologi, sistem informasi, dan pengembangan web.\r\n\r\nMelalui website ini, saya berharap dapat memberikan kontribusi positif dalam dunia digital, sekaligus menjadi portofolio pribadi yang mencerminkan proses belajar dan eksplorasi teknologi selama masa kuliah.\r\n\r\nTerima kasih telah mengunjungi website ini.\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id_artikel` int(11) NOT NULL,
  `nama_artikel` varchar(255) NOT NULL,
  `isi_artikel` text NOT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `penulis` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `nama_artikel`, `isi_artikel`, `gambar`, `tanggal`, `penulis`) VALUES
(1, 'Pengertian PHP', 'PHP (Hypertext Preprocessor) adalah bahasa pemrograman sumber terbuka yang banyak digunakan untuk mengembangkan situs web dinamis dan aplikasi web. Awalnya, PHP merupakan singkatan dari Personal Home Page, namun sekarang dikenal sebagai Hypertext Preprocessor. PHP berjalan di sisi server dan sering digunakan bersama dengan HTML, CSS, dan JavaScript untuk membuat halaman web interaktif. ', NULL, NULL, NULL),
(6, 'DASAR PEMROGRAMAN', ' Pemrograman komputer adalah proses membuat program atau aplikasi yang digunakan oleh komputer atau perangkat lunak lainnya untuk melakukan tugas-tugas tertentu. Pemrograman dapat dilakukan dengan menggunakan berbagai bahasa pemrograman, seperti Java, Python, C++, dan banyak lagi. Dalam artikel ini, kita akan membahas pemahaman dasar pemrograman komputer.\r\n\r\nKonsep Dasar Pemrograman Komputer Pemrograman komputer melibatkan menulis kode atau instruksi yang memberi tahu komputer apa yang harus dilakukan. Kode tersebut terdiri dari serangkaian instruksi yang dapat dijalankan oleh komputer. Pemrograman komputer melibatkan pemahaman konsep seperti variabel, pengulangan, percabangan, fungsi, dan objek.\r\nVariabel Variabel adalah tempat untuk menyimpan data dalam program. Variabel dapat berisi berbagai jenis data, seperti angka, teks, atau nilai boolean (benar atau salah). Variabel dapat digunakan untuk memudahkan pemrograman dan membuat kode menjadi lebih mudah dibaca.\r\nPengulangan Pengulangan adalah konsep pemrograman yang memungkinkan untuk menjalankan satu set instruksi beberapa kali. Dalam pengulangan, Anda dapat mengulangi serangkaian instruksi selama kondisi tertentu terpenuhi.\r\nPercabangan Percabangan adalah konsep pemrograman yang memungkinkan program untuk melakukan tindakan tertentu berdasarkan kondisi tertentu. Dalam percabangan, program akan mengevaluasi suatu kondisi dan melakukan tindakan berbeda tergantung pada apakah kondisi itu benar atau salah.\r\nFungsi Fungsi adalah bagian dari program yang memungkinkan Anda menulis kode sekali dan menggunakannya berulang kali. Fungsi dapat mengambil argumen atau masukan dan menghasilkan nilai keluaran.\r\nObjek Objek adalah konsep penting dalam pemrograman berorientasi objek (OOP). Objek adalah representasi dari sesuatu dalam dunia nyata. Objek memiliki sifat atau atribut dan dapat melakukan tindakan atau metode.\r\nBahasa Pemrograman Bahasa pemrograman adalah aturan yang digunakan untuk menulis program. Ada banyak bahasa pemrograman yang berbeda, dan setiap bahasa memiliki sintaks dan aturan yang berbeda. Beberapa bahasa pemrograman yang populer adalah Java, Python, C++, JavaScript, dan Ruby.\r\nIDE IDE (Integrated Development Environment) adalah aplikasi yang digunakan untuk menulis, menguji, dan mengembangkan program. IDE dapat membantu pemrogram dalam menulis kode dan menemukan kesalahan atau bug dalam program.\r\nDebugging Debugging adalah proses mengidentifikasi dan memperbaiki kesalahan atau bug dalam program. Pemrogram harus dapat memahami pesan kesalahan dan menemukan kesalahan dalam kode mereka.\r\nTeknik Pemrograman Teknik pemrograman mencakup pengorganisasian kode, menulis kode yang mudah dibaca, dan memecah kode menjadi bagian yang lebih kecil untuk memudahkan pengembangan dan pemeliharaan program.', NULL, NULL, NULL),
(7, 'Menyambut Era Digital: Bagaimana Teknologi Mengubah Dunia', 'Kehidupan manusia telah berubah secara drastis sejak teknologi digital mulai mendominasi berbagai aspek keseharian kita. Dulu, komunikasi jarak jauh membutuhkan surat yang dikirim berhari-hari. Kini, hanya dalam hitungan detik, kita bisa terhubung dengan siapa saja di berbagai belahan dunia melalui pesan instan atau panggilan video.\r\n\r\nTransformasi ini tidak hanya terjadi di bidang komunikasi, tetapi juga merambah dunia pendidikan, bisnis, kesehatan, hingga pemerintahan. Di sektor pendidikan, platform pembelajaran online seperti Zoom, Google Classroom, dan beragam aplikasi edukasi telah membuka peluang belajar tanpa batas ruang dan waktu. Sekolah dan universitas tidak lagi terbatas oleh dinding kelas—belajar bisa dilakukan dari mana saja, kapan saja.\r\n\r\nSementara itu, dunia bisnis mengalami revolusi besar melalui kehadiran e-commerce. UMKM yang dulunya hanya melayani pembeli lokal kini bisa menjual produknya ke seluruh Indonesia, bahkan dunia. Platform seperti Tokopedia dan Shopee menjadi jembatan antara penjual dan pembeli, memudahkan transaksi hanya lewat genggaman tangan.\r\n\r\nDi bidang kesehatan, digitalisasi menghadirkan sistem yang lebih efisien. Telemedicine memungkinkan konsultasi dokter dilakukan secara daring, dan rekam medis elektronik mempercepat proses diagnosis dan perawatan. Alat-alat kesehatan modern pun semakin pintar—jam tangan kini bisa memantau detak jantung dan kualitas tidur penggunanya.\r\n\r\nNamun, semua kemajuan ini datang bersama tantangan baru. Isu privasi dan keamanan data semakin sering menjadi sorotan. Banyak orang tanpa sadar memberikan informasi pribadinya secara bebas di internet, membuka peluang bagi penyalahgunaan data. Selain itu, tidak semua masyarakat memiliki akses yang sama terhadap teknologi, menciptakan kesenjangan digital yang harus segera diatasi.\r\n\r\nTeknologi juga memicu kekhawatiran terhadap hilangnya lapangan pekerjaan karena otomatisasi. Mesin dan program komputer semakin cerdas, mengambil alih tugas-tugas rutin yang dulu dilakukan manusia. Maka dari itu, penting bagi kita untuk terus meningkatkan keterampilan agar tidak tergantikan oleh mesin.\r\n\r\nEra digital bukan sekadar tren sementara—ia adalah masa depan yang sedang berlangsung hari ini. Dengan memahami potensi dan risiko yang ada, kita bisa menjadikan teknologi sebagai alat untuk membangun kehidupan yang lebih baik, bukan sebaliknya. Inilah saatnya kita beradaptasi, belajar, dan tumbuh bersama dunia yang terus bergerak ke arah digital.', NULL, NULL, NULL),
(11, 'Pengertian Basis Data', 'Basis data (database) adalah kumpulan data yang saling berhubungan yang disimpan secara sistematis dan dapat diakses serta dikelola menggunakan sistem komputer. Menurut Connolly dan Begg (2015), basis data merupakan representasi dari suatu bagian dunia nyata (miniworld) yang logis dan terstruktur, di mana data dapat digunakan untuk mendukung pengambilan keputusan, operasional, maupun administratif. Dalam konteks lembaga keuangan seperti Pegadaian Syariah, basis data digunakan untuk menyimpan informasi penting seperti data nasabah, barang gadai, serta proses perlelangan.', NULL, NULL, NULL),
(12, 'Mengenal MySQL, Definisi, Fungsi, hingga Cara Kerjanya ', 'MySQL yang dibaca “MY-ES-KYOO-EL\" merupakan sistem manajemen database yang bersifat open-source yang menggunakan perintah dasar atau bahasa pemrograman yang berupa structured query language (SQL) yang cukup populer di dunia teknologi. MySQL berguna sebagai database.\r\nSaat ini, relational database management system (RDBMS) MySQL telah dipakai lebih dari 66 juta pengguna di seluruh belahan dunia.\r\nAdapun MySQL memiliki dua bentuk lisensi, yaitu Free Software dan Shareware atau perangkat lunak bermilik yang penggunaannya terbatas. Jadi, MySQL adalah database server gratis dengan lisensi GNU General Public License (GPL) yang bisa dipakai untuk keperluan pribadi atau komersil tanpa harus membayar lisensi yang ada.\r\nDalam istilah pemrograman, SQL sendiri menjadi bahasa yang dipakai di dalam pengambilan data pada relational database atau database yang terstruktur. Dengan kata lain, MySQL merupakan database management system yang menggunakan bahasa SQL sebagai bahasa penghubung antara perangkat lunak aplikasi dengan database server.\r\n\r\nFungsi, kelebihan, dan kekurangan MySQL\r\nFungsi utama MySQL adalah mengelola informasi di database pada sisi server dengan bahasa pemrograman SQL. Saat ini, hampir seluruh pihak hosting menyediakan MySQL untuk pengembangan web.\r\nSelain itu, MySQL menjadi salah satu database terpopuler setelah Oracle Database. Hal ini tak lain karena MySQL memiliki sejumlah kelebihan. Berikut beberapa kelebihannya:\r\n1. Open-source\r\nSoftware ini menjadi sistem manajemen database yang bersifat open-source atau dengan kata lain, gratis digunakan oleh siapa saja. Walau demikian, MySQL memiliki performa yang tidak dapat diragukan lagi.\r\nNah, bila selama menggunakan MySQL menemukan kendala, pengguna bisa dengan mudah menemukan review atau komunitas yang bisa dijadikan acuan maupun wadah diskusi MySQL untuk membantu.\r\n2. Keamanan terjamin\r\nWalaupun open-source, MySQL menjadi DBMS dengan sistem keamanan yang baik. Sebab, MySQL memiliki lebih dari satu lapisan keamanan, seperti berbasis host maupun enkripsi kata sandi yang membuat data-data pengguna MySQL dapat selalu terlindungi.\r\n3. Multi-user\r\nMySQL mendukung multi-user atau bisa dipakai secara bersamaan oleh beberapa user tanpa perlu khawatir project yang dikerjakan secara bersamaan akan mengalami crash atau tidak tersimpan.\r\n4. Mendukung bahasa pemrograman lain\r\nSelain bahasa pemrograman SQL, MySQL juga mendukung bahasa pemrograman lain. Dengan begitu, proses pengembangan yang dilakukan oleh pengguna dan memerlukan berbagai macam bahasa pemrograman pun bisa berjalan lebih efektif. Adapun bahasa-bahasa pemrograman yang bisa menggunakan MySQL antara lain PHP, JavaScript, dan lain sebagainya.\r\n5. Tidak membutuhkan RAM yang besar\r\nMySQL menjadi database management system yang tidak membutuhkan RAM dengan ukuran yang besar dan bisa dipakai pada spesifikasi hardware yang rendah. Bahkan, disebut-sebut perangkat dengan RAM yang kecil sekali pun mampu menjalankan MySQL dengan lancar.\r\n6. Mendukung berbagai macam data\r\nSelanjutnya, MySQL juga mendukung berbagai macam data, mulai dari integer, timestamp, text, date, character, float, dan lain-lain sehingga sangat membantu pengelolaan database server pada web atau aplikasi yang dikembangkan.\r\n7. Struktur tabel fleksibel\r\nKelebihan lain yang dimiliki MySQL adalah memiliki struktur tabel yang mudah dipakai dan fleksibel. Seperti, saat MySQL memproses Alter Table.\r\n8. Standar industri\r\nSaat ini, ada banyak cluster server yang telah men-support MySQL. Dengan performa MySQL, software database ini akan membantu pengguna dalam menyimpan berbagai data dalam jumlah yang banyak maupun ketika melakukan kegiatan bisnis lainnya.\r\n\r\nKekurangan MySQL\r\nLayaknya software pada umumnya, MySQL juga memiliki beberapa kekurangan, seperti:\r\n1. Kurang cocok untuk aplikasi game dan mobile\r\nKebanyakan pengembang game maupun aplikasi mobile tidak menggunakan MySQL karena database ini masih kurang bagus untuk mengembangkan sistem aplikasi tersebut. Untuk itu, bagi pengembang aplikasi game dan perangkat mobile, ada baiknya bila mempertimbangkan MySQL lagi.\r\n2. Masih sulit untuk mengelola database dengan ukuran yang besar\r\nMySQL dikembangkan supaya ramah dengan perangkat yang memiliki spesifikasi rendah. Inilah mengapa MySQL tidak memiliki fitur yang lengkap layaknya aplikasi lainnya. Jadi, ada baiknya untuk menggunakan database manajemen sistem selain MySQL saat ingin mengembangkan sistem atau aplikasi perusahaan yang memiliki database yang cukup besar.\r\n3. Kurang bagus dari segi technical support\r\nWalaupun MySQL memiliki banyak komunitas dan dokumentasi yang telah tersebar luas di internet, tetapi tidak tersedia technical support MySQL untuk yang community. Sementara, pengguna Enterprise tersedia technical support dan berbayar.\r\n\r\nCara kerja MySQL\r\nAdapun cara kerja MySQL dimulai dari perangkat yang ingin digunakan harus sudah terhubung ke server. Satu atau beberapa perangkat yang terhubung ke server dapat membuat request dari graphical user interface (GUI) di layar dan server pun akan membuat output yang diinginkan. Maka, proses yang akan dijalankan atau terjadi pada MySQL kurang lebih seperti ini:\r\nMySQL membuat database yang dapat memodifikasi, menyimpan data, dan menentukan keterkaitan tabel-tabel yang ada di dalam software.\r\nKemudian, perangkat pengguna membuat request dengan perintah spesifik menggunakan bahasa SQL.\r\nTerakhir, server akan menerima dan menjalankan perintah. Kemudian, memberikan atau menampilkan informasi yang diminta pengguna pada layarnya.\r\nSemakin ringan dan user friendly suatu GUI, maka semakin cepat dan mudah aktivitas manajemen data yang dimilikinya. Adapun beberapa MySQL GUI terpopuler meliputi MySQL WorkBench, SequelPro, DBVisualizer, Navicat DB Admin Tool, dan tool gratis HeidiSQL. Namun, untuk manajemen database berbasis web yang umum digunakan adalah phpMyAdmin.\r\nSetting MySQL pada Plesk dan cPanel\r\nBila menggunakan control panel Plesk maupun cPanel, pengguna bisa dengan mudah setting database MySQL. Pada Plesk, pengguna dapat masuk ke menu Databases, lalu klik Add Database lalu mengisi kolom yang tersedia.\r\nKemudian klik menu phpMyAdmin, klik tab menu Import lalu Choose File untuk memilih file .sql database yang akan diupload, dan tunggu prosesnya sampai selesai. Sementara pada cPanel, klik menu MySQL Databases, masukkan nama database, buat username, dan tambahkan user ke database.\r\n\r\nItulah cara setting database MySQL pada Plesk dan cPanel. Pada layanan hosting dari Biznet Gio, yaitu NEO Web Hosting mulai dari Rp20.000,-/bulan, pengguna akan langsung mendapatkan cPanel. Sedangkan, NEO Dedicated Hosting yang dibanderol dengan harga Rp182.000,-/bulan, sudah termasuk sumber daya komputasi yang dedicated, seperti alokasi RAM, CPU, dan Plesk.\r\n\r\nKedua control panel yang terkenal user friendly tersebut bisa memudahkan kamu dalam mengatur dan menjalankan hosting dengan mudah. Walaupun dengan harga terjangkau, pengguna NEO Web Hosting dan NEO Dedicated Hosting akan mendapatkan fasilitas yang menarik, seperti WordPress Toolkit, bandwidth unlimited up to 10 Gbps, storage SSD, hingga gratis SSL. Namun, untuk kebutuhan melayani traffic yang lebih besar dan butuh performa yang terjamin, pastikan untuk memilih resource yang dedicated, yaitu NEO Dedicated Hosting.', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id_gallery` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id_gallery`, `judul`, `foto`) VALUES
(8, 'Portfolio Pertama Saya', 'Screenshot 2025-02-14 175657.png'),
(10, 'MAKRAB 2024-2025', 'IMG_2141.jpg'),
(11, 'MABIM 2024-2025', 'IMG-20240913-WA0027.jpg'),
(12, 'BATIK DAY', 'IMG-20241002-WA0119.jpg'),
(13, 'Cosplay dlu ah', 'WhatsApp Image 2025-06-24 at 15.10.38_de221580.jpg'),
(14, 'JUARA ML!!', 'IMG-20241130-WA0032.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `password`) VALUES
('faisal', 'faisal'),
('admin', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indeks untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
