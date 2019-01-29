/*
 Navicat Premium Data Transfer

 Source Server         : Mysql
 Source Server Type    : MySQL
 Source Server Version : 50616
 Source Host           : localhost:3306
 Source Schema         : soal6

 Target Server Type    : MySQL
 Target Server Version : 50616
 File Encoding         : 65001

 Date: 29/01/2019 16:23:35
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (1, 'Hadi');
INSERT INTO `categories` VALUES (2, 'Aldo');
INSERT INTO `categories` VALUES (3, 'Dodi');

-- ----------------------------
-- Table structure for hobbies
-- ----------------------------
DROP TABLE IF EXISTS `hobbies`;
CREATE TABLE `hobbies`  (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of hobbies
-- ----------------------------
INSERT INTO `hobbies` VALUES (1, 'Bird  wacthing');
INSERT INTO `hobbies` VALUES (2, 'Martial arts');
INSERT INTO `hobbies` VALUES (3, 'Hiking');
INSERT INTO `hobbies` VALUES (4, 'Archery');
INSERT INTO `hobbies` VALUES (5, 'Beekeeping');
INSERT INTO `hobbies` VALUES (6, 'Book restoration');

-- ----------------------------
-- Table structure for hobbies_having
-- ----------------------------
DROP TABLE IF EXISTS `hobbies_having`;
CREATE TABLE `hobbies_having`  (
  `id` int(5) NOT NULL,
  `categories_id` int(5) NULL DEFAULT NULL,
  `hobbies_id` int(5) NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of hobbies_having
-- ----------------------------
INSERT INTO `hobbies_having` VALUES (1, 1, 1);
INSERT INTO `hobbies_having` VALUES (2, 1, 2);
INSERT INTO `hobbies_having` VALUES (3, 1, 4);
INSERT INTO `hobbies_having` VALUES (4, 2, 3);
INSERT INTO `hobbies_having` VALUES (5, 2, 5);
INSERT INTO `hobbies_having` VALUES (0, 3, 6);

-- ----------------------------
-- View structure for viewer
-- ----------------------------
DROP VIEW IF EXISTS `viewer`;
CREATE ALGORITHM = UNDEFINED DEFINER = `root`@`localhost` SQL SECURITY DEFINER VIEW `viewer` AS SELECT s.ID,firstname AS `categories`, 
GROUP_CONCAT(p.name ORDER BY p.name SEPARATOR ', ' ) AS hobbies
FROM hobbies_having sp, categories s, hobbies p 
WHERE sp.categories_id = s.ID AND sp.hobbies_id = p.ID
GROUP BY sp.categories_id ORDER BY s.firstname ;

SET FOREIGN_KEY_CHECKS = 1;
