-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 04, 2018 lúc 08:28 AM
-- Phiên bản máy phục vụ: 10.1.25-MariaDB
-- Phiên bản PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `demo_mvc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `time`) VALUES
(1, '8 tin đồn về Captain Marvel được trailer phim xác nhận', 'Captain Marvel là bộ phim riêng về nữ siêu anh hùng cùng tên vô cùng nổi tiếng của nhà Marvel. Ngày hôm qua, siêu phẩm đã tung ra trailer đầu tiên kéo dài gần 2 phút, phần nào tiết lộ những điều mà người hâm mộ đã mong chờ và đồn đoán bấy lâu.', '2018-09-20 03:12:10'),
(2, '4 cú \"twist\" kinh điển nhất phim Hàn: Ai xem xong số 2 cũng bị chấn thương tinh thần', 'Điện ảnh Hàn ngày nay đang được biết đến như là một trong những nền điện ảnh có sức sống mạnh nhất, dồi dào năng lượng và sức sáng tạo nhất, thậm chí còn có phần tươi mới và hấp dẫn hơn cả phim Hollywood đang quá thực dụng và kiệt quệ. Thành quả này là do công sức sáng tạo của một thế hệ các nhà làm phim, nhà biên kịch Hàn Quốc không ngừng cho ra đời những bộ phim có tính đột phá, nội dung đa dạng, kể chuyện hấp dẫn. Nhất là trong thể loại kinh dị, ly kỳ, điện ảnh Hàn Quốc tỏ ra đặc biệt cao tay trong việc cài cắm các cú plot twist (nút thắt câu chuyện), đưa người xem từ trạng thái cảm xúc này sang trạng thái cảm xúc khác một cách ngoạn mục. Dưới đây là danh sách những cú twist đáng nhớ nhất đó.', '0000-00-00 00:00:00'),
(3, 'Mách fan phim kinh dị chơi trung thu làm sao cho ngầu: Bộ đôi tác phẩm về những kẻ thích đùa với quỷ dữ', 'Một câu chuyện tìm quỷ đôi khi khiến người ta cảm thấy liều lĩnh tới mức phấn khích, nhưng với những kẻ trong hai tác phẩm kinh dị mới nhất là Hide in the Light (Ác Quỷ Bóng Đêm) và Muse (Quỷ Dữ Biết Yêu) thì như vậy vẫn là chưa đủ. Không chỉ chủ động tìm quỷ, họ thậm chí còn sẵn sàng \"đánh cược\" với hung thần chỉ để thử thách, thỏa mãn những khát vọng cá nhân. Trung Thu này, xem ra fan kinh dị nếu đã \"xơi\" xong mâm cỗ của \"chị Valak\" The Nun ngoài rạp, bạn vẫn còn hai lựa chọn đáng cân nhắc dưới đây!', '0000-00-00 00:00:00'),
(4, '\"Johnny English 3\": Không phải điệp viên, mà là Mr. Bean tái xuất', 'Nếu có câu gì tóm tắt được Johnny English Strikes Again (Johhny English Tái Xuất) thì đó là \"Khi Mr. Bean làm điệp viên\". Nếu như hai phần phim trước về Johnny English của Rowan Atkinson còn giới hạn những trò hề của điệp viên này ở mức chấp nhận được thì phần 3 đã đẩy chúng lên một tiêu chuẩn ngớ ngẩn mới. Tóm lại thì bạn có thể thích nó đấy, nếu như bạn hâm mộ Mr. Bean. ', '0000-00-00 00:00:00'),
(5, 'Captain Marvel \"giáng thế\", đấm cả người già ngay trailer nóng hổi đầu tiên', 'Vậy là trailer đầu tiên của bom tấn Captain Marvel đã được tung ra. Nữ siêu anh hùng được chờ đợi sẽ gánh vác trọng trách \"cứu giá\" đội Avengers cuối cùng cũng đã xuất hiện trong những thước phim hoành tráng, từ Trái Đất ra ngoài không gian. ', '0000-00-00 00:00:00'),
(6, 'Gã hề phản diện Joker lộ tên thật và tạo hình nhếch nhác trong phim riêng', 'Cuối cùng thì những chi tiết đầu tiên liên quan tới dự án phim riêng về nhân vật Joker đã được hé lộ bao gồm tên và tạo hình nhân vật. Trong bức ảnh được chia sẻ trên Instagram, đạo diễn Todd Phillips đã chú thích \"Arthur\" qua đó khẳng định giả thuyết của người hâm mộ về việc Joker sẽ có tên là Arthur Fleck trong bộ phim này. Bên cạnh đó điều khiến fan ngạc nhiên là tạo hình có phần nhếch nhác của Joaquin Phoenix khác xa với hình ảnh \"rich kid\" hoàng tử tội phạm mà Jared Leto từng dày công gây dựng không lâu trước đó trong Suicide Squad.', '0000-00-00 00:00:00'),
(7, 'Valak Phiêu Lưu Ký và mối thù truyền kiếp với hai chị em trừ ma diệt quỷ', 'Lấy cảm hứng từ một chúa quỷ huyền thoại lẫn thế lực hắc ám từng đeo bám gia đình vợ chồng Warren, đạo diễn James Wan đã sáng tạo nên hình tượng ma sơ Valak (Bonnie Aarons) - một trong những nhân vật nổi bật của vũ trụ kinh dị The Conjuring. Tuy chỉ mới góp mặt lần đầu tiên ở phần phim The Conjuring 2 (2016), nhưng thực tế, hắn ta đã xuất hiện trên trần thế cách đây vài thế kỉ trước. Câu chuyện cụ thể ra sao, xin mời bạn theo dõi Valak Phiêu Lưu Ký ngay bên dưới.', '0000-00-00 00:00:00'),
(8, '\r\n\"Người được chọn\" Supergirl có gì mà khiến hãng DC \"lờ tịt\" cả chàng đẹp trai Superman?', 'Tin tức Henry Cavill chia tay vai diễn Superman và rời khỏi vũ trụ DC đã làm người hâm mộ hoang mang khi không biết tương lai của vũ trụ DC (DCEU) rồi sẽ đi về đâu. Cùng thời điểm đó, Warner Bros. đã công bố kế hoạch tương lai về việc tập trung cho người chị họ Supergirl thay vì làm tiếp các phần phim Superman. Fan của Cavill có thể sẽ rất buồn, nhưng hãng phim có đủ lý do để chuyển hướng tập trung sang nhân vật này. ', '0000-00-00 00:00:00'),
(9, 'Dự báo thời tiết: Mùa đông năm nay sẽ đến sớm và lạnh nhất 5 năm gần đây', 'Cụ thể, năm 2017, đợt gió mùa Đông Bắc đầu tiên đến vào ngày 13-10; năm 2016 là 29-10; năm 2015 là 9-10; năm 2014 là 4-10 và 2013 là 25-9.\r\nTrong khi năm nay, từ 7-9 đã xuất hiện đợt không khí lạnh đầu tiên. Dự báo trong tháng 10 sẽ có khoảng 3-4 đợt không khí lạnh tràn xuống nước ta.\r\nCũng theo ông Hải, không khí lạnh trong tháng 10 và 11 sẽ có 2 loại, một là gió mùa Đông Bắc gây mưa thu diện rộng, hai là không khí lạnh tăng cường chỉ gây gió mạnh trên biển.', '2018-10-04 04:23:47'),
(12, 'Đã đến lúc bạn đọc những điều này và muốn thay đổi bản thân ngay lập tức', 'Khi còn nhỏ, ai trong chúng ta cũng đều mong ước được lớn lên thật nhanh để làm một người trưởng thành. Rồi sau này khi ước mơ đã trở thành sự thật mới thấy, hoá ra cuộc sống của một người trưởng thành chẳng hề đơn giản. Từ học hành, công việc cho đến gia đình, bạn bè, những mối quan hệ xã hội và cả chuyện yêu đương... cảm giác như mỗi ngày trôi qua, có 1001 kiểu áp lực đặt lên đôi vai của chúng ta vậy!\r\n\r\nSự áp lực, cảm giác mệt mỏi, những kì vọng và cả những thất vọng, hụt hẫng - ai hẳn cũng đã và đang trải qua những thứ như vậy trên hành trình tuổi trẻ của mình. Bạn có thể cảm thấy kiệt sức và muốn nghỉ ngơi, nhưng đừng vì vậy mà từ bỏ cả một hành trình trước mắt. Bạn có thể chưa là một con người hoàn hảo, nhưng điều đó không có nghĩa rằng mãi mãi bạn không thể nào tốt hơn.\r\n\r\nHoá ra bao nhiêu sóng gió, vấp ngã của cuộc đời đến cuối cùng cũng chỉ tóm gọn lại trong vài bài học đơn giản. Những câu nói dưới đây có thể vốn ban đầu không dành cho bạn, nhưng là một người trẻ, đảm bảo ai ai cũng đều tìm thấy chút hình bóng của mình trong những dòng chữ này. ', '2018-10-04 04:47:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  `creatdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `level`, `creatdate`) VALUES
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 0, '2018-10-01 11:58:45'),
(8, 'imngocnga', '2cc5ce35a63a285423f60cec763df13f', 'Ngoc Nga', 1, '2018-10-04 06:47:36');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
