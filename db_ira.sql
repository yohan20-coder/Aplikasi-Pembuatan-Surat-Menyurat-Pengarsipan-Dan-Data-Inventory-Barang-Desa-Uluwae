-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Agu 2021 pada 18.11
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ira`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `arske`
--

CREATE TABLE `arske` (
  `id` int(5) NOT NULL,
  `nosurat` varchar(25) NOT NULL,
  `noklasi` varchar(25) NOT NULL,
  `ringkasan` text NOT NULL,
  `pengelolah` varchar(25) NOT NULL,
  `tglsurat` date NOT NULL,
  `kepada` varchar(25) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `arske`
--

INSERT INTO `arske` (`id`, `nosurat`, `noklasi`, `ringkasan`, `pengelolah`, `tglsurat`, `kepada`, `keterangan`) VALUES
(16, '465.3/ULW/220/06/2021', '220', 'Melakukan penelitian ', 'Kaur umum', '2021-05-07', 'Fakultas Teknologi Inform', 'telah selesai penelitian'),
(17, '47/115/F5/71/N/5/2021', '220', 'penelitian ', 'Kaur umum', '2021-07-30', 'Fakultas Teknologi Inform', 'selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsma`
--

CREATE TABLE `arsma` (
  `id` int(11) NOT NULL,
  `nosurat` varchar(50) NOT NULL,
  `noklasi` varchar(50) NOT NULL,
  `tglsurat` date NOT NULL,
  `tglteri` date NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `disposisi` text NOT NULL,
  `instansi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `arsma`
--

INSERT INTO `arsma` (`id`, `nosurat`, `noklasi`, `tglsurat`, `tglteri`, `perihal`, `isi`, `disposisi`, `instansi`) VALUES
(61, '47/115/F5/71/N/5/2022', '234', '2021-07-16', '2021-07-30', 'Mohon Ijin Mengadakan Penelitian Skripsi', 'PENELITIAN', 'DESA ULUWAE', 'Universitas Flores '),
(62, '47/115/F5/71/N/5/2021', '115', '2021-07-10', '2021-07-24', 'Mohon IjinMengadakan Penelitian Skripsi', 'penelitian ', 'Desa Uluwae', 'Universitas Flores Fakult');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kartukel`
--

CREATE TABLE `kartukel` (
  `id` int(11) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `nama_kk` varchar(25) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `kelurahan` varchar(25) NOT NULL,
  `rt/rw` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kartukel`
--

INSERT INTO `kartukel` (`id`, `no_kk`, `nama_kk`, `alamat`, `kelurahan`, `rt/rw`) VALUES
(9, '5309061002052476', 'Markus Rendo', 'Rewupoko', 'Uluwae', '07'),
(10, '5309061002052555', 'Wihelmus Pa\'i', 'Manatena', 'Uluwae', '03'),
(12, '5309061010020525', 'Wenslaus Rendu', 'Ngusu', 'Uluwae', '05'),
(13, '5309151804120001', 'Wenslaus Rendu', 'Ngusu', 'Uluwae', '05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `golongan` varchar(20) NOT NULL,
  `jabatan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `nip`, `jk`, `golongan`, `jabatan`) VALUES
(11, 'Fabianus Rue Rani', '78906', 'Laki-Laki', '1', 'Kepala Desa'),
(12, 'Fabianus Rue Rani', '65432', 'Laki-Laki', '1', 'Kepala Desa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `tempatla` varchar(25) NOT NULL,
  `tglah` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `pend` varchar(25) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `rtw` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`id`, `nama`, `no_kk`, `nik`, `jk`, `tempatla`, `tglah`, `agama`, `pend`, `pekerjaan`, `rtw`) VALUES
(18, 'Martinus Nangga', '5309061010020525', '5309151303030003', 'Laki-Laki', 'Ngusu', '2003-03-13', 'Katolik', 'SMP', 'Pelajar', '001/002'),
(19, 'Febrianus Djawa', '5309061010020525', '5309150202080002', 'Laki-Laki', 'Ngusu', '2008-02-02', 'Katolik', 'SD', 'Pelajar', '002/002'),
(20, 'Andika', '5309061002052476', '24242411', 'Perempuan', 'ddd', '2021-08-11', 'Kristen/Protestan', 'SMP', 'Petani', '001/003');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id` int(11) NOT NULL,
  `no_barang` varchar(40) NOT NULL,
  `nma_barang` varchar(25) NOT NULL,
  `jumlah` varchar(30) NOT NULL,
  `kondisi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id`, `no_barang`, `nma_barang`, `jumlah`, `kondisi`) VALUES
(5, '003133', 'meja33', '1033', 'baik33'),
(6, '08111', 'Meja', '11', 'Lama'),
(7, '0811122', 'Mejaa', '111', 'Lama1'),
(8, '081', 'meja', '30', 'baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_domisili`
--

CREATE TABLE `tb_domisili` (
  `id` int(11) NOT NULL,
  `nosurat` varchar(40) NOT NULL,
  `nm_pej` varchar(40) NOT NULL,
  `jabatan` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `nm_pen` varchar(40) NOT NULL,
  `tempat_lah` varchar(25) NOT NULL,
  `tg_lah` date NOT NULL,
  `jk` varchar(20) NOT NULL,
  `alamat_pen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_domisilii`
--

CREATE TABLE `tb_domisilii` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(60) NOT NULL,
  `nma_pej` varchar(25) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `nma_pen` varchar(25) NOT NULL,
  `umur` varchar(20) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `usaha` varchar(50) NOT NULL,
  `tanggal` varchar(25) NOT NULL,
  `rt` varchar(12) NOT NULL,
  `alamat_pen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_domisilii`
--

INSERT INTO `tb_domisilii` (`id`, `no_surat`, `nma_pej`, `jabatan`, `alamat`, `nma_pen`, `umur`, `ttl`, `usaha`, `tanggal`, `rt`, `alamat_pen`) VALUES
(6, '47/115/F5/71/N/5/2021', 'Wilibrodus Ndolu', 'Kaur umum', 'Jl Nenas', 'Martina Meo', '12', 'Surabaya, 20 Oktober 1997', '', '2021-07-24', '04', 'Jl Durian'),
(7, '47/115/F5/71/N/5/2022', 'Fabianus Rue Rani', 'Kepala Desa', 'Jl Nenas', 'Febrianus Djawa', '12', 'Surabaya, 20 Oktober 1997', '', '2021-07-29', 'Katolik', 'Jalan Durian'),
(8, '47/115/F5/71/N/5/2021', 'Fabianus Rue Rani', 'Kepala Desa', 'Jl Nenas', 'Martinus Nangga', '12', 'Surabaya, 20 Oktober 1997', '', '2021-07-29', '02', 'jhgakjgkasdga'),
(9, '47/115/F5/71/N/5/2022', 'Fabianus Rue Rani', 'Kepala Desa', 'Jl Nenas', 'Febrianus Djawa', '12', 'Surabaya, 20 Oktober 1997', '', '2021-07-29', '04', 'sdfssdsd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mampu`
--

CREATE TABLE `tb_mampu` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(60) NOT NULL,
  `nma_pej` varchar(25) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `nma_pen` varchar(25) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `tanggal` varchar(25) NOT NULL,
  `rt` varchar(12) NOT NULL,
  `alamat_pen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mampu`
--

INSERT INTO `tb_mampu` (`id`, `no_surat`, `nma_pej`, `jabatan`, `alamat`, `nma_pen`, `ttl`, `jk`, `agama`, `tanggal`, `rt`, `alamat_pen`) VALUES
(8, '47/115/F5/71/N/5/2022', 'Fabianus Rue Rani', 'Kepala Desa', 'Desa Uluwae, Kecamatan Bajawa Utara', 'Febrianus Djawa', 'Surabaya, 20 Oktober 1997', 'Laki-Laki', 'Katolik', '2021-07-29', '04', 'jgkglgiypytdytsy');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sertifikat`
--

CREATE TABLE `tb_sertifikat` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(60) NOT NULL,
  `nma_pej` varchar(25) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `nma_pen` varchar(25) NOT NULL,
  `umur` varchar(20) NOT NULL,
  `tanggal` varchar(25) NOT NULL,
  `rt` varchar(12) NOT NULL,
  `alamat_pen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_sertifikat`
--

INSERT INTO `tb_sertifikat` (`id`, `no_surat`, `nma_pej`, `jabatan`, `alamat`, `nma_pen`, `umur`, `tanggal`, `rt`, `alamat_pen`) VALUES
(11, '47/115/F5/71/N/5/2021', 'Fabianus Rue Rani', 'Kepala Desa', 'Desa Uluwae, Kecamatan Bajawa Utara', 'Martinus Nangga', '12', '2021-07-29', '04', 'hfjhfkjfh'),
(12, '47/115/F5/71/N/5/2023', 'Fabianus Rue Rani', 'Kepala Desa', 'Desa Uluwae, Kecamatan Bajawa Utara', 'Febrianus Djawa', '25', '2021-07-29', '04', 'kjhkHLhlPQPP'),
(13, '47/115/F5/71/N/5/2024', 'Fabianus Rue Rani', 'Kepala Desa', 'Desa Uluwae, Kecamatan Bajawa Utara', 'Martinus Nangga', '25', '2021-07-30', '05', 'nGUSU'),
(14, '47/115/F5/71/N/5/2025', 'Fabianus Rue Rani', 'Kepala Desa', 'Desa Uluwae, Kecamatan Bajawa Utara', 'Febrianus Djawa', '25', '2021-07-31', '05', 'JHGF'),
(15, '47/115/F5/71/N/5/2026', 'Fabianus Rue Rani', 'Kepala Desa', 'Desa Uluwae, Kecamatan Bajawa Utara', 'Febrianus Djawa', '25', '2021-07-23', '04', 'hjkiohg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surkel`
--

CREATE TABLE `tb_surkel` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(60) NOT NULL,
  `perihal` varchar(25) NOT NULL,
  `tgl_surat` date NOT NULL,
  `nma_pej` varchar(25) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `isi` text NOT NULL,
  `tgl_kegiatan` varchar(25) NOT NULL,
  `waktu` varchar(20) NOT NULL,
  `lokasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_surkel`
--

INSERT INTO `tb_surkel` (`id`, `no_surat`, `perihal`, `tgl_surat`, `nma_pej`, `jabatan`, `isi`, `tgl_kegiatan`, `waktu`, `lokasi`) VALUES
(9, '47/115/F5/71/N/5/2021', 'Undangan Rapat', '2021-07-27', 'Fabianus Rue Rani', 'Kepala Desa', 'Sehubungan dengan adanya sesuatu hal yang harus dimusyawarahkan terkait masalah persiapan pengkajian keadaan desa dan berbagai insentif RT/RW di Desa Uluwae,maka dengan ini kami mengundang Bapak/ Ibu untuk hadir pada ', 'Sabtu, 07 juli 2021', '08.00 s/d Selesai', 'Aula Desa Uluwae'),
(10, '47/115/F5/71/N/5/2021', 'undangan rapat astensi', '2021-07-15', 'Fabianus Rue Rani', 'Kepala Desa', 'Sehubungan dengan adanya sesuatu hal yang harus dimusyawarahkan terkait masalah persiapan pengkajian keadaan desa dan berbagai insentif RT/RW di Desa Uluwae,maka dengan ini kami mengundang Bapak/ Ibu untuk hadir pada', 'Kamis 21 Juli 2021', '08.00 s/d Selesai', 'Aula Desa Uluwae');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_usaha`
--

CREATE TABLE `tb_usaha` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(60) NOT NULL,
  `nma_pej` varchar(25) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `nma_pen` varchar(25) NOT NULL,
  `umur` varchar(20) NOT NULL,
  `usaha` varchar(50) NOT NULL,
  `tanggal` varchar(25) NOT NULL,
  `rt` varchar(12) NOT NULL,
  `alamat_pen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_usaha`
--

INSERT INTO `tb_usaha` (`id`, `no_surat`, `nma_pej`, `jabatan`, `alamat`, `nma_pen`, `umur`, `usaha`, `tanggal`, `rt`, `alamat_pen`) VALUES
(7, '47/115/F5/71/N/9/2021', 'Fabianus Rue Rani', 'Kepala Desa', 'jl lindi', 'Viktoria Ge\'i Meo', '25', 'OLSHOP', '2021-07-12', '05', 'Ngusu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(10, 'ira', 'ira@gmail.com', 'IMG_20190710_121620.jpg', '$2y$10$McWlwaboLnxiIeMOnwH.UOO4losSP9nfm1AfOvluSzOhnWCIfB/Me', 1, 1, 1623558006);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(27, 1, 5),
(28, 1, 8),
(30, 1, 9),
(39, 1, 2),
(45, 3, 2),
(46, 3, 4),
(47, 3, 3),
(48, 1, 11),
(49, 2, 11),
(50, 3, 11),
(52, 1, 4),
(54, 1, 3),
(55, 1, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `name`, `menu`) VALUES
(1, 'Administrator', 'Admin'),
(2, 'Master Data', 'Master'),
(3, 'Pelayanan Administrasi', 'layanan'),
(4, 'Manajemen Arsip', 'Arsip'),
(5, 'Setting Menu', 'Menu'),
(6, 'Inventori Barang', 'Inventory'),
(11, 'Setting Account', 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'member'),
(3, 'Member 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(4, 5, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 0),
(5, 5, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 0),
(9, 5, 'Management Role Access', 'admin/role', 'fa fa-fw fa-user-tie', 0),
(10, 4, 'Arsip Surat Masuk', 'arsip', 'fas fa-fw fa-folder', 1),
(11, 4, 'Arsip Surat Keluar', 'arsip/suratkel', 'fas fa-fw fa-folder', 1),
(12, 5, 'Management Pengguna', 'menu/tampiluser', 'fas fa-fw fa-users', 1),
(13, 2, 'Master Kartu Keluarga', 'master', 'fas fa-fw fa-book', 1),
(14, 2, 'Master Data Penduduk', 'master/penduduk', 'fas fa-fw fa-users', 1),
(15, 2, 'Master Data Pejabat', 'master/pegawai', 'fas fa-fw fa-user', 1),
(16, 3, 'Pembuatan Surat', 'layanan', 'fas fa-fw fa-file', 1),
(17, 11, 'ProfilKu', 'user', 'fas fa-fw fa-user', 1),
(18, 11, 'Ubah Profil', 'user/edit', 'fas fa-fw fa-user', 1),
(19, 11, 'Ubah Password', 'user/changepassword', 'fas fa-fw fa-lock', 1),
(20, 6, 'Data Barang', 'inventory', 'fas fa-fw fa-folder', 1),
(21, 6, 'Tambah Barang', 'inventory/add', 'fas fa-fw fa-plus', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `arske`
--
ALTER TABLE `arske`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `arsma`
--
ALTER TABLE `arsma`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kartukel`
--
ALTER TABLE `kartukel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_domisili`
--
ALTER TABLE `tb_domisili`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_domisilii`
--
ALTER TABLE `tb_domisilii`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_mampu`
--
ALTER TABLE `tb_mampu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_sertifikat`
--
ALTER TABLE `tb_sertifikat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_surkel`
--
ALTER TABLE `tb_surkel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_usaha`
--
ALTER TABLE `tb_usaha`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `arske`
--
ALTER TABLE `arske`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `arsma`
--
ALTER TABLE `arsma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT untuk tabel `kartukel`
--
ALTER TABLE `kartukel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_domisili`
--
ALTER TABLE `tb_domisili`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_domisilii`
--
ALTER TABLE `tb_domisilii`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_mampu`
--
ALTER TABLE `tb_mampu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_sertifikat`
--
ALTER TABLE `tb_sertifikat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_surkel`
--
ALTER TABLE `tb_surkel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_usaha`
--
ALTER TABLE `tb_usaha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
