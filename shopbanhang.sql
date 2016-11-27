-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2016 at 04:31 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopbanhang`
--
CREATE DATABASE IF NOT EXISTS `shopbanhang` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci;
USE `shopbanhang`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(6) NOT NULL,
  `Email` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Password` varchar(15) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- RELATIONS FOR TABLE `admin`:
--

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Email`, `Password`) VALUES
(1, 'admin@admin.com', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `ID` int(6) NOT NULL,
  `UserID` int(6) NOT NULL,
  `PriceTotal` int(10) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- RELATIONS FOR TABLE `bill`:
--   `UserID`
--       `user` -> `ID`
--

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`ID`, `UserID`, `PriceTotal`, `Date`) VALUES
(5, 1, 6908000, '2016-11-27 03:15:58'),
(6, 1, 2350000, '2016-11-27 03:16:12'),
(7, 8, 8097000, '2016-11-27 03:16:08'),
(8, 8, 4798000, '2016-11-27 03:22:08');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ID` int(6) NOT NULL,
  `ProductID` int(6) NOT NULL,
  `UserID` int(6) NOT NULL,
  `Number` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- RELATIONS FOR TABLE `cart`:
--   `ProductID`
--       `product` -> `ID`
--   `UserID`
--       `user` -> `ID`
--

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`ID`, `ProductID`, `UserID`, `Number`) VALUES
(2, 1, 7, 1),
(11, 5, 7, 1),
(12, 35, 7, 1),
(13, 7, 7, 2),
(41, 31, 1, 1),
(43, 41, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `ID` int(6) NOT NULL,
  `ProductID` int(6) NOT NULL,
  `UserID` int(6) NOT NULL,
  `Content` varchar(300) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- RELATIONS FOR TABLE `comment`:
--   `ProductID`
--       `product` -> `ID`
--   `UserID`
--       `user` -> `ID`
--

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`ID`, `ProductID`, `UserID`, `Content`, `Time`) VALUES
(1, 2, 1, 'Hàng cũng tốt!', '2016-11-21 15:14:45'),
(2, 2, 7, 'Thấy cũng thường!', '2016-11-21 15:24:46'),
(4, 2, 1, 'Ok', '2016-11-22 14:40:33'),
(6, 2, 8, 'Demo', '2016-11-22 17:03:13'),
(7, 1, 1, 'Test 2', '2016-11-27 02:45:26');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(6) NOT NULL,
  `UserID` int(6) NOT NULL,
  `Sub` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Comment` varchar(500) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- RELATIONS FOR TABLE `contact`:
--   `UserID`
--       `user` -> `ID`
--
INSERT INTO `contact` (`ID`, `UserID`, `Sub`, `Comment`) VALUES (NULL, '1', 'Sản phẩm lỗi', 'Thông báo với ban quản trị sản phẩm Loa Bluetooth Remax RM-M1 bị lỗi');
INSERT INTO `contact` (`ID`, `UserID`, `Sub`, `Comment`) VALUES (NULL, '3', 'Sản phẩm tuyệt vời', 'Rất cám ơn shop đã bán cho tôi 1 sản phẩm tuyệt vời: Loa Bluetooth 6000mAH JBL Pulse 2. Tôi rất hài lòng');
-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `ID` int(6) NOT NULL,
  `BillID` int(6) NOT NULL,
  `ProductID` int(6) NOT NULL,
  `Num` int(2) NOT NULL,
  `Price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- RELATIONS FOR TABLE `payment`:
--   `BillID`
--       `bill` -> `ID`
--   `ProductID`
--       `user` -> `ID`
--

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`ID`, `BillID`, `ProductID`, `Num`, `Price`) VALUES
(9, 5, 1, 2, 179000),
(10, 5, 32, 1, 1750000),
(11, 5, 36, 3, 1600000),
(12, 6, 5, 3, 750000),
(13, 7, 14, 3, 899000),
(14, 7, 33, 1, 3800000),
(15, 7, 5, 2, 750000),
(16, 8, 7, 2, 999000),
(17, 8, 8, 1, 2700000);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(6) NOT NULL,
  `Name` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Price` int(10) NOT NULL,
  `Type` varchar(4) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Class` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `PostDay` date NOT NULL,
  `Description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `star` float NOT NULL DEFAULT '0',
  `NumVote` int(4) NOT NULL DEFAULT '0',
  `NumBuy` int(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- RELATIONS FOR TABLE `product`:
--

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `Name`, `Price`, `Type`, `Class`, `PostDay`, `Description`, `star`, `NumVote`, `NumBuy`) VALUES
(1, 'Loa Dàn 2.0 Soundmax A130 Red', 179000, 'Loa', 'Soundmax', '2016-11-13', 'Thiết kế nhỏ gọn âm thanh sống động.', 0, 0, 2),
(2, 'Loa Bluetooth Remax RM-M1', 179000, 'Loa', 'Bluetooth', '2016-11-13', 'Sản Phẩm Loa Bluetooth tích hợp FM Radio và Micro phone giúp bạn vừa có thể nghe nhạc, vừa có thể nhận và trả lời cuộc Đàm thoại thông qua kết nối Bluetooth. Hoặc làm nguồn phát trực tiếp và đồng thời chơi những Bản nhạc từ những thiết bị như USB,Thẻ nhớ…  thông qua những khe cắm tực tiếp trên loa.', 2.5, 2, 0),
(3, 'Loa dàn 2.0 Senicc SN-462', 260000, 'Loa', 'Senicc', '2016-11-14', 'Tương thích với Điện thoại,máy tính,laptop,máy tính bảng… Nghe nhạc,chơi game', 0, 0, 0),
(4, 'Loa dàn 2.0 Senicc SN-467', 260000, 'Loa', 'Senicc', '2016-11-14', 'Kích thước nhỏ gọn, có tính di động cao, phù hợp với nhiều không gian hoàn cảnh sử dụng như đi du lịch, nghe trong phòng,nơi làm việc...\r\n Thích hợp cho nhiều thiết công nghệ khác nhau: điện thoại, máy tính bảng, máy tính xách tay, máy tính để bàn, máy mp3…\r\n Loa SENICC SN-467 đáp ứng để thể hiện tất cả các âm ở dải âm tần 150-15khz\r\n Cho âm thanh khá chung thực\r\n Loa SENICC SN 467 có thể đáp ứng tần số 150-15kHz độ  và Tỷ lệ tín hiệu trên nhiễu của SENICC SN 467 là >60dB,\r\n Loa mini SENICC sử dụng nguồn 5V usb,Jack tín hiệu 3.5 mm  cho phép kết nối với hầu hết các thiết bị âm thanh Digital và phát âm thanh STREORIO', 0, 0, 0),
(5, 'Loa bluetooth Rocky CR-X6', 750000, 'Loa', 'Bluetooth', '2016-11-12', 'Thiết kế nhỏ gọn dễ thương.', 0, 0, 5),
(6, 'Loa dàn 2.1 Soundmax A960', 899000, 'Loa', 'Soundmax', '2016-11-13', 'Thuộc dòng loa 2.1 không quá cồng kềnh nhưng công suất đủ lớn để đảm báo phát âm chuẩn, to, rõ nét,…\r\nNgoài tính năng Bluetooth thì còn có khe cắm thẻ nhớ và USB.\r\nRemote kèm theo hỗ trợ các chức năng chơi nhạc cơ bản.', 0, 0, 0),
(7, 'Loa Remax Bluetooth cao cấp RB-M7', 999000, 'Loa', 'Bluetooth', '2016-11-14', 'Tương thích với tất cả các thiết bị thu phát bluetooth Kết nối không dây 4.0', 0, 0, 2),
(8, 'Loa Bluetooth Creative Sound Blaster SPBL-Free', 2700000, 'Loa', 'Bluetooth', '2016-11-16', 'Thiết kế Creative tương đương một bình thể thao, giúp cho bạn có thể gắn lên một chiếc xe đạp thể thao dễ dàng.', 0, 0, 1),
(9, 'Loa Bluetooth Speaker System Soundmax M1', 1290000, 'Loa', 'Bluetooth', '2016-11-13', 'Soundmax M1 khá gọn gàng với kích thước 202 x 168 x 350 mm và nặng chỉ 2.6 kg, cộng thêm việc trang bị quai xách ngay trên đỉnh loa, nên người dùng có thể dễ dàng mang Soundmax M1 theo bên mình. Soundmax M1 còn có thiết kế kiểu màng loa và cụm nút chức năng cùng các ngõ vào thiết yếu trên Soundmax M1 đều được bố trí ngay ở mặt trước khá tiện lợi.', 0, 0, 0),
(10, 'Loa Dàn 2.0 Soundmax A130 Blue', 179000, 'Loa', 'Soundmax', '2016-11-14', 'Thiết kế nhỏ, gọn, mang đến sự tiện lợi cao\r\nKhông dẫn nhiệt, không dẫn điện khi sử dụng trong 1 thời gian dài\r\nDễ sử dụng: tổ hợp phím điều khiển thiết kế đẹp mắt và thuận tiện trên dây nguồn\r\nThông số kỹ thuật: công suất 6W, tần số 50Hz - 20KHz mang đến không gian âm thanh sống động\r\nMàu sắc: Đen viền đỏ, Đen viền xanh', 0, 0, 0),
(11, 'Loa mini Powermax TS-02 Bluetooth', 299000, 'Loa', 'Bluetooth', '2016-11-15', 'Sản Phẩm Loa Bluetooth tích hợp FM Radio và Micro phone giúp bạn vừa có thể nghe nhạc, vừa có thể nhận và trả lời cuộc Đàm thoại thông qua kết nối Bluetooth.\r\nHoặc làm nguồn phát trực tiếp và đồng thời chơi những Bản nhạc từ những thiết bị như USB,Thẻ nhớ…  thông qua những khe cắm tực tiếp trên loa', 0, 0, 0),
(12, 'Loa dàn 2.1 Microlab M108U', 559000, 'Loa', 'Microlab', '2016-11-12', 'Với thiết kế trang nhã, tiện dụng phù hợp cho hầu hết các nhu cầu nghe nhạc, dễ sử dụng. Loa sub cho âm trầm mạnh mẽ và các loa vệ tinh nhỏ gọn cho mức âm cao rõ ràng. Nhu cầu sử dụng giải trí đa phương tiện với thiết kế bên trong đường hầm phản xạ cho âm bass tốt hơn và khả năng kết hợp với nhiều thiết bị, chắc chắn loa Microlab M108U 2.1 sẽ mang đến cho bạn những phút giải trí tuyệt vời nhất.', 0, 0, 0),
(13, 'Loa Powermax TM-01C Bluetooth', 599000, 'Loa', 'Bluetooth', '2016-11-15', 'Loa di động Bluetooth sử dụng công nghệ Supper Bass\r\nPIN gắn trong và tích hợp nhiều tính năng (TF Card,FM Radio,Line-in,Bluetooth Speaker)\r\nHình dáng mô phỏng Ống Kính Máy Chụp Hình và được cấu tạo hoàn toàn bằng kim loại\r\nSử dụng công nghệ cộng hưởng rung và Âm thanh định hướng toàn bộ 360', 0, 0, 0),
(14, 'Loa Powermax CS-01 bluetooth', 899000, 'Loa', 'Bluetooth', '2016-11-16', 'Loa Powermax CS- 01 Bluetooth tạo ấn tượng bởi ngoại hình vô cùng bắt mắt. Kiểu dáng nhỏ gọn giúp người dùng có thể dễ dàng mang theo đến bất cứ đâu. Thiết kế theo dạng hình tròn với nhiều khoang màu sắc khác nhau giúp sản phẩm trở nên thời trang và nổi bật hơn, đồng thời giúp âm thanh lan tỏa rộng hơn và đều hơn ở cả 4 phía.', 0, 0, 3),
(15, 'Loa Rock Space Bluetooth', 999000, 'Loa', 'Bluetooth', '2016-11-17', 'Tương thích với tất cả các thiết bị thu phát bluetooth Hỗ trợ thẻ TF / Đèn LED dùng được 10h.', 0, 0, 0),
(16, 'Loa Dàn 4.1 Soundmax A8900', 1499000, 'Loa', 'Soundmax', '2016-11-18', 'Hệ thống loa 4.1 có tổng công suất 90W\r\nCụm nút điều chỉnh linh hoạt\r\nMạnh mẽ, hiện đại\r\nKết nối giải trí đa phương tiện', 0, 0, 0),
(17, 'Loa xách tay Bluetooth & NFC Sony SRS-XB2', 1990000, 'Loa', 'Bluetooth', '2016-11-12', 'Nhỏ gọn dễ dàng mang theo.', 0, 0, 0),
(18, 'Loa Harman kardon SOUND STICK BT', 5990000, 'Loa', 'Senicc', '2016-11-21', 'Thiết kế sáng tạo. \r\nÂm thanh chân thực.', 0, 0, 0),
(19, 'Loa xách tay Bluetooth Hi-res Sony SRS-HG1', 4290000, 'Loa', 'Bluetooth', '2016-11-14', 'Thiết nhỏ gọn. Dễ dàng di chuyển.', 0, 0, 0),
(20, 'Loa vi tính Soundmax A920', 740000, 'Loa', 'Soundmax', '2016-11-19', 'Tổng công suất: 30W\r\nCống suất loa siêu trầm: 15W\r\nBộ sản phẩm: 1 sub, 2 vệ tinh\r\nJack kết nối: 3.5mm\r\nKhe cắm USB/SD: Có\r\nBảo hành 3 tháng 1 đổi 1.', 0, 0, 0),
(21, 'Loa vi tính Fenda F203G', 490000, 'Loa', 'Fenda', '2016-11-14', 'Thiết kế nhỏ gọn và tinh tế, giúp cho việc di chuyển hoặc mang đi xa trở nên dễ dàng.\r\nNhờ công suất 11W, loa cho âm thanh chân thật và sống động.\r\nĐiều chỉnh âm thanh theo ý muốn với nút tăng giảm Bass và đèn LED xanh báo hiệu.\r\nChất liệu gỗ giúp cho âm thanh ấm và không bị méo.\r\nKết nối dễ dàng và tương thích với laptop, MP3, điện thoại,...\r\nBảo hành 1 năm 1 đổi 1', 0, 0, 0),
(22, 'Loa vi tính Fenda F380X', 1350000, 'Loa', 'Fenda', '2016-11-13', 'Thiết kế mạnh mẽ, đẹp mắt và tỉ mỉ với vòng tròn phát sáng ở trung tâm khi sử dụng.\r\nCông suất 54W mang đến âm thanh chất lượng cao, sống động và rõ nét.\r\nKết nối không dây với các thiết bị di động qua Bluetooth 4.0/ NFC.\r\nTrang bị thêm remote giúp cho việc điều chỉnh bài nhạc, tăng giảm âm lượng... thuận tiện hơn.\r\nNguồn: 220 - 240V.\r\nBảo hành 1 năm 1 đổi 1', 0, 0, 0),
(23, 'Loa Bluetooth 6000mAH JBL Pulse 2', 4900000, 'Loa', 'Bluetooth', '2016-11-17', 'Âm thanh mạnh mẽ với công nghệ JBL Bass Radiator.\r\nThiết kế với khả năng chịu nước và bụi bẩn.\r\nDung lượng pin lên đến 6000mAh, cho thời gian phát nhạc lên đến 10 giờ.\r\nĐặc biệt là khả năng nhận dạng màu sắc của vật thể gần nó để thay đổi 7 màu sắc tương ứng với bài nhạc.\r\nCài đặt thêm app JBL connect để thay đổi cách mà ánh sáng trình diễn trên mặt loa.\r\nCó khả năng kết nối với nhiều thiết bị.\r\nBảo hành 3 tháng 1 đổi 1', 3, 1, 0),
(24, 'Loa vi tính Fenda U213A - 2.0', 220000, 'Loa', 'Fenda', '2016-11-14', 'Thiết kế đơn giản với màu đen trơn nhưng rất tinh tế và đẹp mắt.\r\nKích thước nhỏ gọn thuận tiện cho việc di chuyển.\r\nVới góc nghiêng 11 độ giúp Loa phát âm thanh rộng hơn.\r\nKết nối dễ dàng và nhanh chóng với PC, laptop,...thông qua Jack 3.5mm.\r\nBảo hành 1 năm 1 đổi 1.', 0, 0, 0),
(25, 'Loa Bluetooth Selfie iCutes MB-M515 Dơi Đen', 250000, 'Loa', 'Bluetooth', '2016-11-18', 'Thiết kế nhỏ gọn, đẹp mắt.\r\nCó chức năng như Remote chụp ảnh thông qua Bluetooth.\r\nThời gian hoạt động: 2 - 4 giờ.\r\nThời gian sạc: 2 giờ.\r\nBảo hành 1 năm 1 đổi 1.', 0, 0, 0),
(26, 'Loa vi tính Fenda A111', 750000, 'Loa', 'Fenda', '2016-11-21', 'Thiết kế đẹp mắt và đồng bộ.\r\nDễ dàng điểu chỉnh âm thanh theo ý muốn với nút tăng giảm âm Bass, Treble.\r\nCông suất 35W và tỉ số nén nhiễu 65db, mang đến chất lượng âm thanh ổn định và ít nhiễu khi âm thanh ở mức cực đại.\r\nDễ dàng tùy chỉnh với 3 nút: Play/Pause, Next, Previous.\r\nTương thích và kết nối dễ dàng với hầu hết thiết bị điện tử: laptop, Mp3, đầu CD,...\r\nBảo hành 1 năm 1 đổi 1.', 0, 0, 0),
(28, 'Loa vi tính SoundMax A150-2.0', 300000, 'Loa', 'Soundmax', '2016-11-21', 'Tổng công suất: 5W x 2\r\nBộ sản phẩm: 2 loa\r\nJack kết nối: 3.5mm\r\nKhe cắm USB/SD: Không\r\nBảo hành 3 tháng 1 đổi 1. ', 0, 0, 0),
(29, 'Loa Bluetooth Genius SP-920BT', 900000, 'Loa', 'Bluetooth', '2016-11-15', 'Thiết kế nhỏ gọn, tiện dụng và đẹp mắt.\r\nThoải mái đàm thoại với nút nghe/nhận cuộc gọi, mic ngay trên thân loa.\r\nCông nghệ bluetooth 4.0 giúp kết nối nhanh chóng, dễ dàng với các thiết bị.\r\nKhoảng cách kết nối lên đến 30 mét.\r\nSử dụng pin lithium, dung lượng 1000mAh.\r\nBảo hành 1 năm 1 đổi 1', 0, 0, 0),
(30, 'Loa vi tính Fenda A521', 1050000, 'Loa', 'Fenda', '2016-11-17', 'Thiết kế bề mặt loa không bám bẩn và vệ sinh khá dễ dàng.\r\nCông suất 52W mang đến âm thanh chất lượng cao, sống động và rõ nét.\r\nTích hợp thêm hai cổng kết nối dành riêng cho USB và thẻ nhớ MicroSD.\r\nThao tác dễ dàng với 3 nút điều khiển Play/Pause, Next và Previous.\r\nTương thích và dễ dàng kết nối với laptop, đầu CD/VCD,...\r\nBảo hành 1 năm 1 đổi 1. ', 0, 0, 0),
(31, 'MP3 Sony Walkman NW-WS410', 1749000, 'Mp3', 'Sony', '2016-11-15', 'Dung lượng 4G, sạc pin nhanh.', 0, 0, 0),
(32, 'Máy MP3 Walkman NW-E394', 1750000, 'Mp3', 'Sony', '2016-11-21', '-Mặt trước vỏ ngoài làm từ nhôm nguyên chất.\r\n-Màn hình 1.77 inch, QQVGA (160 x 128), 65,536 màu\r\n-Chức năng chính: Nghe nhạc, xem hình, lưu trữ dữ liệu, FM.\r\n-Công nghệ âm thanh Bass Boost, Clear Audio+\r\n-5 band equalizer (Heavy / Pop / Jazz / Unique / Custom)\r\n-Cài đặt giờ và báo thức.', 0, 0, 1),
(33, 'Sony NWZ-WH505', 3800000, 'Mp3', 'Sony', '2016-11-17', 'Hãng sản xuất: SONY\r\nDung lượng bộ nhớ trong: 16GB', 0, 0, 1),
(34, 'Apple iPod shuffle 2GB', 100000, 'Mp3', 'Apple', '2016-11-18', 'Tiếng Việt', 0, 0, 0),
(35, 'Apple iPod Nano 2011 8GB', 3550000, 'Mp3', 'Apple', '2016-11-15', 'Nhỏ gọn kiểu dáng sang trọng.\r\nDung lượng 8G.', 0, 0, 0),
(36, 'Apple iPod Shuffle 2012 2GB', 1600000, 'Mp3', 'Apple', '2016-11-22', 'Tét tiếng việt', 0, 0, 3),
(37, 'Mp3 ITECH V44', 1500000, 'Mp3', 'Apple', '2016-11-20', 'Không có gì ấn tượng lắm.\r\nMiễn nhận xét.', 0, 0, 0),
(38, 'Sony Walkman NWZ-W273', 1750000, 'Mp3', 'Sony', '2016-11-17', 'Sang trọng thích hợp với người năng động.\r\nGiá cả phải chăng. Bền và có bảo hành.', 0, 0, 0),
(39, 'Transcend MP350 8GB', 990000, 'Mp3', 'Other', '2016-11-24', 'Rất đáng quan tâm, giá rẻ, sử dụng bảo hành 1 năm không bảo đảm.', 0, 0, 0),
(40, 'Sony NWZ-B183F', 1190000, 'Mp3', 'Sony', '2016-11-17', 'Một sản phẩm chất lượng tiền nào của nấy. Giá cả rẻ bất ngờ. Xài cả ngày.', 0, 0, 0),
(41, 'ASCENT RY-112 128MB', 800000, 'Mp3', 'Ascent', '2016-11-15', 'Tuy dung lượng không cao nhưng đáng để bỏ túi tiền.', 0, 0, 0),
(42, 'ASCENT RY-188 256MB', 1100000, 'Mp3', 'Ascent', '2016-11-22', 'Mô tả của em là không có mô tả nào.', 0, 0, 0),
(43, 'Transcend MP330 8GB', 1300000, 'Mp3', 'Other', '2016-11-15', 'Máy nghe nhạc hiện đại, dung lượng 3G xài mọi lúc, liên tục 8h.', 0, 0, 0),
(44, 'Transcend MP300 8GB', 990000, 'Mp3', 'Other', '2016-11-14', 'Nhỏ gọn tiện sử dụng.\r\nNặng 250 gram, dài 10cm.', 0, 0, 0),
(45, 'Sony Walkman NWZ-B172P', 1080000, 'Mp3', 'Sony', '2016-11-18', 'An toàn dễ sử dụng, kiểu dáng tao nhã.\r\nThích hợp với người trẻ tuổi tăng động có sở thích thể thao.', 0, 0, 0),
(46, 'Sony Walkman SSE - BTR1', 5300000, 'Mp3', 'Sony', '2016-11-15', 'Đắt nhưng xắt ra miếng. Thích hợp cho dân sành điệu.', 0, 0, 0),
(47, 'Apple iPod Shuffle 4GB', 2000000, 'Mp3', 'Apple', '2016-11-14', 'Tích hợp thẻ nhớ,bluetooth, ...\r\nKhuyến mãi 100%.', 0, 0, 0),
(48, 'Sony Walkman NWZ-B173F', 1350000, 'Mp3', 'Sony', '2016-11-17', 'Nhỏ như một chiếc USB, có tích hợp thẻ nhớ, bluetooth.\r\n', 0, 0, 0),
(49, 'Creative Zen Mozaic 4GB', 2190000, 'Mp3', 'Other', '2016-11-19', 'Hãng mới tung ra thị trường.', 0, 0, 0),
(50, 'AOC ICOO A90 4GB', 1800000, 'Mp3', 'AOC', '2016-11-20', 'Máy mới của hãng AOC đáng để trải nghiệm', 0, 0, 0),
(51, 'ICOO IX35', 2100000, 'Mp3', 'AOC', '2016-12-01', 'Hơi bị chất lượng. Kiểu dáng như một chiếc điện thoại.', 0, 0, 0),
(52, 'AOC N86 2GB', 580000, 'Mp3', 'AOC', '2016-11-25', 'Hàng rẻ mà chất lượng.', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `ID` int(6) NOT NULL,
  `UserID` int(6) NOT NULL,
  `ProductID` int(6) NOT NULL,
  `Star` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- RELATIONS FOR TABLE `rating`:
--   `ProductID`
--       `product` -> `ID`
--   `UserID`
--       `user` -> `ID`
--

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`ID`, `UserID`, `ProductID`, `Star`) VALUES
(7, 1, 2, 4),
(8, 8, 2, 1),
(9, 1, 23, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(6) NOT NULL,
  `Username` varchar(15) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Password` varchar(15) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Email` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `FullName` varchar(30) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `Address` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- RELATIONS FOR TABLE `user`:
--

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Username`, `Password`, `Email`, `FullName`, `Address`) VALUES
(1, 'QuangHung', '123456', 'hqh@gmail.com', 'Hong Quang Hung', ''),
(7, 'ThaiHoa', '123456', 'game@ya.com', 'Nguyễn Thái Hòa', NULL),
(8, 'TranHoa', '123456', 'hoa@gmail.com', 'Trần Thị Hoa', NULL),
(9, 'user', 'user', 'user@gmail.com', 'No Name', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
