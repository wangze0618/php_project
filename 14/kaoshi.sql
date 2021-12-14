/*
 Navicat MySQL Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100113
 Source Host           : localhost:3306
 Source Schema         : kaoshi

 Target Server Type    : MySQL
 Target Server Version : 100113
 File Encoding         : 65001

 Date: 30/11/2021 08:18:18
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for chengji
-- ----------------------------
DROP TABLE IF EXISTS `chengji`;
CREATE TABLE `chengji`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `kaohao` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `xm` varchar(12) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cj` int NULL DEFAULT NULL,
  `zhaopian` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of chengji
-- ----------------------------
INSERT INTO `chengji` VALUES (1, '2020552001', 'æŽå››', 0, '12345');
INSERT INTO `chengji` VALUES (2, '2020552001', '李四', 0, '12345');
INSERT INTO `chengji` VALUES (3, '2002153001', '大倪', 90, 'adfasdf');
INSERT INTO `chengji` VALUES (4, '12355', '151235', 22, '321515');
INSERT INTO `chengji` VALUES (7, '1111111', '张', 99, '99');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `zhuceshijian` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'admin', '123456', '2021-11-22 23:00:08.818756');

SET FOREIGN_KEY_CHECKS = 1;