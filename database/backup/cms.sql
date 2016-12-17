/*
Navicat MySQL Data Transfer

Source Server         : maria
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : cms

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-12-17 23:20:14
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent` int(10) DEFAULT '0',
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` int(10) DEFAULT NULL,
  `status` int(10) DEFAULT '0',
  `lang` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `viewhome` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('7', '0', 'Tin tức', 'tin-tuc', '0', '1', 'vi', '2016-09-29 11:03:40', '2016-09-29 04:03:40', null);
INSERT INTO `category` VALUES ('12', '0', 'Dịch vụ', 'dich-vu', '1', '1', 'vi', '2016-12-11 02:18:18', '2016-12-10 19:18:18', null);
INSERT INTO `category` VALUES ('13', '7', 'Tin hoạt động', 'tin-tuc/tin-hoat-dong', '0', '1', 'vi', '2016-12-11 02:47:48', '2016-12-10 19:47:48', null);
INSERT INTO `category` VALUES ('14', '7', 'Test1', 'tin-tuc/test1', '2', '1', 'vi', '2016-12-11 02:16:21', '2016-12-10 19:16:21', null);
INSERT INTO `category` VALUES ('15', '7', 'Kinh tế', 'tin-tuc/kinh-te', '1', '1', 'vi', '2016-12-11 02:16:21', '2016-12-10 19:16:21', null);
INSERT INTO `category` VALUES ('22', '12', 'Trò chơi trong nhà', 'dich-vu/tro-choi-trong-nha', '3', '1', 'vi', '2016-12-11 02:53:59', '2016-12-10 19:18:09', null);
INSERT INTO `category` VALUES ('23', '12', 'Trò chơi ngoài trời', 'dich-vu/tro-choi-ngoai-troi', '4', '1', 'vi', '2016-12-10 19:18:48', '2016-12-10 19:18:48', null);
INSERT INTO `category` VALUES ('24', '12', 'Thể thao trong nhà', 'dich-vu/the-thao-trong-nha', '5', '1', 'vi', '2016-12-10 19:19:11', '2016-12-10 19:19:11', null);
INSERT INTO `category` VALUES ('25', '12', 'Thể thao ngoài trời', 'dich-vu/the-thao-ngoai-troi', '6', '1', 'vi', '2016-12-10 19:19:26', '2016-12-10 19:19:26', null);
INSERT INTO `category` VALUES ('26', '12', 'Ăn uống', 'dich-vu/an-uong', '7', '1', 'vi', '2016-12-10 19:19:51', '2016-12-10 19:19:51', null);
INSERT INTO `category` VALUES ('27', '12', 'Bán hàng', 'dich-vu/ban-hang', '8', '1', 'vi', '2016-12-10 19:20:09', '2016-12-10 19:20:09', null);
INSERT INTO `category` VALUES ('28', '12', 'Tổ chức sự kiện', 'dich-vu/to-chuc-su-kien', '9', '1', 'vi', '2016-12-10 19:20:31', '2016-12-10 19:20:31', null);
INSERT INTO `category` VALUES ('29', '12', 'Tour du lịch', 'dich-vu/tour-du-lich', '10', '1', 'vi', '2016-12-10 19:20:58', '2016-12-10 19:20:58', null);
INSERT INTO `category` VALUES ('30', '12', 'Bán vé máy bay', 'dich-vu/ban-ve-may-bay', '11', '1', 'vi', '2016-12-10 19:21:19', '2016-12-10 19:21:19', null);
INSERT INTO `category` VALUES ('31', '12', 'Dịch vụ bảo vệ', 'dich-vu/dich-vu-bao-ve', '12', '1', 'vi', '2016-12-10 19:21:46', '2016-12-10 19:21:46', null);

-- ----------------------------
-- Table structure for media
-- ----------------------------
DROP TABLE IF EXISTS `media`;
CREATE TABLE `media` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_obj` int(10) DEFAULT NULL,
  `type` tinyint(1) DEFAULT '0',
  `img_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_description` text COLLATE utf8_unicode_ci,
  `path_thumb` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `path_full` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of media
-- ----------------------------
INSERT INTO `media` VALUES ('1', '1', '0', 'ảnh 1 1', 'ảnh slide 1', 'anh-1-1_slide1.jpg', '/images/admin/files/12507451_545867358907804_7979913525610331269_n.jpg', 'http://localhost', '2016-12-11 04:34:38', '2016-12-10 21:34:38');
INSERT INTO `media` VALUES ('2', '1', '0', 'ảnh 2', 'slide 2', 'anh-2_slide1.jpg', '/images/admin/files/11896260_491702007657673_3877675263664202134_n.jpg', 'http://localhost', '2016-12-11 04:34:48', '2016-12-10 21:34:48');
INSERT INTO `media` VALUES ('6', '1', '0', 'pic 6', 'xyz', 'pic-6_slide1.jpg', '/images/admin/files/945867_539979719496568_1127823345394084773_n.jpg', 'abc', '2016-12-11 04:34:58', '2016-12-10 21:34:58');
INSERT INTO `media` VALUES ('8', '4', '0', 'Tiến độ bàn giao đúng thời hạn cam kết', 'Việt nam được xem là điểm đến mới đầy tiềm năng của du lịch quốc tế, vì thế đầu tư vào bất động sản nghỉ', 'tien-do-ban-giao-dung-thoi-han-cam-ket_slide1.jpg', '/images/admin/images/slide/slide1.jpg', 'sd', '2016-09-20 09:02:46', '2016-09-20 02:02:46');
INSERT INTO `media` VALUES ('10', '4', '0', 'Tiến độ bàn giao đúng thời hạn cam kết', 'Việt nam được xem là điểm đến mới đầy tiềm năng của du lịch quốc tế, vì thế đầu tư vào bất động sản nghỉ', 'tien-do-ban-giao-dung-thoi-han-cam-ket_conten_loiichdautu.png', '/images/admin/images/slide/conten_loiichdautu.png', 'as', '2016-09-20 08:50:15', '2016-09-20 01:50:15');
INSERT INTO `media` VALUES ('11', '4', '0', 'Việt nam được xem là điểm đến mới đầy tiềm năng ', 'Việt nam được xem là điểm đến mới đầy tiềm năng của du lịch quốc tế, vì thế đầu tư vào bất động sản nghỉ', 'viet-nam-duoc-xem-la-diem-den-moi-day-tiem-nang_conten_loiichdautu.png', '/images/admin/images/slide/conten_loiichdautu.png', 'sdf', '2016-09-20 08:50:28', '2016-09-20 01:50:28');
INSERT INTO `media` VALUES ('12', '4', '0', 'Việt nam được xem là điểm đến mới', 'Việt nam được xem là điểm đến mới đầy tiềm năng của du lịch quốc tế, vì thế đầu tư vào bất động sản nghỉ', 'viet-nam-duoc-xem-la-diem-den-moi_conten_loiichdautu.png', '/images/admin/images/slide/conten_loiichdautu.png', 'ádfas', '2016-09-20 08:50:36', '2016-09-20 01:50:36');
INSERT INTO `media` VALUES ('13', '4', '0', 'Tiến độ bàn giao đúng thời hạn cam kết', 'Việt nam được xem là điểm đến mới đầy tiềm năng của du lịch quốc tế, vì thế đầu tư vào bất động sản nghỉ', 'tien-do-ban-giao-dung-thoi-han-cam-ket_conten_loiichdautu.png', '/images/admin/images/slide/conten_loiichdautu.png', 'sd', '2016-09-20 08:50:45', '2016-09-20 01:50:45');
INSERT INTO `media` VALUES ('14', '24', '1', 'sp1 dsf', 'sfd', 'sp1-dsf_slide-chi-tiet.jpg', '/images/admin/images/post/slide-chi-tiet.jpg', 'abc', '2016-09-20 09:25:26', '2016-09-20 02:25:26');
INSERT INTO `media` VALUES ('15', '24', '1', 'sp2', 'ádadad', 'sp2_slide-chi-tiet.jpg', '/images/admin/images/post/slide-chi-tiet.jpg', 'sdas sadada', '2016-09-20 09:25:35', '2016-09-20 02:25:35');
INSERT INTO `media` VALUES ('16', '2', '0', 'ảnh 1', 'df', 'anh-1_right_qc1.jpg', '/images/admin/files/12650916_548998438594696_4309564370475331379_n.jpg', 'df', '2016-12-11 04:05:37', '2016-12-10 21:05:37');
INSERT INTO `media` VALUES ('17', '5', '0', 'ảnh 1', 'dsf', 'anh-1_right_tinrao1.jpg', '/images/admin/images/advertisement/right_tinrao1.jpg', 'df', '2016-09-20 09:37:06', '2016-09-20 02:37:06');
INSERT INTO `media` VALUES ('18', '5', '0', 'anh2', 's', 'anh2_right_tinrao2.jpg', '/images/admin/images/advertisement/right_tinrao2.jpg', 's', '2016-09-20 09:37:13', '2016-09-20 02:37:13');
INSERT INTO `media` VALUES ('19', '7', '0', 'a1', '', null, '/images/admin/images/slide/slide1.jpg', '', '2016-09-29 07:04:25', '2016-09-29 07:04:25');
INSERT INTO `media` VALUES ('20', '8', '0', 'ảnh hoạt động', 'acd', null, '/images/admin/files/15203279_714175835410288_4950455490887737955_n.jpg', 'anh-hoat-dong', '2016-12-11 03:58:10', '2016-12-10 20:58:10');
INSERT INTO `media` VALUES ('21', '9', '0', 'as', 'ád', null, '/images/admin/files/12573016_548998435261363_2033968578888933088_n.jpg', 'ad', '2016-12-10 21:25:07', '2016-12-10 21:25:07');
INSERT INTO `media` VALUES ('22', '10', '0', 'a1', 'as', null, '/images/admin/files/12650916_548998438594696_4309564370475331379_n.jpg', '', '2016-12-17 15:19:09', '2016-12-17 15:19:09');

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `menu_parent` int(11) DEFAULT '0',
  `menu_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menu_slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menu_type` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menu_status` int(11) DEFAULT '0',
  `menu_position` enum('top','bottom') COLLATE utf8_unicode_ci DEFAULT 'top',
  `menu_order` int(11) DEFAULT '0',
  `lang` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('12', '0', 'Giới thiệu', 'gioi-thieu', 'page', '1', 'top', '3', 'vi', '2015-05-12 10:49:46', '2016-12-10 21:58:34');
INSERT INTO `menu` VALUES ('16', '0', 'Trang chủ', '/', 'link', '1', 'top', '0', 'vi', '2016-09-08 11:29:47', '2016-12-10 19:14:15');
INSERT INTO `menu` VALUES ('17', '0', 'Liên hệ', 'lien-he', 'link', '1', 'top', '6', 'vi', '2016-09-08 11:30:44', '2016-12-10 22:06:26');
INSERT INTO `menu` VALUES ('30', '0', 'Dịch vụ', 'dich-vu', 'category', '1', 'top', '1', 'vi', '2016-09-23 07:28:20', '2016-12-10 21:58:34');
INSERT INTO `menu` VALUES ('35', '0', 'Tin tức', 'tin-tuc', 'category', '1', 'top', '2', 'vi', '2016-09-23 07:41:30', '2016-12-10 21:58:34');
INSERT INTO `menu` VALUES ('42', '0', 'LIÊN KẾT WEB', 'dongamruouvn', 'link', '1', 'bottom', '0', 'vi', '2016-12-10 20:22:30', '2016-12-10 20:24:06');
INSERT INTO `menu` VALUES ('43', '0', 'Chính sách & Quy định', 'chinh-sach-quy-dinh', 'link', '1', 'bottom', '0', 'vi', '2016-12-10 20:22:56', '2016-12-10 20:22:56');
INSERT INTO `menu` VALUES ('44', '0', 'Hướng dẫn khách hàng', 'huong-dan-khach-hang', 'link', '1', 'bottom', '0', 'vi', '2016-12-10 20:23:18', '2016-12-10 20:23:18');
INSERT INTO `menu` VALUES ('45', '42', 'lethuy.gov.vn', 'http://lethuy.gov.vn', 'link', '1', 'bottom', '0', 'vi', '2016-12-10 20:24:56', '2016-12-10 20:24:56');
INSERT INTO `menu` VALUES ('46', '42', 'lethuy.edu.vn', 'http://lethuy.edu.vn', 'link', '1', 'bottom', '0', 'vi', '2016-12-10 20:25:38', '2016-12-10 20:26:23');
INSERT INTO `menu` VALUES ('47', '42', 'tourquangbinh.com', 'http://tourquangbinh.com', 'link', '1', 'bottom', '0', 'vi', '2016-12-10 20:26:08', '2016-12-10 20:26:08');
INSERT INTO `menu` VALUES ('48', '42', 'quangbinhtourism.vn', 'http://quangbinhtourism.vn', 'link', '1', 'bottom', '0', 'vi', '2016-12-10 20:27:34', '2016-12-10 20:27:34');
INSERT INTO `menu` VALUES ('49', '43', 'Chính sách ưu đãi', 'chinh-sach-uu-dai', 'link', '1', 'bottom', '0', 'vi', '2016-12-10 20:28:25', '2016-12-10 20:28:25');
INSERT INTO `menu` VALUES ('50', '43', 'Chính sách vận chuyển', 'chinh-sach-van-chuyen', 'link', '1', 'bottom', '0', 'vi', '2016-12-10 20:28:42', '2016-12-10 20:28:42');
INSERT INTO `menu` VALUES ('51', '43', 'Quy định giao hàng & thanh toán', 'quy-dinh-giao-hang-thanh-toan', 'link', '1', 'bottom', '0', 'vi', '2016-12-10 20:29:04', '2016-12-10 20:29:04');
INSERT INTO `menu` VALUES ('52', '43', 'Hòm thư góp ý & khiếu nại', 'hom-thu-gop-y-khieu-nai', 'link', '1', 'bottom', '0', 'vi', '2016-12-10 20:29:21', '2016-12-10 20:29:21');
INSERT INTO `menu` VALUES ('53', '44', 'Tư vấn mua hàng', 'tu-van-mua-hang', 'link', '1', 'bottom', '0', 'vi', '2016-12-10 20:29:41', '2016-12-10 20:29:41');
INSERT INTO `menu` VALUES ('54', '44', 'Hướng dẫn mua hàng ', 'huong-dan-mua-hang', 'link', '1', 'bottom', '0', 'vi', '2016-12-10 20:30:07', '2016-12-10 20:30:07');
INSERT INTO `menu` VALUES ('55', '44', 'Hướng dẫn mua online', 'huong-dan-mua-online', 'link', '1', 'bottom', '0', 'vi', '2016-12-10 20:30:27', '2016-12-10 20:30:27');
INSERT INTO `menu` VALUES ('56', '44', 'Hướng dẫn thanh toán', 'huong-dan-thanh-toan', 'link', '1', 'bottom', '0', 'vi', '2016-12-10 20:30:46', '2016-12-10 20:30:57');
INSERT INTO `menu` VALUES ('57', '0', 'Chính sách & Quy định', 'chinh', 'link', '1', 'top', '4', 'vi', '2016-12-10 22:05:30', '2016-12-10 22:05:43');
INSERT INTO `menu` VALUES ('58', '0', 'Hướng dẫn mua hàng ', 'huong-dan', 'link', '1', 'top', '5', 'vi', '2016-12-10 22:06:21', '2016-12-10 22:06:26');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('2015_05_19_014556_entrust_setup_tables', '1');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `image_path_full` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `features` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `lang` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('25', '7', 'Trung tâm Giải trí và Thể thao Thế Hệ Mới, huyện Lệ Thuỷ, tỉnh Quảng Bình đang đẩy nhanh...', 'trung-tam-giai-tri-va-the-thao-the-he-moi-huyen-le-thuy-tinh-quang-binh-dang-day-nhanh', 'sdf', '/images/admin/files/11896260_491702007657673_3877675263664202134_n.jpg', null, '', '1', '0,1', null, 'vi', '2016-09-21 06:18:42', '2016-12-17 15:34:20');
INSERT INTO `news` VALUES ('26', '7', 'THÔNG BÁO KHUYẾN MÃI BÓNG ĐÁ', 'thong-bao-khuyen-mai-bong-da', 'đấ', '/images/admin/files/15203279_714175835410288_4950455490887737955_n.jpg', null, '', '1', '0,1', null, 'vi', '2016-09-21 06:23:29', '2016-12-17 15:34:36');
INSERT INTO `news` VALUES ('29', '7', 'Khu vui chơi thể thao thế hệ mới mai khai trương ca Fe', 'khu-vui-choi-the-thao-the-he-moi-mai-khai-truong-ca-fe', '&aacute;dsa', '/images/admin/files/tinhte_vn_4d21151e8b0c8__TMH3611.jpg', null, '', '1', '0,1,2', null, 'vi', '2016-09-22 01:25:55', '2016-12-17 15:32:48');

-- ----------------------------
-- Table structure for option
-- ----------------------------
DROP TABLE IF EXISTS `option`;
CREATE TABLE `option` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `val` longtext COLLATE utf8_unicode_ci,
  `type` int(10) DEFAULT NULL,
  `lang` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of option
-- ----------------------------
INSERT INTO `option` VALUES ('1', 'url', 'http://giaitrilethuy.vn', '1', 'vi', '2016-12-11 02:57:56', '2016-12-10 19:57:56');
INSERT INTO `option` VALUES ('2', 'name', 'Trung tâm Giải trí và Thể thao Thế Hệ Mới', '1', 'vi', '2016-12-11 02:57:56', '2016-12-10 19:57:56');
INSERT INTO `option` VALUES ('3', 'address', 'Tầng 12, Tòa Nhà SCB, .....', '1', 'vi', '2016-12-11 02:57:56', '2016-12-10 19:57:56');
INSERT INTO `option` VALUES ('4', 'email', 'giaitrilethuy@aquilan.com', '1', 'vi', '2016-12-11 02:57:56', '2016-12-10 19:57:56');
INSERT INTO `option` VALUES ('5', 'phone', '1900 5454 40', '1', 'vi', '2016-12-11 02:57:56', '2016-12-10 19:57:56');
INSERT INTO `option` VALUES ('6', 'logo', '/images/admin/images/logo.jpg', '1', 'vi', '2016-12-11 02:57:56', '2016-12-10 19:57:56');
INSERT INTO `option` VALUES ('7', 'map', 'https://goo.gl/maps/9ynWsMj6PMQ2', '1', 'vi', '2016-12-11 02:57:56', '2016-12-10 19:57:56');
INSERT INTO `option` VALUES ('8', 'copyright', '2016 Trung tâm Giải trí và Thể thao Thế Hệ Mới', '1', 'vi', '2016-12-11 02:57:56', '2016-12-10 19:57:56');
INSERT INTO `option` VALUES ('9', 'title', 'Trung tâm Giải trí và Thể thao Thế Hệ Mới', '2', 'vi', '2016-12-04 14:19:23', '2016-12-04 07:19:23');
INSERT INTO `option` VALUES ('10', 'favicon', '/images/admin/images/Icon/mastercard.png', '2', 'vi', '2016-12-04 14:19:23', '2016-12-04 07:19:23');
INSERT INTO `option` VALUES ('11', 'description', '2008 Công Ty Cổ Phần Dịch Vụ Chu Du Hai Bốn', '2', 'vi', '2016-12-04 14:19:23', '2016-12-04 07:19:23');
INSERT INTO `option` VALUES ('12', 'keywords', 'Ăn uống, Bán hàng, Tổ chức sự kiện, Tour du lịch và bán vé máy bay, Bảo vệ', '2', 'vi', '2016-12-04 14:19:23', '2016-12-04 07:19:23');
INSERT INTO `option` VALUES ('13', 'header', '<p>Header ass as dfdf</p>\r\n', '3', 'vi', '2016-09-29 11:15:58', '2016-09-29 04:15:58');
INSERT INTO `option` VALUES ('14', 'footer', '            <footer id=\"footer\">\r\n                <div class=\"container\">\r\n                    <div class=\"row\">\r\n                        <div class=\"col-md-12 col-sm-12\">\r\n                            <div style=\"background-color: #ff9b1d;height: 5px;margin-bottom: 10px;\"></div>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n                <div class=\"container\">\r\n                        <div class=\"row\">\r\n                            <div class=\"col-md-4 col-sm-4\">\r\n                                <div class=\"block-widget1 block\">\r\n                                        <a title=\"\">\r\n                                                <img src=\"/images/admin/images/logo/logo-footer.png\" class=\"logo\" alt=\"\">\r\n                                        </a>\r\n                                        <p>Chudu24 luôn không ngừng đẩy mạnh hoạt động và phát triển, cả về sản phẩm, dịch vụ và đội ngũ, nhằm đáp ứng tốt nhất nhu cầu của khách hàng.</p>\r\n                                        <span id=\"phone-contact\"><i class=\"fa fa-phone\"></i>Hotline:<span class=\"phone\">1900 54 54 40</span></span>\r\n                                        <a href=\"mailto:datphong@chudu24.com\">datphong@chudu24.com</a>\r\n                                        <div class=\"best-the form-inline\">\r\n                                            <h3>Đừng bỏ lỡ cơ hội giá tốt!</h3>\r\n                                            <p>Chudu24 sẽ cập nhật thường xuyên về những ưu đãi, khuyến mãi mới và hot nhất trong tháng đến quý khách.</p>\r\n                                            <div class=\"input-group newsletter\">\r\n                                                <input type=\"email\" required=\"\" placeholder=\"Email của bạn\" class=\"form-control\" id=\"txt-newsletter-email\">\r\n                                                <span class=\"input-group-addon subscrible-submit-btn\">\r\n                                                    <button name=\"subscrible_submit\" type=\"submit\" id=\"btn-newsletter-email\"><i class=\"fa fa-check\"></i></button>\r\n                                                </span>\r\n                                            </div>\r\n                                            <p style=\"font-size: 11px;\">Chúng tôi không bao giờ chia sẻ thông tin của bạn.</p>\r\n                                        </div>\r\n                                </div>\r\n                            </div>\r\n                            <div class=\"col-md-4 col-sm-4\">\r\n                                <div class=\"block-widget3 block\">\r\n                                    <h3>AQUI.LAND</h3>\r\n                                    <ul class=\"menu-about\">\r\n                                        <li><i class=\"fa fa-stop\" aria-hidden=\"true\"></i><a href=\"\" title=\"\">Hợp Tác Với Aqui.lan</a></li>\r\n                                        <li><i class=\"fa fa-stop\" aria-hidden=\"true\"></i><a href=\"\" title=\"\">Nói Về Aqui.lan</a></li>\r\n                                        <li><i class=\"fa fa-stop\" aria-hidden=\"true\"></i><a href=\"\" title=\"\">Lợi ích đầu tư</a></li>\r\n                                        <li><i class=\"fa fa-stop\" aria-hidden=\"true\"></i><a href=\"\" title=\"\">Dịch vụ</a></li>\r\n                                        <li><i class=\"fa fa-stop\" aria-hidden=\"true\"></i><a href=\"\" title=\"\">Hình Ảnh Aqui.lan</a></li>\r\n                                        <li><i class=\"fa fa-stop\" aria-hidden=\"true\"></i><a href=\"\" title=\"\">Voucher quà tặng</a></li>\r\n                                        <li><i class=\"fa fa-stop\" aria-hidden=\"true\"></i><a href=\"\" title=\"Câu Hỏi Thường Gặp\">Câu Hỏi Thường Gặp</a></li>\r\n                                        <li><i class=\"fa fa-stop\" aria-hidden=\"true\"></i><a href=\"\" title=\"Chính Sách Quyền Riêng Tư\">Chính Sách Quyền Riêng Tư</a></li>\r\n                                        <li><i class=\"fa fa-stop\" aria-hidden=\"true\"></i><a href=\"\" title=\"Quy Chế Sàn Giao Dịch TMĐT Chudu24\">Quy Chế</a></li>\r\n                                    </ul>\r\n                                </div>\r\n                                <div class=\"block-payment\">\r\n                                    <h3>Hỗ trợ thanh toán thẻ</h3>\r\n                                    <ul class=\"list-inline list-payment-methods\">\r\n                                        <li>\r\n                                            <img alt=\"Visa\" src=\"/images/admin/images/Icon/visa.png\"></li>\r\n                                        <li>\r\n                                            <img alt=\"Master Card\" src=\"/images/admin/images/Icon/mastercard.png\"></li>\r\n                                        <li>\r\n                                            <img alt=\"American Express\" src=\"/images/admin/images/Icon/american-express.png\"></li>\r\n                                        <li>\r\n                                            <img alt=\"OnePay\" src=\"/images/admin/images/Icon/onepay.png\"></li>\r\n                                    </ul>\r\n                                </div>\r\n                            </div>\r\n                            <div class=\"col-md-4 col-sm-4\">\r\n                                <div class=\"block-widget4 block\">\r\n                                    <h3>Liên hệ</h3>\r\n                                    <ul class=\"menu-contact\">\r\n                                        <li><i class=\"fa fa-building-o\"></i>\r\n                                            <p>Tầng 12, Tòa Nhà SCB, 242 Cống Quỳnh, P.Phạm Ngũ Lão, Q.1, TP.HCM.</p>\r\n                                        </li>\r\n                                        <li><i class=\"fa fa-map-marker\"></i>\r\n                                            <p><a href=\"\">Bản đồ Chudu24</a></p>\r\n                                        </li>\r\n                                        <li><i class=\"fa fa-phone\"></i>\r\n                                            <p>1900 54 54 40</p>\r\n                                        </li>\r\n                                        <li><i class=\"fa fa-envelope-o\"></i>\r\n                                            <p><a href=\"mailto:\">datphong@chudu24.com</a></p>\r\n                                        </li>\r\n                                        <li><i class=\"fa fa-copyright\"></i>\r\n                                            <p>2008 Công Ty Cổ Phần Dịch Vụ<br>Chu Du Hai Bốn.</p>\r\n                                        </li>\r\n                                    </ul>\r\n                                    <ul class=\"socail-link\">\r\n                                        <li><i class=\"fa fa-facebook-square\"></i></li>\r\n                                        <li><i class=\"fa fa-google-plus-square\"></i></li>\r\n                                        <li><i class=\"fa fa-youtube-square\"></i></li>\r\n                                        <li><i class=\"fa fa-twitter-square\"></i></li>\r\n                                    </ul>\r\n                                    <p style=\"clear: both;padding-top: 10px;\">\r\n                                        <a href=\"\">\r\n                                            <img class=\"img-responsive\" src=\"/images/admin/images/logo/logoBCT.png\" title=\"\" alt=\"Đã đăng ký với Bộ Công Thương\">\r\n                                        </a>\r\n                                    </p>\r\n                                </div>\r\n                            </div>\r\n                        </div>\r\n                </div>\r\n            </footer>', '3', 'vi', '2016-09-29 11:15:58', '2016-09-29 04:15:58');
INSERT INTO `option` VALUES ('15', 'post_perpage_front', '15', '4', 'vi', '2016-09-29 11:21:39', '2016-09-29 04:21:39');
INSERT INTO `option` VALUES ('16', 'post_perpage_admin', '15', '4', 'vi', '2016-09-29 11:21:39', '2016-09-29 04:21:39');
INSERT INTO `option` VALUES ('17', 'facebook', 'http://facebook.com/instagram', '5', 'vi', '2016-09-29 11:15:48', '2016-09-29 04:15:48');
INSERT INTO `option` VALUES ('18', 'google+', 'https://plus.google.com/syiewa', '5', 'vi', '2016-09-29 11:15:48', '2016-09-29 04:15:48');
INSERT INTO `option` VALUES ('19', 'youtube', 'http://youtube.com/syiewa', '5', 'vi', '2016-09-29 11:15:49', '2016-09-29 04:15:49');
INSERT INTO `option` VALUES ('20', 'twitter', 'http://twitter.com/syiewa', '5', 'vi', '2016-09-29 11:15:49', '2016-09-29 04:15:49');

-- ----------------------------
-- Table structure for option_mail
-- ----------------------------
DROP TABLE IF EXISTS `option_mail`;
CREATE TABLE `option_mail` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `mail_key` varchar(255) DEFAULT NULL,
  `mail_value` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of option_mail
-- ----------------------------
INSERT INTO `option_mail` VALUES ('1', 'mail_driver', 'SMTP', '2016-09-06 17:58:07', '2016-09-06 10:58:07');
INSERT INTO `option_mail` VALUES ('2', 'mail_host', '', '2016-09-06 17:58:07', '2016-09-06 10:58:07');
INSERT INTO `option_mail` VALUES ('3', 'mail_port', '587', '2016-09-06 17:58:08', '2016-09-06 10:58:08');
INSERT INTO `option_mail` VALUES ('4', 'mail_username', '', '2016-09-06 17:58:08', '2016-09-06 10:58:08');
INSERT INTO `option_mail` VALUES ('5', 'mail_password', '', '2016-09-06 17:58:08', '2016-09-06 10:58:08');
INSERT INTO `option_mail` VALUES ('6', 'mail_encryption', 'TLS', '2016-09-06 17:58:08', '2016-09-06 10:58:08');

-- ----------------------------
-- Table structure for order
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `order_id` int(10) DEFAULT NULL,
  `user_id` int(10) NOT NULL,
  `payment_id` int(10) DEFAULT NULL,
  `order_status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `total_price` int(100) DEFAULT NULL,
  `comments` text,
  `shipping_type` varchar(255) DEFAULT NULL,
  `shipping_fee` varchar(255) DEFAULT NULL,
  `shipping_to` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of order
-- ----------------------------
INSERT INTO `order` VALUES ('10', null, '11', null, null, '2015-06-18 02:48:50', '2015-06-18 02:48:50', '103000', null, 'jne-CTC-4000', '3000', '419');
INSERT INTO `order` VALUES ('11', '1', '11', '3', 'settlement', '2015-06-18 09:54:38', '2015-06-18 02:54:38', '104000', null, 'jne-CTC-4000', '4000', '419');

-- ----------------------------
-- Table structure for order_product
-- ----------------------------
DROP TABLE IF EXISTS `order_product`;
CREATE TABLE `order_product` (
  `order_id` int(10) DEFAULT NULL,
  `product_id` int(10) DEFAULT NULL,
  `quantity` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of order_product
-- ----------------------------
INSERT INTO `order_product` VALUES ('9', '26', '1');
INSERT INTO `order_product` VALUES ('10', '26', '1');
INSERT INTO `order_product` VALUES ('11', '26', '1');

-- ----------------------------
-- Table structure for pages
-- ----------------------------
DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_slug` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_status` int(11) DEFAULT '0',
  `page_order` int(11) DEFAULT '0',
  `page_content` text COLLATE utf8_unicode_ci,
  `lang` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of pages
-- ----------------------------
INSERT INTO `pages` VALUES ('19', 'asd fefd', 'asd-fefd', '1', '0', 'sdsadsa', 'vi', '2016-12-10 08:26:37', '2016-12-10 08:43:42');
INSERT INTO `pages` VALUES ('23', 'asd', 'asd', '1', '0', 'asd adsa', 'vi', '2016-12-10 09:04:19', '2016-12-10 09:04:33');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of permissions
-- ----------------------------
INSERT INTO `permissions` VALUES ('14', 'page-read', null, null, '2015-05-19 14:13:15', '2015-05-19 14:13:15');
INSERT INTO `permissions` VALUES ('15', 'page-create', null, null, '2015-05-19 14:13:15', '2015-05-19 14:13:15');
INSERT INTO `permissions` VALUES ('16', 'page-update', null, null, '2015-05-19 14:13:15', '2015-05-19 14:13:15');
INSERT INTO `permissions` VALUES ('17', 'page-delete', null, null, '2015-05-19 14:13:15', '2015-05-19 14:13:15');
INSERT INTO `permissions` VALUES ('18', 'backend', null, null, '2015-05-20 10:53:35', '2015-05-20 10:53:35');
INSERT INTO `permissions` VALUES ('19', 'product-read', null, null, '2015-05-21 08:58:57', '2015-05-21 08:58:57');
INSERT INTO `permissions` VALUES ('20', 'product-create', null, null, '2015-05-21 08:58:58', '2015-05-21 08:58:58');
INSERT INTO `permissions` VALUES ('21', 'product-update', null, null, '2015-05-21 08:58:58', '2015-05-21 08:58:58');
INSERT INTO `permissions` VALUES ('22', 'product-delete', null, null, '2015-05-21 08:58:58', '2015-05-21 08:58:58');
INSERT INTO `permissions` VALUES ('23', 'slideshow-read', null, null, '2015-05-21 08:58:58', '2015-05-21 08:58:58');
INSERT INTO `permissions` VALUES ('24', 'slideshow-create', null, null, '2015-05-21 08:58:58', '2015-05-21 08:58:58');
INSERT INTO `permissions` VALUES ('25', 'slideshow-update', null, null, '2015-05-21 08:58:58', '2015-05-21 08:58:58');
INSERT INTO `permissions` VALUES ('26', 'slideshow-delete', null, null, '2015-05-21 08:58:59', '2015-05-21 08:58:59');
INSERT INTO `permissions` VALUES ('27', 'category-read', null, null, '2015-05-21 08:58:59', '2015-05-21 08:58:59');
INSERT INTO `permissions` VALUES ('28', 'category-create', null, null, '2015-05-21 08:58:59', '2015-05-21 08:58:59');
INSERT INTO `permissions` VALUES ('29', 'category-update', null, null, '2015-05-21 08:58:59', '2015-05-21 08:58:59');
INSERT INTO `permissions` VALUES ('30', 'category-delete', null, null, '2015-05-21 08:58:59', '2015-05-21 08:58:59');
INSERT INTO `permissions` VALUES ('31', 'user-read', null, null, '2015-05-21 08:58:59', '2015-05-21 08:58:59');
INSERT INTO `permissions` VALUES ('32', 'user-create', null, null, '2015-05-21 08:59:00', '2015-05-21 08:59:00');
INSERT INTO `permissions` VALUES ('33', 'user-update', null, null, '2015-05-21 08:59:00', '2015-05-21 08:59:00');
INSERT INTO `permissions` VALUES ('34', 'user-delete', null, null, '2015-05-21 08:59:00', '2015-05-21 08:59:00');
INSERT INTO `permissions` VALUES ('35', 'options', null, null, '2016-09-08 14:20:27', '2016-09-08 14:20:27');
INSERT INTO `permissions` VALUES ('36', 'post-read', null, null, '2015-05-21 08:58:57', '2015-05-21 08:58:57');
INSERT INTO `permissions` VALUES ('37', 'post-create', null, null, '2015-05-21 08:58:58', '2015-05-21 08:58:58');
INSERT INTO `permissions` VALUES ('38', 'post-update', null, null, '2015-05-21 08:58:58', '2015-05-21 08:58:58');
INSERT INTO `permissions` VALUES ('39', 'post-delete', null, null, '2015-05-21 08:58:58', '2015-05-21 08:58:58');
INSERT INTO `permissions` VALUES ('40', 'menu-read', null, null, '2016-09-22 02:32:33', '2016-09-22 02:32:33');
INSERT INTO `permissions` VALUES ('41', 'menu-create', null, null, '2016-09-22 02:32:33', '2016-09-22 02:32:33');
INSERT INTO `permissions` VALUES ('42', 'menu-update', null, null, '2016-09-22 02:32:33', '2016-09-22 02:32:33');
INSERT INTO `permissions` VALUES ('43', 'menu-delete', null, null, '2016-09-22 02:32:33', '2016-09-22 02:32:33');

-- ----------------------------
-- Table structure for permission_role
-- ----------------------------
DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of permission_role
-- ----------------------------
INSERT INTO `permission_role` VALUES ('14', '3');
INSERT INTO `permission_role` VALUES ('14', '4');
INSERT INTO `permission_role` VALUES ('15', '3');
INSERT INTO `permission_role` VALUES ('15', '4');
INSERT INTO `permission_role` VALUES ('16', '3');
INSERT INTO `permission_role` VALUES ('16', '4');
INSERT INTO `permission_role` VALUES ('17', '3');
INSERT INTO `permission_role` VALUES ('17', '4');
INSERT INTO `permission_role` VALUES ('18', '3');
INSERT INTO `permission_role` VALUES ('18', '4');
INSERT INTO `permission_role` VALUES ('19', '3');
INSERT INTO `permission_role` VALUES ('19', '4');
INSERT INTO `permission_role` VALUES ('20', '3');
INSERT INTO `permission_role` VALUES ('20', '4');
INSERT INTO `permission_role` VALUES ('21', '3');
INSERT INTO `permission_role` VALUES ('21', '4');
INSERT INTO `permission_role` VALUES ('22', '3');
INSERT INTO `permission_role` VALUES ('22', '4');
INSERT INTO `permission_role` VALUES ('23', '3');
INSERT INTO `permission_role` VALUES ('23', '4');
INSERT INTO `permission_role` VALUES ('24', '3');
INSERT INTO `permission_role` VALUES ('24', '4');
INSERT INTO `permission_role` VALUES ('25', '3');
INSERT INTO `permission_role` VALUES ('25', '4');
INSERT INTO `permission_role` VALUES ('26', '3');
INSERT INTO `permission_role` VALUES ('26', '4');
INSERT INTO `permission_role` VALUES ('27', '3');
INSERT INTO `permission_role` VALUES ('27', '4');
INSERT INTO `permission_role` VALUES ('28', '3');
INSERT INTO `permission_role` VALUES ('28', '4');
INSERT INTO `permission_role` VALUES ('29', '3');
INSERT INTO `permission_role` VALUES ('29', '4');
INSERT INTO `permission_role` VALUES ('30', '3');
INSERT INTO `permission_role` VALUES ('30', '4');
INSERT INTO `permission_role` VALUES ('31', '3');
INSERT INTO `permission_role` VALUES ('31', '4');
INSERT INTO `permission_role` VALUES ('32', '3');
INSERT INTO `permission_role` VALUES ('32', '4');
INSERT INTO `permission_role` VALUES ('33', '3');
INSERT INTO `permission_role` VALUES ('33', '4');
INSERT INTO `permission_role` VALUES ('34', '3');
INSERT INTO `permission_role` VALUES ('34', '4');
INSERT INTO `permission_role` VALUES ('35', '3');
INSERT INTO `permission_role` VALUES ('35', '4');
INSERT INTO `permission_role` VALUES ('36', '3');
INSERT INTO `permission_role` VALUES ('36', '4');
INSERT INTO `permission_role` VALUES ('36', '5');
INSERT INTO `permission_role` VALUES ('37', '3');
INSERT INTO `permission_role` VALUES ('37', '4');
INSERT INTO `permission_role` VALUES ('37', '5');
INSERT INTO `permission_role` VALUES ('38', '3');
INSERT INTO `permission_role` VALUES ('38', '4');
INSERT INTO `permission_role` VALUES ('38', '5');
INSERT INTO `permission_role` VALUES ('39', '3');
INSERT INTO `permission_role` VALUES ('39', '4');
INSERT INTO `permission_role` VALUES ('39', '5');
INSERT INTO `permission_role` VALUES ('40', '3');
INSERT INTO `permission_role` VALUES ('40', '4');
INSERT INTO `permission_role` VALUES ('41', '3');
INSERT INTO `permission_role` VALUES ('41', '4');
INSERT INTO `permission_role` VALUES ('42', '3');
INSERT INTO `permission_role` VALUES ('42', '4');
INSERT INTO `permission_role` VALUES ('43', '3');
INSERT INTO `permission_role` VALUES ('43', '4');

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_category` int(10) NOT NULL,
  `product_sku` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `product_price` bigint(100) DEFAULT NULL,
  `product_status` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('23', '7', 'test', 'test 1', 'test', '200000', '1', '2015-05-05 05:55:54', '2016-12-17 16:04:13', 'test-1');
INSERT INTO `product` VALUES ('25', '8', '1231', 'Madrid 4th', 'Madrid 4th', '200000', '1', '2015-05-05 07:38:02', '2015-05-13 02:22:58', 'madrid-4th');
INSERT INTO `product` VALUES ('26', '8', '1212', 'Madrid Home', 'Madrid Home Warna Putih', '100000', '1', '2015-05-12 05:11:49', '2015-05-12 05:11:49', 'jersey/la-liga/madrid-home');
INSERT INTO `product` VALUES ('27', '8', '221313', 'Madrid Away', '', '100000', '1', '2015-05-12 07:05:11', '2015-05-12 07:05:11', 'jersey/la-liga/madrid-away');
INSERT INTO `product` VALUES ('28', '8', '1231', 'Madrid 3rd', '', '100000', '1', '2015-05-12 07:05:55', '2015-05-12 07:05:55', 'jersey/la-liga/madrid-3rd');
INSERT INTO `product` VALUES ('29', '7', 'ád', 'áđá', 'ád', '20000000', '0', '2016-12-10 10:13:30', '2016-12-10 10:13:30', 'tin-tuc/ada');

-- ----------------------------
-- Table structure for product_attr
-- ----------------------------
DROP TABLE IF EXISTS `product_attr`;
CREATE TABLE `product_attr` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_product` int(10) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `values` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of product_attr
-- ----------------------------
INSERT INTO `product_attr` VALUES ('26', '25', 'ukuran', 'S,M,L,XL,XXL', '2015-05-13 02:22:58', '2015-05-13 02:22:58');
INSERT INTO `product_attr` VALUES ('33', '23', 'warna', 'biru,hijau,kuning', '2016-12-17 16:04:13', '2016-12-17 16:04:13');
INSERT INTO `product_attr` VALUES ('34', '23', 'ukuran', 's,m,l,xl,xxl', '2016-12-17 16:04:13', '2016-12-17 16:04:13');

-- ----------------------------
-- Table structure for product_category
-- ----------------------------
DROP TABLE IF EXISTS `product_category`;
CREATE TABLE `product_category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `parent` int(10) DEFAULT '0',
  `order` int(10) DEFAULT NULL,
  `status` int(10) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `slug` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of product_category
-- ----------------------------
INSERT INTO `product_category` VALUES ('7', 'Jersey', '0', '0', '1', '2015-05-12 12:04:15', '2015-05-12 05:04:15', 'jersey', null);
INSERT INTO `product_category` VALUES ('8', 'La Liga', '7', '0', '1', '2015-05-12 12:06:48', '2015-05-12 05:06:48', 'jersey/la-liga', null);
INSERT INTO `product_category` VALUES ('9', 'Seri A', '7', '1', '1', '2015-05-13 02:15:53', '2015-05-13 02:15:53', 'jersey/seri-a', null);
INSERT INTO `product_category` VALUES ('10', 'Sepatu', '0', '2', '1', '2015-05-13 08:53:51', '2015-05-13 08:53:51', 'sepatu', null);
INSERT INTO `product_category` VALUES ('11', 'Sepatu Lari', '10', '3', '1', '2015-05-13 08:54:23', '2015-05-13 08:54:23', 'sepatu/sepatu-lari', null);

-- ----------------------------
-- Table structure for product_img
-- ----------------------------
DROP TABLE IF EXISTS `product_img`;
CREATE TABLE `product_img` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_product` int(10) DEFAULT NULL,
  `img_name` varchar(100) DEFAULT NULL,
  `path_thumb` varchar(100) DEFAULT NULL,
  `path_full` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `primary` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of product_img
-- ----------------------------
INSERT INTO `product_img` VALUES ('14', '22', '6jkxL.jpg', 'images/products/thumb/6jkxL.jpg', 'images/products/full/6jkxL.jpg', '2015-05-05 04:36:32', '2015-05-05 04:36:32', '0');
INSERT INTO `product_img` VALUES ('17', '25', 'pixXL.jpg', 'images/products/thumb/pixXL.jpg', 'images/products/full/pixXL.jpg', '2015-05-05 07:38:02', '2015-05-05 07:38:02', '0');
INSERT INTO `product_img` VALUES ('34', '25', 'emGp8.jpg', 'images/products/thumb/emGp8.jpg', 'images/products/full/emGp8.jpg', '2015-05-13 02:23:31', '2015-05-13 02:23:31', '0');
INSERT INTO `product_img` VALUES ('35', '25', 'aA0bL.jpg', 'images/products/thumb/aA0bL.jpg', 'images/products/full/aA0bL.jpg', '2015-05-13 02:23:50', '2015-05-13 02:23:50', '0');
INSERT INTO `product_img` VALUES ('36', '29', 'Vt8GP.jpg', 'images/products/thumb/Vt8GP.jpg', 'images/products/full/Vt8GP.jpg', '2016-12-10 10:14:05', '2016-12-10 10:14:05', '0');
INSERT INTO `product_img` VALUES ('39', '23', 'Ln9wM.jpg', 'images/products/thumb/Ln9wM.jpg', 'images/products/full/Ln9wM.jpg', '2016-12-17 16:03:34', '2016-12-17 16:03:34', '0');
INSERT INTO `product_img` VALUES ('40', '23', 'JnzQk.jpg', 'images/products/thumb/JnzQk.jpg', 'images/products/full/JnzQk.jpg', '2016-12-17 16:03:43', '2016-12-17 16:03:43', '0');
INSERT INTO `product_img` VALUES ('41', '23', 'mZ3HC.jpg', 'images/products/thumb/mZ3HC.jpg', 'images/products/full/mZ3HC.jpg', '2016-12-17 16:03:57', '2016-12-17 16:03:57', '0');

-- ----------------------------
-- Table structure for product_meta
-- ----------------------------
DROP TABLE IF EXISTS `product_meta`;
CREATE TABLE `product_meta` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `meta_title` varchar(100) DEFAULT NULL,
  `meta_description` text,
  `meta_keyword` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id_product` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of product_meta
-- ----------------------------
INSERT INTO `product_meta` VALUES ('10', 'test', 'test', 'test', '2015-05-07 07:05:12', '2015-05-07 07:05:12', '23');

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('3', 'owner', 'Chủ dự án', 'Người dùng là chủ dự án', '2015-05-19 09:49:23', '2016-09-08 14:18:39');
INSERT INTO `roles` VALUES ('4', 'admin', 'Quản trị hệ thống', 'Quản trị hệ thống', '2015-05-19 09:49:23', '2016-09-08 14:17:03');
INSERT INTO `roles` VALUES ('5', 'customer', 'Khách hàng', 'Khách hàng đăng ký', '2015-05-25 09:55:30', '2016-09-08 14:16:00');

-- ----------------------------
-- Table structure for role_user
-- ----------------------------
DROP TABLE IF EXISTS `role_user`;
CREATE TABLE `role_user` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `role_user_role_id_foreign` (`role_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of role_user
-- ----------------------------
INSERT INTO `role_user` VALUES ('2', '4');
INSERT INTO `role_user` VALUES ('10', '5');
INSERT INTO `role_user` VALUES ('17', '5');

-- ----------------------------
-- Table structure for slideshow
-- ----------------------------
DROP TABLE IF EXISTS `slideshow`;
CREATE TABLE `slideshow` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ss_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ss_type` tinyint(1) DEFAULT '0',
  `ss_order` tinyint(1) DEFAULT '0',
  `ss_status` tinyint(1) DEFAULT '0',
  `lang` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of slideshow
-- ----------------------------
INSERT INTO `slideshow` VALUES ('1', 'Slide trang chủ', '1', '0', '1', 'vi', '2016-09-13 00:27:07', '2016-09-12 17:27:07');
INSERT INTO `slideshow` VALUES ('2', 'Ảnh quảng cáo bên trái của trang chủ', '4', '0', '1', 'vi', '2016-09-16 18:10:19', '2016-09-16 11:10:19');
INSERT INTO `slideshow` VALUES ('8', 'Ảnh đặt link ảnh hoạt động', '0', '0', '1', 'vi', '2016-12-10 20:53:06', '2016-12-10 20:53:06');
INSERT INTO `slideshow` VALUES ('9', 'ảnh quảng cáo trên header', '0', '0', '1', 'vi', '2016-12-10 21:24:49', '2016-12-10 21:24:49');
INSERT INTO `slideshow` VALUES ('10', 'Ảnh quảng cáo bên phải trang chủ', '0', '0', '1', 'vi', '2016-12-17 15:18:37', '2016-12-17 15:18:37');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activation_code` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(10) DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mob_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `province` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci,
  `postal_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `introduce` text COLLATE utf8_unicode_ci,
  `sex` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('2', 'Nguyễn', 'Hoàng Trung', 'ada@ada.com', '$2y$10$y27cEyVnpBD3BbNAgJKtKurwtrXUpDBd4MnoIGHH2Cxz/18Ly1BNu', 'gRnMy2SAsD4UjBFa1hsJtD9aLrid3ZABRDqd3wBX0iM8xWfanRS0QAKXzozA', null, '2015-05-19 10:00:32', '2016-12-06 15:09:31', '1', 'admin', '/images/admin/images/avata/profile.jpg', null, null, '0974856231', '0974856231', null, null, '', null, null, null);
INSERT INTO `users` VALUES ('10', 'Nguyễn', 'Hùng Cường', 'telo333@telo.com', '$2y$10$IVF53irdmefw6VF.Gfxw8e1rN.9vy03dFprG90GdPj2.M6iM65hAa', 'Vjpji04YgcdimjOaNg85liT2ljY9ZjPK4jhArIII2H8dbKEIFObvVKy20h9O', null, '2015-05-25 10:58:58', '2016-09-08 14:43:13', '1', 'cuongnh', 'http://pbs.twimg.com/profile_images/450900068724273152/IGbwH2oI_normal.jpeg', null, '63434803', null, null, null, null, null, null, null, null);
INSERT INTO `users` VALUES ('17', 'trần', 'hoa', 'banhmi@gmail.com', '$2y$10$o9OirzN2AxlwsXY/6mfZKuMyOZbbNN1SN0MtUb6Z.EN8YfQDA1H72', null, null, '2016-09-21 02:24:08', '2016-09-21 02:24:08', '1', 'hhhhhh', null, null, null, '', '0978806535', null, null, null, null, null, null);

-- ----------------------------
-- Table structure for user_payment
-- ----------------------------
DROP TABLE IF EXISTS `user_payment`;
CREATE TABLE `user_payment` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) DEFAULT NULL,
  `payment_code` int(10) DEFAULT NULL,
  `description` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_payment
-- ----------------------------
