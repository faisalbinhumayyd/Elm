-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 14 mars 2021 à 00:46
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `1119db`
--

-- --------------------------------------------------------

--
-- Structure de la table `answer`
--

CREATE TABLE `answer` (
  `answer_id` int(11) NOT NULL,
  `quiz_question_id` int(11) NOT NULL,
  `answer_text` varchar(100) NOT NULL,
  `choices` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `course_file` varchar(255) NOT NULL,
  `add_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `course_quiz`
--

CREATE TABLE `course_quiz` (
  `course_quiz_id` int(11) NOT NULL,
  `lecturer_course_id` int(11) NOT NULL,
  `quiz_time` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `endingquotes`
--

CREATE TABLE `endingquotes` (
  `id` int(11) NOT NULL,
  `quizid_id` int(11) DEFAULT NULL,
  `authorname_id` int(11) DEFAULT NULL,
  `quote` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minanswers` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxanswers` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `exam`
--

CREATE TABLE `exam` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authorname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `questionnumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `files`
--

CREATE TABLE `files` (
  `file_id` int(11) NOT NULL,
  `floc` varchar(500) NOT NULL,
  `fdatein` varchar(200) NOT NULL,
  `fdesc` varchar(100) NOT NULL,
  `lecturer_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `uploaded_by` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `lecturer`
--

CREATE TABLE `lecturer` (
  `lecturer_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `department_id` int(11) NOT NULL,
  `location` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `lecturer`
--

INSERT INTO `lecturer` (`lecturer_id`, `username`, `email`, `password`, `firstname`, `lastname`, `department_id`, `location`, `status`) VALUES
(3, 'teacher2', 'teacher2@gmail.com', '123', 'te', '', 0, '0', 'Activated');

-- --------------------------------------------------------

--
-- Structure de la table `lecturer_course`
--

CREATE TABLE `lecturer_course` (
  `lecturer_course_id` int(11) NOT NULL,
  `lecturer_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `question_type`
--

CREATE TABLE `question_type` (
  `question_type_id` int(11) NOT NULL,
  `question_type` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `question_type`
--

INSERT INTO `question_type` (`question_type_id`, `question_type`) VALUES
(1, 'Multiple Choice'),
(2, 'True or False');

-- --------------------------------------------------------

--
-- Structure de la table `quiz`
--

CREATE TABLE `quiz` (
  `quiz_id` int(11) NOT NULL,
  `quiz_title` varchar(50) NOT NULL,
  `quiz_description` varchar(100) NOT NULL,
  `date_added` varchar(100) NOT NULL,
  `lecturer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `quiz_question`
--

CREATE TABLE `quiz_question` (
  `quiz_question_id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `question_text` varchar(100) NOT NULL,
  `question_type_id` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `date_added` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `student_course`
--

CREATE TABLE `student_course` (
  `student_course_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `student_course_quiz`
--

CREATE TABLE `student_course_quiz` (
  `student_course_quiz_id` int(11) NOT NULL,
  `course_quiz_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `student_quiz_time` varchar(100) NOT NULL,
  `grade` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `subscription`
--

CREATE TABLE `subscription` (
  `id` int(11) NOT NULL,
  `student_name_id` int(11) DEFAULT NULL,
  `course_name_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tbl_course_rating`
--

CREATE TABLE `tbl_course_rating` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `teacher_class_student`
--

CREATE TABLE `teacher_class_student` (
  `teacher_class_student_id` int(11) NOT NULL,
  `teacher_class_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `firstname`, `lastname`) VALUES
(15, 'admin', 'admin.admin@gmail.com', '123', 'admin12', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `user_log`
--

CREATE TABLE `user_log` (
  `user_log_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `login_date` varchar(30) NOT NULL,
  `logout_date` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user_log`
--

INSERT INTO `user_log` (`user_log_id`, `username`, `login_date`, `logout_date`, `user_id`) VALUES
(1, 'admin', '2013-11-01 11:57:33', '2013-11-18 10:33:54', 10),
(2, 'admin', '2013-11-05 09:52:09', '2013-11-18 10:33:54', 10),
(3, 'admin', '2013-11-08 10:41:09', '2013-11-18 10:33:54', 10),
(4, 'admin', '2013-11-12 22:53:05', '2013-11-18 10:33:54', 10),
(5, 'admin', '2013-11-13 07:07:04', '2013-11-18 10:33:54', 10),
(6, 'admin', '2013-11-13 13:07:58', '2013-11-18 10:33:54', 10),
(7, 'admin', '2013-11-13 13:30:45', '2013-11-18 10:33:54', 10),
(8, 'admin', '2013-11-13 15:25:20', '2013-11-18 10:33:54', 10),
(9, 'admin', '2013-11-13 15:46:28', '2013-11-18 10:33:54', 10),
(10, 'admin', '2013-11-13 16:04:10', '2013-11-18 10:33:54', 10),
(11, 'admin', '2013-11-13 17:31:37', '2013-11-18 10:33:54', 10),
(12, 'admin', '2013-11-13 22:47:45', '2013-11-18 10:33:54', 10),
(13, 'admin', '2013-11-14 10:27:06', '2013-11-18 10:33:54', 10),
(14, 'admin', '2013-11-14 10:27:55', '2013-11-18 10:33:54', 10),
(15, 'admin', '2013-11-14 10:38:08', '2013-11-18 10:33:54', 10),
(16, 'admin', '2013-11-14 10:38:09', '2013-11-18 10:33:54', 10),
(17, 'admin', '2013-11-14 10:41:06', '2013-11-18 10:33:54', 10),
(18, 'admin', '2013-11-14 11:44:08', '2013-11-18 10:33:54', 10),
(19, 'admin', '2013-11-14 21:53:56', '2013-11-18 10:33:54', 10),
(20, 'admin', '2013-11-14 22:03:53', '2013-11-18 10:33:54', 10),
(21, 'admin', '2013-11-16 13:40:56', '2013-11-18 10:33:54', 10),
(22, 'admin', '2013-11-18 10:22:07', '2013-11-18 10:33:54', 10),
(23, 'jkev', '2013-11-18 10:33:59', '2014-02-13 11:19:36', 14),
(24, 'jkev', '2013-11-18 15:20:45', '2014-02-13 11:19:36', 14),
(25, 'jkev', '2013-11-18 15:42:04', '2014-02-13 11:19:36', 14),
(26, 'jkev', '2013-11-18 16:30:14', '2014-02-13 11:19:36', 14),
(27, 'jkev', '2013-11-18 16:36:44', '2014-02-13 11:19:36', 14),
(28, 'jkev', '2013-11-18 17:39:55', '2014-02-13 11:19:36', 14),
(29, 'jkev', '2013-11-18 20:06:49', '2014-02-13 11:19:36', 14),
(30, 'jkev', '2013-11-23 08:04:27', '2014-02-13 11:19:36', 14),
(31, 'teph', '2013-11-23 12:02:27', '2013-11-30 21:33:02', 13),
(32, 'teph', '2013-11-24 08:55:55', '2013-11-30 21:33:02', 13),
(33, 'jkev', '2013-11-25 10:32:16', '2014-02-13 11:19:36', 14),
(34, 'jkev', '2013-11-25 14:33:05', '2014-02-13 11:19:36', 14),
(35, 'jkev', '2013-11-25 15:02:47', '2014-02-13 11:19:36', 14),
(36, 'jkev', '2013-11-25 21:08:19', '2014-02-13 11:19:36', 14),
(37, 'jkev', '2013-11-25 23:49:58', '2014-02-13 11:19:36', 14),
(38, 'jkev', '2013-11-26 00:32:22', '2014-02-13 11:19:36', 14),
(39, 'jkev', '2013-11-26 10:39:52', '2014-02-13 11:19:36', 14),
(40, 'jkev', '2013-11-26 21:48:05', '2014-02-13 11:19:36', 14),
(41, 'jkev', '2013-11-28 23:00:00', '2014-02-13 11:19:36', 14),
(42, 'jkev', '2013-11-28 23:00:06', '2014-02-13 11:19:36', 14),
(43, 'jkev', '2013-11-30 21:28:54', '2014-02-13 11:19:36', 14),
(44, 'teph', '2013-11-30 21:32:54', '2013-11-30 21:33:02', 13),
(45, 'jkev', '2013-12-04 12:45:09', '2014-02-13 11:19:36', 14),
(46, 'teph', '2013-12-04 14:02:19', '', 13),
(47, 'jkev', '2013-12-11 11:56:15', '2014-02-13 11:19:36', 14),
(48, 'jkev', '2013-12-11 12:04:44', '2014-02-13 11:19:36', 14),
(49, 'jkev', '2013-12-12 09:44:34', '2014-02-13 11:19:36', 14),
(50, 'jkev', '2013-12-13 01:48:23', '2014-02-13 11:19:36', 14),
(51, 'jkev', '2013-12-27 09:13:20', '2014-02-13 11:19:36', 14),
(52, 'jkev', '2013-12-27 10:18:38', '2014-02-13 11:19:36', 14),
(53, 'jkev', '2013-12-27 10:35:43', '2014-02-13 11:19:36', 14),
(54, 'jkev', '2013-12-27 11:08:54', '2014-02-13 11:19:36', 14),
(55, 'jkev', '2013-12-27 11:20:25', '2014-02-13 11:19:36', 14),
(56, 'jkev', '2013-12-27 11:41:58', '2014-02-13 11:19:36', 14),
(57, 'jkev', '2013-12-27 11:43:10', '2014-02-13 11:19:36', 14),
(58, 'jkev', '2013-12-27 14:54:57', '2014-02-13 11:19:36', 14),
(59, 'jkev', '2014-01-12 20:08:26', '2014-02-13 11:19:36', 14),
(60, 'jkev', '2014-01-13 15:24:07', '2014-02-13 11:19:36', 14),
(61, 'jkev', '2014-01-13 18:46:08', '2014-02-13 11:19:36', 14),
(62, 'jkev', '2014-01-15 20:40:15', '2014-02-13 11:19:36', 14),
(63, 'jkev', '2014-01-16 14:42:02', '2014-02-13 11:19:36', 14),
(64, 'jkev', '2014-01-17 09:16:17', '2014-02-13 11:19:36', 14),
(65, 'jkev', '2014-01-17 13:25:51', '2014-02-13 11:19:36', 14),
(66, 'admin', '2014-01-17 14:41:30', '2021-03-11 23:21:01', 15),
(67, 'admin', '2014-01-17 15:56:32', '2021-03-11 23:21:01', 15),
(68, 'admin', '2014-01-26 17:45:31', '2021-03-11 23:21:01', 15),
(69, 'admin', '2014-02-13 10:45:17', '2021-03-11 23:21:01', 15),
(70, 'admin', '2014-02-13 11:05:27', '2021-03-11 23:21:01', 15),
(71, 'jkev', '2014-02-13 11:16:48', '2014-02-13 11:19:36', 14),
(72, 'admin', '2014-02-13 11:55:36', '2021-03-11 23:21:01', 15),
(73, 'admin', '2014-02-13 12:32:38', '2021-03-11 23:21:01', 15),
(74, 'admin', '2014-02-13 12:52:05', '2021-03-11 23:21:01', 15),
(75, 'admin', '2014-02-13 13:04:35', '2021-03-11 23:21:01', 15),
(76, 'jkev', '2014-02-13 14:35:27', '', 14),
(77, 'admin', '2014-02-20 09:40:39', '2021-03-11 23:21:01', 15),
(78, 'admin', '2014-02-20 09:42:21', '2021-03-11 23:21:01', 15),
(79, 'admin', '2014-02-27 22:40:15', '2021-03-11 23:21:01', 15),
(80, 'admin', '2014-02-28 13:12:52', '2021-03-11 23:21:01', 15),
(81, 'admin', '2014-04-02 17:27:47', '2021-03-11 23:21:01', 15),
(82, 'admin', '2014-04-03 15:29:38', '2021-03-11 23:21:01', 15),
(83, 'admin', '2014-06-15 12:31:51', '2021-03-11 23:21:01', 15),
(84, 'Admin', '2020-12-21 08:32:51', '2021-03-11 23:21:01', 15),
(85, 'admin', '2020-12-21 08:48:23', '2021-03-11 23:21:01', 15),
(86, 'admin', '2021-03-08 01:11:42', '2021-03-11 23:21:01', 15),
(87, 'admin', '2021-03-08 03:08:00', '2021-03-11 23:21:01', 15),
(88, 'admin', '2021-03-08 04:23:53', '2021-03-11 23:21:01', 15),
(89, 'admin', '2021-03-08 13:17:02', '2021-03-11 23:21:01', 15),
(90, 'admin', '2021-03-08 20:43:19', '2021-03-11 23:21:01', 15),
(91, 'admin', '2021-03-08 20:52:44', '2021-03-11 23:21:01', 15),
(92, 'admin', '2021-03-10 03:42:28', '2021-03-11 23:21:01', 15),
(93, 'admin', '2021-03-10 22:03:08', '2021-03-11 23:21:01', 15),
(94, 'admin', '2021-03-10 22:11:37', '2021-03-11 23:21:01', 15),
(95, 'admin', '2021-03-11 08:14:03', '2021-03-11 23:21:01', 15),
(96, 'admin', '2021-03-11 16:57:53', '2021-03-11 23:21:01', 15),
(97, 'admin', '2021-03-11 20:59:48', '2021-03-11 23:21:01', 15),
(98, 'admin', '2021-03-11 21:00:58', '2021-03-11 23:21:01', 15);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`answer_id`);

--
-- Index pour la table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Index pour la table `course_quiz`
--
ALTER TABLE `course_quiz`
  ADD PRIMARY KEY (`course_quiz_id`);

--
-- Index pour la table `endingquotes`
--
ALTER TABLE `endingquotes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_7A4D1A38E8901217` (`quizid_id`),
  ADD KEY `IDX_7A4D1A386DE74D78` (`authorname_id`);

--
-- Index pour la table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`file_id`);

--
-- Index pour la table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`lecturer_id`);

--
-- Index pour la table `lecturer_course`
--
ALTER TABLE `lecturer_course`
  ADD PRIMARY KEY (`lecturer_course_id`);

--
-- Index pour la table `question_type`
--
ALTER TABLE `question_type`
  ADD PRIMARY KEY (`question_type_id`);

--
-- Index pour la table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`quiz_id`);

--
-- Index pour la table `quiz_question`
--
ALTER TABLE `quiz_question`
  ADD PRIMARY KEY (`quiz_question_id`);

--
-- Index pour la table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Index pour la table `student_course`
--
ALTER TABLE `student_course`
  ADD PRIMARY KEY (`student_course_id`);

--
-- Index pour la table `student_course_quiz`
--
ALTER TABLE `student_course_quiz`
  ADD PRIMARY KEY (`student_course_quiz_id`);

--
-- Index pour la table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_A3C664D39C21292E` (`student_name_id`),
  ADD KEY `IDX_A3C664D379D4993A` (`course_name_id`);

--
-- Index pour la table `tbl_course_rating`
--
ALTER TABLE `tbl_course_rating`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `teacher_class_student`
--
ALTER TABLE `teacher_class_student`
  ADD PRIMARY KEY (`teacher_class_student_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Index pour la table `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`user_log_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `answer`
--
ALTER TABLE `answer`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT pour la table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `course_quiz`
--
ALTER TABLE `course_quiz`
  MODIFY `course_quiz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `endingquotes`
--
ALTER TABLE `endingquotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `files`
--
ALTER TABLE `files`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `lecturer`
--
ALTER TABLE `lecturer`
  MODIFY `lecturer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `lecturer_course`
--
ALTER TABLE `lecturer_course`
  MODIFY `lecturer_course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT pour la table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `quiz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `quiz_question`
--
ALTER TABLE `quiz_question`
  MODIFY `quiz_question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT pour la table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `student_course`
--
ALTER TABLE `student_course`
  MODIFY `student_course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT pour la table `student_course_quiz`
--
ALTER TABLE `student_course_quiz`
  MODIFY `student_course_quiz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tbl_course_rating`
--
ALTER TABLE `tbl_course_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `teacher_class_student`
--
ALTER TABLE `teacher_class_student`
  MODIFY `teacher_class_student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=386;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `user_log`
--
ALTER TABLE `user_log`
  MODIFY `user_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
