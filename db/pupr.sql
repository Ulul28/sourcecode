/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.4.11-MariaDB : Database - pupr
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pupr` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `pupr`;

/*Table structure for table `download` */

DROP TABLE IF EXISTS `download`;

CREATE TABLE `download` (
  `id_download` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_download`)
) ENGINE=MyISAM AUTO_INCREMENT=2106200009 DEFAULT CHARSET=latin1;

/*Data for the table `download` */

insert  into `download`(`id_download`,`nama`,`file`) values 
(2106200007,'Dokumen PDF','./assets/downloads/2909-6531-1-PB.pdf'),
(2106200008,'Lakip DPUPR_2020','./assets/downloads/LAKIP_DPUPR_KAB__PADANG_PARIAMAN_TAHUN_2019.PDF');

/*Table structure for table `halaman` */

DROP TABLE IF EXISTS `halaman`;

CREATE TABLE `halaman` (
  `id_hal` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_hal`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `halaman` */

insert  into `halaman`(`id_hal`,`judul`,`isi`,`link`) values 
(8,'Visi Misi','<p><strong>Visi dan Misi Dinas Pekerjaan Umum dan Penataan Ruang</strong></p>\r\n\r\n<p>Berdasarkan Permendagri Nomor 86 Tahun 2017, visi OPD mengacu pada visi yang ditetapkan dalam RPJMD Kabupaten Padang Pariaman Tahun 2016-2021 yaitu <strong>“Terwujudnya Kabupaten Padang Pariaman yang Baru, Religius, Cerdas dan Sejahtera”</strong>.</p>\r\n\r\n<p> </p>\r\n\r\n<p>Peran Dinas Pekerjaan Umum dan Penataan terhadap pencapaian Visi adalah dengan mengemban salah satu misi pembangunan daerah dimana Dinas Pekerjaan Umum dan Penataan RuangKabupaten Padang Pariaman mengemban misi RPJMD yaitu:<strong>“Meningkatkan potensi daya saing daerah melalui pengembangan pariwisata, transportasi, perdagangan, penataan ruang dan pengelolaan lingkungan</strong><strong>”</strong>.</p>\r\n\r\n<p> </p>\r\n\r\n<p>Misi ini diarahkan untuk meningkatkan pendapatan masyarakat yang lebih tinggi dan merata dengan mengembangkan kegiatan ekonomi yang lebih produktif berbasis kerakyatan, mendorong sektor unggulan daerah dan memanfaatkan sumberdaya lokal untuk menghasilkan produk yang berdaya saing dan untuk meningkatkan penyediaan infrastruktur yang berkualitas bagi peningkatan kegiatan ekonomi dan pengembangan wilayah dan pembangunan berkelanjutan yang berwawasan lingkungan sesuai dengan tata ruang daerah yang secara merata ke seluruh pelosok daerah.</p>\r\n','visimisi'),
(10,'Kepala Dinas','<p><img style=\"width:300px; height:300px;\" alt=\"\" src=\"/puprpadangpariamankab/assets/kcfinder/upload/files/kadis.jpg\" xss=removed></p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>Kepala Dinas</strong></p>\r\n\r\n<p>Kepala Dinas mempunyai tugas membantu Bupati melaksanakan urusan pekerjaan umum dan penataan ruang serta tugas pembantuan yang diberikan kepada Pemerintah Daerah. Kepala Dinas dalam melaksanakan tugassebagaiaman dimaksud di atas menyelenggarakan fungsi sebagai berikut:</p>\r\n\r\n<p>1.Pembinaan, Pengawasan dan Pengendalian penyusunan kebijakan strategis dinas.</p>\r\n\r\n<p>2.Perumusan kebijakan umum bidang Pekerjaan Umum dan Penataan Ruang.</p>\r\n\r\n<p>3.Pengendalian pelaksanaan urusan bidang Pekerjaan Umum dan Penataan Ruang dalam rangka mencapai target kinerja dinas.</p>\r\n\r\n<p>4.Pembinaan dan evaluasi pelaksanaan program dan kegiatan pada Dinas Pekerjaan Umum dan Penataan Ruang.</p>\r\n\r\n<p>5.Pelaksanaan tugas pembantu dari pemerintah pusat dan pemerintah propinsi.</p>\r\n\r\n<p>6.Pembinaan dan pengendalian urusan kesekretariatan, kepegawaian dan rumah tangga Dinas,</p>\r\n\r\n<p>7.Pengawasan dan pengendalian pelaksanaan anggaran, administrasi keuangan dan aset,</p>\r\n\r\n<p>8.Koordinasi dan kerjasama dengan organisasi perangkat daerah, instansi dan lembaga lainnyaserta unsur masyarakat, dan</p>\r\n\r\n<p>9.Pelaksanaan tugas kedinasan lain yang diberikan atasan sesuai dengan bidang tugas dan fungsinya.</p>\r\n','kadis'),
(11,'Sekretaris','<p><strong>Sekretaris</strong></p>\r\n\r\n<p>Sekretariat dipimpin oleh sekretaris mempunyai tugas mempunyai tugas memberikan pelayanan administratif dan teknis yangmeliputi perencanaan, keuangan, urusan tata usaha, perlengkapan rumah tangga dan urusan Aparatur Sipil Negara (ASN) kepada semua unsur di lingkungan Dinas serta membantu Kepala Dinas dalam mengoordinasikan pelaksanaan kegiatan Dinas. Untuk melaksanakan tugas sebagaimana dimaksud di atas, Sekretaris mempunyai fungsi sebagai berikut:</p>\r\n\r\n<p>a.koordinasi dan penyusunan program dan anggaran;</p>\r\n\r\n<p>b.pelaksanaan pengelolaan keuangan;</p>\r\n\r\n<p>c.pengelolaan perlengkapan, urusan tata usaha, rumah tangga dan barang/kekayaan milik Negara/daerah di lingkungan Dinas;</p>\r\n\r\n<p>d.pengelolaan urusan ASN;</p>\r\n\r\n<p>e.pemberian dukungan layanan administrasi pada seluruh unit organisasi dilingkungan Dinas yang meliputi ketatausahaan, kepegawaian, keuangan, kerumahtanggaan, kerjasama, hubungan masyarakat, arsip dan dokumentasi;</p>\r\n\r\n<p>f.koordinasi pelaksanaan tugas bidang-bidang secara terpadu; dan/ atau</p>\r\n\r\n<p>g.pelaksanaan tugas kedinasan lain yang diperintahkan atasan sesuai dengan bidang tugas dan fungsinya</p>\r\n\r\n<p> </p>\r\n\r\n<p>Dalam menjalankan fungsi di atas, Bagian Sekretariat dipimpin oleh seorang Sekretaris dibantu oleh 3 (tiga) orang subbagian, yaitu:</p>\r\n\r\n<p><strong>a. Subbagian Perencanaan, Evaluasi dan Pelaporan</strong></p>\r\n\r\n<p><strong>b. Subbagian Keuangan dan aset</strong></p>\r\n\r\n<p><strong>c. Subbagian Umum dan Kepegawaian</strong></p>\r\n','sekretaris'),
(12,'Sekretariat','<p><strong>Sekretariat</strong></p>\r\n\r\n<p>Sekretariat dipimpin oleh sekretaris. Dalam menjalankan fungsi di atas, Bagian Sekretariat dipimpin oleh seorang Sekretaris dibantu oleh 3 (tiga) orang subbagian, yaitu:</p>\r\n\r\n<p><strong>1. Subbagian Perencanaan, Evaluasi dan Pelaporan</strong></p>\r\n\r\n<p>Subbagian Perencanaan, Evaluasi dan Pelaporan mempunyai tugas membantu sekretaris melakukan penyiapan koordinasi dan penyusunan program dan anggaran. Untuk melaksanakan tugas tersebut Perencanaan, Evaluasi dan Pelaporan menyelenggarankan fungsi :</p>\r\n\r\n<p>a. Penyiapan bahan koordinasi dan penyusunan program, rencana kerja dan anggaran Dinas;</p>\r\n\r\n<p>b. Penyiapan bahan monitoring dan evaluasi pelaksanaan kegiatan;</p>\r\n\r\n<p>c. Penyiapan bahan penyusunan laporan kinerja, laporan pertangggungjawaban program dan kegiatan Dinas; dan/ atau</p>\r\n\r\n<p>d. Pelaksanaan tugas kedinasan lain yang diperintahkan atasan sesuai dengan bidang tugas dan fungsinya.</p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>2. Subbagian Keuangan dan aset</strong></p>\r\n\r\n<p>Subbagian Keuangan dan Aset mempunyai tugas membantu sekretaris melakukan penyiapan pengelolaan keuangan, penatausahan, akuntansi, verifikasi dan pebukuan. Untuk melaksanakan tugas sebagaimana dimaksud Subbagian Keuangan dan Aset menyelenggarakan fungsi :</p>\r\n\r\n<p>a. Penyiapan bahan koordinasi dan penyelenggaraan administrasi penatausahaan keuangan Dinas;</p>\r\n\r\n<p>b. Pemeliharaan dan penyimpanan bukti dan dokumen keuangan Dinas;</p>\r\n\r\n<p>c. Pelaksanaan penatausahaan keuangan, perbendaharaan dan pengelolaan asset Dinas;</p>\r\n\r\n<p>d. Penyiapan bahan penyusunan laporan pertangggungjawaban keuangan Dinas; dan/ atau</p>\r\n\r\n<p>e. Pelaksanaan tugas kedinasan lain yang diperintahkan atasan sesuai dengan bidang tugas dan fungsinya</p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>3. Subbagian Umum dan Kepegawaian</strong></p>\r\n\r\n<p>Subbagian umum dan Kepegawaian mempunyai tugas membantu sekretaris melaksanakan melakukan urusan persuratan, urusan tata usaha, kearsipan, urusan administrasi ASN, urusan perlengkapan, rumah tangga, dan penataan barang milik Negara. Untuk melaksanakan tugas sebagaimana dimaksud subbagian Umum dan Kepegawaian menyelenggarakan fungsi :</p>\r\n\r\n<p>a. Pelaksanaan urusan surat masuk dan keluar, kearsipan, rumah tangga dan perlengkapan, keamanan kantor serta kenyamanan kerja;</p>\r\n\r\n<p>b. Penghimpunan dan pengelolaan bahan dan data kepegawaian yang meliputi pengangkatan, pemberhentian, kenaikan pangkat, kenaikan gaji berkala, promosi, mutasi, cuti, askes, taspen dan lain-lain;</p>\r\n\r\n<p>c. Pengelolaan urusan perjalanan dinas dan keprotokolan;</p>\r\n\r\n<p>d. Pengurusan hal-hal yang berhubungan dengan kesejahteraan pegawai beserta keluarga seperti restitusi pengobatan dan lain-lain;</p>\r\n\r\n<p>e. Fasilitasi penyusunan analisis jabatan, analisis beban kerja dan Standar Operasional Prosedur (SOP) pada Dinas;</p>\r\n\r\n<p>f. Perencanaan dan pelaksanaan pengembangan Sumber Daya Manusia (SDM) pegawai;</p>\r\n\r\n<p>g. Penyiapan Rencana Kebutuhan Barang Unit (RKBU) dan Rencana Pemeliharaan Barang Unit (RPBU); dan/ atauh.pelaksanaan tugas kedinasan lain yang diperintahkan atasan sesuai dengan bidang tugas dan fungsinya.</p>\r\n','sekretariat'),
(16,'Bidang Sumber Daya Air','<p><strong>Bidang Sumber Daya Air</strong></p>\r\n\r\n<p>Bidang Sumber Daya air mempunyai tugas melaksanakan penyiapan perumusan kebijakan teknis dan pelaksanakan kebijakan bidang sumber daya air. Untuk menyelenggarakan tugas sebagaimana dimaksud Bidang Sumber Daya Air mempunyai fungsi:</p>\r\n\r\n<p>a.penyusunan perencanaan program bidang sumber daya air;</p>\r\n\r\n<p>b.perumusan dan pelaksanaan kebijakan teknis dibidang;</p>\r\n\r\n<p>c.koordinasi dan pembinaan pelaksanaan kegiatan sumber daya air;</p>\r\n\r\n<p>d.penyelenggaraan kegiatan urusan Operasional dan Pemeliharaan Irigasi; Rehabilitasi, Peningkatan dan Pembangunan Irigasi; dan Pengelolaan Sungai, Pantai dan Waduk;</p>\r\n\r\n<p>e.pengawasan, pengendalian, evaluasi dan pelaporan pelaksanaan kegiatan Operasional dan Pemeliharaan Irigasi; Rehabilitasi, Peningkatan dan Pembangunan Irigasi; dan Pengelolaan Sungai, Pantai dan Waduk;</p>\r\n\r\n<p>f.penyusunan pelaporan kinerja Bidang; dan/ atau</p>\r\n\r\n<p>g.pelaksanaan tugas kedinasan lain yang diperintahkan atasan sesuai dengan bidang tugas dan fungsinya.</p>\r\n\r\n<p> </p>\r\n\r\n<p>Dalam melaksanakan fungsi di atas, Bidang Sumber Daya Air dipimpin oleh seorang Kepala Bidang dibantu oleh 3(tiga) orang Kepala Seksi, yaitu:</p>\r\n\r\n<p><strong>1. Seksi Operasional Pemeliharaan (OP) Irigasi</strong></p>\r\n\r\n<p>Seksi Operasional Pemeliharaan (OP) Irigasi mempunyai tugas melakukan penyiapan bahan perencanaan, perumusan kebijakan teknis, pembinaan dan koordinasi serta pelaksanaan operasional pemeliharaan (OP) irigasi. Untuk melaksanakan tugas sebagaimana dimaksud Seksi Operasional Pemeliharaan (OP) irigasi menyelenggarakan fungsi:</p>\r\n\r\n<p>a.penyiapan bahan penyusunan perencanaan program dan kegiatan operasional pemeliharaan (OP) irigasi;</p>\r\n\r\n<p>b.perumusan kebijakan teknis dibidang operasional pemeliharaan (OP) irigasi;</p>\r\n\r\n<p>c.pembinaan, pengawasan dan koordinasi pelaksanaan operasional pemeliharaan (OP) irigasi;</p>\r\n\r\n<p>d.pelaksanaan pengawasan dan pengendalian operasional jaringan irigasi;</p>\r\n\r\n<p>e.pelaksanaan pengendalian dan pemantauan terhadap petugas irigasi di seluruh daerah irigasi;</p>\r\n\r\n<p>f.pelaksanaan kegiatan peningkatan mutu sumber daya manusia petugas pengelolaan air melalui pelatihan dan penyuluhan;</p>\r\n\r\n<p>g.pelaksanaanpenjagaan efektifitas, efisiensi, kualitas dan ketertiban pengelolaan irigasi;</p>\r\n\r\n<p>h.pelaksanaan kegiatan pembinaan organisasi Perkumpulan Petani Pemakai Air (P3A);</p>\r\n\r\n<p>i.penyiapan bahan pelaksanaan monitoring dan evaluasi pelaksanaan kegiatan dibidang operasional pemeliharaan (OP) irigasi;j.pelaporan pelaksanaan kegiatan; dan/ atau</p>\r\n\r\n<p>k.pelaksanaan tugas kedinasan lain yang diperintahkan atasan sesuai dengan bidang tugas dan fungsinya.</p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>2. Seksi Rehabilitasi, Peningkatan dan Pembangunan</strong></p>\r\n\r\n<p>Seksi Rehabilitasi, Peningkatan dan Pembangunan Irigasi mempunyai tugas melakukan penyiapan bahan perencanaan, perumusan kebijakan teknis, pembinaan dan koordinasi serta pelaksanaan rehabilitasi, peningkatan dan pembangunan irigasi. Untuk melaksanakan tugas sebagaimana dimaksud Seksi Rehabilitasi, Peningkatan dan Pembangunan Irigasi menyelenggarakan fungsi:</p>\r\n\r\n<p>a.penyiapan bahan penyusunan perencanaan program dan kegiatan rehabilitasi, peningkatan dan pembangunan irigasi;</p>\r\n\r\n<p>b.perumusan kebijakan teknis dibidang rehabilitasi, peningkatan dan pembangunan irigasi;</p>\r\n\r\n<p>c.pembinaan, pengawasan dan koordinasi pelaksanaan rehabilitasi, peningkatan dan pembangunan irigasi;</p>\r\n\r\n<p>d.pelaksanaan inventarisasi dan pendataan jaringan irigasi;</p>\r\n\r\n<p>e.pelaksanaan perencanaan dan pembangunan jaringan irigasi baru;</p>\r\n\r\n<p>f.pelaksanaan rehabilitasi jaringan irigasi yang mengalami kerusakan</p>\r\n\r\n<p>g.pelaksanaan pemeliharaan dan peningkatan jaringan irigasi.</p>\r\n\r\n<p>h.penyiapan bahan pelaksanaan monitoring dan evaluasi pelaksanaan kegiatan dibidang rehabilitasi, peningkatan dan pembangunan irigasi</p>\r\n\r\n<p>i.pelaporan pelaksanaan kegiatan; dan/ atauj.pelaksanaan tugas kedinasan lain yang diperintahkan atasan sesuai dengan bidang tugas dan fungsinya.</p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>3. Seksi Pengelolaan Sungai, Pantai dan Waduk</strong></p>\r\n\r\n<p>Seksi Pengelolaan Sungai, Pantai dan Waduk mempunyai tugas melakukan penyiapan bahan perencanaan, perumusan kebijakan teknis, pembinaan dan koordinasi serta pelaksanaan pengelolaan sungai, pantai dan waduk. Untuk melaksanakan tugas sebagaimana dimaksud Seksi pengelolaan sungai, pantai dan waduk menyelenggarakan fungsi:</p>\r\n\r\n<p>a.penyiapan bahan penyusunan perencanaan program dan kegiatan pengelolaan sungai, pantai dan waduk;</p>\r\n\r\n<p>b.perumusan kebijakan teknis dibidang pengelolaan sungai, pantai dan waduk;</p>\r\n\r\n<p>c.pembinaan, pengawasan dan koordinasi pelaksanaan pengelolaan sungai, pantai dan waduk;</p>\r\n\r\n<p>d.penyiapan bahan perumusan dan penetapan kebijakan pengelolaan sumber daya air dalam penggunaan sebagai irigasi;</p>\r\n\r\n<p>e.perumusan penetapan pola pengelolaan sumber daya air pada wilayah sungai dan waduk untuk jaringan irigasi;</p>\r\n\r\n<p>f.perumusan rencana pengelolaan sumber daya air pada wilayah sungai dan waduk untuk irigasi;</p>\r\n\r\n<p>g.pelaksanaan pembentukan wadah koordinasi sumber daya air ditingkat kabupaten dan/atau pada wilayah sungai dan waduk untuk irigasi;</p>\r\n\r\n<p>h.pelaksanaan pengawasan dan pemantauan panjang garis pantai pada wilayah sungai kewenangan kabupaten yang beresiko abrasi terhadap sarana dan prasarana publik;</p>\r\n\r\n<p>i.pelaksanaan pengelolan tampungan air (waduk, embung, situ, dan tampungan air lainnya).</p>\r\n\r\n<p>j.penyiapan bahan pelaksanaan monitoring dan evaluasi pelaksanaankegiatan dibidang pengelolaan sungai, pantai dan waduk;</p>\r\n\r\n<p>k.pelaporan pelaksanaan kegiatan; dan/ atau</p>\r\n\r\n<p>l.pelaksanaan tugas kedinasan lain yang diperintahkan atasan sesuai dengan bidang tugas dan fungsinya.</p>\r\n\r\n<div class=\"canvasWrapper\"> </div>\r\n','sda'),
(13,'Bina Marga','<p><strong>Bidang Bina Marga</strong></p>\r\n\r\n<p>Bidang Bina Marga dipimpin oleh Kepala Bidang yang mempunyai tugas melaksanakan penyiapan perumusan kebijakan teknis dan pelaksanaan kebijakan bidang Bina Marga. Untuk menyelenggaran tugas tersebut Bidang Bina Marga mempunyai fungsi :</p>\r\n\r\n<p>a. Penyusunan perencanaan program bidangbina marga;</p>\r\n\r\n<p>b. Perumusan dan pelaksanaan kebijakan teknis dibidang;</p>\r\n\r\n<p>c. Koordinasi dan pembinaan pelaksanaan kegiatan bina marga;</p>\r\n\r\n<p>d. Penyelenggaraan kegiatan urusan pembangunan dan peningkatan jalan, pemeliharaan jaringan jalan dan Pembangunan dan Rehabilitasi Jembatan;</p>\r\n\r\n<p>e. Pengawasan, pengendalian, evaluasi dan pelaporan pelaksanaan kegiatan pembangunan danpeningkatan jalan, pemeliharaan jaringan jalan dan Pembangunan dan Rehabilitasi Jembatan;</p>\r\n\r\n<p>f. Penyusunan pelaporan kinerja Bidang; dan/ ataug.pelaksanaan tugas kedinasan lain yang diperintahkan atasan sesuai dengan bidang tugas dan fungsinya.</p>\r\n\r\n<p>Dalam melaksanakan fungsi di atas, Kepala Bidang dibantu oleh 3 (tiga) orang Kepala Seksi, yaitu:</p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>1. Seksi Pembangunan dan Peningkatan Jalan</strong></p>\r\n\r\n<p>Seksi Pembangunan dan Peningkatan Jalan mempunyai tugas melakukan penyiapan bahan perencanaan, perumasan kebijakan teknis, pembinaan dan koordinasi serta pelaksanaan pembangunan dan peningkatan jalan. Untuk melaksanakan tugas sebagaimana dimaksud Seksi pembangunan dan peningkatan jalan menyelenggarakan fungsi :</p>\r\n\r\n<p>a. Penyiapan bahan penyusunan perencanaan program dan kegiatan pembangunan dan peningkatan jalan;</p>\r\n\r\n<p>b. Perumusan kebijakan teknis dibidang pembangunan dan peningkatan jalan;</p>\r\n\r\n<p>c. Pembinaan, pengawasan dan koordinasi pelaksanaan pembangunan dan peningkatan jalan;</p>\r\n\r\n<p>d. Melakukan pengaturan jalan Kabupaten Padang Pariaman;e.pelaksanaan pembinaan jalan kabupaten;</p>\r\n\r\n<p>f. Pelaksanaan pengembangan teknologi terapan dibidang jalan untuk jalan kabupaten;</p>\r\n\r\n<p>g. Pelaksanaan pembangunan jalan dalam bentuk pembiayaan, perencanaan teknis, pemprograman dan penganggaran, pengadaan lahan, serta pelaksanaan konstruksi jalan kabupaten, pengoperasian dan pengembangan pengelolaan manajemen jalan kabupaten;</p>\r\n\r\n<p>h. Penyiapan pembiayaan pembangunan dan peningkatan jalan kabupaten;i.pelaksanaan perencanaan teknis, pemprograman dan penganggaran, pengadaan lahan, serta pelaksanaan konstruksi jalan kabupaten;</p>\r\n\r\n<p>j. Pelaksanaanpengembangan dan pengelolaan manajemen jalan kabupaten.</p>\r\n\r\n<p>k. Penyiapan bahan pelaksanaan monitoring dan evaluasi pelaksanaan kegiatan dibidang pembangunan dan peningkatan jalan;</p>\r\n\r\n<p>l. Pelaporan pelaksanaan kegiatan; dan/ atau</p>\r\n\r\n<p>m. Pelaksanaan tugas kedinasan lain yang diperintahkan atasan sesuai dengan bidang tugas dan fungsinya.</p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>2. Seksi Pemeliharaan Jaringan Jalan</strong></p>\r\n\r\n<p>Seksi Pemeliharaan Jaringan Jalan mempunyai tugas melakukan penyiapan bahan perencanaan, perumusan kebijakan teknis, pembinaan dan koordinasi serta pelaksanaan pemeliharaan jaringan jalan. Untuk melaksanakan tugas sebagaimana dimaksud Seksi pemeliharaan jaringan jalan menyelenggarakan fungsi:</p>\r\n\r\n<p>a. penyiapan bahan penyusunan perencanaan program dan kegiatan pemeliharaan jaringan jalan;</p>\r\n\r\n<p>b. perumusan kebijakan teknis dibidang pemeliharaan jaringan jalan;</p>\r\n\r\n<p>c. pembinaan, pengawasan dan koordinasi pelaksanaan pemeliharaan jaringan jalan;</p>\r\n\r\n<p>d. penyusunan perencanaan umum dan pembiayaan jaringan jalan;</p>\r\n\r\n<p>e. pengoperasian dan pemeliharaan jaringan jalan;</p>\r\n\r\n<p>f. pelaksanaan Perumusan kebijakan dan penyelenggaraan pemeliharaan jalan berdasarkan kebijakan nasional dibidang jalan dengan memperhatikan keserasian antar daerah, dan antar kawasan serta penyusunan pedoman operasional penyelenggaraan pemeliharaan jalan dan jembatan;</p>\r\n\r\n<p>g. penyusunan rencana teknis, pemograman dan penganggaran, sertapelaksanaan pemeliharaan konstruksi jalan dan jembatan;</p>\r\n\r\n<p>h. perhitungan rencana anggaran biaya pemeliharaan sarana prasarana jalan dan jembatan;</p>\r\n\r\n<p>i. pelaksanaan evaluasi dan pembuatan laporan pelaksanaan urusan dibidang pemeliharaan jalan dan jembatan;</p>\r\n\r\n<p>j. penanggulangan jalan dan jembatan yang rusak akibat bencana alam;</p>\r\n\r\n<p>k. pelaksanaan penyusunan dan penetapan kelas jalan pada jaringan jalan kabupaten;</p>\r\n\r\n<p>l. penyiapan bahan pelaksanaan monitoring dan evaluasi pelaksanaan kegiatan dibidang Pemeliharaan Jaringan Jalan;</p>\r\n\r\n<p>m. pelaporan pelaksanaan kegiatan; dan/atau</p>\r\n\r\n<p>n. pelaksanaan tugas kedinasan lain yang diperintahkan atasan sesuai dengan bidang tugas dan fungsinya.</p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>3. Seksi Pembangunan dan Rehabilitasi Jembatan</strong><strong> Seksi</strong></p>\r\n\r\n<p>Pembangunan dan Rehabilitasi Jembatan mempunyai tugas melakukan penyiapan bahan perencanaan, perumusan kebijakan teknis, pembinaan dan koordinasi serta pelaksanaanPembangunan dan Rehabilitasi Jembatan. Untuk melaksanakan tugas sebagaimana dimaksud Seksi Pembangunan dan Rehabilitasi Jembatan menyelenggarakan fungsi :</p>\r\n\r\n<p>a. penyiapan bahan penyusunan perencanaan program dan kegiatan Pembangunan dan Rehabilitasi Jembatan;</p>\r\n\r\n<p>b. perumusan kebijakan teknis dibidang Pembangunan dan Rehabilitasi Jembatan;</p>\r\n\r\n<p>c. pembinaan, pengawasan dan koordinasi pelaksanaan Pembangunan dan Rehabilitasi Jembatan;</p>\r\n\r\n<p>d. pembangunan dan rehabilitasi jembatan dalam bentuk pembiayaan, perencanaan teknis, pemprograman dan penganggaran, serta pelaksanaan konstruksi jembatan kabupaten, pengoperasian danpengembangan pengelolan jembatan;</p>\r\n\r\n<p>e. penginventarisan bahan konstruksi jembatan yang bekas atau yang akan dipasang;</p>\r\n\r\n<p>f. penginventarisan data-data Desain (kontrak) pekerjaan jembatan;</p>\r\n\r\n<p>g. penyusunan buku inventaris jembatan;h.pembuatan peta induk jembatan kabupaten dan peta kecamatan;</p>\r\n\r\n<p>i. penyiapan bahan pengaturan jembatan kabupaten;</p>\r\n\r\n<p>j. pengawasan jembatan kabupaten/desa;k.pengoperasian dan rehabilitasi jembatan kabupaten;</p>\r\n\r\n<p>l. penyiapan bahan pelaksanaan monitoring dan evaluasi pelaksanaan kegiatan dibidang Pembangunan dan Rehabilitasi Jembatan;</p>\r\n\r\n<p>m. pelaporan pelaksanaan kegiatan; dan/ ataun.pelaksanaan tugas kedinasan lain yang diperintahkan atasan sesuai dengan bidang tugas dan fungsinya.</p>\r\n','binamarga'),
(14,'Bidang Cipta Karya','<p><strong>Bidang Cipta Karya</strong></p>\r\n\r\n<p>Bidang Cipta Karya mempunyai tugas melaksanakan penyiapan perumusan kebijakan teknis dan pelaksanaan kebijakan bidang cipta karya. Untuk menyelenggarakan tugas sebagaimana dimaksud Bidang Cipta Karya mempunyai fungsi:</p>\r\n\r\n<p>a.penyusunan perencanaan program bidangcipta karya;</p>\r\n\r\n<p>b.perumusan dan pelaksanaan kebijakan teknis dibidang;</p>\r\n\r\n<p>c.koordinasi dan pembinaan pelaksanaan kegiatan cipta karya;</p>\r\n\r\n<p>d.penyelenggaraan kegiatan urusan Tata Bangunan,Sanitasi dan Air Bersih dan Infrastruktur Lingkungan;</p>\r\n\r\n<p>e.pengawasan, pengendalian, evaluasi dan pelaporan pelaksanaan kegiatan Tata Bangunan, Sanitasi dan Air Bersih dan Infrastruktur Lingkungan;</p>\r\n\r\n<p>f.penyusunan pelaporan kinerja Bidang; dan/ atau</p>\r\n\r\n<p>g.pelaksanaan tugas kedinasan lain yang diperintahkan atasan sesuai dengan bidang tugas dan fungsinya.</p>\r\n\r\n<p> </p>\r\n\r\n<p>Dalam melaksanakan fungsi di atas, Bidang Cipta Karya dipimpin oleh seorang Kepala Bidang dibantu oleh 3 (tiga) orang Kepala Seksi, yaitu:</p>\r\n\r\n<p><strong>1. Seksi Tata Bangunan</strong></p>\r\n\r\n<p>Seksi Tata Bangunan mempunyai tugas melakukan penyiapan bahan perencanaan, perumusan kebijakan teknis, pembinaan dan koordinasi serta pelaksanaan tata bangunan. Untukmelaksanakan tugas sebagaimana dimaksud Seksi tata bangunan menyelenggarakan fungsi :</p>\r\n\r\n<p>a.penyiapan bahan penyusunan perencanaan program dan kegiatan tata bangunan;</p>\r\n\r\n<p>b.perumusan kebijakan teknis dibidang tata bangunan;</p>\r\n\r\n<p>c.pembinaan, pengawasan dan koordinasi pelaksanaan tata bangunan;</p>\r\n\r\n<p>d.pendataan bangunan gedung yang ada diwilayah kabupaten;</p>\r\n\r\n<p>e.penyelenggaraan IMB gedung dan sertifikat laik fungsi bangunan;</p>\r\n\r\n<p>f.pelaksanaan pembangunan dan pengawasan bangunan gedung;</p>\r\n\r\n<p>g.perencanaan (termasuk survey lapangan, perancangan /desain dan penghitungan RAB) kegiatan rehabilitasi /pemeliharaan bangunan gedung dan pembangunan gedung baru;</p>\r\n\r\n<p>h.pelaksanaan pemeliharaan dan rehabilitasi bangunan gedung;</p>\r\n\r\n<p>i.penyiapan bahan penetapan peraturan daerah Kabupaten padang Pariaman, mengenai bangunangedung dan lingkungan mengacu pada norma, standar, prosedur dan kriteria nasional serta</p>\r\n\r\n<p>j.penyiapan bahan penetapan kebijakan dan strategi Kabupaten Padang Pariaman mengenai bangunan gedung, penetapan kelembagaan bangunan gedung di Kabupaten Padang Pariaman, penetapan persyaratan administrasi dan teknis untuk bangunan gedung adat, semi permanen darurat, dan bangunan gedung yang dibangun dilokasi bencana serta penyusunan Rencana Tata Bangunan dan Lingkungan;</p>\r\n\r\n<p>k.pelaksanaan pemberdayaan kepada masyarakat dalam penyelenggaraan bangunan gedung;</p>\r\n\r\n<p>l.penyiapan program pembangunan sarana dan prasarana penataan bangunan diperkotaan dan perdesaan jangka panjang dan jangka menengah kabupatendengan mengacu pada RPJP dan RPJM nasional dan provinsi;m.penyiapan bahan pelaksanaanmonitoring dan evaluasi pelaksanaan kegiatan dibidang tata bangunan;</p>\r\n\r\n<p>n.pelaporan pelaksanaan kegiatan; dan/ atau</p>\r\n\r\n<p>o.pelaksanaan tugas kedinasan lain yang diperintahkan atasan sesuai dengan bidang tugas dan fungsinya.</p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>2. Seksi Sanitasi dan Air Bersih</strong></p>\r\n\r\n<p>Seksi Sanitasi dan Air Bersih mempunyai tugas melakukan penyiapan bahan perencanaan, perumusan kebijakan teknis, pembinaan dan koordinasi serta pelaksanaan sanitasi dan air bersih. Untuk melaksanakan tugas sebagaimana dimaksud Seksi Sanitasi dan Air bersih menyelenggarakan fungsi:</p>\r\n\r\n<p>a.penyiapan bahan penyusunan perencanaan program dan kegiatan sanitasi dan air bersih;</p>\r\n\r\n<p>b.perumusan kebijakan teknis dibidang sanitasi dan air bersih;</p>\r\n\r\n<p>c.pembinaan, pengawasan dan koordinasi pelaksanaan sanitasi dan air bersih;</p>\r\n\r\n<p>d.penyusunan rencana program kegiatan dan pedoman teknis tata bangunan;</p>\r\n\r\n<p>e.pelaksanaan program kegiatan sanitasi dan air bersihyang meliputi:</p>\r\n\r\n<p>f.pelaksanaan pengelolaan dan pengembangan SPAM di Daerah Kabupaten;</p>\r\n\r\n<p>g.pelaksanaan pengelolaan dan pengembangan Sistem Air Limbah Domestik Dalam Daerah Kabupaten.</p>\r\n\r\n<p>h.penyiapan bahan pelaksanaan monitoring dan evaluasi pelaksanaankegiatan dibidang sanitasi dan air bersih;</p>\r\n\r\n<p>i.pelaporan pelaksanaan kegiatan; dan/ atau</p>\r\n\r\n<p>j.pelaksanaan tugas kedinasan lain yang diperintahkan atasan sesuai dengan bidang tugas dan fungsinya.</p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>3. Seksi Infrastruktur lingkungan</strong></p>\r\n\r\n<p>Seksi Infrastruktur Lingkungan mempunyai tugas melakukan penyiapan bahan perencanaan, perumusan kebijakan teknis, pembinaan dan koordinasi serta pelaksanaan infrastruktur lingkungan. Untuk melaksanakan tugas sebagaimana dimaksud Seksi Infrastrutur Lingkungan menyelenggarakan fungsi :</p>\r\n\r\n<p>a.Penyiapan bahan penyusunan perencanaan program dan kegiatan infrastruktur lingkungan;</p>\r\n\r\n<p>b.Perumusan kebijakan teknis dibidang infrastruktur lingkungan;</p>\r\n\r\n<p>c.Pembinaan, pengawasan dan koordinasi pelaksanaan infrastruktur lingkungand.Pelaksanaan pengelolaan dan pengembangan sistem drainase yang terhubung langsung dengan sungai dalam Daerah Kabupaten;</p>\r\n\r\n<p>e.Pelaksanaan perencanaan dan pembangunan infrastruktur penyehatan lingkungan;</p>\r\n\r\n<p>f.Pelaksanaan perencanaan dan pembangunan infrastruktur jalan lingkung;</p>\r\n\r\n<p>g.Penyiapan bahan pelaksanaan monitoring dan evaluasi pelaksanaan kegiatan dibidang infrastruktur lingkungan;</p>\r\n\r\n<p>h.Pelaporan pelaksanaan kegiatan; dan/ ataui.Pelaksanaan tugas kedinasan lain yang diperintahkanatasan sesuai dengan bidang tugas dan fungsinya.</p>\r\n','cipta-karya'),
(17,'UPT','<p><strong><span xss=removed>Unit Pelaksanaan Teknis Dinas</span></strong></p>\r\n\r\n<p><span xss=removed>Unit Pelaksanaan Teknis (UPT) mempunyai tugas melaksanakan sebagaimana tugas Dinas </span><span xss=removed>Pekerjaan Umum dan Penataan Ruang yang mem</span><span xss=removed>punyai satu atau beberapa wilayah kerja. </span><span xss=removed>Dalam melaksanakan tugas sebagaimana dimaksud pada UPT dinas Pekerjaan Umum dan </span><span xss=removed>Penataan Ruang mempunyai fungsi:</span></p>\r\n\r\n<p><span xss=removed>A.</span><span xss=removed>melaksanakan sebagian kegiatan teknis operasional dan/atau kegiatan teknis penunjang </span><span xss=removed>pada Dinas Pekerj</span><span xss=removed>aan Umum dan Penatan Ruang yang mempunyai wilayah kerja satu atau </span><span xss=removed>beberapa kecamatan; dan</span></p>\r\n\r\n<p><span xss=removed>B.</span><span xss=removed>pelaksanaan urusan administrasi.</span><span xss=removed>Dalam melaksanakan fungsi di atas, UPTD dipimpin oleh seorang Kepala UPTD terdiri </span><span xss=removed>dari:</span></p>\r\n\r\n<p><span xss=removed>a.</span><span xss=removed>UPTD Laboratorium Pengujian Mutu Bahan dan </span><span xss=removed>Kontruksi.</span></p>\r\n\r\n<p><span xss=removed>UPTD Laboratorium Pengujian Mutu Bahan dan Konstruksi merupakan unsur pelaksanaan </span><span xss=removed>teknis Dinas yang melaksanakan Kegiatan teknis operasional dan/atau kegiatan teknis </span><span xss=removed>penunjang tertentu.</span></p>\r\n\r\n<p><span xss=removed>b.UPTD Perlengkapan dan Perbengkelan.</span></p>\r\n\r\n<p><span xss=removed>UPTD Perlengkapan dan P</span><span xss=removed>erbengkelan merupakan unsur pelaksanaan teknis Dinas yang </span><span xss=removed>melaksanakan Kegiatan Teknis Operasional dan/atau kegiatan teknis penunjang tertentu.</span></p>\r\n','upt'),
(15,'Bidang Tata Ruang','<p><strong>Bidang Tata Ruang</strong></p>\r\n\r\n<p>Bidang Tata Ruang mempunyai tugas melaksanakan penyiapan perumusan kebijakan teknis dan pelaksnaan kebijakan bidang tata ruang. Untuk menyelenggarakan tugas sebagaimana dimasksud Bidang Tata Ruang mempunyai fungsi :</p>\r\n\r\n<p>a.penyusunan perencanaan program bidangtata ruang;</p>\r\n\r\n<p>b.perumusan dan pelaksanaan kebijakan teknis dibidang;</p>\r\n\r\n<p>c.koordinasi dan pembinaan pelaksanaan kegiatan tata ruang;</p>\r\n\r\n<p>d.penyelenggaraan kegiatan urusan perencanaan teknis tata tuang, pembinaan teknis tata tuang dan pemanfaatan, pengendalian tata ruang;</p>\r\n\r\n<p>e.pengawasan, pengendalian, evaluasi dan pelaporan pelaksanaan kegiatan perencanaan teknis tata tuang, pembinaan teknis tata tuang dan pemanfaatan, pengendalian tata ruang;</p>\r\n\r\n<p>f.penyusunan pelaporankinerja Bidang; dan/ ataug.pelaksanaan tugas kedinasan lain yang diperintahkan atasan sesuai dengan bidang tugas dan fungsinya.</p>\r\n\r\n<p>Dalam melaksanakan fungsi di atas, Bidang Tata Ruang dipimpin oleh seorang Kepala Bidang dibantu oleh 3 (tiga) orang Kepala Seksi, yaitu:</p>\r\n\r\n<p><strong>1. Seksi Perencanaan Teknis Tata Ruang</strong></p>\r\n\r\n<p>Seksi Perencanaan Teknis Tata Ruang mempunyai tugas melakukan penyiapan bahan perencanaan, perumusan kebijakan teknis, pembinaan dan koordinasi serta pelaksanaan perencanaan teknis tata ruang. Untuk melaksanakan tugas sebagaimana dimaksud Seksi Perencanaan Teknis Tata Ruang menyelenggarakan fungsi:</p>\r\n\r\n<p>a.penyiapan bahan penyusunan perencanaan program dan kegiatan perencanaan teknis tata ruang;</p>\r\n\r\n<p>b.perumusan kebijakan teknis dibidang perencanaan teknis tata ruang;</p>\r\n\r\n<p>c.pembinaan, pengawasan dan koordinasi pelaksanaan perencanaan teknis tata ruang;</p>\r\n\r\n<p>d.penyusunan rencana program kegiatan dan pedoman teknis perencanaan teknis tata ruang;</p>\r\n\r\n<p>e.pelaksanaan program kegiatan perencanaan teknis tata ruang;</p>\r\n\r\n<p>f.pelaksanaan survey dan pemetaan tata ruang kabupaten;</p>\r\n\r\n<p>g.pengelolaan sistem komputerisasi data dan peta tata ruang;</p>\r\n\r\n<p>h.penyiapan bahan penyusnan dan penetapan Rencana Tata Ruang Wilayah (RTRW) Kabupaten Padang Pariaman;</p>\r\n\r\n<p>i.penyiapan bahan penyusunan dan penetapan Rencana Tata Ruang kawasan strategis Kabupaten Padang Pariaman;</p>\r\n\r\n<p>j.penyiapan bahan pelaksanaan monitoring dan evaluasi pelaksanaankegiatan dibidang perencanaan teknis tata ruang;</p>\r\n\r\n<p>k.pelaporan pelaksanaan kegiatan; dan/atau</p>\r\n\r\n<p>l.pelaksanaan tugas kedinasan lain yang diperintahkan atasan sesuai dengan bidang tugas dan fungsinya.</p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>2. Seksi Pembinaan Teknis Tata Ruang</strong></p>\r\n\r\n<p>Seksi Pembinaan Teknis Tata Ruang mempunyai tugas melakukan penyiapan bahan perencanaan, perumusan kebijakan teknis, pembinaan dan koordinasi serta pelaksanaan pembinaan teknis tata ruang. Untuk melaksanakan tugas sebagaimana dimaksud Seksi Pembinaan Teknis tata ruang menyelenggarakan fungsi:</p>\r\n\r\n<p>a.penyiapan bahan penyusunan perencanaan program dan kegiatan pembinaan teknis tata ruang;</p>\r\n\r\n<p>b.perumusan kebijakan teknis dibidang pembinaan teknis tata ruang;</p>\r\n\r\n<p>c.pembinaan, pengawasan dan koordinasi pelaksanaan pembinaan teknis tata ruang;</p>\r\n\r\n<p>d.penyusunan rencana program kegiatan dan pedoman teknis pembinaan teknis tata ruang;</p>\r\n\r\n<p>e.pelaksanaan program kegiatan pembinaan teknis tata ruang yang meliputi:</p>\r\n\r\n<p>f.pelaksanaan pembinaan teknis rencana tata ruang dan lingkungan, konservasi arsitektur bangunan serta pelestarian bangunan bersejarah atau bangunan adat;</p>\r\n\r\n<p>g.pelaksanaan kegiatan pembinaan dan bimbingan teknis rehabilitasi bangunan;</p>\r\n\r\n<p>h.penyiapan bahan pelaksanaan monitoring dan evaluasi pelaksanaan kegiatan dibidang pembinaan teknis tata ruang;</p>\r\n\r\n<p>i.pelaporan pelaksanaan kegiatan; dan/ atauj.pelaksanaan tugas kedinasan lain yang diperintahkan atasan sesuai dengan bidang tugas dan fungsinya.</p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>3. Seksi Pemanfaatan, Pengendalian Tata Ruang</strong></p>\r\n\r\n<p>Seksi Pemanfaatan, Pengendalian Tata Ruang mempunyai tugas melakukan penyiapan bahan perencanaan, perumusan kebijakan teknis, pembinaan dan koordinasi serta pelaksanaan pemanfaatan, pengendalian tata ruang. Untuk melaksanakan tugas sebagaimana dimaksud Seksi pemanfaatan, pengendalian tata ruang menyelenggarakan fungsi:</p>\r\n\r\n<p>a.penyiapan bahan penyusunan perencanaan program dan kegiatan pemanfaatan, pengendalian tata ruang;</p>\r\n\r\n<p>b.perumusan kebijakan teknis dibidang pemanfaatan, pengendalian tata ruang;</p>\r\n\r\n<p>c.pembinaan, pengawasan dan koordinasi pelaksanaan pemanfaatan, pengendalian tata ruang;</p>\r\n\r\n<p>d.penyusunan rencana program kegiatan dan pedoman teknis pemanfaatan, pengendalian tata ruang;</p>\r\n\r\n<p>e.pelaksanaan program kegiatan pemanfaatan, pengendalian tata ruang yang meliputi:</p>\r\n\r\n<p>f.pelaksanaan pemanfaatan kawasan strategis;g.pemanfaatan kawasan andalan sebagai bagian dari RTRW;</p>\r\n\r\n<p>h.penyusunan zonasi sebagai pedoman pengendalian pemanfaatan ruang;</p>\r\n\r\n<p>i.pemberian informasi dan akses kepada pengguna ruang terkait Rencana Tata Ruang Kabupaten;</p>\r\n\r\n<p>j.pendataan dan pengendalian kesesuaian penggunaan lahan dengan rencana tata ruang berdasarkan neraca penggunaan tanah;</p>\r\n\r\n<p>k.penyelenggaraan pemberian Rekomendasi Izin Prinsip dan pembatalan pemanfaatan ruang yang sesuai dengan RTRW;</p>\r\n\r\n<p>l.penyiapan bahan pelaksanaan monitoring dan evaluasi pelaksanaan kegiatan dibidang pemanfaatan, pengendalian tata ruang;</p>\r\n\r\n<p>m.pelaporan pelaksanaan kegiatan; dan/ ataun.pelaksanaan tugas kedinasan lain yang diperintahkan atasan sesuai dengan bidang tugas dan fungsinya.</p>\r\n','tata-ruang'),
(9,'Struktur Organisasi','<p><span xss=removed>\r\n<img style=\"width:600px; height:500px;\" alt=\"\" src=\"/puprpadangpariamankab/assets/kcfinder/upload/files/struktur.jpg\" xss=removed></span></p>\r\n','struktur-organisasi');

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `title_kategori` varchar(255) DEFAULT NULL,
  `slug_kategori` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `kategori` */

insert  into `kategori`(`id_kategori`,`title_kategori`,`slug_kategori`) values 
(2,'Berita','berita'),
(3,'Dokumen','document'),
(4,'Pusat Data','pusat-data'),
(5,'Artikel','artikel'),
(6,'Downloads','download');

/*Table structure for table `lapor` */

DROP TABLE IF EXISTS `lapor`;

CREATE TABLE `lapor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(255) DEFAULT NULL,
  `tentang` varchar(255) DEFAULT NULL,
  `uraian` text DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `lapor` */

insert  into `lapor`(`id`,`nik`,`tentang`,`uraian`,`file`,`status`) values 
(2,'1111','jjj','adsadsad','./assets/lapor/1.png','3');

/*Table structure for table `menu` */

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul_menu` varchar(40) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `is_main_menu` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `menu` */

insert  into `menu`(`id`,`judul_menu`,`link`,`is_main_menu`) values 
(1,'Home','http://localhost/puprpadangpariamankab/',0),
(2,'Profil','',0),
(3,'Uraian Tugas','',0),
(4,'Visi dan Misi','http://localhost/puprpadangpariamankab/home/halaman/visimisi',2),
(5,'Struktur Organisasi','http://localhost/puprpadangpariamankab/home/halaman/struktur-organisasi',2),
(6,'Berita','http://localhost/puprpadangpariamankab/home/posts',0),
(7,'Kepala Dinas','http://localhost/puprpadangpariamankab/home/halaman/kadis',3),
(8,'Sekretaris','http://localhost/puprpadangpariamankab/home/halaman/sekretaris',3),
(9,'Sekretariat','http://localhost/puprpadangpariamankab/home/halaman/sekretariat',3),
(10,'Bidang Bina Marga','http://localhost/puprpadangpariamankab/home/halaman/binamarga',3),
(11,'Cipta Karya','http://localhost/puprpadangpariamankab/home/halaman/cipta-karya',3),
(12,'Sumber Daya Air','http://localhost/puprpadangpariamankab/home/halaman/sda',3),
(13,'UPT','http://localhost/puprpadangpariamankab/home/halaman/upt',3),
(14,'Download','http://localhost/puprpadangpariamankab/home/download',0),
(15,'Tata Ruang','http://localhost/puprpadangpariamankab/home/halaman/tata-ruang',3),
(16,'Lapor','http://localhost/puprpadangpariamankab/home/lapor',0);

/*Table structure for table `parent` */

DROP TABLE IF EXISTS `parent`;

CREATE TABLE `parent` (
  `id_parent` int(11) NOT NULL,
  `post_parent` varchar(255) DEFAULT NULL,
  `kategori_parent` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_parent`),
  KEY `kategori_parent` (`kategori_parent`),
  KEY `post_parent` (`post_parent`),
  CONSTRAINT `parent_ibfk_1` FOREIGN KEY (`kategori_parent`) REFERENCES `kategori` (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `parent` */

/*Table structure for table `popular` */

DROP TABLE IF EXISTS `popular`;

CREATE TABLE `popular` (
  `berita` int(11) DEFAULT NULL,
  `view` int(1) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `popular` */

insert  into `popular`(`berita`,`view`) values 
(0,1);

/*Table structure for table `post` */

DROP TABLE IF EXISTS `post`;

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `title_post` varchar(255) DEFAULT NULL,
  `slug_post` varchar(255) DEFAULT NULL,
  `desk_post` text DEFAULT NULL,
  `image_post` text DEFAULT NULL,
  `author_post` int(11) DEFAULT NULL,
  `status_post` int(1) DEFAULT NULL,
  `tgl_post` timestamp NULL DEFAULT NULL,
  `tgl_edit` timestamp NULL DEFAULT NULL,
  `kategori` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_post`),
  KEY `author_post` (`author_post`),
  KEY `kategori` (`kategori`),
  CONSTRAINT `post_ibfk_1` FOREIGN KEY (`author_post`) REFERENCES `users` (`id_user`),
  CONSTRAINT `post_ibfk_2` FOREIGN KEY (`kategori`) REFERENCES `kategori` (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `post` */

insert  into `post`(`id_post`,`title_post`,`slug_post`,`desk_post`,`image_post`,`author_post`,`status_post`,`tgl_post`,`tgl_edit`,`kategori`) values 
(1,'Kunjungan Dewan Riset Daerah dan Litbang Provinsi Sumbar ke Kabupaten Padang Pariaman.','kunjungan-dewan-riset-daerah-litbang-prov-sumbar-pdg-prm','Kunjungan Dewan Riset Daerah dan Litbang Provinsi Sumbar ke Kabupaten Padang Pariaman.\r\n\r\nKunjungan ini dalam rangka Audiensi dengan Pemerintah daerah terkait pengembangan kawasan yang berwawasan lingkungan dan berkelanjutan yaitu pembangunan kawasan tarok city dan pengelolaan kawasan pesisir pantai.\r\n\r\nBupati, Drs H Ali Mukhni di dampingi Jonpriadi (Sekda), Deni Irwan, ST,MT (Kepala Dinas PUPR Kabupaten Padang Pariaman ), Ali Amran ( Kepala Bappelitbangda ) dan Rahim Thamrin, S,ST, MT ( Sekretaris Dinas PUPR), langsung ekspos dan berdialog langsung dengan Tim dewan riset daerah, dalam kesempatan ini bupati juga meminta agar Tim Riset Daerah bisa merekomendasikan kepada pemerintah pusat, agar Kawasan Terpadu Tarok City menjadi Kawasan Strategis Nasional.\r\n\r\nDewan riset daerah terdiri dari :\r\nProf. Dr Rizanda, Dr Eni Kamal, M. Sc, Dr. Listiana, MS.\r\n\r\nTim Riset Daerah juga sempatkan diri melihat perkembangan pembangunan Masjid Raya Padang Pariaman dan kunjungan ke kawasan terpadu tarok city.\r\n\r\nParitmalintang, 15 agustus 2019.','./assets/postingan/64fc3d08024371113b18273eeff5633f.jpeg',6,1,'2020-06-21 16:28:32',NULL,2),
(2,'Rapat Evaluasi Kegiatan Dinas Pekerjaan Umum dan Penataan Ruang Kabupaten Padang Pariaman Tahun 2019','rapat-evaluasi-kegiatan-dpupr-kabupaten-padang-pariaman-2019','Jum’at/ 30 Agustus 2019\r\n\r\nPada hari Jum’at tanggal 30 Agustus 2019, Dinas Pekerjaan Umum dan Penataan Ruang Kabupaten Padang melakukan Rapat Evaluasi Kegiatan Tahun 2019. Rapat ini dipimpin langsung DENI IRWAN, ST, MT (Kepala Dinas) dan didampingi oleh RAHIM THAMRIN, SST. MT (Sekretaris). Peserta rapat dihadiri oleh seluruh Pejabat Eselon III dan IV di lingkungan DPUPR Kab. Padang Pariaman. Pokok pembahasan yang dibahas dalam rapat terdiri dari Laporan Kegiatan Setiap Bidang, Keseragaman Dokumen Kontrak, Pemahaman Serah Terima Pekerjaan, Tata Naskah Dinas, SPJ dan lain-lain.\r\n\r\nRapat evaluasi berlangsung mulai jam 08.30 WIB s.d  12.00 WIB. Kepala Dinas PUPR langsung membuka rapat dan meminta masing-masing kepala bidang untuk melaporkan pelaksanaan kegiatan sampai dengan kondisi bulan Agustus 2019. Penyampaian laporan kegiatan dimulai dari EFINALDI, ST. MT (Kabid Cipta Karya), FAUZIL IRAWADI, ST. MT (Kabid Bina Marga), FAFDAL ANRIANOS, ST.M.PSDA (Kabid SDA), dan ALFIARDI, ST (Kabid Tata Ruang).\r\n\r\nDENI IRWAN, ST, MT selaku Kepala Dinas menjelaskan agar Dokumen Kontrak di lingkungan DPUPR harus berpedoman pada “Permen Pu Nomor 07/Prt/M/2019 Tentang Standar Dan Pedoman Pengadaan Jasa Konstruksi Melalui Penyedia”. Hal ini dimaksudkan agar tidak ada lagi kesalahan-kesalahan dalam penyajian dokumen kontrak di lingkungan DPUR Kab. Padang Pariaman.\r\n\r\nSelanjutnya Kepala Dinas menjelaskan tentang Konsep Serah Terima Pekerjaan sesuai dengan “Peraturan Presiden Republik Indonesia Nomor 16 Tahun 2018 Tentang Pengadaan Barang/Jasa Pemerintah”. Proses serah terima pekerjaan haruslah berdasarkan perpres tersebut dan aturan turunannya yaitu;\r\n\r\n    1. Setelah pekerjaan selesai 100% (seratus persen) sesuai dengan ketentuan yang termuat dalam Kontrak, Penyedia mengajukan permintaan secara \r\n    tertulis kepada PPK untuk serah terima barang/jasa.\r\n   2. PPK melakukan pemeriksaan terhadap barang/jasa yang diserahkan.\r\n   3. PPK dan Penyedia menandatangani Berita Acara Serah Terima.\r\n   4. PPK menyerahkan barang/jasa sebagaimana dimaksud poin (1,2,3) kepada PA/KPA.\r\n   5. PA / KPA meminta PjPHP/ PPHP untuk melakukan pemeriksaan administratif terhadap barang/jasa yang akan diserahterimakan.\r\n   6. Hasil pemeriksaan sebagaimana dimaksud pada poin (5) dituangkan dalam Berita Acara.\r\n','./assets/postingan/848c5cb312c50a09ffaabba80197fa88.jpeg',6,1,'2020-06-24 14:11:43',NULL,2),
(3,'Kunjungan Kepala Balai Prasarana Permukiman Wilayah Sumatera Barat ke Kawasan Wisata Religius Syekh Burhanuddin Ulakan','kunjungan-kepala-balai-prasarana-permukiman-wilayah-sumatera-barat-ke-kawasan-wisata-religius-syekh-burhanuddin-ulakan','Sabtu / 31 Agustus 2019\r\n\r\nKepala Balai Prasarana Permukiman Wilayah Sumatera Barat, Ir. Syafriyanti, MM melakukan kunjungan ke Kawasan Wisata Religius Syekh Burhanuddin di Ulakan. Dalam kunjungan tersebut Ir. Syafriyanti, MM (Kepala Balai) didampingi oleh Jon Priadi, SE, MM (Sekda Kab. Padang Pariaman), Ir. Yuniswan (Kepala Dinas LHPKPP Kab. Padang Pariaman), Deni Irwan, ST, MT (Kepala Dinas PUPR Kab. Padang Pariaman) dan Rino, ST (Kasi Tata Bangunan Dinas PUPR Kab. Padang Pariaman).\r\n\r\n \r\n\r\nKunjungan Kepala Balai Prasarana Permukiman Wilayah Sumatera Barat ini adalah dalam rangka meninjau sekaligus rapat lapangan untuk pembangunan Kawasan Wisata Religius Syekh Burhanuddin Ulakan. Rapat lapangan ini juga dihadiri oleh tokoh-tokoh masyarakat setempat.\r\n\r\n \r\n\r\nPemerintah Kabupaten Padang Pariaman sangat mengparesiasi kunjungan Kepala Balai. Pemerintah Kabupaten Padang Pariaman sangat berharap agar Kawasan Wisata Religius Syekh Burhanuddin Ulakan ini benar-benar tertata dengan rapi dan dinikmati oleh seluruh masyarakat serta meningkatkan perekonomian Kabupaten Padang Pariaman.','./assets/postingan/w.jpg',6,1,'2020-06-24 14:21:48',NULL,2),
(4,'Bimbingan Teknis Sistem Manajemen Keselamatan Konstruksi (SMKK) Kabupaten Padang Pariaman Provinsi Sumatera Barat Tahun 2020','bimbingan-teknis-smkk-kdb-pdg-prm','Sekretaris Daerah Kabupaten Padang Pariaman Jonpriadi,S.E.,M.M membuka Bimbingan Teknis Sistem Manajemen Keselamatan Konstruksi (SMKK) Kabupaten Padang Pariaman Provinsi Sumatera Barat Tahun 2020 pada Kamis (27/02) di Hotel Rocky Padang.\r\n\r\nSekretaris Daerah juga didampingi oleh Kepala Dinas Pekerjaan Umum dan Penataan Ruang Kabupaten Padang Pariaman Deni Irwan, ST, MT, Ketua Asosiasi Ahli Keselamatan dan Kesehatan Kerja Konstruksi (A2K4) Ir. Nasirman Chan dan Ir. Nurmala Simanjuntak, M. Eng. Sc selaku narasumber dari Direktorat Jenderal Bina Konstruksi Kementerian PUPR.\r\n\r\nBimbingan teknis ini dilaksanakan oleh Balai Jasa Konstruksi Wilayah I Banda Aceh bekerjasama dengan Dinas Pekerjaan Umum dan Penataan Ruang Kabupaten Padang Pariaman dan Asosiasi Ahli Keselamatan dan Kesehatan Kerja Konstruksi (A2K4).\r\n\r\nJonpriadi memberikan apresiasi atas pelaksanaan kegiatan bimtek ini , beliau juga menyampaikan “Kita harus secara cepat memberikan manfaat kepada masyarakat dg melaksanakan pembangunan yg akan menguntungkan masyarakat.” Tuturnya.\r\n\r\nBeliau juga menambahkan bahwa sebagai Pelayanan Masyarakat kita harus memberikan pelayanan yangg sebaik baiknya kepada sektor swasta dan berpegang pada prinsip sebagai pelayan masyarakat. Lalu mari berikan pelayanan terbaik kepada seluruh rekan kerja dan masyarakat.\r\n\r\nNarasumber pada kegiatan ini terlibat langsung Direktorat Jenderal Bina Konstruksi Wilayah I Banda Aceh dan Asosiasi Ahli Keselamatan dan Kesehatan Kerja Konstruksi (A2K4) Provinsi Sumatera Barat yg berkompeten dibidangnya dan memiliki sertifikat TOT.\r\n\r\nIr. Nasirman Chan selaku ketua A2K4 Sumatera Barat yang juga merupakan narasumber menyampaikan kegiatan yang dilaksanakan dengan PUPR Padang Pariaman merupakan kegiatan ke 6 dilaksanakan dari 19 Kab/Kota se Sumbar.\r\n\r\n“Untuk mencapai hasil kelulusan diharapkan seluruh peserta mengikuti kegiatan ini dengan seksama dan semoga seluruh peserta mendapat hasil kelulusan untuk menjadi ahli muda Kesehatan dan Keselamatan Kerja.” Ucapnya.\r\n\r\nIa juga menambahkan hal ini terkait dengan bagaimana cara menghasilkan sumber daya manusia yang berkompeten sehingga bisa memiliki sertifikat untuk menambah kompetensi K3.\r\n\r\nKegiatan ini diikuti oleh 100 orang peserta dari OPD Se Kabupaten Padang Pariaman dan berlangsung selama 3 hari , 27 s.d 29 Februari 2020.','./assets/postingan/index.jpg',6,1,'2020-06-24 23:04:51',NULL,2),
(7,'Program Perencanaan Tata Ruang','program-perencanaan-tata-ruang','<p><span xss=removed>Progaram perencanaan tata ruang memiliki 8 kegiatan yaitu </span><span xss=removed>Penyusunan kebijakan </span><span xss=removed>tentang penyusunan rencana tata ruang</span><span xss=removed>, </span><span xss=removed>Revisi rencana tata ruang</span><span xss=removed>, </span><span xss=removed>Pengadaan Citra Satelit </span><span xss=removed>Resolusi Tinggi</span><span xss=removed>, </span><span xss=removed>Operasional Kegiatan Pengendalian Tata Ruang</span><span xss=removed>, </span><span xss=removed>Sosialisasi Perda RTRW</span><span xss=removed>, </span><span xss=removed>Sosialisasi Perda RDTR</span><span xss=removed>, </span><span xss=removed>Pendampingan Perpetaan untuk Legalisasi Ranperda RTRW dan RDTR</span><span xss=removed>, </span><span xss=removed>dan </span><span xss=removed>Operasional TKPRD</span><span xss=removed>. Capaian kinerja dari kegiatan</span><span xss=removed>ini dapat dilihat pada Tabe</span><span xss=removed>l 15</span></p>\r\n','./assets/postingan/blog-img-3.jpg',6,1,'2020-06-29 15:09:04','2020-06-29 15:09:04',5);

/*Table structure for table `slider` */

DROP TABLE IF EXISTS `slider`;

CREATE TABLE `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

/*Data for the table `slider` */

insert  into `slider`(`id`,`judul`,`foto`) values 
(23,'1','522a1ab524de3dddb01ed56b334fc0e6.jpeg'),
(24,'2','6da3db9ff3468bef1ef894fb0d9c290d.jpeg'),
(25,'pupr','8fae9a562a41c85aae9518c7a60c4564.jpg'),
(26,'1','4c936b19e73add2867e638d631e4d422.png'),
(27,'as','5665e608ed386c1485f3e4a5079864db.png'),
(29,'as','5b27dfb7fcc6c5c775c84017a0fdd5e1.jpeg');

/*Table structure for table `tbl_menu` */

DROP TABLE IF EXISTS `tbl_menu`;

CREATE TABLE `tbl_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) DEFAULT NULL,
  `link` varchar(50) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `urut` int(11) DEFAULT NULL,
  `is_main_menu` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_menu` */

insert  into `tbl_menu`(`id`,`judul`,`link`,`icon`,`urut`,`is_main_menu`) values 
(1,'Dashboard','home','fa fa-dashboard',1,0),
(2,'Posts','posts','icon-pin',2,0);

/*Table structure for table `tbl_options` */

DROP TABLE IF EXISTS `tbl_options`;

CREATE TABLE `tbl_options` (
  `option_id` int(11) NOT NULL AUTO_INCREMENT,
  `option_name` varchar(255) NOT NULL DEFAULT '',
  `option_value` longtext NOT NULL,
  PRIMARY KEY (`option_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_options` */

insert  into `tbl_options`(`option_id`,`option_name`,`option_value`) values 
(1,'blogname','PUPR Kabupaten Padang Pariaman'),
(2,'favicon','./assets/img/pupr.ico'),
(3,'address','Parit Malintang<br>\r\nKec. Enam Lingkung<br>\r\nKab. Padang Pariaman<br>\r\nProv. Sumatera Barat<br>\r\nPhone: 300 323 3456<br>\r\nFax: 300 323 1456<br>\r\nEmail: <a href=\"mailto:\"></a><br>');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(255) DEFAULT NULL,
  `email_user` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level_user` int(1) DEFAULT NULL,
  `status_user` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  KEY `level_user` (`level_user`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id_user`,`nama_user`,`email_user`,`username`,`password`,`level_user`,`status_user`) values 
(6,'Administrator','mualimran@gmail.com','admin','21232f297a57a5a743894a0e4a801fc3',1,1),
(7,'Kresna','Kresna@gmail.com','kresna','b7db37c23c661a515143d704416f250b',2,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
