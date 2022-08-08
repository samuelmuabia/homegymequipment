-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2022 at 07:12 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hge`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `author` varchar(20) NOT NULL,
  `publish` varchar(40) DEFAULT NULL,
  `image_path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `details`, `author`, `publish`, `image_path`) VALUES
(4, 'What Are Some Benefits of Exercise?', 'Exercise benefits every part of the body, including the mind. Exercise improves brain health and learning. It can help people sleep better. When you exercise, your body makes chemicals that help you feel good. Exercise lowers your chances of depression and decreases feelings of anxiety. Exercise helps people keep a healthy weight and lower their risk of some diseases. Exercise can help a person age well. This may not seem important now, but your body will thank you later.', 'Lily Aldrin ', '26th Feb, 2021', 'IMG-625c844897abd0.53228941.jpg'),
(5, 'How Can Exercise Keep It Going?', 'One of the biggest reasons people drop an exercise program is lack of interest: If what you\'re doing isn\'t fun, it\'s hard to keep it up. But there are many different sports and activities to try to see which one inspires you. If you need a little more motivation, take a class, join a team, or find an exercise buddy to help keep you on track.\nTalk to someone, like a coach or fitness expert at a gym, who can help you get started on a program that\'s right for you and your level of fitness.\nEveryone can benefit from moving more and sitting less, even those with disabilities or medical problems like asthma. If you have a health problem or other concern (like being out of shape), talk to your doctor before beginning an exercise plan.\nConsidering all the health benefits of being physically active, it\'s easy to see why exercise is wise. And the great thing about exercise is that it\'s never too late to start. Even small things can count as exercise — like taking a short bike ride, walking the d', 'Ted Mosby', '1st January, 2020', 'IMG-625c85519e4ee7.08177527.png'),
(6, 'Change Your Breathing, Change Your Life', 'Take a deep breath, slowly, in and out through your nose. \r\n\r\nYou are tapping into an internal mechanism for better health and fitness. It’s simple, it’s free and it’s always there. \r\n\r\nHave you ever thought about your breathing? Most people don’t. Breathing is an automatic function of the body, but you can also control it. You must breathe to live and so your body will do everything it can to make that happen. But your environment, stress and how you breathe can alter and even impede that process. \r\n\r\nThe good news is that simply practicing nasal breathing can turn it all around.\r\n\r\nTaking slower, longer breaths in and out through your nose can help with everything from reducing anxiety to boosting athletic performance. Basically, nasal breathing slows your rate of breathing down, which means your body doesn’t have to work as hard to get oxygen into your bloodstream. This is great for overall health and athletic performance, according to a 2018 study in the International Journal of Ki', ' Shelby Spears', 'September 02, 2021', 'IMG-625dc6feef86d0.77895269.webp'),
(7, 'Fitness workout helps maintain strong muscles and bones & Reduces risk of chronic disease', 'As we get older, we lose muscle mass and function. But exercising regularly may reduce muscle loss and maintain strength. As we exercise, our bodies release hormones that help muscles absorb amino acids and boost muscle growth.\r\nAnd according to a study, exercising while we’re young helps build bone density, which can help prevent osteoporosis as we age.\r\nExercising regularly can help ward off chronic diseases like Type 2 diabetes and heart disease. It can also help if you have high blood pressure and high cholesterol.\r\nJust think about how a lack of exercise can impact your health. It can cause significant belly fat (which we know is tough to lose) and has been linked to high cholesterol, inflammation, heart disease, stroke and diabetes.', 'Chandler Bing', '18th November 2021', 'IMG-625dcc8cc16ec3.65412945.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `wearable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `wearable`) VALUES
(1, 'Smart Watches', 1),
(2, 'Heart rate monitor', 1),
(3, 'Tracker', 1),
(4, 'Brainwave fitness headband', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, '', 'markjones@gmai.com', '', 'asdasdasdas'),
(3, '', 'walker.bella@gmail.com', 'second hand gym equipment', 'Is it okay if I buy second hand gym equipment to start a commercial gym centre?\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(100) NOT NULL,
  `number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `address`, `number`) VALUES
(1, 'may asdasdo asdasd', 'user@user.com', '', ''),
(2, 'may asdasdo asdasd', 'user@user.com', '', ''),
(3, 'may asdasdo asdasd', 'user@user.com', '', ''),
(4, 'may asdasdo asdasd', 'user@user.com', '', ''),
(5, 'may asdasdo asdasd', 'user@user.com', '', ''),
(6, 'may asdasdo asdasd', 'user@user.com', '', ''),
(7, 'may asdasdo asdasd', 'user@user.com', '', ''),
(8, '', 'user@user.com', '', ''),
(9, '', 'user@user.com', '', ''),
(10, '', 'user@user.com', '', ''),
(11, '', 'user@user.com', '', ''),
(12, '', 'user@user.com', '', ''),
(13, '', 'user@user.com', '', ''),
(14, '', 'user@user.com', '', ''),
(15, '', 'user@user.com', '', ''),
(16, '', 'user@user.com', '', ''),
(17, 'may asdasdo asdasd', 'user@user.com', '', ''),
(18, 'Ted Mosby', 'user@user.com', 'London street, UK', '6024523912'),
(19, 'Ted Mosby', 'user@user.com', 'London street, UK', '213892308123'),
(20, 'Ted Mosby', 'user@user.com', 'London street, UK', '213892308123'),
(21, 'Ted Mosby', 'user@user.com', 'London street, UK', '213892308123'),
(22, 'Rozlyn', 'user@user.com', 'London Street, Uk', '312231293812093'),
(23, 'Mark jones', 'star.light@gmail.com', 'London Street, Uk', '342342342344'),
(24, 'Mark jones', 'user@user.com', 'London Street, Uk', '454435432'),
(25, 'Bella Walker', 'walker.bella@gmail.com', 'London Street,UK', '343243243234'),
(26, 'Bella Walker', 'walker.bella@gmail.com', 'London street, UK', '324234234'),
(27, 'Bella Walker', 'walker.bella@gmail.com', 'London Street,UK', '324234214122'),
(28, 'Bella Walker', 'walker.bella@gmail.com', 'London  street,UK', '2332312312');

-- --------------------------------------------------------

--
-- Table structure for table `login_log`
--

CREATE TABLE `login_log` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(30) NOT NULL,
  `try_time` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `total_qty` int(11) NOT NULL,
  `total_amount` float(10,2) NOT NULL,
  `transaction_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `total_qty`, `total_amount`, `transaction_id`, `customer_id`) VALUES
(29, 9, 775.00, '0EN86018WE518813J', 10),
(30, 9, 775.00, '0EN86018WE518813J', 11),
(31, 9, 775.00, '0EN86018WE518813J', 12),
(32, 9, 775.00, '0EN86018WE518813J', 13),
(33, 9, 775.00, '0EN86018WE518813J', 14),
(34, 9, 775.00, '0EN86018WE518813J', 15),
(35, 9, 775.00, '0EN86018WE518813J', 16),
(36, 9, 1223.00, '0P750374DK174845W', 17),
(37, 10, 4218.00, '05B483245S866571E', 18),
(38, 10, 4218.00, '7225843937938430P', 19),
(39, 10, 4218.00, '7225843937938430P', 20),
(40, 10, 4218.00, '7225843937938430P', 21),
(41, 6, 714.00, '8KH15557BC432600W', 22),
(42, 1, 187.00, '39484199PW208114F', 23),
(43, 1, 166.00, '77A34915P89787249', 24),
(44, 4, 565.00, '8CT8034235756660L', 25),
(45, 5, 436.00, '4KX91339WS5752925', 26),
(46, 1, 92.00, '17004580HT518822P', 27),
(47, 3, 1564.00, '7NB407326K237753P', 28);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_code` varchar(220) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `gross_price` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_code`, `quantity`, `unit_price`, `gross_price`, `name`) VALUES
(5, 12, 'HomeCablePulleySystem01', 1, 0, 0, ''),
(6, 12, 'AmonaxGymEquipmentforHomeWorkout01', 1, 140, 140, ''),
(7, 13, 'HomeCablePulleySystem01', 1, 0, 0, ''),
(8, 13, 'AmonaxGymEquipmentforHomeWorkout01', 1, 140, 140, ''),
(9, 14, 'HomeCablePulleySystem01', 1, 0, 0, ''),
(10, 14, 'AmonaxGymEquipmentforHomeWorkout01', 1, 140, 140, ''),
(11, 15, 'HomeCablePulleySystem01', 1, 0, 0, ''),
(12, 15, 'AmonaxGymEquipmentforHomeWorkout01', 1, 140, 140, ''),
(13, 16, 'HomeCablePulleySystem01', 1, 0, 0, ''),
(14, 16, 'AmonaxGymEquipmentforHomeWorkout01', 1, 140, 140, ''),
(15, 17, 'HomeCablePulleySystem01', 1, 0, 0, ''),
(16, 17, 'AmonaxGymEquipmentforHomeWorkout01', 1, 140, 140, ''),
(17, 18, 'HomeCablePulleySystem01', 1, 0, 0, ''),
(18, 18, 'AmonaxGymEquipmentforHomeWorkout01', 1, 140, 140, ''),
(19, 19, 'HomeCablePulleySystem01', 1, 0, 0, ''),
(20, 19, 'AmonaxGymEquipmentforHomeWorkout01', 1, 140, 140, ''),
(21, 20, 'HomeCablePulleySystem01', 1, 0, 0, ''),
(22, 20, 'AmonaxGymEquipmentforHomeWorkout01', 1, 140, 140, ''),
(23, 21, 'HomeCablePulleySystem01', 1, 0, 0, ''),
(24, 21, 'AmonaxGymEquipmentforHomeWorkout01', 1, 140, 140, ''),
(25, 22, 'HomeCablePulleySystem01', 1, 0, 0, ''),
(26, 22, 'AmonaxGymEquipmentforHomeWorkout01', 1, 140, 140, ''),
(27, 23, 'HomeCablePulleySystem01', 1, 0, 0, ''),
(28, 23, 'AmonaxGymEquipmentforHomeWorkout01', 1, 140, 140, ''),
(29, 24, 'HomeCablePulleySystem01', 1, 0, 0, ''),
(55, 29, 'HomeCablePulleySystem01', 4, 0, 0, ''),
(56, 29, 'AmonaxGymEquipmentforHomeWorkout01', 5, 140, 700, ''),
(57, 30, 'HomeCablePulleySystem01', 4, 0, 0, ''),
(58, 30, 'AmonaxGymEquipmentforHomeWorkout01', 5, 140, 700, ''),
(59, 31, 'HomeCablePulleySystem01', 4, 0, 0, ''),
(60, 31, 'AmonaxGymEquipmentforHomeWorkout01', 5, 140, 700, ''),
(61, 32, 'HomeCablePulleySystem01', 4, 0, 0, ''),
(62, 32, 'AmonaxGymEquipmentforHomeWorkout01', 5, 140, 700, ''),
(63, 33, 'HomeCablePulleySystem01', 4, 0, 0, ''),
(64, 33, 'AmonaxGymEquipmentforHomeWorkout01', 5, 140, 700, ''),
(65, 34, 'HomeCablePulleySystem01', 4, 0, 0, ''),
(66, 34, 'AmonaxGymEquipmentforHomeWorkout01', 5, 140, 700, ''),
(67, 35, 'HomeCablePulleySystem01', 4, 0, 0, ''),
(68, 35, 'AmonaxGymEquipmentforHomeWorkout01', 5, 140, 700, ''),
(69, 36, 'HomeCablePulleySystem01', 4, 20, 80, 'sdadad'),
(70, 36, 'AmonaxGymEquipmentforHomeWorkout01', 5, 140, 700, 'asdasdasd'),
(71, 37, 'AmonaxGymEquipmentforHomeWorkout01', 5, 140, 700, ''),
(72, 37, 'SpiritFitnessXE795Elliptical01', 3, 517, 1550, ''),
(73, 37, 'SJWRCommercialStationaryBikeExerciseCardioIndoorCycling01', 2, 795, 1590, ''),
(74, 38, 'AmonaxGymEquipmentforHomeWorkout01', 5, 140, 700, 'Amonax Gym Equipment for Home Workout'),
(75, 38, 'SpiritFitnessXE795Elliptical01', 3, 517, 1550, 'Spirit Fitness XE795 Elliptical'),
(76, 38, 'SJWRCommercialStationaryBikeExerciseCardioIndoorCycling01', 2, 795, 1590, 'SJWR Commercial Stationary Bike Exercise Cardio Indoor Cycling'),
(77, 39, 'AmonaxGymEquipmentforHomeWorkout01', 5, 140, 700, 'Amonax Gym Equipment for Home Workout'),
(78, 39, 'SpiritFitnessXE795Elliptical01', 3, 517, 1550, 'Spirit Fitness XE795 Elliptical'),
(79, 39, 'SJWRCommercialStationaryBikeExerciseCardioIndoorCycling01', 2, 795, 1590, 'SJWR Commercial Stationary Bike Exercise Cardio Indoor Cycling'),
(80, 40, 'AmonaxGymEquipmentforHomeWorkout01', 5, 140, 700, 'Amonax Gym Equipment for Home Workout'),
(81, 40, 'SpiritFitnessXE795Elliptical01', 3, 517, 1550, 'Spirit Fitness XE795 Elliptical'),
(82, 40, 'SJWRCommercialStationaryBikeExerciseCardioIndoorCycling01', 2, 795, 1590, 'SJWR Commercial Stationary Bike Exercise Cardio Indoor Cycling'),
(83, 41, 'Smartwatchtracker01', 1, 120, 120, 'Smartwatch tracker '),
(84, 41, 'WearableBoxingSpeedSmartSensorTracker01', 4, 110, 440, 'Wearable Boxing Speed Smart Sensor Tracker'),
(85, 41, 'WahooTICKRHeartRateMonitor,Bluetoothreal01', 1, 50, 50, 'Wahoo TICKR Heart Rate Monitor, Bluetooth real'),
(86, 42, 'AmonaxGymEquipmentforHomeWorkout01', 1, 140, 140, 'Amonax Gym Equipment for Home Workout'),
(87, 43, 'Smartwatchtracker01', 1, 120, 120, 'Smartwatch tracker '),
(88, 44, 'AmonaxGymEquipmentforHomeWorkout01', 1, 140, 140, 'Amonax Gym Equipment for Home Workout'),
(89, 44, 'Smartwatchtracker01', 3, 120, 360, 'Smartwatch tracker '),
(90, 45, 'AerobicStep01', 1, 18, 18, 'Aerobic Step'),
(91, 45, 'RecumbentExerciseBike01', 4, 90, 360, 'Recumbent Exercise Bike'),
(92, 46, 'WahooTICKRHeartRateMonitor,Bluetoothreal01', 1, 50, 50, 'Wahoo TICKR Heart Rate Monitor, Bluetooth real'),
(93, 47, 'SJWRCommercialStationaryBikeExerciseCardioIndoorCycling01', 1, 795, 795, 'SJWR Commercial Stationary Bike Exercise Cardio Indoor Cycling'),
(94, 47, 'SpiritFitnessXE795Elliptical01', 1, 517, 517, 'Spirit Fitness XE795 Elliptical'),
(95, 47, 'AmonaxGymEquipmentforHomeWorkout01', 1, 140, 140, 'Amonax Gym Equipment for Home Workout');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` double(19,2) NOT NULL,
  `sale` tinyint(1) NOT NULL,
  `top` tinyint(1) NOT NULL,
  `latest` tinyint(4) NOT NULL,
  `used` tinyint(1) NOT NULL,
  `wearable` varchar(40) NOT NULL,
  `image_path` varchar(200) NOT NULL,
  `code` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `sale`, `top`, `latest`, `used`, `wearable`, `image_path`, `code`) VALUES
(14, 'SJWR Commercial Stationary Bike Exercise Cardio Indoor Cycling', 'About this item •	HIGH-QUALITY SILENT STEEL FLYWHEEL RIDING on this bicycle can promote blood circulation and burn calories, and exercise your arm, waist, hip and leg muscles. Covers an area of only 0.5 square meters and can be placed in any small corner of the home, while satisfying fitness, without occupying home space •	EQUIPPED WITH A STEEL FLYWHEEL, the silent belt-driven bicycle provides you with a quiet sports environment without disturbing others. •	STURDY MATERIALS & STABLE STRUCTURE The stable double triangle structure makes this cycling bike look stylish and simple, which is very suitable for home and office use. Made of premium refined steel, it has a strong load-bearing capacity and is not easily deformed. •	Magnetically controlled resistance system: The magnetically controlled flywheel adjusts the resistance to avoid wear caused by direct metal contact to improve the service life of the instrument. The resistance is adjusted by adjusting the distance between the metal fly', 795.00, 1, 0, 0, 0, '', 'IMG-625bf1a116ad80.49284453.jpg', 'SJWRCommercialStationaryBikeExerciseCardioIndoorCycling01'),
(16, 'Spirit Fitness XE795 Elliptical', 'About this item 7.5” Bright Blue Backlit LCD Screen Smooth 20” Stride Length Sturdy, Dual Aluminum Track System Cordless – Generator System', 516.50, 1, 0, 0, 0, '', 'IMG-625bf56abbf807.14164912.jpg', 'SpiritFitnessXE795Elliptical01'),
(18, 'Amonax Gym Equipment for Home Workout', 'About this item THE ULTIMATE, PORTABLE WORKOUT EQUIPMENT SET FOR HOME GYM – Amonax fitness equipment for home workout set includes a Convertible Ab Wheel for abs training, a pair of Push Up Handles for press-ups, and an adjustable Skipping Rope for calorie burn. AB ROLLER EXERCISE WHEEL - Amonax convertible ab wheel (with knee mat) provides both double-wheel setting and single-wheel setting, making it suitable for both beginners and advanced users. Amonax ab wheel roller is a great core & abdominal trainer for anybody who is aiming for 6 packs, or simply trying to loose belly fat. This abs roller wheel makes a great addition to ab workout equipment and a perfect home workout equipment for men and women. SKIPPING ROPE - Jump Ropes are notably known for calorie burning. Amonax skipping rope set is an vital exercise equipment for home use. Its patented technology allows it to burn up to 3 times more energy compared to some other exercises. Amonax adjustable skipping rope makes a great add', 140.00, 1, 1, 0, 0, '', 'IMG-625bf7ae176758.17735717.jpg', 'AmonaxGymEquipmentforHomeWorkout01'),
(21, 'Recumbent Exercise Bike Indoor Magnetic Cycling Fitness Equipment for Home Workout', '•	Smooth Stationary Ergonomic High Reinforcement Exercise Bike:The sturdy steel frame,300 Pounds maximum user weight guarantee the stability while cycling.The belt driven system provides a smoother and quieter ride than chain transport', 549.99, 1, 0, 0, 0, '', 'IMG-625bfc35f36811.11424172.jpg', 'RecumbentExerciseBikeIndoorMagneticCyclingFitnessEquipmentforHomeWorkout01'),
(22, 'Home Cable Pulley System', 'About this item •	3 Different Length Fitness Gym Cables : Home cable pulley system provides you with a 1.8m fixed cable, a 2.5m/4m adjustable high-strength steel cable, which allows you to choose and adjust different sizes according to your height to achieve the best exercise state. •	220LBS Max Load-bearing & Stability : The upgraded loading pin fits for standard or Olympic weight plates, the Barbell Clip can keep the plates in place securely. it can bear a maximum weight of 220lbs. Pulley cables are made of high-strength PU material and steel wire, it can withstand strong friction and is not easy to break. For double security, we add 2 U screws to prevent the adjustable cables slipping, ensure your safe use', 120.00, 1, 0, 0, 0, '', 'IMG-625d6f22b29744.47238773.jpg', 'HomeCablePulleySystem01'),
(24, 'roller wheel workout equipment set', 'US Ab Roller Wheel Workout Equipment Set For Abdominal Exercise Home Gym Fitness', 45.00, 1, 0, 0, 0, '', 'IMG-625c6e7697fe08.55832665.jpg', 'rollerwheelworkoutequipmentset01'),
(26, 'Adjustable dumbbells weight set, barbell set ', 'About this item: adjustable dumbbells weight set, barbell set men and women.SET OF 2 DUMBBELLS - 60 LBS TOTAL: TWO 14”x1” handles, FOUR 5-pound plates, FOUR 8-pound plates, FOUR collars', 40.00, 1, 1, 0, 0, '', 'IMG-625c7049a6dae8.24373379.jpg', 'Adjustabledumbbellsweightset,barbellset01'),
(28, ' Mobvoi Home Treadmil', 'About this Mobvoi Home Treadmill, Built-in Bluetooth Speaker, Remote Control, Walking and Running Machine for Home Fitness Exercise Indooritem: adjustable dumbbells weight set, barbell set men and women.SET OF 2 DUMBBELLS - 60 LBS TOTAL: TWO 14”x1” handles, FOUR 5-pound plates, FOUR 8-pound plates, FOUR collars', 476.00, 1, 1, 0, 0, '', 'IMG-625c710eb30f17.24215871.jpg', 'MobvoiHomeTreadmil01'),
(29, '68KG Multi Gym Workout Station Strength Weight Training Pulley System Machine', 'About this Marcy 150lb. Stack Home Gym with Pulley, Arm, and Leg Developer Multifunctional Workout Station for Weightlifting and Bodybuilding – 300 lbs Capacity MWM-4965, Black', 600.00, 1, 0, 0, 0, '', 'IMG-625c726cdb02a0.91434961.webp', '68KGMultiGymWorkoutStationStrengthWeightTrainingPulleySystemMachine01'),
(30, 'Smartwatch tracker ', 'Fitbit Versa 2 Health and Fitness Smartwatch with Heart Rate, Music, Alexa Built-In, Sleep and Swim Tracking, Black/Carbon, One Size (S and L Bands Included)', 120.00, 0, 0, 0, 0, 'Smart Watches', 'IMG-625c740054b933.20504025.jpg', 'Smartwatchtracker01'),
(31, 'Wearable Boxing Speed Smart Sensor Tracker', 'Gym Equipment Highly Sensitive Wearable Boxing Speed Smart Sensor Tracker With Wireless Transmission', 110.00, 0, 0, 0, 0, 'Tracker', 'IMG-625c746550f0f5.05084570.jpg', 'WearableBoxingSpeedSmartSensorTracker01'),
(32, 'Wahoo TICKR Heart Rate Monitor, Bluetooth real', 'About this item TICKR connects heart rate to your favorite training apps and devices. Proven technology delivers accurate heart rate and calories to the Wahoo Fitness and other popular training apps.', 50.00, 0, 0, 0, 0, 'Heart rate monitor', 'IMG-625c74fc0985c6.40345973.jpg', 'WahooTICKRHeartRateMonitor,Bluetoothreal01'),
(33, 'Aerobic Step', 'Tone Fitness Aerobic Step Platform | Exercise Step | Full and Compact Sizes', 18.00, 1, 0, 0, 1, '', 'IMG-625c76b01f0574.73003848.jpg', 'AerobicStep01'),
(34, 'Recumbent Exercise Bike', 'About this item: Magnetic Recumbent Exercise Bike, Middle-Aged and Elderly Training Exercise Bike, Recumbent Exercise Bike', 90.00, 1, 0, 0, 1, '', 'IMG-625c77c3dc9f96.97373707.jpg', 'RecumbentExerciseBike01'),
(35, 'Adjustable Weight Bench Foldable', 'About this item: WINNOW Adjustable Weight Bench Foldable Home Exercise Gym Workout Bench', 22.00, 1, 0, 0, 1, '', 'IMG-625c78a12ceb64.33409030.jpg', 'AdjustableWeightBenchFoldable01'),
(36, 'Weight Bench, Workout Equipment', 'About this item: Body  Weight Bench, Workout Equipment for Home Workouts, Bench Press with Preacher Curl, Leg Developer and Crunch Handle for At Home Workouts, Dark Gray/Black, BCB5860', 70.00, 1, 0, 0, 1, '', 'IMG-625c793f51f0e7.77692578.jpg', 'WeightBench,WorkoutEquipment01'),
(37, 'NordicTrack T Series Treadmills', 'About this item 30-Day iFIT Membership Included; Stream live & on-demand workouts on your equipment with Global Workouts & Studio Classes; Elite trainers adjust your equipment ', 450.00, 1, 0, 0, 1, '', 'IMG-625c7a0b84e692.38978768.jpg', 'NordicTrackTSeriesTreadmills01'),
(38, 'Fitness Squat Rack Power Cage with J-Hooks, Landmine 360° Swivel', 'About this item: Fitness Reality Squat Rack Power Cage with J-Hooks, Landmine 360° Swivel, Weight Plate Storage Attachment and Power Band Pegs 【HEAVY DUTY FRAME】- with an 800 LBS. Barbell Weight Capacity lets you workout with peace of mind. 2\"x2\" Square', 240.00, 1, 0, 0, 1, '', 'IMG-625c7fffa6c0d8.95624895.jpg', 'FitnessSquatRackPowerCagewithJ-Hooks,Landmine360°Swivel01'),
(39, 'Sunny Health & Fitness Hyperextension Roman Chair with Dip Station - SF-BH620062', 'About this item ADJUSTABILITY: Three incline settings allow you to change up your workouts and add variety to your strength and training routines', 240.00, 0, 0, 1, 0, '', 'IMG-625c873b0a1b75.45113683.jpg', 'SunnyHealth&FitnessHyperextensionRomanChairwithDipStation-SF-BH62006201'),
(40, ' Apple Smart Watch Series 3', 'About this item: Apple Smart Watch Series 3 (GPS, 38mm) - Space Grey Aluminum Case with Black Sport Band', 45.00, 0, 0, 1, 0, '', 'IMG-625c884a4319c2.87716512.jpg', 'AppleSmartWatchSeries301'),
(41, 'Marcy Resistance Rowing Machine', 'About this item: Marcy Foldable 8-Level Magnetic Resistance Rowing Machine with Transport Wheels. EIGHT PRESET LEVELS – The Marcy Rowing Machine has a resistance knob that features eight preset magnetic levels', 299.99, 0, 0, 1, 0, '', 'IMG-625c892caccd63.54350813.jpg', 'MarcyResistanceRowingMachine01'),
(42, 'Balancefrom Rubber Encased Hex Dumbbell in Pairs', 'About this item: Dumbbells are widely used in gyms and homes for various exercise purposes, a great tool for either full body workout, or specific muscle groups', 32.00, 0, 0, 1, 0, '', 'IMG-625c89c932b8d4.44803315.jpg', 'BalancefromRubberEncasedHexDumbbellinPairs01'),
(43, 'BOWFLEX SelectTech 552 Two Adjustable Dumbbells PAIR NEW SEALED FAST SHIPPING', 'About this item: Patented adjustment mechanism Adjust the desired training weight using the rotary wheel Individual weight adjustment Settings: 3 5, 5. 5, 9, 11, 16 and 18 kg', 325.00, 0, 0, 1, 0, '', 'IMG-625c8b670dd470.56488368.webp', 'BOWFLEXSelectTech552TwoAdjustableDumbbellsPAIRNEWSEALEDFASTSHIPPING01'),
(44, 'Muse 2 Brainwave Sensing Headband', 'About this item: MUSE 2: The Brain Sensing Headband - Meditation Tracker Multi Sensor Headset Device - Responsive Sound Feedback for Brain Wave, Heart, Body & Breath Activity. ', 246.00, 0, 0, 0, 0, 'Brainwave fitness headband', 'IMG-625c8e591c48a7.35672567.jpg', 'Muse2BrainwaveSensingHeadband01');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_code` varchar(220) NOT NULL,
  `review_rating` int(11) NOT NULL,
  `review_text` varchar(200) NOT NULL,
  `review_by` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `product_name`, `product_code`, `review_rating`, `review_text`, `review_by`) VALUES
(13, 'Smartwatch tracker', 'Smartwatchtracker01', 5, 'it is nice watch', 'Rozlyn'),
(14, 'Wearable Boxing Speed Smart Sensor Tracker', 'WearableBoxingSpeedSmartSensorTracker01', 5, 'wow so great', 'Rozlyn'),
(15, 'BOWFLEX SelectTech 552 Two Adjustable Dumbbells PAIR NEW SEALED FAST SHIPPING', 'BOWFLEXSelectTech552TwoAdjustableDumbbellsPAIRNEWSEALEDFASTSHIPPING01', 5, 'I love this set of dumbbells. However, I was a little hesitant to purchase due to some of the reviews. Some reviews were stating the dumbbells were difficult to put back into the stand.', 'Bella Walker'),
(16, 'Wearable Boxing Speed Smart Sensor Tracker', 'WearableBoxingSpeedSmartSensorTracker01', 5, 'This is one of the coolest boxing training tools I’ve ever come across, probably the coolest. What’s most impressive is how seamless and user friendly the whole experience is.', 'Bella Walker');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` varchar(200) NOT NULL,
  `details` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `name`, `email`, `type`, `details`) VALUES
(1, '', 'markjones@gmai.com', 'offline', 'OWFLEX SelectTech 552 Two Adjustable Dumbbells PAIR NEW SEALED FAST SHIPPING'),
(2, '', 'walker.bella@gmail.com', 'online', 'I am looking forward to book a session and have consultation through online about  guidelines of maintaining and using  some gym equipment.');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `ID` int(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `reg_time` datetime NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`ID`, `username`, `email`, `password`, `reg_time`, `type`) VALUES
(17, 'samuel muabia', 'samuel.planet1@gmail.com', 'fe5db99a473f2e239b322e29ef3e7b3a', '2022-08-08 23:07:44', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `visitors_counter`
--

CREATE TABLE `visitors_counter` (
  `id` int(11) NOT NULL,
  `counter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitors_counter`
--

INSERT INTO `visitors_counter` (`id`, `counter`) VALUES
(1, 345),
(2, 345);

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `image_path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`id`, `title`, `details`, `image_path`) VALUES
(4, 'Health & Fitness Stationary Upright Exercise Bike', 'This stationary bike had some internal damage that was fixed by HGE expert mechanics with 2 days and since then our customer have been comfortably, conveniently and happily using this equipment. ', 'IMG-625c8fbeac3d54.17092750.jpg'),
(5, 'Servicing Treadmill ', 'This treadmill had some critical malfunction. The owner tried repairing it from 2 different servicing workshop but both of those workshops failed. However, HGE mechanic team could fix it as soon as it was handed over in HGE. Another successful work. ', 'IMG-625ca233c91787.24059129.webp'),
(6, 'Gym equipment workshop', 'This gymnasium had several faulty equipment, all of which were fixed by HGE repairing team. Since then those machines have been running smoothly for nearly a year. ', 'IMG-625ca494aba145.37463838.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_log`
--
ALTER TABLE `login_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `visitors_counter`
--
ALTER TABLE `visitors_counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `login_log`
--
ALTER TABLE `login_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `visitors_counter`
--
ALTER TABLE `visitors_counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
