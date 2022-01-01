-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 01, 2022 at 08:46 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hbctaxorg`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_information`
--

CREATE TABLE `admin_information` (
  `idadmin_information_id` int(11) NOT NULL,
  `admin_information_uid` varchar(45) DEFAULT NULL,
  `admin_information_pass` varchar(45) DEFAULT NULL,
  `admin_information_unique_id` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_information`
--

INSERT INTO `admin_information` (`idadmin_information_id`, `admin_information_uid`, `admin_information_pass`, `admin_information_unique_id`) VALUES
(1, 'admin', '25f9e794323b453885f5181f1b624d0b', '5fc7c5dd0ab69'),
(2, 'aabir', '(b01422a14de7e9d575b7eeee1e98a7c9)', '(5ff0a70c35320)');

-- --------------------------------------------------------

--
-- Table structure for table `tax_payers_data`
--

CREATE TABLE `tax_payers_data` (
  `tax_payers_data_ssn` int(11) NOT NULL,
  `tax_payers_data_fname` varchar(45) DEFAULT NULL,
  `tax_payers_data_mname` varchar(45) DEFAULT NULL,
  `tax_payers_data_lname` varchar(45) DEFAULT NULL,
  `tax_payers_data_email` varchar(45) DEFAULT NULL,
  `tax_payers_data_dob` date DEFAULT NULL,
  `tax_payers_data_ocupation` varchar(45) DEFAULT NULL,
  `tax_payers_data_phone` varchar(45) DEFAULT NULL,
  `tax_payers_data_street` varchar(45) DEFAULT NULL,
  `tax_payers_data_apt` varchar(45) DEFAULT NULL,
  `tax_payers_data_city` varchar(45) DEFAULT NULL,
  `tax_payers_data_state` varchar(45) DEFAULT NULL,
  `tax_payers_data_zip` varchar(45) DEFAULT NULL,
  `tax_payers_data_spfname` varchar(45) DEFAULT NULL,
  `tax_payers_data_spmname` varchar(45) DEFAULT NULL,
  `tax_payers_data_splname` varchar(45) DEFAULT NULL,
  `tax_payers_data_spssn` varchar(45) DEFAULT NULL,
  `tax_payers_data_spdob` date DEFAULT NULL,
  `tax_payers_data_spocupation` varchar(45) DEFAULT NULL,
  `tax_payers_data_spphone` varchar(45) DEFAULT NULL,
  `tax_payers_data_spemail` varchar(45) DEFAULT NULL,
  `tax_payers_data_spstreet` varchar(45) DEFAULT NULL,
  `tax_payers_data_spapt` varchar(45) DEFAULT NULL,
  `tax_payers_data_spcity` varchar(45) DEFAULT NULL,
  `tax_payers_data_spstate` varchar(45) DEFAULT NULL,
  `tax_payers_data_spzip` varchar(45) DEFAULT NULL,
  `tax_payers_data_homephone` varchar(45) DEFAULT NULL,
  `tax_payers_data_isblind` varchar(45) DEFAULT NULL,
  `tax_payers_data_isspblind` varchar(45) DEFAULT NULL,
  `tax_payers_data_isdisable` varchar(45) DEFAULT NULL,
  `tax_payers_data_isspdisable` varchar(45) DEFAULT NULL,
  `tax_payers_data_prescampfund` varchar(45) DEFAULT NULL,
  `tax_payers_data_spprescampfund` varchar(45) DEFAULT NULL,
  `tax_payers_data_marital_status` varchar(45) DEFAULT NULL,
  `tax_payers_data_spousedead` varchar(45) DEFAULT NULL,
  `tax_payers_data_filejointly` varchar(45) DEFAULT NULL,
  `tax_payers_data_selfemployed` varchar(45) DEFAULT NULL,
  `tax_payers_data_raisinganimals` varchar(45) DEFAULT NULL,
  `tax_payers_data_rentfrom` varchar(45) DEFAULT NULL,
  `tax_payers_data_incomefromgravel` varchar(45) DEFAULT NULL,
  `tax_payers_data_withdrawmutual` varchar(45) DEFAULT NULL,
  `tax_payers_data_foreignbankaccount` varchar(45) DEFAULT NULL,
  `tax_payers_data_supportanyone` varchar(45) DEFAULT NULL,
  `tax_payers_data_corresirs` varchar(45) DEFAULT NULL,
  `tax_payers_data_immediatefamilyadoptaion` varchar(45) DEFAULT NULL,
  `tax_payers_data_giftmore` varchar(45) DEFAULT NULL,
  `tax_payers_data_debtscancelled` varchar(45) DEFAULT NULL,
  `tax_payers_data_bankruptcy` varchar(45) DEFAULT NULL,
  `tax_payers_data_rentpaid` varchar(45) DEFAULT NULL,
  `tax_payers_data_heatincluded` varchar(45) DEFAULT NULL,
  `tax_payers_data_interestonstudentloan` varchar(45) DEFAULT NULL,
  `tax_payers_data_payexpenses` varchar(45) DEFAULT NULL,
  `tax_payers_data_childrenunder19` varchar(45) DEFAULT NULL,
  `tax_payers_data_techvehicle` varchar(45) DEFAULT NULL,
  `tax_payers_data_energyproperty` varchar(45) DEFAULT NULL,
  `tax_payers_data_moreforeignfinance` varchar(45) DEFAULT NULL,
  `tax_payers_data_unique_ID` varchar(45) DEFAULT NULL,
  `tax_payers_data_last_update_date` datetime DEFAULT NULL,
  `tax_payers_data_additional_note` longtext,
  `tax_payers_data_donate_charitable` varchar(45) DEFAULT NULL,
  `tax_payers_data_didusell` varchar(45) DEFAULT NULL,
  `tax_payers_data_purchasenewhome` varchar(45) DEFAULT NULL,
  `tax_payers_data_dependantqtp` varchar(45) DEFAULT NULL,
  `tax_payers_data_tutionform1098` varchar(45) DEFAULT NULL,
  `tax_payers_data_digitalcurrency` varchar(45) DEFAULT NULL,
  `tax_payers_data_msa_has` varchar(45) DEFAULT NULL,
  `tax_payers_data_pensionplan` varchar(45) DEFAULT NULL,
  `tax_payers_data_foreignincome` varchar(45) DEFAULT NULL,
  `tax_payers_data_marketplace` varchar(45) DEFAULT NULL,
  `tax_payers_data_healthinsurance` varchar(45) DEFAULT NULL,
  `tax_payers_data_permdisabled` varchar(45) DEFAULT NULL,
  `tax_payers_data_notifiedirs` varchar(45) DEFAULT NULL,
  `tax_payers_data_claimeddependant` varchar(45) DEFAULT NULL,
  `tax_payers_data_addresschange` varchar(45) DEFAULT NULL,
  `tax_payers_data_stimulus_irs` varchar(45) DEFAULT NULL,
  `tax_payers_data_rcvalimony` varchar(45) DEFAULT NULL,
  `tax_payers_data_rcvalimonyamnt` varchar(45) DEFAULT NULL,
  `tax_payers_data_rcpntssn` varchar(45) DEFAULT NULL,
  `tax_payers_data_doseparation` date DEFAULT NULL,
  `tax_payers_data_purchase_health` varchar(45) DEFAULT NULL,
  `tax_payers_data_ded_retirement` varchar(45) DEFAULT NULL,
  `tax_payers_data_pay_domestic` varchar(45) DEFAULT NULL,
  `tax_payers_data_pur_new_energy` varchar(45) DEFAULT NULL,
  `tax_payers_data_mem_military` varchar(45) DEFAULT NULL,
  `tax_payers_data_stateofresidency` varchar(45) DEFAULT NULL,
  `tax_payers_data_lived_foreign` varchar(45) DEFAULT NULL,
  `tax_payers_data_foreigncountryname` varchar(45) DEFAULT NULL,
  `tax_payers_data_rcv_ecn_impact` varchar(45) DEFAULT NULL,
  `tax_payers_data_impactpayments` varchar(45) DEFAULT NULL,
  `tax_payers_data_impactpaymentsdate` date DEFAULT NULL,
  `tax_payers_data_adopted_child` varchar(45) DEFAULT NULL,
  `tax_payers_data_child_tax_credit` varchar(45) DEFAULT NULL,
  `tax_payers_data_unearned_children` varchar(45) DEFAULT NULL,
  `tax_payers_data_rollover_retirement_acnt` varchar(45) DEFAULT NULL,
  `tax_payers_data_installmentsale` varchar(45) DEFAULT NULL,
  `tax_payers_data_investment_theft` varchar(45) DEFAULT NULL,
  `tax_payers_data_employee_stock` varchar(45) DEFAULT NULL,
  `tax_payers_data_dispose_financial_interest` varchar(45) DEFAULT NULL,
  `tax_payers_data_contributee_hsa` varchar(45) DEFAULT NULL,
  `tax_payers_data_interest_loan_rv` varchar(45) DEFAULT NULL,
  `tax_payers_data_taxes_major_purchase` varchar(45) DEFAULT NULL,
  `tax_payers_data_work_from_home` varchar(45) DEFAULT NULL,
  `tax_payers_data_income_sharing_economy` varchar(45) DEFAULT NULL,
  `tax_payers_data_interest_part_venture` varchar(45) DEFAULT NULL,
  `tax_payers_data_homebuyer_credit` varchar(45) DEFAULT NULL,
  `tax_payers_data_refinance_mortgage` varchar(45) DEFAULT NULL,
  `tax_payers_data_substantially_improve_home` varchar(45) DEFAULT NULL,
  `tax_payers_data_energy_efficient_improvements` varchar(45) DEFAULT NULL,
  `tax_payers_data_child_attending_college` varchar(45) DEFAULT NULL,
  `tax_payers_data_atnd_clg_year` varchar(45) DEFAULT NULL,
  `tax_payers_data_atnd_clg_you_tution` varchar(45) DEFAULT NULL,
  `tax_payers_data_atnd_clg_you_loan` varchar(45) DEFAULT NULL,
  `tax_payers_data_atnd_clg_you_books` varchar(45) DEFAULT NULL,
  `tax_payers_data_atnd_clg_student_tution` varchar(45) DEFAULT NULL,
  `tax_payers_data_atnd_clg_student_loan` varchar(45) DEFAULT NULL,
  `tax_payers_data_atnd_clg_student_books` varchar(45) DEFAULT NULL,
  `tax_payers_data_tution_for_private` varchar(45) DEFAULT NULL,
  `tax_payers_data_tution_for_private_stud` varchar(45) DEFAULT NULL,
  `tax_payers_data_tution_for_private_amount` varchar(45) DEFAULT NULL,
  `tax_payers_data_tution_for_private_schl` varchar(45) DEFAULT NULL,
  `tax_payers_data_depcare` varchar(45) DEFAULT NULL,
  `tax_payers_data_depcare_prov` varchar(45) DEFAULT NULL,
  `tax_payers_data_depcare_prov_ssn` varchar(45) DEFAULT NULL,
  `tax_payers_data_depcare_prov_add` varchar(45) DEFAULT NULL,
  `tax_payers_data_depcare_prov_amnt` varchar(45) DEFAULT NULL,
  `tax_payers_data_first_install_fed_date` date DEFAULT NULL,
  `tax_payers_data_first_install_fed` varchar(45) DEFAULT NULL,
  `tax_payers_data_first_install_state_date` date DEFAULT NULL,
  `tax_payers_data_first_install_state` varchar(45) DEFAULT NULL,
  `tax_payers_data_second_install_fed_date` date DEFAULT NULL,
  `tax_payers_data_second_install_fed` varchar(45) DEFAULT NULL,
  `tax_payers_data_second_install_state_date` date DEFAULT NULL,
  `tax_payers_data_second_install_state` varchar(45) DEFAULT NULL,
  `tax_payers_data_third_install_fed_date` date DEFAULT NULL,
  `tax_payers_data_third_install_fed` varchar(45) DEFAULT NULL,
  `tax_payers_data_third_install_state_date` date DEFAULT NULL,
  `tax_payers_data_third_install_state` varchar(45) DEFAULT NULL,
  `tax_payers_data_fourth_install_fed_date` date DEFAULT NULL,
  `tax_payers_data_fourth_install_fed` varchar(45) DEFAULT NULL,
  `tax_payers_data_fourth_install_state_date` date DEFAULT NULL,
  `tax_payers_data_fourth_install_state` varchar(45) DEFAULT NULL,
  `tax_payers_data_overpay_install_fed` varchar(45) DEFAULT NULL,
  `tax_payers_data_overpay_install_state` varchar(45) DEFAULT NULL,
  `tax_payers_data_total_install_fed` varchar(45) DEFAULT NULL,
  `tax_payers_data_total_install_state` varchar(45) DEFAULT NULL,
  `tax_payers_data_pay_rec_july` varchar(45) DEFAULT NULL,
  `tax_payers_data_pay_rec_august` varchar(45) DEFAULT NULL,
  `tax_payers_data_pay_rec_sept` varchar(45) DEFAULT NULL,
  `tax_payers_data_pay_rec_oct` varchar(45) DEFAULT NULL,
  `tax_payers_data_pay_rec_nov` varchar(45) DEFAULT NULL,
  `tax_payers_data_pay_rec_dec` varchar(45) DEFAULT NULL,
  `tax_payers_data_tax_initial_sig` varchar(45) DEFAULT NULL,
  `tax_payers_data_tax_sp_initial_sig` varchar(45) DEFAULT NULL,
  `tax_payers_data_sign_date` date DEFAULT NULL,
  `tax_payers_data_w2_form` varchar(45) DEFAULT NULL,
  `tax_payers_data_1095a_form` varchar(45) DEFAULT NULL,
  `tax_payers_data_new_client_last_copy` varchar(45) DEFAULT NULL,
  `tax_payers_data_not_to_fill_out_org` varchar(45) DEFAULT NULL,
  `tax_payers_data_copy_closing_state` varchar(45) DEFAULT NULL,
  `tax_payers_data_mile_fig_auto` varchar(45) DEFAULT NULL,
  `tax_payers_data_detail_any_tax_made` varchar(45) DEFAULT NULL,
  `tax_payers_data_inc_ded_cat` varchar(45) DEFAULT NULL,
  `tax_payers_data_list_item_ded_cat` varchar(45) DEFAULT NULL,
  `tax_payers_data_copy_all_acknow` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tax_payers_data`
--

INSERT INTO `tax_payers_data` (`tax_payers_data_ssn`, `tax_payers_data_fname`, `tax_payers_data_mname`, `tax_payers_data_lname`, `tax_payers_data_email`, `tax_payers_data_dob`, `tax_payers_data_ocupation`, `tax_payers_data_phone`, `tax_payers_data_street`, `tax_payers_data_apt`, `tax_payers_data_city`, `tax_payers_data_state`, `tax_payers_data_zip`, `tax_payers_data_spfname`, `tax_payers_data_spmname`, `tax_payers_data_splname`, `tax_payers_data_spssn`, `tax_payers_data_spdob`, `tax_payers_data_spocupation`, `tax_payers_data_spphone`, `tax_payers_data_spemail`, `tax_payers_data_spstreet`, `tax_payers_data_spapt`, `tax_payers_data_spcity`, `tax_payers_data_spstate`, `tax_payers_data_spzip`, `tax_payers_data_homephone`, `tax_payers_data_isblind`, `tax_payers_data_isspblind`, `tax_payers_data_isdisable`, `tax_payers_data_isspdisable`, `tax_payers_data_prescampfund`, `tax_payers_data_spprescampfund`, `tax_payers_data_marital_status`, `tax_payers_data_spousedead`, `tax_payers_data_filejointly`, `tax_payers_data_selfemployed`, `tax_payers_data_raisinganimals`, `tax_payers_data_rentfrom`, `tax_payers_data_incomefromgravel`, `tax_payers_data_withdrawmutual`, `tax_payers_data_foreignbankaccount`, `tax_payers_data_supportanyone`, `tax_payers_data_corresirs`, `tax_payers_data_immediatefamilyadoptaion`, `tax_payers_data_giftmore`, `tax_payers_data_debtscancelled`, `tax_payers_data_bankruptcy`, `tax_payers_data_rentpaid`, `tax_payers_data_heatincluded`, `tax_payers_data_interestonstudentloan`, `tax_payers_data_payexpenses`, `tax_payers_data_childrenunder19`, `tax_payers_data_techvehicle`, `tax_payers_data_energyproperty`, `tax_payers_data_moreforeignfinance`, `tax_payers_data_unique_ID`, `tax_payers_data_last_update_date`, `tax_payers_data_additional_note`, `tax_payers_data_donate_charitable`, `tax_payers_data_didusell`, `tax_payers_data_purchasenewhome`, `tax_payers_data_dependantqtp`, `tax_payers_data_tutionform1098`, `tax_payers_data_digitalcurrency`, `tax_payers_data_msa_has`, `tax_payers_data_pensionplan`, `tax_payers_data_foreignincome`, `tax_payers_data_marketplace`, `tax_payers_data_healthinsurance`, `tax_payers_data_permdisabled`, `tax_payers_data_notifiedirs`, `tax_payers_data_claimeddependant`, `tax_payers_data_addresschange`, `tax_payers_data_stimulus_irs`, `tax_payers_data_rcvalimony`, `tax_payers_data_rcvalimonyamnt`, `tax_payers_data_rcpntssn`, `tax_payers_data_doseparation`, `tax_payers_data_purchase_health`, `tax_payers_data_ded_retirement`, `tax_payers_data_pay_domestic`, `tax_payers_data_pur_new_energy`, `tax_payers_data_mem_military`, `tax_payers_data_stateofresidency`, `tax_payers_data_lived_foreign`, `tax_payers_data_foreigncountryname`, `tax_payers_data_rcv_ecn_impact`, `tax_payers_data_impactpayments`, `tax_payers_data_impactpaymentsdate`, `tax_payers_data_adopted_child`, `tax_payers_data_child_tax_credit`, `tax_payers_data_unearned_children`, `tax_payers_data_rollover_retirement_acnt`, `tax_payers_data_installmentsale`, `tax_payers_data_investment_theft`, `tax_payers_data_employee_stock`, `tax_payers_data_dispose_financial_interest`, `tax_payers_data_contributee_hsa`, `tax_payers_data_interest_loan_rv`, `tax_payers_data_taxes_major_purchase`, `tax_payers_data_work_from_home`, `tax_payers_data_income_sharing_economy`, `tax_payers_data_interest_part_venture`, `tax_payers_data_homebuyer_credit`, `tax_payers_data_refinance_mortgage`, `tax_payers_data_substantially_improve_home`, `tax_payers_data_energy_efficient_improvements`, `tax_payers_data_child_attending_college`, `tax_payers_data_atnd_clg_year`, `tax_payers_data_atnd_clg_you_tution`, `tax_payers_data_atnd_clg_you_loan`, `tax_payers_data_atnd_clg_you_books`, `tax_payers_data_atnd_clg_student_tution`, `tax_payers_data_atnd_clg_student_loan`, `tax_payers_data_atnd_clg_student_books`, `tax_payers_data_tution_for_private`, `tax_payers_data_tution_for_private_stud`, `tax_payers_data_tution_for_private_amount`, `tax_payers_data_tution_for_private_schl`, `tax_payers_data_depcare`, `tax_payers_data_depcare_prov`, `tax_payers_data_depcare_prov_ssn`, `tax_payers_data_depcare_prov_add`, `tax_payers_data_depcare_prov_amnt`, `tax_payers_data_first_install_fed_date`, `tax_payers_data_first_install_fed`, `tax_payers_data_first_install_state_date`, `tax_payers_data_first_install_state`, `tax_payers_data_second_install_fed_date`, `tax_payers_data_second_install_fed`, `tax_payers_data_second_install_state_date`, `tax_payers_data_second_install_state`, `tax_payers_data_third_install_fed_date`, `tax_payers_data_third_install_fed`, `tax_payers_data_third_install_state_date`, `tax_payers_data_third_install_state`, `tax_payers_data_fourth_install_fed_date`, `tax_payers_data_fourth_install_fed`, `tax_payers_data_fourth_install_state_date`, `tax_payers_data_fourth_install_state`, `tax_payers_data_overpay_install_fed`, `tax_payers_data_overpay_install_state`, `tax_payers_data_total_install_fed`, `tax_payers_data_total_install_state`, `tax_payers_data_pay_rec_july`, `tax_payers_data_pay_rec_august`, `tax_payers_data_pay_rec_sept`, `tax_payers_data_pay_rec_oct`, `tax_payers_data_pay_rec_nov`, `tax_payers_data_pay_rec_dec`, `tax_payers_data_tax_initial_sig`, `tax_payers_data_tax_sp_initial_sig`, `tax_payers_data_sign_date`, `tax_payers_data_w2_form`, `tax_payers_data_1095a_form`, `tax_payers_data_new_client_last_copy`, `tax_payers_data_not_to_fill_out_org`, `tax_payers_data_copy_closing_state`, `tax_payers_data_mile_fig_auto`, `tax_payers_data_detail_any_tax_made`, `tax_payers_data_inc_ded_cat`, `tax_payers_data_list_item_ded_cat`, `tax_payers_data_copy_all_acknow`) VALUES
(255485487, 'Saifur', 'Rahman', 'Nirob', 'snirob786@gmail.com', '2022-01-11', 'student', '2026700218', '121', '', 'Dhaka', 'Dhaka', '1206', 'Saifur', 'Rahman', 'Nirob', '', '1970-01-01', '', '2026700218', 'snirob786@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 'no', 'no', 'no', 'no', NULL, NULL, 'single', '', NULL, NULL, NULL, 'no', NULL, NULL, 'no', NULL, NULL, 'no', NULL, 'no', 'no', NULL, NULL, 'no', NULL, NULL, 'no', 'no', 'no', '61cd82dd10778', '2022-01-01 18:29:01', '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tax_payers_dependants_data`
--

CREATE TABLE `tax_payers_dependants_data` (
  `idtax_payers_dependants_data_id` int(11) NOT NULL,
  `tax_payers_dependants_data_depname` varchar(45) DEFAULT NULL,
  `tax_payers_dependants_data_rel` varchar(45) DEFAULT NULL,
  `tax_payers_dependants_data_depdob` date DEFAULT NULL,
  `tax_payers_dependants_data_depssn` varchar(45) DEFAULT NULL,
  `tax_payers_dependants_data_deplived` varchar(45) DEFAULT NULL,
  `tax_payers_dependants_data_depdsiabled` varchar(45) DEFAULT NULL,
  `tax_payers_dependants_data_depfullstudent` varchar(45) DEFAULT NULL,
  `tax_payers_dependants_data_owner_ssn` varchar(45) DEFAULT NULL,
  `tax_payers_dependants_data_last_update_date` datetime DEFAULT NULL,
  `tax_payers_dependants_data_unique_id` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tax_payers_dependants_data`
--

INSERT INTO `tax_payers_dependants_data` (`idtax_payers_dependants_data_id`, `tax_payers_dependants_data_depname`, `tax_payers_dependants_data_rel`, `tax_payers_dependants_data_depdob`, `tax_payers_dependants_data_depssn`, `tax_payers_dependants_data_deplived`, `tax_payers_dependants_data_depdsiabled`, `tax_payers_dependants_data_depfullstudent`, `tax_payers_dependants_data_owner_ssn`, `tax_payers_dependants_data_last_update_date`, `tax_payers_dependants_data_unique_id`) VALUES
(1, 'Saifur Rahman Nirob', 'asdf', '2020-12-15', '234654654', '3', 'no', 'no', '255485487', '2022-01-01 18:29:01', '61ce0087f2203');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_information`
--
ALTER TABLE `admin_information`
  ADD UNIQUE KEY `idadmin_information_id_UNIQUE` (`idadmin_information_id`);

--
-- Indexes for table `tax_payers_data`
--
ALTER TABLE `tax_payers_data`
  ADD PRIMARY KEY (`tax_payers_data_ssn`),
  ADD UNIQUE KEY `tax_payers_data_ssn_UNIQUE` (`tax_payers_data_ssn`);

--
-- Indexes for table `tax_payers_dependants_data`
--
ALTER TABLE `tax_payers_dependants_data`
  ADD PRIMARY KEY (`idtax_payers_dependants_data_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_information`
--
ALTER TABLE `admin_information`
  MODIFY `idadmin_information_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tax_payers_dependants_data`
--
ALTER TABLE `tax_payers_dependants_data`
  MODIFY `idtax_payers_dependants_data_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
