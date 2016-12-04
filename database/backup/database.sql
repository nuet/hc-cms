/*
Navicat MySQL Data Transfer

Source Server         : maria
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : cms

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-12-04 11:00:23
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('7', '0', 'Tin tức', 'tin-tuc', '0', '1', 'vi', '2016-09-29 11:03:40', '2016-09-29 04:03:40');
INSERT INTO `category` VALUES ('12', '0', 'Tin rao', 'tin-rao', '1', '1', 'vi', '2016-09-29 11:03:40', '2016-09-29 04:03:40');
INSERT INTO `category` VALUES ('13', '7', 'Thể thao', 'tin-tuc/the-thao', '0', '1', 'vi', '2016-09-29 11:03:40', '2016-09-29 04:03:40');
INSERT INTO `category` VALUES ('14', '7', 'Test1', 'tin-tuc/test1', '1', '1', 'vi', '2016-09-29 11:03:40', '2016-09-29 04:03:40');
INSERT INTO `category` VALUES ('15', '7', 'Kinh tế', 'tin-tuc/kinh-te', '2', '1', 'vi', '2016-09-29 11:03:40', '2016-09-29 04:03:40');

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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of media
-- ----------------------------
INSERT INTO `media` VALUES ('1', '1', '0', 'ảnh 1 1', 'ảnh slide 1', 'anh-1-1_slide1.jpg', '/images/admin/images/ba-kich-tim-dep.jpg', 'http://localhost', '2016-12-04 10:15:01', '2016-12-04 03:15:01');
INSERT INTO `media` VALUES ('2', '1', '0', 'ảnh 2', 'slide 2', 'anh-2_slide1.jpg', '/images/admin/images/cu-tam-that-tuoi.jpg', 'http://localhost', '2016-12-04 10:15:11', '2016-12-04 03:15:11');
INSERT INTO `media` VALUES ('6', '1', '0', 'pic 6', 'xyz', 'pic-6_slide1.jpg', '/images/admin/images/nam-ngoc-cau-dep.jpg', 'abc', '2016-12-04 10:15:21', '2016-12-04 03:15:21');
INSERT INTO `media` VALUES ('8', '4', '0', 'Tiến độ bàn giao đúng thời hạn cam kết', 'Việt nam được xem là điểm đến mới đầy tiềm năng của du lịch quốc tế, vì thế đầu tư vào bất động sản nghỉ', 'tien-do-ban-giao-dung-thoi-han-cam-ket_slide1.jpg', '/images/admin/images/slide/slide1.jpg', 'sd', '2016-09-20 09:02:46', '2016-09-20 02:02:46');
INSERT INTO `media` VALUES ('10', '4', '0', 'Tiến độ bàn giao đúng thời hạn cam kết', 'Việt nam được xem là điểm đến mới đầy tiềm năng của du lịch quốc tế, vì thế đầu tư vào bất động sản nghỉ', 'tien-do-ban-giao-dung-thoi-han-cam-ket_conten_loiichdautu.png', '/images/admin/images/slide/conten_loiichdautu.png', 'as', '2016-09-20 08:50:15', '2016-09-20 01:50:15');
INSERT INTO `media` VALUES ('11', '4', '0', 'Việt nam được xem là điểm đến mới đầy tiềm năng ', 'Việt nam được xem là điểm đến mới đầy tiềm năng của du lịch quốc tế, vì thế đầu tư vào bất động sản nghỉ', 'viet-nam-duoc-xem-la-diem-den-moi-day-tiem-nang_conten_loiichdautu.png', '/images/admin/images/slide/conten_loiichdautu.png', 'sdf', '2016-09-20 08:50:28', '2016-09-20 01:50:28');
INSERT INTO `media` VALUES ('12', '4', '0', 'Việt nam được xem là điểm đến mới', 'Việt nam được xem là điểm đến mới đầy tiềm năng của du lịch quốc tế, vì thế đầu tư vào bất động sản nghỉ', 'viet-nam-duoc-xem-la-diem-den-moi_conten_loiichdautu.png', '/images/admin/images/slide/conten_loiichdautu.png', 'ádfas', '2016-09-20 08:50:36', '2016-09-20 01:50:36');
INSERT INTO `media` VALUES ('13', '4', '0', 'Tiến độ bàn giao đúng thời hạn cam kết', 'Việt nam được xem là điểm đến mới đầy tiềm năng của du lịch quốc tế, vì thế đầu tư vào bất động sản nghỉ', 'tien-do-ban-giao-dung-thoi-han-cam-ket_conten_loiichdautu.png', '/images/admin/images/slide/conten_loiichdautu.png', 'sd', '2016-09-20 08:50:45', '2016-09-20 01:50:45');
INSERT INTO `media` VALUES ('14', '24', '1', 'sp1 dsf', 'sfd', 'sp1-dsf_slide-chi-tiet.jpg', '/images/admin/images/post/slide-chi-tiet.jpg', 'abc', '2016-09-20 09:25:26', '2016-09-20 02:25:26');
INSERT INTO `media` VALUES ('15', '24', '1', 'sp2', 'ádadad', 'sp2_slide-chi-tiet.jpg', '/images/admin/images/post/slide-chi-tiet.jpg', 'sdas sadada', '2016-09-20 09:25:35', '2016-09-20 02:25:35');
INSERT INTO `media` VALUES ('16', '2', '0', 'ảnh 1', 'df', 'anh-1_right_qc1.jpg', '/images/admin/images/advertisement/right_qc1.jpg', 'df', '2016-09-20 09:36:26', '2016-09-20 02:36:26');
INSERT INTO `media` VALUES ('17', '5', '0', 'ảnh 1', 'dsf', 'anh-1_right_tinrao1.jpg', '/images/admin/images/advertisement/right_tinrao1.jpg', 'df', '2016-09-20 09:37:06', '2016-09-20 02:37:06');
INSERT INTO `media` VALUES ('18', '5', '0', 'anh2', 's', 'anh2_right_tinrao2.jpg', '/images/admin/images/advertisement/right_tinrao2.jpg', 's', '2016-09-20 09:37:13', '2016-09-20 02:37:13');
INSERT INTO `media` VALUES ('19', '7', '0', 'a1', '', null, '/images/admin/images/slide/slide1.jpg', '', '2016-09-29 07:04:25', '2016-09-29 07:04:25');

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
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('12', '0', 'Giới thiệu', 'gioi-thieu', 'page', '1', 'top', '2', 'vi', '2015-05-12 10:49:46', '2016-09-23 07:43:01');
INSERT INTO `menu` VALUES ('16', '0', 'Trang chủ', 'http://cuongnh', 'link', '1', 'top', '0', 'vi', '2016-09-08 11:29:47', '2016-09-28 10:11:59');
INSERT INTO `menu` VALUES ('17', '0', 'Nhà phân phối', 'nha-phan-phoi', 'page', '1', 'top', '4', 'vi', '2016-09-08 11:30:44', '2016-09-23 07:43:01');
INSERT INTO `menu` VALUES ('23', '17', 'test3', 'test3', 'link', '1', 'top', '0', 'vi', '2016-09-22 08:05:26', '2016-09-22 08:05:49');
INSERT INTO `menu` VALUES ('30', '0', 'Kinh tế', 'tin-tuc/kinh-te', 'category', '1', 'top', '3', 'vi', '2016-09-23 07:28:20', '2016-09-23 07:43:01');
INSERT INTO `menu` VALUES ('31', '0', 'Tin tức', 'tin-tuc', 'category', '1', 'top', '1', 'vi', '2016-09-23 07:34:35', '2016-09-23 07:43:01');
INSERT INTO `menu` VALUES ('32', '31', 'Thể thao', 'tin-tuc/the-thao', 'category', '1', 'top', '0', 'vi', '2016-09-23 07:34:35', '2016-09-23 07:34:35');
INSERT INTO `menu` VALUES ('33', '31', 'Test1', 'tin-tuc/test1', 'category', '1', 'top', '1', 'vi', '2016-09-23 07:34:35', '2016-09-23 07:34:35');
INSERT INTO `menu` VALUES ('34', '31', 'Kinh tế', 'tin-tuc/kinh-te', 'category', '1', 'top', '2', 'vi', '2016-09-23 07:34:35', '2016-09-23 07:34:35');
INSERT INTO `menu` VALUES ('35', '33', 'Tin tức', 'tin-tuc', 'category', '1', 'top', '0', 'vi', '2016-09-23 07:41:30', '2016-09-23 07:43:01');
INSERT INTO `menu` VALUES ('36', '35', 'Thể thao', 'tin-tuc/the-thao', 'category', '1', 'top', '0', 'vi', '2016-09-23 07:41:30', '2016-09-23 07:41:30');
INSERT INTO `menu` VALUES ('38', '35', 'Kinh tế', 'tin-tuc/kinh-te', 'category', '1', 'top', '2', 'vi', '2016-09-23 07:41:30', '2016-09-23 07:41:30');

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
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('25', '7', 'Vingroup đồng loạt đạt ba giải nhất tại', 'vingroup-dong-loat-dat-ba-giai-nhat-tai', 'sdf', '/images/admin/images/post/conten_tinraovat.png', null, '', '1', '0', null, 'vi', '2016-09-21 06:18:42', '2016-09-21 06:39:49');
INSERT INTO `news` VALUES ('26', '7', 'Vingroup đồng loạt đạt ba giải nhất tại đồng loạt đạt ba giải nhất tại đồng loạt đạt âs tin tức', 'vingroup-dong-loat-dat-ba-giai-nhat-tai-dong-loat-dat-ba-giai-nhat-tai-dong-loat-dat-as-tin-tuc', '<a href=\"http://cuongnh/vingroup-dong-loat-dat-ba-giai-nhat-tai-dong-loat-dat-ba-giai-nhat-tai-dong-loat-dat-ass-24#\">Vingroup đồng loạt đạt ba giải nhất tại đồng loạt đạt ba giải nhất tại đồng loạt đạt &acirc;s 24 </a>', '/images/admin/images/post/conten_tinraovat.png', null, 'https://www.youtube.com/embed/FCDXZhfepNI', '1', '0', null, 'vi', '2016-09-21 06:23:29', '2016-09-21 06:39:26');
INSERT INTO `news` VALUES ('29', '7', 'Bán gấp nhà MT Bạch Đằng, P. 2, Q. Tân Bình, 10x33msd qq', 'ban-gap-nha-mt-bach-dang-p-2-q-tan-binh-10x33msd-qq', '&aacute;dsa', '', null, '', '0', '0,1,2', null, 'vi', '2016-09-22 01:25:55', '2016-09-28 02:48:09');

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
INSERT INTO `option` VALUES ('1', 'url', 'http://cuongnh:81', '1', 'vi', '2016-09-29 11:21:25', '2016-09-29 04:21:25');
INSERT INTO `option` VALUES ('2', 'name', 'Công Ty Cổ Phần Dịch Vụ Chu Du Hai Bốn.', '1', 'vi', '2016-09-29 11:21:25', '2016-09-29 04:21:25');
INSERT INTO `option` VALUES ('3', 'address', 'Tầng 12, Tòa Nhà SCB, 242 Cống Quỳnh, P.Phạm Ngũ Lão, Q.1, TP.HCM.', '1', 'vi', '2016-09-29 11:21:25', '2016-09-29 04:21:25');
INSERT INTO `option` VALUES ('4', 'email', 'batdongsan@aquilan.com', '1', 'vi', '2016-09-29 11:21:25', '2016-09-29 04:21:25');
INSERT INTO `option` VALUES ('5', 'phone', '1900 5454 40', '1', 'vi', '2016-09-29 11:21:25', '2016-09-29 04:21:25');
INSERT INTO `option` VALUES ('6', 'logo', '/images/admin/images/logo/logo.png', '1', 'vi', '2016-09-29 11:21:25', '2016-09-29 04:21:25');
INSERT INTO `option` VALUES ('7', 'map', 'https://goo.gl/maps/9ynWsMj6PMQ2', '1', 'vi', '2016-09-29 11:21:25', '2016-09-29 04:21:25');
INSERT INTO `option` VALUES ('8', 'copyright', '2008 Công Ty Cổ Phần Dịch Vụ Chu Du Hai Bốn.', '1', 'vi', '2016-09-29 11:21:25', '2016-09-29 04:21:25');
INSERT INTO `option` VALUES ('9', 'title', 'Nhà đất | Mua bán nhà đất | Cho thuê nhà đất', '2', 'vi', '2016-09-29 11:16:03', '2016-09-29 04:16:03');
INSERT INTO `option` VALUES ('10', 'favicon', '/images/admin/images/Icon/mastercard.png', '2', 'vi', '2016-09-29 11:16:03', '2016-09-29 04:16:03');
INSERT INTO `option` VALUES ('11', 'description', '2008 Công Ty Cổ Phần Dịch Vụ Chu Du Hai Bốn', '2', 'vi', '2016-09-29 11:16:03', '2016-09-29 04:16:03');
INSERT INTO `option` VALUES ('12', 'keywords', 'Mua bán nhà đất', '2', 'vi', '2016-09-29 11:16:03', '2016-09-29 04:16:03');
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
-- Table structure for pages
-- ----------------------------
DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_slug` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_type` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_status` int(11) DEFAULT '0',
  `page_position` enum('top','other','bottom') COLLATE utf8_unicode_ci DEFAULT 'top',
  `page_order` int(11) DEFAULT '0',
  `page_parent` int(11) DEFAULT '0',
  `page_content` text COLLATE utf8_unicode_ci,
  `lang` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of pages
-- ----------------------------
INSERT INTO `pages` VALUES ('9', 'Privacy Policy', 'privacy-policy', 'page', '1', 'bottom', '0', '0', '<span style=\"font-weight: bold;\">PRIVACY STATEMENT</span><br><br><br><br>----<br><br><br><br>SECTION 1 - WHAT DO WE DO WITH YOUR INFORMATION?<br><br><br><br>When you purchase something from our store, as part of the buying and selling process, we collect the personal information you give us such as your name, address and email address.<br><br>When you browse our store, we also automatically receive your computer’s internet protocol (IP) address in order to provide us with information that helps us learn about your browser and operating system.<br><br>Email marketing (if applicable): With your permission, we may send you emails about our store, new products and other updates.<br><br><br><br>SECTION 2 - CONSENT<br><br><br><br>How do you get my consent?<br><br>When you provide us with personal information to complete a transaction, verify your credit card, place an order, arrange for a delivery or return a purchase, we imply that you consent to our collecting it and using it for that specific reason only.<br><br>If we ask for your personal information for a secondary reason, like marketing, we will either ask you directly for your expressed consent, or provide you with an opportunity to say no.<br><br><br><br>How do I withdraw my consent?<br><br>If after you opt-in, you change your mind, you may withdraw your consent for us to contact you, for the continued collection, use or disclosure of your information, at anytime, by contacting us at support@shopify.com or mailing us at: Shopify 126 York Street, Suite 200 Ottawa Ontario Canada K1N 5T5<br><br><br>SECTION 3 - DISCLOSURE<br><br><br><br>We may disclose your personal information if we are required by law to do so or if you violate our Terms of Service.<br><br><br><br>SECTION 4 - SHOPIFY<br><br><br><br>Our store is hosted on Shopify Inc. They provide us with the online e-commerce platform that allows us to sell our products and services to you.<br><br>Your data is stored through Shopify’s data storage, databases and the general Shopify application. They store your data on a secure server behind a firewall.<br><br><br><br>Payment:<br><br>If you choose a direct payment gateway to complete your purchase, then Shopify stores your credit card data. It is encrypted through the Payment Card Industry Data Security Standard (PCI-DSS). Your purchase transaction data is stored only as long as is necessary to complete your purchase transaction. After that is complete, your purchase transaction information is deleted.<br><br>All direct payment gateways adhere to the standards set by PCI-DSS as managed by the PCI Security Standards Council, which is a joint effort of brands like Visa, MasterCard, American Express and Discover.<br><br>PCI-DSS requirements help ensure the secure handling of credit card information by our store and its service providers.<br><br>For more insight, you may also want to read Shopify’s Terms of Service here or Privacy Statement here.<br><br><br><br>SECTION 5 - THIRD-PARTY SERVICES<br><br><br><br>In general, the third-party providers used by us will only collect, use and disclose your information to the extent necessary to allow them to perform the services they provide to us.<br><br>However, certain third-party service providers, such as payment gateways and other payment transaction processors, have their own privacy policies in respect to the information we are required to provide to them for your purchase-related transactions.<br><br>For these providers, we recommend that you read their privacy policies so you can understand the manner in which your personal information will be handled by these providers.<br><br>In particular, remember that certain providers may be located in or have facilities that are located a different jurisdiction than either you or us. So if you elect to proceed with a transaction that involves the services of a third-party service provider, then your information may become subject to the laws of the jurisdiction(s) in which that service provider or its facilities are located.<br><br>As an example, if you are located in Canada and your transaction is processed by a payment gateway located in the United States, then your personal information used in completing that transaction may be subject to disclosure under United States legislation, including the Patriot Act.<br><br>Once you leave our store’s website or are redirected to a third-party website or application, you are no longer governed by this Privacy Policy or our website’s Terms of Service. <br><br><br><br>Links<br><br>When you click on links on our store, they may direct you away from our site. We are not responsible for the privacy practices of other sites and encourage you to read their privacy statements.<br><br>SECTION 6 - SECURITY<br><br><br><br>To protect your personal information, we take reasonable precautions and follow industry best practices to make sure it is not inappropriately lost, misused, accessed, disclosed, altered or destroyed.<br><br>If you provide us with your credit card information, the information is encrypted using secure socket layer technology (SSL) and stored with a AES-256 encryption.&nbsp; Although no method of transmission over the Internet or electronic storage is 100% secure, we follow all PCI-DSS requirements and implement additional generally accepted industry standards.<br><br><br><br>SECTION 7 - COOKIES<br><br><br><br>&nbsp;Here is a list of cookies that we use. We’ve listed them here so you that you can choose if you want to opt-out of cookies or not.<br><br>&nbsp;_session_id, unique token, sessional, Allows Shopify to store information about your session (referrer, landing page, etc).<br><br>&nbsp;_shopify_visit, no data held, Persistent for 30 minutes from the last visit, Used by our website provider’s internal stats tracker to record the number of visits<br><br>&nbsp;_shopify_uniq, no data held, expires midnight (relative to the visitor) of the next day, Counts the number of visits to a store by a single customer.<br><br>cart, unique token, persistent for 2 weeks, Stores information about the contents of your cart.<br><br>&nbsp;_secure_session_id, unique token, sessional<br><br>&nbsp;storefront_digest, unique token, indefinite If the shop has a password, this is used to determine if the current visitor has access.<br><br><br><br><br><br>SECTION 8 - AGE OF CONSENT<br><br><br><br>&nbsp;By using this site, you represent that you are at least the age of majority in your state or province of residence, or that you are the age of majority in your state or province of residence and you have given us your consent to allow any of your minor dependents to use this site.<br><br><br><br>SECTION 9 - CHANGES TO THIS PRIVACY POLICY<br><br><br><br>We reserve the right to modify this privacy policy at any time, so please review it frequently. Changes and clarifications will take effect immediately upon their posting on the website. If we make material changes to this policy, we will notify you here that it has been updated, so that you are aware of what information we collect, how we use it, and under what circumstances, if any, we use and/or disclose it.<br><br>If our store is acquired or merged with another company, your information may be transferred to the new owners so that we may continue to sell products to you.<br><br><br><br>QUESTIONS AND CONTACT INFORMATION<br><br><br><br>If you would like to: access, correct, amend or delete any personal information we have about you, register a complaint, or simply want more information contact our Privacy Compliance Officer at support@shopify.com or by mail at Shopify<br><br>[Re: Privacy Compliance Officer]<br><br>[126 York Street, Suite 200 Ottawa Ontario Canada K1N 5T5]<br><br>----', 'vi', '2015-05-11 13:07:28', '2015-05-13 11:08:57');
INSERT INTO `pages` VALUES ('10', 'Tin tức', '/tin-tuc', 'link', '1', 'top', '3', '0', '', 'vi', '2015-05-12 10:43:30', '2016-09-28 02:10:58');
INSERT INTO `pages` VALUES ('12', 'Giới thiệu', 'gioi-thieu', 'page', '1', 'top', '2', '0', '<h1>&nbsp;</h1>\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n\r\n<p>&nbsp;</p>\r\n', 'vi', '2015-05-12 10:49:46', '2016-09-28 02:10:54');
INSERT INTO `pages` VALUES ('13', 'Terms of use', 'privacy-policy/terms-of-use', 'page', '1', 'bottom', '0', '9', '', 'vi', '2015-05-13 09:18:12', '2015-05-13 11:33:16');
INSERT INTO `pages` VALUES ('14', 'Refund Policy', 'privacy-policy/refund-policy', 'page', '1', 'bottom', '1', '9', '', 'vi', '2015-05-13 09:19:18', '2015-05-13 11:33:16');
INSERT INTO `pages` VALUES ('15', 'Tin rao', '/tin-rao', 'link', '1', 'top', '1', '0', null, 'vi', '2016-09-08 11:20:03', '2016-09-28 02:10:46');
INSERT INTO `pages` VALUES ('16', 'Trang chủ', '/', 'link', '1', 'top', '0', '0', null, 'vi', '2016-09-08 11:29:47', '2016-09-29 04:04:42');
INSERT INTO `pages` VALUES ('17', 'Nhà phân phối', 'nha-phan-phoi', 'page', '1', 'top', '4', '0', '', 'vi', '2016-09-08 11:30:44', '2016-09-28 02:11:03');
INSERT INTO `pages` VALUES ('18', 'Liên hệ', 'lien-he', 'page', '1', 'other', '0', '0', '', 'vi', '2016-09-08 11:35:25', '2016-09-08 11:35:25');

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
INSERT INTO `permission_role` VALUES ('39', '3');
INSERT INTO `permission_role` VALUES ('39', '4');
INSERT INTO `permission_role` VALUES ('40', '4');
INSERT INTO `permission_role` VALUES ('41', '4');
INSERT INTO `permission_role` VALUES ('42', '4');
INSERT INTO `permission_role` VALUES ('43', '4');

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
INSERT INTO `role_user` VALUES ('6', '4');
INSERT INTO `role_user` VALUES ('9', '5');
INSERT INTO `role_user` VALUES ('10', '5');
INSERT INTO `role_user` VALUES ('11', '5');
INSERT INTO `role_user` VALUES ('12', '5');
INSERT INTO `role_user` VALUES ('13', '5');
INSERT INTO `role_user` VALUES ('14', '5');
INSERT INTO `role_user` VALUES ('15', '5');
INSERT INTO `role_user` VALUES ('16', '5');
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of slideshow
-- ----------------------------
INSERT INTO `slideshow` VALUES ('1', 'Slide trang chủ', '1', '0', '1', 'vi', '2016-09-13 00:27:07', '2016-09-12 17:27:07');
INSERT INTO `slideshow` VALUES ('2', 'Ảnh quảng cáo bên trái của trang chủ', '4', '0', '1', 'vi', '2016-09-16 18:10:19', '2016-09-16 11:10:19');

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
INSERT INTO `users` VALUES ('2', 'Nguyễn', 'Hoàng Trung', 'ada@ada.com', '$2y$10$y27cEyVnpBD3BbNAgJKtKurwtrXUpDBd4MnoIGHH2Cxz/18Ly1BNu', 'lANJH2OZ1FFhpyE8FtkE1kID1qSAciu832O3BqzhkvZuO98GdR1QgXeLc1qk', null, '2015-05-19 10:00:32', '2016-12-04 02:37:40', '1', 'admin', '/images/admin/images/avata/profile.jpg', null, null, '0974856231', '0974856231', null, null, '', null, null, null);
INSERT INTO `users` VALUES ('6', 'test 12345', null, 'telo33@telo.com', '', null, null, '2015-05-20 11:01:38', '2015-05-20 11:08:00', '0', null, 'http://pbs.twimg.com/profile_images/450900068724273152/IGbwH2oI_normal.jpeg', null, null, null, null, null, null, null, null, null, null);
INSERT INTO `users` VALUES ('9', 'Wasi Arnosa', null, 'devil.syiewa@gmail.com', '$2y$10$4xJ47eOcHvb.HqpAM32WxOG1CaufB5aryFP01kumUMJ8Xf.mc3uR6', 'OlZQ3hA1MLoNEZrwTyH1XMuDM51Rdn91iSQPtudZaBYCyprxbJArL9OmUm0d', null, '2015-05-22 15:04:42', '2015-06-16 10:48:16', '1', null, 'https://graph.facebook.com/v2.2/1044947206/picture?type=normal', null, '1044947206', '1414141', '114141', '', '', 'address 1', null, null, null);
INSERT INTO `users` VALUES ('10', 'Nguyễn', 'Hùng Cường', 'telo333@telo.com', '$2y$10$IVF53irdmefw6VF.Gfxw8e1rN.9vy03dFprG90GdPj2.M6iM65hAa', 'Vjpji04YgcdimjOaNg85liT2ljY9ZjPK4jhArIII2H8dbKEIFObvVKy20h9O', null, '2015-05-25 10:58:58', '2016-09-08 14:43:13', '1', 'cuongnh', 'http://pbs.twimg.com/profile_images/450900068724273152/IGbwH2oI_normal.jpeg', null, '63434803', null, null, null, null, null, null, null, null);
INSERT INTO `users` VALUES ('11', 'Nguyễn', 'Hùng Cường', 'hungcuongqn86@gmail.com', '$2y$10$hOdvgaImpc2pGlC6TKe/n.pzHpcA32nLBfdIvWcylZiy094pUmN2i', 'vMRSjKaBO7jre82c88x9hbvfkRcMUwCFb4C17gBhrqqAOVJIjOrf2qVhPxsl', null, '2016-09-20 03:11:50', '2016-09-20 07:09:31', '1', 'cuongnh1', '/images/cuongnh1/images/avata/profile.jpg', null, null, '0974586211', '0974586211', null, null, '', null, null, null);
INSERT INTO `users` VALUES ('12', 'nguyễn', 'hậu', 'nh1990@gmail.com', '$2y$10$0V22ly5qboIXpN1C2TpUqehtB8.9xlfeTAOsoqEuPtdexAxVEMO2i', 'rtDzuJeTVGzHbQ7VEfqFoyHTGwislLGyPxaSKP38HcjCKNaFadKOu5j4WieM', null, '2016-09-20 10:10:35', '2016-09-20 10:11:25', '1', 'hoai12345', '', null, null, '', '0971090205', null, null, '', null, null, null);
INSERT INTO `users` VALUES ('13', 'nguyễn', 'hoài', 'nguyenhau902@gmail.com', '$2y$10$.pOiVAe2KFELoHlPISssbuIn/1gwjHf7CqPg1n765g7wy4PuGn63W', null, null, '2016-09-20 10:53:27', '2016-09-20 10:53:27', '1', ' ggg 12345', null, null, null, '', '0971090205', null, null, null, null, null, null);
INSERT INTO `users` VALUES ('14', 'nguyễn', 'hoa', '123@gmail.com', '$2y$10$6J3FLn2QHqBtRDdrpDXLgefC07Vql0wgxPtlgLnftm5BmeSJgLoPC', 'NYI0exl6D3Ghgo5nUMfTl25QxDmNYYmstqzhnrhLCbk2dMJCi98qn0GuuuZK', null, '2016-09-20 10:56:30', '2016-09-21 03:02:32', '1', 'n h 1234', '', null, null, '', '0972820167', null, null, '', null, null, null);
INSERT INTO `users` VALUES ('15', 'trần', 'hoài', 'hht@gmail.com', '$2y$10$LmmYVu5tLDFVOLet7gtzguhpfG5BLQ0xlRypbYXUNnivyGxwFeAcC', null, null, '2016-09-21 01:13:57', '2016-09-21 01:13:57', '1', '@#<< hht', null, null, null, '', '0978806535', null, null, null, null, null, null);
INSERT INTO `users` VALUES ('16', 'nguyễn', 'hoài', 'nht1990@gmail.com', '$2y$10$VPsaY5qWKlLqnYPsNP3GIu1og.vORWmbHuvL3EP5N.hhhmWoxmr72', null, null, '2016-09-21 02:09:11', '2016-09-21 02:09:11', '1', 'fhhhhhhhf', null, null, null, '', '0971090205', null, null, null, null, null, null);
INSERT INTO `users` VALUES ('17', 'trần', 'hoa', 'banhmi@gmail.com', '$2y$10$o9OirzN2AxlwsXY/6mfZKuMyOZbbNN1SN0MtUb6Z.EN8YfQDA1H72', null, null, '2016-09-21 02:24:08', '2016-09-21 02:24:08', '1', 'hhhhhh', null, null, null, '', '0978806535', null, null, null, null, null, null);
