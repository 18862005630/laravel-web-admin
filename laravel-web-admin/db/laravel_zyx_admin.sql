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

 Date: 18/09/2019 15:39:41
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
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2019_09_12_035251_create_admin_accounts_table', 2);
INSERT INTO `migrations` VALUES (3, '2019_09_12_035648_create_admin_roles_table', 3);

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
