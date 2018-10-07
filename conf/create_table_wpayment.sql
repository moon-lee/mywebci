CREATE TABLE `wpayment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pay_date` date NOT NULL,
  `pay_gross` decimal(13,2) NOT NULL DEFAULT '0.00',
  `pay_net` decimal(13,2) NOT NULL DEFAULT '0.00',
  `pay_base` decimal(13,2) DEFAULT '0.00',
  `pay_shift` decimal(13,2) DEFAULT '0.00',
  `pay_overtime_1_5` decimal(13,2) DEFAULT '0.00',
  `pay_overtime_2` decimal(13,2) DEFAULT '0.00',
  `pay_personal_leave` decimal(13,2) DEFAULT '0.00',
  `pay_holiday_pay` decimal(13,2) DEFAULT '0.00',
  `pay_holiday_load` decimal(13,2) DEFAULT '0.00',
  `pay_withholding` decimal(13,2) DEFAULT '0.00',
  `pay_super` decimal(13,2) DEFAULT '0.00',
  `pay_holiday_leave` int(13) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
