CREATE TABLE `role` (
  `role_id` int PRIMARY KEY,
  `name` varchar(20)
);

CREATE TABLE `user` (
  `user_id` int PRIMARY KEY,
  `role_id` int,
  `nama_lengkap` varchar(100),
  `no_hp` varchar(20) UNIQUE,
  `email` varchar(100) UNIQUE,
  `password` varchar(10)
);

CREATE TABLE `divisi` (
  `divisi_id` int PRIMARY KEY,
  `kepala_divisi` int,
  `user_id` int
);

CREATE TABLE `kegiatan` (
  `kegiatan_id` int PRIMARY KEY,
  `user_id` int,
  `divisi_id` int,
  `deskripsi` text,
  `tanggal` date,
  `status` varchar(20) DEFAULT (now())
);

ALTER TABLE `user` ADD FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);

ALTER TABLE `kegiatan` ADD FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

ALTER TABLE `kegiatan` ADD FOREIGN KEY (`divisi_id`) REFERENCES `divisi` (`divisi_id`);
