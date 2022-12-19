-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.10.2-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table paseduluran_db.menu
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL DEFAULT '0',
  `kategori` enum('Manual Brew','Coffee','Latte','Tea Based','Traditional Drink','Food') NOT NULL,
  `harga` int(50) NOT NULL DEFAULT 0,
  `status` enum('Tersedia','Tidak Tersedia') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table paseduluran_db.menu: ~7 rows (approximately)
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` (`id`, `nama`, `kategori`, `harga`, `status`) VALUES
	(12, 'Americano', 'Coffee', 15000, 'Tersedia'),
	(13, 'Pisang Goreng', 'Food', 6500, 'Tidak Tersedia'),
	(14, 'Coffe Latte', 'Latte', 25000, 'Tersedia'),
	(15, 'V60', 'Manual Brew', 15000, 'Tersedia'),
	(16, 'Tea', 'Tea Based', 5000, 'Tidak Tersedia'),
	(17, 'Wedhang Uwuh', 'Traditional Drink', 12000, 'Tidak Tersedia'),
	(18, 'Susu Jahe', 'Traditional Drink', 15000, 'Tidak Tersedia');
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;

-- Dumping structure for table paseduluran_db.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL DEFAULT '0',
  `password` varchar(255) NOT NULL DEFAULT '0',
  `is_active` int(2) NOT NULL,
  `role_id` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table paseduluran_db.user: ~0 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `username`, `email`, `password`, `is_active`, `role_id`) VALUES
	(1, 'Rayhan', 'rayhankusumo@paseduluran.com', '$2y$10$HjcfENphZrd5PzFO2Bk7Hetmf.txqqXVgr.U6TwOF85tWxDH44.pO', 1, 1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- Dumping structure for table paseduluran_db.user_role
CREATE TABLE IF NOT EXISTS `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table paseduluran_db.user_role: ~2 rows (approximately)
/*!40000 ALTER TABLE `user_role` DISABLE KEYS */;
INSERT INTO `user_role` (`id`, `role`) VALUES
	(1, 'Admin'),
	(2, 'Karyawan'),
	(3, 'Member');
/*!40000 ALTER TABLE `user_role` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
