/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50528
Source Host           : localhost:3306
Source Database       : beaverdb

Target Server Type    : MYSQL
Target Server Version : 50528
File Encoding         : 65001

Date: 2013-01-03 01:20:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `action`
-- ----------------------------
DROP TABLE IF EXISTS `action`;
CREATE TABLE `action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `comment` text,
  `subject` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of action
-- ----------------------------

-- ----------------------------
-- Table structure for `cmb_tbl_currency`
-- ----------------------------
DROP TABLE IF EXISTS `cmb_tbl_currency`;
CREATE TABLE `cmb_tbl_currency` (
  `currency_id` int(11) NOT NULL,
  `code` varchar(10) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) NOT NULL,
  `update_user_id` int(11) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`currency_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cmb_tbl_currency
-- ----------------------------
INSERT INTO `cmb_tbl_currency` VALUES ('1', 'AED', 'UAE Dirham', 'AE', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('2', 'AFN', 'Afghani', 'AF', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('3', 'ALL', 'Lek', 'AL', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('4', 'AMD', 'Armenian Dram', 'AM', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('5', 'ANG', 'Netherlands Antillean Guilder', null, '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('6', 'AOA', 'Kwanza', 'AO', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('7', 'ARS', 'Argentine Peso', 'AR', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('8', 'AUD', 'Australian Dollar', 'AU', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('9', 'AWG', 'Aruban Florin', 'AW', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('10', 'AZN', 'Azerbaijanian Manat', 'AZ', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('11', 'BAM', 'Convertible Mark', 'BA', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('12', 'BBD', 'Barbados Dollar', 'BB', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('13', 'BDT', 'Taka', 'BD', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('14', 'BGN', 'Bulgarian Lev', 'BG', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('15', 'BHD', 'Bahraini Dinar', 'BH', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('16', 'BIF', 'Burundi Franc', 'BI', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('17', 'BMD', 'Bermudian Dollar', 'BM', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('18', 'BND', 'Brunei Dollar', 'BN', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('19', 'BOB', 'Boliviano', 'BO', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('20', 'BOV', 'Mvdol', 'BO', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('21', 'BRL', 'Brazilian Real', 'BR', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('22', 'BSD', 'Bahamian Dollar', 'BS', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('23', 'BTN', 'Ngultrum', 'BT', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('24', 'BWP', 'Pula', 'BW', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('25', 'BYR', 'Belarussian Ruble', 'BY', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('26', 'BZD', 'Belize Dollar', 'BZ', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('27', 'CAD', 'Canadian Dollar', 'CA', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('28', 'CDF', 'Congolese Franc', 'CD', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('29', 'CHE', 'WIR Euro', 'CH', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('30', 'CHF', 'Swiss Franc', 'CH', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('31', 'CHW', 'WIR Franc', 'CH', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('32', 'CLF', 'Unidades de fomento', 'CL', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('33', 'CLP', 'Chilean Peso', 'CL', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('34', 'CNY', 'Yuan Renminbi', 'CN', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('35', 'COP', 'Colombian Peso', 'CO', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('36', 'COU', 'Unidad de Valor Real', 'CO', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('37', 'CRC', 'Costa Rican Colon', 'CR', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('38', 'CUC', 'Peso Convertible', 'CU', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('39', 'CUP', 'Cuban Peso', 'CU', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('40', 'CVE', 'Cape Verde Escudo', 'CV', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('41', 'CZK', 'Czech Koruna', 'CZ', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('42', 'DJF', 'Djibouti Franc', 'DJ', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('43', 'DKK', 'Danish Krone', 'DK', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('44', 'DOP', 'Dominican Peso', 'DO', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('45', 'DZD', 'Algerian Dinar', 'DZ', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('46', 'EGP', 'Egyptian Pound', 'EG', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('47', 'ERN', 'Nakfa', 'ER', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('48', 'ETB', 'Ethiopian Birr', 'ET', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('49', 'EUR', 'Euro', 'EU', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('50', 'FJD', 'Fiji Dollar', 'FJ', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('51', 'FKP', 'Falkland Islands Pound', 'FK', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('52', 'GBP', 'Pound Sterling', 'GB', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('53', 'GEL', 'Lari', 'GE', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('54', 'GHS', 'Ghana Cedi', 'GH', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('55', 'GIP', 'Gibraltar Pound', 'GI', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('56', 'GMD', 'Dalasi', 'GM', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('57', 'GNF', 'Guinea Franc', 'GN', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('58', 'GTQ', 'Quetzal', 'GT', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('59', 'GYD', 'Guyana Dollar', 'GY', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('60', 'HKD', 'Hong Kong Dollar', 'HK', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('61', 'HNL', 'Lempira', 'HN', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('62', 'HRK', 'Croatian Kuna', 'HR', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('63', 'HTG', 'Gourde', 'HT', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('64', 'HUF', 'Forint', 'HU', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('65', 'IDR', 'Rupiah', 'ID', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('66', 'ILS', 'New Israeli Sheqel', 'IL', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('67', 'INR', 'Indian Rupee', 'IN', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('68', 'IQD', 'Iraqi Dinar', 'IQ', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('69', 'IRR', 'Iranian Rial', 'IR', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('70', 'ISK', 'Iceland Krona', 'IS', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('71', 'JMD', 'Jamaican Dollar', 'JM', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('72', 'JOD', 'Jordanian Dinar', 'JO', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('73', 'JPY', 'Yen', 'JP', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('74', 'KES', 'Kenyan Shilling', 'KE', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('75', 'KGS', 'Som', 'KG', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('76', 'KHR', 'Riel', 'KH', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('77', 'KMF', 'Comoro Franc', 'KM', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('78', 'KPW', 'North Korean Won', 'KP', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('79', 'KRW', 'Won', 'KR', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('80', 'KWD', 'Kuwaiti Dinar', 'KW', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('81', 'KYD', 'Cayman Islands Dollar', 'KY', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('82', 'KZT', 'Tenge', 'KZ', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('83', 'LAK', 'Kip', 'LA', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('84', 'LBP', 'Lebanese Pound', 'LB', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('85', 'LKR', 'Sri Lanka Rupee', 'LK', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('86', 'LRD', 'Liberian Dollar', 'LR', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('87', 'LSL', 'Loti', 'LS', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('88', 'LTL', 'Lithuanian Litas', 'LT', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('89', 'LVL', 'Latvian Lats', 'LV', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('90', 'LYD', 'Libyan Dinar', 'LY', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('91', 'MAD', 'Moroccan Dirham', 'MA', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('92', 'MDL', 'Moldovan Leu', 'MD', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('93', 'MGA', 'Malagasy Ariary', 'MG', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('94', 'MKD', 'Denar', 'MK', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('95', 'MMK', 'Kyat', 'MM', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('96', 'MNT', 'Tugrik', 'MN', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('97', 'MOP', 'Pataca', 'MO', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('98', 'MRO', 'Ouguiya', 'MR', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('99', 'MUR', 'Mauritius Rupee', 'MU', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('100', 'MVR', 'Rufiyaa', 'MV', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('101', 'MWK', 'Kwacha', 'MW', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('102', 'MXN', 'Mexican Peso', 'MX', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('103', 'MXV', 'Mexican Unidad de Inversion (UDI)', 'MX', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('104', 'MYR', 'Malaysian Ringgit', 'MY', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('105', 'MZN', 'Mozambique Metical', 'MZ', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('106', 'NAD', 'Namibia Dollar', 'NA', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('107', 'NGN', 'Naira', 'NG', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('108', 'NIO', 'Cordoba Oro', 'NI', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('109', 'NOK', 'Norwegian Krone', 'NO', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('110', 'NPR', 'Nepalese Rupee', 'NP', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('111', 'NZD', 'New Zealand Dollar', 'NZ', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('112', 'OMR', 'Rial Omani', 'OM', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('113', 'PAB', 'Balboa', 'PA', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('114', 'PEN', 'Nuevo Sol', 'PE', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('115', 'PGK', 'Kina', 'PG', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('116', 'PHP', 'Philippine Peso', 'PH', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('117', 'PKR', 'Pakistan Rupee', 'PK', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('118', 'PLN', 'Zloty', 'PL', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('119', 'PYG', 'Guarani', 'PY', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('120', 'QAR', 'Qatari Rial', 'QA', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('121', 'RON', 'New Romanian Leu', 'RO', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('122', 'RSD', 'Serbian Dinar', 'RS', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('123', 'RUB', 'Russian Ruble', 'RU', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('124', 'RWF', 'Rwanda Franc', 'RW', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('125', 'SAR', 'Saudi Riyal', 'SA', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('126', 'SBD', 'Solomon Islands Dollar', 'SB', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('127', 'SCR', 'Seychelles Rupee', 'SC', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('128', 'SDG', 'Sudanese Pound', 'SD', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('129', 'SEK', 'Swedish Krona', 'SE', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('130', 'SGD', 'Singapore Dollar', 'SG', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('131', 'SHP', 'Saint Helena Pound', 'SH', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('132', 'SLL', 'Leone', 'SL', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('133', 'SOS', 'Somali Shilling', 'SO', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('134', 'SRD', 'Surinam Dollar', 'SR', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('135', 'SSP', 'South Sudanese Pound', 'SS', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('136', 'STD', 'Dobra', 'ST', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('137', 'SVC', 'El Salvador Colon', 'SV', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('138', 'SYP', 'Syrian Pound', 'SY', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('139', 'SZL', 'Lilangeni', 'SZ', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('140', 'THB', 'Baht', 'TH', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('141', 'TJS', 'Somoni', 'TJ', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('142', 'TMT', 'Turkmenistan New Manat', 'TM', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('143', 'TND', 'Tunisian Dinar', 'TN', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('144', 'TOP', 'Pa\'anga', 'TO', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('145', 'TRY', 'Turkish Lira', 'TR', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('146', 'TTD', 'Trinidad and Tobago Dollar', 'TT', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('147', 'TWD', 'New Taiwan Dollar', 'TW', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('148', 'TZS', 'Tanzanian Shilling', 'TZ', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('149', 'UAH', 'Hryvnia', 'UA', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('150', 'UGX', 'Uganda Shilling', 'UG', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('151', 'USD', 'US Dollar', 'US', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('152', 'USN', 'US Dollar (Next day)', 'US', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('153', 'USS', 'US Dollar (Same day)', 'US', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('154', 'UYI', 'Uruguay Peso en Unidades Indexadas (URUIURUI)', 'UY', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('155', 'UYU', 'Peso Uruguayo', 'UY', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('156', 'UZS', 'Uzbekistan Sum', 'UZ', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('157', 'VEF', 'Bolivar Fuerte', 'VE', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('158', 'VND', 'Dong', 'VN', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('159', 'VUV', 'Vatu', 'VU', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('160', 'WST', 'Tala', 'WS', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('161', 'XAF', 'CFA Franc BEAC', null, '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('162', 'XAG', 'Silver', null, '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('163', 'XAU', 'Gold', null, '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('164', 'XBA', 'Bond Markets Unit European Composite Unit (EURCO)', null, '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('165', 'XBB', 'Bond Markets Unit European Monetary Unit (E.M.U.-6)', null, '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('166', 'XBC', 'Bond Markets Unit European Unit of Account 9 (E.U.A.-9)', null, '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('167', 'XBD', 'Bond Markets Unit European Unit of Account 17 (E.U.A.-17)', null, '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('168', 'XCD', 'East Caribbean Dollar', null, '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('169', 'XDR', 'SDR (Special Drawing Right)', null, '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('170', 'XFU', 'UIC-Franc', null, '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('171', 'XOF', 'CFA Franc BCEAO', null, '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('172', 'XPD', 'Palladium', null, '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('173', 'XPF', 'CFP Franc', null, '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('174', 'XPT', 'Platinum', null, '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('175', 'XSU', 'Sucre', null, '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('176', 'XTS', 'Codes specifically reserved for testing purposes', null, '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('177', 'XUA', 'ADB Unit of Account', null, '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('178', 'XXX', 'The codes assigned for transactions where no currency is involved', null, '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('179', 'YER', 'Yemeni Rial', 'YE', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('180', 'ZAR', 'Rand', 'ZA', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('181', 'ZMK', 'Zambian Kwacha', 'ZM', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_currency` VALUES ('182', 'ZWL', 'Zimbabwe Dollar', 'ZW', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `cmb_tbl_uom`
-- ----------------------------
DROP TABLE IF EXISTS `cmb_tbl_uom`;
CREATE TABLE `cmb_tbl_uom` (
  `uom_id` int(2) NOT NULL AUTO_INCREMENT,
  `descr` varchar(10) NOT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) NOT NULL,
  `update_user_id` int(11) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`uom_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cmb_tbl_uom
-- ----------------------------
INSERT INTO `cmb_tbl_uom` VALUES ('1', 'meter', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `cmb_tbl_uom` VALUES ('2', 'inch', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `friendship`
-- ----------------------------
DROP TABLE IF EXISTS `friendship`;
CREATE TABLE `friendship` (
  `inviter_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `acknowledgetime` int(11) DEFAULT NULL,
  `requesttime` int(11) DEFAULT NULL,
  `updatetime` int(11) DEFAULT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`inviter_id`,`friend_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of friendship
-- ----------------------------

-- ----------------------------
-- Table structure for `membership`
-- ----------------------------
DROP TABLE IF EXISTS `membership`;
CREATE TABLE `membership` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `membership_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_date` int(11) NOT NULL,
  `end_date` int(11) DEFAULT NULL,
  `payment_date` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of membership
-- ----------------------------

-- ----------------------------
-- Table structure for `messages`
-- ----------------------------
DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `timestamp` int(10) unsigned NOT NULL,
  `from_user_id` int(10) unsigned NOT NULL,
  `to_user_id` int(10) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` text,
  `message_read` tinyint(1) NOT NULL DEFAULT '0',
  `answered` tinyint(1) NOT NULL,
  `draft` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of messages
-- ----------------------------

-- ----------------------------
-- Table structure for `payment`
-- ----------------------------
DROP TABLE IF EXISTS `payment`;
CREATE TABLE `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `text` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of payment
-- ----------------------------

-- ----------------------------
-- Table structure for `permission`
-- ----------------------------
DROP TABLE IF EXISTS `permission`;
CREATE TABLE `permission` (
  `principal_id` int(11) NOT NULL,
  `subordinate_id` int(11) NOT NULL DEFAULT '0',
  `type` enum('user','role') NOT NULL,
  `action` int(11) NOT NULL,
  `template` tinyint(1) NOT NULL,
  `comment` text,
  PRIMARY KEY (`principal_id`,`subordinate_id`,`type`,`action`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of permission
-- ----------------------------

-- ----------------------------
-- Table structure for `privacysetting`
-- ----------------------------
DROP TABLE IF EXISTS `privacysetting`;
CREATE TABLE `privacysetting` (
  `user_id` int(10) unsigned NOT NULL,
  `message_new_friendship` tinyint(1) NOT NULL,
  `message_new_message` tinyint(1) NOT NULL,
  `message_new_profilecomment` tinyint(1) NOT NULL,
  `appear_in_search` tinyint(1) NOT NULL DEFAULT '1',
  `show_online_status` tinyint(1) NOT NULL DEFAULT '1',
  `log_profile_visits` tinyint(1) NOT NULL DEFAULT '1',
  `ignore_users` varchar(255) DEFAULT NULL,
  `public_profile_fields` bigint(15) unsigned DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of privacysetting
-- ----------------------------
INSERT INTO `privacysetting` VALUES ('1', '1', '1', '1', '1', '1', '1', '', null);
INSERT INTO `privacysetting` VALUES ('2', '1', '1', '1', '1', '1', '1', '', null);
INSERT INTO `privacysetting` VALUES ('3', '1', '1', '1', '1', '1', '1', '', null);
INSERT INTO `privacysetting` VALUES ('4', '1', '1', '1', '1', '1', '1', '', null);
INSERT INTO `privacysetting` VALUES ('5', '1', '1', '1', '1', '1', '1', '', null);
INSERT INTO `privacysetting` VALUES ('6', '1', '1', '1', '1', '1', '1', '', null);
INSERT INTO `privacysetting` VALUES ('7', '1', '1', '1', '1', '1', '1', '', null);
INSERT INTO `privacysetting` VALUES ('8', '1', '1', '1', '1', '1', '1', '', null);
INSERT INTO `privacysetting` VALUES ('9', '1', '1', '1', '1', '1', '1', '', null);
INSERT INTO `privacysetting` VALUES ('10', '1', '1', '1', '1', '1', '1', '', null);
INSERT INTO `privacysetting` VALUES ('11', '1', '1', '1', '1', '1', '1', '', null);
INSERT INTO `privacysetting` VALUES ('12', '1', '1', '1', '1', '1', '1', '', null);
INSERT INTO `privacysetting` VALUES ('13', '1', '1', '1', '1', '1', '1', '', null);
INSERT INTO `privacysetting` VALUES ('14', '1', '1', '1', '1', '1', '1', '', '1');

-- ----------------------------
-- Table structure for `profiles`
-- ----------------------------
DROP TABLE IF EXISTS `profiles`;
CREATE TABLE `profiles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `privacy` enum('protected','private','public') NOT NULL,
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `firstname` varchar(50) NOT NULL DEFAULT '',
  `show_friends` tinyint(1) DEFAULT '1',
  `allow_comments` tinyint(1) DEFAULT '1',
  `email` varchar(255) NOT NULL DEFAULT '',
  `street` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `about` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of profiles
-- ----------------------------
INSERT INTO `profiles` VALUES ('1', '3', '2012-12-30 15:44:51', 'protected', '', '', '1', '1', '', null, null, null);
INSERT INTO `profiles` VALUES ('2', '4', '2012-12-30 18:29:36', 'protected', '', '', '1', '1', '', null, null, null);
INSERT INTO `profiles` VALUES ('3', '5', '2012-12-30 18:42:11', 'protected', '', '', '1', '1', '', null, null, null);
INSERT INTO `profiles` VALUES ('4', '6', '2012-12-30 19:23:57', 'protected', '', '', '1', '1', '', null, null, null);
INSERT INTO `profiles` VALUES ('5', '7', '2012-12-30 19:28:21', 'protected', '', '', '1', '1', '', null, null, null);
INSERT INTO `profiles` VALUES ('6', '8', '2012-12-30 19:29:17', 'protected', '', '', '1', '1', '', null, null, null);
INSERT INTO `profiles` VALUES ('7', '9', '2012-12-30 19:37:24', 'protected', '', '', '1', '1', '', null, null, null);
INSERT INTO `profiles` VALUES ('8', '10', '2012-12-30 23:45:40', 'protected', 'lavie', 'sharon', '1', '1', 'sharonla21@hotmail.com', null, null, null);
INSERT INTO `profiles` VALUES ('9', '11', '2012-12-30 23:57:17', 'protected', 'lavie', 'sharon', '1', '1', 'sharonla21@hotmail.com', null, null, null);
INSERT INTO `profiles` VALUES ('10', '12', '2012-12-31 00:48:08', 'protected', 'lavie', 'sharon', '1', '1', 'sharonla21@hotmail.com', null, null, null);
INSERT INTO `profiles` VALUES ('11', '13', '2012-12-31 00:57:30', 'protected', 'lavie', 'sharon', '1', '1', 'sharonla1981@hotmail.com', null, null, null);
INSERT INTO `profiles` VALUES ('12', '14', '2012-12-31 13:50:58', 'protected', 'lavie', 'sharon', '0', '1', 'sharonla1981@gmail.com', null, null, null);

-- ----------------------------
-- Table structure for `profile_comment`
-- ----------------------------
DROP TABLE IF EXISTS `profile_comment`;
CREATE TABLE `profile_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `createtime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of profile_comment
-- ----------------------------

-- ----------------------------
-- Table structure for `profile_fields`
-- ----------------------------
DROP TABLE IF EXISTS `profile_fields`;
CREATE TABLE `profile_fields` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `field_group_id` int(10) unsigned NOT NULL DEFAULT '0',
  `varname` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `hint` text NOT NULL,
  `field_type` varchar(50) NOT NULL,
  `field_size` int(3) NOT NULL DEFAULT '0',
  `field_size_min` int(3) NOT NULL DEFAULT '0',
  `required` int(1) NOT NULL DEFAULT '0',
  `match` varchar(255) NOT NULL,
  `range` varchar(255) NOT NULL,
  `error_message` varchar(255) NOT NULL,
  `other_validator` varchar(255) NOT NULL,
  `default` varchar(255) NOT NULL,
  `position` int(3) NOT NULL DEFAULT '0',
  `visible` int(1) NOT NULL DEFAULT '0',
  `related_field_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `varname` (`varname`,`visible`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of profile_fields
-- ----------------------------
INSERT INTO `profile_fields` VALUES ('1', '0', 'email', 'Email Address', 'email', 'TEXT', '50', '10', '1', '', '', 'not an email', '0', 'null', '1', '1', null);
INSERT INTO `profile_fields` VALUES ('2', '0', 'firstname', 'First Name', 'first name', 'TEXT', '30', '2', '1', '', '', 'too short', '0', 'null', '2', '1', null);
INSERT INTO `profile_fields` VALUES ('3', '0', 'lastname', 'Last Name', 'last name', 'TEXT', '40', '2', '1', '', '', 'too short', '0', 'null', '3', '1', null);

-- ----------------------------
-- Table structure for `profile_fields_group`
-- ----------------------------
DROP TABLE IF EXISTS `profile_fields_group`;
CREATE TABLE `profile_fields_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_name` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `position` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of profile_fields_group
-- ----------------------------
INSERT INTO `profile_fields_group` VALUES ('1', 'beavers', 'Beavers', '0');

-- ----------------------------
-- Table structure for `profile_visit`
-- ----------------------------
DROP TABLE IF EXISTS `profile_visit`;
CREATE TABLE `profile_visit` (
  `visitor_id` int(11) NOT NULL,
  `visited_id` int(11) NOT NULL,
  `timestamp_first_visit` int(11) NOT NULL,
  `timestamp_last_visit` int(11) NOT NULL,
  `num_of_visits` int(11) NOT NULL,
  PRIMARY KEY (`visitor_id`,`visited_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of profile_visit
-- ----------------------------

-- ----------------------------
-- Table structure for `roles`
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `selectable` tinyint(1) NOT NULL COMMENT 'Selectable on Registration?',
  `searchable` tinyint(1) NOT NULL COMMENT 'Can be searched',
  `autoassign` tinyint(1) NOT NULL COMMENT 'Autoassign on new users',
  `is_membership_possible` tinyint(1) NOT NULL,
  `price` double DEFAULT NULL COMMENT 'Price (when using membership module)',
  `duration` int(11) DEFAULT NULL COMMENT 'How long a membership is valid',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of roles
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_area`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_area`;
CREATE TABLE `tbl_area` (
  `area_id` int(11) NOT NULL AUTO_INCREMENT,
  `area_type_id` int(11) NOT NULL,
  `descr` varchar(50) NOT NULL,
  `size` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) NOT NULL,
  `update_user_id` int(11) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`area_id`),
  KEY `area_type` (`area_type_id`) USING BTREE,
  KEY `project` (`project_id`) USING BTREE,
  CONSTRAINT `tbl_area_ibfk_1` FOREIGN KEY (`area_type_id`) REFERENCES `tbl_area_type` (`area_type_id`),
  CONSTRAINT `tbl_area_ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `tbl_project` (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_area
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_area_type`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_area_type`;
CREATE TABLE `tbl_area_type` (
  `area_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(50) NOT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) NOT NULL,
  `update_user_id` int(11) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`area_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_area_type
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_beaver`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_beaver`;
CREATE TABLE `tbl_beaver` (
  `beaver_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'connection table for connecting tbl_user & tbl_project\r\n',
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) NOT NULL,
  `update_user_id` int(11) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`beaver_id`),
  KEY `fk_tbl_beaver_tbl_project_1` (`project_id`) USING BTREE,
  KEY `fk_tbl_beaver_user` (`user_id`) USING HASH,
  CONSTRAINT `fk_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `tbl_beaver_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `tbl_project` (`project_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_beaver
-- ----------------------------
INSERT INTO `tbl_beaver` VALUES ('15', '14', '23', '2013-01-02 14:57:54', '14', '14', '2013-01-02 14:57:54');
INSERT INTO `tbl_beaver` VALUES ('16', '14', '24', '2013-01-02 14:59:48', '14', '14', '2013-01-02 14:59:48');
INSERT INTO `tbl_beaver` VALUES ('17', '14', '25', '2013-01-02 19:28:37', '14', '14', '2013-01-02 19:28:37');
INSERT INTO `tbl_beaver` VALUES ('18', '14', '26', '2013-01-02 23:56:39', '14', '14', '2013-01-02 23:56:39');
INSERT INTO `tbl_beaver` VALUES ('19', '14', '27', '2013-01-02 23:58:14', '14', '14', '2013-01-02 23:58:14');

-- ----------------------------
-- Table structure for `tbl_category`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `descr` varchar(50) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) NOT NULL,
  `update_user_id` int(11) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_category
-- ----------------------------
INSERT INTO `tbl_category` VALUES ('1', 'Flooring', null, '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `tbl_category` VALUES ('2', 'Lights', null, '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `tbl_comment`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_comment`;
CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `descr` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `object_type_id` varchar(255) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) NOT NULL,
  `update_user_id` int(11) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_comment
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_file`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_file`;
CREATE TABLE `tbl_file` (
  `file_id` int(11) NOT NULL AUTO_INCREMENT,
  `object_type_id` int(11) DEFAULT NULL,
  `object_id` int(11) DEFAULT NULL,
  `file_type_id` int(11) DEFAULT NULL,
  `descr` varchar(50) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `extention_id` int(11) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) NOT NULL,
  `update_user_id` int(11) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`file_id`),
  KEY `fk_tbl_file_tbl_object_type_1` (`object_type_id`) USING BTREE,
  CONSTRAINT `tbl_file_ibfk_1` FOREIGN KEY (`object_type_id`) REFERENCES `tbl_object_type` (`object_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_file
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_item`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_item`;
CREATE TABLE `tbl_item` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) NOT NULL,
  `update_user_id` int(11) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_item
-- ----------------------------
INSERT INTO `tbl_item` VALUES ('1', 'lamp', '2', null, '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `tbl_item` VALUES ('2', 'bulb', '2', null, '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `tbl_item` VALUES ('3', 'black ceramic tile', '1', null, '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `tbl_item` VALUES ('4', 'parquet', '1', null, '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `tbl_item_area`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_item_area`;
CREATE TABLE `tbl_item_area` (
  `item_area_id` int(11) NOT NULL DEFAULT '0',
  `proj_item_id` int(11) DEFAULT NULL,
  `area_id` int(11) DEFAULT NULL,
  `amount` int(4) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) NOT NULL,
  `update_user_id` int(11) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`item_area_id`),
  KEY `fk_tbl_item_area_tbl_proj_item_1` (`proj_item_id`) USING BTREE,
  CONSTRAINT `tbl_item_area_ibfk_1` FOREIGN KEY (`proj_item_id`) REFERENCES `tbl_proj_item` (`proj_item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_item_area
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_object_type`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_object_type`;
CREATE TABLE `tbl_object_type` (
  `object_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `descr` varchar(50) NOT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) NOT NULL,
  `update_user_id` int(11) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`object_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_object_type
-- ----------------------------
INSERT INTO `tbl_object_type` VALUES ('1', 'offer_id', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `tbl_object_type` VALUES ('2', 'project_id', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `tbl_object_type` VALUES ('3', 'supplier_id', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `tbl_object_type` VALUES ('4', 'user_id', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `tbl_object_type` VALUES ('5', 'proj_item_id', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `tbl_object_type` VALUES ('6', 'general', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `tbl_offer`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_offer`;
CREATE TABLE `tbl_offer` (
  `offer_id` int(11) NOT NULL AUTO_INCREMENT,
  `proj_item_id` int(11) NOT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `unit_price` float(11,2) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) NOT NULL,
  `update_user_id` int(11) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`offer_id`),
  KEY `fk_tbl_offer_tbl_supplier_1` (`supplier_id`) USING BTREE,
  CONSTRAINT `tbl_offer_ibfk_1` FOREIGN KEY (`offer_id`) REFERENCES `tbl_proj_item` (`proj_item_id`),
  CONSTRAINT `tbl_offer_ibfk_2` FOREIGN KEY (`supplier_id`) REFERENCES `tbl_supplier` (`supplier_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_offer
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_project`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_project`;
CREATE TABLE `tbl_project` (
  `project_id` int(11) NOT NULL AUTO_INCREMENT,
  `descr` varchar(200) NOT NULL,
  `type_id` int(11) NOT NULL,
  `location_lat` float(11,8) NOT NULL,
  `location_lon` float(11,8) NOT NULL,
  `address` varchar(50) NOT NULL,
  `currency_id` int(11) NOT NULL,
  `planned` float(11,2) DEFAULT NULL COMMENT 'full project',
  `uom_id` int(2) NOT NULL COMMENT 'meter or inch',
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) NOT NULL,
  `update_user_id` int(11) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`project_id`),
  KEY `fk_cmb_tbl_currency_tbl_project_1` (`currency_id`) USING BTREE,
  KEY `fk_tbl_type_tbl_project_1` (`type_id`),
  CONSTRAINT `fk_tbl_type_tbl_project_1` FOREIGN KEY (`type_id`) REFERENCES `tbl_type` (`type_id`) ON UPDATE CASCADE,
  CONSTRAINT `tbl_project_ibfk_1` FOREIGN KEY (`currency_id`) REFERENCES `cmb_tbl_currency` (`currency_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_project
-- ----------------------------
INSERT INTO `tbl_project` VALUES ('1', 'steinbergs family - lotem', '1', '34.24567795', '0.00000000', 'lotem 3', '1', '200000.00', '0', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `tbl_project` VALUES ('2', 'fgfgf', '1', '1.00000000', '0.00000000', 'erer', '1', null, '1', '2012-12-24 00:00:00', '0', '0', '2012-12-24 00:00:00');
INSERT INTO `tbl_project` VALUES ('3', '43434', '1', '1.00000000', '0.00000000', 'dffd', '1', null, '1', '2012-12-24 00:00:00', '0', '0', '2012-12-24 00:00:00');
INSERT INTO `tbl_project` VALUES ('11', 'fgfg', '1', '1.00000000', '0.00000000', 'fdfdf', '1', null, '1', '2012-12-24 00:00:00', '2', '2', '2012-12-24 00:00:00');
INSERT INTO `tbl_project` VALUES ('12', 'fgfg', '1', '1.00000000', '0.00000000', 'fdfdf', '1', null, '1', '2012-12-24 00:00:00', '2', '2', '2012-12-24 00:00:00');
INSERT INTO `tbl_project` VALUES ('13', 'fgfg', '1', '1.00000000', '0.00000000', 'fdfdf', '1', null, '1', '2012-12-25 00:58:21', '2', '2', '2012-12-25 00:58:21');
INSERT INTO `tbl_project` VALUES ('14', 'fgfg', '1', '1.00000000', '0.00000000', 'fdfdf', '1', null, '1', '2012-12-24 00:00:00', '2', '2', '2012-12-24 00:00:00');
INSERT INTO `tbl_project` VALUES ('15', 'fgfg', '1', '1.00000000', '0.00000000', 'fdfdf', '1', null, '1', '2012-12-24 00:00:00', '2', '2', '2012-12-24 00:00:00');
INSERT INTO `tbl_project` VALUES ('16', 'fgfg', '1', '1.00000000', '0.00000000', 'fdfdf', '1', null, '1', '2012-12-24 00:00:00', '2', '2', '2012-12-24 00:00:00');
INSERT INTO `tbl_project` VALUES ('17', 'fgfg', '1', '1.00000000', '0.00000000', 'fdfdf', '1', null, '1', '2012-12-24 00:00:00', '2', '2', '2012-12-24 00:00:00');
INSERT INTO `tbl_project` VALUES ('18', 'fgfg', '1', '1.00000000', '0.00000000', 'fdfdf', '1', null, '1', '2012-12-24 00:00:00', '2', '2', '2012-12-24 00:00:00');
INSERT INTO `tbl_project` VALUES ('19', 'fgfg', '1', '1.00000000', '0.00000000', 'fdfdf', '1', null, '1', '2012-12-24 00:00:00', '2', '2', '2012-12-24 00:00:00');
INSERT INTO `tbl_project` VALUES ('20', 'fgfg', '1', '1.00000000', '0.00000000', 'fdfdf', '1', null, '1', '2012-12-24 00:00:00', '2', '2', '2012-12-24 00:00:00');
INSERT INTO `tbl_project` VALUES ('21', 'testing', '1', '32.06344223', '34.82839203', 'Pinhas Rutenberg, Ramat Gan, Israel', '1', '1.00', '1', '2013-01-02 14:55:09', '14', '0', '2013-01-02 14:55:10');
INSERT INTO `tbl_project` VALUES ('22', 'testing', '1', '32.06344223', '34.82839203', 'Pinhas Rutenberg, Ramat Gan, Israel', '1', '1.00', '1', '2013-01-02 14:57:12', '14', '0', '2013-01-02 14:57:12');
INSERT INTO `tbl_project` VALUES ('23', 'testing', '1', '32.06344223', '34.82839203', 'Pinhas Rutenberg, Ramat Gan, Israel', '1', '1.00', '1', '2013-01-02 14:57:54', '14', '0', '2013-01-02 14:57:54');
INSERT INTO `tbl_project` VALUES ('24', 'testing', '1', '32.06344223', '34.82839203', 'Pinhas Rutenberg, Ramat Gan, Israel', '1', '1.00', '1', '2013-01-02 14:59:48', '14', '0', '2013-01-02 14:59:48');
INSERT INTO `tbl_project` VALUES ('25', 'testing', '2', '32.11306000', '34.82537079', 'Pinhas Rosen, Tel Aviv-Yafo, Israel', '66', null, '1', '2013-01-02 19:28:37', '14', '0', '2013-01-02 19:28:37');
INSERT INTO `tbl_project` VALUES ('26', 'my new home', '1', '32.11306000', '34.82537079', 'Pinhas Rosen, Tel Aviv-Yafo, Israel', '66', '200000.00', '1', '2013-01-02 23:56:39', '14', '0', '2013-01-02 23:56:39');
INSERT INTO `tbl_project` VALUES ('27', 'my new home', '1', '32.00849533', '34.77795029', 'Pinhas Eilon, Holon, Israel', '66', null, '1', '2013-01-02 23:58:14', '14', '0', '2013-01-02 23:58:14');

-- ----------------------------
-- Table structure for `tbl_proj_category`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_proj_category`;
CREATE TABLE `tbl_proj_category` (
  `proj_category_id` int(11) NOT NULL DEFAULT '0',
  `category_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `planned` float(255,0) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) NOT NULL,
  `update_user_id` int(11) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`proj_category_id`),
  KEY `fk_tbl_proj_category_tbl_category_1` (`category_id`) USING BTREE,
  KEY `fk_tbl_proj_category_tbl_project_1` (`project_id`) USING BTREE,
  CONSTRAINT `tbl_proj_category_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `tbl_category` (`category_id`),
  CONSTRAINT `tbl_proj_category_ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `tbl_project` (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_proj_category
-- ----------------------------
INSERT INTO `tbl_proj_category` VALUES ('2', '1', '1', '50', '2012-12-19 17:03:04', '0', '0', '2012-12-19 17:03:12');
INSERT INTO `tbl_proj_category` VALUES ('3', '1', '1', '60', '2012-12-19 16:35:00', '0', '0', '2012-12-19 16:35:00');

-- ----------------------------
-- Table structure for `tbl_proj_item`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_proj_item`;
CREATE TABLE `tbl_proj_item` (
  `proj_item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `descr` varchar(100) DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `planned` float(11,2) DEFAULT NULL,
  `unit_price` float(11,2) DEFAULT NULL,
  `amount` float(11,2) DEFAULT NULL,
  `proj_category_id` int(11) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) NOT NULL,
  `update_user_id` int(11) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`proj_item_id`),
  KEY `supplier_item_proj_fk` (`supplier_id`) USING BTREE,
  KEY `fk_tbl_proj_item_tbl_proj_category_1` (`proj_category_id`) USING BTREE,
  KEY `item_item_proj_fk` (`item_id`) USING BTREE,
  CONSTRAINT `tbl_proj_item_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `tbl_item` (`item_id`),
  CONSTRAINT `tbl_proj_item_ibfk_2` FOREIGN KEY (`proj_category_id`) REFERENCES `tbl_proj_category` (`proj_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_proj_item
-- ----------------------------
INSERT INTO `tbl_proj_item` VALUES ('1', '1', null, null, '50.00', '20.00', '2.00', '2', '2012-12-19 16:31:37', '0', '0', '2012-12-19 16:31:45');
INSERT INTO `tbl_proj_item` VALUES ('2', '1', null, null, '20.00', '20.00', '1.00', '3', '2012-12-19 16:36:10', '0', '0', '2012-12-19 16:36:17');

-- ----------------------------
-- Table structure for `tbl_supplier`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_supplier`;
CREATE TABLE `tbl_supplier` (
  `supplier_id` int(11) NOT NULL AUTO_INCREMENT,
  `descr` varchar(100) NOT NULL,
  `city_id` int(11) NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `cell_phone` varchar(50) DEFAULT NULL,
  `contact_person` varchar(50) DEFAULT NULL,
  `web_site` varchar(50) DEFAULT NULL,
  `beaver_id` int(11) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) NOT NULL,
  `update_user_id` int(11) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`supplier_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_supplier
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_tag`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_tag`;
CREATE TABLE `tbl_tag` (
  `tag_id` int(11) NOT NULL DEFAULT '0',
  `descr` varchar(255) DEFAULT NULL,
  `beaver_id` int(11) DEFAULT NULL,
  `object_type_id` int(11) DEFAULT NULL,
  `object_id` int(11) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) NOT NULL,
  `update_user_id` int(11) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`tag_id`),
  KEY `fk_tbl_tag_tbl_object_type_1` (`object_type_id`) USING BTREE,
  CONSTRAINT `tbl_tag_ibfk_1` FOREIGN KEY (`object_type_id`) REFERENCES `tbl_object_type` (`object_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_tag
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_type`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_type`;
CREATE TABLE `tbl_type` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `descr` varchar(50) NOT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) NOT NULL,
  `update_user_id` int(11) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_type
-- ----------------------------
INSERT INTO `tbl_type` VALUES ('1', 'Renovation', '2012-12-27 13:30:14', '0', '0', '2012-12-27 13:30:23');
INSERT INTO `tbl_type` VALUES ('2', 'New House', '2012-12-27 13:31:54', '0', '0', '2012-12-27 13:32:01');

-- ----------------------------
-- Table structure for `tbl_user`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `password` varchar(50) NOT NULL,
  `location_id` int(11) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `profession_id` int(11) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) NOT NULL,
  `update_user_id` int(11) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES ('2', 'sharon lavie', '/me.jpg', 'sharonla1981@gmail.com', '1981-04-20', '2a17966b70cb07f0b9eb9ebf24c7c414', '1', null, null, '2012-12-24 09:36:01', '0', '0', '2012-12-24 09:36:10');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `activationKey` varchar(128) NOT NULL DEFAULT '',
  `createtime` int(10) NOT NULL DEFAULT '0',
  `lastvisit` int(10) NOT NULL DEFAULT '0',
  `lastaction` int(10) NOT NULL DEFAULT '0',
  `lastpasswordchange` int(10) NOT NULL DEFAULT '0',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  `avatar` varchar(255) DEFAULT NULL,
  `notifyType` enum('None','Digest','Instant','Treshhold') DEFAULT 'Instant',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `status` (`status`),
  KEY `superuser` (`superuser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------

-- ----------------------------
-- Table structure for `usergroup`
-- ----------------------------
DROP TABLE IF EXISTS `usergroup`;
CREATE TABLE `usergroup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `owner_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usergroup
-- ----------------------------

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `activationKey` varchar(128) NOT NULL DEFAULT '',
  `createtime` int(10) NOT NULL DEFAULT '0',
  `lastvisit` int(10) NOT NULL DEFAULT '0',
  `lastaction` int(10) NOT NULL DEFAULT '0',
  `lastpasswordchange` int(10) NOT NULL DEFAULT '0',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  `avatar` varchar(255) DEFAULT NULL,
  `notifyType` enum('None','Digest','Instant','Treshhold') DEFAULT 'Instant',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `status` (`status`),
  KEY `superuser` (`superuser`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'sharon', '2a17966b70cb07f0b9eb9ebf24c7c414', '5fda60dab1c8221f1756d698250cdbb8', '1356865419', '0', '0', '0', '0', '0', null, 'Instant');
INSERT INTO `users` VALUES ('2', 'sharon1', '2a17966b70cb07f0b9eb9ebf24c7c414', '92fea620528f059d54e3f2c92b16ff24', '1356865613', '0', '0', '0', '0', '0', null, 'Instant');
INSERT INTO `users` VALUES ('3', 'sharon2', '2a17966b70cb07f0b9eb9ebf24c7c414', 'df46d420cdd66060640005729dd048ee', '1356875091', '0', '0', '0', '0', '0', null, 'Instant');
INSERT INTO `users` VALUES ('4', 'sharon3', '2a17966b70cb07f0b9eb9ebf24c7c414', '86d8f7012537e8780f80452d4ef5242b', '1356884976', '0', '0', '0', '0', '0', null, 'Instant');
INSERT INTO `users` VALUES ('5', 'sharon4', '2a17966b70cb07f0b9eb9ebf24c7c414', '32e8bbfc286a30ad6a09cf610261f2b3', '1356885731', '0', '0', '0', '0', '0', null, 'Instant');
INSERT INTO `users` VALUES ('6', 'sharon5', '2a17966b70cb07f0b9eb9ebf24c7c414', '53041cbe4944006638efe14cbd124cb5', '1356888237', '0', '0', '0', '0', '0', null, 'Instant');
INSERT INTO `users` VALUES ('7', 'sharon6', '2a17966b70cb07f0b9eb9ebf24c7c414', 'f34dc94274fb5659bd9d77cff550e660', '1356888500', '0', '0', '0', '0', '0', null, 'Instant');
INSERT INTO `users` VALUES ('8', 'sharon7', '2a17966b70cb07f0b9eb9ebf24c7c414', '70072a80ea3d311e529159d2f54a2625', '1356888547', '0', '0', '0', '0', '0', null, 'Instant');
INSERT INTO `users` VALUES ('9', 'sharon8', '2a17966b70cb07f0b9eb9ebf24c7c414', 'bf85a290256b237c352db49bd784a46f', '1356889044', '0', '0', '0', '0', '0', null, 'Instant');
INSERT INTO `users` VALUES ('10', 'sharon10', '2a17966b70cb07f0b9eb9ebf24c7c414', '51f1db96f8d394734e3dcfe6c2ad9d95', '1356903932', '0', '0', '0', '0', '0', null, 'Instant');
INSERT INTO `users` VALUES ('11', 'sharon11', '2a17966b70cb07f0b9eb9ebf24c7c414', '0b4f436dab79916b4273ccf32c99fd09', '1356904637', '0', '0', '0', '0', '0', null, 'Instant');
INSERT INTO `users` VALUES ('12', 'sharon12', '2a17966b70cb07f0b9eb9ebf24c7c414', '8f6a82a7c91e69a263c47a6f6df6e73c', '1356907688', '0', '0', '0', '0', '0', null, 'Instant');
INSERT INTO `users` VALUES ('13', 'sharon13', '2a17966b70cb07f0b9eb9ebf24c7c414', 'ff55e8f279e015c8a89e8cf99fe008ee', '1356908249', '0', '0', '0', '0', '1', null, 'Instant');
INSERT INTO `users` VALUES ('14', 'sharon14', '2a17966b70cb07f0b9eb9ebf24c7c414', '8065927130defdeea94295fbcc2566e2', '1356908500', '1356954593', '0', '0', '0', '3', null, 'Instant');

-- ----------------------------
-- Table structure for `user_has_role`
-- ----------------------------
DROP TABLE IF EXISTS `user_has_role`;
CREATE TABLE `user_has_role` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_has_role
-- ----------------------------

-- ----------------------------
-- Table structure for `user_has_usergroup`
-- ----------------------------
DROP TABLE IF EXISTS `user_has_usergroup`;
CREATE TABLE `user_has_usergroup` (
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  `jointime` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_has_usergroup
-- ----------------------------

-- ----------------------------
-- Table structure for `yumsettings`
-- ----------------------------
DROP TABLE IF EXISTS `yumsettings`;
CREATE TABLE `yumsettings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `preserveProfiles` tinyint(1) NOT NULL DEFAULT '1',
  `enableAvatar` tinyint(1) NOT NULL DEFAULT '1',
  `registrationType` tinyint(1) NOT NULL DEFAULT '4',
  `enableRecovery` tinyint(1) NOT NULL DEFAULT '1',
  `enableProfileHistory` tinyint(1) NOT NULL DEFAULT '1',
  `messageSystem` enum('None','Plain','Dialog') NOT NULL DEFAULT 'Dialog',
  `notifyType` enum('None','Digest','Instant','User','Treshhold') NOT NULL DEFAULT 'User',
  `password_expiration_time` int(11) DEFAULT NULL,
  `readOnlyProfiles` tinyint(1) NOT NULL DEFAULT '0',
  `loginType` int(11) NOT NULL,
  `notifyemailchange` enum('oldemail','newemail') DEFAULT NULL,
  `enableCaptcha` tinyint(1) NOT NULL DEFAULT '1',
  `ldap_host` varchar(255) DEFAULT NULL,
  `ldap_port` int(5) DEFAULT NULL,
  `ldap_basedn` varchar(255) DEFAULT NULL,
  `ldap_protocol` enum('2','3') NOT NULL DEFAULT '3',
  `ldap_autocreate` tinyint(1) NOT NULL DEFAULT '1',
  `ldap_tls` tinyint(1) NOT NULL DEFAULT '0',
  `ldap_transfer_attr` tinyint(1) NOT NULL DEFAULT '1',
  `ldap_transfer_pw` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yumsettings
-- ----------------------------
INSERT INTO `yumsettings` VALUES ('1', 'Yum factory Default', '1', '1', '1', '4', '1', '1', 'Dialog', 'Instant', '30', '0', '3', null, '1', null, null, null, '3', '1', '0', '1', '0');

-- ----------------------------
-- Table structure for `yumtextsettings`
-- ----------------------------
DROP TABLE IF EXISTS `yumtextsettings`;
CREATE TABLE `yumtextsettings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language` enum('en_us','de','fr','pl','ru','es') NOT NULL DEFAULT 'en_us',
  `text_registration_header` text,
  `text_registration_footer` text,
  `text_login_header` text,
  `text_login_footer` text,
  `text_email_registration` text,
  `subject_email_registration` text,
  `text_email_recovery` text,
  `text_email_activation` text,
  `text_friendship_new` text,
  `text_friendship_confirmed` text,
  `text_profilecomment_new` text,
  `text_message_new` text,
  `text_membership_ordered` text,
  `text_payment_arrived` text,
  `text_membership_header` text,
  `text_membership_footer` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yumtextsettings
-- ----------------------------
INSERT INTO `yumtextsettings` VALUES ('1', 'en_us', 'Welcome at the registration System', 'When registering at this System, you automatically accept our terms.', 'Welcome!', '', 'You have registered for this Application. To confirm your E-Mail address, please visit {activation_url}', 'You have registered for an application', 'You have requested a new Password. To set your new Password,\n										please go to {activation_url}', 'Your account has been activated. Thank you for your registration.', 'New friendship Request from {username}: {message}. To accept or ignore this request, go to your friendship page: {link_friends} or go to your profile: {link_profile}', 'The User {username} has accepted your friendship request', 'You have a new profile comment from {username}: {message} visit your profile: {link_profile}', 'You have received a new message from {username}: {message}', 'Your order of membership {membership} on {order_date} has been taken. Your order Number is {id}. You have choosen the payment style {payment}.', 'Your payment has been received on {payment_date} and your Membership {id} is now active', 'Please select a Membership of your choice', 'Your advantages: <br /> Premium: Everything is better <br /> Business: Everything is much better ');
INSERT INTO `yumtextsettings` VALUES ('2', 'de', 'Willkommen zum System.', 'Mit der Anmeldung bestätigen Sie unsere allgemeinen Bedingungen.', 'Willkommen!', '', 'Sie haben sich für unsere Applikation registriert. Bitte bestätigen Sie ihre E-Mail adresse mit diesem Link: {activation_url}', 'Sie haben sich für eine Applikation registriert.', 'Sie haben ein neues Passwort angefordert. Bitte klicken Sie diesen link: {activation_url}', 'Ihr Konto wurde freigeschaltet.', 'Der Benutzer {username} hat Ihnen eine Freundschaftsanfrage gesendet. \n\n							 Nachricht: {message}\n\n							 Klicken sie <a href=\"{link_friends}\">hier</a>, um diese Anfrage zu bestätigen oder zu ignorieren. Alternativ können sie <a href=\"{link_profile}\">hier</a> auf ihre Profilseite zugreifen.', 'Der Benutzer {username} hat ihre Freundschaftsanfrage bestätigt.', '\n							 Benutzer {username} hat Ihnen eine Nachricht auf Ihrer Pinnwand hinterlassen: \n\n							 {message}\n\n							 <a href=\"{link}\">hier</a> geht es direkt zu Ihrer Pinnwand!', 'Sie haben eine neue Nachricht von {username} bekommen: {message}', 'Ihre Bestellung der Mitgliedschaft {membership} wurde am {order_date} entgegen genommen. Die gewählte Zahlungsart ist {payment}. Die Auftragsnummer lautet {id}.', 'Ihre Zahlung wurde am {payment_date} entgegen genommen. Ihre Mitgliedschaft mit der Nummer {id} ist nun Aktiv.', 'Bitte wählen Sie ein Paket ihrer Wahl:', 'Ihre Vorteile: ');
INSERT INTO `yumtextsettings` VALUES ('3', 'es', 'Bienvenido al sistema de registro', 'Al registrarse en este sistema, usted está aceptando nuestros términos.', '¡Bienvenido!', '', 'Te has registrado en esta aplicación. Para confirmar tu dirección de correo electrónico, por favor, visita {activation_url}.', 'Te has registrado en esta aplicación.', 'Has solicitado una nueva contraseña. Para establecer una nueva contraseña, por favor ve a {activation_url}', 'Tu cuenta ha sido activada. Gracias por registrarte.', 'Has recibido una nueva solicitud de amistad de {user_from}: {message} Ve a tus contactos: {link}', 'Tienes un nuevo comentario en tu perfil de {username}: {message} visita tu perfil: {link}', 'Please translatore thisse hiere toh tha espagnola langsch {username}', 'Has recibido un mensaje de {username}: {message}', 'Tu orden de membresía {membership} de fecha {order_date} fué tomada. Tu número de orden es {id}. Escogiste como modo de pago {payment}.', 'Tu pago fué recibido en fecha {payment_date}. Ahora tu Membresía {id} ya está activa', 'Por favor, selecciona un tipo de Membresía', 'Las ventajas: <br /> Premium: Todo es mejor <br /> Business: Todo es aún mucho mejor ');
