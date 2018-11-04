-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 04, 2018 at 11:46 AM
-- Server version: 5.7.24-0ubuntu0.16.04.1
-- PHP Version: 7.2.11-2+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `18php04_news`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `news_id`, `content`, `created`) VALUES
(1, 2, 1, 'Nem ngon qua', '2018-11-04 04:35:02'),
(2, 3, 1, 'Nem qua ngon', '2018-11-04 04:35:36'),
(3, 3, 1, 'Comment thu phat nua', '2018-11-04 04:43:08');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `content`, `image`, `created`) VALUES
(1, 'Nem nướng - từ món ăn du nhập đến đặc trưng ẩm thực Đà Lạt', 'Tuy nằm trong hẻm nhỏ xa khu trung tâm, quán nem nướng bà Hùng vẫn được đông thực khách tìm đến.', 'Với nhiều người sinh sống ở Đà Lạt, nem nướng không phải là món ăn quen thuộc. Món này sẽ được giới thiệu cho khách phương xa khi được hỏi thăm về những món ăn ngon ở thành phố.\r\n\r\nQuán nem nướng nằm ở khu quy hoạch Hoàng Văn Thụ có không gian rộng rãi và sạch sẽ. Theo lời chủ, quán được mở từ những năm 2000. "Vì nhiều lý do mà quán được chuyển vào địa chỉ hiện tại thay vì ở ngoài mặt đường lớn như cách đây 8 năm", chủ quán cho biết.', 'news1.jpg\r\n', '2018-11-04 03:19:30'),
(2, 'Mỗi người cần có bao nhiêu thẻ tín dụng', 'Chuyên gia trong chương trình "Shark Tank" của đài ABC khuyên mỗi người nên có ít nhất hai thẻ tín dụng.', 'Nhiều chuyên gia tài chính đã đồng ý với quan điểm, sử dụng thẻ tín dụng có trách nhiệm là một cách quan trọng để xây dựng phương án tài chính, để bạn có thể vay tiền với mức giá hợp lý cho các giao dịch lớn, theo CNBC.', 'news2.jpg\n', '2018-11-04 03:20:30'),
(3, 'Hãng Nga lần đầu vô địch giải độ xe thế giớ', 'Chiếc xe độ dựa trên Yamaha SR400 giành ngôi vị quán quân tại cuộc thi hàng năm diễn ra tại Mỹ, giúp Zillers Garage lần đầu đăng quang.', 'Giải Vô địch xe độ thế giới (World Championship of Custom Bike Building) do tạp chí American Motorcycle Dealer (AMD) tổ chức hàng năm có quán quân mới thuộc phong cách tự do. Riêng chủ đề Freestyle có 51 tác phẩm dự thi từ khắp thế giới. Chiếc SR400 với hệ thống lái đặc biệt và ngoại hình ấn tượng mang giải thưởng cao nhất về cho Dmitry Golubchikov của hãng độ Zillers Garage đến từ Moskva, Nga. ', 'news3.jpg', '2018-11-04 03:21:06'),
(4, 'Lấy chồng Nhật, tôi thay đổi cách sống từ việc đổ rác hàng ngày', 'Ở Nhật mỗi ngày chị Lan đổ một loại rác riêng, trừ thức ăn ra, những loại rác tái chế... đều phải rửa sạch, để khô trước khi vứt.', 'Tôi và chồng quen nhau ở Việt Nam năm 2013 khi anh được công ty cử sang đây công tác 6 tháng. Một năm sau, chúng tôi tổ chức đám cưới và sang Nhật định cư. Cuộc sống ở một đất nước xa lạ khiến tôi vô cùng bỡ ngỡ, nhưng càng khám phá càng thấy thú vị.\r\n\r\nHồi mới sang, tôi sống cùng với bố mẹ chồng. Họ đều ngoài 60 tuổi nhưng vẫn chưa nghỉ hưu, bố làm bảo trì điện còn mẹ làm đóng gói hàng trong một công ty. Sáng nào mẹ cũng dậy sớm để làm cơm hộp cho cả nhà mang đi làm. Mẹ còn cẩn thận để dành một phần cơm ngon lành cho tôi ngủ dậy ăn. Tôi ở nhà chỉ dọn dẹp, rửa chén bát.', 'news4.jpg', '2018-11-04 03:21:38'),
(5, 'Máy bay trinh sát Nga lướt trên đầu soái hạm Mỹ tập trận gần Na Uy', 'Chiếc Tu-142 bay tuần tra ngay phía trên kỳ hạm của Hạm đội 6 Mỹ đang tham gia cuộc tập trận Trident Juncture 2018 của NATO.', 'Một máy bay trinh sát chống ngầm Tu-142 Nga ngày 2/11 xuất hiện ngay trên đầu các binh sĩ thủy quân lục chiến Mỹ đang xếp hàng để chụp ảnh lưu niệm trên boong tàu USS Mount Whitney, theo RT. USS Mount Whitney là soái hạm của Hạm đội 6 Mỹ, đang có mặt ở Biển Barents ngoài khơi Na Uy để tham gia cuộc diễn tập Trident Juncture 2018 của NATO.\r\n\r\nBộ Quốc phòng Nga xác nhận hai máy bay Tu-142 ngày 2/11 thực hiện chuyến bay tuần tra thường xuyên dài 12 giờ trên hải phận quốc tế ngay ngoài khơi Na Uy.', 'news5.jpg', '2018-11-04 03:22:09'),
(6, 'Kẻ bạo dâm ở Mỹ lập phòng tra tấn di động trên xe container', 'Robert Ben Rhoades trong 15 năm đã cho nhiều phụ nữ đi nhờ xe và tra tấn, xâm hại tình dục.', 'Rạng sáng ngày 1/4/1990, bắt gặp một xe container dừng bên đường cao tốc liên bang số 10 (bang Arizona, Mỹ), đèn khẩn cấp nháy sáng, một cảnh sát dừng lại để trợ giúp lái xe.\r\n\r\nNghe thấy tiếng ồn ào, viên cảnh sát soi đèn vào trong khoang lái. Anh bắt gặp một người phụ nữ khỏa thân bị xích chặt vào thành xe. Thấy ánh đèn, một người đàn ông chậm rãi lộ diện từ sau lớp vải ngăn cách khoang ngủ và khoang lái. Người phụ nữ bắt đầu la hét trong hoảng loạn. Viên cảnh sát yêu cầu người đàn ông bước ra khỏi xe, cùm tay và nhốt trong xe cảnh sát. Anh giải thoát cho cô gái và dẫn hai người về đồn.', 'news6.jpg', '2018-11-04 03:22:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `role`, `avatar`) VALUES
(1, 'Admin', 'admin', '123456', 'admin', 'user1.png'),
(2, 'Nam', 'nam', '123456', 'user', 'user2.png'),
(3, 'Quang', 'quang', '123456', 'user', 'user3.png'),
(4, 'Trung', 'trung', '123456', 'user', 'user4.png'),
(5, 'Giang', 'giang', '123456', 'user', 'user5.png'),
(6, 'Huy', 'huy', '123456', 'user', 'user6.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
