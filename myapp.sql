-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 04, 2019 at 10:08 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `als-test`
--

-- --------------------------------------------------------

--
-- Table structure for table `concepts`
--

CREATE TABLE `concepts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lesson_unit_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `concepts`
--

INSERT INTO `concepts` (`id`, `title`, `lesson_unit_id`, `created_at`, `updated_at`) VALUES
(1, 'One-to-many relationships', 2, NULL, NULL),
(2, 'Securing your database', 2, NULL, NULL),
(3, 'Types of chemicals', 8, NULL, NULL),
(4, 'Material fitness in the application of reagents', 14, NULL, NULL),
(6, 'Many-to-many relationships', 2, '2019-06-20 10:13:24', '2019-06-20 10:13:24'),
(7, 'Inheritance', 2, '2019-06-20 10:16:19', '2019-06-20 10:16:19'),
(16, 'Introduction to DB', 2, NULL, NULL),
(23, 'Reactive chemicals', 14, NULL, NULL),
(24, 'Preparing chemicals for reactions', 14, NULL, NULL),
(26, 'Introduction to reagents', 7, NULL, NULL),
(27, 'Application of chemicals', 7, NULL, NULL),
(28, 'The Motivation & Applications of Machine Learning', 23, NULL, NULL),
(29, 'The Logistics of the Class', 23, NULL, NULL),
(30, 'The Definition of Machine Learning', 23, NULL, NULL),
(31, 'The Overview of Supervised Learning', 23, NULL, NULL),
(32, 'The Overview of Learning Theory', 23, NULL, NULL),
(33, 'The Overview of Unsupervised Learning', 23, NULL, NULL),
(34, 'The Overview of Reinforcement Learning', 23, NULL, NULL),
(35, 'An Application of Supervised Learning - Autonomous Deriving', 24, NULL, NULL),
(36, 'ALVINN', 24, NULL, NULL),
(37, 'Linear Regression', 24, NULL, NULL),
(38, 'Gradient Descent', 24, NULL, NULL),
(39, 'Batch Gradient Descent', 24, NULL, NULL),
(40, 'Stochastic Gradient Descent (Incremental Descent)', 24, NULL, NULL),
(41, 'Matrix Derivative Notation for Deriving Normal Equations', 24, NULL, NULL),
(42, 'Derivation of Normal Equations', 24, NULL, NULL),
(43, 'The Concept of Underfitting and Overfitting', 25, NULL, NULL),
(44, 'The Concept of Parametric Algorithms and Non-parametric Algorithms', 25, NULL, NULL),
(45, 'Locally Weighted Regression', 25, NULL, NULL),
(46, 'The Probabilistic Interpretation of Linear Regression', 25, NULL, NULL),
(47, 'The motivation of Logistic Regression', 25, NULL, NULL),
(48, 'Logistic Regression', 25, NULL, NULL),
(49, 'Perceptron', 25, NULL, NULL),
(50, 'Newton\'s Method', 26, NULL, NULL),
(51, 'Exponential Family', 26, NULL, NULL),
(52, 'Bernoulli Example', 26, NULL, NULL),
(53, 'Gaussian Example', 26, NULL, NULL),
(54, 'General Linear Models (GLMs)', 26, NULL, NULL),
(55, 'Multinomial Example', 26, NULL, NULL),
(56, 'Softmax Regression', 26, NULL, NULL),
(57, 'Discriminative Algorithms', 27, NULL, NULL),
(58, 'Generative Algorithms', 27, NULL, NULL),
(59, 'Gaussian Discriminant Analysis (GDA)', 27, NULL, NULL),
(60, 'GDA and Logistic Regression', 27, NULL, NULL),
(61, 'Naive Bayes', 27, NULL, NULL),
(62, 'Laplace Smoothing', 27, NULL, NULL),
(63, 'Multinomial Event Model', 29, NULL, NULL),
(64, 'Non-linear Classifiers', 29, NULL, NULL),
(65, 'Neural Network', 29, NULL, NULL),
(66, 'Applications of Neural Network', 29, NULL, NULL),
(67, 'Intuitions about Support Vector Machine (SVM)', 29, NULL, NULL),
(68, 'Notation for SVM', 29, NULL, NULL),
(69, 'Functional and Geometric Margins', 29, NULL, NULL),
(70, 'Optimal Margin Classifier', 30, NULL, NULL),
(71, 'Lagrange Duality', 30, NULL, NULL),
(72, 'Karush-Kuhn-Tucker (KKT) Conditions', 30, NULL, NULL),
(73, 'SVM Dual', 30, NULL, NULL),
(74, 'The Concept of Kernels', 30, NULL, NULL),
(75, 'Kernels', 31, NULL, NULL),
(76, 'Mercer\'s Theorem', 31, NULL, NULL),
(77, 'Non-linear Decision Boundaries and Soft Margin SVM', 31, NULL, NULL),
(78, 'Coordinate Ascent Algorithm', 31, NULL, NULL),
(79, 'The Sequential Minimization Optimization (SMO) Algorithm', 31, NULL, NULL),
(80, 'Applications of SVM', 31, NULL, NULL),
(81, 'Bias/variance Tradeoff', 32, NULL, NULL),
(82, 'Empirical Risk Minimization (ERM)', 32, NULL, NULL),
(83, 'The Union Bound', 32, NULL, NULL),
(84, 'Hoeffding Inequality', 32, NULL, NULL),
(85, 'Uniform Convergence - The Case of Finite H', 32, NULL, NULL),
(86, 'Sample Complexity Bound', 32, NULL, NULL),
(87, 'Error Bound', 32, NULL, NULL),
(88, 'Uniform Convergence Theorem & Corollary', 32, NULL, NULL),
(89, 'Uniform Convergence - The Case of Infinite H', 33, NULL, NULL),
(90, 'The Concept of \'Shatter\' and VC Dimension', 33, NULL, NULL),
(91, 'SVM Example', 33, NULL, NULL),
(92, 'Model Selection', 33, NULL, NULL),
(93, 'Cross Validation', 33, NULL, NULL),
(94, 'Feature Selection', 33, NULL, NULL),
(95, 'Bayesian Statistics and Regularization', 34, NULL, NULL),
(96, 'Online Learning', 34, NULL, NULL),
(97, 'Advice for Applying Machine Learning Algorithms', 34, NULL, NULL),
(98, 'Debugging/fixing Learning Algorithms', 34, NULL, NULL),
(99, 'Diagnostics for Bias & Variance', 34, NULL, NULL),
(100, 'Optimization Algorithm Diagnostics', 34, NULL, NULL),
(101, 'Diagnostic Example - Autonomous Helicopter', 34, NULL, NULL),
(102, 'Error Analysis', 34, NULL, NULL),
(103, 'Getting Started on a Learning Problem', 34, NULL, NULL),
(104, 'The Concept of Unsupervised Learning', 35, NULL, NULL),
(105, 'K-means Clustering Algorithm', 35, NULL, NULL),
(106, 'K-means Algorithm', 35, NULL, NULL),
(107, 'Mixtures of Gaussians and the EM Algorithm', 35, NULL, NULL),
(108, 'Jensen\'s Inequality', 35, NULL, NULL),
(109, 'The EM Algorithm', 35, NULL, NULL),
(110, 'Mixture of Gaussian', 36, NULL, NULL),
(111, 'Mixture of Naive Bayes - Text clustering (EM Application)', 36, NULL, NULL),
(112, 'Factor Analysis', 36, NULL, NULL),
(113, 'Restrictions on a Covariance Matrix', 36, NULL, NULL),
(114, 'The Factor Analysis Model', 36, NULL, NULL),
(115, 'EM for Factor Analysis', 36, NULL, NULL),
(116, 'The Factor Analysis Model', 37, NULL, NULL),
(117, 'EM for Factor Analysis', 37, NULL, '2019-06-24 15:08:29'),
(118, 'Principal Component Analysis (PCA)', 37, NULL, NULL),
(119, 'PCA as a Dimensionality Reduction Algorithm', 37, NULL, NULL),
(120, 'Applications of PCA', 37, NULL, NULL),
(121, 'Face Recognition by Using PCA', 37, NULL, NULL),
(122, 'Latent Semantic Indexing (LSI)', 38, NULL, NULL),
(123, 'Singular Value Decomposition (SVD) Implementation', 38, NULL, NULL),
(124, 'Independent Component Analysis (ICA)', 38, NULL, NULL),
(125, 'The Application of ICA', 38, NULL, NULL),
(126, 'Cumulative Distribution Function (CDF)', 38, NULL, NULL),
(127, 'ICA Algorithm', 38, NULL, NULL),
(128, 'The Applications of ICA', 38, NULL, NULL),
(129, 'Applications of Reinforcement Learning', 39, NULL, NULL),
(130, 'Markov Decision Process (MDP)', 39, NULL, NULL),
(131, 'Defining Value & Policy Functions', 39, NULL, NULL),
(132, 'Value Function', 39, NULL, NULL),
(133, 'Optimal Value Function', 39, NULL, NULL),
(134, 'Value Iteration', 39, NULL, NULL),
(135, 'Policy Iteration', 39, NULL, NULL),
(136, 'Generalization to Continuous States', 40, NULL, NULL),
(137, 'Discretization & Curse of Dimensionality', 40, NULL, NULL),
(138, 'Models/Simulators', 40, NULL, NULL),
(139, 'Value Function', 40, NULL, NULL),
(140, 'Finding Optimal Policy', 40, NULL, NULL),
(141, 'State-action Rewards', 41, NULL, NULL),
(142, 'Finite Horizon MDPs', 41, NULL, NULL),
(143, 'The Concept of Dynamical Systems', 41, NULL, NULL),
(144, 'Examples of Dynamical Models', 41, NULL, NULL),
(145, 'Linear Quadratic Regulation (LQR)', 41, NULL, NULL),
(146, 'Linearizing a Non-Linear Model', 41, NULL, NULL),
(147, 'Computing Rewards', 41, NULL, NULL),
(148, 'Riccati Equation', 41, NULL, NULL),
(149, 'Advice for Applying Machine Learning', 42, NULL, NULL),
(150, 'Debugging Reinforcement Learning (RL) Algorithm', 42, NULL, NULL),
(151, 'Linear Quadratic Regularization (LQR)', 42, NULL, NULL),
(152, 'Differential Dynamic Programming (DDP)', 42, NULL, NULL),
(153, 'Kalman Filter & Linear Quadratic Gaussian (LQG)', 42, NULL, NULL),
(154, 'Predict/update Steps of Kalman Filter', 42, NULL, NULL),
(155, 'Linear Quadratic Gaussian (LQG)', 42, NULL, NULL),
(156, 'Partially Observable MDPs (POMDPs)', 43, NULL, NULL),
(157, 'Policy Search', 43, NULL, NULL),
(158, 'Reinforce Algorithm', 43, NULL, NULL),
(159, 'Pegasus Algorithm', 43, NULL, NULL),
(160, 'Pegasus Policy Search', 43, NULL, NULL),
(161, 'Applications of Reinforcement Learning', 43, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `concept_learning_object`
--

CREATE TABLE `concept_learning_object` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `concept_id` bigint(20) UNSIGNED NOT NULL,
  `learning_object_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `description`, `created_at`, `updated_at`, `user_id`) VALUES
(4, 'Databases', '<p>This is an interesting course for Microsoft Databases.</p>', '2019-06-16 18:14:28', '2019-06-17 10:08:08', 5),
(5, 'Networking', '<p>This is a course from Professor Humam for basics in networking.</p>', '2019-06-16 18:50:39', '2019-06-16 18:50:39', 4),
(6, 'Chemical Routes to Materials', '<p>This is a course by my ex-roommate.</p>', '2019-06-17 12:57:52', '2019-06-17 12:57:52', 3),
(9, 'Introduction to Communication', '<p>A course on the basic fundamentals of communication in a relationship.</p>', '2019-06-17 14:46:15', '2019-06-17 14:46:15', 2),
(10, 'Artificial Intelligence | Machine Learning', '<p>This course provides a broad introduction to machine learning and statistical pattern recognition.&nbsp;<br />\r\n<br />\r\nTopics include: supervised learning (generative/discriminative learning, parametric/non-parametric learning, neural networks, support vector machines); unsupervised learning (clustering, dimensionality reduction, kernel methods); learning theory (bias/variance tradeoffs; VC theory; large margins); reinforcement learning and adaptive control.&nbsp;<br />\r\nThe course will also discuss recent applications of machine learning, such as to robotic control, data mining, autonomous navigation, bioinformatics, speech recognition, and text and web data processing.<br />\r\nStudents are expected to have the following background:<br />\r\n<br />\r\nPrerequisites: - Knowledge of basic computer science principles and skills, at a level sufficient to write a reasonably non-trivial computer program.<br />\r\n- Familiarity with the basic probability theory. (Stat 116 is sufficient but not necessary.)<br />\r\n- Familiarity with the basic linear algebra (any one of Math 51, Math 103, Math 113, or CS 205 would be much more than necessary.)</p>', '2019-06-24 08:45:37', '2019-06-24 08:45:37', 5);

-- --------------------------------------------------------

--
-- Table structure for table `learning_objects`
--

CREATE TABLE `learning_objects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `learning_goal` enum('knowledge','comprehension','application') COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `typical_learning_time` int(11) NOT NULL,
  `media_format` enum('text','audio','PPT','video','multimedia') COLLATE utf8mb4_unicode_ci NOT NULL,
  `difficulty_level` enum('beginner','intermediate','advanced') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `learning_objects`
--

INSERT INTO `learning_objects` (`id`, `title`, `description`, `learning_goal`, `language`, `typical_learning_time`, `media_format`, `difficulty_level`, `created_at`, `updated_at`, `course_id`) VALUES
(6, 'LO1', 'RRR', 'knowledge', 'EE', 2, 'PPT', 'beginner', NULL, NULL, 5),
(7, 'LO2', 'ED', 'knowledge', 'EEE', 33, 'video', 'beginner', NULL, NULL, 5),
(8, 'LO3', 'ddd', 'comprehension', 'dd', 3, 'video', 'intermediate', NULL, NULL, 5),
(9, 'LO4', 'dfg', 'knowledge', 'ss', 3, 'video', 'intermediate', NULL, NULL, 4),
(16, 'LO2', '', 'knowledge', 'English', 15, 'video', 'beginner', NULL, NULL, 10),
(17, 'LO2', '', 'knowledge', 'English', 15, 'video', 'beginner', NULL, NULL, 10),
(18, 'LO10', 'tenth LO', 'knowledge', 'English', 16, 'text', 'intermediate', NULL, NULL, 10),
(19, 'LO11', 'eleventh LO', 'comprehension', 'English', 20, 'PPT', 'intermediate', NULL, NULL, 10);

--
-- Triggers `learning_objects`
--
DELIMITER $$
CREATE TRIGGER `active` AFTER INSERT ON `learning_objects` FOR EACH ROW INSERT INTO learning_object_learning_style (id, learning_object_id, learning_style_id) SELECT '', NEW.id, 1 FROM learning_objects WHERE learning_objects.media_format ='video' AND learning_objects.id = NEW.id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `learning_object_learning_style`
--

CREATE TABLE `learning_object_learning_style` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `learning_object_id` bigint(20) UNSIGNED NOT NULL,
  `learning_style_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `learning_object_learning_style`
--

INSERT INTO `learning_object_learning_style` (`id`, `learning_object_id`, `learning_style_id`, `created_at`, `updated_at`) VALUES
(12, 11, 1, NULL, NULL),
(13, 12, 1, NULL, NULL),
(14, 16, 1, NULL, NULL),
(15, 17, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `learning_styles`
--

CREATE TABLE `learning_styles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ls_dimension` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `learning_styles`
--

INSERT INTO `learning_styles` (`id`, `ls_dimension`, `created_at`, `updated_at`) VALUES
(1, 'active_FSLSM', NULL, NULL),
(2, 'reflective_FSLSM', NULL, NULL),
(3, 'sensing_FSLSM', NULL, NULL),
(4, 'intuitive_FSLSM', NULL, NULL),
(5, 'visual_FSLSM', NULL, NULL),
(6, 'verbal_FSLSM', NULL, NULL),
(7, 'sequential_FSLSM', NULL, NULL),
(8, 'global_FSLSM', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lesson_units`
--

CREATE TABLE `lesson_units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Lesson Unit',
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lesson_units`
--

INSERT INTO `lesson_units` (`id`, `title`, `description`, `created_at`, `updated_at`, `course_id`) VALUES
(1, 'Lesson 1', '', '2019-06-16 21:00:00', NULL, 4),
(2, 'Lesson 2', '', '2019-06-16 21:00:00', NULL, 4),
(3, 'Lesson One', '', NULL, NULL, 5),
(4, 'Lesson Two', '', NULL, NULL, 5),
(5, 'Lesson 5', 'Just another one', '2019-06-18 17:53:30', '2019-06-18 17:53:30', 4),
(6, 'Lesson 6', 'Just another one', '2019-06-18 17:57:19', '2019-06-18 17:57:19', 6),
(7, 'Lesson 9', 'Yes', '2019-06-18 18:31:40', '2019-06-18 18:31:40', 6),
(8, 'Lesson 11', 'lesson unit 11', '2019-06-18 19:38:07', '2019-06-18 19:38:07', 6),
(14, 'Lesson 58', 'Yes it\'s working now', '2019-06-18 21:00:23', '2019-06-18 21:00:23', 6),
(15, 'Lesson 3', 'Just another one', '2019-06-18 21:04:27', '2019-06-18 21:04:27', 4),
(16, 'Lesson Three', 'the third lesson in the series', '2019-06-18 21:05:11', '2019-06-18 21:05:11', 5),
(17, 'Lesson 4', 'Fourth lesson', '2019-06-18 21:07:31', '2019-06-18 21:07:31', 4),
(19, 'Lesson 6', '6th lesson', '2019-06-18 21:10:13', '2019-06-18 21:10:13', 4),
(20, 'Lesson 8', 'ninth lesson', '2019-06-18 21:11:21', '2019-06-18 21:11:21', 4),
(22, 'Lesson 10', 'Now work', '2019-06-18 21:18:31', '2019-06-18 21:18:31', 4),
(23, 'Lesson 1', 'Lesson 1 for Artificial Intelligence | Machine Learning', '2019-06-24 08:49:23', '2019-06-24 08:49:23', 10),
(24, 'Lesson 2', 'Lesson 2 for Artificial Intelligence | Machine Learning', '2019-06-24 08:49:48', '2019-06-24 08:49:48', 10),
(25, 'Lesson 3', 'Lesson 3 for Artificial Intelligence | Machine Learning', '2019-06-24 08:58:51', '2019-06-24 08:58:51', 10),
(26, 'Lesson 4', 'Lesson 4 for Artificial Intelligence | Machine Learning', '2019-06-24 09:02:58', '2019-06-24 09:02:58', 10),
(27, 'Lesson 5', 'Lesson 5 for Artificial Intelligence | Machine Learning', '2019-06-24 09:06:30', '2019-06-24 09:06:30', 10),
(29, 'Lesson 6', 'Lesson 6 for Artificial Intelligence | Machine Learning', '2019-06-24 09:06:56', '2019-06-24 09:06:56', 10),
(30, 'Lesson 7', 'Lesson 7 for Artificial Intelligence | Machine Learning', '2019-06-24 09:07:13', '2019-06-24 09:07:13', 10),
(31, 'Lesson 8', 'Lesson 8 for Artificial Intelligence | Machine Learning', '2019-06-24 09:07:29', '2019-06-24 09:07:29', 10),
(32, 'Lesson 9', 'Lesson 9 for Artificial Intelligence | Machine Learning', '2019-06-24 09:25:36', '2019-06-24 09:25:36', 10),
(33, 'Lesson 10', 'Lesson 10 for Artificial Intelligence | Machine Learning', '2019-06-24 09:27:26', '2019-06-24 09:27:26', 10),
(34, 'Lesson 11', 'Lesson 11 for Artificial Intelligence | Machine Learning', '2019-06-24 09:27:43', '2019-06-24 09:27:43', 10),
(35, 'Lesson 12', 'Lesson 12 for Artificial Intelligence | Machine Learning', '2019-06-24 09:28:46', '2019-06-24 09:28:46', 10),
(36, 'Lesson 13', 'Lesson 13 for Artificial Intelligence | Machine Learning', '2019-06-24 09:28:58', '2019-06-24 09:28:58', 10),
(37, 'Lesson 14', 'Lesson 14 for Artificial Intelligence | Machine Learning', '2019-06-24 09:30:32', '2019-06-24 09:30:32', 10),
(38, 'Lesson 15', 'Lesson 15 for Artificial Intelligence | Machine Learning', '2019-06-24 09:30:49', '2019-06-24 09:30:49', 10),
(39, 'Lesson 16', 'Lesson 16 for Artificial Intelligence | Machine Learning', '2019-06-24 09:31:22', '2019-06-24 09:31:22', 10),
(40, 'Lesson 17', 'Lesson 17 for Artificial Intelligence | Machine Learning', '2019-06-24 09:32:05', '2019-06-24 09:32:05', 10),
(41, 'Lesson 18', 'Lesson 18 for Artificial Intelligence | Machine Learning', '2019-06-24 09:32:44', '2019-06-24 09:32:44', 10),
(42, 'Lesson 19', 'Lesson 19 for Artificial Intelligence | Machine Learning', '2019-06-24 09:32:58', '2019-06-24 09:32:58', 10),
(43, 'Lesson 20', 'Lesson 20 for Artificial Intelligence | Machine Learning', '2019-06-24 09:33:26', '2019-06-24 09:33:26', 10);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_06_15_150954_create_courses_table', 1),
(5, '2019_06_16_234523_create_lesson_units_table', 2),
(6, '2019_06_17_002315_add_course_id_to_lesson_units', 3),
(7, '2019_06_17_152837_add_user_id_to_courses', 4),
(9, '2019_06_19_220043_create_concepts_table', 5),
(11, '2019_06_21_140702_create_items_table', 6),
(17, '2019_06_21_173355_create_learning_objects_table', 7),
(18, '2019_06_21_181120_create_concept_learning_object_table', 7),
(19, '2019_06_26_003129_add_course_id_to_learning_objects', 7),
(20, '2019_07_01_092155_create_learning_styles_table', 7),
(22, '2019_07_01_100306_create_learning_object_learning_style_table', 8),
(24, '2019_08_21_072413_create_moodle_courses_table', 9),
(25, '2019_08_24_161412_create_moodle_concepts_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `moodle_concepts`
--

CREATE TABLE `moodle_concepts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moodle_course_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `moodle_concepts`
--

INSERT INTO `moodle_concepts` (`id`, `title`, `moodle_course_id`, `created_at`, `updated_at`) VALUES
(1, 'Supervised Learning', 2, NULL, NULL),
(3, 'Unsupervised Learning course', 2, NULL, NULL),
(4, 'Introduction to DB', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `moodle_courses`
--

CREATE TABLE `moodle_courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `moodle_course_id` int(11) NOT NULL,
  `shortname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `moodle_courses`
--

INSERT INTO `moodle_courses` (`id`, `moodle_course_id`, `shortname`, `fullname`, `summary`, `created_at`, `updated_at`, `user_id`) VALUES
(2, 4, 'AI: Machine Learning', 'Artificial Intelligence: Machine Learning', '<p>This course provides a broad introduction to machine learning and statistical pattern recognition. <br /><br />\nTopics include: supervised learning (generative/discriminative learning,\n parametric/non-parametric learning, neural networks, support vector \nmachines); unsupervised learning (clustering,\ndimensionality reduction, kernel methods); learning theory \n(bias/variance trade-offs; VC theory; large margins); reinforcement \nlearning and adaptive control. <br />The course will also discuss recent \napplications of machine learning, such as to robotic control, data \nmining, autonomous navigation, bioinformatics, speech recognition, and \ntext and web data processing.<br />\nStudents are expected to have the following background:<br /><br />\nPrerequisites:\n-  Knowledge of basic computer science principles and skills, at a level\n sufficient to write a reasonably non-trivial computer program.<br />\n-  Familiarity with the basic probability theory. (Stat 116 is sufficient but not necessary.)<br />\n-  Familiarity with the basic linear algebra (any one of Math 51, Math \n103, Math 113, or CS 205 would be much more than necessary.)<br /></p>', '2019-08-21 17:52:48', '2019-08-21 17:52:48', 5),
(4, 2, 'ICT-B', 'Information and Communication Technology: Module B', '', '2019-08-24 06:03:35', '2019-08-24 06:03:35', 5),
(5, 5, 'BIO-B', 'ATEP -  Biotechnology Module B', '', '2019-08-25 10:55:08', '2019-08-25 10:55:08', 5),
(6, 1, 'WASPEC', 'Weighted Agent System For Personalized Curriculums', '', '2019-08-26 04:59:42', '2019-08-26 04:59:42', 5),
(7, 6, 'ICT-A', 'Information and Communication Technology: Module A', '', '2019-08-27 07:02:17', '2019-08-27 07:02:17', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ufuoma@waspec.com', '$2y$10$Q0p7UztaGZQ5w7Q4Om5KnufPcGgCYjwqPCIOKC043kyO8wzXqALFC', '2019-08-20 09:25:02'),
('ufuomaapoki@gmail.com', '$2y$10$PqF.6yMAZ6/CKgU.qZ/zb.EKdl6WtK1J21p/rN15L92w5k0DoETz.', '2019-08-20 09:27:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ufuoma apoki', 'test@waspec.com', NULL, 'ufuomaapoki1', '', '2019-06-17 11:06:28', '2019-06-17 11:06:28'),
(2, 'John Doe', 'test@test.com', NULL, 'CEfLjpVAwwFU.', NULL, '2019-06-17 14:45:17', '2019-06-17 14:45:17'),
(3, 'Jane Watson', 'janewatson@test.com', NULL, 'HC0qaEnJN/xBA', NULL, '2019-06-17 14:47:40', '2019-06-17 14:47:40'),
(4, 'Jackson', 'jackson@waspec.com', NULL, '$2y$10$cxADucBxu0AlO5jWjegtU.e.Vw3Lsr/xRVI9aQ6f/mOj/mlK3Dffm', NULL, '2019-07-01 07:11:23', '2019-07-01 07:11:23'),
(5, 'Ufuoma Apoki', 'ufuoma@waspec.com', NULL, 'aBmuD4l0GCW9Y', 'VvKODXzl26RBGY0pec5FTAszIkz99yr6zvZZZCeyFR0xITdPrwAdXsuRpiz5', '2019-07-01 07:18:09', '2019-07-01 07:18:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `concepts`
--
ALTER TABLE `concepts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uniqueConcept` (`title`,`lesson_unit_id`);

--
-- Indexes for table `concept_learning_object`
--
ALTER TABLE `concept_learning_object`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_user_course` (`title`,`user_id`) USING BTREE;

--
-- Indexes for table `learning_objects`
--
ALTER TABLE `learning_objects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `learning_object_learning_style`
--
ALTER TABLE `learning_object_learning_style`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `learning_styles`
--
ALTER TABLE `learning_styles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lesson_units`
--
ALTER TABLE `lesson_units`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uniqueLesson` (`title`,`course_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moodle_concepts`
--
ALTER TABLE `moodle_concepts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moodle_courses`
--
ALTER TABLE `moodle_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `concepts`
--
ALTER TABLE `concepts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT for table `concept_learning_object`
--
ALTER TABLE `concept_learning_object`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `learning_objects`
--
ALTER TABLE `learning_objects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `learning_object_learning_style`
--
ALTER TABLE `learning_object_learning_style`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `learning_styles`
--
ALTER TABLE `learning_styles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lesson_units`
--
ALTER TABLE `lesson_units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `moodle_concepts`
--
ALTER TABLE `moodle_concepts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `moodle_courses`
--
ALTER TABLE `moodle_courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
