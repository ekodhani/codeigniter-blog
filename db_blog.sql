-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Feb 2020 pada 10.49
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_blog`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_handphone` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_created` date NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `alamat`, `no_handphone`, `email`, `password`, `date_created`, `gambar`) VALUES
(1, 'Admin', 'lu tau lah rumah gua mah', '089521649714', 'ekonurramadhani@gmail.com', '202cb962ac59075b964b07152d234b70', '2020-01-31', 'admin.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `thumbnail` varchar(200) NOT NULL,
  `judul_blog` varchar(100) NOT NULL,
  `konten_isi` text NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id_blog`, `thumbnail`, `judul_blog`, `konten_isi`, `date_created`) VALUES
(1, '149.jpg', 'Cara Mudah & Keren untuk Mendesain', '<p>Membuat Logo Brand untuk Bisnis Itu Penting. Kenapa?\r\nLogo itu mencerminkan bisnis Anda dan merupakan sebuah tampilan secara visual yang mewakili perusahaan Anda.</p>\r\n\r\n<p>Bisa juga digunakan untuk mempromosikan brand Anda baik secara online maupun offline.</p>\r\n\r\n<p>Membuat logo brand untuk bisnis penting karena akan membuat sebuah bisnis terlihat stand out ketika waktunya masuk ke dalam kompetisi.</p>\r\n\r\n<p>DesignBuddy menganalisis logo top brand dunia dan apa saja kesamaan dari brand-brand tersebut.</p>\r\n\r\n<p>Berikut ini ada beberapa poin dari research yang bisa Anda pertimbangkan ketika akan membuat logo dengan beberapa tools design yang akan kita bahas setelah ini :</p>\r\n\r\n<p>95% top brand dunia menggunakan 1 atau 2 warna.\r\n41% dari brand menggunakan tipe stylized sebagai logo mereka.\r\n93% dibuat simple. Jadi ketika digunakan dalam ukuran kecil pun orang-orang tetap akan tahu.\r\nKalau Anda ingin mencari tahu warna apa yang cocok untuk logo brand Anda, baca saja artikel tentang pentingnya memahami psikologi warna dalam marketing dan branding.</p>\r\n\r\n<p>Ada beberapa aturan design yang perlu diperhatikan sebelum Anda mulai membuat logo.</p>\r\n\r\n<p>Berikut ini ada tips yang diambil dari Creative Bloq untuk Anda :</p>\r\n\r\n<p>Sebuah logo harus simple. Design logo yang simple akan lebih fleksibel dan efektif.\r\nSebuah logo harus memorable. Ketika sebuah logo itu simple, ini akan membantu orang untuk mengingatnya.\r\nSebuah logo harus abadi. Logo yang efektif biasanya akan bertahan ketika diuji oleh waktu. Entah 10, 20 tahun ke depan, logo itu tetap ada dan diingat.\r\nSebuah logo harus felksibel. Harus bisa dipakai dan bekerja di berbagai media dan aplikasi.\r\nSebuah logo harus sesuai. Bagaimana Anda memposisikan logo harus sesuai untuk tujuan.\r\nKesalahan umum yang perlu dihindari ketika Anda membuat logo brand</p>\r\n\r\n<p>Untuk membuat sebuah logo yang bagus, Anda juga perlu menghindari kesalahan umum yang sering terjadi ketika mendesign logo :</p>\r\n\r\n<p>Hindari untuk menggunakan clip art yang tidak menarik.\r\nJangan membuat logo Anda terlalu rumit.\r\nPastikan kalau logo tetap terlihat bagus dalam warna hitam dan putih.</p>', '2020-02-18'),
(4, 'Thumb2.jpg', 'NASA Mendeteksi Sebuah Komet Mendekati Bumi', '<p>Jakarta, CNN Indonesia -- Badan Antariksa Amerika Serikat (<strong><a href=\"https://www.cnnindonesia.com/tag/nasa\">NASA</a></strong>) mendeteksi sebuah<strong><a href=\"https://www.cnnindonesia.com/tag/komet\">&nbsp;komet</a></strong>&nbsp;yang ditemukan tengah mendekati&nbsp;<strong><a href=\"https://www.cnnindonesia.com/tag/bumi\">Bumi</a></strong>. Objek luar angkasa ini ditemukan pada 30 Agustus lalu oleh astronom Gennady Borisov di observatorium MARGO Nauchnij, Crimea.<br />\r\n<br />\r\nKomet C/2019 Q4 atau Borisov itu diketahui masih dalam perjalanan menuju Matahari namun akan mendekati Bumi sekitar 190 juta mil atau sekitar 300 juta kilometer. Komet akan mencapai titik terdekat Matahari pada 8 Desember 2019 sekitar 420 juta kilometer.<br />\r\n<br />\r\nKendati demikian, komet Borisov bukan satu-satunya komet yang ditemukan. Pada Oktober 2017, para astronom di laboratorium Jet Propulsion NASA berhasil mendeteksi komet &#39;Oumuamua&#39;.<br />\r\n<br />\r\n<br />\r\n&quot;Kecepatan komet saat ini tinggi sekitar 150.000 kilometer per jam. Kecepatan komet menunjukkan bahwa benda itu kemungkinan berasal dari luar tata surya kita,&quot; kata Astronom Davide Farnocchia dikutip laman resmi Laboratorium JPL NASA.<br />\r\n&nbsp;</p>\r\n\r\n<p>Menurut Farnocchia, komet C/2019 Q4 memiliki tampilan yang agak &#39;kabur&#39;. Hal ini menunjukkan bahwa objek antariksa tersebut memiliki pusat es yang menghasilkan awan debu dan partikel di sekitarnya.<br />\r\n<br />\r\nKomet dapat dilihat dengan teleskop ukuran sedang pada Desember 2019 karena mengalami kecerahan yang cukup kuat hingga April 2020.<br />\r\n<br />\r\n&quot;Setelah itu, komet hanya akan diamati dengan teleskop profesional yang lebih besar hingga Oktober 2020,&quot; pungkas Farnocchia.</p>\r\n\r\n<p>Menyoal komet Oumuamua, seperti dikutip&nbsp;<em>National Geographic</em>, komet ini meluncur dengan kecepatan 98.000 mil per jam pada 2017 silam. Namun, usai mengelilingi matahari awal tahun 2018, Oumuamua malah berputar lebih cepat.<br />\r\n<br />\r\nBerdasarkan sejumlah penelitian, ventilasi pada permukaan objek kemungkinan melepaskan semburan gas yang memberinya dorongan kuat.</p>\r\n', '2020-02-19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `nama_contact` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_handphone` varchar(25) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id_contact`, `nama_contact`, `email`, `no_handphone`, `alamat`) VALUES
(1, 'Nexide.id', 'ekonurramadhani@gmail.com', '089521649714', 'Jl.Kh.Hasyim Ashari Gg.Kramat Rt 007 Rw 002 No.41 Kecamatan Pinang Kelurahan Neroktog Kota Tangerang kode pos 15145');

-- --------------------------------------------------------

--
-- Struktur dari tabel `merch`
--

CREATE TABLE `merch` (
  `id_merch` int(11) NOT NULL,
  `nama_merch` varchar(50) NOT NULL,
  `qty` int(2) NOT NULL,
  `size` varchar(30) NOT NULL,
  `harga` double NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `merch`
--

INSERT INTO `merch` (`id_merch`, `nama_merch`, `qty`, `size`, `harga`, `gambar`, `date_created`) VALUES
(2, 'Infinite', 12, 'M,L,XL', 99000, 'infinite-shirt-merch.jpg', '2020-02-20'),
(3, 'looping', 12, 'M,L,XL', 150000, 'looping-shirt-merch.jpg', '2020-02-20'),
(4, 'In Road', 12, 'M,L,XL', 120000, 'road-shirt-merch.jpg', '2020-02-20'),
(5, 'Black Hat', 12, 'One Size', 75000, 'blackhat.jpg', '2020-02-20'),
(6, 'Badie Bag', 12, 'One Size', 50000, 'baddie-bag-merch.jpg', '2020-02-20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(30) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `gambar`, `date_created`) VALUES
(2, 'Bad', 'design.jpg', '2020-02-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testimoni` int(11) NOT NULL,
  `nama_testimoni` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indeks untuk tabel `merch`
--
ALTER TABLE `merch`
  ADD PRIMARY KEY (`id_merch`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `merch`
--
ALTER TABLE `merch`
  MODIFY `id_merch` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
