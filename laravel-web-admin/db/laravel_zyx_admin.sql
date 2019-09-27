/*
 Navicat Premium Data Transfer

 Source Server         : laravel-web-admin
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : localhost:3306
 Source Schema         : laravel_zyx_admin

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 27/09/2019 17:29:24
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin_accounts
-- ----------------------------
DROP TABLE IF EXISTS `admin_accounts`;
CREATE TABLE `admin_accounts`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `account` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT '账号',
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT '密码',
  `role_id` int(11) NULL DEFAULT NULL COMMENT '角色',
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin_accounts
-- ----------------------------
INSERT INTO `admin_accounts` VALUES (1, 'zyx', '$2y$10$qjoSDNU/cZ2GRoIy21s85OTjFDXFPjn6Xj8Cvk/itKqrlUsGnYwom', 1, '2019-09-12 07:19:39', '2019-09-12 07:19:39');
INSERT INTO `admin_accounts` VALUES (9, '222', '$2y$10$oz34mRKLFtodCblrVOe.IedkIrcGbIAER0yyuARfMudjvqdhvyuDi', NULL, '2019-09-17 10:25:40', '2019-09-17 10:25:40');
INSERT INTO `admin_accounts` VALUES (10, '333', '$2y$10$zehWL0mzABG3k9jIF1Wzi.lL8KQ2GbHwaqHvYjfXxX.nuSNoZZcVi', NULL, '2019-09-17 10:26:05', '2019-09-17 10:26:05');
INSERT INTO `admin_accounts` VALUES (11, '44', '$2y$10$mchCvtG4hvJeLFpsvAD5meVdgSBtnyn2GgAggWTcpeMQ9zgnpp4e.', NULL, '2019-09-17 10:26:53', '2019-09-17 10:26:53');
INSERT INTO `admin_accounts` VALUES (12, '666', '$2y$10$9pIwHJXDYRLzyN.qKvZNK.VUHmhC3Np1A.uUv6VJD2ZkZ/6gjtGxi', NULL, '2019-09-17 10:31:09', '2019-09-17 10:31:09');

-- ----------------------------
-- Table structure for admin_photos
-- ----------------------------
DROP TABLE IF EXISTS `admin_photos`;
CREATE TABLE `admin_photos`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT '图片标题',
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT '图片路径',
  `tag` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT '图片标签',
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin_photos
-- ----------------------------
INSERT INTO `admin_photos` VALUES (1, 'CH', 'assets/images/gallery/our-gallery-1.jpg', 'massage beauty', '2019-09-27 09:02:16', '2019-09-27 09:02:16');
INSERT INTO `admin_photos` VALUES (2, 'CH', 'assets/images/gallery/our-gallery-2.jpg', 'massage beauty', '2019-09-27 09:02:16', '2019-09-27 09:02:16');
INSERT INTO `admin_photos` VALUES (3, 'CH', 'assets/images/gallery/our-gallery-3.jpg', 'massage', '2019-09-27 09:02:16', '2019-09-27 09:02:16');
INSERT INTO `admin_photos` VALUES (4, 'SJ', 'assets/images/gallery/our-gallery-4.jpg', 'skin-care', '2019-09-27 09:02:16', '2019-09-27 09:02:16');
INSERT INTO `admin_photos` VALUES (5, 'SJ', 'assets/images/gallery/our-gallery-5.jpg', 'skin-care beauty', '2019-09-27 09:02:16', '2019-09-27 09:02:16');
INSERT INTO `admin_photos` VALUES (6, 'SJ', 'assets/images/gallery/our-gallery-6.jpg', 'skin-care', '2019-09-27 09:02:16', '2019-09-27 09:02:16');
INSERT INTO `admin_photos` VALUES (7, 'CDD', 'assets/images/gallery/our-gallery-7.jpg', 'make-hair', '2019-09-27 09:02:16', '2019-09-27 09:02:16');
INSERT INTO `admin_photos` VALUES (8, 'CDD', 'assets/images/gallery/our-gallery-8.jpg', 'make-hair', '2019-09-27 09:02:16', '2019-09-27 09:02:16');
INSERT INTO `admin_photos` VALUES (9, 'CDD', 'assets/images/gallery/our-gallery-9.jpg', 'make-hair', '2019-09-27 09:02:16', '2019-09-27 09:02:16');
INSERT INTO `admin_photos` VALUES (10, 'THX', 'assets/images/gallery/our-gallery-10.jpg', 'spa', '2019-09-27 09:02:16', '2019-09-27 09:02:16');
INSERT INTO `admin_photos` VALUES (11, 'THX', 'assets/images/gallery/our-gallery-11.jpg', 'spa', '2019-09-27 09:02:16', '2019-09-27 09:02:16');
INSERT INTO `admin_photos` VALUES (12, 'THX', 'assets/images/gallery/our-gallery-12.jpg', 'spa', '2019-09-27 09:02:16', '2019-09-27 09:02:16');
INSERT INTO `admin_photos` VALUES (13, 'CYQ', 'assets/images/gallery/our-gallery-13.jpg', 'nail', '2019-09-27 09:02:16', '2019-09-27 09:02:16');
INSERT INTO `admin_photos` VALUES (14, 'CYQ', 'assets/images/gallery/our-gallery-14.jpg', 'nail', '2019-09-27 09:02:16', '2019-09-27 09:02:16');
INSERT INTO `admin_photos` VALUES (15, 'CYQ', 'assets/images/gallery/our-gallery-15.jpg', 'nail', '2019-09-27 09:02:16', '2019-09-27 09:02:16');

-- ----------------------------
-- Table structure for admin_roles
-- ----------------------------
DROP TABLE IF EXISTS `admin_roles`;
CREATE TABLE `admin_roles`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT '角色名',
  `privileges` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT '权限',
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin_roles
-- ----------------------------
INSERT INTO `admin_roles` VALUES (1, '超级管理员', '0', '2019-09-12 07:14:06', '2019-09-12 07:14:06');

-- ----------------------------
-- Table structure for admin_setting
-- ----------------------------
DROP TABLE IF EXISTS `admin_setting`;
CREATE TABLE `admin_setting`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `site_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT '站点名称',
  `site_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT '站点域名',
  `company_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT '公司名称',
  `company_addr` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT '公司地址',
  `mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT '联系电话',
  `fax` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT '传真',
  `wx` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT '微信',
  `qq` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT 'QQ',
  `zip_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT '邮编',
  `copyright` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT '版权归属',
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin_setting
-- ----------------------------
INSERT INTO `admin_setting` VALUES (1, '后台管理系统', 'http://127.0.0.1:8000/', 'zyxchsjcdd', '深圳市龙华区', '19849975661', '123456789', '78945612', '123456789', '10000', 'Copyright © 2019.ZYX All rights reserved.', '2019-09-25 15:52:51', '2019-09-27 08:27:18');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2019_09_12_035251_create_admin_accounts_table', 2);
INSERT INTO `migrations` VALUES (3, '2019_09_12_035648_create_admin_roles_table', 3);
INSERT INTO `migrations` VALUES (4, '2019_09_26_073446_create_admin_setting_table', 4);
INSERT INTO `migrations` VALUES (5, '2019_09_27_083047_create_admin_photos_table', 5);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
