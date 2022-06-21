# new module
module new fontend<br>
![screenshot_1655806842](https://user-images.githubusercontent.com/51103088/174777285-5ab3fee7-1e15-4c1c-8010-3520d5c75d1c.png)
<br>
run query mysql
```mysql
SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for fs_news
-- ----------------------------
DROP TABLE IF EXISTS `fs_news`;
CREATE TABLE `fs_news`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `summary` tinytext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `content` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `tags` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `tag_alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `category_id` int(11) NULL DEFAULT NULL,
  `category_alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `category_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `category_id_wrapper` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `category_alias_wrapper` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `category_published` int(11) NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `video` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `creator` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `oldid` mediumint(9) NULL DEFAULT NULL,
  `created_time` datetime NULL DEFAULT NULL,
  `updated_time` datetime NULL DEFAULT NULL,
  `editor` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `show_in_homepage` tinyint(4) NULL DEFAULT 0,
  `is_slide` tinyint(4) NULL DEFAULT 0,
  `is_new_video` tinyint(4) NULL DEFAULT 0,
  `is_video` tinyint(4) NULL DEFAULT 0,
  `hits` int(11) NOT NULL DEFAULT 0,
  `published` tinyint(4) NULL DEFAULT NULL,
  `ordering` int(11) NULL DEFAULT NULL,
  `title_display` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `display_title` tinyint(4) NOT NULL DEFAULT 1,
  `oldcat` mediumint(11) NULL DEFAULT NULL,
  `tags_group` int(11) NULL DEFAULT NULL,
  `rating_count` int(11) NULL DEFAULT NULL,
  `rating_sum` int(11) NULL DEFAULT NULL,
  `keywords` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `seo_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `seo_keyword` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `seo_description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `is_new` tinyint(4) NULL DEFAULT 0,
  `is_hot` tinyint(4) NULL DEFAULT 0,
  `comments_total` int(11) NULL DEFAULT 0,
  `comments_unread` int(11) NULL DEFAULT 0,
  `comments_last_time` datetime NULL DEFAULT NULL,
  `comments_published` int(11) NULL DEFAULT 0,
  `products_related` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `action_time` datetime NULL DEFAULT NULL,
  `action_username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `action_id` int(11) NULL DEFAULT NULL,
  `action_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `news_related` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `source_news` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `author` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `icon` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `author_last` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `start_time` datetime NULL DEFAULT NULL,
  `end_time` datetime NULL DEFAULT NULL,
  `author_id` int(11) NULL DEFAULT NULL,
  `author_last_id` int(11) NULL DEFAULT NULL,
  `optimal_seo` tinyint(4) NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 732 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;

----------------------

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for fs_news_categories
-- ----------------------------
DROP TABLE IF EXISTS `fs_news_categories`;
CREATE TABLE `fs_news_categories`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `alias` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `category_id` int(11) NULL DEFAULT NULL,
  `alias_wrapper` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `parent_id` int(11) NULL DEFAULT NULL,
  `list_parents` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `level` int(11) NOT NULL DEFAULT 0,
  `published` tinyint(4) NOT NULL DEFAULT 1,
  `ordering` int(11) NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `icon` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_time` datetime NULL DEFAULT NULL,
  `updated_time` datetime NULL DEFAULT NULL,
  `show_in_homepage` tinyint(4) NOT NULL DEFAULT 1,
  `estore_id` int(11) NULL DEFAULT NULL,
  `display_title` tinyint(4) NOT NULL DEFAULT 1,
  `display_tags` tinyint(4) NOT NULL DEFAULT 1,
  `display_related` tinyint(4) NOT NULL DEFAULT 1,
  `display_created_time` tinyint(4) NOT NULL DEFAULT 1,
  `display_category` tinyint(4) NOT NULL DEFAULT 1,
  `display_comment` tinyint(4) NOT NULL DEFAULT 1,
  `display_sharing` tinyint(4) NOT NULL DEFAULT 1,
  `name_display` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `is_comment` tinyint(4) NULL DEFAULT NULL,
  `seo_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `seo_keyword` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `seo_description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `display_summary` tinyint(4) NULL DEFAULT NULL,
  `products_related` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `icon_font` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `display_recruitment` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 14 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;

------------------------

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for fs_news_comments
-- ----------------------------
DROP TABLE IF EXISTS `fs_news_comments`;
CREATE TABLE `fs_news_comments`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news_id` int(11) NULL DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `level` int(11) NOT NULL DEFAULT 0,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `published` tinyint(4) NOT NULL DEFAULT 0,
  `readed` tinyint(4) NOT NULL DEFAULT 0,
  `created_time` datetime NULL DEFAULT NULL,
  `edited_time` datetime NULL DEFAULT NULL,
  `estore_id` int(11) NOT NULL,
  `add_point` int(11) NOT NULL DEFAULT 0,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `record_id` int(11) NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;

```
