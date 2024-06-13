

CREATE TABLE IF NOT EXISTS `lowogankerja` (
  `id_loker` int(50) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `foto` text COLLATE latin1_general_ci NOT NULL,
  `deskripsi` varchar(1000) COLLATE latin1_general_ci NOT NULL,
  `pengumpulan` varchar(500) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_loker`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=100001 ;