-- category table
CREATE TABLE `categories` (
  `id_cate` int(11) NOT NULL,
  `label` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_cate`);
ALTER TABLE `categories`
  MODIFY `id_cate` int(11) NOT NULL AUTO_INCREMENT;
-- post table
CREATE TABLE `posts` (
  `id_post` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `descr` text COLLATE utf8_unicode_ci NOT NULL,
  `url_thumb` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` text COLLATE utf8_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8_unicode_ci NOT NULL,
  `cate_1_id` int(11) NOT NULL,
  `cate_2_id` int(11) NOT NULL,
  `cate_3_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `view` int(11) NOT NULL,
  `date_posted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;



  -- 
  CREATE TABLE `accounts` (
  `id_acc` int(11) NOT NULL,
  `username` varchar(32) CHARACTER SET utf8 NOT NULL,
  `password` varchar(32) CHARACTER SET utf8 NOT NULL,
  `display_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` text CHARACTER SET utf8 NOT NULL,
  `position` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `facebook` text CHARACTER SET utf8 NOT NULL,
  `google` text CHARACTER SET utf8 NOT NULL,
  `twitter` text CHARACTER SET utf8 NOT NULL,
  `phone` varchar(11) NOT NULL,
  `description` longtext CHARACTER SET utf8 NOT NULL,
  `url_avatar` text CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id_acc`);
ALTER TABLE `accounts`
  MODIFY `id_acc` int(11) NOT NULL AUTO_INCREMENT;
CREATE TABLE `categories` (
  `id_cate` int(11) NOT NULL,
  `label` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_cate`);
ALTER TABLE `categories`
  MODIFY `id_cate` int(11) NOT NULL AUTO_INCREMENT;

CREATE TABLE `images` (
  `id_img` int(11) NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `size` int(11) NOT NULL,
  `date_uploaded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
ALTER TABLE `images`
  ADD PRIMARY KEY (`id_img`);
ALTER TABLE `images`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT;
CREATE TABLE `posts` (
  `id_post` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `descr` text COLLATE utf8_unicode_ci NOT NULL,
  `url_thumb` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` text COLLATE utf8_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8_unicode_ci NOT NULL,
  `cate_1_id` int(11) NOT NULL,
  `cate_2_id` int(11) NOT NULL,
  `cate_3_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `view` int(11) NOT NULL,
  `date_posted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
CREATE TABLE `website` (
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `descr` longtext COLLATE utf8_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
INSERT INTO `website` (`title`, `descr`, `keywords`, `status`) VALUES
('Newspage', '', '', 0);