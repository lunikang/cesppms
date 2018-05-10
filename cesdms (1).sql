-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2018 at 12:16 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cesdms`
--

-- --------------------------------------------------------

--
-- Table structure for table `approval_cycle`
--

CREATE TABLE `approval_cycle` (
  `approve_id` int(11) NOT NULL,
  `proposal_header_fkid` int(11) DEFAULT NULL,
  `cycles` int(11) DEFAULT '0',
  `revisions` int(11) DEFAULT '0',
  `department_chair` varchar(12) DEFAULT NULL,
  `date_chair_checked` datetime DEFAULT NULL,
  `school_coordinator` varchar(12) DEFAULT NULL,
  `date_coordinator_checked` datetime DEFAULT NULL,
  `school_dean` varchar(12) DEFAULT NULL,
  `date_dean_checked` datetime DEFAULT NULL,
  `director` varchar(12) DEFAULT NULL,
  `director_decision` text,
  `director_decision_date` datetime DEFAULT NULL,
  `date_director_checked` datetime DEFAULT NULL,
  `reviewer_1` int(11) DEFAULT NULL,
  `reviewer1_decision` text,
  `reviewer1_decision_date` datetime DEFAULT NULL,
  `date_reviewer_1_checked` datetime DEFAULT NULL,
  `reviewer_2` int(11) DEFAULT NULL,
  `reviewer2_decision` text,
  `reviewer2_decision_date` datetime DEFAULT NULL,
  `date_reviewer_2_checked` datetime DEFAULT NULL,
  `vpaa` tinyint(1) DEFAULT NULL,
  `date_vpaa_checked` datetime DEFAULT NULL,
  `decision` tinyint(1) DEFAULT NULL,
  `datetime_created` datetime DEFAULT CURRENT_TIMESTAMP,
  `datetime_modified` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `budgetary_requirements`
--

CREATE TABLE `budgetary_requirements` (
  `id` int(11) NOT NULL,
  `mealsnack_particular` text,
  `mealsnack_frequency` text,
  `mealsnack_quantity` text,
  `mealsnack_amnt` text,
  `mealsnack_subtotal` text,
  `transpo_particular` text,
  `transpo_frequency` text,
  `transpo_quantity` text,
  `transpo_amnt` text,
  `transpo_subtotal` text,
  `materials_particular` text,
  `materials_frequency` text,
  `materials_quantity` text,
  `materials_amnt` text,
  `materials_subtotal` text,
  `grand_total` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `proposal_header_fkid` int(11) DEFAULT NULL,
  `user_fkid` int(11) DEFAULT NULL,
  `comment_category` text NOT NULL,
  `comment` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `proposal_header_fkid`, `user_fkid`, `comment_category`, `comment`, `date_created`) VALUES
(2, 4, 74, 'Rationale and Contextualization', 'test 1', '2018-01-04 23:44:20'),
(3, 4, 74, 'Goal, Objectives, and Outcomes', 'test goals and objectives comment', '2018-01-05 00:12:21'),
(4, 4, 74, 'Participants, Partners and Beneficiaries', 'test for participants and partners', '2018-01-05 00:18:41'),
(5, 4, 74, 'Outline of Activities', 'test for outline activities', '2018-01-05 00:22:27'),
(6, 4, 74, 'Budgetary Requirements', 'test for budgetary requirements', '2018-01-05 00:23:07'),
(7, 4, 74, 'Program/Project/Activity Profile', 'test for program/project/activity profile', '2018-01-05 00:23:43'),
(8, 4, 74, 'Significance/Relevance Matrix', 'test for significance/relevance matrix', '2018-01-05 00:23:58'),
(9, 4, 74, 'Implications to Work hours, Academic Program, and Research', 'test for implications to work hours', '2018-01-05 00:24:11'),
(10, 4, 74, 'Partnership and Linkage Profile', 'test for partnership and linkage', '2018-01-05 00:24:24'),
(11, 6, 74, 'Rationale and Contextualization', 'test', '2018-01-16 07:29:31'),
(12, 9, 74, 'Rationale and Contextualization', 'test 123', '2018-02-20 05:22:28'),
(13, 9, 24, 'Goal, Objectives, and Outcomes', 'test in coordinator part', '2018-02-20 07:03:08'),
(14, 9, 55, 'Participants, Partners and Beneficiaries', 'test in dean layer', '2018-02-20 07:05:28'),
(15, 9, 55, 'Outline of Activities', 'test in dean layer', '2018-02-20 07:05:40'),
(16, 8, 74, 'Rationale and Contextualization', 'test feb 21', '2018-02-21 02:35:10'),
(17, 8, 74, 'Participants, Partners and Beneficiaries', 'test feb 21', '2018-02-21 02:35:26'),
(18, 8, 55, 'Outline of Activities', 'test feb 21', '2018-02-21 02:36:43');

-- --------------------------------------------------------

--
-- Table structure for table `nature_and_area_ofprogram`
--

CREATE TABLE `nature_and_area_ofprogram` (
  `id` int(11) NOT NULL,
  `nature_of_program` text,
  `specnatprog` text,
  `program_area` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `outline_of_activities`
--

CREATE TABLE `outline_of_activities` (
  `id` int(11) NOT NULL,
  `tentativedate` varchar(20) NOT NULL,
  `activityname` text,
  `participants_needed` int(11) DEFAULT NULL,
  `personincharge` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `partnership_linkages_profile`
--

CREATE TABLE `partnership_linkages_profile` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `practical_counts`
--

CREATE TABLE `practical_counts` (
  `id` int(11) NOT NULL,
  `manhours_prepare` int(11) DEFAULT '0',
  `manhours_comp` int(11) DEFAULT '0',
  `facultyinv` int(11) DEFAULT '0',
  `coursebasedstud` int(11) DEFAULT '0',
  `studorg` int(11) DEFAULT '0',
  `staffinv` int(11) DEFAULT '0',
  `matproduced` int(11) DEFAULT '0',
  `matimproved` int(11) DEFAULT '0',
  `curricprogdev` int(11) DEFAULT '0',
  `curricprogimp` int(11) DEFAULT '0',
  `propdev` int(11) DEFAULT '0',
  `paperspres` int(11) DEFAULT '0',
  `paperspub` int(11) DEFAULT '0',
  `policiesadv` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `proposal_header`
--

CREATE TABLE `proposal_header` (
  `id` int(11) NOT NULL,
  `user_fkid` int(11) NOT NULL,
  `form_type` varchar(3) NOT NULL,
  `title` varchar(100) NOT NULL,
  `school` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `organization` varchar(50) DEFAULT NULL,
  `inclusive_date1` varchar(30) NOT NULL,
  `inclusive_date2` varchar(30) NOT NULL,
  `venue` varchar(50) NOT NULL,
  `form_completeness` int(5) NOT NULL,
  `form_procedure` int(3) NOT NULL,
  `version` int(11) DEFAULT NULL,
  `unitresponsible_fkid` int(11) DEFAULT NULL,
  `practical_counts_fkid` int(11) DEFAULT NULL,
  `unitpersonnel_involved_fkid` int(11) DEFAULT NULL,
  `verifdata_with_fkid` int(11) DEFAULT NULL,
  `verifdata_without_fkid` int(11) DEFAULT NULL,
  `social_dimension_fkid` int(11) DEFAULT NULL,
  `partnership_linkages_profile_fkid` int(11) DEFAULT NULL,
  `request_area_fkid` int(11) DEFAULT NULL,
  `rationale_to_beneficiaries_fkid` int(11) DEFAULT NULL,
  `Outline_of_Activities_fkid` int(11) DEFAULT NULL,
  `budgetary_requirements_fkid` int(11) DEFAULT NULL,
  `nature_and_area_ofprogram_fkid` int(11) DEFAULT NULL,
  `timeframe_to_mou_moa_fkid` int(11) DEFAULT NULL,
  `datetime_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `proposal_json`
--

CREATE TABLE `proposal_json` (
  `proposal_id` int(11) NOT NULL,
  `proposal_json_format` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `form_type` int(11) NOT NULL,
  `noted_by_stat` int(11) NOT NULL DEFAULT '0',
  `noted_by_comments` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `endorsed_by` int(11) NOT NULL,
  `approved` int(11) NOT NULL,
  `coordinator_stat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proposal_json`
--

INSERT INTO `proposal_json` (`proposal_id`, `proposal_json_format`, `user_id`, `status`, `form_type`, `noted_by_stat`, `noted_by_comments`, `date_created`, `endorsed_by`, `approved`, `coordinator_stat`) VALUES
(3, '{\"title\":\"Test draft\",\"user_id\":\"\",\"form_type\":\"A&B\",\"school\":\"\",\"proposal_id\":\"3\",\"department\":\"\",\"organization\":\"\",\"inclusive_date1\":\"11/29/2017\",\"inclusive_date2\":\"11/30/2017\",\"venue\":\"Test draft\",\"rationale_and_contextualization\":\"Test draft\",\"goal_objectives_and_outcomes\":\"Test draft\",\"participants_partners_and_beneficiaries\":\"Test draft\",\"tentative_date\":[\"11/29/2017\",\"11/30/2017\"],\"activities\":[\"Test draft1\",\"Test draft2\"],\"participants_needed\":[\"2\",\"3\"],\"persons_incharge\":[\"Test draft1\",\"Test draft2\"],\"a_particulars\":[\"Test draft1\",\"Test draft2\"],\"a_frequency\":[\"1\",\"2\"],\"a_quantity\":[\"2\",\"3\"],\"a_amount\":[\"100\",\"100\"],\"a_subtotal\":[\"200\",\"600\"],\"grand_total\":\"800.00\",\"unit_responsible\":[\"CES Office\",\"School of Arts and Sciences\",\"School of Engineering\"],\"school_of_arts_and_sciences\":\"Computer and Information Sciences\",\"school_of_architecture_fine_arts_and_design\":\"0\",\"school_of_education\":\"0\",\"school_of_engineering\":\"Civil Engineering\",\"school_of_business_and_economics\":\"0\",\"school_of_health_care_profession\":\"0\",\"school_of_law_and_governance\":\"0\",\"support_unit\":\"0\",\"term\":\"Long Term-\",\"semester\":\"5 semesters\",\"semester_others\":\"\",\"locus_and_leadership\":[\"Course-based(undergraduate)\",\"Course-based(graduate)\",\"Student Organization-led\",\"Department-led\",\"School-wide\",\"Alumni-led\",\"Support-unit Led\",\"SVD-Led\",\"others:\"],\"locus_and_leadership_others\":\"test others\",\"nature_of_the_program\":[\"Training Program\",\"Community Outreach\",\"Technical Assistance\",\"Technology transfer and utilization\",\"Advisory Services\",\"others\",\"Information Services\"],\"nature_of_the_program_others\":\"test others\",\"program_area\":[\"Productivity-Oriented Initiatives\",\"Health Advocacy and Wellness Promotion\",\"Literacy, Values Formation and Life-long Learning\",\"Building Christian Communities\",\"Social Welfare Services\",\"Information Sharing\",\"Environmental Sustainability\",\"Heritage Conservation\",\"Issue Advocacy and Rights Promotion\",\"Rural and Urban Development\"],\"prelimasschoice_contextdimension\":[\"unit have done preliminary needs assessment\"],\"unit_personnel_involved\":[\"faculty members\",\"student org./majors\",\"class instructor\",\"course enrollees\"],\"unit_personnel_involved_others\":\"\",\"data_sources_others\":\"\",\"tools_used_to_gather_others\":\"\",\"means_employed_to_verify_others\":\"\",\"who_collected_others\":\"\",\"bases_for_proposing_ppa\":\"\",\"means_employed_to_ensure_responsiveness\":\"\",\"productivity_dimension\":[\"production of new technology\",\"transfer of existing technology\",\"utilization of existing technology\",\"refinement/modification of existing technology\"],\"productivity_dimension_others\":\"\",\"economic_dimension\":[\"generation of new livelihood projects/opportunities\",\"enhancement of partner\\u2019s current livelihood\",\"employability of partners at\",\"measurable increase in the income of partners\",\"others\"],\"employability_of_partners\":\"\",\"economic_dimension_others\":\"\",\"social_dimension\":[\"households\",\"youth(male)\",\"Local Government Units\",\"youth(female)\",\"Organizations/Associations\"],\"social_dimension_household\":\"10\",\"social_dimension_youth_male\":\"10\",\"social_dimension_local_government_unit\":\"10\",\"social_dimension_youth_female\":\"10\",\"social_dimension_organization\":\"10\",\"social_dimension_children_boy\":\"10\",\"social_dimension_senior_citizen_male\":\"10\",\"social_dimension_children_girl\":\"10\",\"social_dimension_senior_citizen_female\":\"10\",\"social_dimension_infants_boy\":\"10\",\"social_dimension_adults_male\":\"10\",\"social_dimension_infants_girl\":\"10\",\"social_dimension_adults_female\":\"10\",\"social_dimension_others\":\"Test\",\"social_dimension_others_count\":\"10\",\"environment_dimension\":[\"River Management\",\"Greening Initiatives\",\"Mangrove Planting\"],\"environment_dimension_others\":\"\",\"government_dimension\":[\"networking with local government units and community leaders\",\"funding support from local government units\",\"funding support from other partners\",\"established counterparts from local government units\",\"established counterparts from other partners\",\"MOA/MOU with LGUs\",\"MOA/MOU with other partners\",\"policy advocacy by USC faculty/students/staff\",\"policy change initiatives by LGUs\",\"others\"],\"government_dimension_others\":\"\",\"hours_needed_to_prepare\":\"1\",\"hours_needed_to_complete\":\"\",\"faculty_members_involved_count\":\"1\",\"course_based_students_involved_count\":\"\",\"student_organization_members_involved_count\":\"2\",\"staff_involved_count\":\"1\",\"campaign_materials_to_produce_count\":\"1\",\"campaign_materials_to_improve_count\":\"1\",\"curriculum_programs_to_develop_count\":\"2\",\"curriculum_programs_to_improve_count\":\"2\",\"proposals_to_develop_count\":\"10\",\"papers_presented_count\":\"2\",\"papers_published_count\":\"10\",\"policies_to_advocate_count\":\"3\",\"preparation_expertise_needed_faculty_members\":\"Test draft1\",\"preparation_expertise_needed_students\":\"Test draft1\",\"preparation_roles_faculty_members\":\"Test draft1\",\"preparation_roles_students\":\"Test draft1\",\"implementation_expertise_needed_faculty_members\":\"Test draft1\",\"implementation_expertise_needed_students\":\"Test draft1\",\"implementation_roles_faculty_members\":\"Test draft1\",\"implementation_roles_students\":\"Test draft1\",\"date_signed\":\"\",\"signatories_for_usc\":\"\",\"signatories_for_partner\":\"\",\"major_duties_of_usc_unit\":\"\",\"major_duties_of_partner\":\"\",\"moa\":\"without memorandum of understanding/memorandum of agreement\",\"date_linkage_started\":\"11/29/2017\",\"who_initiated_linkage\":\"Test draft\",\"activities_done\":\"Test draft\",\"opportunities_identified\":\"Test draft1\",\"challenges_encountered\":\"Test draft1\",\"button_type\":\"submit_prop\"}', 26, 0, 1, 0, '', '2017-12-14 11:49:14', 0, 0, 0),
(4, '{\"title\":\"Test draft\",\"user_id\":\"\",\"form_type\":\"A&B\",\"school\":\"\",\"proposal_id\":\"4\",\"department\":\"\",\"organization\":\"\",\"inclusive_date1\":\"11/29/2017\",\"inclusive_date2\":\"11/30/2017\",\"venue\":\"Test draft\",\"rationale_and_contextualization\":\"Test draft\",\"goal_objectives_and_outcomes\":\"Test draft\",\"participants_partners_and_beneficiaries\":\"Test draft\",\"tentative_date\":[\"11/29/2017\",\"11/30/2017\"],\"activities\":[\"Test draft1\",\"Test draft2\"],\"participants_needed\":[\"2\",\"3\"],\"persons_incharge\":[\"Test draft1\",\"Test draft2\"],\"a_particulars\":[\"Test draft1\",\"Test draft2\"],\"a_frequency\":[\"1\",\"2\"],\"a_quantity\":[\"2\",\"3\"],\"a_amount\":[\"100\",\"100\"],\"a_subtotal\":[\"200\",\"600\"],\"grand_total\":\"800.00\",\"unit_responsible\":[\"CES Office\"],\"school_of_arts_and_sciences\":\"0\",\"school_of_architecture_fine_arts_and_design\":\"0\",\"school_of_education\":\"0\",\"school_of_engineering\":\"0\",\"school_of_business_and_economics\":\"0\",\"school_of_health_care_profession\":\"0\",\"school_of_law_and_governance\":\"0\",\"support_unit\":\"0\",\"term\":\"Short Term-\",\"semester\":\"others\",\"semester_others\":\"\",\"locus_and_leadership\":[\"Course-based(undergraduate)\",\"Department-led\"],\"locus_and_leadership_others\":\"\",\"nature_of_the_program\":[\"Training Program\",\"Community Outreach\",\"Technical Assistance\",\"Technology transfer and utilization\",\"Advisory Services\",\"others\",\"Information Services\"],\"nature_of_the_program_others\":\"test 2\",\"program_area\":[\"Productivity-Oriented Initiatives\",\"Health Advocacy and Wellness Promotion\",\"Literacy, Values Formation and Life-long Learning\",\"Building Christian Communities\",\"Social Welfare Services\",\"Information Sharing\",\"Environmental Sustainability\",\"Heritage Conservation\",\"Issue Advocacy and Rights Promotion\",\"Rural and Urban Development\"],\"unit_personnel_involved_others\":\"\",\"prelimasschoice_contextdimension\":[\"with existing verifiable data from the field\"],\"data_sources\":[\"research(faculty/student)\",\"provided/expressed by the partner\",\"thesis/dissertation\",\"recommended by faculty/student/class\",\"CES data gathering initiatives\",\"from Government agency\",\"community meetings\",\"reflection notes/papers\",\"from secondary sources\",\"others\"],\"data_sources_others\":\"test\",\"tools_used_to_gather\":[\"survey/questionnare\",\"exposure/immersions\",\"KII/FGDs\",\"validation sessions\",\"ocular visit\",\"documents review\",\"others_tools\"],\"tools_used_to_gather_others\":\"test\",\"means_employed_to_verify\":[\"survey/questionnare\",\"exposure/immersions\",\"KII/FGDs\",\"validation sessions\",\"ocular visit\",\"documents review\",\"community meetings\",\"others\"],\"means_employed_to_verify_others\":\"test\",\"who_collected\":[\"faculty\",\"government agency\",\"undergraduate students\",\"partner community/org./institution\",\"graduate students\",\"deloaded researcher\",\"others\"],\"who_collected_others\":\"test\",\"bases_for_proposing_ppa\":\"\",\"means_employed_to_ensure_responsiveness\":\"\",\"productivity_dimension\":[\"production of new technology\",\"transfer of existing technology\",\"utilization of existing technology\",\"refinement/modification of existing technology\",\"training or capacity-building for the use of Technology\",\"others\"],\"productivity_dimension_others\":\"test\",\"economic_dimension\":[\"generation of new livelihood projects/opportunities\",\"enhancement of partner\\u2019s current livelihood\",\"employability of partners at\",\"measurable increase in the income of partners\",\"others\"],\"employability_of_partners\":\"test\",\"economic_dimension_others\":\"test\",\"social_dimension\":[\"households\",\"youth(male)\",\"Local Government Units\",\"Organizations/Associations\",\"senior citizens(male)\",\"infants(boy)\",\"infants(girl)\",\"others\"],\"social_dimension_household\":\"3\",\"social_dimension_youth_male\":\"1\",\"social_dimension_local_government_unit\":\"3\",\"social_dimension_youth_female\":\"\",\"social_dimension_organization\":\"1\",\"social_dimension_children_boy\":\"\",\"social_dimension_senior_citizen_male\":\"1\",\"social_dimension_children_girl\":\"\",\"social_dimension_senior_citizen_female\":\"\",\"social_dimension_infants_boy\":\"1\",\"social_dimension_adults_male\":\"\",\"social_dimension_infants_girl\":\"3\",\"social_dimension_adults_female\":\"\",\"social_dimension_others\":\"test\",\"social_dimension_others_count\":\"12\",\"environment_dimension\":[\"River Management\",\"Greening Initiatives\",\"Mangrove Planting\",\"Clean-up Drives\",\"Beautification Activities\",\"others\"],\"environment_dimension_others\":\"test environment\",\"government_dimension\":[\"networking with local government units and community leaders\",\"funding support from local government units\",\"funding support from other partners\",\"established counterparts from local government units\",\"established counterparts from other partners\",\"MOA/MOU with LGUs\",\"MOA/MOU with other partners\",\"policy advocacy by USC faculty/students/staff\",\"policy change initiatives by LGUs\",\"others\"],\"government_dimension_others\":\"tesst\",\"hours_needed_to_prepare\":\"3\",\"hours_needed_to_complete\":\"1\",\"faculty_members_involved_count\":\"3\",\"course_based_students_involved_count\":\"2\",\"student_organization_members_involved_count\":\"3\",\"staff_involved_count\":\"1\",\"campaign_materials_to_produce_count\":\"3\",\"campaign_materials_to_improve_count\":\"2\",\"curriculum_programs_to_develop_count\":\"1\",\"curriculum_programs_to_improve_count\":\"1\",\"proposals_to_develop_count\":\"1\",\"papers_presented_count\":\"2\",\"papers_published_count\":\"1\",\"policies_to_advocate_count\":\"1\",\"preparation_expertise_needed_faculty_members\":\"Test draft1\",\"preparation_expertise_needed_students\":\"Test draft1\",\"preparation_roles_faculty_members\":\"Test draft1\",\"preparation_roles_students\":\"Test draft1\",\"implementation_expertise_needed_faculty_members\":\"Test draft1\",\"implementation_expertise_needed_students\":\"Test draft1\",\"implementation_roles_faculty_members\":\"Test draft1\",\"implementation_roles_students\":\"Test draft1\",\"nature_of_linkage\":\"1\",\"date_signed\":\"12/29/2017\",\"signatories_for_usc\":\"test\",\"signatories_for_partner\":\"test\",\"major_duties_of_usc_unit\":\"test\",\"major_duties_of_partner\":\"test\",\"date_linkage_started\":\"11/29/2017\",\"who_initiated_linkage\":\"Test draft\",\"activities_done\":\"Test draft\",\"opportunities_identified\":\"Test draft1\",\"challenges_encountered\":\"Test draft1\",\"button_type\":\"save_prop\"}', 26, 0, 1, 0, '', '2017-12-14 11:49:14', 0, 0, 0),
(5, '{\"title\":\"Test draft\",\"user_id\":\"\",\"form_type\":\"A&B\",\"school\":\"\",\"proposal_id\":\"5\",\"department\":\"\",\"organization\":\"\",\"inclusive_date1\":\"11/29/2017\",\"inclusive_date2\":\"11/30/2017\",\"venue\":\"Test draft\",\"rationale_and_contextualization\":\"Test draft\",\"goal_objectives_and_outcomes\":\"Test draft\",\"participants_partners_and_beneficiaries\":\"Test draft\",\"tentative_date\":[\"11/29/2017\",\"11/30/2017\"],\"activities\":[\"Test draft1\",\"Test draft2\"],\"participants_needed\":[\"2\",\"3\"],\"persons_incharge\":[\"Test draft1\",\"Test draft2\"],\"a_particulars\":[\"Test draft1\",\"Test draft2\"],\"a_frequency\":[\"1\",\"2\"],\"a_quantity\":[\"2\",\"3\"],\"a_amount\":[\"100\",\"100\"],\"a_subtotal\":[\"200\",\"600\"],\"grand_total\":\"800.00\",\"unit_responsible\":[\"CES Office\"],\"school_of_arts_and_sciences\":\"0\",\"school_of_architecture_fine_arts_and_design\":\"0\",\"school_of_education\":\"0\",\"school_of_engineering\":\"0\",\"school_of_business_and_economics\":\"0\",\"school_of_health_care_profession\":\"0\",\"school_of_law_and_governance\":\"0\",\"support_unit\":\"0\",\"term\":\"Short Term-\",\"semester\":\"2 Semesters\",\"semester_others\":\"\",\"locus_and_leadership\":[\"Course-based(undergraduate)\",\"Course-based(graduate)\",\"Student Organization-led\",\"Department-led\",\"School-wide\",\"Alumni-led\",\"Support-unit Led\",\"SVD-Led\"],\"locus_and_leadership_others\":\"\",\"nature_of_the_program\":[\"Training Program\",\"Technical Assistance\",\"Advisory Services\",\"others\"],\"nature_of_the_program_others\":\"test\",\"program_area\":[\"Productivity-Oriented Initiatives\",\"Health Advocacy and Wellness Promotion\",\"Literacy, Values Formation and Life-long Learning\",\"Building Christian Communities\",\"Social Welfare Services\",\"Information Sharing\",\"Environmental Sustainability\",\"Heritage Conservation\",\"Issue Advocacy and Rights Promotion\",\"Rural and Urban Development\"],\"prelimasschoice_contextdimension\":[\"unit have done preliminary needs assessment\"],\"unit_personnel_involved\":[\"faculty members\",\"student org./majors\",\"class instructor\",\"course enrollees\"],\"unit_personnel_involved_others\":\"\",\"data_sources_others\":\"\",\"tools_used_to_gather_others\":\"\",\"means_employed_to_verify_others\":\"\",\"who_collected_others\":\"\",\"bases_for_proposing_ppa\":\"\",\"means_employed_to_ensure_responsiveness\":\"\",\"productivity_dimension\":[\"production of new technology\",\"transfer of existing technology\",\"utilization of existing technology\",\"refinement/modification of existing technology\",\"training or capacity-building for the use of Technology\"],\"productivity_dimension_others\":\"test\",\"economic_dimension\":[\"generation of new livelihood projects/opportunities\",\"enhancement of partner\\u2019s current livelihood\",\"employability of partners at\",\"measurable increase in the income of partners\",\"others\"],\"employability_of_partners\":\"test\",\"economic_dimension_others\":\"test\",\"social_dimension\":[\"households\",\"Local Government Units\"],\"social_dimension_household\":\"3\",\"social_dimension_youth_male\":\"\",\"social_dimension_local_government_unit\":\"3\",\"social_dimension_youth_female\":\"\",\"social_dimension_organization\":\"\",\"social_dimension_children_boy\":\"\",\"social_dimension_senior_citizen_male\":\"\",\"social_dimension_children_girl\":\"\",\"social_dimension_senior_citizen_female\":\"\",\"social_dimension_infants_boy\":\"\",\"social_dimension_adults_male\":\"\",\"social_dimension_infants_girl\":\"\",\"social_dimension_adults_female\":\"\",\"social_dimension_others\":\"\",\"social_dimension_others_count\":\"\",\"environment_dimension\":[\"River Management\",\"Greening Initiatives\",\"Mangrove Planting\",\"Clean-up Drives\",\"Beautification Activities\",\"others\"],\"environment_dimension_others\":\"test\",\"government_dimension\":[\"networking with local government units and community leaders\",\"funding support from local government units\",\"funding support from other partners\",\"established counterparts from local government units\",\"established counterparts from other partners\",\"MOA/MOU with LGUs\",\"MOA/MOU with other partners\",\"policy advocacy by USC faculty/students/staff\",\"policy change initiatives by LGUs\",\"others\"],\"government_dimension_others\":\"test\",\"hours_needed_to_prepare\":\"3\",\"hours_needed_to_complete\":\"\",\"faculty_members_involved_count\":\"3\",\"course_based_students_involved_count\":\"\",\"student_organization_members_involved_count\":\"3\",\"staff_involved_count\":\"\",\"campaign_materials_to_produce_count\":\"3\",\"campaign_materials_to_improve_count\":\"\",\"curriculum_programs_to_develop_count\":\"\",\"curriculum_programs_to_improve_count\":\"\",\"proposals_to_develop_count\":\"\",\"papers_presented_count\":\"\",\"papers_published_count\":\"\",\"policies_to_advocate_count\":\"\",\"preparation_expertise_needed_faculty_members\":\"Test draft1\",\"preparation_expertise_needed_students\":\"Test draft1\",\"preparation_roles_faculty_members\":\"Test draft1\",\"preparation_roles_students\":\"Test draft1\",\"implementation_expertise_needed_faculty_members\":\"Test draft1\",\"implementation_expertise_needed_students\":\"Test draft1\",\"implementation_roles_faculty_members\":\"Test draft1\",\"implementation_roles_students\":\"Test draft1\",\"nature_of_linkage\":\"1\",\"date_signed\":\"12/29/2017\",\"signatories_for_usc\":\"test\",\"signatories_for_partner\":\"test\",\"major_duties_of_usc_unit\":\"test\",\"major_duties_of_partner\":\"test\",\"date_linkage_started\":\"11/29/2017\",\"who_initiated_linkage\":\"Test draft\",\"activities_done\":\"Test draft\",\"opportunities_identified\":\"Test draft\",\"challenges_encountered\":\"Test draft\",\"button_type\":\"save_prop\"}', 26, 0, 1, 0, '', '2017-12-14 11:49:14', 0, 0, 0),
(6, '{\"title\":\"Test draft\",\"user_id\":\"26\",\"form_type\":\"A&B\",\"school\":\"School of Business and Economics\",\"department\":\"Business Administration\",\"organization\":\"\",\"inclusive_date1\":\"11/29/2017\",\"inclusive_date2\":\"11/30/2017\",\"venue\":\"Test draft\",\"rationale_and_contextualization\":\"Test draft\",\"goal_objectives_and_outcomes\":\"Test draft\",\"participants_partners_and_beneficiaries\":\"Test draft\",\"tentative_date\":[\"11/29/2017\",\"11/30/2017\"],\"activities\":[\"Test draft1\",\"Test draft2\"],\"participants_needed\":[\"2\",\"3\"],\"persons_incharge\":[\"Test draft1\",\"Test draft2\"],\"a_particulars\":[\"Test draft1\",\"Test draft2\"],\"a_frequency\":[\"1\",\"2\"],\"a_quantity\":[\"2\",\"3\"],\"a_amount\":[\"100\",\"100\"],\"a_subtotal\":[\"200\",\"600\"],\"grand_total\":\"800.00\",\"unit_responsible\":[\"CES Office\"],\"school_of_arts_and_sciences\":\"0\",\"school_of_architecture_fine_arts_and_design\":\"0\",\"school_of_education\":\"0\",\"school_of_engineering\":\"0\",\"school_of_business_and_economics\":\"0\",\"school_of_health_care_profession\":\"0\",\"school_of_law_and_governance\":\"0\",\"support_unit\":\"0\",\"term\":\"Short Term-\",\"semester\":\"2 Semesters\",\"semester_others\":\"\",\"locus_and_leadership\":[\"Course-based(undergraduate)\",\"Department-led\"],\"locus_and_leadership_others\":\"\",\"nature_of_the_program\":[\"Training Program\",\"Technical Assistance\",\"Advisory Services\"],\"nature_of_the_program_others\":\"\",\"program_area\":[\"Productivity-Oriented Initiatives\",\"Literacy, Values Formation and Life-long Learning\",\"Social Welfare Services\",\"Environmental Sustainability\"],\"prelimasschoice_contextdimension\":[\"unit have done preliminary needs assessment\"],\"unit_personnel_involved\":[\"faculty members\",\"student org./majors\",\"class instructor\",\"course enrollees\"],\"unit_personnel_involved_others\":\"\",\"data_sources_others\":\"\",\"tools_used_to_gather_others\":\"\",\"means_employed_to_verify_others\":\"\",\"who_collected_others\":\"\",\"bases_for_proposing_ppa\":\"\",\"means_employed_to_ensure_responsiveness\":\"\",\"productivity_dimension\":[\"production of new technology\",\"transfer of existing technology\",\"utilization of existing technology\",\"refinement/modification of existing technology\"],\"productivity_dimension_others\":\"\",\"economic_dimension\":[\"generation of new livelihood projects/opportunities\",\"employability of partners at\"],\"employability_of_partners\":\"\",\"economic_dimension_others\":\"\",\"social_dimension\":[\"households\",\"Local Government Units\"],\"social_dimension_household\":\"3\",\"social_dimension_youth_male\":\"\",\"social_dimension_local_government_unit\":\"3\",\"social_dimension_youth_female\":\"\",\"social_dimension_organization\":\"\",\"social_dimension_children_boy\":\"\",\"social_dimension_senior_citizen_male\":\"\",\"social_dimension_children_girl\":\"\",\"social_dimension_senior_citizen_female\":\"\",\"social_dimension_infants_boy\":\"\",\"social_dimension_adults_male\":\"\",\"social_dimension_infants_girl\":\"\",\"social_dimension_adults_female\":\"\",\"social_dimension_others\":\"\",\"social_dimension_others_count\":\"\",\"environment_dimension\":[\"River Management\",\"Mangrove Planting\",\"Beautification Activities\"],\"environment_dimension_others\":\"\",\"government_dimension\":[\"networking with local government units and community leaders\",\"funding support from other partners\",\"policy change initiatives by LGUs\"],\"government_dimension_others\":\"\",\"hours_needed_to_prepare\":\"3\",\"hours_needed_to_complete\":\"\",\"faculty_members_involved_count\":\"3\",\"course_based_students_involved_count\":\"\",\"student_organization_members_involved_count\":\"3\",\"staff_involved_count\":\"\",\"campaign_materials_to_produce_count\":\"3\",\"campaign_materials_to_improve_count\":\"\",\"curriculum_programs_to_develop_count\":\"\",\"curriculum_programs_to_improve_count\":\"\",\"proposals_to_develop_count\":\"\",\"papers_presented_count\":\"\",\"papers_published_count\":\"\",\"policies_to_advocate_count\":\"\",\"preparation_expertise_needed_faculty_members\":\"Test draft\",\"preparation_expertise_needed_students\":\"Test draft\",\"preparation_roles_faculty_members\":\"Test draft\",\"preparation_roles_students\":\"Test draft\",\"implementation_expertise_needed_faculty_members\":\"Test draft\",\"implementation_expertise_needed_students\":\"Test draft\",\"implementation_roles_faculty_members\":\"Test draft\",\"implementation_roles_students\":\"Test draft\",\"date_signed\":\"\",\"signatories_for_usc\":\"\",\"signatories_for_partner\":\"\",\"major_duties_of_usc_unit\":\"\",\"major_duties_of_partner\":\"\",\"moa\":\"without memorandum of understanding/memorandum of agreement\",\"date_linkage_started\":\"11/29/2017\",\"who_initiated_linkage\":\"Test draft\",\"activities_done\":\"Test draft\",\"opportunities_identified\":\"Test draft\",\"challenges_encountered\":\"Test draft\"}', 26, 0, 1, 0, '', '2017-12-14 11:49:14', 0, 0, 0),
(7, '{\"title\":\"test feb 22 for approval cycle\",\"user_id\":\"26\",\"form_type\":\"A&B\",\"school\":\"School of Business and Economics\",\"proposal_id\":\"7\",\"department\":\"Business Administration\",\"organization\":\"\",\"inclusive_date1\":\"11/29/2017\",\"inclusive_date2\":\"11/30/2017\",\"venue\":\"Test draft\",\"rationale_and_contextualization\":\"Test draft\",\"goal_objectives_and_outcomes\":\"Test draft\",\"participants_partners_and_beneficiaries\":\"Test draft\",\"tentative_date\":[\"11/29/2017\",\"11/30/2017\"],\"activities\":[\"Test draft1\",\"Test draft2\"],\"participants_needed\":[\"2\",\"3\"],\"persons_incharge\":[\"Test draft1\",\"Test draft2\"],\"a_particulars\":[\"Test draft1\",\"Test draft2\"],\"a_frequency\":[\"1\",\"2\"],\"a_quantity\":[\"2\",\"3\"],\"a_amount\":[\"100\",\"100\"],\"a_subtotal\":[\"200\",\"600\"],\"grand_total\":\"800.00\",\"unit_responsible\":[\"CES Office\"],\"school_of_arts_and_sciences\":\"0\",\"school_of_architecture_fine_arts_and_design\":\"0\",\"school_of_education\":\"0\",\"school_of_engineering\":\"0\",\"school_of_business_and_economics\":\"0\",\"school_of_health_care_profession\":\"0\",\"school_of_law_and_governance\":\"0\",\"support_unit\":\"0\",\"term\":\"Short Term-\",\"semester\":\"others\",\"semester_others\":\"\",\"locus_and_leadership\":[\"Course-based(undergraduate)\",\"Department-led\"],\"locus_and_leadership_others\":\"\",\"nature_of_the_program\":[\"Training Program\",\"Community Outreach\",\"Technical Assistance\",\"Technology transfer and utilization\",\"Advisory Services\",\"others\",\"Information Services\"],\"nature_of_the_program_others\":\"test\",\"program_area\":[\"Productivity-Oriented Initiatives\",\"Health Advocacy and Wellness Promotion\",\"Literacy, Values Formation and Life-long Learning\",\"Building Christian Communities\",\"Social Welfare Services\",\"Information Sharing\",\"Environmental Sustainability\",\"Heritage Conservation\",\"Issue Advocacy and Rights Promotion\",\"Rural and Urban Development\"],\"prelimasschoice_contextdimension\":[\"unit have done preliminary needs assessment\"],\"unit_personnel_involved\":[\"faculty members\",\"student org./majors\",\"class instructor\",\"course enrollees\"],\"unit_personnel_involved_others\":\"\",\"data_sources_others\":\"\",\"tools_used_to_gather_others\":\"\",\"means_employed_to_verify_others\":\"\",\"who_collected_others\":\"\",\"bases_for_proposing_ppa\":\"\",\"means_employed_to_ensure_responsiveness\":\"\",\"productivity_dimension\":[\"production of new technology\",\"transfer of existing technology\",\"utilization of existing technology\",\"refinement/modification of existing technology\",\"training or capacity-building for the use of Technology\",\"others\"],\"productivity_dimension_others\":\"test\",\"economic_dimension\":[\"generation of new livelihood projects/opportunities\",\"enhancement of partner\\u2019s current livelihood\"],\"employability_of_partners\":\"\",\"economic_dimension_others\":\"\",\"social_dimension\":[\"households\",\"Local Government Units\"],\"social_dimension_household\":\"3\",\"social_dimension_youth_male\":\"\",\"social_dimension_local_government_unit\":\"3\",\"social_dimension_youth_female\":\"\",\"social_dimension_organization\":\"\",\"social_dimension_children_boy\":\"\",\"social_dimension_senior_citizen_male\":\"\",\"social_dimension_children_girl\":\"\",\"social_dimension_senior_citizen_female\":\"\",\"social_dimension_infants_boy\":\"\",\"social_dimension_adults_male\":\"\",\"social_dimension_infants_girl\":\"\",\"social_dimension_adults_female\":\"\",\"social_dimension_others\":\"\",\"social_dimension_others_count\":\"\",\"environment_dimension\":[\"River Management\",\"Mangrove Planting\",\"Beautification Activities\"],\"environment_dimension_others\":\"\",\"government_dimension\":[\"networking with local government units and community leaders\",\"funding support from local government units\",\"funding support from other partners\",\"established counterparts from local government units\",\"established counterparts from other partners\",\"MOA/MOU with LGUs\",\"MOA/MOU with other partners\",\"policy advocacy by USC faculty/students/staff\",\"policy change initiatives by LGUs\",\"others\"],\"government_dimension_others\":\"test\",\"hours_needed_to_prepare\":\"3\",\"hours_needed_to_complete\":\"\",\"faculty_members_involved_count\":\"3\",\"course_based_students_involved_count\":\"\",\"student_organization_members_involved_count\":\"3\",\"staff_involved_count\":\"\",\"campaign_materials_to_produce_count\":\"3\",\"campaign_materials_to_improve_count\":\"\",\"curriculum_programs_to_develop_count\":\"\",\"curriculum_programs_to_improve_count\":\"\",\"proposals_to_develop_count\":\"\",\"papers_presented_count\":\"\",\"papers_published_count\":\"\",\"policies_to_advocate_count\":\"\",\"preparation_expertise_needed_faculty_members\":\"Test draft\",\"preparation_expertise_needed_students\":\"Test draft\",\"preparation_roles_faculty_members\":\"Test draft\",\"preparation_roles_students\":\"Test draft\",\"implementation_expertise_needed_faculty_members\":\"Test draft\",\"implementation_expertise_needed_students\":\"Test draft\",\"implementation_roles_faculty_members\":\"Test draft\",\"implementation_roles_students\":\"Test draft\",\"date_signed\":\"\",\"signatories_for_usc\":\"\",\"signatories_for_partner\":\"\",\"major_duties_of_usc_unit\":\"\",\"major_duties_of_partner\":\"\",\"date_linkage_started\":\"11/29/2017\",\"who_initiated_linkage\":\"Test draft\",\"activities_done\":\"Test draft\",\"opportunities_identified\":\"Test draft\",\"challenges_encountered\":\"Test draft\",\"button_type\":\"submit_prop\"}', 26, 12, 1, 1, '', '2017-12-14 11:49:14', 0, 0, 1),
(8, '{\"title\":\"Testing today feb 21\",\"user_id\":\"26\",\"form_type\":\"A&B\",\"school\":\"School of Business and Economics\",\"proposal_id\":\"8\",\"department\":\"Business Administration\",\"organization\":\"\",\"inclusive_date1\":\"11/29/2017\",\"inclusive_date2\":\"11/30/2017\",\"venue\":\"Test draft\",\"rationale_and_contextualization\":\"Test draft\",\"goal_objectives_and_outcomes\":\"Test draft\",\"participants_partners_and_beneficiaries\":\"Test draft\",\"tentative_date\":[\"11/29/2017\",\"11/30/2017\"],\"activities\":[\"Test draft1\",\"Test draft2\"],\"participants_needed\":[\"2\",\"3\"],\"persons_incharge\":[\"Test draft1\",\"Test draft2\"],\"a_particulars\":[\"Test draft1\",\"Test draft2\"],\"a_frequency\":[\"1\",\"2\"],\"a_quantity\":[\"2\",\"3\"],\"a_amount\":[\"100\",\"100\"],\"a_subtotal\":[\"200\",\"600\"],\"grand_total\":\"800.00\",\"unit_responsible\":[\"CES Office\"],\"school_of_arts_and_sciences\":\"0\",\"school_of_architecture_fine_arts_and_design\":\"0\",\"school_of_education\":\"0\",\"school_of_engineering\":\"0\",\"school_of_business_and_economics\":\"0\",\"school_of_health_care_profession\":\"0\",\"school_of_law_and_governance\":\"0\",\"support_unit\":\"0\",\"term\":\"Short Term-\",\"semester\":\"2 Semesters\",\"semester_others\":\"\",\"locus_and_leadership\":[\"Course-based(undergraduate)\",\"Department-led\"],\"locus_and_leadership_others\":\"\",\"nature_of_the_program\":[\"Training Program\",\"Technical Assistance\",\"Advisory Services\"],\"nature_of_the_program_others\":\"\",\"program_area\":[\"Productivity-Oriented Initiatives\",\"Literacy, Values Formation and Life-long Learning\",\"Social Welfare Services\",\"Environmental Sustainability\"],\"prelimasschoice_contextdimension\":[\"unit have done preliminary needs assessment\"],\"unit_personnel_involved\":[\"faculty members\",\"student org./majors\",\"class instructor\",\"course enrollees\"],\"unit_personnel_involved_others\":\"\",\"data_sources_others\":\"\",\"tools_used_to_gather_others\":\"\",\"means_employed_to_verify_others\":\"\",\"who_collected_others\":\"\",\"bases_for_proposing_ppa\":\"\",\"means_employed_to_ensure_responsiveness\":\"\",\"productivity_dimension\":[\"production of new technology\",\"transfer of existing technology\",\"utilization of existing technology\",\"refinement/modification of existing technology\"],\"productivity_dimension_others\":\"\",\"economic_dimension\":[\"generation of new livelihood projects/opportunities\",\"enhancement of partner\\u2019s current livelihood\"],\"employability_of_partners\":\"\",\"economic_dimension_others\":\"\",\"social_dimension\":[\"households\",\"Local Government Units\"],\"social_dimension_household\":\"3\",\"social_dimension_youth_male\":\"\",\"social_dimension_local_government_unit\":\"3\",\"social_dimension_youth_female\":\"\",\"social_dimension_organization\":\"\",\"social_dimension_children_boy\":\"\",\"social_dimension_senior_citizen_male\":\"\",\"social_dimension_children_girl\":\"\",\"social_dimension_senior_citizen_female\":\"\",\"social_dimension_infants_boy\":\"\",\"social_dimension_adults_male\":\"\",\"social_dimension_infants_girl\":\"\",\"social_dimension_adults_female\":\"\",\"social_dimension_others\":\"\",\"social_dimension_others_count\":\"\",\"environment_dimension\":[\"River Management\",\"Mangrove Planting\",\"Beautification Activities\"],\"environment_dimension_others\":\"\",\"government_dimension\":[\"networking with local government units and community leaders\",\"funding support from other partners\",\"policy change initiatives by LGUs\"],\"government_dimension_others\":\"\",\"hours_needed_to_prepare\":\"3\",\"hours_needed_to_complete\":\"\",\"faculty_members_involved_count\":\"3\",\"course_based_students_involved_count\":\"\",\"student_organization_members_involved_count\":\"3\",\"staff_involved_count\":\"\",\"campaign_materials_to_produce_count\":\"3\",\"campaign_materials_to_improve_count\":\"\",\"curriculum_programs_to_develop_count\":\"\",\"curriculum_programs_to_improve_count\":\"\",\"proposals_to_develop_count\":\"\",\"papers_presented_count\":\"\",\"papers_published_count\":\"\",\"policies_to_advocate_count\":\"\",\"preparation_expertise_needed_faculty_members\":\"Test draft\",\"preparation_expertise_needed_students\":\"Test draft\",\"preparation_roles_faculty_members\":\"Test draft\",\"preparation_roles_students\":\"Test draft\",\"implementation_expertise_needed_faculty_members\":\"Test draft\",\"implementation_expertise_needed_students\":\"Test draft\",\"implementation_roles_faculty_members\":\"Test draft\",\"implementation_roles_students\":\"Test draft\",\"date_signed\":\"\",\"signatories_for_usc\":\"\",\"signatories_for_partner\":\"\",\"major_duties_of_usc_unit\":\"\",\"major_duties_of_partner\":\"\",\"date_linkage_started\":\"11/29/2017\",\"who_initiated_linkage\":\"Test draft\",\"activities_done\":\"Test draft\",\"opportunities_identified\":\"Test draft\",\"challenges_encountered\":\"Test draft\",\"button_type\":\"submit_prop\"}', 26, 10, 1, 0, '', '2017-12-14 11:49:14', 0, 0, 1),
(9, '{\"title\":\"Testing today\",\"user_id\":\"26\",\"form_type\":\"A&B\",\"school\":\"School of Business and Economics\",\"proposal_id\":\"9\",\"department\":\"Business Administration\",\"organization\":\"\",\"inclusive_date1\":\"11/29/2017\",\"inclusive_date2\":\"11/30/2017\",\"venue\":\"Test draft\",\"rationale_and_contextualization\":\"Test draft\",\"goal_objectives_and_outcomes\":\"Test draft\",\"participants_partners_and_beneficiaries\":\"Test draft\",\"tentative_date\":[\"11/29/2017\",\"11/30/2017\"],\"activities\":[\"Test draft1\",\"Test draft2\"],\"participants_needed\":[\"2\",\"3\"],\"persons_incharge\":[\"Test draft1\",\"Test draft2\"],\"a_particulars\":[\"Test draft1\",\"Test draft2\"],\"a_frequency\":[\"1\",\"2\"],\"a_quantity\":[\"2\",\"3\"],\"a_amount\":[\"100\",\"100\"],\"a_subtotal\":[\"200\",\"600\"],\"grand_total\":\"800.00\",\"unit_responsible\":[\"CES Office\"],\"school_of_arts_and_sciences\":\"0\",\"school_of_architecture_fine_arts_and_design\":\"0\",\"school_of_education\":\"0\",\"school_of_engineering\":\"0\",\"school_of_business_and_economics\":\"0\",\"school_of_health_care_profession\":\"0\",\"school_of_law_and_governance\":\"0\",\"support_unit\":\"0\",\"term\":\"Short Term-\",\"semester\":\"2 Semesters\",\"semester_others\":\"\",\"locus_and_leadership\":[\"Course-based(undergraduate)\",\"Department-led\"],\"locus_and_leadership_others\":\"\",\"nature_of_the_program\":[\"Training Program\",\"Technical Assistance\",\"Advisory Services\"],\"nature_of_the_program_others\":\"\",\"program_area\":[\"Productivity-Oriented Initiatives\",\"Literacy, Values Formation and Life-long Learning\",\"Social Welfare Services\",\"Environmental Sustainability\"],\"prelimasschoice_contextdimension\":[\"unit have done preliminary needs assessment\"],\"unit_personnel_involved\":[\"faculty members\",\"student org./majors\",\"class instructor\",\"course enrollees\"],\"unit_personnel_involved_others\":\"\",\"data_sources_others\":\"\",\"tools_used_to_gather_others\":\"\",\"means_employed_to_verify_others\":\"\",\"who_collected_others\":\"\",\"bases_for_proposing_ppa\":\"\",\"means_employed_to_ensure_responsiveness\":\"\",\"productivity_dimension\":[\"production of new technology\",\"transfer of existing technology\",\"utilization of existing technology\",\"refinement/modification of existing technology\"],\"productivity_dimension_others\":\"\",\"economic_dimension\":[\"generation of new livelihood projects/opportunities\",\"enhancement of partner\\u2019s current livelihood\"],\"employability_of_partners\":\"\",\"economic_dimension_others\":\"\",\"social_dimension\":[\"households\",\"youth(male)\"],\"social_dimension_household\":\"3\",\"social_dimension_youth_male\":\"3\",\"social_dimension_local_government_unit\":\"3\",\"social_dimension_youth_female\":\"3\",\"social_dimension_organization\":\"3\",\"social_dimension_children_boy\":\"3\",\"social_dimension_senior_citizen_male\":\"3\",\"social_dimension_children_girl\":\"3\",\"social_dimension_senior_citizen_female\":\"3\",\"social_dimension_infants_boy\":\"3\",\"social_dimension_adults_male\":\"3\",\"social_dimension_infants_girl\":\"3\",\"social_dimension_adults_female\":\"3\",\"social_dimension_others\":\"\",\"social_dimension_others_count\":\"3\",\"environment_dimension\":[\"River Management\",\"Greening Initiatives\",\"Mangrove Planting\"],\"environment_dimension_others\":\"\",\"government_dimension\":[\"networking with local government units and community leaders\",\"funding support from local government units\",\"funding support from other partners\"],\"government_dimension_others\":\"\",\"hours_needed_to_prepare\":\"3\",\"hours_needed_to_complete\":\"\",\"faculty_members_involved_count\":\"3\",\"course_based_students_involved_count\":\"\",\"student_organization_members_involved_count\":\"3\",\"staff_involved_count\":\"\",\"campaign_materials_to_produce_count\":\"3\",\"campaign_materials_to_improve_count\":\"\",\"curriculum_programs_to_develop_count\":\"\",\"curriculum_programs_to_improve_count\":\"\",\"proposals_to_develop_count\":\"\",\"papers_presented_count\":\"\",\"papers_published_count\":\"\",\"policies_to_advocate_count\":\"\",\"preparation_expertise_needed_faculty_members\":\"Test draft\",\"preparation_expertise_needed_students\":\"Test draft\",\"preparation_roles_faculty_members\":\"Test draft\",\"preparation_roles_students\":\"Test draft\",\"implementation_expertise_needed_faculty_members\":\"Test draft\",\"implementation_expertise_needed_students\":\"Test draft\",\"implementation_roles_faculty_members\":\"Test draft\",\"implementation_roles_students\":\"Test draft\",\"date_signed\":\"\",\"signatories_for_usc\":\"\",\"signatories_for_partner\":\"\",\"major_duties_of_usc_unit\":\"\",\"major_duties_of_partner\":\"\",\"date_linkage_started\":\"11/29/2017\",\"who_initiated_linkage\":\"Test draft\",\"activities_done\":\"Test draft\",\"opportunities_identified\":\"Test draft\",\"challenges_encountered\":\"Test draft\",\"button_type\":\"submit_prop\"}', 26, 0, 1, 0, '', '2017-12-14 11:49:14', 0, 0, 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `proposal_json_full_info`
-- (See below for the actual view)
--
CREATE TABLE `proposal_json_full_info` (
`user_id` int(11)
,`department` varchar(50)
,`proposal_json_format` text
,`proposal_id` int(11)
,`status` int(11)
,`form_type` int(11)
,`noted_by_stat` int(11)
,`noted_by_comments` text
,`office` varchar(50)
,`organization` varchar(50)
,`firstname` varchar(50)
,`lastname` varchar(50)
,`datetime_created` datetime
,`datetime_modified` datetime
);

-- --------------------------------------------------------

--
-- Table structure for table `rationale_to_beneficiaries`
--

CREATE TABLE `rationale_to_beneficiaries` (
  `id` int(11) NOT NULL,
  `rationale_and_contextualization` text,
  `goal_objectives_and_outcomes` text,
  `participants_partnersand_beneficiaries` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `report_d`
--

CREATE TABLE `report_d` (
  `id` int(11) NOT NULL,
  `fd_title` varchar(255) DEFAULT NULL,
  `fd_school` varchar(255) DEFAULT NULL,
  `fd_dept` varchar(255) DEFAULT NULL,
  `fd_venue` varchar(255) DEFAULT NULL,
  `introduction` varchar(255) DEFAULT NULL,
  `date_start` varchar(150) DEFAULT NULL,
  `date_end` varchar(150) DEFAULT NULL,
  `participants_partners_and_beneficiaries` varchar(255) DEFAULT NULL,
  `perceived_by_beneficiaries` varchar(255) DEFAULT NULL,
  `perceived_by_students` varchar(255) DEFAULT NULL,
  `perceived_by_faculty` varchar(255) DEFAULT NULL,
  `challenges_encountered` varchar(255) DEFAULT NULL,
  `creator_id` int(11) DEFAULT NULL,
  `who_created` varchar(50) DEFAULT NULL,
  `creators_department` varchar(80) DEFAULT NULL,
  `creators_school` varchar(80) DEFAULT NULL,
  `datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `report_e`
--

CREATE TABLE `report_e` (
  `id` int(11) NOT NULL,
  `title_of_program` varchar(50) DEFAULT NULL,
  `unit_responsible` varchar(200) DEFAULT NULL,
  `program_duration` varchar(30) DEFAULT NULL,
  `act_title` varchar(255) DEFAULT NULL,
  `incdate` varchar(255) DEFAULT NULL,
  `totalhours` varchar(255) DEFAULT NULL,
  `final_target_groups` varchar(255) DEFAULT NULL,
  `collaborators` varchar(200) DEFAULT NULL,
  `background_of_issue` varchar(255) DEFAULT NULL,
  `major_achievements_of_program` varchar(255) DEFAULT NULL,
  `results_of_activities_to_goal` varchar(255) DEFAULT NULL,
  `overall_strategy_adopted` varchar(255) DEFAULT NULL,
  `goal_title` varchar(150) DEFAULT NULL,
  `spec_obj` varchar(255) DEFAULT NULL,
  `spec_act` varchar(200) DEFAULT NULL,
  `outputs` varchar(255) DEFAULT NULL,
  `observed_impact_of_program` varchar(255) DEFAULT NULL,
  `challenges_and_measures_undertaken` varchar(255) DEFAULT NULL,
  `good_practices` varchar(255) DEFAULT NULL,
  `lessons_learned_from_program` varchar(255) DEFAULT NULL,
  `intraname` varchar(200) DEFAULT NULL,
  `intracontribs` varchar(255) DEFAULT NULL,
  `extraname` varchar(255) DEFAULT NULL,
  `extracontribs` varchar(255) DEFAULT NULL,
  `unit_relationship` varchar(255) DEFAULT NULL,
  `other_links_gained_from_program` varchar(255) DEFAULT NULL,
  `witness_to_the_word` varchar(255) DEFAULT NULL,
  `ways_forward` varchar(255) DEFAULT NULL,
  `creator_id` int(11) DEFAULT NULL,
  `who_created` varchar(50) DEFAULT NULL,
  `creators_department` varchar(80) DEFAULT NULL,
  `creators_school` varchar(80) DEFAULT NULL,
  `datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `request_area`
--

CREATE TABLE `request_area` (
  `id` int(11) NOT NULL,
  `requester_chosenradio` text,
  `communityspec` text,
  `organizationspec` text,
  `institutionspec` text,
  `mode_of_req_chosenradio` text,
  `mode_otherspec` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reviewers`
--

CREATE TABLE `reviewers` (
  `review_id` int(11) NOT NULL,
  `proposal_id` int(11) NOT NULL,
  `reviewer_id` int(11) NOT NULL,
  `review_status` int(11) NOT NULL,
  `rationale_area` int(11) DEFAULT NULL,
  `goals_area` int(11) DEFAULT NULL,
  `participants_area` int(11) DEFAULT NULL,
  `outlines_area` int(11) DEFAULT NULL,
  `budreq_area` int(11) DEFAULT NULL,
  `ppaprof_area` int(11) DEFAULT NULL,
  `signifmatrix_area` int(11) DEFAULT NULL,
  `implics_area` int(11) DEFAULT NULL,
  `linkageprof_area` int(11) DEFAULT NULL,
  `rationale_remarks` text,
  `goals_remarks` text,
  `participants_remarks` text,
  `outlines_remarks` text,
  `budreq_remarks` text,
  `ppaprof_remarks` text,
  `signifmatrix_remarks` text,
  `implics_remarks` text,
  `linkageprof_remarks` text,
  `total_percentage_forma` float DEFAULT NULL,
  `total_percentage_formb` float DEFAULT NULL,
  `date_reviewed` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviewers`
--

INSERT INTO `reviewers` (`review_id`, `proposal_id`, `reviewer_id`, `review_status`, `rationale_area`, `goals_area`, `participants_area`, `outlines_area`, `budreq_area`, `ppaprof_area`, `signifmatrix_area`, `implics_area`, `linkageprof_area`, `rationale_remarks`, `goals_remarks`, `participants_remarks`, `outlines_remarks`, `budreq_remarks`, `ppaprof_remarks`, `signifmatrix_remarks`, `implics_remarks`, `linkageprof_remarks`, `total_percentage_forma`, `total_percentage_formb`, `date_reviewed`) VALUES
(5, 8, 3, 1, 5, 5, 5, 5, 5, 5, 5, 5, 5, 'test remarks 2', 'test remarks 2', 'test remarks 2', 'test remarks 2', 'test remarks 2', 'test remarks 2', 'test remarks 2', 'test remarks 2', 'test remarks 2', 83.3333, 66.6667, '2018-02-22 11:59:39'),
(6, 8, 4, 1, 5, 5, 5, 5, 5, 5, 5, 5, 5, 'test remarks 2', 'test remarks 2', 'test remarks 2', 'test remarks 2', 'test remarks 2', 'test remarks 2', 'test remarks 2', 'test remarks 2', 'test remarks 2', 83.3333, 66.6667, '2018-02-22 12:01:42'),
(7, 7, 6, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Test Remarks for test feb 22', 'Test Remarks for test feb 22', 'Test Remarks for test feb 22', 'Test Remarks for test feb 22', 'Test Remarks for test feb 22', 'Test Remarks for test feb 22', 'Test Remarks for test feb 22', 'Test Remarks for test feb 22', 'Test Remarks for test feb 22', 16.6667, 13.3333, '2018-02-22 17:07:07'),
(8, 7, 16, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'test remarks on feb 22 proposal', 'test remarks on feb 22 proposal', 'test remarks on feb 22 proposal', 'test remarks on feb 22 proposal', 'test remarks on feb 22 proposal', 'test remarks on feb 22 proposal', 'test remarks on feb 22 proposal', 'test remarks on feb 22 proposal', 'test remarks on feb 22 proposal', 16.6667, 13.3333, '2018-02-22 17:14:43');

-- --------------------------------------------------------

--
-- Table structure for table `review_scores`
--

CREATE TABLE `review_scores` (
  `review_id` int(11) NOT NULL,
  `proposal_header_fkid` int(5) NOT NULL,
  `user_fkid` int(5) NOT NULL,
  `rationale_area` int(5) NOT NULL,
  `goals_area` int(5) NOT NULL,
  `participants_area` int(5) NOT NULL,
  `outlines_area` int(5) NOT NULL,
  `budreq_area` int(5) NOT NULL,
  `ppaprof_area` int(5) NOT NULL,
  `signifmatrix_area` int(5) NOT NULL,
  `implics_area` int(5) NOT NULL,
  `linkageprof_area` int(5) NOT NULL,
  `rationale_remarks` text,
  `goals_remarks` text,
  `participants_remarks` text,
  `outlines_remarks` text,
  `budreq_remarks` text,
  `ppaprof_remarks` text,
  `signifmatrix_remarks` text,
  `implics_remarks` text,
  `linkageprof_remarks` text,
  `total_percentage_forma` float DEFAULT NULL,
  `total_percentage_formb` float DEFAULT NULL,
  `date_reviewed` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `social_dimension`
--

CREATE TABLE `social_dimension` (
  `id` int(11) NOT NULL,
  `socdim_chosenradio` text,
  `household` int(11) DEFAULT NULL,
  `youthmale` int(11) DEFAULT NULL,
  `youthfemale` int(11) DEFAULT NULL,
  `localgovunit` int(11) DEFAULT NULL,
  `orgs_assocs` int(11) DEFAULT NULL,
  `childboy` int(11) DEFAULT NULL,
  `childgirl` int(11) DEFAULT NULL,
  `seniorcitizen_male` int(11) DEFAULT NULL,
  `seniorcitizen_female` int(11) DEFAULT NULL,
  `adults_male` int(11) DEFAULT NULL,
  `adults_female` int(11) DEFAULT NULL,
  `infants_boy` int(11) DEFAULT NULL,
  `infants_girl` int(11) DEFAULT NULL,
  `socdim_othersname` text,
  `socdim_otherscount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `timeframe_to_mou_moa`
--

CREATE TABLE `timeframe_to_mou_moa` (
  `id` int(11) NOT NULL,
  `timeframe` text,
  `timeframe_others` text,
  `locus_and_lead` text,
  `locus_and_lead_spec` text,
  `prelimneedassess_choice` text,
  `verifdata_choice` text,
  `productivity_dimension` text,
  `productivity_dimension_spec` text,
  `economic_dimension` text,
  `econdim_employpart` text,
  `economic_dimension_spec` text,
  `environmental_dimension` text,
  `environmental_dimension_spec` text,
  `governance_dimension` text,
  `governance_dimension_spec` text,
  `preparation_expertise_needed_faculty` text,
  `preparation_expertise_needed_students` text,
  `preparation_roles_faculty` text,
  `preparation_roles_students` text,
  `implementation_expertise_needed_faculty` text,
  `implementation_expertise_needed_students` text,
  `implementation_roles_faculty` text,
  `implementation_roles_students` text,
  `moa_mou_choice` text,
  `date_signed` varchar(20) DEFAULT NULL,
  `signatories_for_usc` varchar(200) DEFAULT NULL,
  `signatories_for_partner` varchar(200) DEFAULT NULL,
  `major_duties_of_usc_unit` text,
  `major_duties_of_partners` text,
  `opportunities_identified` text,
  `challenges_encountered` text,
  `when_is_linkage` varchar(50) DEFAULT NULL,
  `who_initiated_linkage` varchar(200) DEFAULT NULL,
  `activities_already_done` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `unitpersonnel_involved`
--

CREATE TABLE `unitpersonnel_involved` (
  `id` int(11) NOT NULL,
  `upi_chosenradio` text,
  `upi_spec` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `unitresponsible`
--

CREATE TABLE `unitresponsible` (
  `id` int(11) NOT NULL,
  `unitresp_chosenradio` text,
  `SAS` text,
  `SAFAD` text,
  `SED` text,
  `SOE` text,
  `SBE` text,
  `SHCP` text,
  `SLG` text,
  `Supunit` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contact_num` varchar(30) DEFAULT NULL,
  `designation_fkid` int(11) DEFAULT NULL,
  `office` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `organization` varchar(50) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `datetime_created` datetime DEFAULT CURRENT_TIMESTAMP,
  `datetime_modified` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`user_id`, `firstname`, `lastname`, `email`, `contact_num`, `designation_fkid`, `office`, `department`, `organization`, `username`, `password`, `status`, `datetime_created`, `datetime_modified`) VALUES
(1, 'Anthony', 'Salas, SVD', 'juan.delacruz@sample.com', '123456789', 1, 'Vice-President for Academic Affairs Office', '', '', 'vpaa', 'vpaa', 1, '2017-11-28 17:08:32', '2018-02-20 18:54:58'),
(2, 'Brenette', 'Abrenica', 'abrenica@usc.edu.ph', '123456789', 2, 'CES Office', NULL, NULL, 'admin', 'admin', 1, '2017-11-28 17:08:32', NULL),
(3, 'Joshua', 'Tabasuarez', 'to_schwa@yahoo.com', '09324620680', 5, 'School of Architecture, Fine Arts and Design', 'Architecture Coordinator', NULL, 'coord.archi', 'coord.archi', 1, '2017-11-28 17:08:32', NULL),
(4, 'Catherine', 'Abella', 'abellacathy24@yahoo.com', '09333702941', 5, 'School of Architecture, Fine Arts and Design', 'Fine Arts Coordinator', NULL, 'coord.finearts', 'coord.finearts', 1, '2017-11-28 17:08:32', NULL),
(5, 'Devra', 'Gelbolingo', 'devraeon@yahoo.com', '09274757067', 5, 'School of Arts and Sciences', 'Arts Division Coordinator', NULL, 'coord.arts', 'coord.arts', 1, '2017-11-28 17:08:32', NULL),
(6, 'Daisy', 'Salve', 'daisy_salve@yahoo.com', '09173415580', 5, 'School of Arts and Sciences', 'Sciences Division Coordinator', NULL, 'coord.sciences', 'coord.sciences', 1, '2017-11-28 17:08:32', NULL),
(7, 'Minerva', 'Teves', 'athennae007@gmail.com', '09212362337', 6, 'School of Arts and Sciences', 'Languages and Literature', NULL, 'rep.linglit', 'rep.linglit', 1, '2017-11-28 17:08:32', NULL),
(8, 'Jenen', 'Dellera', 'dellerajenen@gmail.com', '09331192660', 6, 'School of Arts and Sciences', 'Philosophy and Religious Studies', NULL, 'rep.prs', 'rep.prs', 1, '2017-11-28 17:08:32', NULL),
(9, 'Justine Marie', 'Beltran', 'juztine1828@yahoo.com', '09156700029', 6, 'School of Arts and Sciences', 'Psychology', NULL, 'rep.psych', 'rep.psych', 1, '2017-11-28 17:08:32', NULL),
(10, 'Chrionni Bernard', 'Decrepito', 'king_cbhd@yahoo.com', '09335320311', 6, 'School of Arts and Sciences', 'Anthropology, Sociology and History', NULL, 'rep.ash', 'rep.ash', 1, '2017-11-28 17:08:32', NULL),
(11, 'Norielyn', 'Abalos', 'norielynabalo@gmail.com', '09173266755', 6, 'School of Arts and Sciences', 'Biology', NULL, 'rep.bio', 'rep.bio', 1, '2017-11-28 17:08:32', NULL),
(12, 'Ligaya', 'Suico', 'missuico@gmail.com', '09333558016', 6, 'School of Arts and Sciences', 'Chemistry', NULL, 'rep.chem', 'rep.chem', 1, '2017-11-28 17:08:32', NULL),
(13, 'Don Bryan', 'Singh', 'sample@yahoo.com', '123456789', 6, 'School of Arts and Sciences', 'Computer and Information Sciences', NULL, 'rep.dcis', 'rep.dcis', 1, '2017-11-28 17:08:32', NULL),
(14, 'Jay Reulla', 'Bacalso', 'jayreulla@yahoo.com', '09322928192', 6, 'School of Arts and Sciences', 'Mathematics', NULL, 'rep.math', 'rep.math', 1, '2017-11-28 17:08:32', NULL),
(15, 'Marissa', 'Pastor', 'ngpastor@gmail.com', '09178431115', 6, 'School of Arts and Sciences', 'Physics', NULL, 'rep.phys', 'rep.phys', 1, '2017-11-28 17:08:32', NULL),
(16, 'Mariter', 'Malonjao', 'mtmalonjao@gmail.com', '09228281770', 5, 'School of Education', 'Teacher Education Coordinator', NULL, 'coord.ted', 'coord.ted', 1, '2017-11-28 17:08:32', NULL),
(17, 'Monell John', 'Cañizares', 'monelljohnz@gmail.com', '09069233841', 5, 'School of Education', 'Science and Mathematics Coordinator', NULL, 'coord.sm', 'coord.sm', 1, '2017-11-28 17:08:32', NULL),
(18, 'Marino', 'Garcia', 'marz_928@yahoo.com', '09436915794', 6, 'School of Education', 'Physical Education', NULL, 'rep.pe', 'rep.pe', 1, '2017-11-28 17:08:32', NULL),
(19, 'Laarne', 'Pontillas', 'lcepontillas@yahoo.com', '09324711411', 5, 'School of Health Care Professions', 'Nursing Coordinator', NULL, 'coord.nursing', 'coord.nursing', 1, '2017-11-28 17:08:32', NULL),
(20, 'Glenda', 'Abapo', 'glendagayabapo@gmail.com', '09163975711', 5, 'School of Health Care Professions', 'Pharmacy Coordinator', NULL, 'coord.pharma', 'coord.pharma', 1, '2017-11-28 17:08:32', NULL),
(21, 'Girlie', 'Libato', 'gveracruz70@yahoo.com', '09424647065', 6, 'School of Health Care Professions', 'Nutrition and Dietetics', NULL, 'rep.nd', 'rep.nd', 1, '2017-11-28 17:08:32', NULL),
(22, 'Glenn', 'Capanas', 'glenncapanas@gmail.com', '09228502093', 5, 'School of Law and Governance', 'Law Cordinator', NULL, 'coord.law', 'coord.law', 1, '2017-11-28 17:08:32', NULL),
(23, 'Kay', 'Conales', 'ksconales@gmail.com', '09420297653', 5, 'School of Law and Governance', 'Political Science Coordinator', NULL, 'coord.polsci', 'coord.polsci', 1, '2017-11-28 17:08:32', NULL),
(24, 'Angela', 'Gomo', 'asgomo70@gmail.com', '09428101770', 5, 'School of Business and Economics', 'Business and Economics Coordinator', NULL, 'coord.sbe', 'coord.sbe', 1, '2017-11-28 17:08:32', NULL),
(25, 'Jun Marlon', 'Denila', 'junmarlonmdenila@gmail.com', '09238799046', 6, 'School of Business and Economics', 'Accountancy', NULL, 'rep.acc', 'rep.acc', 1, '2017-11-28 17:08:32', NULL),
(26, 'Liberato', 'Reyes', 'liberato_reyes@yahoo.com', '09189194249', 6, 'School of Business and Economics', 'Business Administration', NULL, 'rep.ba', 'rep.ba', 1, '2017-11-28 17:08:32', NULL),
(27, 'Alan', 'Tabanao', 'aatabanao@gmail.com', '099998813543', 6, 'School of Business and Economics', 'Economics', NULL, 'rep.econ', 'rep.econ', 1, '2017-11-28 17:08:32', NULL),
(28, 'Angela', 'Gomo', 'asgomo70@gmail.com', '09428101770', 6, 'School of Business and Economics', 'Hospitality Management', NULL, 'rep.hm', 'rep.hm', 1, '2017-11-28 17:08:32', NULL),
(29, 'Alex', 'Melchor', 'axmelchor@yahoo.com', '09327867835', 5, 'School of Engineering', 'Engineering Coordinator', NULL, 'coord.eng', 'coord.eng', 1, '2017-11-28 17:08:32', NULL),
(30, 'Previta', 'Fuentes', 'bettyjabines54@yahoo.com', '09228766670', 6, 'School of Engineering', 'Chemical Engineering', NULL, 'rep.cheme', 'rep.cheme', 1, '2017-11-28 17:08:32', NULL),
(31, 'Joey Cyndell', 'Atillo', 'joweyatillo@gmail.com', '09227296324', 6, 'School of Engineering', 'Civil Engineering', NULL, 'rep.ce1', 'rep.ce1', 1, '2017-11-28 17:08:32', NULL),
(32, 'Kathrina', 'Malinao', 'kathyinot@gmail.com', '09336653861', 6, 'School of Engineering', 'Civil Engineering', NULL, 'rep.ce2', 'rep.ce2', 1, '2017-11-28 17:08:32', NULL),
(33, 'Ana Liza', 'Tabanao', 'analiza_tabanao@gmail.com', '09274751269', 6, 'School of Engineering', 'Computer Engineering', NULL, 'rep.come', 'rep.come', 1, '2017-11-28 17:08:32', NULL),
(34, 'Albert', 'Bañacia', 'abanacia@yahoo.com', '09255577004', 6, 'School of Engineering', 'Electronics and Communications Engineering', NULL, 'rep.ece', 'rep.ece', 1, '2017-11-28 17:08:32', NULL),
(35, 'Marcon Philip Ignacio', 'Wong', 'marconphilip@yahoo.com', '09228573029', 6, 'School of Engineering', 'Electronics Engineering', NULL, 'rep.ee', 'rep.ee', 1, '2017-11-28 17:08:32', NULL),
(36, 'James Anthony', 'Toledo', 'dhmcarrer@gmail.com', '09326060111', 6, 'School of Engineering', 'Industrial Engineering', NULL, 'rep.ie', 'rep.ie', 1, '2017-11-28 17:08:32', NULL),
(37, 'Van Gaitano', 'Vergara', 'vanvergz@yahoo.com', '09229784815', 6, 'School of Engineering', 'Mechanical Engineering', NULL, 'rep.me', 'rep.me', 1, '2017-11-28 17:08:32', NULL),
(38, 'Marvin', 'Avergonzado', 'athletics@usc.edu.com', '09275679437', 6, 'Support Units', 'Athletics Office', NULL, 'su.athletics', 'su.athletics', 1, '2017-11-28 17:08:32', NULL),
(39, 'Fr. Roger', 'Bag-ao, SVD', 'touch_usc@yahoo.com', NULL, 6, 'Support Units', 'Campus Ministry, Talamban', NULL, 'su.cmtc1', 'su.cmtc1', 1, '2017-11-28 17:08:32', NULL),
(40, 'Arthur', 'Malicsi', 'dmalicsi@yahoo.com', NULL, 6, 'Support Units', 'Campus Ministry, Talamban', NULL, 'su.cmtc2', 'su.cmtc2', 1, '2017-11-28 17:08:32', NULL),
(41, 'Cipriano', 'Olita', 'cip_olita@yahoo.com', '09324973634', 6, 'Support Units', 'Guidance Center', NULL, 'su.guidance', 'su.guidance', 1, '2017-11-28 17:08:32', NULL),
(42, 'Fe', 'Planas', 'danny_fe@yahoo.com', '09182913004', 6, 'Support Units', 'Director of Library', NULL, 'su.library', 'su.library', 1, '2017-11-28 17:08:32', NULL),
(43, 'Marilyn', 'Andales', 'marilynandales@yahoo.com', NULL, 5, 'Support Units', 'OSA Downtown', NULL, 'su.osadc', 'su.osadc', 1, '2017-11-28 17:08:32', NULL),
(44, 'Teodis', 'Buma-at', 'teodis_bumaat@yahoo.com', NULL, 5, 'Support Units', 'OSA Talamban', NULL, 'su.osatc', 'su.osatc', 1, '2017-11-28 17:08:32', NULL),
(45, 'Dan Jules', 'Jorolan', 'djjorolan@yahoo.com', NULL, 6, 'Support Units', 'Club Mega', NULL, 'su.clubmega1', 'su.clubmega1', 1, '2017-11-28 17:08:32', NULL),
(46, 'Ekim', 'Makañap', NULL, NULL, 6, 'Support Units', 'Club Mega', NULL, 'su.clubmega2', 'su.clubmega2', 1, '2017-11-28 17:08:32', NULL),
(47, 'Adrian', 'Tan', NULL, NULL, 6, 'Support Units', 'Pathways', NULL, 'su.pathways1', 'su.pathways1', 1, '2017-11-28 17:08:32', NULL),
(48, 'Emmanuel', 'Suarez', NULL, NULL, 6, 'Support Units', 'Pathways', NULL, 'su.pathways2', 'su.pathways2', 1, '2017-11-28 17:08:32', NULL),
(49, 'Jeff', 'Go', 'jeff_go12@yahoo.com', NULL, 6, 'Support Units', 'USC-Supreme Student Council', NULL, 'su.ssc', 'su.ssc', 1, '2017-11-28 17:08:32', NULL),
(50, 'Sample', 'Sample', 'sample@yahoo.com', '123456789', 3, 'School of Architecture, Fine Arts and Design', NULL, NULL, 'dean.safad', 'dean.safad', 1, '2017-11-28 17:08:32', NULL),
(51, 'Delia', 'Belleza', 'sample@yahoo.com', '123456789', 3, 'School of Arts and Sciences', NULL, NULL, 'dean.sas', 'dean.sas', 1, '2017-11-28 17:08:32', NULL),
(52, 'Sample', 'Sample', 'sample@yahoo.com', '123456789', 3, 'School of Education', NULL, NULL, 'dean.sed', 'dean.sed', 1, '2017-11-28 17:08:32', NULL),
(53, 'Sample', 'Sample', 'sample@yahoo.com', '123456789', 3, 'School of Health Care Professions', NULL, NULL, 'dean.shcp', 'dean.shcp', 1, '2017-11-28 17:08:32', NULL),
(54, 'Sample', 'Sample', 'sample@yahoo.com', '123456789', 3, 'School of Law and Governance', NULL, NULL, 'dean.slg', 'dean.slg', 1, '2017-11-28 17:08:32', NULL),
(55, 'Sample', 'Sample', 'sample@yahoo.com', '123456789', 3, 'School of Business and Economics', NULL, NULL, 'dean.sbe', 'dean.sbe', 1, '2017-11-28 17:08:32', NULL),
(56, 'Sample', 'Sample', 'sample@yahoo.com', '123456789', 3, 'School of Engineering', NULL, NULL, 'dean.soe', 'dean.soe', 1, '2017-11-28 17:08:32', NULL),
(57, 'Sample', 'Sample', 'sample@yahoo.com', '123456789', 4, 'School of Architecture, Fine Arts and Design', 'Architecture Chairman', NULL, 'chair.archi', 'chair.archi', 1, '2017-11-28 17:08:32', NULL),
(58, 'Sample', 'Sample', 'sample@yahoo.com', '123456789', 4, 'School of Architecture, Fine Arts and Design', 'Fine Arts Chairman', NULL, 'chair.finearts', 'chair.finearts', 1, '2017-11-28 17:08:32', NULL),
(59, 'Sample', 'Sample', 'sample@yahoo.com', '123456789', 4, 'School of Arts and Sciences', 'Languages and Literature', NULL, 'chair.linglit', 'chair.linglit', 1, '2017-11-28 17:08:32', NULL),
(60, 'Sample', 'Sample', 'sample@yahoo.com', '123456789', 4, 'School of Arts and Sciences', 'Philosophy and Religious Studies', NULL, 'chair.prs', 'chair.prs', 1, '2017-11-28 17:08:32', NULL),
(61, 'Sample', 'Sample', 'sample@yahoo.com', '123456789', 4, 'School of Arts and Sciences', 'Psychology', NULL, 'chair.psych', 'chair.psych', 1, '2017-11-28 17:08:32', NULL),
(62, 'Sample', 'Sample', 'sample@yahoo.com', '123456789', 4, 'School of Arts and Sciences', 'Anthropology, Sociology and History', NULL, 'chair.ash', 'chair.ash', 1, '2017-11-28 17:08:32', NULL),
(63, 'Sample', 'Sample', 'sample@yahoo.com', '123456789', 4, 'School of Arts and Sciences', 'Biology', NULL, 'chair.bio', 'chair.bio', 1, '2017-11-28 17:08:32', NULL),
(64, 'Sample', 'Sample', 'sample@yahoo.com', '123456789', 4, 'School of Arts and Sciences', 'Chemistry', NULL, 'chair.chem', 'chair.chem', 1, '2017-11-28 17:08:32', NULL),
(65, 'Mary Jane', 'Sabellano', 'sample@yahoo.com', '123456789', 4, 'School of Arts and Sciences', 'Computer and Information Sciences', NULL, 'chair.dcis', 'chair.dcis', 1, '2017-11-28 17:08:32', NULL),
(66, 'Sample', 'Sample', 'sample@yahoo.com', '123456789', 4, 'School of Arts and Sciences', 'Mathematics', NULL, 'chair.math', 'chair.math', 1, '2017-11-28 17:08:32', NULL),
(67, 'Sample', 'Sample', 'sample@yahoo.com', '123456789', 4, 'School of Arts and Sciences', 'Physics', NULL, 'chair.phys', 'chair.phys', 1, '2017-11-28 17:08:32', NULL),
(68, 'Sample', 'Sample', 'sample@yahoo.com', '123456789', 4, 'School of Education', 'Physical Education', NULL, 'chair.pe', 'chair.pe', 1, '2017-11-28 17:08:32', NULL),
(69, 'Sample', 'Sample', 'sample@yahoo.com', '123456789', 4, 'School of Health Care Professions', 'Nursing', NULL, 'chair.nursing', 'chair.nursing', 1, '2017-11-28 17:08:32', NULL),
(70, 'Sample', 'Sample', 'sample@gmail.com', '123456789', 4, 'School of Health Care Professions', 'Pharmacy', NULL, 'chair.pharma', 'chair.pharma', 1, '2017-11-28 17:08:32', NULL),
(71, 'Sample', 'Sample', 'sample@yahoo.com', '123456789', 4, 'School of Health Care Professions', 'Nutrition and Dietetics', NULL, 'chair.nd', 'chair.nd', 1, '2017-11-28 17:08:32', NULL),
(72, 'Sample', 'Sample', 'sample@gmail.com', '123456789', 4, 'School of Law and Governance', 'Political Science', NULL, 'chair.polsci', 'chair.polsci', 1, '2017-11-28 17:08:32', NULL),
(73, 'BAchair', 'BAchair', 'sample@gmail.com', '123456789', 4, 'School of Business and Economics', 'Accountancy', NULL, 'chair.acc', 'chair.acc', 1, '2017-11-28 17:08:32', '2017-12-14 11:21:48'),
(74, 'Sample', 'Sample', 'sample@yahoo.com', '123456789', 4, 'School of Business and Economics', 'Business Administration', NULL, 'chair.ba', 'chair.ba', 1, '2017-11-28 17:08:32', NULL),
(75, 'Sample', 'Sample', 'sample@gmail.com', '123456789', 4, 'School of Business and Economics', 'Economics', NULL, 'chair.econ', 'chair.econ', 1, '2017-11-28 17:08:32', NULL),
(76, 'Sample', 'Sample', 'sample@gmail.com', '123456789', 4, 'School of Business and Economics', 'Hospitality Management', NULL, 'chair.hm', 'chair.hm', 1, '2017-11-28 17:08:32', NULL),
(77, 'Sample', 'Sample', 'sample@yahoo.com', '123456789', 4, 'School of Engineering', 'Chemical Engineering', NULL, 'chair.cheme', 'chair.cheme', 1, '2017-11-28 17:08:32', NULL),
(78, 'Sample', 'Sample', 'sample@gmail.com', '123456789', 4, 'School of Engineering', 'Civil Engineering', NULL, 'chair.ce1', 'chair.ce1', 1, '2017-11-28 17:08:32', NULL),
(79, 'Sample', 'Sample', 'sample@gmail.com', '123456789', 4, 'School of Engineering', 'Civil Engineering', NULL, 'chair.ce2', 'chair.ce2', 1, '2017-11-28 17:08:32', NULL),
(80, 'Sample', 'Sample', 'sample@gmail.com', '123456789', 4, 'School of Engineering', 'Computer Engineering', NULL, 'chair.come', 'chair.come', 1, '2017-11-28 17:08:32', NULL),
(81, 'Sample', 'Sample', 'sample@yahoo.com', '123456789', 4, 'School of Engineering', 'Electronics and Communications Engineering', NULL, 'chair.ece', 'chair.ece', 1, '2017-11-28 17:08:32', NULL),
(82, 'Sample', 'Sample', 'sample@yahoo.com', '123456789', 4, 'School of Engineering', 'Electronics Engineering', NULL, 'chair.ee', 'chair.ee', 1, '2017-11-28 17:08:32', NULL),
(83, 'Sample', 'Sample', 'sample@gmail.com', '123456789', 4, 'School of Engineering', 'Industrial Engineering', NULL, 'chair.ie', 'chair.ie', 1, '2017-11-28 17:08:32', NULL),
(84, 'Sample', 'Sample', 'sample@yahoo.com', '123456789', 4, 'School of Engineering', 'Mechanical Engineering', NULL, 'chair.me', 'chair.me', 1, '2017-11-28 17:08:32', NULL),
(85, 'Sample', 'Sample', 'sample@yahoo.com', '123456789', 7, 'School of Arts and Sciences', 'Computer and Information Sciences', 'Dynacom Society', 'dynacom', 'dynacom', 1, '2017-11-28 17:08:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_designation`
--

CREATE TABLE `user_designation` (
  `id` int(11) NOT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `datetime_created` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_designation`
--

INSERT INTO `user_designation` (`id`, `designation`, `datetime_created`) VALUES
(1, 'Vice-President for Academic Affairs', '2017-11-28 17:08:31'),
(2, 'CES Director', '2017-11-28 17:08:31'),
(3, 'School Dean', '2017-11-28 17:08:31'),
(4, 'Department Chair', '2017-11-28 17:08:31'),
(5, 'Coordinator', '2017-11-28 17:08:31'),
(6, 'Representative', '2017-11-28 17:08:31'),
(7, 'Co-Curricular Organization', '2017-11-28 17:08:31'),
(8, 'Extra-Curricular Organization', '2017-11-28 17:08:31'),
(9, 'Faculty', '2017-11-28 17:08:31'),
(10, 'Office of Student Affairs', '2017-11-28 17:08:31'),
(11, 'Support Unit', '2017-11-28 17:08:31');

-- --------------------------------------------------------

--
-- Table structure for table `verifdata_with`
--

CREATE TABLE `verifdata_with` (
  `id` int(11) NOT NULL,
  `data_sources` text,
  `tools_used_to_gather_data` text,
  `means_employed_to_verify_data` text,
  `who_collected_the_data` text,
  `datasource_others` text,
  `toolsgat_others` text,
  `meansemp_others` text,
  `whocollect_others` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `verifdata_without`
--

CREATE TABLE `verifdata_without` (
  `id` int(11) NOT NULL,
  `bases_for_proposing_program` text,
  `means_employed_ensure_resposiveness` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure for view `proposal_json_full_info`
--
DROP TABLE IF EXISTS `proposal_json_full_info`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `proposal_json_full_info`  AS  select `user_account`.`user_id` AS `user_id`,`user_account`.`department` AS `department`,`proposal_json`.`proposal_json_format` AS `proposal_json_format`,`proposal_json`.`proposal_id` AS `proposal_id`,`proposal_json`.`status` AS `status`,`proposal_json`.`form_type` AS `form_type`,`proposal_json`.`noted_by_stat` AS `noted_by_stat`,`proposal_json`.`noted_by_comments` AS `noted_by_comments`,`user_account`.`office` AS `office`,`user_account`.`organization` AS `organization`,`user_account`.`firstname` AS `firstname`,`user_account`.`lastname` AS `lastname`,`user_account`.`datetime_created` AS `datetime_created`,`user_account`.`datetime_modified` AS `datetime_modified` from (`proposal_json` join `user_account` on((`user_account`.`user_id` = `proposal_json`.`user_id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approval_cycle`
--
ALTER TABLE `approval_cycle`
  ADD PRIMARY KEY (`approve_id`),
  ADD KEY `proposal_header_fkid` (`proposal_header_fkid`),
  ADD KEY `reviewer_1` (`reviewer_1`),
  ADD KEY `reviewer_2` (`reviewer_2`);

--
-- Indexes for table `budgetary_requirements`
--
ALTER TABLE `budgetary_requirements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_fkid` (`user_fkid`),
  ADD KEY `comments_ibfk_1` (`proposal_header_fkid`);

--
-- Indexes for table `nature_and_area_ofprogram`
--
ALTER TABLE `nature_and_area_ofprogram`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outline_of_activities`
--
ALTER TABLE `outline_of_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partnership_linkages_profile`
--
ALTER TABLE `partnership_linkages_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `practical_counts`
--
ALTER TABLE `practical_counts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proposal_header`
--
ALTER TABLE `proposal_header`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_fkid` (`user_fkid`),
  ADD KEY `unitresponsible_fkid` (`unitresponsible_fkid`),
  ADD KEY `practical_counts_fkid` (`practical_counts_fkid`),
  ADD KEY `unitpersonnel_involved_fkid` (`unitpersonnel_involved_fkid`),
  ADD KEY `verifdata_with_fkid` (`verifdata_with_fkid`),
  ADD KEY `verifdata_without_fkid` (`verifdata_without_fkid`),
  ADD KEY `social_dimension_fkid` (`social_dimension_fkid`),
  ADD KEY `partnership_linkages_profile_fkid` (`partnership_linkages_profile_fkid`),
  ADD KEY `request_area_fkid` (`request_area_fkid`),
  ADD KEY `rationale_to_beneficiaries_fkid` (`rationale_to_beneficiaries_fkid`),
  ADD KEY `Outline_of_Activities_fkid` (`Outline_of_Activities_fkid`),
  ADD KEY `budgetary_requirements_fkid` (`budgetary_requirements_fkid`),
  ADD KEY `nature_and_area_ofprogram_fkid` (`nature_and_area_ofprogram_fkid`),
  ADD KEY `timeframe_to_mou_moa_fkid` (`timeframe_to_mou_moa_fkid`);

--
-- Indexes for table `proposal_json`
--
ALTER TABLE `proposal_json`
  ADD PRIMARY KEY (`proposal_id`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- Indexes for table `rationale_to_beneficiaries`
--
ALTER TABLE `rationale_to_beneficiaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report_d`
--
ALTER TABLE `report_d`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report_e`
--
ALTER TABLE `report_e`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_area`
--
ALTER TABLE `request_area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviewers`
--
ALTER TABLE `reviewers`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `proposal` (`proposal_id`),
  ADD KEY `reviewer` (`reviewer_id`);

--
-- Indexes for table `review_scores`
--
ALTER TABLE `review_scores`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `user_fkid` (`user_fkid`),
  ADD KEY `review_scores_ibfk_1` (`proposal_header_fkid`);

--
-- Indexes for table `social_dimension`
--
ALTER TABLE `social_dimension`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timeframe_to_mou_moa`
--
ALTER TABLE `timeframe_to_mou_moa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unitpersonnel_involved`
--
ALTER TABLE `unitpersonnel_involved`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unitresponsible`
--
ALTER TABLE `unitresponsible`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `designation_fkid` (`designation_fkid`);

--
-- Indexes for table `user_designation`
--
ALTER TABLE `user_designation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verifdata_with`
--
ALTER TABLE `verifdata_with`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verifdata_without`
--
ALTER TABLE `verifdata_without`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approval_cycle`
--
ALTER TABLE `approval_cycle`
  MODIFY `approve_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `budgetary_requirements`
--
ALTER TABLE `budgetary_requirements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `nature_and_area_ofprogram`
--
ALTER TABLE `nature_and_area_ofprogram`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `outline_of_activities`
--
ALTER TABLE `outline_of_activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `partnership_linkages_profile`
--
ALTER TABLE `partnership_linkages_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `practical_counts`
--
ALTER TABLE `practical_counts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `proposal_header`
--
ALTER TABLE `proposal_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `proposal_json`
--
ALTER TABLE `proposal_json`
  MODIFY `proposal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `rationale_to_beneficiaries`
--
ALTER TABLE `rationale_to_beneficiaries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `report_d`
--
ALTER TABLE `report_d`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `report_e`
--
ALTER TABLE `report_e`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `request_area`
--
ALTER TABLE `request_area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reviewers`
--
ALTER TABLE `reviewers`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `review_scores`
--
ALTER TABLE `review_scores`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `social_dimension`
--
ALTER TABLE `social_dimension`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `timeframe_to_mou_moa`
--
ALTER TABLE `timeframe_to_mou_moa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `unitpersonnel_involved`
--
ALTER TABLE `unitpersonnel_involved`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `unitresponsible`
--
ALTER TABLE `unitresponsible`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT for table `user_designation`
--
ALTER TABLE `user_designation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `verifdata_with`
--
ALTER TABLE `verifdata_with`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `verifdata_without`
--
ALTER TABLE `verifdata_without`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `approval_cycle`
--
ALTER TABLE `approval_cycle`
  ADD CONSTRAINT `approval_cycle_ibfk_1` FOREIGN KEY (`proposal_header_fkid`) REFERENCES `proposal_header` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `approval_cycle_ibfk_2` FOREIGN KEY (`reviewer_1`) REFERENCES `user_account` (`user_id`),
  ADD CONSTRAINT `approval_cycle_ibfk_3` FOREIGN KEY (`reviewer_2`) REFERENCES `user_account` (`user_id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`proposal_header_fkid`) REFERENCES `proposal_json` (`proposal_id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_fkid`) REFERENCES `user_account` (`user_id`);

--
-- Constraints for table `proposal_header`
--
ALTER TABLE `proposal_header`
  ADD CONSTRAINT `proposal_header_ibfk_1` FOREIGN KEY (`user_fkid`) REFERENCES `user_account` (`user_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `proposal_header_ibfk_10` FOREIGN KEY (`rationale_to_beneficiaries_fkid`) REFERENCES `rationale_to_beneficiaries` (`id`),
  ADD CONSTRAINT `proposal_header_ibfk_11` FOREIGN KEY (`Outline_of_Activities_fkid`) REFERENCES `outline_of_activities` (`id`),
  ADD CONSTRAINT `proposal_header_ibfk_12` FOREIGN KEY (`budgetary_requirements_fkid`) REFERENCES `budgetary_requirements` (`id`),
  ADD CONSTRAINT `proposal_header_ibfk_13` FOREIGN KEY (`nature_and_area_ofprogram_fkid`) REFERENCES `nature_and_area_ofprogram` (`id`),
  ADD CONSTRAINT `proposal_header_ibfk_14` FOREIGN KEY (`timeframe_to_mou_moa_fkid`) REFERENCES `timeframe_to_mou_moa` (`id`),
  ADD CONSTRAINT `proposal_header_ibfk_2` FOREIGN KEY (`unitresponsible_fkid`) REFERENCES `unitresponsible` (`id`),
  ADD CONSTRAINT `proposal_header_ibfk_3` FOREIGN KEY (`practical_counts_fkid`) REFERENCES `practical_counts` (`id`),
  ADD CONSTRAINT `proposal_header_ibfk_4` FOREIGN KEY (`unitpersonnel_involved_fkid`) REFERENCES `unitpersonnel_involved` (`id`),
  ADD CONSTRAINT `proposal_header_ibfk_5` FOREIGN KEY (`verifdata_with_fkid`) REFERENCES `verifdata_with` (`id`),
  ADD CONSTRAINT `proposal_header_ibfk_6` FOREIGN KEY (`verifdata_without_fkid`) REFERENCES `verifdata_without` (`id`),
  ADD CONSTRAINT `proposal_header_ibfk_7` FOREIGN KEY (`social_dimension_fkid`) REFERENCES `social_dimension` (`id`),
  ADD CONSTRAINT `proposal_header_ibfk_8` FOREIGN KEY (`partnership_linkages_profile_fkid`) REFERENCES `partnership_linkages_profile` (`id`),
  ADD CONSTRAINT `proposal_header_ibfk_9` FOREIGN KEY (`request_area_fkid`) REFERENCES `request_area` (`id`);

--
-- Constraints for table `proposal_json`
--
ALTER TABLE `proposal_json`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user_account` (`user_id`);

--
-- Constraints for table `reviewers`
--
ALTER TABLE `reviewers`
  ADD CONSTRAINT `reviewers_ibfk_1` FOREIGN KEY (`proposal_id`) REFERENCES `proposal_json` (`proposal_id`),
  ADD CONSTRAINT `reviewers_ibfk_2` FOREIGN KEY (`reviewer_id`) REFERENCES `user_account` (`user_id`);

--
-- Constraints for table `review_scores`
--
ALTER TABLE `review_scores`
  ADD CONSTRAINT `review_scores_ibfk_1` FOREIGN KEY (`proposal_header_fkid`) REFERENCES `proposal_json` (`proposal_id`),
  ADD CONSTRAINT `review_scores_ibfk_2` FOREIGN KEY (`user_fkid`) REFERENCES `user_account` (`user_id`);

--
-- Constraints for table `user_account`
--
ALTER TABLE `user_account`
  ADD CONSTRAINT `user_account_ibfk_1` FOREIGN KEY (`designation_fkid`) REFERENCES `user_designation` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
