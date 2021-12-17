-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Des 2021 pada 09.03
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `companyprofile_kki`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_about_h`
--

CREATE TABLE `tb_about_h` (
  `id_about_h` int(11) NOT NULL,
  `kategori_about_h` varchar(30) NOT NULL,
  `nama_about_h` varchar(30) NOT NULL,
  `deskripsi_about_h` varchar(300) NOT NULL,
  `image_about_h` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_about_h`
--

INSERT INTO `tb_about_h` (`id_about_h`, `kategori_about_h`, `nama_about_h`, `deskripsi_about_h`, `image_about_h`, `status`) VALUES
(2, 'Sejarah Singkat Perusahaan', 'PT. Ali Makmur', 'Pada tanggal 6 Maret 2002, PT. Ali Makmur berdiri untuk menjawab keperluan tersebut dengan menyediakan produk Pabrikan dengan mutu tinggi. Untuk memasarkan produk dan jasa luar biasa yang dapat diandalkan, efisisen/efektif, tepat guna, dan tahan lama.', 'upload/about/About.jpg', 'telah disetujui');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_about_konten1`
--

CREATE TABLE `tb_about_konten1` (
  `id_about_konten1` int(11) NOT NULL,
  `judul_about_konten1` varchar(300) NOT NULL,
  `isi_about_konten1` longtext NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_about_konten1`
--

INSERT INTO `tb_about_konten1` (`id_about_konten1`, `judul_about_konten1`, `isi_about_konten1`, `status`) VALUES
(1, 'Apa itu Pengolahan Air Limbah', 'Pengolahan Air Limbah adalah sebuah struktur teknik dan perangkat peralatan beserta perlengkapannya yang dirancang secara khusus untuk memproses atau mengolah cairan sisa proses, sehingga sisa proses tersebut menjadi layak dibuang ke lingkungan. Cairan sisa proses atau limbah bisa berasal dari proses industri, pabrik, pertanian, dan perkotaan yang tidak lain merupakan hasil limbah rumah tangga. Hasil dari pembuangan tersebut dapat membahayakan manusia maupun lingkungan, oleh karena itu diperlukan proses pengolahan lebih lanjut sebelum dibuang ke saluran pembuangan. Menyaring dan membersihkan cairan yang sudah tercemar baik oleh pencemar organik atau kimia industri menjadi tujuan utama IPAL. Oleh sebab itu, IPAL memiliki urgensi untuk dilakukan. IPAL yang dikelola secara benar pun menjanjikan sejumlah manfaat atau kegunaan.', 'telah disetujui'),
(2, 'Apa itu Pengolahan Air Limbah', 'coba', 'menunggu persetujuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_about_konten2`
--

CREATE TABLE `tb_about_konten2` (
  `id_about_konten2` int(11) NOT NULL,
  `judul_about_konten2` varchar(30) NOT NULL,
  `isi_about_konten2` longtext NOT NULL,
  `image_about_konten2` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_about_konten2`
--

INSERT INTO `tb_about_konten2` (`id_about_konten2`, `judul_about_konten2`, `isi_about_konten2`, `image_about_konten2`, `status`) VALUES
(1, 'Sejarah Perusahaan Kami', 'Semakin tingginya kebutuhan terhadap sistem pengolahan air limbah di perkotaan yang padat penduduk menjadi tantangan bagi berbagai pihak untuk memberikan jawaban atas kebutuhan tersebut. Perkembangan penduduk baik oleh karena pertambahan kelahiran maupun pesatnya mobilisasi penduduk, ditambah lagi adanya tuntutan pertambahan unit usaha ekonomi masyarakat baik skala kecil, menengah, maupun besar yang belum dilengkapi dengan unit pengolahan limbah yang memenuhi baku mutu. Hal tersebut merupakan permasalahan tersendiri bagi sistem sanitasi, sehingga limbah yang ditimbulkan dari kegiatan ekonomi masyarakat dengan jenis limbah sangat bervariatif.\r\n\r\n\r\nDalam penerapan teknologi pengolahan air limbah diperlukan kedisilipinan dan komitmen untuk menjaga kualitas bangunan. Adanya kendala waktu pelaksanaan, penerapan teknologi yang tersedia banyak membutuhkan waktu yang biasanya berbulan-bulan. Untuk dan oleh karena berbagai masalah tersebut, maka diperlukan penerapan teknologi tepat guna, memiliki jaminan mutu/kualitas tinggi, keluaran hasil olahan sesuai baku mutu. Pada tanggal 6 Maret 2002, PT. Ali Makmur berdiri untuk menjawab keperluan tersebut dengan menyediakan produk Pabrikan dengan mutu tinggi.\r\n\r\nAtas dasar uraian di atas, PT. Ali Makmur merasa tertantang untuk memasarkan produk dan jasa luar biasa yang dapat diandalkan, efisisen/efektif, tepat guna, dan tahan lama. Produk ini juga mempunyai kemampuan mengolah limbah populasi tinggi dan hasil olahannya dapat memenuhi standar baku mutu yang telah ditetapkan oleh pemerintah. Produk ini didesign oleh para ahli dibidangnya, menggunakan bahan dengan mutu tinggi, tahan lama dan memberikan jaminan after sale, sangat praktis dan menguntungkan berbagai pihak.', 'upload/about/01.jpg', 'telah disetujui'),
(2, 'Sejarah Perusahaan Kami', 'coba', 'upload/about/color.png', 'menunggu persetujuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_about_konten3`
--

CREATE TABLE `tb_about_konten3` (
  `id_about_konten3` int(11) NOT NULL,
  `judul_about_konten3` varchar(30) NOT NULL,
  `isi_about_konten3` longtext NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_about_konten3`
--

INSERT INTO `tb_about_konten3` (`id_about_konten3`, `judul_about_konten3`, `isi_about_konten3`, `status`) VALUES
(1, 'Kami Kreatif dan Mengesankan', 'Berbeda dengan karya arsitek atau pekerjaan sipil yang bersifat statis, bangunan pengolahan air limbah merupakan instalasi yang di dalamnya terdapat proses treatment air limbah yang bahan bakunya bersifat fluktuatif secara kuantitas dan juga berubah-ubah secara kualitas. Selain itu instalasinya terdiri dari bak tampung, peralatan mekanikal dan elektrikal yang bekerjanya secara terpadu dan bersamaan dengan proses biologi untuk mengolah air limbah sehingga diperlukan kemudahan dan kenyamanan untuk pengoperasian, pengontrolan maupun perawatannya.', 'telah disetujui');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`user_id`, `full_name`, `email`, `username`, `password`, `level`) VALUES
(1, 'Admin', 'admindumy@gmail.com', 'admin', 'admin', 'Admin'),
(2, 'Test', 'test@gmail.com', 'test12345', 'test12345', 'Direktur'),
(3, 'Indah', 'indahnandinda3@gmail.com', 'indah', 'indah', 'Direktur'),
(5, 'Test 2', 'coba@yahoo.com', 'test123456', 'test123456', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_contact_info`
--

CREATE TABLE `tb_contact_info` (
  `id_contact_info` int(11) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_contact_info`
--

INSERT INTO `tb_contact_info` (`id_contact_info`, `alamat`, `email`, `telp`, `website`, `status`) VALUES
(1, 'Jl. Kota Bambu Selatan Raya No. 05, Rt 009 Rw 006 Kota Bambu Selatan, Palmerah, Jakarta Barat, 11420', 'alimakmur@yahoo.com', '(021) 5689 734 - 5695 1679', 'www.alimakmur.com', 'telah disetujui');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gallery`
--

CREATE TABLE `tb_gallery` (
  `id_gallery` int(11) NOT NULL,
  `judul_gallery` varchar(30) NOT NULL,
  `deskripsi_gallery` varchar(50) NOT NULL,
  `image_gallery` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_gallery`
--

INSERT INTO `tb_gallery` (`id_gallery`, `judul_gallery`, `deskripsi_gallery`, `image_gallery`, `status`) VALUES
(2, 'Room', 'Plambing', 'upload/gallery/pexels01.jpg', 'menunggu persetujuan'),
(3, 'Room II', 'Corridor', 'upload/gallery/pexels02.jpg', 'menunggu persetujuan'),
(4, 'Room III', 'Meeting Room', 'upload/gallery/pexels33.jpg', 'menunggu persetujuan'),
(5, 'People', 'Working', 'upload/gallery/img1.jpeg', 'telah disetujui'),
(6, 'Peoples', 'Discuss', 'upload/gallery/img3.jpeg', 'menunggu persetujuan'),
(7, 'People', 'Working', 'upload/gallery/img05.jpeg', 'menunggu persetujuan'),
(8, 'People', 'Working', 'upload/gallery/img06.jpeg', 'menunggu persetujuan'),
(9, 'Place', 'House', 'upload/gallery/img4.jpeg', 'menunggu persetujuan'),
(10, 'Room', 'Working', 'upload/gallery/img04.jpeg', 'menunggu persetujuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gallery_h`
--

CREATE TABLE `tb_gallery_h` (
  `id_gallery_h` int(11) NOT NULL,
  `kategori_gallery_h` varchar(30) NOT NULL,
  `nama_gallery_h` varchar(30) NOT NULL,
  `deskripsi_gallery_h` varchar(300) NOT NULL,
  `image_gallery_h` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_gallery_h`
--

INSERT INTO `tb_gallery_h` (`id_gallery_h`, `kategori_gallery_h`, `nama_gallery_h`, `deskripsi_gallery_h`, `image_gallery_h`, `status`) VALUES
(1, 'Dokumentasi Perusahaan', 'PT. Ali Makmur', 'Beberapa foto ruangan atau gedung tempat kami bekerja setiap hari, mendedikasikan hidup kami untuk Anda.', 'upload/gallery/Gallery.jpg', 'telah disetujui');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_home_konten1`
--

CREATE TABLE `tb_home_konten1` (
  `id_home_konten1` int(11) NOT NULL,
  `judul_home_konten1` varchar(100) NOT NULL,
  `isi_home_konten1` longtext NOT NULL,
  `image_home_konten1` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_home_konten1`
--

INSERT INTO `tb_home_konten1` (`id_home_konten1`, `judul_home_konten1`, `isi_home_konten1`, `image_home_konten1`, `status`) VALUES
(2, 'Plambing / Leding', 'Instalasi Saluran untuk Air atau Limbah. Memasang saluran pipa-pipa yang terbuat dari besi atau paralon untuk mengalirkan air atau limbah.', 'upload/home/g1.jpeg', 'menunggu persetujuan'),
(3, 'Penyulingan Air', 'Mengolah kembali air bekas pakai agar dapat difungsikan sebagaimana mestinya seperti air mancur, mencuci tangan, berwudhu, dan lain-lainnya.', 'upload/home/g2.jpeg', 'menunggu persetujuan'),
(4, 'Penjualan Produk', 'Menjual produk yang berkaitan dengan Saluran Air atau Limbah seperti pipa-pipa yang terbuat dari besi atau paralon serta berbagai produk lainnya.', 'upload/home/g3.jpeg', 'menunggu persetujuan'),
(5, 'Aktivitas Penunjang', 'Kegiatan yang berhubungan dengan pengadaan dan penyaluran air bersih. Seperti jasa pencatatan meteran, tagihan dan kegiatan lainnya.', 'upload/home/g4.jpeg', 'telah disetujui');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_message`
--

CREATE TABLE `tb_message` (
  `name_id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` longtext NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_message`
--

INSERT INTO `tb_message` (`name_id`, `nama`, `email`, `subject`, `message`, `tanggal`, `status`) VALUES
(2, 'Tes Coba', 'coba@yahoo.com', 'Coba', 'Hallo Dunia', '2021-12-04 17:25:39', 'telah disetujui'),
(3, 'Nama Saya', 'test@gmail.com', 'Tes Subject 2', 'Halo', '2021-12-03 06:35:20', 'telah disetujui'),
(4, 'Dinda', 'indahnandinda@yahoo.com', 'LP3I', 'helo', '2021-12-06 05:14:59', 'ditolak'),
(6, 'Joko', 'coba@yahoo.com', 'HOT NEWS!!', 'halo dunia', '2021-12-06 05:27:41', 'menunggu persetujuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_news`
--

CREATE TABLE `tb_news` (
  `id_news` int(11) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `judul_news` longtext NOT NULL,
  `deskripsi_news` longtext NOT NULL,
  `image_news` varchar(500) NOT NULL,
  `date_news` datetime NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_news`
--

INSERT INTO `tb_news` (`id_news`, `user_id`, `judul_news`, `deskripsi_news`, `image_news`, `date_news`, `status`) VALUES
(4, 'Admin', 'Proyek IPAL Jakarta Zona 6 Dimulai Rancangannya Tahun 2020 ', 'Selain membangun Instalasi Pengolahan Air Limbah (IPAL) atau Jakarta Sewerage Development Project (JSDP) Zona 1, pemerintah pusat melalui Kementerian PUPR akan membantu Pemerintah Provinsi DKI Jakarta dalam membangun proyek serupa di Zona 6.  Menurut Direktur Pengembangan Penyehatan Lingkungan Permukiman Ditjen Cipta Karya Kementerian PUPR Prasetyo, proyek JSDP Zona 6 masih dalam tahap negosiasi.\r\n\"Harapannya kita mulai tahun depan perencanaannya, tahun 2023 kemungkinan mulai fisiknya,\" ungkap Prasetyo di Jakarta, Selasa (29/10/2019). Untuk pendanaannya, ia menambahkan, pemerintah membuka peluang untuk berutang kepada Pemerintah Jepang melalui Japan International Cooperation Agency (JICA).', 'upload/news/news1.jpg', '2021-11-27 15:16:21', 'menunggu persetujuan'),
(5, 'Admin', 'Bantu Jakarta, Pusat Bangun Dua IPAL Rp 14,47 Tril', 'Pemerintah berencana membangun dua instalasi pengolah air limbah (IPAL) untuk dua zona di Jakarta. IPAL senilai Rp 14,47 triliun ini akan dibangun dengan menggunakan anggaran APBN melalui bantuan Pemerintah Jepang, dan APBD DKI Jakarta. \r\nMenteri Pekerjaan Umum dan Perumahan Rakyat (PUPR) Basuki Hadimuljono mengungkapkan, pembangunan ini merupakan kerja sama antara Direktorat Jenderal Cipta Karya dengan Japan International Cooperation Agency (JICA) dalam membantu Pemprov DKI membangun instalasi pengolahan air limbah domestik dan jaringan perpipaan yang disebut dengan Jakarta Sewerage Development Project (JSDP).\r\nSelain untuk meningkatkan akses sanitasi di DKI Jakarta, pembangunan kedua IPAL ini juga bertujuan untuk melindungi kualitas air dari pencemaran limbah domestik seperti mandi, cuci, kakus dan aktivitas rumah tangga lainnya. Menurut Basuki, masalah sanitasi bukan semata tentang ketersediaan infrastruktur, namun juga sangat bergantung pada pola perilaku hidup sehat dan menjaga kebersihan lingkungan. \"Persepsi masyarakat untuk menjaga kesehatan lingkungan masih belum menjadi kebutuhan. Praktik buang air besar sembarangan (BABS) juga masih terjadi di beberapa tempat,\" kata Basuki dalam keterangan tertulis, Kamis (10/10/2019).\r\nUntuk konstruksi IPAL Zona 1 yang rencananya akan dibangun di kawasan Pluit, nilai investasinya mencapai Rp 9,87 triliun termasuk jaringan perpipaan dengan sistem interseptor. Adapun dari total kebutuhan dana, nantinya Rp 7,7 triliun berasal Kementerian PUPR dan Rp 2,17 triliun dari APBD DKI. IPAL zona 1 akan dibangun di atas lahan seluas 3,9 hektar dengan kapasitas sebesar 240.000 meter kubik per hari untuk melayani 220.000 Sambungan Rumah (SR) atau 989.389 jiwa. Cakupan layanannya meliputi 41 kelurahan yang tersebar di delaapan Kecamatan yakni Kecamatan Menteng, Tanah Abang, Gambir,Sawah Besar, Taman Sari, Tambora, Pademangan, dan Penjaringan. \r\n', 'upload/news/news2.jpg', '2021-11-27 15:15:04', 'telah disetujui'),
(6, 'Admin', 'Jenis Limbah dan Pengolahan Air Limbah', 'Seiring dengan kemajuan ilmu pengetahuan dan tekonologi, serta jumlah penduduk yang bertambah, tentu berpengaruh dengan kebutuhan manusia. Dari kebutuhan dasar seperti makanan dan sandang hingga kebutuhan materi, menjadi hasil proses industri. Hal ini memunculkan kecenderungan meningkatnya kegiatan yang menghasilkan limbah. Dalam buku Studi Karakteristik dan Sistem Pengelolaan Air Limbah Domestik di Kabupaten Magelang (2017) karya Awaludin Setya dkk, limbah yang dihasilkan berupa bahan berbahaya dan beracun (B3) bagi kehidupan manusia dan makhluk hidup lainnya. Di dalam Peraturan Pemerintah Nomor 18 Tahun 1999 tentang Pengelolaan Limbah Bahan Berbahaya dan Beracun, yang di maksud limbah B3 adalah semua bahan, baik padat, cair, atau gas yang berpotensi merusak kesehatan manusia serta lingkungan.<br/><br/>\r\n<b>Jenis Limbah</b><br/>\r\nJenis limbah Biasanya limbah dibuang ke lingkungan sehingga masalah yang timbul menyebar di lingkungan yang luas. Berikut jenis-jenis limbah, yaitu: <br/><br/><b>Limbah pemukiman</b><br/>\r\nLimbah pemukiman berupa limbah padat seperti sampah rumah tangga atau limbah cair yang semuanya mencemari lingkungan perairan.\r\nAir yang tercermar menjadi sumber penyakit menular. Dalam membuang sampah rumah tangga ada baiknya memerhatikan beberapa hal sebagai berikut: Tempat sampah jangan sampai menjadi sarang tikus dan lalat. Tempat sampah jangan sampai menimbulkan bau busuk yang mengganggu kesehatan.<br/><br/>\r\n<b>Limbah industri </b><br/>\r\nKegiatan industri selain untuk meningkatkan kesejahteraan manusia, juga menghasilkan limbah sebagai pencemar lingkungan perairan, tanah, dan udara. Limbah industri dapat berupa limbah cair, padat, atau gas yang umumnya termasuk kategori limbah B3.\r\n<br/><br/>\r\n<b>Limbah pertanian</b><br/>\r\n Limbah pertanian yang paling utama adalah pestisida dan pupuk. Penggunaan pestisida yang berlebihan, mengkontaminasi sayuran atau buah-buahan hasil pertanian yang menyebabkan keracunan pada konsumennya. Pemakaian pupuk yang berlebihan akan merangsang pertumbuhan gulma, sehingga menimbulkan eutrofikisai.', 'upload/news/news3.jpg', '2021-11-27 15:16:00', 'menunggu persetujuan'),
(7, 'Admin', 'Berada di Lokasi Situs Bersejarah, Pembangunan IPA', 'Warga Gampong (desa) Pande, Kecamatan Kutaraja, Banda Aceh memprotes pembangunan instalasi pengolahan air limbah (IPAL) di kawasan tersebut. Selain menimbulkan bau tak sedap, IPAL itu akan menggusur situs bersejarah.  Protes itu disampaikan tetua gampong, arkeolog, dan warga Gampong Pande. Mereka mendatangi lokasi pembanguan IPAL dan mendesak pembangunan IPAL dihentikan.  Sebab, kawasan tersebut merupakan tapak kerajaan Kutaraja abad ke-16 yang kini masih menyisakan banyak peninggalan sejarah. Sedikitnya sembilan batu nisan kuno ditemukan saat pengerukan lahan dilakukan. Kemudian nisan-nisan ini dipindahkan dan disusun berjajar rapi di kawasan pembangunan proyek IPAL. Batu nisan yang ditemukan itu diperkirakan berasal dari lima makam.', 'upload/news/news4.jpg', '2021-11-27 15:15:41', 'menunggu persetujuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_news_h`
--

CREATE TABLE `tb_news_h` (
  `id_news_h` int(11) NOT NULL,
  `kategori_news_h` varchar(30) NOT NULL,
  `nama_news_h` varchar(30) NOT NULL,
  `deskripsi_news_h` varchar(300) NOT NULL,
  `image_news_h` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_news_h`
--

INSERT INTO `tb_news_h` (`id_news_h`, `kategori_news_h`, `nama_news_h`, `deskripsi_news_h`, `image_news_h`, `status`) VALUES
(1, 'Additional Content', 'PT. Ali Makmur', 'Beberapa informasi tambahan yang dapat menambah wawasan baik mengenai limbah, berbagai tips, dan sebagainya.', 'upload/news/news.jpg', 'telah disetujui');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_news_service`
--

CREATE TABLE `tb_news_service` (
  `id_news_service` int(11) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `judul_news_service` varchar(50) NOT NULL,
  `deskripsi_news_service` longtext NOT NULL,
  `image_news_service` varchar(500) NOT NULL,
  `date_news_service` datetime NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_news_service`
--

INSERT INTO `tb_news_service` (`id_news_service`, `user_id`, `judul_news_service`, `deskripsi_news_service`, `image_news_service`, `date_news_service`, `status`) VALUES
(1, 'Admin', 'Pipa Champion', 'Champion juga dikenal sebagai salah satu brand pipa air PVC yang memiliki kualitas terbaik. Harga pipanya juga sangat bervariasi, sesuai tipe dan sizenya. Brand ini memiliki 3 jenis pipa air yang bisa Anda pilih, yakni pipa PVC D, AW, dan C.<br>\r\nPipa PVC C dari Champion saat ini hanya ada satu tipe, yakni tipe PVC C 5/8. Setiap pipa PVC Champion dijual dengan satuan batang.', 'upload/news/best_deals1.jpg', '2021-11-27 15:17:04', 'menunggu persetujuan'),
(2, 'Admin', 'Teknisi terbaik dan sudah berpengalaman', 'Teknikus atau teknisi umumnya adalah seseorang yang menguasai bidang teknologi. Umumnya mereka lebih menguasai teknik dibandingkan layperson rata-rata, atau malah profesional dalam bidang itu. Pemahaman tingkat menengah atas teori dan teknik tingkat tinggi umumnya dikuasai oleh teknisi untuk menjadi ahli dalam hal peralatan tertentu. Ini bisa menjadi bagian proses (manufaktur) yang lebih besar.', 'upload/news/best_deals2.jpeg', '2021-11-27 15:17:20', 'menunggu persetujuan'),
(3, 'Admin', 'Harga Relatif Terjangkau', 'Harga yang relative murah berkualitas dan dengan promo yang menarik', 'upload/news/best_deals3.png', '2021-11-27 15:16:50', 'telah disetujui'),
(4, 'Admin', 'Waktu Prioritas Utama', 'Waktu dalam pengerjaan pembuatan IPAL (Instalasi Pembuatan Air Limbah) cepat dan tepat waktu adalah prioritas bagi perusahaan kami.', 'upload/news/best_deals4.png', '2021-11-27 15:17:33', 'menunggu persetujuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_news_tips`
--

CREATE TABLE `tb_news_tips` (
  `id_news_tips` int(11) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `judul_news_tips` varchar(80) NOT NULL,
  `deskripsi_news_tips` longtext NOT NULL,
  `image_news_tips` varchar(500) NOT NULL,
  `date_news_tips` datetime NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_news_tips`
--

INSERT INTO `tb_news_tips` (`id_news_tips`, `user_id`, `judul_news_tips`, `deskripsi_news_tips`, `image_news_tips`, `date_news_tips`, `status`) VALUES
(1, 'Admin', 'TIPS LIFE HACK : Cara Bikin AC dari Styrofoam, Pipa, dan Kipas Angin', 'Anda dapat membuat air conditioner (AC). Dengan alat ini nantinya kamu akan merasakan ruangan yang dingin tanpa harus membeli AC atau menghabiskan biaya besar untuk tagihan listrik.\r\nUntuk membuat pendingin ruangan ini, kamu hanya memerlukan sebuah balok es, styrofoam, pipa PVC dan kipas angin kecil. Jika kamu memiliki panel surya, maka kamu juga dapat menggunakannya. Balok es yang berada dalam kotak juga akan bertahan selama 5 jam, jika memakai balok besar mungkin bisa bertahan hingga 10 jam. Selamat mencoba.', 'upload/news/lifehack1.jpg', '2021-11-27 15:12:47', 'menunggu persetujuan'),
(2, 'Admin', 'Menggantung produk perawatan', 'Jika Anda ingin produk perawatan tidak memakan tempat, maka Anda dapat menggantungnya.\r\nGunakan batang tirai shower dan pasak untuk menyimpan semua produk yang Anda gunakan.', 'upload/news/lifehack2.jpg', '2021-11-27 15:11:23', 'telah disetujui'),
(3, 'Admin', 'Tirai khusus', 'Anda menghabiskan banyak waktu di kamar mandi dan kadang-kadang tak mudah untuk menjaganya tetap bersih teratur.\r\nJika Anda ingin membuat hidup Anda lebih mudah, mengapa Anda tidak mencoba \'life hack\' kamar mandi berikut ini?\r\nMereka akan membuat kamar mandi Anda menjadi tempat yang nyaman dan mudah untuk dibersihkan. Buat tirai khusus untuk membawa ponsel dan tablet ke kamar mandi.\r\nJika Anda sering harus menggunakan telepon di kamar mandi, Anda dapat membuat tirai shower plastik yang sejuk dan bening seperti ini.', 'upload/news/lifehack3.jpg', '2021-11-27 15:14:24', 'menunggu persetujuan'),
(4, 'Admin', 'Sabun dan spons', 'Jika sabun batang Anda selalu patah-patah dan mencair sebaiknya gunakan spons sebagai alasnya.\r\nSpons akan menyerap air, dan sabun Anda akan tetap kering.', 'upload/news/lifehack4.jpg', '2021-11-27 15:12:27', 'menunggu persetujuan'),
(5, 'Admin', 'Rak Handuk Extra', 'Anda dapat membuat rak handuk tambahan dari pipa peralon.\r\nAnda dapat meletakkan rak ini di belakang pintu Anda untuk menghemat ruang di kamar mandi Anda.', 'upload/news/lifehack5.jpg', '2021-11-27 15:12:03', 'menunggu persetujuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_profile_h`
--

CREATE TABLE `tb_profile_h` (
  `id_profile_h` int(11) NOT NULL,
  `kategori_profile_h` varchar(30) NOT NULL,
  `nama_profile_h` varchar(30) NOT NULL,
  `deskripsi_profile_h` varchar(300) NOT NULL,
  `image_profile_h` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_profile_h`
--

INSERT INTO `tb_profile_h` (`id_profile_h`, `kategori_profile_h`, `nama_profile_h`, `deskripsi_profile_h`, `image_profile_h`, `status`) VALUES
(1, 'Pendiri Perusahaan', 'PT. Ali Makmur', 'PT. Ali Makmur didirikan oleh Ir. Basuki Rahmat yang sudah berpengalaman dalam bidang Pengolahan Air Limbah lebih dari 10 tahun.', 'upload/profile/profile.jpg', 'telah disetujui'),
(2, 'Pendiri Perusahaan', 'PT. Ali Makmur', 'coba aja', 'upload/profile/color.png', 'menunggu persetujuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_profile_visimisi`
--

CREATE TABLE `tb_profile_visimisi` (
  `id_visimisi` int(11) NOT NULL,
  `visi` longtext NOT NULL,
  `misi` longtext NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_profile_visimisi`
--

INSERT INTO `tb_profile_visimisi` (`id_visimisi`, `visi`, `misi`, `status`) VALUES
(1, 'Kami bercita-cita menjadi perusahaan paling inovatif di dalam menangani permasalahan air limbah dan mendaur ulang air limbah menjadi air bersih sehingga lingkungan kita menjadi bersih, hijau, dan terbebas dari limbah.', '• Selalu memberikan yang terbaik dalam setiap proyek\r\n• Menjadi sahabat dan konsultan bagi para pelanggan untuk mewujudkan lingkungan yang hijau dan bersih\r\n• Mengutamakan keunggulan dalam operasional dan kepuasan pelanggan di setiap industri bisnis', 'telah disetujui'),
(3, 'visiku', 'misiku', 'menunggu persetujuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_slider`
--

CREATE TABLE `tb_slider` (
  `id_slider` int(11) NOT NULL,
  `kategori_slider` varchar(30) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL,
  `deskripsi_slider` varchar(300) NOT NULL,
  `image_slider` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_slider`
--

INSERT INTO `tb_slider` (`id_slider`, `kategori_slider`, `nama_kategori`, `deskripsi_slider`, `image_slider`, `status`) VALUES
(2, 'PENGELOLAAN AIR LIMBAH', 'PT. Ali Makmur', 'PT. Ali Makmur bergerak dalam bidang pekerjaan Pengolahan Air Limbah atau lebih dikenal dengan STP (Sewage Treatment Plant) dan WWTP (Waste Water Treatment Plant) serta pekerjaan mekanikal dan elektrikal.', 'upload/slider/img1.jpg', 'menunggu persetujuan'),
(3, 'PENGELOLAAN AIR LIMBAH', 'PT. Ali Makmur', 'PT. Ali Makmur bergerak dalam bidang pekerjaan Pengolahan Air Limbah atau lebih dikenal dengan STP (Sewage Treatment Plant) dan WWTP (Waste Water Treatment Plant) serta pekerjaan mekanikal dan elektrikal.', 'upload/slider/img2.jpg', 'menunggu persetujuan'),
(4, 'PENGELOLAAN AIR LIMBAH', 'PT. Ali Makmur', 'PT. Ali Makmur bergerak dalam bidang pekerjaan Pengolahan Air Limbah atau lebih dikenal dengan STP (Sewage Treatment Plant) dan WWTP (Waste Water Treatment Plant) serta pekerjaan mekanikal dan elektrikal.', 'upload/slider/img3.jpg', 'telah disetujui');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_about_h`
--
ALTER TABLE `tb_about_h`
  ADD PRIMARY KEY (`id_about_h`);

--
-- Indeks untuk tabel `tb_about_konten1`
--
ALTER TABLE `tb_about_konten1`
  ADD PRIMARY KEY (`id_about_konten1`);

--
-- Indeks untuk tabel `tb_about_konten2`
--
ALTER TABLE `tb_about_konten2`
  ADD PRIMARY KEY (`id_about_konten2`);

--
-- Indeks untuk tabel `tb_about_konten3`
--
ALTER TABLE `tb_about_konten3`
  ADD PRIMARY KEY (`id_about_konten3`);

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `tb_contact_info`
--
ALTER TABLE `tb_contact_info`
  ADD PRIMARY KEY (`id_contact_info`);

--
-- Indeks untuk tabel `tb_gallery`
--
ALTER TABLE `tb_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indeks untuk tabel `tb_gallery_h`
--
ALTER TABLE `tb_gallery_h`
  ADD PRIMARY KEY (`id_gallery_h`);

--
-- Indeks untuk tabel `tb_home_konten1`
--
ALTER TABLE `tb_home_konten1`
  ADD PRIMARY KEY (`id_home_konten1`);

--
-- Indeks untuk tabel `tb_message`
--
ALTER TABLE `tb_message`
  ADD PRIMARY KEY (`name_id`);

--
-- Indeks untuk tabel `tb_news`
--
ALTER TABLE `tb_news`
  ADD PRIMARY KEY (`id_news`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `tb_news_h`
--
ALTER TABLE `tb_news_h`
  ADD PRIMARY KEY (`id_news_h`);

--
-- Indeks untuk tabel `tb_news_service`
--
ALTER TABLE `tb_news_service`
  ADD PRIMARY KEY (`id_news_service`);

--
-- Indeks untuk tabel `tb_news_tips`
--
ALTER TABLE `tb_news_tips`
  ADD PRIMARY KEY (`id_news_tips`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `tb_profile_h`
--
ALTER TABLE `tb_profile_h`
  ADD PRIMARY KEY (`id_profile_h`);

--
-- Indeks untuk tabel `tb_profile_visimisi`
--
ALTER TABLE `tb_profile_visimisi`
  ADD PRIMARY KEY (`id_visimisi`);

--
-- Indeks untuk tabel `tb_slider`
--
ALTER TABLE `tb_slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_about_h`
--
ALTER TABLE `tb_about_h`
  MODIFY `id_about_h` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_about_konten1`
--
ALTER TABLE `tb_about_konten1`
  MODIFY `id_about_konten1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_about_konten2`
--
ALTER TABLE `tb_about_konten2`
  MODIFY `id_about_konten2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_about_konten3`
--
ALTER TABLE `tb_about_konten3`
  MODIFY `id_about_konten3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_contact_info`
--
ALTER TABLE `tb_contact_info`
  MODIFY `id_contact_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_gallery`
--
ALTER TABLE `tb_gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_gallery_h`
--
ALTER TABLE `tb_gallery_h`
  MODIFY `id_gallery_h` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_home_konten1`
--
ALTER TABLE `tb_home_konten1`
  MODIFY `id_home_konten1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_message`
--
ALTER TABLE `tb_message`
  MODIFY `name_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_news`
--
ALTER TABLE `tb_news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_news_h`
--
ALTER TABLE `tb_news_h`
  MODIFY `id_news_h` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_news_service`
--
ALTER TABLE `tb_news_service`
  MODIFY `id_news_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_news_tips`
--
ALTER TABLE `tb_news_tips`
  MODIFY `id_news_tips` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_profile_h`
--
ALTER TABLE `tb_profile_h`
  MODIFY `id_profile_h` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_profile_visimisi`
--
ALTER TABLE `tb_profile_visimisi`
  MODIFY `id_visimisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_slider`
--
ALTER TABLE `tb_slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
