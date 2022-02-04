-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2022 年 2 月 04 日 23:50
-- サーバのバージョン： 5.7.34
-- PHP のバージョン: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `assignment_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `assignment_an_table`
--

CREATE TABLE `assignment_an_table` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `sex` varchar(30) NOT NULL,
  `age` varchar(30) NOT NULL,
  `text` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `assignment_an_table`
--

INSERT INTO `assignment_an_table` (`id`, `name`, `sex`, `age`, `text`, `date`) VALUES
(3, '胡蝶しのぶ', '女性', '25', '体が小さい', '2022-01-29'),
(5, 'aikawa sho', '女性', '55', '顔が丸い', '2022-01-29'),
(6, 'aaaa', '男性', '67', 'お尻が丸い', '2022-01-29'),
(7, 'aaaa', '女性', '25', 'katahaba hiroi', '2022-01-29'),
(9, 'satsuma imo', '女性', '30', 'かわいい色が似合わない', '2022-01-29'),
(10, 'sagawa denki', 'ニュートラル', '28', '首短い', '2022-01-29'),
(11, '宇髄天元', '男性', '23', 'なんでも似合いすぎる', '2022-02-05');

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_an_table`
--

CREATE TABLE `gs_an_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `sex` varchar(30) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `gs_an_table`
--

INSERT INTO `gs_an_table` (`id`, `name`, `sex`, `content`, `date`) VALUES
(1, 'Nonoka', 'nonoka@gmail.com', 'hello world', '2022-01-21'),
(2, 'haruna', 'haruna@gmail.com', 'makolove', '2022-01-21'),
(3, 'haruna', 'haruna@gmail.com', 'makolove', '2022-01-21'),
(4, 'haruna', 'haruna@gmail.com', 'makolove', '2022-01-21'),
(5, 'haruna', 'haruna@gmail.com', 'makolove', '2022-01-21'),
(6, 'haruna', 'haruna@gmail.com', 'makolove', '2022-01-21'),
(7, 'safndkurya', 'hudyaifudhgas', 'dfjlasufiosdhfga', '2022-01-21'),
(10, 'wa', 'joudia', 'houfajga', '2022-01-21'),
(11, 'jouipgafrgae', 'j;loiufdpgadrga', 'kljduagatrh', '2022-01-21');

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_user_table`
--

CREATE TABLE `gs_user_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `lid` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `lpw` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `kanri_flg` int(1) NOT NULL,
  `life_flg` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_user_table`
--

INSERT INTO `gs_user_table` (`id`, `name`, `lid`, `lpw`, `kanri_flg`, `life_flg`) VALUES
(1, 'テスト１', 'test1', 'test1', 1, 0),
(3, 'テスト３', 'test3', 'test3', 0, 0);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `assignment_an_table`
--
ALTER TABLE `assignment_an_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `gs_an_table`
--
ALTER TABLE `gs_an_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `gs_user_table`
--
ALTER TABLE `gs_user_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `assignment_an_table`
--
ALTER TABLE `assignment_an_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- テーブルの AUTO_INCREMENT `gs_an_table`
--
ALTER TABLE `gs_an_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- テーブルの AUTO_INCREMENT `gs_user_table`
--
ALTER TABLE `gs_user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
