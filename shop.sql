-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 18, 2017 at 04:49 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `cus_id` int(255) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`cus_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `full_name`, `email`, `password`) VALUES
(1, 'Kasun Dissanayake', 'kpdissanayake@gmail.com', '1234567'),
(2, 'Kasun Dissanayake', 'kpdissanayake@gmail.com', '1234567'),
(3, 'Naween Silva', 'naveen@gmail.com', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `msg_id` int(30) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales_item`
--

DROP TABLE IF EXISTS `sales_item`;
CREATE TABLE IF NOT EXISTS `sales_item` (
  `item_id` varchar(20) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `category` varchar(20) NOT NULL,
  `price` varchar(10) NOT NULL,
  `colour` varchar(20) NOT NULL,
  `in_stock` int(5) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_item`
--

INSERT INTO `sales_item` (`item_id`, `item_name`, `category`, `price`, `colour`, `in_stock`, `description`, `image`) VALUES
('dk_001', 'Acer Aspire AIO Touch Desktop', 'desktop', '102702.65', 'black', 1, 'th Generation Intel Core i5-7400T Processor (Up to 3.0GHz)\r\n23.8\" Full HD Widescreen IPS LED Back-lit Touch Screen Display (1920 x 1080)\r\n12GB DDR4 Memory, 1TB 5400RPM Hard Drive. Processor Core : Quad-core (4 core) Wireless LAN Standard : IEEE 802.11ac\r\n802.11ac Wi-Fi, Wireless Keyboard & Mouse\r\nWindows 10 Home', 'images/sales/dk_001'),
('dk_002', 'HP Pavilion', 'desktop', '107301.35', 'black', 1, 'Processor: 7th Generation AMD A12-9730P Quad-Core Processor, 2.80GHz; Powerful performance lets you work with multiple applications at once without experiencing slowdown.\r\nMonitor: 23.8\" diagonal widescreen FHD (1920x1080) IPS WLED-backlit edge-to-edge monitor; 2 million pixels for crystal-clear visuals and vibrant image quality.\r\nMemory: 8 GB DDR4-2133 SDRAM; Designed to run more efficiently and more reliably at faster speeds.\r\nHard drive: 1 TB 7200RPM SATA; Store all your digital content and still have room left over\r\nKeyboard and mouse: Comes with a wireless keyboard with volume control and optical mouse.', 'images/sales/dk_002'),
('ca_001', 'VicTsing 2.4G Slim Wireless Mouse', 'computer_accessories', '1378.08', 'white', 1, 'SLIM AND PORTABLE DESIGN. Slim and lightweight mouse is perfect for traveling light. It can be easily put into your laptop bag. The Nano receiver can be stored in the back of mouse when not in use.\r\nComfortable Fit and Noiseless Click. Streamline design wireless mouse offers your hand maximum support for lasting comfort. Quiet clicks free your worry about bothering others and keep you stay focused while working. Anti-fingerprint and sweat-resistant finish makes it skin-friendly for constant use.\r\n2.4G WIRELESS TRANSMISSION AND 1600 DPI. 2.4G wireless transmission allows working distance of up to 15m. 1600 DPI make it track more smoothly over a variety of surfaces. Allow you to gain more precise control.\r\n3-STAGE ENERGY-SAVING MODE. To save energy, it will auto shut off within 3seconds/10 seconds/30 minutes of inactivity.\r\nWIDE COMPATIBILITY. Work with Windows7/8/10/XP, Vista7/8, Linux and Mac OS. Ideal for work or entertainment in home and office.', 'images/sales/ca_001'),
('ca_002', 'Redragon M601 Gaming Mouse', 'computer_accessories', '1991.23', 'black', 1, 'Ergonomic Redragon M601 Centrophorus Backlit Gaming Mouse 3200 DPI (800/1600/2400/3200 4 level DPI adjustment) , 3600 FPS, 15G ACC super fast game engine\r\n5 programmable buttons with 5 memory profiles, an 8-piece weight tuning set (2.4g x 8) and LED color options. (LED may be disabled)\r\nDurable smooth TEFLON feet and contoured body for ultimate gaming control. Quality ABS construction and two programmable side buttons\r\n6ft high-strength braided fiber cable, anti-skid scroll wheel, and red backlighting\r\nSupports Windows 10, 8, 7, Vista, XP or later operating system. Package contents: CENTROPHORUS Gaming Mouse, tuning weights, and user manual', 'images/sales/ca_002'),
('nb_001', 'HP Pavilion 14-al061nr 14 Notebook', 'notebook', '59320.10', 'black', 1, 'Powerful Processor and Memory: Intel Core i3-6100U Processor at 2.3 GHz 8GB DDR3 (2-DIMM) RAM\r\nHard Drives: 1TB 5400RPM SATA Hard Drive Communications: Intel Wireless 802.11AC and Bluetooth 4.0, HP TrueVision HD Webcam, Dual Digital Microphones\r\nGraphics and Video: 14-inch diagonal HD SVA BrightView WLED-backlit Display Integrated Intel 520 Graphics\r\nKeyboard: Full-size island-style keyboard with numeric keypad Ports: 2 x Superspeed USB 3.0, 1 x USB 2.0, 1 x HDMI, 1 x Multi-Format Digital Media Card Reader, 1 x Combination Headphone-Out/Microphone-In Jack, 1 x RJ-45 Connector Power; Supply: 3-Cell Lithium-Ion Battery\r\nWindows 10 operating system Dimensions: 13.3 Inch (W) x 8.84 Inch (D) x 0.76 Inch (H), Approximate Weight: 4.96 lbs; ENERGY STAR Qualified', 'images/sales/nb_001'),
('nb_001', 'HP Pavilion 14-al061nr 14 Notebook', 'notebook', '59320.10', 'black', 1, 'Powerful Processor and Memory: Intel Core i3-6100U Processor at 2.3 GHz 8GB DDR3 (2-DIMM) RAM\r\nHard Drives: 1TB 5400RPM SATA Hard Drive Communications: Intel Wireless 802.11AC and Bluetooth 4.0, HP TrueVision HD Webcam, Dual Digital Microphones\r\nGraphics and Video: 14-inch diagonal HD SVA BrightView WLED-backlit Display Integrated Intel 520 Graphics\r\nKeyboard: Full-size island-style keyboard with numeric keypad Ports: 2 x Superspeed USB 3.0, 1 x USB 2.0, 1 x HDMI, 1 x Multi-Format Digital Media Card Reader, 1 x Combination Headphone-Out/Microphone-In Jack, 1 x RJ-45 Connector Power; Supply: 3-Cell Lithium-Ion Battery\r\nWindows 10 operating system Dimensions: 13.3 Inch (W) x 8.84 Inch (D) x 0.76 Inch (H), Approximate Weight: 4.96 lbs; ENERGY STAR Qualified', 'images/sales/nb_001'),
('nb_002', 'HP 14\" Notebook Compter', 'notebook', '30504.68', 'blue', 1, 'Manufacturer Refurbished. This Certified Refurbished product is tested and certified to look and work like new. The refurbishing process includes functionality testing, basic cleaning, inspection, and repackaging. The product ships with all relevant accessories, a minimum 90-day warranty, and may arrive in a generic box. Only select sellers who maintain a high performance bar may offer Certified Refurbished products on Amazon.com\r\n14\" diagonal HD SVA BrightView WLED-backlit (1366 x 768) | Integrated Intel HD Graphics 400 | HP TrueVision HD Webcam (front-facing) with integrated digital microphone | DTS Studio Sound with 2 speakers\r\nIntel Celeron N3060 (1.6 GHz, up to 2.48 GHz, 2 MB cache, 2 cores) | WLAN 802.11b/g/n (1x1) | 1 x multi-format SD media card reader\r\n4GB DDR3L-1600 SDRAM (1 x 4 GB) | 32GB eMMC Hard Drive | Integrated 10/100 BASE-T Ethernet LAN\r\nWindows 10 Home', 'images/sales/nb_002'),
('na_001', 'NETGEAR R6120-100NAS - AC1200 Dual Band Wi-Fi Router', 'network_accessories', '8277.65', 'black', 1, 'Wi-Fi speeds up to 300+900 Mbps\r\nUpgrade your Wi-Fi to support new AC devices\r\nWorks with all N150, N300, N600 and AC devices\r\nNETGEAR genie app—Easily manage your home network\r\nReadySHARE USB Access—Wirelessly access & share USB storage', 'images/sales/na_001'),
('na_002', 'TP-Link AC1200 Gigabit Wireless Wi-Fi Router (Archer C1200)', 'network_accessories', '8968.99', 'black', 1, 'Supports 802.11Ac standard - the next generation of Wi-Fi\r\nSimultaneous 2.4 Ghz 300mbps and 5ghz 867mbps connections for 1.2Gbps of total available bandwidth\r\nUSB 2.0 port - easily share a printer locally and files and media with networked devices or remotely via ftp server\r\nGuest network access provides secure Wi-Fi access for guests sharing your home or office network\r\nEasy network management at your fingertips with TP-Link tether\r\nRefer user manual below for trouble-shooting steps', 'images/sales/na_002'),
('cam_001', 'Nikon D7200 DX-format DSLR w/ 18-140mm VR Lens', 'camera', '168356.37', 'black', 1, '24.2 MP DX-format CMOS image sensor\r\nNo Optical Low-Pass Filter (OLPF)\r\n51 point autofocus system; Focus Auto & Manual; Autofocus Points Phase Detection: 51 (15 Cross-Type)\r\n6 frames per second (fps) shooting capacity\r\nEXPEED 4 image processing\r\nBuilt in Wi-Fi and Near Field Communication (NFC) for instant sharing', 'images/sales/cam_001'),
('cam_002', 'Sony a7R III 42.4MP Full-frame Mirrorless Interchangeable-Lens Camera', 'camera', '491244', 'black', 1, '42.4 MP back-illuminated Exmor R CMOS sensor with gapless on-chip lens design\r\nNew front-end LSI and updated BIONZ X processing-engine for maximum processing speed\r\nAdvanced Hybrid AF system with 399 focal-plan phase-detection AF points cover 68% of the image Plane and 425 contrast AF points covering 47% of the image area\r\n10 fps with continuous and accurate AF/AE in either mechanical or silent shudder mode\r\nDual SD media card Slots', 'images/sales/cam_002'),
('cam_001', 'Nikon D7200 DX-format DSLR w/ 18-140mm VR Lens', 'camera', '168356.37', 'black', 1, '24.2 MP DX-format CMOS image sensor\r\nNo Optical Low-Pass Filter (OLPF)\r\n51 point autofocus system; Focus Auto & Manual; Autofocus Points Phase Detection: 51 (15 Cross-Type)\r\n6 frames per second (fps) shooting capacity\r\nEXPEED 4 image processing\r\nBuilt in Wi-Fi and Near Field Communication (NFC) for instant sharing', 'images/sales/cam_001'),
('cam_002', 'Sony a7R III 42.4MP Full-frame Mirrorless Interchangeable-Lens Camera', 'camera', '491244', 'black', 1, '42.4 MP back-illuminated Exmor R CMOS sensor with gapless on-chip lens design\r\nNew front-end LSI and updated BIONZ X processing-engine for maximum processing speed\r\nAdvanced Hybrid AF system with 399 focal-plan phase-detection AF points cover 68% of the image Plane and 425 contrast AF points covering 47% of the image area\r\n10 fps with continuous and accurate AF/AE in either mechanical or silent shudder mode\r\nDual SD media card Slots', 'images/sales/cam_002'),
('cam_001', 'Nikon D7200 DX-format DSLR w/ 18-140mm VR Lens', 'camera', '168356.37', 'black', 1, '24.2 MP DX-format CMOS image sensor\r\nNo Optical Low-Pass Filter (OLPF)\r\n51 point autofocus system; Focus Auto & Manual; Autofocus Points Phase Detection: 51 (15 Cross-Type)\r\n6 frames per second (fps) shooting capacity\r\nEXPEED 4 image processing\r\nBuilt in Wi-Fi and Near Field Communication (NFC) for instant sharing', 'images/sales/cam_001'),
('cam_002', 'Sony a7R III 42.4MP Full-frame Mirrorless Interchangeable-Lens Camera', 'camera', '491244', 'black', 1, '42.4 MP back-illuminated Exmor R CMOS sensor with gapless on-chip lens design\r\nNew front-end LSI and updated BIONZ X processing-engine for maximum processing speed\r\nAdvanced Hybrid AF system with 399 focal-plan phase-detection AF points cover 68% of the image Plane and 425 contrast AF points covering 47% of the image area\r\n10 fps with continuous and accurate AF/AE in either mechanical or silent shudder mode\r\nDual SD media card Slots', 'images/sales/cam_002'),
('cam_003', 'PANASONIC LUMIX ZS100 4K Point and Shoot Camera', 'camera', '84176', 'gray', 1, 'Large 1, 20 Megapixel sensor delivers brighter, more colorful photos with fewer image artifacts\r\n10x (25-250mm) LEICA DC Lens optical zoom performance with a wide F/2.8-5.9 aperture for impressive background defocus effects\r\n4K Ultra HD video recording plus exclusive LUMIX 4K PHOTO and 4K Post Focus photo capture features\r\nEye-level Electronic Viewfinder (EVF) and touch-enabled LCD for a wider viewing experience\r\nLens-mounted control ring brings DSLR-like exposure control to a compact point-and-shoot camera body', 'images/sales/cam_003'),
('cam_001', 'Nikon D7200 DX-format DSLR w/ 18-140mm VR Lens', 'camera', '168356.37', 'black', 1, '24.2 MP DX-format CMOS image sensor\r\nNo Optical Low-Pass Filter (OLPF)\r\n51 point autofocus system; Focus Auto & Manual; Autofocus Points Phase Detection: 51 (15 Cross-Type)\r\n6 frames per second (fps) shooting capacity\r\nEXPEED 4 image processing\r\nBuilt in Wi-Fi and Near Field Communication (NFC) for instant sharing', 'images/sales/cam_001'),
('cam_002', 'Sony a7R III 42.4MP Full-frame Mirrorless Interchangeable-Lens Camera', 'camera', '491244', 'black', 1, '42.4 MP back-illuminated Exmor R CMOS sensor with gapless on-chip lens design\r\nNew front-end LSI and updated BIONZ X processing-engine for maximum processing speed\r\nAdvanced Hybrid AF system with 399 focal-plan phase-detection AF points cover 68% of the image Plane and 425 contrast AF points covering 47% of the image area\r\n10 fps with continuous and accurate AF/AE in either mechanical or silent shudder mode\r\nDual SD media card Slots', 'images/sales/cam_002'),
('cam_003', 'PANASONIC LUMIX ZS100 4K Point and Shoot Camera', 'camera', '84176', 'gray', 1, 'Large 1, 20 Megapixel sensor delivers brighter, more colorful photos with fewer image artifacts\r\n10x (25-250mm) LEICA DC Lens optical zoom performance with a wide F/2.8-5.9 aperture for impressive background defocus effects\r\n4K Ultra HD video recording plus exclusive LUMIX 4K PHOTO and 4K Post Focus photo capture features\r\nEye-level Electronic Viewfinder (EVF) and touch-enabled LCD for a wider viewing experience\r\nLens-mounted control ring brings DSLR-like exposure control to a compact point-and-shoot camera body', 'images/sales/cam_003'),
('cam_004', 'NYXCAM 4MP Security Bullet Camera,t, Metal IP66 Weatherproof', 'camera', '5067', 'black', 1, 'HIGH RESOLUTION: 4MP HD-AHD security Camera is a high resolution 2560*1440 (2560 TVL) camera which provides excellent video quality and clarity\r\nWIDE VIEW ANGLE: 4.0 Megapixel survellience camera with 3.6mm lens, have a wide view angle to 100 degree. Vandalproof metal case\r\nNIGHT VISION: This CCTV camera with 36 IR CUT LEDS provide a clear B&W night vision up to 100ft/30meters\r\nWEATHERPROOF CAMERA: Metal IP66 indoor/outdoor camera are completely airtight against dust and able to endure any kind of wind and rain. Outdoor cameras are capable of operating in extreme temperatures -10°C to 60°C or -14°F to 140°F.\r\nNOTICE: The cam can’t work alone. It only work with the 4MP real time display AHD DVR with NTSC video mode (NYXCAM 4MP DVR are suggested). Pls do not purchase if your DVR can’t meet above requirement', 'images/sales/cam_004'),
('cam_001', 'Nikon D7200 DX-format DSLR w/ 18-140mm VR Lens', 'camera', '168356.37', 'black', 1, '24.2 MP DX-format CMOS image sensor\r\nNo Optical Low-Pass Filter (OLPF)\r\n51 point autofocus system; Focus Auto & Manual; Autofocus Points Phase Detection: 51 (15 Cross-Type)\r\n6 frames per second (fps) shooting capacity\r\nEXPEED 4 image processing\r\nBuilt in Wi-Fi and Near Field Communication (NFC) for instant sharing', 'images/sales/cam_001'),
('cam_002', 'Sony a7R III 42.4MP Full-frame Mirrorless Interchangeable-Lens Camera', 'camera', '491244', 'black', 1, '42.4 MP back-illuminated Exmor R CMOS sensor with gapless on-chip lens design\r\nNew front-end LSI and updated BIONZ X processing-engine for maximum processing speed\r\nAdvanced Hybrid AF system with 399 focal-plan phase-detection AF points cover 68% of the image Plane and 425 contrast AF points covering 47% of the image area\r\n10 fps with continuous and accurate AF/AE in either mechanical or silent shudder mode\r\nDual SD media card Slots', 'images/sales/cam_002'),
('cam_003', 'PANASONIC LUMIX ZS100 4K Point and Shoot Camera', 'camera', '84176', 'gray', 1, 'Large 1, 20 Megapixel sensor delivers brighter, more colorful photos with fewer image artifacts\r\n10x (25-250mm) LEICA DC Lens optical zoom performance with a wide F/2.8-5.9 aperture for impressive background defocus effects\r\n4K Ultra HD video recording plus exclusive LUMIX 4K PHOTO and 4K Post Focus photo capture features\r\nEye-level Electronic Viewfinder (EVF) and touch-enabled LCD for a wider viewing experience\r\nLens-mounted control ring brings DSLR-like exposure control to a compact point-and-shoot camera body', 'images/sales/cam_003'),
('cam_004', 'NYXCAM 4MP Security Bullet Camera,t, Metal IP66 Weatherproof', 'camera', '5067', 'black', 1, 'HIGH RESOLUTION: 4MP HD-AHD security Camera is a high resolution 2560*1440 (2560 TVL) camera which provides excellent video quality and clarity\r\nWIDE VIEW ANGLE: 4.0 Megapixel survellience camera with 3.6mm lens, have a wide view angle to 100 degree. Vandalproof metal case\r\nNIGHT VISION: This CCTV camera with 36 IR CUT LEDS provide a clear B&W night vision up to 100ft/30meters\r\nWEATHERPROOF CAMERA: Metal IP66 indoor/outdoor camera are completely airtight against dust and able to endure any kind of wind and rain. Outdoor cameras are capable of operating in extreme temperatures -10°C to 60°C or -14°F to 140°F.\r\nNOTICE: The cam can’t work alone. It only work with the 4MP real time display AHD DVR with NTSC video mode (NYXCAM 4MP DVR are suggested). Pls do not purchase if your DVR can’t meet above requirement', 'images/sales/cam_004'),
('cam_001', 'Nikon D7200 DX-format DSLR w/ 18-140mm VR Lens', 'camera', '168356.37', 'black', 1, '24.2 MP DX-format CMOS image sensor\r\nNo Optical Low-Pass Filter (OLPF)\r\n51 point autofocus system; Focus Auto & Manual; Autofocus Points Phase Detection: 51 (15 Cross-Type)\r\n6 frames per second (fps) shooting capacity\r\nEXPEED 4 image processing\r\nBuilt in Wi-Fi and Near Field Communication (NFC) for instant sharing', 'images/sales/cam_001'),
('cam_002', 'Sony a7R III 42.4MP Full-frame Mirrorless Interchangeable-Lens Camera', 'camera', '491244', 'black', 1, '42.4 MP back-illuminated Exmor R CMOS sensor with gapless on-chip lens design\r\nNew front-end LSI and updated BIONZ X processing-engine for maximum processing speed\r\nAdvanced Hybrid AF system with 399 focal-plan phase-detection AF points cover 68% of the image Plane and 425 contrast AF points covering 47% of the image area\r\n10 fps with continuous and accurate AF/AE in either mechanical or silent shudder mode\r\nDual SD media card Slots', 'images/sales/cam_002'),
('cam_003', 'PANASONIC LUMIX ZS100 4K Point and Shoot Camera', 'camera', '84176', 'gray', 1, 'Large 1, 20 Megapixel sensor delivers brighter, more colorful photos with fewer image artifacts\r\n10x (25-250mm) LEICA DC Lens optical zoom performance with a wide F/2.8-5.9 aperture for impressive background defocus effects\r\n4K Ultra HD video recording plus exclusive LUMIX 4K PHOTO and 4K Post Focus photo capture features\r\nEye-level Electronic Viewfinder (EVF) and touch-enabled LCD for a wider viewing experience\r\nLens-mounted control ring brings DSLR-like exposure control to a compact point-and-shoot camera body', 'images/sales/cam_003'),
('cam_004', 'NYXCAM 4MP Security Bullet Camera,t, Metal IP66 Weatherproof', 'camera', '5067', 'black', 1, 'HIGH RESOLUTION: 4MP HD-AHD security Camera is a high resolution 2560*1440 (2560 TVL) camera which provides excellent video quality and clarity\r\nWIDE VIEW ANGLE: 4.0 Megapixel survellience camera with 3.6mm lens, have a wide view angle to 100 degree. Vandalproof metal case\r\nNIGHT VISION: This CCTV camera with 36 IR CUT LEDS provide a clear B&W night vision up to 100ft/30meters\r\nWEATHERPROOF CAMERA: Metal IP66 indoor/outdoor camera are completely airtight against dust and able to endure any kind of wind and rain. Outdoor cameras are capable of operating in extreme temperatures -10°C to 60°C or -14°F to 140°F.\r\nNOTICE: The cam can’t work alone. It only work with the 4MP real time display AHD DVR with NTSC video mode (NYXCAM 4MP DVR are suggested). Pls do not purchase if your DVR can’t meet above requirement', 'images/sales/cam_004'),
('cam_001', 'Nikon D7200 DX-format DSLR w/ 18-140mm VR Lens', 'camera', '168356.37', 'black', 1, '24.2 MP DX-format CMOS image sensor\r\nNo Optical Low-Pass Filter (OLPF)\r\n51 point autofocus system; Focus Auto & Manual; Autofocus Points Phase Detection: 51 (15 Cross-Type)\r\n6 frames per second (fps) shooting capacity\r\nEXPEED 4 image processing\r\nBuilt in Wi-Fi and Near Field Communication (NFC) for instant sharing', 'images/sales/cam_001'),
('cam_002', 'Sony a7R III 42.4MP Full-frame Mirrorless Interchangeable-Lens Camera', 'camera', '491244', 'black', 1, '42.4 MP back-illuminated Exmor R CMOS sensor with gapless on-chip lens design\r\nNew front-end LSI and updated BIONZ X processing-engine for maximum processing speed\r\nAdvanced Hybrid AF system with 399 focal-plan phase-detection AF points cover 68% of the image Plane and 425 contrast AF points covering 47% of the image area\r\n10 fps with continuous and accurate AF/AE in either mechanical or silent shudder mode\r\nDual SD media card Slots', 'images/sales/cam_002'),
('cam_003', 'PANASONIC LUMIX ZS100 4K Point and Shoot Camera', 'camera', '84176', 'gray', 1, 'Large 1, 20 Megapixel sensor delivers brighter, more colorful photos with fewer image artifacts\r\n10x (25-250mm) LEICA DC Lens optical zoom performance with a wide F/2.8-5.9 aperture for impressive background defocus effects\r\n4K Ultra HD video recording plus exclusive LUMIX 4K PHOTO and 4K Post Focus photo capture features\r\nEye-level Electronic Viewfinder (EVF) and touch-enabled LCD for a wider viewing experience\r\nLens-mounted control ring brings DSLR-like exposure control to a compact point-and-shoot camera body', 'images/sales/cam_003'),
('cam_004', 'NYXCAM 4MP Security Bullet Camera,t, Metal IP66 Weatherproof', 'camera', '5067', 'black', 1, 'HIGH RESOLUTION: 4MP HD-AHD security Camera is a high resolution 2560*1440 (2560 TVL) camera which provides excellent video quality and clarity\r\nWIDE VIEW ANGLE: 4.0 Megapixel survellience camera with 3.6mm lens, have a wide view angle to 100 degree. Vandalproof metal case\r\nNIGHT VISION: This CCTV camera with 36 IR CUT LEDS provide a clear B&W night vision up to 100ft/30meters\r\nWEATHERPROOF CAMERA: Metal IP66 indoor/outdoor camera are completely airtight against dust and able to endure any kind of wind and rain. Outdoor cameras are capable of operating in extreme temperatures -10°C to 60°C or -14°F to 140°F.\r\nNOTICE: The cam can’t work alone. It only work with the 4MP real time display AHD DVR with NTSC video mode (NYXCAM 4MP DVR are suggested). Pls do not purchase if your DVR can’t meet above requirement', 'images/sales/cam_004'),
('cam_001', 'Nikon D7200 DX-format DSLR w/ 18-140mm VR Lens', 'camera', '102345', 'black', 1, '24.2 MP DX-format CMOS image sensor\r\nNo Optical Low-Pass Filter (OLPF)\r\n51 point autofocus system; Focus Auto & Manual; Autofocus Points Phase Detection: 51 (15 Cross-Type)\r\n6 frames per second (fps) shooting capacity\r\nEXPEED 4 image processing\r\nBuilt in Wi-Fi and Near Field Communication (NFC) for instant sharing', 'images/sales/cam_001');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

DROP TABLE IF EXISTS `shopping_cart`;
CREATE TABLE IF NOT EXISTS `shopping_cart` (
  `cart_id` int(100) NOT NULL AUTO_INCREMENT,
  `cus_id` varchar(50) NOT NULL,
  `item_id` varchar(50) NOT NULL,
  `quantity` int(100) NOT NULL,
  `price` varchar(255) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `type` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `type`) VALUES
(1, 'kasunprageethdissanayake@gmail.com', '1234567', 'Kasun', 'Dissanayake', 'manager'),
(2, 'kpdissanayake@gmail.com', '1234567', 'Kalpa', 'Wijesooriya', 'shop_director'),
(4, 'manager@gmail.com', 'manager', 'Gaveen', 'Silva', 'editor'),
(5, 'hasith@gnail.com', '1234567', 'Hasith', 'Lakshan', 'editor');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
