-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2024 at 08:07 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yahtajmart`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, '<div style=\"text-align: right;\"><br></div><div><section class=\"row align-items-center mb-50\" style=\"margin-top: calc(-1 * var(--bs-gutter-y)); margin-right: calc(-.5 * var(--bs-gutter-x)); margin-left: calc(-.5 * var(--bs-gutter-x)); padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: Lato, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; --bs-gutter-x: 1.5rem; --bs-gutter-y: 0; color: rgb(126, 126, 126); margin-bottom: 50px !important;\"><div class=\"col-lg-6\" style=\"margin-top: var(--bs-gutter-y); margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: calc(var(--bs-gutter-x) * .5); padding-bottom: 0px; padding-left: calc(var(--bs-gutter-x) * .5); border: 0px; font: inherit; vertical-align: baseline; flex-basis: auto; width: 584.873px; max-width: 100%;\"><div class=\"pl-25\" style=\"margin: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; border: 0px; font: inherit; vertical-align: baseline; padding-left: 25px !important;\"><h2 class=\"mb-30\" style=\"text-align: right; font-weight: 700; color: rgb(37, 61, 78); font-size: 40px; margin-right: 0px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-family: Quicksand, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; margin-bottom: 30px !important;\">Welcome to Yahtah Mart</h2><p class=\"mb-25\" style=\"text-align: right; margin-right: 0px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 1rem; line-height: 24px; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; margin-bottom: 25px !important;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate id est laborum.</p><p class=\"mb-50\" style=\"text-align: right; margin-right: 0px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 1rem; line-height: 24px; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; margin-bottom: 50px !important;\">Ius ferri velit sanctus cu, sed at soleat accusata. Dictas prompta et Ut placerat legendos interpre.Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante Etiam sit amet orci eget. Quis commodo odio aenean sed adipiscing. Turpis massa tincidunt dui ut ornare lectus. Auctor elit sed vulputate mi sit amet. Commodo consequat. Duis aute irure dolor in reprehenderit in voluptate id est laboru</p><div class=\"carausel-3-columns-cover position-relative\" style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><div class=\"carausel-3-columns slick-initialized slick-slider\" id=\"carausel-3-columns\" style=\"margin: 0px -12px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; position: relative; user-select: none; touch-action: pan-y; -webkit-tap-highlight-color: transparent; overflow: hidden;\"><div class=\"slick-list draggable\" style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; position: relative; overflow: hidden; transform: translate3d(0px, 0px, 0px);\"><div class=\"slick-track\" style=\"margin: 0px auto; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; position: relative; top: 0px; left: 0px; transform: translate3d(-740px, 0px, 0px); opacity: 1; width: 2035px;\"><img src=\"http://localhost:8000/assets/imgs/page/about-3.png\" alt=\"\" class=\"slick-slide slick-cloned\" data-slick-index=\"5\" id=\"\" aria-hidden=\"true\" tabindex=\"-1\" style=\"border: 0px; vertical-align: baseline; margin: 0px 12px; padding: 0px; font: inherit; max-width: 100%; transition: all 0.3s ease 0s; display: block; float: left; height: 26.4236px; min-height: 1px; width: 161px;\"><img src=\"http://localhost:8000/assets/imgs/page/about-4.png\" alt=\"\" class=\"slick-slide slick-cloned\" data-slick-index=\"6\" id=\"\" aria-hidden=\"true\" tabindex=\"-1\" style=\"border: 0px; vertical-align: baseline; margin: 0px 12px; padding: 0px; font: inherit; max-width: 100%; transition: all 0.3s ease 0s; display: block; float: left; height: 26.4236px; min-height: 1px; width: 161px;\"><img src=\"http://localhost:8000/assets/imgs/page/about-2.png\" alt=\"\" class=\"slick-slide slick-cloned\" data-slick-index=\"7\" id=\"\" aria-hidden=\"true\" tabindex=\"-1\" style=\"border: 0px; vertical-align: baseline; margin: 0px 12px; padding: 0px; font: inherit; max-width: 100%; transition: all 0.3s ease 0s; display: block; float: left; height: 26.4236px; min-height: 1px; width: 161px;\"></div></div></div></div></div></div></section><section class=\"text-center mb-50\" style=\"margin-top: 0px; margin-right: 0px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: Lato, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; color: rgb(126, 126, 126); margin-bottom: 50px !important;\"><h2 class=\"title style-3 mb-40\" style=\"font-weight: 700; color: rgb(37, 61, 78); font-size: 40px; margin-right: 0px; margin-left: 0px; padding: 0px 0px 25px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-family: Quicksand, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; background-image: url(&quot;../imgs/theme/wave.png&quot;); background-position: center bottom; background-repeat: no-repeat; margin-bottom: 40px !important;\">What We Provide?</h2><div class=\"row\" style=\"margin-top: calc(-1 * var(--bs-gutter-y)); margin-right: calc(-.5 * var(--bs-gutter-x)); margin-bottom: 0px; margin-left: calc(-.5 * var(--bs-gutter-x)); padding: 0px; border: 0px; font: inherit; vertical-align: baseline; --bs-gutter-x: 1.5rem; --bs-gutter-y: 0;\"><div class=\"col-lg-4 col-md-6 mb-24\" style=\"margin-top: var(--bs-gutter-y); margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding-top: 0px; padding-right: calc(var(--bs-gutter-x) * .5); padding-bottom: 0px; padding-left: calc(var(--bs-gutter-x) * .5); border: 0px; font: inherit; vertical-align: baseline; flex-basis: auto; width: 389.907px; max-width: 100%;\"><div class=\"featured-card\" style=\"margin: 0px; padding: 50px 30px; border: 1px solid rgb(236, 236, 236); font: inherit; vertical-align: baseline; border-radius: 15px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><img src=\"http://localhost:8000/assets/imgs/theme/icons/icon-1.svg\" alt=\"\" style=\"border: 0px; vertical-align: baseline; margin: 0px 0px 30px; padding: 0px; font: inherit; max-width: 100%; transition: all 0.3s ease 0s; width: 100px;\"><h4 style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; font-weight: 700; color: rgb(37, 61, 78); font-size: 24px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-family: Quicksand, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; transition: all 0.3s ease 0s;\">Best Prices &amp; Offers</h4><p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 17px; line-height: 24px; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p><a href=\"http://localhost:8000/abouts#\" style=\"color: rgb(59, 183, 126); margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; transition: all 0.3s ease 0s; cursor: pointer;\">Read more</a></div></div><div class=\"col-lg-4 col-md-6 mb-24\" style=\"margin-top: var(--bs-gutter-y); margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding-top: 0px; padding-right: calc(var(--bs-gutter-x) * .5); padding-bottom: 0px; padding-left: calc(var(--bs-gutter-x) * .5); border: 0px; font: inherit; vertical-align: baseline; flex-basis: auto; width: 389.907px; max-width: 100%;\"><div class=\"featured-card\" style=\"margin: 0px; padding: 50px 30px; border: 1px solid rgb(236, 236, 236); font: inherit; vertical-align: baseline; border-radius: 15px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><img src=\"http://localhost:8000/assets/imgs/theme/icons/icon-2.svg\" alt=\"\" style=\"border: 0px; vertical-align: baseline; margin: 0px 0px 30px; padding: 0px; font: inherit; max-width: 100%; transition: all 0.3s ease 0s; width: 100px;\"><h4 style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; font-weight: 700; color: rgb(37, 61, 78); font-size: 24px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-family: Quicksand, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; transition: all 0.3s ease 0s;\">Wide Assortment</h4><p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 17px; line-height: 24px; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p><a href=\"http://localhost:8000/abouts#\" style=\"color: rgb(59, 183, 126); margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; transition: all 0.3s ease 0s; cursor: pointer;\">Read more</a></div></div><div class=\"col-lg-4 col-md-6 mb-24\" style=\"margin-top: var(--bs-gutter-y); margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding-top: 0px; padding-right: calc(var(--bs-gutter-x) * .5); padding-bottom: 0px; padding-left: calc(var(--bs-gutter-x) * .5); border: 0px; font: inherit; vertical-align: baseline; flex-basis: auto; width: 389.907px; max-width: 100%;\"><div class=\"featured-card\" style=\"margin: 0px; padding: 50px 30px; border: 1px solid rgb(236, 236, 236); font: inherit; vertical-align: baseline; border-radius: 15px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><img src=\"http://localhost:8000/assets/imgs/theme/icons/icon-3.svg\" alt=\"\" style=\"border: 0px; vertical-align: baseline; margin: 0px 0px 30px; padding: 0px; font: inherit; max-width: 100%; transition: all 0.3s ease 0s; width: 100px;\"><h4 style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; font-weight: 700; color: rgb(37, 61, 78); font-size: 24px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-family: Quicksand, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; transition: all 0.3s ease 0s;\">Free Delivery</h4><p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 17px; line-height: 24px; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p><a href=\"http://localhost:8000/abouts#\" style=\"color: rgb(59, 183, 126); margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; transition: all 0.3s ease 0s; cursor: pointer;\">Read more</a></div></div><div class=\"col-lg-4 col-md-6 mb-24\" style=\"margin-top: var(--bs-gutter-y); margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding-top: 0px; padding-right: calc(var(--bs-gutter-x) * .5); padding-bottom: 0px; padding-left: calc(var(--bs-gutter-x) * .5); border: 0px; font: inherit; vertical-align: baseline; flex-basis: auto; width: 389.907px; max-width: 100%;\"><div class=\"featured-card\" style=\"margin: 0px; padding: 50px 30px; border: 1px solid rgb(236, 236, 236); font: inherit; vertical-align: baseline; border-radius: 15px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><img src=\"http://localhost:8000/assets/imgs/theme/icons/icon-4.svg\" alt=\"\" style=\"border: 0px; vertical-align: baseline; margin: 0px 0px 30px; padding: 0px; font: inherit; max-width: 100%; transition: all 0.3s ease 0s; width: 100px;\"><h4 style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; font-weight: 700; color: rgb(37, 61, 78); font-size: 24px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-family: Quicksand, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; transition: all 0.3s ease 0s;\">Easy Returns</h4><p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 17px; line-height: 24px; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p><a href=\"http://localhost:8000/abouts#\" style=\"color: rgb(59, 183, 126); margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; transition: all 0.3s ease 0s; cursor: pointer;\">Read more</a></div></div><div class=\"col-lg-4 col-md-6 mb-24\" style=\"margin-top: var(--bs-gutter-y); margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding-top: 0px; padding-right: calc(var(--bs-gutter-x) * .5); padding-bottom: 0px; padding-left: calc(var(--bs-gutter-x) * .5); border: 0px; font: inherit; vertical-align: baseline; flex-basis: auto; width: 389.907px; max-width: 100%;\"><div class=\"featured-card\" style=\"margin: 0px; padding: 50px 30px; border: 1px solid rgb(236, 236, 236); font: inherit; vertical-align: baseline; border-radius: 15px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><img src=\"http://localhost:8000/assets/imgs/theme/icons/icon-5.svg\" alt=\"\" style=\"border: 0px; vertical-align: baseline; margin: 0px 0px 30px; padding: 0px; font: inherit; max-width: 100%; transition: all 0.3s ease 0s; width: 100px;\"><h4 style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; font-weight: 700; color: rgb(37, 61, 78); font-size: 24px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-family: Quicksand, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; transition: all 0.3s ease 0s;\">100% Satisfaction</h4><p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 17px; line-height: 24px; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p><a href=\"http://localhost:8000/abouts#\" style=\"color: rgb(59, 183, 126); margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; transition: all 0.3s ease 0s; cursor: pointer;\">Read more</a></div></div><div class=\"col-lg-4 col-md-6 mb-24\" style=\"margin-top: var(--bs-gutter-y); margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding-top: 0px; padding-right: calc(var(--bs-gutter-x) * .5); padding-bottom: 0px; padding-left: calc(var(--bs-gutter-x) * .5); border: 0px; font: inherit; vertical-align: baseline; flex-basis: auto; width: 389.907px; max-width: 100%;\"><div class=\"featured-card\" style=\"margin: 0px; padding: 50px 30px; border: 1px solid rgb(236, 236, 236); font: inherit; vertical-align: baseline; border-radius: 15px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><img src=\"http://localhost:8000/assets/imgs/theme/icons/icon-6.svg\" alt=\"\" style=\"border: 0px; vertical-align: baseline; margin: 0px 0px 30px; padding: 0px; font: inherit; max-width: 100%; transition: all 0.3s ease 0s; width: 100px;\"><h4 style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; font-weight: 700; color: rgb(37, 61, 78); font-size: 24px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-family: Quicksand, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; transition: all 0.3s ease 0s;\">Great Daily Deal</h4><p style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 17px; line-height: 24px; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p><a href=\"http://localhost:8000/abouts#\" style=\"color: rgb(59, 183, 126); margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; transition: all 0.3s ease 0s; cursor: pointer;\">Read more</a></div></div></div></section><section class=\"row align-items-center mb-50\" style=\"margin-top: calc(-1 * var(--bs-gutter-y)); margin-right: calc(-.5 * var(--bs-gutter-x)); margin-left: calc(-.5 * var(--bs-gutter-x)); padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: Lato, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; --bs-gutter-x: 1.5rem; --bs-gutter-y: 0; color: rgb(126, 126, 126); margin-bottom: 50px !important;\"><div class=\"row mb-50 align-items-center\" style=\"margin-top: var(--bs-gutter-y); margin-right: calc(-.5 * var(--bs-gutter-x)); margin-left: calc(-.5 * var(--bs-gutter-x)); padding-top: 0px; padding-right: calc(var(--bs-gutter-x) * .5); padding-bottom: 0px; padding-left: calc(var(--bs-gutter-x) * .5); border: 0px; font: inherit; vertical-align: baseline; --bs-gutter-x: 1.5rem; --bs-gutter-y: 0; flex-shrink: 0; width: 1169.75px; max-width: 100%; margin-bottom: 50px !important;\"><div class=\"col-lg-7 pr-30\" style=\"margin-top: var(--bs-gutter-y); margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-bottom: 0px; padding-left: calc(var(--bs-gutter-x) * .5); border: 0px; font: inherit; vertical-align: baseline; flex-basis: auto; width: 664.861px; max-width: 100%; padding-right: 30px !important;\"><img src=\"http://localhost:8000/assets/imgs/page/about-5.png\" alt=\"\" class=\"mb-md-3 mb-lg-0 mb-sm-4\" style=\"border: 0px; vertical-align: baseline; margin-top: 0px; margin-right: 0px; margin-left: 0px; padding: 0px; font: inherit; max-width: 100%; transition: all 0.3s ease 0s;\"></div><div class=\"col-lg-5\" style=\"margin-top: var(--bs-gutter-y); margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: calc(var(--bs-gutter-x) * .5); padding-bottom: 0px; padding-left: calc(var(--bs-gutter-x) * .5); border: 0px; font: inherit; vertical-align: baseline; flex-basis: auto; width: 474.896px; max-width: 100%;\"><h4 class=\"mb-20 text-muted\" style=\"font-weight: 700; font-size: 24px; margin-right: 0px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-family: Quicksand, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; transition: all 0.3s ease 0s; --bs-text-opacity: 1; margin-bottom: 20px !important; color: rgb(182, 182, 182) !important;\">Our performance</h4><h1 class=\"heading-1 mb-40\" style=\"font-size: 48px; margin-right: 0px; margin-left: 0px; font-weight: 700; color: rgb(37, 61, 78); padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-family: Quicksand, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; margin-bottom: 40px !important;\">Your Partner for e-commerce grocery solution</h1><p class=\"mb-30\" style=\"margin-right: 0px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 1rem; line-height: 24px; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; margin-bottom: 30px !important;\">Ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 1rem; line-height: 24px; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline;\">Pitatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia</p></div></div><div class=\"row\" style=\"margin-top: var(--bs-gutter-y); margin-right: calc(-.5 * var(--bs-gutter-x)); margin-bottom: 0px; margin-left: calc(-.5 * var(--bs-gutter-x)); padding-top: 0px; padding-right: calc(var(--bs-gutter-x) * .5); padding-bottom: 0px; padding-left: calc(var(--bs-gutter-x) * .5); border: 0px; font: inherit; vertical-align: baseline; --bs-gutter-x: 1.5rem; --bs-gutter-y: 0; flex-shrink: 0; width: 1169.75px; max-width: 100%;\"><div class=\"col-lg-4 pr-30 mb-md-5 mb-lg-0 mb-sm-5\" style=\"margin-top: var(--bs-gutter-y); margin-right: 0px; margin-left: 0px; padding-top: 0px; padding-bottom: 0px; padding-left: calc(var(--bs-gutter-x) * .5); border: 0px; font: inherit; vertical-align: baseline; flex-basis: auto; width: 379.919px; max-width: 100%; padding-right: 30px !important;\"><h3 class=\"mb-30\" style=\"font-weight: 700; color: rgb(37, 61, 78); font-size: 32px; margin-right: 0px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-family: Quicksand, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; margin-bottom: 30px !important;\">Who we are</h3><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 1rem; line-height: 24px; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline;\">Volutpat diam ut venenatis tellus in metus. Nec dui nunc mattis enim ut tellus eros donec ac odio orci ultrices in. ellus eros donec ac odio orci ultrices in.</p></div><div class=\"col-lg-4 pr-30 mb-md-5 mb-lg-0 mb-sm-5\" style=\"margin-top: var(--bs-gutter-y); margin-right: 0px; margin-left: 0px; padding-top: 0px; padding-bottom: 0px; padding-left: calc(var(--bs-gutter-x) * .5); border: 0px; font: inherit; vertical-align: baseline; flex-basis: auto; width: 379.919px; max-width: 100%; padding-right: 30px !important;\"><h3 class=\"mb-30\" style=\"text-align: center; font-weight: 700; color: rgb(37, 61, 78); font-size: 32px; margin-right: 0px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-family: Quicksand, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; margin-bottom: 30px !important;\">Our history</h3><p style=\"text-align: center; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 1rem; line-height: 24px; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline;\">Volutpat diam ut venenatis tellus in metus. Nec dui nunc mattis enim ut tellus eros donec ac odio orci ultrices in. ellus eros donec ac odio orci ultrices in.</p></div><div class=\"col-lg-4\" style=\"margin-top: var(--bs-gutter-y); margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: calc(var(--bs-gutter-x) * .5); padding-bottom: 0px; padding-left: calc(var(--bs-gutter-x) * .5); border: 0px; font: inherit; vertical-align: baseline; flex-basis: auto; width: 379.919px; max-width: 100%;\"><h3 class=\"mb-30\" style=\"text-align: right; font-weight: 700; color: rgb(37, 61, 78); font-size: 32px; margin-right: 0px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-family: Quicksand, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; margin-bottom: 30px !important;\">Our mission</h3><p style=\"text-align: right; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 1rem; line-height: 24px; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline;\">Volutpat diam ut venenatis tellus in metus. Nec dui nunc mattis enim ut tellus eros donec ac odio orci ultrices in. ellus eros donec ac odio orci ultrices in.</p></div></div></section></div>', '2024-06-28 17:52:10', '2024-06-28 18:23:01');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `adminID` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `role` enum('author','seller','admin') NOT NULL DEFAULT 'seller',
  `status` enum('public','private') NOT NULL DEFAULT 'private',
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `adminID`, `name`, `email`, `phone`, `role`, `status`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'IDA-000001', 'Mr. Admin', 'admin@yahtajmart.com', '01633714056', 'admin', 'public', '$2y$12$mRE86F4tC.qAnC/JPb2wAuFnVwOVEwTsKvMuK1GkYf7lb6SprwPUy', 'jU7yf64c6TtW5yMa2UyTeLkAT0Eb7t9VhjKod0iU3ATQK1MQ63QoBmh0jTme', '2024-07-01 07:44:49', '2024-07-01 07:44:49'),
(2, 'IDS-000002', 'Mr. Seller', 'seller@gmail.com', '01973529335', 'seller', 'public', '$2y$12$mRE86F4tC.qAnC/JPb2wAuFnVwOVEwTsKvMuK1GkYf7lb6SprwPUy', NULL, '2024-07-01 10:04:04', '2024-07-01 10:04:04');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `public_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `meta_tags` text DEFAULT NULL,
  `meta_desc` text DEFAULT NULL,
  `status` enum('public','private') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `public_id`, `name`, `slug`, `thumb`, `meta_tags`, `meta_desc`, `status`, `created_at`, `updated_at`) VALUES
(1, 'BID-000001', 'my first Banners', 'banners', 'uploads/partials/b_thumb_1802909628052260.png', 'dsvc', 'sdcx', 'public', '2024-06-26 07:48:16', '2024-06-26 08:59:08'),
(2, 'BID-000002', 'Save up to 50% off on your first order', 'banners02', 'uploads/partials/b_thumb_1802909612279198.png', 'Save up to 50% off on your first order', 'Save up to 50% off on your first order', 'public', '2024-06-26 07:49:01', '2024-06-26 08:59:05');

-- --------------------------------------------------------

--
-- Table structure for table `billing_details`
--

CREATE TABLE `billing_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `address` mediumtext NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `additional_info` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `views` int(20) UNSIGNED NOT NULL DEFAULT 0,
  `public_id` varchar(255) NOT NULL,
  `cat_id` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `author_id` varchar(255) DEFAULT NULL,
  `headline` varchar(255) NOT NULL,
  `intro` mediumtext NOT NULL,
  `contents` longtext NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `status` enum('public','private') NOT NULL DEFAULT 'public',
  `meta_tags` varchar(255) DEFAULT NULL,
  `meta_desc` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `views`, `public_id`, `cat_id`, `slug`, `author_id`, `headline`, `intro`, `contents`, `thumb`, `caption`, `status`, `meta_tags`, `meta_desc`, `created_at`, `updated_at`) VALUES
(1, 6, 'BID-00000001', '2', '12', '1', 'Best Photography Blogs of 2024', 'Photography blogs for beginners can instruct on technical basics, inspire with captive imagery, and demonstrate how the craft can be used for both storytelling and information-sharing. Journalistic photography, food photography, travel photography, wedding photography… There’s no shortage of avenues for blogs on photography to take.', '<p style=\"margin-bottom: 1em; font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px;\">The best photography blogs make you want to keep scrolling.</p><p style=\"margin-bottom: 1em; font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px;\">Photography blogs for beginners can instruct on technical basics, inspire with captive imagery, and demonstrate how the craft can be used for both storytelling and information-sharing. Journalistic photography, food photography, travel photography, wedding photography… There’s no shortage of avenues for blogs on photography to take.</p><p style=\"margin-bottom: 1em; font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px;\">While what constitutes the best photography blogs depends greatly on personal preference, we’ve compiled 22 sites that no doubt will make the top of many lists this year.</p><div id=\"1-agora-gallery\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">1. Agora Gallery</h2><p style=\"margin-bottom: 1em;\">If one day you’d like your work shown in a gallery, it’s worth checking out <a href=\"https://www.agora-gallery.com/artgalleryblog/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">Agora Gallery</a>.</p><p style=\"margin-bottom: 1em;\">While the general site covers more than just photography, its page devoted to the art form can inform creatives about what it takes to get <a href=\"https://www.wrapbook.com/blog/best-photo-studios-nyc\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">a studio space</a> or gallery showcase. Never a bad idea to better understand the marketing and promotional side of the craft.</p><p style=\"margin-bottom: 1em;\">Instagram: @agoragallery (57.6K followers)</p></div><div id=\"2-beers-and-beans\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">2. Beers & Beans</h2><p style=\"margin-bottom: 1em;\">Why put up with airline delays and poor currency exchange rates when you can experience the splendor of the world from the comfort of your own home? </p><p style=\"margin-bottom: 1em;\">Travel photographer’s blogs have never been more popular, and <a href=\"http://beersandbeans.com/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">Beers & Beans</a> is an example of how successful this type of blog can be. Not only is the site a popular draw, but also the founders of it have contributed to publications such as <em>National Geographic</em> and <em>USA Today</em>.</p><p style=\"margin-bottom: 1em;\">Instagram: @beersandbeans (3K followers)</p></div><div id=\"3-behind-the-shutter\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">3. Behind the Shutter</h2><p style=\"margin-bottom: 1em;\">Did someone say “free photography education?” As its name implies, <a href=\"https://www.behindtheshutter.com/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">Behind the Shutter</a> aims to help aspiring shutterbugs learn the craft techniques necessary to capture images that awe and inspire. Along with other photography blogs for beginners, this one offers tips and tricks that can help you become a more proficient snapper. </p><p style=\"margin-bottom: 1em;\">Instagram: @btshutter (11.9K followers)</p></div><div id=\"4-chase-jarvis\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">4. Chase Jarvis</h2><p style=\"margin-bottom: 1em;\">Countless photographers try to make a name for themselves with their work online and through social media. Many of them turn to <a href=\"https://www.chasejarvis.com/photos/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">Chase Jarvis</a> as an example of how to actually do it. </p><p style=\"margin-bottom: 1em;\">This acclaimed creative has branched out beyond just posting his work; he also <a href=\"https://www.chasejarvis.com/blog/me-myself-and-i-francois-brunelle-and-his-doppelganger-project-find-your-look-alike/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">interviews others</a> who have triumphed in their respective fields and offers an insider’s look at their successes.</p><p style=\"margin-bottom: 1em;\">Instagram: @chasejarvis (100K followers)</p></div><div id=\"5-colossal\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">5. Colossal</h2><p style=\"margin-bottom: 1em;\"><a href=\"https://www.thisiscolossal.com/category/photography/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">Colossal </a>expands beyond just photography to cover other art forms such as crafting and design. </p><p style=\"margin-bottom: 1em;\">The site covers a host of creative disciplines, but photography purists will have no shortage of stunning imagery through which to browse. Colossal has travel, portrait, nature, and many other genres of photography to study and admire.</p><p style=\"margin-bottom: 1em;\">Instagram: @colossal (522K followers)</p></div><div id=\"6-creative-boom\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">6. Creative Boom</h2><p style=\"margin-bottom: 1em;\"><a href=\"https://www.creativeboom.com/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">Creative Boom</a> is another “little bit of everything” site and one of our best photography blogs you should consider bookmarking. The site also provides interviews, gear recommendations, book reviews, and additional instruction for photographers of all skill levels.</p><p style=\"margin-bottom: 1em;\">Instagram: @creativeboom (93.3K followers)</p></div><div id=\"7-dave-morrow-photography\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">7. Dave Morrow Photography</h2><p style=\"margin-bottom: 1em;\">There may never be another landscape artist like  Ansel Adams, but <a href=\"https://www.davemorrowphotography.com/photography-fundamentals\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">Dave Morrow</a> is working hard to fill the void. </p><p style=\"margin-bottom: 1em;\">Putting together a list of photographer’s blogs? Morrow’s is not to be left off. The beauty of his imagery will enthrall, and his thorough advice may help you one day take shots just as captivating.</p><p style=\"margin-bottom: 1em;\">Instagram: @davemorrowphoto (2.5K followers)</p></div><div id=\"8-david-duchemin\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">8. David duChemin</h2><p style=\"margin-bottom: 1em;\"><a href=\"https://davidduchemin.com/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">David duChemin</a> is a book author, instructor, podcaster, and of course photographer. </p><p style=\"margin-bottom: 1em;\">This self-proclaimed “creative instigator” is certainly that if instigating the passions and dreams of other would-be photographers counts. Head over to his site to both be astounded by his craft and open to learning more about it.</p><p style=\"margin-bottom: 1em;\">Instagram: @davidduchemin (38.6K followers)</p></div><div id=\"9-expertphotography\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">9. ExpertPhotography</h2><p style=\"margin-bottom: 1em;\">If you’re putting together a list of blogs about photography, you can’t pass up a site with a name like <a href=\"https://expertphotography.com/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">ExpertPhotography</a>. As its name implies, this blog provides comprehensive advice to beginning and veteran creatives alike on how to start or improve upon their photography hobby or career. </p><p style=\"margin-bottom: 1em;\">Instagram: @expertphotography (60K followers)</p></div><div id=\"10-expert-vagabond\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">10. Expert Vagabond</h2><p style=\"margin-bottom: 1em;\">Travel photography encompasses far more than simply booking a ticket to a stunning destination, and <a href=\"https://expertvagabond.com/photography/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">Expert Vagabond</a> knows that. </p><p style=\"margin-bottom: 1em;\">This site makes our compilation of best photography blogs becauset it offers practical advice on how to safely, economically, and successfully become a travel photographer.</p><p style=\"margin-bottom: 1em;\">Instagram: @expertvagabond (138K followers)</p></div><div id=\"11-the-fashion-camera\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">11. The Fashion Camera</h2><p style=\"margin-bottom: 1em;\">Love photography <em>and</em> fashion? Then make sure to add <a href=\"https://thefashioncamera.com/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">The Fashion Camera</a> to your list of blogs on photography. </p><p style=\"margin-bottom: 1em;\">Here you can get not only craft tips specific to fashion photography, but also insights into what this particular profession entails. Of course, the site offers stunning fashion-centric pics as well. </p><p style=\"margin-bottom: 1em;\">Instagram: @liselottefleur (12.8K followers)</p></div><div id=\"12-feature-shoot\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">12. Feature Shoot</h2><p style=\"margin-bottom: 1em;\">Worried we haven’t covered any fine art photography blogs? Well, meet <a href=\"https://www.featureshoot.com/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">Feature Shoot</a>. In fact, this site has a dedicated “fine art” page. However, that label applies to nearly any image you can find on this blog on photography. Every featured genre page—portraits, still life, and more—is so exquisite that each clearly demonstrates mastery of the craft. </p><p style=\"margin-bottom: 1em;\">Instagram: @featureshoot (222K followers)</p></div><div id=\"13-fiona-kelly-photography\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">13. Fiona Kelly Photography</h2><p style=\"margin-bottom: 1em;\"><a href=\"https://theblumes.co/pros-cons-becoming-wedding-photographer\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">Wedding photography</a> is big business. <a href=\"https://www.fionakellyphotography.com/blog/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">Fiona Kelly Photography</a>, named for the wedding photographer herself, offers a candid look into what this career can offer. </p><p style=\"margin-bottom: 1em;\">Be sure to add it to your list of photographer’s blogs if you’re also looking for practical shutterbug tips specific to this industry. </p><p style=\"margin-bottom: 1em;\">Instagram: @fionakellyphoto (3.5K followers)</p></div><div id=\"14-ignant\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">14. Ignant</h2><p style=\"margin-bottom: 1em;\">Not so interested in the articles that some of the best photography blogs have to offer? If you’re a purist who just wants to look at beautiful pics, look no further than <a href=\"https://www.ignant.com/category/photography/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">Ignant</a>.</p><p style=\"margin-bottom: 1em;\">Ignant keeps copy to a minimum so you can focus on those eye-grabbing photos.</p><p style=\"margin-bottom: 1em;\">Instagram: @ignant (892K followers)</p></div><div id=\"15-the-phoblographer\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">15. The Phoblographer</h2><p style=\"margin-bottom: 1em;\">With the overwhelming amount of photography equipment out there, it helps to have a trusted site where you can get the lowdown on what to buy and what to avoid. Enter <a href=\"https://www.thephoblographer.com/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">The Phoblographer</a>. Among the many blogs about photography, this one made our list due to its comprehensive overview of all the great gadgets and other tech available. </p><p style=\"margin-bottom: 1em;\">Instagram: @phoblographer (33.3K followers)</p></div><div id=\"16-photofocus\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">16. Photofocus</h2><p style=\"margin-bottom: 1em;\">It’s pretty amazing how many blogs on photography offer insightful, actionable advice on how to start and improve your skill sets, and <a href=\"https://photofocus.com/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">Photofocus</a> is no exception. </p><p style=\"margin-bottom: 1em;\">This site provides a host of articles on all things photography for novice shutterbugs. Here you can find instruction on lighting<a href=\"https://www.wrapbook.com/blog/best-photo-studios-los-angeles\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\"> </a>for apr, getting the proper gear, and of course what to do during it.</p><p style=\"margin-bottom: 1em;\">Instagram: @photofocus (2.5K followers)</p></div><div id=\"17-reading-the-pictures\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">17. Reading the Pictures</h2><p style=\"margin-bottom: 1em;\">As they say, a picture is worth a thousand words. Truthful and poignant photojournalism has never been more important in conveying what is happening in the world.</p><p style=\"margin-bottom: 1em;\"><a href=\"https://www.readingthepictures.org/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">Reading the Pictures</a> made our best photography blogs list exactly because of its focus on responsible photojournalism. A site dedicated to “analysis of news photos and media images,” it provides a look at how to make an impact through accountable camerawork. </p><p style=\"margin-bottom: 1em;\">Instagram: @readingthepictures (13.1K followers)</p></div><div id=\"18-steve-mccurry\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">18. Steve McCurry</h2><p style=\"margin-bottom: 1em;\">Want to see a master portrait photographer at work? For the last several decades, <a href=\"https://www.stevemccurry.com/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">Steve McCurry</a> has made it his professional and personal mission to capture the beauty of the human face from every corner of the globe. </p><p style=\"margin-bottom: 1em;\">His camerawork has been admired for years. However, the image that he is arguably most famous for is the acclaimed Afghan Girl photograph, which made the June 1985 cover of <em>National Geographic</em>.</p><p style=\"margin-bottom: 1em;\">Instagram: @stevemccurryofficial (3.5M followers)</p></div><div id=\"19-tina-picard\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">19. Tina Picard</h2><p style=\"margin-bottom: 1em;\">Some blogs on photography tend to think that more is more. Not so with <a href=\"https://tinapicard.com/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">Tina Picard</a>. This artist’s minimalistic style sets her apart from the pack and her site very much belongs to the very best fine art photography blogs.</p><p style=\"margin-bottom: 1em;\">Instagram: @tinapicardphoto (47.2 followers)</p></div><div id=\"20-two-loves-studio\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">20. Two Loves Studio</h2><p style=\"margin-bottom: 1em;\">You know a photographer’s doing something right when a mere photo of a dish can get your mouth watering. <a href=\"https://twolovesstudio.com/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">Two Loves Studio</a> does it, and looks good doing it.</p><p style=\"margin-bottom: 1em;\">Not only is the author of the site at the top of her food photography game, but also she provides ample tips and tricks for others aspiring to do the same.</p><p style=\"margin-bottom: 1em;\">Instagram: @twolovesstudio (83.5K followers)</p></div><div id=\"21-we-eat-together\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">21. We Eat Together</h2><p style=\"margin-bottom: 1em;\">In good company with Two Loves Studio is <a href=\"https://weeattogether.com/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">We Eat Together</a>, which should definitely be added to your blogs about photography… and food! </p><p style=\"margin-bottom: 1em;\">Here you can learn from artist Skyler Burt on all things food photography. Food styling, food lighting, and all other elements in making your viewer hungry.</p><p style=\"margin-bottom: 1em;\">Instagram: @we.eat.together_ (39K followers)</p></div><div id=\"22-women-photograph\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">22. Women Photograph</h2><p style=\"margin-bottom: 1em;\">Wrapping up our collection of the best photography blogs is <a href=\"https://www.womenphotograph.com/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">Women Photograph</a>—and they certainly do! </p><p style=\"margin-bottom: 1em;\">Several of the photographer’s blogs already mentioned on our list belong to male artists. Their spots are deserved to be sure, but let’s not overlook the incredible work of their female-identifying counterparts. This inclusive site clearly demonstrates their talent and impact in the field. </p><p style=\"margin-bottom: 1em;\">Instagram: @womenphotograph (184K followers)</p></div><div id=\"wrapping-up\" style=\"margin-bottom: 0px; font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">Wrapping up</h2><p style=\"margin-bottom: 1em;\">These blogs on photography are just a starting point for all the many incredible sites out there that can ignite your photography passion or bring your creative pursuit of it to the next level. </p><p style=\"margin-bottom: 1em;\">As you explore different blogs about photography, make sure to check out our articles on everything from<a href=\"https://www.wrapbook.com/blog/how-to-start-a-photography-business\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\"> starting your own photography studio</a> to<a href=\"https://www.wrapbook.com/blog/thriving-in-an-ever-evolving-marketing-landscape-versatile-studios\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\"> handling the inevitable peaks and valleys</a> of this creative endeavor.</p></div>', 'uploads/articles/news_thumb_1802576952958668.jpg', 'none copyright photos', 'public', 'Best Photography,  Blogs of 2024, Photography, Blogs', 'Best Photography Blogs of 2024', '2024-06-22 04:29:48', '2024-06-30 16:32:50');
INSERT INTO `blogs` (`id`, `views`, `public_id`, `cat_id`, `slug`, `author_id`, `headline`, `intro`, `contents`, `thumb`, `caption`, `status`, `meta_tags`, `meta_desc`, `created_at`, `updated_at`) VALUES
(2, 5, 'BID-00000002', '2', '123', '1', 'Best Photography Blogs of 2023', 'Photography blogs for beginners can instruct on technical basics, inspire with captive imagery, and demonstrate how the craft can be used for both storytelling and information-sharing. Journalistic photography, food photography, travel photography, wedding photography… There’s no shortage of avenues for blogs on photography to take.', '<p style=\"margin-bottom: 1em; font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px;\">The best photography blogs make you want to keep scrolling.</p><p style=\"margin-bottom: 1em; font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px;\">Photography blogs for beginners can instruct on technical basics, inspire with captive imagery, and demonstrate how the craft can be used for both storytelling and information-sharing. Journalistic photography, food photography, travel photography, wedding photography… There’s no shortage of avenues for blogs on photography to take.</p><p style=\"margin-bottom: 1em; font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px;\">While what constitutes the best photography blogs depends greatly on personal preference, we’ve compiled 22 sites that no doubt will make the top of many lists this year.</p><div id=\"1-agora-gallery\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">1. Agora Gallery</h2><p style=\"margin-bottom: 1em;\">If one day you’d like your work shown in a gallery, it’s worth checking out <a href=\"https://www.agora-gallery.com/artgalleryblog/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">Agora Gallery</a>.</p><p style=\"margin-bottom: 1em;\">While the general site covers more than just photography, its page devoted to the art form can inform creatives about what it takes to get <a href=\"https://www.wrapbook.com/blog/best-photo-studios-nyc\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">a studio space</a> or gallery showcase. Never a bad idea to better understand the marketing and promotional side of the craft.</p><p style=\"margin-bottom: 1em;\">Instagram: @agoragallery (57.6K followers)</p></div><div id=\"2-beers-and-beans\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">2. Beers & Beans</h2><p style=\"margin-bottom: 1em;\">Why put up with airline delays and poor currency exchange rates when you can experience the splendor of the world from the comfort of your own home? </p><p style=\"margin-bottom: 1em;\">Travel photographer’s blogs have never been more popular, and <a href=\"http://beersandbeans.com/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">Beers & Beans</a> is an example of how successful this type of blog can be. Not only is the site a popular draw, but also the founders of it have contributed to publications such as <em>National Geographic</em> and <em>USA Today</em>.</p><p style=\"margin-bottom: 1em;\">Instagram: @beersandbeans (3K followers)</p></div><div id=\"3-behind-the-shutter\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">3. Behind the Shutter</h2><p style=\"margin-bottom: 1em;\">Did someone say “free photography education?” As its name implies, <a href=\"https://www.behindtheshutter.com/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">Behind the Shutter</a> aims to help aspiring shutterbugs learn the craft techniques necessary to capture images that awe and inspire. Along with other photography blogs for beginners, this one offers tips and tricks that can help you become a more proficient snapper. </p><p style=\"margin-bottom: 1em;\">Instagram: @btshutter (11.9K followers)</p></div><div id=\"4-chase-jarvis\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">4. Chase Jarvis</h2><p style=\"margin-bottom: 1em;\">Countless photographers try to make a name for themselves with their work online and through social media. Many of them turn to <a href=\"https://www.chasejarvis.com/photos/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">Chase Jarvis</a> as an example of how to actually do it. </p><p style=\"margin-bottom: 1em;\">This acclaimed creative has branched out beyond just posting his work; he also <a href=\"https://www.chasejarvis.com/blog/me-myself-and-i-francois-brunelle-and-his-doppelganger-project-find-your-look-alike/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">interviews others</a> who have triumphed in their respective fields and offers an insider’s look at their successes.</p><p style=\"margin-bottom: 1em;\">Instagram: @chasejarvis (100K followers)</p></div><div id=\"5-colossal\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">5. Colossal</h2><p style=\"margin-bottom: 1em;\"><a href=\"https://www.thisiscolossal.com/category/photography/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">Colossal </a>expands beyond just photography to cover other art forms such as crafting and design. </p><p style=\"margin-bottom: 1em;\">The site covers a host of creative disciplines, but photography purists will have no shortage of stunning imagery through which to browse. Colossal has travel, portrait, nature, and many other genres of photography to study and admire.</p><p style=\"margin-bottom: 1em;\">Instagram: @colossal (522K followers)</p></div><div id=\"6-creative-boom\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">6. Creative Boom</h2><p style=\"margin-bottom: 1em;\"><a href=\"https://www.creativeboom.com/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">Creative Boom</a> is another “little bit of everything” site and one of our best photography blogs you should consider bookmarking. The site also provides interviews, gear recommendations, book reviews, and additional instruction for photographers of all skill levels.</p><p style=\"margin-bottom: 1em;\">Instagram: @creativeboom (93.3K followers)</p></div><div id=\"7-dave-morrow-photography\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">7. Dave Morrow Photography</h2><p style=\"margin-bottom: 1em;\">There may never be another landscape artist like  Ansel Adams, but <a href=\"https://www.davemorrowphotography.com/photography-fundamentals\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">Dave Morrow</a> is working hard to fill the void. </p><p style=\"margin-bottom: 1em;\">Putting together a list of photographer’s blogs? Morrow’s is not to be left off. The beauty of his imagery will enthrall, and his thorough advice may help you one day take shots just as captivating.</p><p style=\"margin-bottom: 1em;\">Instagram: @davemorrowphoto (2.5K followers)</p></div><div id=\"8-david-duchemin\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">8. David duChemin</h2><p style=\"margin-bottom: 1em;\"><a href=\"https://davidduchemin.com/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">David duChemin</a> is a book author, instructor, podcaster, and of course photographer. </p><p style=\"margin-bottom: 1em;\">This self-proclaimed “creative instigator” is certainly that if instigating the passions and dreams of other would-be photographers counts. Head over to his site to both be astounded by his craft and open to learning more about it.</p><p style=\"margin-bottom: 1em;\">Instagram: @davidduchemin (38.6K followers)</p></div><div id=\"9-expertphotography\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">9. ExpertPhotography</h2><p style=\"margin-bottom: 1em;\">If you’re putting together a list of blogs about photography, you can’t pass up a site with a name like <a href=\"https://expertphotography.com/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">ExpertPhotography</a>. As its name implies, this blog provides comprehensive advice to beginning and veteran creatives alike on how to start or improve upon their photography hobby or career. </p><p style=\"margin-bottom: 1em;\">Instagram: @expertphotography (60K followers)</p></div><div id=\"10-expert-vagabond\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">10. Expert Vagabond</h2><p style=\"margin-bottom: 1em;\">Travel photography encompasses far more than simply booking a ticket to a stunning destination, and <a href=\"https://expertvagabond.com/photography/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">Expert Vagabond</a> knows that. </p><p style=\"margin-bottom: 1em;\">This site makes our compilation of best photography blogs becauset it offers practical advice on how to safely, economically, and successfully become a travel photographer.</p><p style=\"margin-bottom: 1em;\">Instagram: @expertvagabond (138K followers)</p></div><div id=\"11-the-fashion-camera\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">11. The Fashion Camera</h2><p style=\"margin-bottom: 1em;\">Love photography <em>and</em> fashion? Then make sure to add <a href=\"https://thefashioncamera.com/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">The Fashion Camera</a> to your list of blogs on photography. </p><p style=\"margin-bottom: 1em;\">Here you can get not only craft tips specific to fashion photography, but also insights into what this particular profession entails. Of course, the site offers stunning fashion-centric pics as well. </p><p style=\"margin-bottom: 1em;\">Instagram: @liselottefleur (12.8K followers)</p></div><div id=\"12-feature-shoot\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">12. Feature Shoot</h2><p style=\"margin-bottom: 1em;\">Worried we haven’t covered any fine art photography blogs? Well, meet <a href=\"https://www.featureshoot.com/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">Feature Shoot</a>. In fact, this site has a dedicated “fine art” page. However, that label applies to nearly any image you can find on this blog on photography. Every featured genre page—portraits, still life, and more—is so exquisite that each clearly demonstrates mastery of the craft. </p><p style=\"margin-bottom: 1em;\">Instagram: @featureshoot (222K followers)</p></div><div id=\"13-fiona-kelly-photography\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">13. Fiona Kelly Photography</h2><p style=\"margin-bottom: 1em;\"><a href=\"https://theblumes.co/pros-cons-becoming-wedding-photographer\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">Wedding photography</a> is big business. <a href=\"https://www.fionakellyphotography.com/blog/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">Fiona Kelly Photography</a>, named for the wedding photographer herself, offers a candid look into what this career can offer. </p><p style=\"margin-bottom: 1em;\">Be sure to add it to your list of photographer’s blogs if you’re also looking for practical shutterbug tips specific to this industry. </p><p style=\"margin-bottom: 1em;\">Instagram: @fionakellyphoto (3.5K followers)</p></div><div id=\"14-ignant\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">14. Ignant</h2><p style=\"margin-bottom: 1em;\">Not so interested in the articles that some of the best photography blogs have to offer? If you’re a purist who just wants to look at beautiful pics, look no further than <a href=\"https://www.ignant.com/category/photography/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">Ignant</a>.</p><p style=\"margin-bottom: 1em;\">Ignant keeps copy to a minimum so you can focus on those eye-grabbing photos.</p><p style=\"margin-bottom: 1em;\">Instagram: @ignant (892K followers)</p></div><div id=\"15-the-phoblographer\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">15. The Phoblographer</h2><p style=\"margin-bottom: 1em;\">With the overwhelming amount of photography equipment out there, it helps to have a trusted site where you can get the lowdown on what to buy and what to avoid. Enter <a href=\"https://www.thephoblographer.com/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">The Phoblographer</a>. Among the many blogs about photography, this one made our list due to its comprehensive overview of all the great gadgets and other tech available. </p><p style=\"margin-bottom: 1em;\">Instagram: @phoblographer (33.3K followers)</p></div><div id=\"16-photofocus\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">16. Photofocus</h2><p style=\"margin-bottom: 1em;\">It’s pretty amazing how many blogs on photography offer insightful, actionable advice on how to start and improve your skill sets, and <a href=\"https://photofocus.com/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">Photofocus</a> is no exception. </p><p style=\"margin-bottom: 1em;\">This site provides a host of articles on all things photography for novice shutterbugs. Here you can find instruction on lighting<a href=\"https://www.wrapbook.com/blog/best-photo-studios-los-angeles\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\"> </a>for apr, getting the proper gear, and of course what to do during it.</p><p style=\"margin-bottom: 1em;\">Instagram: @photofocus (2.5K followers)</p></div><div id=\"17-reading-the-pictures\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">17. Reading the Pictures</h2><p style=\"margin-bottom: 1em;\">As they say, a picture is worth a thousand words. Truthful and poignant photojournalism has never been more important in conveying what is happening in the world.</p><p style=\"margin-bottom: 1em;\"><a href=\"https://www.readingthepictures.org/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">Reading the Pictures</a> made our best photography blogs list exactly because of its focus on responsible photojournalism. A site dedicated to “analysis of news photos and media images,” it provides a look at how to make an impact through accountable camerawork. </p><p style=\"margin-bottom: 1em;\">Instagram: @readingthepictures (13.1K followers)</p></div><div id=\"18-steve-mccurry\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">18. Steve McCurry</h2><p style=\"margin-bottom: 1em;\">Want to see a master portrait photographer at work? For the last several decades, <a href=\"https://www.stevemccurry.com/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">Steve McCurry</a> has made it his professional and personal mission to capture the beauty of the human face from every corner of the globe. </p><p style=\"margin-bottom: 1em;\">His camerawork has been admired for years. However, the image that he is arguably most famous for is the acclaimed Afghan Girl photograph, which made the June 1985 cover of <em>National Geographic</em>.</p><p style=\"margin-bottom: 1em;\">Instagram: @stevemccurryofficial (3.5M followers)</p></div><div id=\"19-tina-picard\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">19. Tina Picard</h2><p style=\"margin-bottom: 1em;\">Some blogs on photography tend to think that more is more. Not so with <a href=\"https://tinapicard.com/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">Tina Picard</a>. This artist’s minimalistic style sets her apart from the pack and her site very much belongs to the very best fine art photography blogs.</p><p style=\"margin-bottom: 1em;\">Instagram: @tinapicardphoto (47.2 followers)</p></div><div id=\"20-two-loves-studio\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">20. Two Loves Studio</h2><p style=\"margin-bottom: 1em;\">You know a photographer’s doing something right when a mere photo of a dish can get your mouth watering. <a href=\"https://twolovesstudio.com/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">Two Loves Studio</a> does it, and looks good doing it.</p><p style=\"margin-bottom: 1em;\">Not only is the author of the site at the top of her food photography game, but also she provides ample tips and tricks for others aspiring to do the same.</p><p style=\"margin-bottom: 1em;\">Instagram: @twolovesstudio (83.5K followers)</p></div><div id=\"21-we-eat-together\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">21. We Eat Together</h2><p style=\"margin-bottom: 1em;\">In good company with Two Loves Studio is <a href=\"https://weeattogether.com/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">We Eat Together</a>, which should definitely be added to your blogs about photography… and food! </p><p style=\"margin-bottom: 1em;\">Here you can learn from artist Skyler Burt on all things food photography. Food styling, food lighting, and all other elements in making your viewer hungry.</p><p style=\"margin-bottom: 1em;\">Instagram: @we.eat.together_ (39K followers)</p></div><div id=\"22-women-photograph\" style=\"font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">22. Women Photograph</h2><p style=\"margin-bottom: 1em;\">Wrapping up our collection of the best photography blogs is <a href=\"https://www.womenphotograph.com/\" target=\"_blank\" title=\"Opens in a new tab\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\">Women Photograph</a>—and they certainly do! </p><p style=\"margin-bottom: 1em;\">Several of the photographer’s blogs already mentioned on our list belong to male artists. Their spots are deserved to be sure, but let’s not overlook the incredible work of their female-identifying counterparts. This inclusive site clearly demonstrates their talent and impact in the field. </p><p style=\"margin-bottom: 1em;\">Instagram: @womenphotograph (184K followers)</p></div><div id=\"wrapping-up\" style=\"margin-bottom: 0px; font-family: \"Untitled Sans\", sans-serif; font-size: 17.6px; letter-spacing: -0.176px; scroll-margin-top: 88px;\"><h2 style=\"margin-bottom: 0.33em; margin-top: 0.75em; font-size: 3.75rem; line-height: 1; letter-spacing: -0.02em; font-family: \"Untitled Serif\", sans-serif;\">Wrapping up</h2><p style=\"margin-bottom: 1em;\">These blogs on photography are just a starting point for all the many incredible sites out there that can ignite your photography passion or bring your creative pursuit of it to the next level. </p><p style=\"margin-bottom: 1em;\">As you explore different blogs about photography, make sure to check out our articles on everything from<a href=\"https://www.wrapbook.com/blog/how-to-start-a-photography-business\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\"> starting your own photography studio</a> to<a href=\"https://www.wrapbook.com/blog/thriving-in-an-ever-evolving-marketing-landscape-versatile-studios\" style=\"color: var(--violet); text-decoration-line: underline; text-underline-position: under; text-underline-offset: 0.05em;\"> handling the inevitable peaks and valleys</a> of this creative endeavor.</p></div>', 'uploads/articles/news_thumb_1802578371624079.jpg', 'none copyright photos', 'public', 'Best Photography Blogs of 2024', 'Best Photography Blogs of 2024', '2024-06-22 04:37:48', '2024-06-28 16:33:32');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `meta_tags` text DEFAULT NULL,
  `meta_desc` text DEFAULT NULL,
  `status` enum('public','private') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_id`, `name`, `slug`, `thumb`, `meta_tags`, `meta_desc`, `status`, `created_at`, `updated_at`) VALUES
(1, 'BrID-00001', 'Infinix', 'infinix', 'uploads/partials/br_thumb_1803004317241554.png', 'infinix', 'infinix', 'public', '2024-06-27 08:59:29', '2024-06-27 09:01:49');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('admin@gmail.com|127.0.0.1', 'i:1;', 1720524414),
('admin@gmail.com|127.0.0.1:timer', 'i:1720524414;', 1720524414),
('customer@gmail.com|127.0.0.1', 'i:1;', 1720252190),
('customer@gmail.com|127.0.0.1:timer', 'i:1720252190;', 1720252190);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customerID` int(11) NOT NULL DEFAULT 0,
  `productID` int(11) NOT NULL DEFAULT 0,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `public_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `meta_tags` text DEFAULT NULL,
  `meta_desc` text DEFAULT NULL,
  `status` enum('public','private') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `public_id`, `name`, `slug`, `thumb`, `meta_tags`, `meta_desc`, `status`, `created_at`, `updated_at`) VALUES
(2, 'CID-000001', 'Out Door Photography', 'out-door-photography', 'uploads/partials/cat_thumb_1802484202939508.png', 'Out Door Photography, OutDoor, Photography, Photographer', 'Out Door Photography', 'public', '2024-06-21 00:37:37', '2024-06-21 09:16:56'),
(3, 'CID-000002', 'Aerial Drone Photography', 'aerial-drone-photography', 'uploads/partials/cat_thumb_1802483910178631.png', 'Meta Tags SEO keyword', 'Meta Tags SEO keyword', 'public', '2024-06-21 00:38:52', '2024-06-21 09:10:11'),
(4, 'CID-000003', 'Commercial Videography', 'commercial-videography', 'uploads/partials/cat_thumb_1802485254509583.png', 'Commercial, Videography,  Commercial Videography', 'Commercial Videography', 'public', '2024-06-21 09:25:06', '2024-06-21 09:31:32'),
(6, 'CID-000004', 'Avye White', 'sst illum eveniet', 'uploads/partials/cat_thumb_1803305421253676.jpg', 'Officia lorem dolore', 'Id consectetur ut vo', 'public', '2024-06-25 17:32:36', '2024-06-30 16:47:44');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'dfcv', '2024-06-28 17:51:38', '2024-06-28 17:51:38');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `status` enum('public','private') NOT NULL DEFAULT 'public',
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `user_id`, `status`, `password`, `avatar`, `dob`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mr. Customer', 'customer@yahtajmart.com', 'ID-C-00001', 'public', '$2y$12$mRE86F4tC.qAnC/JPb2wAuFnVwOVEwTsKvMuK1GkYf7lb6SprwPUy', 'uploads/users/avatar_1802402909120524.jpg', NULL, NULL, '2024-06-30 07:28:49', '2024-06-30 07:28:49');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_charges`
--

CREATE TABLE `delivery_charges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL DEFAULT '0',
  `status` enum('public','private') NOT NULL DEFAULT 'public',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delivery_charges`
--

INSERT INTO `delivery_charges` (`id`, `title`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Free Delivery', '0', 'public', '2024-07-08 09:52:04', '2024-07-08 09:52:04'),
(2, 'In side Chattogram', '70', 'public', '2024-07-08 09:52:04', '2024-07-08 09:52:04'),
(3, 'Out side chattogram', '150', 'public', '2024-07-08 09:52:33', '2024-07-08 09:52:33');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `div_id` varchar(255) NOT NULL,
  `status` enum('public','private') NOT NULL DEFAULT 'public',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `slug`, `div_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mirshorai', 'mirshorai', '1', 'public', '2024-07-02 09:59:41', '2024-07-02 09:59:41'),
(2, 'Cox\'s Bazar', 'coxs-bazar', '1', 'public', '2024-07-02 10:11:55', '2024-07-02 10:55:38');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` enum('public','private') NOT NULL DEFAULT 'public',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Chattogram', 'chattogram', 'public', '2024-07-02 09:51:59', '2024-07-02 11:48:20'),
(2, 'Noakhali', 'noakhali', 'public', '2024-07-02 09:53:00', '2024-07-02 09:53:00'),
(3, 'Feni', 'feni', 'public', '2024-07-02 09:53:15', '2024-07-02 19:50:59'),
(5, 'Dhaka', 'dhaka', 'public', '2024-07-03 06:16:04', '2024-07-03 06:16:04');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `feedback_id` varchar(255) NOT NULL,
  `client_id` varchar(255) NOT NULL,
  `author_id` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` enum('public','private') NOT NULL DEFAULT 'private',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `feedback_id`, `client_id`, `author_id`, `thumb`, `name`, `designation`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'FB-0000001', 'MJT-000002', '1', 'uploads/testimonials/testimonial_1802586615685734.jpg', 'Md Masuder Rahman', 'Web Developer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet', 'public', '2024-06-22 11:08:02', '2024-06-22 18:24:55'),
(2, 'FB-0000002', 'MJT-000001', '1', 'uploads/testimonials/testimonial_1802584523220342.jpg', 'Md Jhontu', 'Web Designer', 'Some Outstanding Samples Of Our Recent Work, Some Outstanding Samples Of Our Recent Work', 'public', '2024-06-22 17:49:24', '2024-06-22 17:49:24');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_06_12_072805_create_socials_table', 2),
(5, '2024_06_12_172659_create_settings_table', 3),
(6, '2024_06_12_173438_create_contacts_table', 3),
(8, '2024_06_20_180340_create_categories_table', 5),
(9, '2024_06_21_154728_create_blogs_table', 6),
(10, '2024_06_22_162050_create_feedback_table', 7),
(11, '2024_06_23_010437_create_videos_table', 8),
(12, '2024_06_23_222346_create_photos_table', 9),
(13, '2024_06_26_125106_create_banners_table', 10),
(14, '2024_06_26_160554_create_products_table', 11),
(15, '2024_06_27_144209_create_brands_table', 12),
(16, '2024_06_28_103848_create_support_centers_table', 13),
(17, '2024_06_28_234225_create_contacts_table', 14),
(18, '2024_06_28_234241_create_abouts_table', 14),
(19, '2024_06_30_132128_create_customers_table', 15),
(20, '2024_06_30_200000_create_orders_table', 16),
(21, '2024_06_30_200048_create_order_items_table', 16),
(23, '2024_06_30_215854_create_carts_table', 16),
(24, '2024_06_30_200813_create_admins_table', 17),
(26, '2024_06_20_093639_create_user_details_table', 18),
(27, '2024_07_02_144122_create_divisions_table', 19),
(28, '2024_07_02_144135_create_districts_table', 19),
(29, '2024_07_02_144145_create_thanas_table', 19),
(31, '2024_07_03_191613_create_delivery_fees_table', 20),
(32, '2024_07_03_192945_create_peyment_methods_table', 21),
(33, '2024_07_05_221718_create_shopping_carts_table', 21),
(36, '2024_07_03_150546_create_billing_details_table', 22),
(37, '2024_07_08_152729_create_deliver_charges_table', 23),
(38, '2024_07_08_152729_create_delivery_charges_table', 24);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customerID` int(11) NOT NULL,
  `bill` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customerID` int(11) NOT NULL DEFAULT 0,
  `orderID` int(11) NOT NULL DEFAULT 0,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `offer_price` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peyment_methods`
--

CREATE TABLE `peyment_methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `public_id` varchar(255) NOT NULL,
  `author_id` varchar(255) NOT NULL,
  `cat_id` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `intro` mediumtext NOT NULL,
  `file_size` varchar(255) NOT NULL,
  `r_price` varchar(255) NOT NULL,
  `s_price` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `status` enum('public','private') NOT NULL DEFAULT 'public',
  `meta_tags` mediumtext DEFAULT NULL,
  `meta_desc` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `public_id`, `author_id`, `cat_id`, `title`, `intro`, `file_size`, `r_price`, `s_price`, `thumb`, `images`, `status`, `meta_tags`, `meta_desc`, `created_at`, `updated_at`) VALUES
(1, 'PID-000001', '1', '3', 'Best Photography Blogs of 2024', '<p><span style=\"font-size: 14px;\">Best Photography Blogs of 2024&nbsp;Best Photography Blogs, of 2024&nbsp;Best Photography Blogs of 2024,&nbsp;</span><br></p>', '50 MB', '40', '30', 'uploads/gallary/thumb_1802678943561895.jpg', 'uploads/gallary/img_1802678943850387.jpg', 'public', 'Best Photography Blogs of 2024', 'Best Photography Blogs of 2024', '2024-06-23 18:50:11', '2024-06-23 18:50:11'),
(2, 'PID-000002', '1', '4', 'Best Photography Blogs of 2024', '<p><span style=\"font-size: 14px;\">Best Photography Blogs of 2024&nbsp;Best Photography Blogs of 2024 ,&nbsp;Best Photography Blogs of 2024&nbsp;Best Photography Blogs of 2024</span><br></p>', '50 MB', '643', '507', 'uploads/gallary/thumb_1802679709500333.jpg', 'uploads/gallary/img_1802679712863128.jpg', 'public', 'Best Photography Blogs of 2024', 'Best Photography Blogs of 2024', '2024-06-23 19:02:24', '2024-06-23 19:02:24'),
(3, 'PID-000003', '1', '4', 'Best Photography Blogs of 2024', '<p><span style=\"font-size: 14px;\">Best Photography Blogs of 2024Best Photography Blogs of 2024,&nbsp;Best Photography Blogs of 2024</span><br></p>', '50 MB', '762', '507', 'uploads/gallary/thumb_1802679877552851.jpg', 'uploads/gallary/img_1802679877934052.jpg', 'public', 'Best Photography Blogs of 2024', 'Best Photography Blogs of 2024', '2024-06-23 19:05:00', '2024-06-23 19:05:00'),
(4, 'PID-000004', '1', '3', 'Head : Best Photography Blogs of 2024', '<p><span style=\"font-size: 14px;\">Head : Best Photography Blogs of 2024 Author: Md Minhaj Jhontu</span><br></p>', '50', '500', '400', 'uploads/gallary/thumb_1802765682198339.jpg', 'uploads/gallary/img_1802765685136781.jpg', 'public', 'Head : Best Photography Blogs of 2024 Author: Md Minhaj Jhontu', 'Head : Best Photography Blogs of 2024 Author: Md Minhaj Jhontu', '2024-06-24 17:48:53', '2024-06-24 17:48:53');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `author_id` varchar(255) NOT NULL,
  `brand_id` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `thumbs` varchar(255) DEFAULT NULL,
  `width_or_size` varchar(255) NOT NULL,
  `total_stock` varchar(255) NOT NULL,
  `sort_desc` mediumtext NOT NULL,
  `description` text DEFAULT NULL,
  `aditional_info` text DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `regular_price` varchar(255) NOT NULL,
  `offer_price` varchar(255) NOT NULL DEFAULT '0',
  `total_discount` varchar(255) NOT NULL DEFAULT '0',
  `cat_id` varchar(255) DEFAULT NULL,
  `status` enum('public','private') NOT NULL DEFAULT 'public',
  `s_tags` varchar(255) DEFAULT NULL,
  `meta_tags` mediumtext DEFAULT NULL,
  `meta_desc` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_id`, `author_id`, `brand_id`, `title`, `thumb`, `thumbs`, `width_or_size`, `total_stock`, `sort_desc`, `description`, `aditional_info`, `slug`, `regular_price`, `offer_price`, `total_discount`, `cat_id`, `status`, `s_tags`, `meta_tags`, `meta_desc`, `created_at`, `updated_at`) VALUES
(2, 'PID-000002', '1', '1', 'facilis', 'uploads/products/p_thumb_1803008889052817.png', 'https://via.placeholder.com/400x400.png/002255?text=in', 'M', '9', 'Corporis impedit numquam et placeat dolore accusantium quae. Eligendi itaque quis expedita. Corporis voluptate ad harum et. Ipsam quis voluptatem quas et perspiciatis molestiae rerum.', 'Inventore et rerum voluptatem omnis ducimus enim. Quasi fuga voluptatem et tempore vel in quam. Labore voluptas est est. Molestiae omnis delectus nobis iure dolores asperiores. Quo quia et aut et.', 'Aut ipsum quis esse est consequatur. Consequatur ut odio maxime quis vero quasi aliquam. Atque vel maxime placeat voluptas dolor eos rerum. Aspernatur aut illum maiores ut maiores consectetur eum.', 'hic-voluptas-consequatur-enim-iure-exercitationem', '150', '467', '154', '3', 'public', 'Et dolor quisquam est omnis dicta. Saepe error dicta voluptate. Consequatur rerum repellendus totam fugiat.', 'Deserunt harum fugit natus ipsa. Est in maxime fuga cumque quibusdam. Quo excepturi dolor exercitationem dolores voluptas dignissimos quos.', 'Numquam tenetur occaecati voluptas perspiciatis ex nesciunt facere. Eos accusamus molestias qui quo. Voluptatem architecto totam et quaerat non. Aliquam sequi sit quia hic.', '2024-06-26 17:36:44', '2024-06-27 10:16:33'),
(3, 'PID-000003', '1', 'None Brand', 'saepe', 'uploads/products/p_thumb_1803002973379058.png', 'https://via.placeholder.com/400x400.png/009933?text=veniam', 'M', '5', 'Et omnis officia et recusandae quisquam. Laboriosam placeat est doloremque earum dicta repellendus deleniti at. Tempore corporis commodi ut enim possimus numquam soluta sunt.', 'Commodi tenetur numquam ipsam commodi amet recusandae quae. Vel vel vero cum. Beatae aut earum et aspernatur et illo laborum. Accusantium rem eos sed natus et.', 'Placeat qui omnis sit sit. Quaerat corrupti accusamus et eum nemo enim. Aut commodi dolorum praesentium dicta hic dicta.', 'rem-totam-laudantium-consequatur-est', '327', '562', '738', '2', 'public', 'Harum modi nihil amet quia sequi. Quaerat quia at porro. Voluptates non et architecto voluptatem. Est voluptate necessitatibus voluptas.', 'Fuga perferendis vel soluta ex sapiente delectus. In in possimus debitis explicabo voluptatem. Excepturi architecto tempora minus omnis. Atque ut quo omnis atque laudantium sint.', 'Vel cupiditate officia magnam qui neque architecto est. Optio et similique explicabo. Possimus perspiciatis doloribus ut animi dolores rerum quia.', '2024-06-26 17:36:44', '2024-06-27 10:44:12'),
(4, 'PID-000004', '1', 'None Brand', 'dignissimos', 'uploads/products/p_thumb_1803002992137339.png', 'https://via.placeholder.com/400x400.png/004488?text=quisquam', 'L', '8', 'Ut voluptas ut iste recusandae sit corporis sed. Nihil delectus vitae reiciendis nisi.', 'Itaque et facilis reiciendis similique at. Praesentium porro qui quibusdam sit ab velit temporibus. Dolor esse sunt rem quis.', 'Fugit mollitia et molestiae mollitia assumenda autem quia consequatur. Iste expedita aut aut deserunt corrupti. Et quos nobis deserunt iure quam.', 'doloribus-est-sed-ad', '716', '856', '550', '4', 'public', 'Eveniet et voluptas fuga necessitatibus repellat rerum aut. Voluptates nisi nulla ullam tempore aspernatur. Dolor et maxime et quasi fuga quisquam veniam.', 'Sapiente totam quidem dolorem molestiae molestiae. Aut qui sed voluptatem quam ut delectus atque. Iusto suscipit natus accusamus.', 'Fuga sed velit necessitatibus autem est sed. Et eos dolorem quis voluptas. Sit eligendi in aperiam odit occaecati accusantium.', '2024-06-26 17:36:44', '2024-06-27 10:44:17'),
(5, 'PID-000005', '1', 'None Brand', 'tempore', 'uploads/products/p_thumb_1803003008799102.png', 'https://via.placeholder.com/400x400.png/005500?text=architecto', '15', '7', 'Dolore inventore iste nam ea laboriosam doloribus quos voluptates. Qui similique nobis commodi autem corrupti. Natus aspernatur nemo voluptas facilis. Et velit ea nulla aut sequi dolore.', 'Voluptatem dolores sed modi quo eveniet animi est. Molestias mollitia qui recusandae molestiae velit qui. Dolor possimus nisi veritatis et quod qui.', 'Et quaerat beatae facere assumenda doloribus optio. Laboriosam id in labore amet harum corporis consequatur. Et voluptas veritatis impedit optio porro. Vel eligendi dicta minus illum.', 'cumque-minus-culpa-magnam-mollitia-consequatur-voluptas-quis', '289', '487', '133', '6', 'public', 'Vitae et earum tenetur vel sunt neque et. Quibusdam est incidunt libero fugit. Neque cupiditate cupiditate autem dolor repellat velit ducimus.', 'Alias dicta culpa laboriosam quos. Rerum error inventore non impedit est labore. Molestias neque illo similique saepe est ex eligendi voluptatem. Facilis consectetur hic quasi dolorem.', 'Dolore ut dolore repellat in accusamus quo ad. Rerum voluptas deleniti quibusdam in. Quas perferendis qui et.', '2024-06-26 17:36:44', '2024-06-27 08:41:01'),
(6, 'PID-000006', '2', '1', 'Seeds of Change Organic Quinoa', 'uploads/products/p_thumb_1803009166576570.jpg', 'https://via.placeholder.com/400x400.png/007722?text=totam', '10', '5', 'Praesentium voluptatem iure dolorum maiores aperiam. Quas optio qui optio itaque sunt.', 'Sint et quos dolores et a aliquam nisi. Sunt maxime in quam placeat. Facere tenetur a ipsum aspernatur. Sed et dolor totam.', 'Inventore eaque voluptate et dolor provident id. Qui porro eaque aliquam possimus ad omnis delectus nam. Aut aliquid perspiciatis asperiores ab et. Consequatur est aliquam placeat sunt omnis ex non.', 'seeds-of-change-organic-quinoa1719483732-seeds-of-change-organic-quinoa', '583', '126', '441', '3', 'public', 'Corporis sit delectus eveniet. Voluptas vitae quasi nesciunt iusto est voluptatibus. Deserunt voluptatem ut eveniet qui placeat minus.', 'Ut eligendi itaque debitis. Voluptate nobis quo est aliquam libero. Id aliquam laborum facilis. Praesentium qui optio perspiciatis at eveniet.', 'Ipsam non qui ad amet. Cumque maxime quo sint consequuntur. Eligendi vel et modi quas facilis.', '2024-06-26 17:36:44', '2024-06-27 10:44:08'),
(7, 'PID-000007', '2', 'None Brand', 'accusamus', 'https://via.placeholder.com/400x400.png/001155?text=quod', 'https://via.placeholder.com/400x400.png/005599?text=voluptas', 'L', '5', 'Sit rerum enim atque. Optio accusamus non ipsum facilis commodi. Veniam sed molestias aut ea. Mollitia reprehenderit recusandae consequuntur qui ut maxime quia et.', 'Sit omnis placeat doloribus facilis consequatur corporis et reprehenderit. Tempore quia voluptas dolores magni assumenda aut. Vitae eos natus at quia nesciunt quasi voluptas.', 'Ea qui id quis. Iste repellendus doloremque error ratione sed odio. Magnam harum deleniti tempora et nobis ea molestiae ea. Veniam unde quae ut alias debitis molestiae quidem.', 'aut-soluta-omnis-reiciendis', '644', '489', '724', '2', 'public', 'Sunt nostrum at quidem sit quo aut. Dolore eos error ut ipsam. Aut in unde aut dolores eos deleniti. Voluptate dolorem eos sint rerum officiis voluptatem voluptatem.', 'Qui deleniti dolor cum molestias id tenetur. Aliquid et repellat et et. Veniam temporibus tempora quia tenetur.', 'Corrupti aut dolores animi modi id non veritatis omnis. Aut vel mollitia vitae dolores. In qui qui eveniet rerum explicabo rem.', '2024-06-26 17:36:44', '2024-06-26 17:36:44'),
(8, 'PID-000008', '2', 'None Brand', 'omnis', 'https://via.placeholder.com/400x400.png/00aa44?text=vitae', 'https://via.placeholder.com/400x400.png/000055?text=autem', '15', '3', 'Dolore cumque aut earum quis. Dolorem deserunt voluptas mollitia impedit qui. Quia facilis nihil consequatur ab error pariatur sed. Cum in officia et.', 'Vero ut reiciendis autem quis. Mollitia quia voluptate animi eum. Iusto voluptates rerum est delectus harum.', 'In deleniti neque dolore iusto beatae. Enim rerum natus tenetur voluptas ipsum alias. Eligendi sequi rerum sed quia. Voluptatem inventore vel corrupti dolorem quasi.', 'aut-minima-dolor-temporibus-eius-magnam-harum-ab', '356', '626', '649', '3', 'private', 'Minima sequi vel ut atque. Dolorem quibusdam sapiente fugiat dolores voluptatem ea. A dolores mollitia omnis.', 'Id fugit voluptate dolor aliquam magni sunt et. Est dolor asperiores exercitationem aut. Ullam est sequi cupiditate. Cupiditate praesentium et sed enim.', 'Autem sunt aut ab et culpa beatae quos et. Quo corrupti alias natus natus eveniet. Architecto adipisci sed vel. Necessitatibus et eos consequatur harum.', '2024-06-26 17:36:44', '2024-06-26 17:36:44'),
(9, 'PID-000009', '2', 'None Brand', 'magni', 'https://via.placeholder.com/400x400.png/00aadd?text=ducimus', 'https://via.placeholder.com/400x400.png/0099dd?text=perspiciatis', 'L', '10', 'Quos quaerat consequatur temporibus magnam libero harum. Velit et labore vel aut explicabo voluptas. Est eius doloremque repellat ex.', 'Et a qui dolor culpa doloribus. Nulla voluptatem dolorum aut nesciunt dolor placeat. Dolorum accusantium voluptatum officiis provident error. Placeat sit officiis enim facilis accusantium vel.', 'Culpa consequatur porro molestias qui voluptatem sequi fugiat qui. Aspernatur earum harum ratione est veniam. Et est quo animi. Consequatur id dolor voluptatem doloribus tempore quas.', 'atque-autem-ea-quis-omnis', '233', '540', '518', '2', 'public', 'Sed iste quam similique doloremque dolores. Aut necessitatibus ut asperiores aspernatur. Quae alias maxime enim. Veniam iste alias laboriosam fugit.', 'Quis quae non distinctio reprehenderit. Aliquam rem facilis et iste non doloribus. Enim sapiente et numquam voluptatem laborum.', 'Et aperiam quae impedit qui sit quis. Qui fugit recusandae facilis omnis ut. Ab sit ut velit natus.', '2024-06-26 17:36:44', '2024-06-26 17:36:44'),
(10, 'PID-000010', '1', 'None Brand', 'dicta', 'https://via.placeholder.com/400x400.png/00ccdd?text=quo', 'https://via.placeholder.com/400x400.png/0066ee?text=enim', 'M', '5', 'Iusto quam cumque doloribus blanditiis et incidunt. Excepturi ratione et dicta nulla ea nostrum. Officiis possimus iure dolore et voluptates qui.', 'Autem quis atque repellat rerum dolore sit alias atque. Quis omnis sint aliquam et natus et. Impedit maxime a suscipit dolore.', 'Consequatur qui sed ut est et quia debitis eum. Quam quisquam sint eum dolore. Officiis voluptatem quas mollitia quaerat minus aut facilis.', 'facilis-aut-rem-magnam-et', '880', '209', '308', '3', 'private', 'Nobis quia occaecati quae non. Et quod autem officiis autem. Voluptas rerum quos eveniet dolor fugit ut.', 'Autem sapiente est quis minima magni reprehenderit autem. Esse cumque harum dolorem. Et ratione velit autem iusto similique non.', 'Ad ea sint dolor deleniti molestiae saepe. Expedita nobis distinctio voluptatum ex. Architecto et animi sequi nihil eum at.', '2024-06-26 17:36:44', '2024-06-26 17:36:44'),
(11, 'PID-000011', '2', 'None Brand', 'hic', 'https://via.placeholder.com/400x400.png/007733?text=est', 'https://via.placeholder.com/400x400.png/0033dd?text=recusandae', 'M', '9', 'Magni culpa accusamus voluptates unde. Cupiditate vel in itaque. Ipsam non natus fuga eius necessitatibus illo ullam.', 'Iusto exercitationem ipsum qui est et minus voluptatem. Dignissimos aliquam dolor itaque possimus. Et velit facere vel voluptas tenetur odio architecto.', 'Id incidunt sit maiores et magni laudantium. Totam autem necessitatibus totam eos. Ducimus eius eum aut saepe commodi. Qui cumque magnam eius rem sequi.', 'aut-voluptatem-quidem-dolor', '889', '362', '227', '3', 'public', 'Officia voluptas dolorum non nostrum cupiditate consequatur. Molestias est sint ut mollitia nostrum veritatis eos eveniet. Molestiae ipsa tempora natus fuga quidem nobis quam nesciunt.', 'Et exercitationem sed quae possimus dolorem non voluptates. Dolor accusamus magni impedit culpa temporibus quos qui. Neque ipsa aliquam est ducimus et amet quam.', 'Dolores omnis et eligendi voluptatem. Aut vitae sint sit minima aliquam accusamus laboriosam.', '2024-06-26 17:36:44', '2024-06-26 17:36:44'),
(12, 'PID-000012', '2', 'None Brand', 'adipisci', 'https://via.placeholder.com/400x400.png/00dd99?text=ipsum', 'https://via.placeholder.com/400x400.png/00ee88?text=asperiores', '10', '5', 'Ex omnis doloremque similique mollitia. Aspernatur sed velit consequuntur aut. Aliquid temporibus illo facilis a magni veniam. Laudantium qui eligendi ut rerum repellendus quo qui.', 'Vel ut esse quasi nobis. Eaque quis quia aperiam autem sint et dolor aut. Fuga rerum odio iure molestiae delectus nisi nihil quaerat.', 'Nesciunt est omnis et nostrum repudiandae. Suscipit voluptatem non suscipit. Totam harum a molestias itaque perferendis. Perspiciatis beatae sed nobis at.', 'numquam-voluptatem-et-ut-laborum-est-ipsa-aut', '262', '971', '783', '2', 'public', 'Soluta autem et illum mollitia autem cumque id. Odio neque modi nulla quidem ipsa adipisci. Voluptatum est sit quia ea. Accusamus explicabo ipsa ut sed.', 'Et earum eius repellat voluptatem. Eos et harum aliquid architecto necessitatibus. Fugiat culpa qui modi pariatur omnis molestiae quia. Eius quis harum illo fugiat unde voluptatibus.', 'Iste qui natus aut expedita veritatis. Omnis ut id ut doloribus quo.', '2024-06-26 17:36:44', '2024-06-27 07:23:46'),
(13, 'PID-000013', '1', 'None Brand', 'eveniet', 'https://via.placeholder.com/400x400.png/0055cc?text=est', 'https://via.placeholder.com/400x400.png/000044?text=hic', '10', '9', 'Magnam iure officiis non quos expedita. Natus deserunt ea qui repudiandae. Similique accusantium ut ratione quo modi aut in. Quaerat distinctio vitae rerum ipsam ducimus.', 'Autem sunt ipsam molestiae est. In commodi cumque hic blanditiis rem distinctio. Cupiditate placeat blanditiis numquam accusantium vitae. Laborum labore delectus et aspernatur sunt.', 'Tempora voluptatem totam provident ut repellat. Quia voluptatem in perspiciatis eum ducimus qui. Asperiores deleniti fuga accusantium. Atque impedit exercitationem ea neque.', 'labore-quam-laborum-voluptas-animi-doloremque-non', '908', '229', '264', '6', 'public', 'Sapiente sunt dolor velit rerum officiis rerum id. Amet dolorum ducimus iste omnis soluta. Suscipit distinctio explicabo voluptates autem qui. Iusto tenetur consequatur omnis et autem qui enim.', 'Quia quos sit at voluptatibus molestias nostrum dolores. Nobis eius eveniet quo aliquam deleniti dolore eum. Et tempore sapiente officia recusandae.', 'Expedita quo eum repudiandae id deleniti. Ut magnam at pariatur. Vel quia voluptate nulla quod voluptatem similique consequatur. Eos nihil porro enim sapiente reprehenderit qui magnam.', '2024-06-26 17:36:44', '2024-06-27 07:23:54'),
(14, 'PID-000014', '1', 'None Brand', 'quia', 'https://via.placeholder.com/400x400.png/00aa66?text=autem', 'https://via.placeholder.com/400x400.png/0099bb?text=quasi', '15', '5', 'Quia et dolorem laudantium dolorum. Tempora nesciunt odio harum dolorum et illo. Repellendus magnam ut voluptate ut.', 'Molestiae numquam corrupti hic maxime voluptatem qui. Sint consectetur qui aut. Et ut modi animi.', 'Error neque iste qui atque autem eos quia. Sunt minima ut aut vel et quisquam. Maxime sapiente recusandae corporis officiis fuga voluptatem ducimus provident. Fugiat error qui deserunt et.', 'excepturi-nemo-consequatur-omnis-illo', '435', '208', '935', '6', 'private', 'Perferendis voluptatem explicabo id voluptas consequatur voluptates consequatur. Illum modi omnis a debitis. Nesciunt debitis maiores culpa unde. Sunt voluptates omnis dolor magni ut dolorem.', 'Maxime aut nihil sint fuga quia. Laboriosam mollitia facilis similique repudiandae ut. Repellendus hic repellat vitae iste corrupti. Numquam aut dolorem est qui.', 'Sint et numquam voluptas eaque qui repudiandae. Itaque eum culpa eos nihil. Esse occaecati est placeat.', '2024-06-26 17:36:44', '2024-06-26 17:36:44'),
(15, 'PID-000015', '1', 'None Brand', 'ducimus', 'https://via.placeholder.com/400x400.png/00cc55?text=ducimus', 'https://via.placeholder.com/400x400.png/006644?text=quisquam', 'M', '6', 'Alias pariatur ipsa et amet sit reprehenderit velit. Omnis aut iste quidem et. Voluptatem sit eos est vel magni itaque deserunt. Quae atque ut et adipisci blanditiis qui magnam.', 'Labore vitae qui est ad et. Ut voluptas quaerat sit architecto tenetur qui. Provident reprehenderit commodi nisi quas atque.', 'Blanditiis dolores sed dicta non architecto dolores. Quisquam explicabo sequi est atque ipsa et. Suscipit dolorem natus tenetur. Beatae nam facere nobis iusto earum. Vel cupiditate impedit est.', 'ipsum-maiores-molestiae-dolore-et', '852', '570', '378', '6', 'private', 'Voluptate quas qui voluptas enim est in pariatur. Aut debitis deserunt perspiciatis ipsam velit.', 'Sed quaerat et expedita quis. Rerum quia ut enim nihil. Et magnam est ea accusamus eos saepe. Assumenda quasi velit eius nostrum repudiandae et.', 'Atque quisquam eius recusandae culpa omnis. Corrupti quia odio ut rem debitis nihil et et. Aut a aperiam quae soluta aliquid commodi minima. Maxime quae in non rerum ut molestiae.', '2024-06-26 17:36:44', '2024-06-26 17:36:44'),
(16, 'PID-000016', '2', 'None Brand', 'vel', 'https://via.placeholder.com/400x400.png/00dd88?text=libero', 'https://via.placeholder.com/400x400.png/00ccdd?text=consequatur', '15', '3', 'Molestias animi saepe iure ut non dolorem. Doloremque vitae omnis eum vero voluptas hic sed. Reprehenderit velit et ut velit blanditiis dolores. Ipsam hic incidunt voluptate enim quibusdam quia quam.', 'Voluptatem et adipisci magnam enim qui blanditiis. Reiciendis quibusdam cupiditate voluptatem modi iusto alias recusandae. Est voluptatem eum ea reiciendis sed.', 'Sapiente ducimus velit aut occaecati magnam excepturi deleniti dolores. Ipsa sit cum quo laborum alias exercitationem. Est facilis voluptatem odio perspiciatis repudiandae.', 'et-aut-quidem-illo-delectus-rerum', '488', '934', '772', '6', 'private', 'Sequi autem porro facilis officia sunt tenetur dolor. Id et autem aut. Adipisci magnam eum ut quibusdam delectus.', 'Ducimus et sit quisquam fugiat non ea. Cumque sint saepe molestiae iure. Aut est quia est quae laborum officiis eveniet. Doloremque quaerat praesentium reprehenderit architecto.', 'Saepe iure laborum dolorem. Odit quos quia corrupti nihil. Vel saepe dolore maiores sit. Dolorum sapiente ipsam mollitia fugit molestias. Dolore repellat doloremque vel maiores.', '2024-06-26 17:36:44', '2024-06-26 17:36:44'),
(17, 'PID-000017', '2', 'None Brand', 'quia', 'https://via.placeholder.com/400x400.png/002233?text=dolorum', 'https://via.placeholder.com/400x400.png/005566?text=aspernatur', 'L', '7', 'Quasi qui excepturi culpa illo. Accusantium voluptatum ut aspernatur minus sed.', 'Harum corporis qui eos exercitationem voluptatem. Illum impedit quia molestiae aut repellendus optio enim. Reiciendis omnis ipsam saepe.', 'Omnis error aliquid quisquam molestiae sunt fugiat. Commodi quos quas tempore id eaque pariatur rerum. Et culpa sed velit blanditiis et quidem neque.', 'quia-blanditiis-ratione-sed-quia-perspiciatis', '411', '580', '192', '4', 'private', 'Voluptas facere assumenda quas dolor reprehenderit. Quia et magni veritatis nulla. Sequi explicabo nemo occaecati quasi distinctio hic. Iste est voluptatem voluptate.', 'Praesentium qui alias molestias vel. Vitae impedit dicta fuga facere reprehenderit tempore. Et asperiores veniam fuga rerum. Consequatur repudiandae quidem aut sint dolorem quae est.', 'Alias doloremque aliquam quis voluptas sit rerum. Nam enim rerum consequatur quos necessitatibus quis amet. Aut quasi corporis et rerum at qui quis.', '2024-06-26 17:36:44', '2024-06-26 17:36:44'),
(18, 'PID-000018', '2', 'None Brand', 'qui', 'https://via.placeholder.com/400x400.png/002222?text=dignissimos', 'https://via.placeholder.com/400x400.png/001133?text=omnis', '15', '10', 'Possimus est quae blanditiis optio. Aut amet quia expedita omnis est laborum velit. Et ut laudantium libero voluptas soluta. Adipisci eum animi aspernatur exercitationem.', 'Molestiae blanditiis non provident repellat. Nam deleniti quasi ullam beatae omnis. Rerum pariatur dolorem nostrum excepturi impedit autem sunt. Nihil quidem sunt doloribus consequatur.', 'Odio id fuga repudiandae porro. Quae et unde ut quis sit rerum voluptas provident. Assumenda commodi inventore dolores autem quod. Velit ratione amet et sequi aut facilis.', 'est-nostrum-assumenda-saepe-doloremque', '540', '293', '807', '4', 'public', 'Quia dolor error modi voluptas repudiandae quidem. Earum magni amet officiis et dolor corrupti optio. Et porro non vitae temporibus. Quia et voluptatum fuga veniam delectus.', 'In voluptatibus sed placeat enim. Corrupti corrupti corporis rerum cupiditate placeat vitae natus. Enim consequatur odit aspernatur tempore voluptas id laudantium.', 'Deserunt veritatis rem nihil autem et laudantium. Maiores et et saepe est aut maiores.', '2024-06-26 17:36:44', '2024-06-26 17:36:44'),
(19, 'PID-000019', '2', 'None Brand', 'sit', 'https://via.placeholder.com/400x400.png/0044cc?text=assumenda', 'https://via.placeholder.com/400x400.png/00bbcc?text=omnis', 'L', '3', 'Provident voluptatum dolorem omnis exercitationem. Exercitationem ullam repudiandae quam reprehenderit et in et. Ex voluptas odit in numquam.', 'Ducimus modi unde et consequatur consequatur vitae doloribus. Unde sint eveniet eos sit. Aut ipsam dolorem itaque et voluptas.', 'Et quas sed vero excepturi expedita. Autem atque voluptas eius sit. Est dicta et totam quia. Voluptatem laudantium quo quis porro modi.', 'saepe-debitis-voluptates-inventore-fuga', '381', '761', '373', '', 'private', 'Nisi vel autem aperiam mollitia error expedita. Voluptates ea recusandae et. Voluptates exercitationem aut officia modi.', 'Enim distinctio harum rerum non minima mollitia. Mollitia natus ipsam fuga. Reiciendis at dolor provident quis quia aperiam est eos.', 'Nisi consequatur aut animi commodi cupiditate sit exercitationem. Corporis quis voluptates accusamus omnis laborum dolor aperiam. Reprehenderit vero ea necessitatibus quis.', '2024-06-26 17:36:44', '2024-06-26 17:36:44'),
(23, 'PID-000020', '1', '1', 'Seeds of Change Organic , Brown', 'uploads/products/p_thumb_1803010386973811.jpg', NULL, '50g, 60g, 80g, 100g, 150g', '150', '<p><span style=\"color: rgb(126, 126, 126); font-family: Lato, sans-serif; font-size: 17px;\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam rem officia, corrupti reiciendis minima nisi modi, quasi, odio minus dolore impedit fuga eum eligendi.</span><br></p>', '<p style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; font-size: 1rem; line-height: 24px; font-family: Lato, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; color: rgb(126, 126, 126);\">Uninhibited carnally hired played in whimpered dear gorilla koala depending and much yikes off far quetzal goodness and from for grimaced goodness unaccountably and meadowlark near unblushingly crucial scallop tightly neurotic hungrily some and dear furiously this apart.</p><p style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; font-size: 1rem; line-height: 24px; font-family: Lato, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; color: rgb(126, 126, 126);\">Spluttered narrowly yikes left moth in yikes bowed this that grizzly much hello on spoon-fed that alas rethought much decently richly and wow against the frequent fluidly at formidable acceptably flapped besides and much circa far over the bucolically hey precarious goldfinch mastodon goodness gnashed a jellyfish and one however because.</p><ul class=\"product-more-infor mt-30\" style=\"padding: 0px 0px 0px 14px; margin-bottom: 0px; margin-right: 0px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: Lato, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; list-style: none; color: rgb(126, 126, 126); margin-top: 30px !important;\"><li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; display: flex; position: relative;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; transition: all 0.3s ease 0s; flex: 0 0 165px; display: inline-block;\">Type Of Packing</span>Bottle</li><li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; display: flex; position: relative;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; transition: all 0.3s ease 0s; flex: 0 0 165px; display: inline-block;\">Color</span>Green, Pink, Powder Blue, Purple</li><li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; display: flex; position: relative;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; transition: all 0.3s ease 0s; flex: 0 0 165px; display: inline-block;\">Quantity Per Case</span>100ml</li><li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; display: flex; position: relative;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; transition: all 0.3s ease 0s; flex: 0 0 165px; display: inline-block;\">Ethyl Alcohol</span>70%</li><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; display: flex; position: relative;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; transition: all 0.3s ease 0s; flex: 0 0 165px; display: inline-block;\">Piece In One</span>Carton</li></ul><hr class=\"wp-block-separator is-style-dots\" style=\"margin-right: 0px; margin-left: 0px; color: rgb(126, 126, 126); border-top: var(--bs-border-width) solid; opacity: 0.25; font-family: Lato, sans-serif;\"><p style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; font-size: 1rem; line-height: 24px; font-family: Lato, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; color: rgb(126, 126, 126);\">Laconic overheard dear woodchuck wow this outrageously taut beaver hey hello far meadowlark imitatively egregiously hugged that yikes minimally unanimous pouted flirtatiously as beaver beheld above forward energetic across this jeepers beneficently cockily less a the raucously that magic upheld far so the this where crud then below after jeez enchanting drunkenly more much wow callously irrespective limpet.</p><h4 class=\"mt-30\" style=\"margin-bottom: 0px; font-weight: 700; color: rgb(37, 61, 78); font-size: 24px; margin-right: 0px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; font-family: Quicksand, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; transition: all 0.3s ease 0s; margin-top: 30px !important;\">Packaging & Delivery</h4><hr class=\"wp-block-separator is-style-wide\" style=\"margin-right: 0px; margin-left: 0px; color: rgb(126, 126, 126); border-top: var(--bs-border-width) solid; opacity: 0.25; font-family: Lato, sans-serif;\"><p style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; font-size: 1rem; line-height: 24px; font-family: Lato, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; color: rgb(126, 126, 126);\">Less lion goodness that euphemistically robin expeditiously bluebird smugly scratched far while thus cackled sheepishly rigid after due one assenting regarding censorious while occasional or this more crane went more as this less much amid overhung anathematic because much held one exuberantly sheep goodness so where rat wry well concomitantly.</p><p style=\"margin-right: 0px; margin-bottom: 5px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; font-size: 1rem; line-height: 24px; font-family: Lato, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; color: rgb(126, 126, 126);\">Scallop or far crud plain remarkably far by thus far iguana lewd precociously and and less rattlesnake contrary caustic wow this near alas and next and pled the yikes articulate about as less cackled dalmatian in much less well jeering for the thanks blindly sentimental whimpered less across objectively fanciful grimaced wildly some wow and rose jeepers outgrew lugubrious luridly irrationally attractively dachshund.</p><h4 class=\"mt-30\" style=\"margin-bottom: 0px; font-weight: 700; color: rgb(37, 61, 78); font-size: 24px; margin-right: 0px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; font-family: Quicksand, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; transition: all 0.3s ease 0s; margin-top: 30px !important;\">Suggested Use</h4><ul class=\"product-more-infor mt-30\" style=\"padding: 0px 0px 0px 14px; margin-bottom: 0px; margin-right: 0px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: Lato, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; list-style: none; color: rgb(126, 126, 126); margin-top: 30px !important;\"><li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; display: flex; position: relative;\">Refrigeration not necessary.</li><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; display: flex; position: relative;\">Stir before serving</li></ul><h4 class=\"mt-30\" style=\"margin-bottom: 0px; font-weight: 700; color: rgb(37, 61, 78); font-size: 24px; margin-right: 0px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; font-family: Quicksand, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; transition: all 0.3s ease 0s; margin-top: 30px !important;\">Other Ingredients</h4><ul class=\"product-more-infor mt-30\" style=\"padding: 0px 0px 0px 14px; margin-bottom: 0px; margin-right: 0px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: Lato, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; list-style: none; color: rgb(126, 126, 126); margin-top: 30px !important;\"><li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; display: flex; position: relative;\">Organic raw pecans, organic raw cashews.</li><li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; display: flex; position: relative;\">This butter was produced using a LTG (Low Temperature Grinding) process</li><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; display: flex; position: relative;\">Made in machinery that processes tree nuts but does not process peanuts, gluten, dairy or soy</li></ul><h4 class=\"mt-30\" style=\"margin-bottom: 0px; font-weight: 700; color: rgb(37, 61, 78); font-size: 24px; margin-right: 0px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; font-family: Quicksand, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; transition: all 0.3s ease 0s; margin-top: 30px !important;\">Warnings</h4><ul class=\"product-more-infor mt-30\" style=\"padding: 0px 0px 0px 14px; margin-bottom: 0px; margin-right: 0px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-family: Lato, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; list-style: none; color: rgb(126, 126, 126); margin-top: 30px !important;\"><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; display: flex; position: relative;\">Oil separation occurs naturally. May contain pieces of shell.</li></ul>', '<table class=\"font-md\" style=\"caption-side: bottom; margin: 0px 0px 1.5rem; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Lato, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: middle; border-spacing: 0px; width: 833.6px; color: rgb(126, 126, 126);\"><tbody style=\"border: 0px; margin: 0px; padding: 0px; font: inherit; vertical-align: baseline;\"><tr class=\"stand-up\" style=\"border: 0px; margin: 0px; padding: 0px; font: inherit; vertical-align: baseline;\"><th style=\"text-align: -webkit-match-parent; border: 1px solid rgb(236, 236, 236); margin: 0px; padding: 10px 20px; font: inherit; vertical-align: middle;\">Stand Up</th><td style=\"border: 1px solid rgb(236, 236, 236); margin: 0px; padding: 10px 20px; font: inherit; vertical-align: middle;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 1rem; line-height: 24px; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline;\">35″L x 24″W x 37-45″H(front to back wheel)</p></td></tr><tr class=\"folded-wo-wheels\" style=\"border: 0px; margin: 0px; padding: 0px; font: inherit; vertical-align: baseline;\"><th style=\"text-align: -webkit-match-parent; border: 1px solid rgb(236, 236, 236); margin: 0px; padding: 10px 20px; font: inherit; vertical-align: middle;\">Folded (w/o wheels)</th><td style=\"border: 1px solid rgb(236, 236, 236); margin: 0px; padding: 10px 20px; font: inherit; vertical-align: middle;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 1rem; line-height: 24px; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline;\">32.5″L x 18.5″W x 16.5″H</p></td></tr><tr class=\"folded-w-wheels\" style=\"border: 0px; margin: 0px; padding: 0px; font: inherit; vertical-align: baseline;\"><th style=\"text-align: -webkit-match-parent; border: 1px solid rgb(236, 236, 236); margin: 0px; padding: 10px 20px; font: inherit; vertical-align: middle;\">Folded (w/ wheels)</th><td style=\"border: 1px solid rgb(236, 236, 236); margin: 0px; padding: 10px 20px; font: inherit; vertical-align: middle;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 1rem; line-height: 24px; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline;\">32.5″L x 24″W x 18.5″H</p></td></tr><tr class=\"door-pass-through\" style=\"border: 0px; margin: 0px; padding: 0px; font: inherit; vertical-align: baseline;\"><th style=\"text-align: -webkit-match-parent; border: 1px solid rgb(236, 236, 236); margin: 0px; padding: 10px 20px; font: inherit; vertical-align: middle;\">Door Pass Through</th><td style=\"border: 1px solid rgb(236, 236, 236); margin: 0px; padding: 10px 20px; font: inherit; vertical-align: middle;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 1rem; line-height: 24px; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline;\">24</p></td></tr><tr class=\"frame\" style=\"border: 0px; margin: 0px; padding: 0px; font: inherit; vertical-align: baseline;\"><th style=\"text-align: -webkit-match-parent; border: 1px solid rgb(236, 236, 236); margin: 0px; padding: 10px 20px; font: inherit; vertical-align: middle;\">Frame</th><td style=\"border: 1px solid rgb(236, 236, 236); margin: 0px; padding: 10px 20px; font: inherit; vertical-align: middle;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 1rem; line-height: 24px; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline;\">Aluminum</p></td></tr><tr class=\"weight-wo-wheels\" style=\"border: 0px; margin: 0px; padding: 0px; font: inherit; vertical-align: baseline;\"><th style=\"text-align: -webkit-match-parent; border: 1px solid rgb(236, 236, 236); margin: 0px; padding: 10px 20px; font: inherit; vertical-align: middle;\">Weight (w/o wheels)</th><td style=\"border: 1px solid rgb(236, 236, 236); margin: 0px; padding: 10px 20px; font: inherit; vertical-align: middle;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 1rem; line-height: 24px; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline;\">20 LBS</p></td></tr><tr class=\"weight-capacity\" style=\"border: 0px; margin: 0px; padding: 0px; font: inherit; vertical-align: baseline;\"><th style=\"text-align: -webkit-match-parent; border: 1px solid rgb(236, 236, 236); margin: 0px; padding: 10px 20px; font: inherit; vertical-align: middle;\">Weight Capacity</th><td style=\"border: 1px solid rgb(236, 236, 236); margin: 0px; padding: 10px 20px; font: inherit; vertical-align: middle;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 1rem; line-height: 24px; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline;\">60 LBS</p></td></tr><tr class=\"width\" style=\"border: 0px; margin: 0px; padding: 0px; font: inherit; vertical-align: baseline;\"><th style=\"text-align: -webkit-match-parent; border: 1px solid rgb(236, 236, 236); margin: 0px; padding: 10px 20px; font: inherit; vertical-align: middle;\">Width</th><td style=\"border: 1px solid rgb(236, 236, 236); margin: 0px; padding: 10px 20px; font: inherit; vertical-align: middle;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 1rem; line-height: 24px; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline;\">24″</p></td></tr><tr class=\"handle-height-ground-to-handle\" style=\"border: 0px; margin: 0px; padding: 0px; font: inherit; vertical-align: baseline;\"><th style=\"text-align: -webkit-match-parent; border: 1px solid rgb(236, 236, 236); margin: 0px; padding: 10px 20px; font: inherit; vertical-align: middle;\">Handle height (ground to handle)</th><td style=\"border: 1px solid rgb(236, 236, 236); margin: 0px; padding: 10px 20px; font: inherit; vertical-align: middle;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 1rem; line-height: 24px; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline;\">37-45″</p></td></tr><tr class=\"wheels\" style=\"border: 0px; margin: 0px; padding: 0px; font: inherit; vertical-align: baseline;\"><th style=\"text-align: -webkit-match-parent; border: 1px solid rgb(236, 236, 236); margin: 0px; padding: 10px 20px; font: inherit; vertical-align: middle;\">Wheels</th><td style=\"border: 1px solid rgb(236, 236, 236); margin: 0px; padding: 10px 20px; font: inherit; vertical-align: middle;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 1rem; line-height: 24px; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline;\">12″ air / wide track slick tread</p></td></tr><tr class=\"seat-back-height\" style=\"border: 0px; margin: 0px; padding: 0px; font: inherit; vertical-align: baseline;\"><th style=\"text-align: -webkit-match-parent; border: 1px solid rgb(236, 236, 236); margin: 0px; padding: 10px 20px; font: inherit; vertical-align: middle;\">Seat back height</th><td style=\"border: 1px solid rgb(236, 236, 236); margin: 0px; padding: 10px 20px; font: inherit; vertical-align: middle;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 1rem; line-height: 24px; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline;\">21.5″</p></td></tr><tr class=\"head-room-inside-canopy\" style=\"border: 0px; margin: 0px; padding: 0px; font: inherit; vertical-align: baseline;\"><th style=\"text-align: -webkit-match-parent; border: 1px solid rgb(236, 236, 236); margin: 0px; padding: 10px 20px; font: inherit; vertical-align: middle;\">Head room (inside canopy)</th><td style=\"border: 1px solid rgb(236, 236, 236); margin: 0px; padding: 10px 20px; font: inherit; vertical-align: middle;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 1rem; line-height: 24px; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline;\">25″</p></td></tr><tr class=\"pa_color\" style=\"border: 0px; margin: 0px; padding: 0px; font: inherit; vertical-align: baseline;\"><th style=\"text-align: -webkit-match-parent; border: 1px solid rgb(236, 236, 236); margin: 0px; padding: 10px 20px; font: inherit; vertical-align: middle;\">Color</th><td style=\"border: 1px solid rgb(236, 236, 236); margin: 0px; padding: 10px 20px; font: inherit; vertical-align: middle;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 1rem; line-height: 24px; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline;\">Black, Blue, Red, White</p></td></tr><tr class=\"pa_size\" style=\"border: 0px; margin: 0px; padding: 0px; font: inherit; vertical-align: baseline;\"><th style=\"text-align: -webkit-match-parent; border: 1px solid rgb(236, 236, 236); margin: 0px; padding: 10px 20px; font: inherit; vertical-align: middle;\">Size</th><td style=\"border: 1px solid rgb(236, 236, 236); margin: 0px; padding: 10px 20px; font: inherit; vertical-align: middle;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 1rem; line-height: 24px; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline;\">M, S</p></td></tr></tbody></table>', 'seeds-of-change-organic-brown', '120', '100', '020', '3', 'public', 'Tags: Snack, Organic, Brown', 'Seeds of Change Organic Quinoa, Brown', 'Seeds of Change Organic Quinoa, Brown', '2024-06-27 09:49:39', '2024-06-27 10:41:17');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('9oMz2BaCjwOfX4x4rK3uFvfmbQ9hpC29jrzXUnYF', 16, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoic2ZCajgzNlZFcU0yUkpCMTFSY1hpNlZ0QXltSE5iRnA0WUlFUmFWTiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDg6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9jdXN0b21lci9zaGlwcGluZy9jaGVja291dCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE2O30=', 1720460207),
('eMZio8S3q1q8n2eDCVwAFRI1aUVEm5l64eTIPGxi', 16, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaUZXektCS1JTMklSQ0RoeGhlYnduN3pqV0JPSzFPS2NzMTJ6akdvViI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDg6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9jdXN0b21lci9zaGlwcGluZy9jaGVja291dCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE2O30=', 1720433502),
('RkTGxuCVENqv7gYH6Qr0SCeyiGYieL9XVdQxVf6A', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 Edg/126.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM05YTDQ4SjJtRkdTUG1WSERPcDcxQU85eGg1NThDSnB4T1pSa3pYUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9jdXN0b21lci9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1720524355);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `web_name` varchar(255) DEFAULT NULL,
  `web_tagline` varchar(255) DEFAULT NULL,
  `web_link` varchar(255) DEFAULT NULL,
  `web_logo` varchar(255) DEFAULT NULL,
  `web_fevicon` varchar(255) DEFAULT NULL,
  `web_timezone` varchar(255) DEFAULT NULL,
  `web_metatags` mediumtext DEFAULT NULL,
  `web_metadesc` text DEFAULT NULL,
  `web_authors` varchar(255) DEFAULT NULL,
  `author_mail` varchar(255) DEFAULT NULL,
  `author_phone` varchar(255) DEFAULT NULL,
  `author_address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `web_name`, `web_tagline`, `web_link`, `web_logo`, `web_fevicon`, `web_timezone`, `web_metatags`, `web_metadesc`, `web_authors`, `author_mail`, `author_phone`, `author_address`, `created_at`, `updated_at`) VALUES
(1, 'YAHTAJ MART', 'Ecommerce  Platform Of Bangladesh', 'https://yahtajmart.com/', 'uploads/settings/logo_1803575408933060.png', 'uploads/settings/fevicon_1803575309745628.png', 'Asia/Dhaka', 'yahtaj, yahtaj mart, online mart, ecommerce', 'Find the best ecommerce of bagladesh', 'Md. Faishal', 'admin@yahtajmart.com', '01974-529335', 'Khulshi-4225, Chattogram, Bangladesh.', '2024-06-13 14:10:21', '2024-07-03 16:19:05');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_carts`
--

CREATE TABLE `shopping_carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shopping_carts`
--

INSERT INTO `shopping_carts` (`id`, `quantity`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 16, '2024-07-05 16:33:18', '2024-07-05 16:33:18'),
(3, 1, 9, 16, '2024-07-05 16:39:06', '2024-07-05 16:39:06'),
(4, 1, 12, 16, '2024-07-05 16:40:21', '2024-07-05 16:40:21'),
(5, 1, 3, 15, '2024-07-07 18:55:58', '2024-07-07 18:55:58'),
(6, 1, 4, 15, '2024-07-07 18:56:08', '2024-07-07 18:56:08');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `name`, `icon`, `link`, `created_at`, `updated_at`) VALUES
(8, 'facebook', 'fa fa-facebook-square', 'https://www.facebook.com/yahtajmart', '2024-07-04 17:21:35', '2024-07-04 17:21:35'),
(9, 'twitter', 'fa fa-twitter-square', 'https://www.twitter.com/yahtajmart', '2024-07-04 17:22:31', '2024-07-04 17:22:31'),
(10, 'instagram', 'fa fa-instagram', 'https://www.instagram.com/yahtajmart', '2024-07-04 17:23:48', '2024-07-04 17:23:48'),
(11, 'pinterest', 'fa fa-pinterest', 'https://www.pinterest.com/yahtajmart', '2024-07-04 17:26:25', '2024-07-04 17:26:25'),
(12, 'youtube', 'fa fa-youtube', 'https://www.youtube.com/yahtajmart', '2024-07-04 17:26:57', '2024-07-04 17:26:57'),
(13, 'google', 'fa fa-google', 'https://www.facebook.com/yahtajmart', '2024-07-04 17:37:12', '2024-07-04 17:37:12');

-- --------------------------------------------------------

--
-- Table structure for table `support_centers`
--

CREATE TABLE `support_centers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `m_number` varchar(255) NOT NULL,
  `s_number` varchar(255) DEFAULT NULL,
  `m_email` varchar(255) NOT NULL,
  `s_email` varchar(255) DEFAULT NULL,
  `m_address` varchar(255) NOT NULL,
  `s_address` varchar(255) DEFAULT NULL,
  `google_maps` text DEFAULT NULL,
  `contacts_info` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `support_centers`
--

INSERT INTO `support_centers` (`id`, `m_number`, `s_number`, `m_email`, `s_email`, `m_address`, `s_address`, `google_maps`, `contacts_info`, `created_at`, `updated_at`) VALUES
(1, '+8801633-714056', '+8801839867362', 'admin@yahtajmart.com', 'sales@yahtajmart.com', 'Chattogram, Bangladesh.', '+8801633-714056', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', '2024-06-28 05:12:36', '2024-06-28 05:24:01');

-- --------------------------------------------------------

--
-- Table structure for table `thanas`
--

CREATE TABLE `thanas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `div_id` varchar(255) NOT NULL,
  `dist_id` varchar(255) NOT NULL,
  `status` enum('public','private') NOT NULL DEFAULT 'public',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thanas`
--

INSERT INTO `thanas` (`id`, `name`, `slug`, `div_id`, `dist_id`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Sandwip', 'sandwip', '1', '1', 'public', '2024-07-02 10:51:37', '2024-07-02 10:51:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(20) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `address` mediumtext DEFAULT NULL,
  `status` enum('public','private') NOT NULL DEFAULT 'public',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `name`, `number`, `email`, `address`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'IDS-000001', 'Mr. Seller', '+8801974529335', 'user@yahtajmart.com', NULL, 'public', NULL, '$2y$12$mRE86F4tC.qAnC/JPb2wAuFnVwOVEwTsKvMuK1GkYf7lb6SprwPUy', 'sSCP9ZP1pZZ3E0X5BqMDKqp6Larqn1kugGPfTr3IrPvP1ye6KKbjGdrSt87Q', '2024-06-29 13:33:29', '2024-06-29 13:33:29'),
(11, 'IDC-000002', 'Md. Masuder Rahman', '01866332812', 'customer@gmail.com', NULL, 'private', NULL, '$2y$12$0HSsju2XNvlWP9atdIeBE.gc86PNQcOUPRWsf5dseOlBXKr3Sa0eK', NULL, '2024-07-01 13:54:19', '2024-07-01 13:54:19'),
(12, 'IDC-000002', 'Md. Masuder Rahman', '01866332811', 'admin@gmail.com', NULL, 'public', NULL, '$2y$12$OQJuWVeKCKZXKElXNPz1Luk3Vk.8wZdnmi8a76P1/CgEU2Y.Zh/zG', NULL, '2024-07-01 13:57:38', '2024-07-01 13:57:38'),
(13, 'IDC-000002', 'Md. Rahman', '01866332809', 'user@gmail.com', NULL, 'public', NULL, '$2y$12$sg6HY2RKhQIosEgt//Udeuk8x3YQkyjaWENeyZ6Ke5IFM/Mk/ZV92', 'mYtAywJsqXiGRuUL7BiWc7m9xJt2kfI67yjmHhHar2idpJbzUYvz0KQS42hC', '2024-07-01 16:30:23', '2024-07-01 16:30:23'),
(14, 'IDC-000002', 'Md. Masud', '01866101010', 'custo@gmail.com', NULL, 'public', NULL, '$2y$12$0Hp6n.UwGbQXh9myiRG6uevo7WDatgHbg.EYNetz5UwpWp1OeF3di', NULL, '2024-07-01 16:34:35', '2024-07-01 16:34:35'),
(15, 'IDC-000002', 'Md. Masuder Rahman', '+8801633714056', 'rahmansandwipe@gmail.com', NULL, 'public', NULL, '$2y$12$YXHkJ.qvmDkCLTyjYjawMOeumRmo3AQXGyde./4KQfRanRbsvPWci', NULL, '2024-07-04 16:39:13', '2024-07-04 16:39:13'),
(16, 'IDC-000002', 'Md. Masuder Rahman', '01633714210', 'rahman@gmail.com', 'Sanmar RL Parkview (Lift B-11), Road No-#01, South Khulshi, Chattogram.', 'public', NULL, '$2y$12$usddyLkxqcXzoX2ad.14leUzfjOGmpSMK2lzYtmyAWVIhhdKVc9i.', 'mFTCQa4k80I10iIZwsDxW8oCeBuWqjfccTaz945c0kPcD2raZOpmqwXkJCcU', '2024-07-05 15:22:23', '2024-07-05 15:22:23');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `public_id` varchar(255) NOT NULL,
  `public_name` varchar(255) DEFAULT NULL,
  `public_number` varchar(255) DEFAULT NULL,
  `public_mail` varchar(255) DEFAULT NULL,
  `public_address` varchar(255) DEFAULT NULL,
  `public_image` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `public_id`, `public_name`, `public_number`, `public_mail`, `public_address`, `public_image`, `dob`, `created_at`, `updated_at`) VALUES
(1, 'IDC-000002', 'Md. Masud', '01866101010', 'custo@gmail.com', NULL, NULL, NULL, '2024-07-01 16:34:35', '2024-07-01 16:34:35'),
(2, 'IDC-000002', 'Md. Masuder Rahman', '+8801633714056', 'rahmansandwipe@gmail.com', NULL, NULL, NULL, '2024-07-04 16:39:13', '2024-07-04 16:39:13'),
(3, 'IDC-000002', 'Md. Masuder Rahman', '01633714210', 'rahman@gmail.com', NULL, NULL, NULL, '2024-07-05 15:22:23', '2024-07-05 15:22:23');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `headline` varchar(255) NOT NULL,
  `public_id` varchar(255) NOT NULL,
  `author_id` varchar(255) NOT NULL,
  `cat_id` varchar(255) NOT NULL,
  `embed_code` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `intro` text NOT NULL,
  `status` enum('public','private') NOT NULL DEFAULT 'public',
  `flatform` enum('facebook','youtube') NOT NULL DEFAULT 'youtube',
  `meta_tags` text DEFAULT NULL,
  `meta_desc` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `headline`, `public_id`, `author_id`, `cat_id`, `embed_code`, `thumb`, `intro`, `status`, `flatform`, `meta_tags`, `meta_desc`, `created_at`, `updated_at`) VALUES
(1, '7 HOUR 4K DRONE FILM: \"Earth from Above\" + Music by Nature Relaxation', 'V-00000001', '1', '3', '1300318734259723', 'uploads/videos/video_thumb_1802651090640172.jpg', '7 HOUR 4K DRONE FILM: \"Earth from Above\" + Music by Nature Relaxation™ (Ambient AppleTV Style)', 'public', 'facebook', '7 HOUR 4K DRONE FILM: \"Earth from Above\" + Music by Nature Relaxation™ (Ambient AppleTV Style)', '7 HOUR 4K DRONE FILM: \"Earth from Above\" + Music by Nature Relaxation™ (Ambient AppleTV Style)', '2024-06-23 11:27:26', '2024-06-23 13:41:58'),
(2, 'Beautiful Relaxing Peaceful Music, Calm Music 24/7', 'V-00000002', '1', '4', '8sLS2knUa6Y', 'uploads/videos/video_thumb_1802659974269783.jpg', 'Beautiful Relaxing Peaceful Music, Calm Music 24/7, \"Tropical Shores\" By Tim Janis', 'public', 'youtube', 'Beautiful Relaxing Peaceful Music, Calm Music 24/7, \"Tropical Shores\" By Tim Janis', 'Beautiful Relaxing Peaceful Music, Calm Music 24/7, \"Tropical Shores\" By Tim Janis', '2024-06-23 13:44:29', '2024-06-23 13:48:39'),
(3, 'পার্সপেক্টিভ এডিটিং টিউটোরিয়াল', 'V-00000003', '1', '2', 'dXIyMS61B68', 'uploads/videos/video_thumb_1802659907013658.jpg', 'পার্সপেক্টিভ এডিটিং টিউটোরিয়াল', 'public', 'youtube', 'পার্সপেক্টিভ এডিটিং টিউটোরিয়াল', 'পার্সপেক্টিভ এডিটিং টিউটোরিয়াল', '2024-06-23 13:47:34', '2024-06-23 14:04:58'),
(4, 'পার্সপেক্টিভ এডিটিং টিউটোরিয়াল', 'V-00000004', '1', '4', '439727275005091', 'uploads/videos/video_thumb_1802668184174036.jpg', 'iframe-video', 'public', 'facebook', 'iframe-video', 'iframe-video', '2024-06-23 15:59:09', '2024-06-23 15:59:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_adminid_unique` (`adminID`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_phone_unique` (`phone`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billing_details`
--
ALTER TABLE `billing_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`),
  ADD UNIQUE KEY `customers_user_id_unique` (`user_id`);

--
-- Indexes for table `delivery_charges`
--
ALTER TABLE `delivery_charges`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `delivery_charges_title_unique` (`title`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `peyment_methods`
--
ALTER TABLE `peyment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopping_carts`
--
ALTER TABLE `shopping_carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shopping_carts_product_id_foreign` (`product_id`),
  ADD KEY `shopping_carts_user_id_foreign` (`user_id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_centers`
--
ALTER TABLE `support_centers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thanas`
--
ALTER TABLE `thanas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `billing_details`
--
ALTER TABLE `billing_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `delivery_charges`
--
ALTER TABLE `delivery_charges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peyment_methods`
--
ALTER TABLE `peyment_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shopping_carts`
--
ALTER TABLE `shopping_carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `support_centers`
--
ALTER TABLE `support_centers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `thanas`
--
ALTER TABLE `thanas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `shopping_carts`
--
ALTER TABLE `shopping_carts`
  ADD CONSTRAINT `shopping_carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `shopping_carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
