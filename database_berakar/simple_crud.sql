-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jun 2024 pada 17.27
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simple_crud`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `beasiswa`
--

CREATE TABLE `beasiswa` (
  `id_bea` int(50) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `foto` text NOT NULL,
  `deskripsi` text NOT NULL,
  `pengumpulan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `beasiswa`
--

INSERT INTO `beasiswa` (`id_bea`, `judul`, `foto`, `deskripsi`, `pengumpulan`) VALUES
(8, 'Beasiswa LPDP (Lembaga Pengelola Dana Pendidikan)', 'lpdp.jpg', 'Jenjang: S2 dan S3\r\n\r\nDeskripsi: Beasiswa ini dikelola oleh Kementerian Keuangan dan ditujukan untuk studi dalam negeri dan luar negeri. Menawarkan biaya kuliah penuh, tunjangan hidup bulanan, tunjangan buku, asuransi kesehatan, dan biaya perjalanan.\r\n\r\nPersyaratan: Warga Negara Indonesia, memiliki prestasi akademik yang baik, dan memiliki komitmen kembali ke Indonesia setelah studi.\r\n\r\nPendaftaran: Biasanya dibuka dua kali setahun, pada awal tahun dan pertengahan tahun.\r\n', 'Website: https://lpdp.kemenkeu.go.id'),
(9, 'Beasiswa KIP Kuliah (Kartu Indonesia Pintar Kuliah)', 'kip kuliah.jpg', 'Jenjang: S1\r\nDeskripsi: Beasiswa ini ditujukan untuk siswa dari keluarga kurang mampu secara ekonomi namun berprestasi akademik. Mencakup biaya kuliah dan biaya hidup.\r\nPersyaratan: Siswa dari keluarga penerima KIP, memiliki prestasi akademik yang baik, dan lulus seleksi nasional masuk perguruan tinggi.\r\nPendaftaran: Bersamaan dengan pendaftaran SNMPTN dan SBMPTN.\r\n', 'Website: https://kip-kuliah.kemdikbud.go.id'),
(10, 'Beasiswa Unggulan Kemendikbud', 'unggulan.jpg', 'Jenjang: S1, S2, dan S3\r\nDeskripsi: Beasiswa dari Kementerian Pendidikan dan Kebudayaan yang mendukung mahasiswa berprestasi dalam dan luar negeri. Menawarkan biaya kuliah penuh, tunjangan hidup, dan biaya penelitian.\r\nPersyaratan: Prestasi akademik atau non-akademik, dan lulus seleksi administrasi dan wawancara.\r\nPendaftaran: Terbuka sepanjang tahun.\r\n', 'Website: https://beasiswaunggulan.kemdikbud.go.id'),
(11, 'Beasiswa BCA Finance', 'BCA Finance.jpg', 'Jenjang: S1\r\n\r\nDeskripsi: Beasiswa ini ditujukan untuk mahasiswa berprestasi yang sedang menempuh pendidikan di perguruan tinggi negeri atau swasta. Menawarkan tunjangan pendidikan hingga lulus kuliah.\r\n\r\nPersyaratan: Mahasiswa S1 minimal semester 2, IPK minimal 3,0, dan lulus seleksi administrasi dan wawancara.\r\n\r\nPendaftaran: Setiap tahun, biasanya dibuka pada bulan Mei.', 'Website: https://bcafinance.co.id/'),
(12, 'Beasiswa Djarum Plu', 'djarum.jpg', 'Jenjang: S1\r\n\r\nDeskripsi: Beasiswa ini menawarkan bantuan dana pendidikan serta berbagai pelatihan soft skills untuk pengembangan diri penerima beasiswa.\r\n\r\nPersyaratan: Mahasiswa S1 dari semua jurusan, IPK minimal 3,0, dan aktif berorganisasi.\r\n\r\nPendaftaran: Setiap tahun, biasanya dibuka pada bulan Maret.', 'Website: djarumbeasiswaplus.org'),
(13, 'Beasiswa Tanoto Foundation', 'teladan.jpg', 'Jenjang: S1\r\n\r\nDeskripsi: Beasiswa ini menawarkan tunjangan biaya kuliah, biaya hidup, dan program pengembangan kepemimpinan.\r\n\r\nPersyaratan: Mahasiswa S1 minimal semester 2 dari universitas mitra, IPK minimal 3,0, dan lulus seleksi administrasi dan wawancara.\r\n\r\nPendaftaran: Setiap tahun, biasanya dibuka pada bulan Maret.', 'Website: https://www.tanotofoundation.org/en/'),
(14, 'Beasiswa Chevening', 'chevening.jpg', 'Jenjang: S2\r\n\r\nNegara: Inggris\r\n\r\nDeskripsi: Beasiswa penuh yang mencakup biaya kuliah, tunjangan hidup bulanan, dan biaya perjalanan ke dan dari Inggris. Beasiswa ini ditujukan untuk calon pemimpin dari berbagai negara yang ingin melanjutkan studi di Inggris.\r\n\r\nPersyaratan: Warga negara dari negara yang memenuhi syarat, memiliki pengalaman kerja minimal dua tahun, dan lulus seleksi wawancara.\r\n\r\nPendaftaran: Setiap tahun, biasanya dari Agustus hingga November.', 'Website: https://www.chevening.org'),
(15, 'Beasiswa Australia Awards', 'australia awards.jpg', 'Jenjang: S2 dan S3\r\n\r\nNegara: Australia\r\n\r\nDeskripsi: Beasiswa dari pemerintah Australia yang mencakup biaya kuliah penuh, biaya hidup, asuransi kesehatan, dan biaya perjalanan. Ditujukan untuk calon pemimpin masa depan yang berkontribusi pada pembangunan negara asalnya.\r\n\r\nPersyaratan: Warga negara Indonesia, memiliki prestasi akademik yang baik, pengalaman kerja, dan lulus seleksi wawancara.\r\n\r\nPendaftaran: Setiap tahun, biasanya dari Februari hingga April.', 'Website: https://www.australiaawardsindonesia.org'),
(16, 'Beasiswa Schwarzman Scholars', 'schwarzman.jpg', 'Jenjang: S2\r\n\r\nNegara: Tiongkok\r\n\r\nDeskripsi: Beasiswa penuh untuk program master dalam bidang global affairs di Tsinghua University. Menawarkan biaya kuliah, tunjangan hidup, asuransi kesehatan, dan biaya perjalanan.\r\n\r\nPersyaratan: Warga negara dari negara manapun, usia maksimal 28 tahun, memiliki prestasi akademik yang baik, dan lulus seleksi wawancara.\r\n\r\nPendaftaran: Setiap tahun, biasanya dibuka pada bulan April.\r\n', 'Website: schwarzmanscholars.org'),
(17, 'Beasiswa Gates Cambridge', 'gates.jpg', 'Jenjang: S2 dan S3\r\n\r\nNegara: Inggris\r\n\r\nDeskripsi: Beasiswa penuh yang mencakup biaya kuliah, tunjangan hidup, dan biaya penelitian di University of Cambridge.\r\n\r\nPersyaratan: Warga negara di luar Inggris, memiliki prestasi akademik yang luar biasa, dan lulus seleksi administrasi dan wawancara.\r\n\r\nPendaftaran: Setiap tahun, biasanya dibuka pada bulan September.', 'Website: gatescambridge.org\r\n'),
(18, 'Beasiswa Erasmus+', 'erasmus.jpg', 'Jenjang: S2\r\n\r\nNegara: Uni Eropa\r\n\r\nDeskripsi: Beasiswa dari Uni Eropa yang mencakup biaya kuliah, tunjangan hidup, dan biaya perjalanan untuk program master di beberapa negara Eropa. Beasiswa ini bertujuan untuk meningkatkan mobilitas akademik dan kerja sama internasional.\r\n\r\nPersyaratan: Warga negara dari negara yang memenuhi syarat, memiliki prestasi akademik yang baik, dan lulus seleksi administrasi dan wawancara.\r\n\r\nPendaftaran: Setiap tahun, dengan berbagai deadline tergantung program.', 'Website: https://erasmusplus.org'),
(19, 'Beasiswa Monbukagakusho (MEXT)', 'mext.jpg', 'Jenjang: S1, S2, dan S3\r\n\r\nNegara: Jepang\r\n\r\nDeskripsi: Beasiswa dari pemerintah Jepang yang mencakup biaya kuliah, tunjangan bulanan, dan biaya perjalanan. Ditujukan untuk mahasiswa internasional yang ingin melanjutkan studi di Jepang.\r\n\r\nPersyaratan: Warga negara Indonesia, memiliki prestasi akademik yang baik, kemampuan bahasa Jepang atau Inggris, dan lulus seleksi administrasi dan wawancara.\r\n\r\nPendaftaran: Tahunan, biasanya pada bulan April.', 'Website: https://www.studyinjapan.go.jp/en/smap-stopj-applications-mext.html'),
(20, 'Beasiswa Eiffel Excellence Scholarship Program', 'excellence eiffel.jpg', 'Jenjang: S2 dan S3\r\n\r\nNegara: Prancis\r\n\r\nDeskripsi: Beasiswa ini ditawarkan oleh pemerintah Prancis untuk mahasiswa internasional yang ingin melanjutkan studi di Prancis. Menawarkan biaya kuliah, tunjangan hidup, dan biaya perjalanan.\r\n\r\nPersyaratan: Warga negara di luar Prancis, memiliki prestasi akademik yang baik, dan lulus seleksi administrasi dan wawancara.\r\n\r\nPendaftaran: Setiap tahun, biasanya dibuka pada bulan Oktober.', 'Website: https://www.campusfrance.org/fr'),
(21, 'Beasiswa Vanier Canada Graduate Scholarships', 'vanier canada.jpg', 'Jenjang: S3\r\n\r\nNegara: Kanada\r\n\r\nDeskripsi: Beasiswa ini ditawarkan oleh pemerintah Kanada untuk mahasiswa internasional yang ingin melanjutkan studi doktoral di Kanada. Menawarkan tunjangan tahunan hingga tiga tahun.\r\n\r\nPersyaratan: Warga negara di luar Kanada, memiliki prestasi akademik yang luar biasa, dan lulus seleksi administrasi dan wawancara.\r\n\r\nPendaftaran: Setiap tahun, biasanya dibuka pada bulan Juli.', 'Website: https://vanier.gc.ca/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lowongankerja`
--

CREATE TABLE `lowongankerja` (
  `id_loker` int(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `foto` text NOT NULL,
  `deskripsi` text NOT NULL,
  `pengumpulan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `lowongankerja`
--

INSERT INTO `lowongankerja` (`id_loker`, `judul`, `foto`, `deskripsi`, `pengumpulan`) VALUES
(23, 'Software Engineer', '5.jpg', 'Gelar Sarjana di bidang Ilmu Komputer atau setara.\r\nPengalaman minimal 3 tahun dalam pengembangan perangkat lunak.\r\nMenguasai bahasa pemrograman seperti Java, Python, atau C++.\r\nKemampuan analisis dan pemecahan masalah yang baik.\r\nPengalaman dengan sistem kontrol versi seperti Git.\r\nDeskripsi: Sebagai Software Engineer, Anda akan bertanggung jawab untuk merancang, mengembangkan, dan memelihara perangkat lunak yang inovatif. Anda akan bekerja sama dengan tim multidisiplin untuk mengidentifikasi kebutuhan pengguna, membuat solusi yang efektif, dan memastikan kualitas serta performa perangkat lunak yang tinggi.', 'Pendaftaran: Untuk mendaftar, kirimkan CV dan surat lamaran Anda ke email recruitment@company.com dengan subjek \"Lamaran Software Engineer\". Pastikan untuk mencantumkan portofolio proyek Anda yang relevan.\r\nWebsite: www.company.com/careers\r\n'),
(24, 'Data Analyst', '6.jpg', 'Gelar Sarjana di bidang Desain Grafis atau setara.\r\nPengalaman minimal 2 tahun sebagai Desainer Grafis.\r\nMenguasai software desain seperti Adobe Photoshop, Illustrator, dan InDesign.\r\nKreatif dan memiliki portofolio desain yang kuat.\r\nKemampuan komunikasi yang baik dan mampu bekerja dalam tim.\r\nDeskripsi: Sebagai Graphic Designer, Anda akan bertanggung jawab untuk menciptakan desain visual yang menarik dan efektif. Anda akan bekerja sama dengan tim pemasaran untuk menghasilkan materi promosi, branding, dan konten visual lainnya sesuai dengan kebutuhan perusahaan.\r\n', 'Pendaftaran: Kirimkan CV, surat lamaran, dan portofolio Anda ke email design@creativeagency.com dengan subjek \"Lamaran Graphic Designer\".\r\nWebsite: www.creativeagency.com/careers\r\n'),
(25, 'Graphic Designer', '2.jpg', 'Gelar Sarjana di bidang Desain Grafis atau setara.\r\nPengalaman minimal 2 tahun sebagai Desainer Grafis.\r\nMenguasai software desain seperti Adobe Photoshop, Illustrator, dan InDesign.\r\nKreatif dan memiliki portofolio desain yang kuat.\r\nKemampuan komunikasi yang baik dan mampu bekerja dalam tim.\r\nDeskripsi: Sebagai Graphic Designer, Anda akan bertanggung jawab untuk menciptakan desain visual yang menarik dan efektif. Anda akan bekerja sama dengan tim pemasaran untuk menghasilkan materi promosi, branding, dan konten visual lainnya sesuai dengan kebutuhan perusahaan.\r\n', 'Pendaftaran: Kirimkan CV, surat lamaran, dan portofolio Anda ke email design@creativeagency.com dengan subjek \"Lamaran Graphic Designer\".\r\nWebsite: www.creativeagency.com/careers\r\n'),
(26, 'HR Specialist', '20.jpg', 'Gelar Sarjana di bidang Manajemen SDM, Psikologi, atau setara.\r\nPengalaman minimal 2 tahun di bidang HR.\r\nPengetahuan tentang hukum ketenagakerjaan dan praktik HR terbaik.\r\nKemampuan interpersonal dan komunikasi yang kuat.\r\nKemampuan menyelesaikan masalah dan mediasi konflik.\r\nDeskripsi: Sebagai HR Specialist, Anda akan bertanggung jawab untuk mengelola proses rekrutmen, pelatihan, dan pengembangan karyawan. Anda juga akan menangani administrasi SDM dan memastikan kepatuhan terhadap kebijakan perusahaan serta peraturan hukum yang berlaku.\r\n', 'Pendaftaran: Kirimkan CV dan surat lamaran Anda ke email hr@company.com dengan subjek \"Lamaran HR Specialist\".\r\nWebsite: www.company.com/careers\r\n'),
(27, 'Content Writer', '19.jpg', 'Gelar Sarjana di bidang Komunikasi, Jurnalistik, atau setara.\r\nPengalaman minimal 1 tahun sebagai penulis konten atau copywriter.\r\nKemampuan menulis yang baik dan tata bahasa yang kuat.\r\nKreatif dan mampu menulis dalam berbagai gaya dan untuk berbagai audiens.\r\nPengalaman dengan SEO dan alat analitik konten diutamakan.\r\nDeskripsi: Sebagai Content Writer, Anda akan bertanggung jawab untuk membuat konten yang menarik dan informatif untuk berbagai platform, termasuk website, blog, dan media sosial. Anda akan bekerja sama dengan tim pemasaran untuk mengembangkan strategi konten yang efektif.\r\n', 'Pendaftaran: Kirimkan CV, surat lamaran, dan contoh tulisan Anda ke email jobs@contentstudio.com dengan subjek \"Lamaran Content Writer\".\r\nWebsite: www.contentstudio.com/careers\r\n'),
(28, 'UX/UI Designer', '17.jpg', 'Gelar Sarjana di bidang Desain, Ilmu Komputer, atau setara.\r\nPengalaman minimal 2 tahun sebagai UX/UI Designer.\r\nMenguasai alat desain seperti Sketch, Figma, Adobe XD.\r\nKemampuan analitis dan pemahaman tentang pengalaman pengguna.\r\nPortofolio yang menunjukkan proses desain dan hasil akhir.\r\nDeskripsi: Sebagai UX/UI Designer, Anda akan bertanggung jawab untuk menciptakan antarmuka pengguna yang menarik dan intuitif. Anda akan bekerja sama dengan tim pengembang dan produk untuk memastikan bahwa desain yang dihasilkan memenuhi kebutuhan pengguna dan tujuan bisnis.\r\n', 'Pendaftaran: Kirimkan CV, surat lamaran, dan portofolio Anda ke email design@techcompany.com dengan subjek \"Lamaran UX/UI Designer\".\r\nWebsite: www.techcompany.com/careers'),
(29, 'Customer Service Representative', '14.jpg', 'Gelar Diploma di bidang terkait, Gelar Sarjana diutamakan.\r\nPengalaman minimal 1 tahun di bidang layanan pelanggan.\r\nKemampuan komunikasi yang baik dan kemampuan memecahkan masalah.\r\nBerorientasi pada kepuasan pelanggan.\r\nPengalaman menggunakan perangkat lunak CRM merupakan nilai tambah.\r\nDeskripsi: Sebagai Customer Service Representative, Anda akan bertanggung jawab untuk menangani pertanyaan dan keluhan pelanggan melalui telepon, email, atau media sosial. Anda akan memastikan pelanggan mendapatkan layanan yang memuaskan dan solusi cepat atas masalah mereka.\r\n', 'Pendaftaran: Kirimkan CV dan surat lamaran Anda ke email support@servicecompany.com dengan subjek \"Lamaran Customer Service Representative\".\r\nWebsite: www.servicecompany.com/careers\r\n'),
(30, 'Network Engineer', '13.jpg', 'Gelar Sarjana di bidang Teknologi Informasi atau setara.\r\nPengalaman minimal 3 tahun sebagai Network Engineer.\r\nSertifikasi seperti CCNA atau setara diutamakan.\r\nMenguasai konsep jaringan, konfigurasi router dan switch, serta keamanan jaringan.\r\nKemampuan analitis dan pemecahan masalah yang baik.\r\nDeskripsi: Sebagai Network Engineer, Anda akan bertanggung jawab untuk merancang, mengimplementasikan, dan memelihara infrastruktur jaringan perusahaan. Anda akan memastikan jaringan berjalan dengan efisien dan aman, serta mendukung operasi bisnis sehari-hari.\r\n', 'Pendaftaran: Kirimkan CV dan surat lamaran Anda ke email network@techfirm.com dengan subjek \"Lamaran Network Engineer\".\r\nWebsite: www.techfirm.com/careers\r\n'),
(31, 'IT Support Specialist', '18.jpg', 'Gelar Sarjana di bidang Teknologi Informasi atau setara.\r\nPengalaman minimal 2 tahun di bidang dukungan IT.\r\nPengetahuan tentang sistem operasi, jaringan, dan perangkat keras komputer.\r\nKemampuan menyelesaikan masalah teknis dengan cepat dan efisien.\r\nKemampuan komunikasi yang baik dan kemampuan melatih pengguna.\r\nDeskripsi: Sebagai IT Support Specialist, Anda akan bertanggung jawab untuk memberikan dukungan teknis kepada pengguna internal. Anda akan menangani masalah terkait perangkat keras, perangkat lunak, dan jaringan, serta memastikan sistem IT perusahaan berjalan dengan lancar.\r\n', 'Pendaftaran: Kirimkan CV dan surat lamaran Anda ke email support@itcompany.com dengan subjek \"Lamaran IT Support Specialist\".\r\nWebsite: www.itcompany.com/careers\r\n'),
(32, 'Financial Analyst', '3.jpg', 'Gelar Sarjana di bidang Keuangan, Akuntansi, atau setara.\r\nPengalaman minimal 2 tahun di bidang analisis keuangan.\r\nMenguasai alat analisis keuangan dan perangkat lunak seperti Excel, SAP, atau Oracle.\r\nKemampuan analitis yang kuat dan perhatian terhadap detail.\r\nKemampuan komunikasi dan presentasi yang baik.\r\nDeskripsi: Sebagai Financial Analyst, Anda akan bertanggung jawab untuk melakukan analisis keuangan, mempersiapkan laporan, dan memberikan rekomendasi berdasarkan data keuangan. Anda akan bekerja dengan tim keuangan untuk mendukung pengambilan keputusan strategis perusahaan.\r\n', 'Pendaftaran: Kirimkan CV dan surat lamaran Anda ke email finance@financefirm.com dengan subjek \"Lamaran Financial Analyst\".\r\nWebsite: www.financefirm.com/careers\r\n'),
(33, 'Sales Executive', '15.jpg', 'Gelar Sarjana di bidang Pemasaran, Bisnis, atau setara.\r\nPengalaman minimal 2 tahun di bidang penjualan.\r\nKemampuan komunikasi dan negosiasi yang baik.\r\nBerorientasi pada hasil dan mampu bekerja dengan target.\r\nPengalaman dalam menggunakan CRM diutamakan.\r\nDeskripsi: Sebagai Sales Executive, Anda akan bertanggung jawab untuk mengidentifikasi peluang bisnis baru, mengelola hubungan dengan klien, dan mencapai target penjualan. Anda akan bekerja sama dengan tim pemasaran untuk mengembangkan strategi penjualan yang efektif.', 'Pendaftaran: Kirimkan CV dan surat lamaran Anda ke email sales@businessfirm.com dengan subjek \"Lamaran Sales Executive\".\r\nWebsite: www.businessfirm.com/careers'),
(34, 'Project Manager', '1.jpg', 'Gelar Sarjana di bidang Manajemen, Teknik Industri, atau setara.\r\nPengalaman minimal 3 tahun sebagai Project Manager.\r\nSertifikasi PMP atau setara sangat diutamakan.\r\nKemampuan mengelola tim dan memimpin proyek dari awal hingga selesai.\r\nKemampuan komunikasi dan organisasi yang baik.\r\nDeskripsi: Sebagai Project Manager, Anda akan bertanggung jawab untuk merencanakan, melaksanakan, dan menyelesaikan proyek sesuai dengan target waktu dan anggaran yang ditentukan. Anda akan berkolaborasi dengan berbagai departemen untuk memastikan semua aspek proyek berjalan dengan lancar dan memenuhi standar kualitas.\r\n', 'Pendaftaran: Kirimkan CV dan surat lamaran Anda ke email recruitment@projectfirm.com dengan subjek \"Lamaran Project Manager\". Pastikan untuk menyertakan contoh proyek yang pernah Anda pimpin.\r\nWebsite: www.projectfirm.com/careers'),
(35, 'Digital Marketing Specialist', '16.jpg', 'Gelar Sarjana di bidang Pemasaran, Komunikasi, atau setara.\r\nPengalaman minimal 2 tahun di bidang pemasaran digital.\r\nPengetahuan mendalam tentang SEO, SEM, dan analisis media sosial.\r\nKemampuan menulis konten yang menarik dan persuasif.\r\nKreatif dan mampu bekerja secara mandiri maupun dalam tim.\r\nDeskripsi: Sebagai Digital Marketing Specialist, Anda akan bertanggung jawab untuk mengembangkan strategi pemasaran digital yang efektif. Tugas Anda mencakup pengelolaan kampanye iklan online, analisis performa kampanye, dan peningkatan visibilitas online melalui SEO dan media sosial.\r\n', 'Pendaftaran: Kirimkan CV dan surat lamaran Anda ke email hr@marketingagency.com dengan subjek \"Lamaran Digital Marketing Specialist\". Lampirkan juga contoh-contoh kampanye digital yang pernah Anda kelola.\r\nWebsite: www.marketingagency.com/careers\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `telepon`, `alamat`) VALUES
(1, 'Andricha Dea Mitra', '088747378869', 'Kampung Baru Kec. Rajabasa Kota Bandar Lampung\r\nBlok G Batumarta II'),
(2, 'Dea', '088747378869', 'Kampung Baru Kec. Rajabasa Kota Bandar Lampung\r\nBlok G Batumarta II');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `beasiswa`
--
ALTER TABLE `beasiswa`
  ADD PRIMARY KEY (`id_bea`);

--
-- Indeks untuk tabel `lowongankerja`
--
ALTER TABLE `lowongankerja`
  ADD PRIMARY KEY (`id_loker`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `beasiswa`
--
ALTER TABLE `beasiswa`
  MODIFY `id_bea` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `lowongankerja`
--
ALTER TABLE `lowongankerja`
  MODIFY `id_loker` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
