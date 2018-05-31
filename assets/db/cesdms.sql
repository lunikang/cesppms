DROP DATABASE IF EXISTS CESPPMS;

CREATE DATABASE CESPPMS;

USE CESPPMS;

CREATE TABLE user_designation(
	id INT AUTO_INCREMENT,
	designation VARCHAR(50) NULL,
	datetime_created DATETIME DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (id)
) ENGINE = INNODB;

CREATE TABLE user_account(
	user_id INT AUTO_INCREMENT,
	firstname VARCHAR(50) NULL,
	lastname VARCHAR(50) NULL,
	email VARCHAR(50) NULL,
	contact_num VARCHAR(30) NULL,
	designation_fkid INT,
	office VARCHAR(50) NULL,
	department VARCHAR(50) NULL,
	organization VARCHAR(50) NULL,
	username VARCHAR(20) NULL,
	password VARCHAR(15) NULL,
	status INT NOT NULL DEFAULT 1,
	datetime_created DATETIME DEFAULT CURRENT_TIMESTAMP,
	datetime_modified DATETIME ON UPDATE CURRENT_TIMESTAMP,
	PRIMARY KEY (user_id),
	FOREIGN KEY (designation_fkid)
		REFERENCES user_designation(id)
		ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE = INNODB;

CREATE TABLE comments(
id int AUTO_INCREMENT,
proposal_header_fkid INT,
user_fkid INT,
comment_category TEXT NOT NULL,
comment TEXT NOT NULL,
date_created TIMESTAMP,
PRIMARY KEY (id) 
)ENGINE = INNODB;

CREATE TABLE unitresponsible(
id int AUTO_INCREMENT,
unitresp_chosenradio TEXT,
SAS TEXT,
SAFAD TEXT,
SED TEXT,
SOE TEXT,
SBE TEXT,
SHCP TEXT,
SLG TEXT,
Supunit TEXT,
PRIMARY KEY (id) 
)ENGINE = INNODB;

CREATE TABLE practical_counts(
	id int AUTO_INCREMENT,
	manhours_prepare INT DEFAULT 0,
	manhours_comp INT DEFAULT 0,
	facultyinv INT DEFAULT 0,
	coursebasedstud INT DEFAULT 0,
	studorg INT DEFAULT 0,
	staffinv INT DEFAULT 0,
	matproduced INT DEFAULT 0,
	matimproved INT DEFAULT 0,
	curricprogdev INT DEFAULT 0,
	curricprogimp INT DEFAULT 0,
	propdev INT DEFAULT 0,
	paperspres INT DEFAULT 0,
	paperspub INT DEFAULT 0,
	policiesadv INT DEFAULT 0,
PRIMARY KEY (id) 
)ENGINE = INNODB;

CREATE TABLE unitpersonnel_involved(
id int AUTO_INCREMENT,
upi_chosenradio TEXT,
upi_spec TEXT,
PRIMARY KEY (id) 
)ENGINE = INNODB;

CREATE TABLE verifdata_with(
	id int AUTO_INCREMENT,
	data_sources TEXT,
	tools_used_to_gather_data TEXT,
	means_employed_to_verify_data TEXT,
	who_collected_the_data TEXT,
	datasource_others TEXT,
	toolsgat_others TEXT,
	meansemp_others TEXT,
	whocollect_others TEXT,
PRIMARY KEY (id) 
)ENGINE = INNODB;

CREATE TABLE verifdata_without(
id int AUTO_INCREMENT,
bases_for_proposing_program TEXT,
means_employed_ensure_resposiveness TEXT,
PRIMARY KEY (id) 
)ENGINE = INNODB;

CREATE TABLE social_dimension(
id int AUTO_INCREMENT,
socdim_chosenradio TEXT,
household INT,
youthmale INT,
youthfemale INT,
localgovunit INT,
orgs_assocs INT,
childboy INT,
childgirl INT,
seniorcitizen_male INT,
seniorcitizen_female INT,
adults_male INT,
adults_female INT,
infants_boy INT,
infants_girl INT,
socdim_othersname TEXT NULL,
socdim_otherscount INT,
PRIMARY KEY (id) 
)ENGINE = INNODB;

CREATE TABLE partnership_linkages_profile(
id int AUTO_INCREMENT,

PRIMARY KEY (id) 
)ENGINE = INNODB;

CREATE TABLE request_area(
id int AUTO_INCREMENT,
requester_chosenradio TEXT,
communityspec TEXT,
organizationspec TEXT,
institutionspec TEXT,
mode_of_req_chosenradio TEXT,
mode_otherspec TEXT,
PRIMARY KEY (id) 
)ENGINE = INNODB;

CREATE TABLE rationale_to_beneficiaries(
id int AUTO_INCREMENT,
rationale_and_contextualization TEXT,
goal_objectives_and_outcomes TEXT,
participants_partnersand_beneficiaries TEXT,
PRIMARY KEY (id) 
)ENGINE = INNODB;

CREATE TABLE Outline_of_Activities(
id int AUTO_INCREMENT,
tentativedate VARCHAR(20) NOT NULL,
activityname TEXT,
participants_needed INT,
personincharge TEXT,
PRIMARY KEY (id) 
)ENGINE = INNODB;

CREATE TABLE budgetary_requirements(
id int AUTO_INCREMENT,
mealsnack_particular TEXT,
mealsnack_frequency TEXT,
mealsnack_quantity TEXT,
mealsnack_amnt TEXT,
mealsnack_subtotal TEXT,
transpo_particular TEXT,
transpo_frequency TEXT,
transpo_quantity TEXT,
transpo_amnt TEXT,
transpo_subtotal TEXT,
materials_particular TEXT,
materials_frequency TEXT,
materials_quantity TEXT,
materials_amnt TEXT,
materials_subtotal TEXT,
grand_total TEXT,
PRIMARY KEY (id) 
)ENGINE = INNODB;

CREATE TABLE nature_and_area_ofprogram(
id int AUTO_INCREMENT,
nature_of_program TEXT,
specnatprog TEXT,
program_area TEXT,
PRIMARY KEY (id) 
)ENGINE = INNODB;

CREATE TABLE timeframe_to_mou_moa(
id int AUTO_INCREMENT,
timeframe TEXT,
timeframe_others TEXT,
locus_and_lead TEXT,
locus_and_lead_spec TEXT,
prelimneedassess_choice TEXT,
verifdata_choice TEXT,
productivity_dimension TEXT,
productivity_dimension_spec TEXT,
economic_dimension TEXT,
econdim_employpart TEXT,
economic_dimension_spec TEXT,
environmental_dimension TEXT,
environmental_dimension_spec TEXT,
governance_dimension TEXT,
governance_dimension_spec TEXT,
preparation_expertise_needed_faculty TEXT,
preparation_expertise_needed_students TEXT,
preparation_roles_faculty TEXT,
preparation_roles_students TEXT,
implementation_expertise_needed_faculty TEXT,
implementation_expertise_needed_students TEXT,
implementation_roles_faculty TEXT,
implementation_roles_students TEXT,
moa_mou_choice TEXT,
date_signed VARCHAR(20),
signatories_for_usc VARCHAR(200),
signatories_for_partner VARCHAR(200),
major_duties_of_usc_unit TEXT,
major_duties_of_partners TEXT,
opportunities_identified TEXT,
challenges_encountered TEXT,
when_is_linkage VARCHAR(50),
who_initiated_linkage VARCHAR(200),
activities_already_done TEXT,
PRIMARY KEY (id) 
)ENGINE = INNODB;

CREATE TABLE proposal_header(
	id INT AUTO_INCREMENT,
	user_fkid INT NOT NULL,
	form_type VARCHAR(3) NOT NULL,
	title VARCHAR(100) NOT NULL,
	school VARCHAR(50) NOT NULL,
	department VARCHAR(50) NOT NULL,
	organization VARCHAR(50) NULL,
	inclusive_date1 VARCHAR(30) NOT NULL,
	inclusive_date2 VARCHAR(30) NOT NULL,
	venue VARCHAR(50) NOT NULL,
	form_completeness INT(5) NOT NULL,
	form_procedure INT(3) NOT NULL,
	version INT,
	unitresponsible_fkid INT NULL,
	practical_counts_fkid INT NULL,
	unitpersonnel_involved_fkid INT NULL,
	verifdata_with_fkid INT NULL,
	verifdata_without_fkid INT NULL,
	social_dimension_fkid INT,
	partnership_linkages_profile_fkid INT NULL,
	request_area_fkid INT NULL,
	rationale_to_beneficiaries_fkid INT NULL,
	Outline_of_Activities_fkid INT NULL,
	budgetary_requirements_fkid INT NULL,
	nature_and_area_ofprogram_fkid INT NULL,
	timeframe_to_mou_moa_fkid INT NULL,
	datetime_created TIMESTAMP/*DATETIME DEFAULT CURRENT_TIMESTAMP*/,
	/*datetime_modified DATETIME ON UPDATE CURRENT_TIMESTAMP,*/
	status INT DEFAULT 1,
	PRIMARY KEY (id),
	FOREIGN KEY (user_fkid)
		REFERENCES user_account(user_id)
		ON UPDATE CASCADE
) ENGINE = INNODB;


CREATE TABLE report_d(
	id INT AUTO_INCREMENT,
	fd_title VARCHAR(255),
	fd_school VARCHAR(255),
	fd_dept VARCHAR(255),
	fd_venue VARCHAR(255),
	introduction VARCHAR(255),
	date_start VARCHAR(150),
	date_end VARCHAR(150),
	participants_partners_and_beneficiaries VARCHAR(255),
	perceived_by_beneficiaries VARCHAR(255),
	perceived_by_students VARCHAR(255),
	perceived_by_faculty VARCHAR(255),
	challenges_encountered VARCHAR(255),
	creator_id INT ,
	who_created VARCHAR(50) ,
	creators_department VARCHAR(80) ,
	creators_school VARCHAR(80) ,
	datecreated TIMESTAMP,
	PRIMARY KEY (id)
	
) ENGINE = INNODB;

CREATE TABLE report_e(
	id INT AUTO_INCREMENT ,
	title_of_program VARCHAR(50),
	unit_responsible VARCHAR(200),
	program_duration VARCHAR(30),
	/*activities_fkid INT,*/
	act_title VARCHAR(255),
	incdate VARCHAR(255),
	totalhours VARCHAR(255),
	final_target_groups VARCHAR(255),
	collaborators VARCHAR(200),
	background_of_issue VARCHAR(255),
	major_achievements_of_program VARCHAR(255),
	results_of_activities_to_goal VARCHAR(255),
	overall_strategy_adopted VARCHAR(255),
	goal_title VARCHAR(150),/*goals*/
	spec_obj VARCHAR(255),
	spec_act VARCHAR(200),
	outputs VARCHAR(255),
	observed_impact_of_program VARCHAR(255),
	challenges_and_measures_undertaken VARCHAR(255),
	good_practices VARCHAR(255),
	lessons_learned_from_program VARCHAR(255),
	intraname VARCHAR(200), /* INTRA USC Partners/Collaborators*/
	intracontribs VARCHAR(255),
	extraname VARCHAR(255),/* EXTRA USC Partners/Collaborators*/
	extracontribs VARCHAR(255),
	unit_relationship VARCHAR(255),
	other_links_gained_from_program VARCHAR(255),
	witness_to_the_word VARCHAR(255),
	ways_forward VARCHAR(255),
	creator_id INT ,
	who_created VARCHAR(50) ,
	creators_department VARCHAR(80) ,
	creators_school VARCHAR(80) ,
	datecreated TIMESTAMP,
	PRIMARY KEY (id)
) ENGINE = INNODB;

CREATE TABLE approval_cycle (
	approve_id INT AUTO_INCREMENT,
	proposal_header_fkid INT,
	cycles INT DEFAULT 0,
	revisions INT DEFAULT 0,
	department_chair VARCHAR(12),
	date_chair_checked DATETIME,
	school_coordinator VARCHAR(12),
	date_coordinator_checked DATETIME,
	school_dean VARCHAR(12),
	date_dean_checked DATETIME,
	director VARCHAR(12),
	director_decision TEXT,
	director_decision_date DATETIME,
	date_director_checked DATETIME,
	reviewer_1 INT,
	reviewer1_decision TEXT,
	reviewer1_decision_date DATETIME,
	date_reviewer_1_checked DATETIME,
	reviewer_2 INT,
	reviewer2_decision TEXT,
	reviewer2_decision_date DATETIME,
	date_reviewer_2_checked DATETIME,
	vpaa BOOLEAN,
	date_vpaa_checked DATETIME,
	decision BOOLEAN,
	datetime_created DATETIME DEFAULT CURRENT_TIMESTAMP,
	datetime_modified DATETIME ON UPDATE CURRENT_TIMESTAMP,
	status BOOLEAN DEFAULT TRUE,
	PRIMARY KEY (approve_id),
	FOREIGN KEY (proposal_header_fkid)
		REFERENCES proposal_header(id)
		ON UPDATE CASCADE
) ENGINE = INNODB;

CREATE TABLE review_scores(
review_id INT AUTO_INCREMENT,
proposal_header_fkid INT(5) NOT NULL,
user_fkid INT(5) NOT NULL,
rationale_area INT(5) NOT NULL,
goals_area INT(5) NOT NULL,
participants_area INT(5) NOT NULL,
outlines_area INT(5) NOT NULL,
budreq_area INT(5) NOT NULL,
ppaprof_area INT(5) NOT NULL,
signifmatrix_area INT(5) NOT NULL,
implics_area INT(5) NOT NULL,
linkageprof_area INT(5) NOT NULL,

rationale_remarks TEXT,
goals_remarks TEXT,
participants_remarks TEXT,
outlines_remarks TEXT,
budreq_remarks TEXT,
ppaprof_remarks TEXT,
signifmatrix_remarks TEXT,
implics_remarks TEXT,
linkageprof_remarks TEXT,

total_percentage_forma FLOAT,
total_percentage_formb FLOAT,
date_reviewed DATETIME,
PRIMARY KEY (review_id)
) ENGINE = INNODB;

ALTER TABLE review_scores
ADD FOREIGN KEY (proposal_header_fkid) REFERENCES proposal_header(id),
ADD FOREIGN KEY (user_fkid) REFERENCES user_account(user_id);

ALTER TABLE comments
ADD FOREIGN KEY (proposal_header_fkid) REFERENCES proposal_header(id),
ADD FOREIGN KEY (user_fkid) REFERENCES user_account(user_id);

ALTER TABLE proposal_header
ADD FOREIGN KEY (unitresponsible_fkid) REFERENCES unitresponsible(id),
ADD FOREIGN KEY (practical_counts_fkid) REFERENCES practical_counts(id),
ADD FOREIGN KEY (unitpersonnel_involved_fkid) REFERENCES unitpersonnel_involved(id),
ADD FOREIGN KEY (verifdata_with_fkid) REFERENCES verifdata_with(id),
ADD FOREIGN KEY (verifdata_without_fkid) REFERENCES verifdata_without(id),
ADD FOREIGN KEY (social_dimension_fkid) REFERENCES social_dimension(id),
ADD FOREIGN KEY (partnership_linkages_profile_fkid) REFERENCES partnership_linkages_profile(id),
ADD FOREIGN KEY (request_area_fkid) REFERENCES request_area(id),
ADD FOREIGN KEY (rationale_to_beneficiaries_fkid) REFERENCES rationale_to_beneficiaries(id),
ADD FOREIGN KEY (Outline_of_Activities_fkid) REFERENCES Outline_of_Activities(id),
ADD FOREIGN KEY (budgetary_requirements_fkid) REFERENCES budgetary_requirements(id),
ADD FOREIGN KEY (nature_and_area_ofprogram_fkid) REFERENCES nature_and_area_ofprogram(id),
ADD FOREIGN KEY (timeframe_to_mou_moa_fkid) REFERENCES timeframe_to_mou_moa(id);

ALTER TABLE approval_cycle
ADD FOREIGN KEY (reviewer_1) REFERENCES user_account(user_id),
ADD FOREIGN KEY (reviewer_2) REFERENCES user_account(user_id);

INSERT INTO user_designation (designation) VALUES 
	('Vice-President for Academic Affairs'),
	('CES Director'),
	('School Dean'),
	('Department Chair'),
	('Coordinator'),
	('Representative'),
	('Co-Curricular Organization'),
	('Extra-Curricular Organization'),
	('Faculty'),
	('Office of Student Affairs'),
	('Support Unit');


INSERT INTO user_account
	(firstname, lastname, email, contact_num, designation_fkid, office, department, organization,  username, password, status)
VALUES
	('Anthony', 'Salas, SVD', 'juan.delacruz@sample.com', '123456789', 1, 'Vice-President for Academic Affairs Office', NULL, NULL, 'vpaa', 'vpaa', 1),
	('Brenette', 'Abrenica', 'abrenica@usc.edu.ph', '123456789', 2, 'CES Office', NULL, NULL, 'admin', 'admin', 1),

	/* SAFAD */
	('Joshua', 'Tabasuarez', 'to_schwa@yahoo.com', '09324620680', 5, 'School of Architecture, Fine Arts and Design', 'Architecture Coordinator', NULL, 'coord.archi', 'coord.archi', 1),
	('Catherine', 'Abella', 'abellacathy24@yahoo.com', '09333702941', 5,'School of Architecture, Fine Arts and Design', 'Fine Arts Coordinator', NULL, 'coord.finearts', 'coord.finearts', 1),

	/* SAS */
	('Devra', 'Gelbolingo', 'devraeon@yahoo.com', '09274757067', 5,  'School of Arts and Sciences', 'Arts Division Coordinator', NULL, 'coord.arts', 'coord.arts', 1),
	('Daisy', 'Salve', 'daisy_salve@yahoo.com', '09173415580', 5, 'School of Arts and Sciences', 'Sciences Division Coordinator', NULL, 'coord.sciences', 'coord.sciences', 1),
	('Minerva', 'Teves', 'athennae007@gmail.com', '09212362337', 6, 'School of Arts and Sciences', 'Languages and Literature', NULL, 'rep.linglit', 'rep.linglit', 1),
	('Jenen', 'Dellera', 'dellerajenen@gmail.com', '09331192660', 6, 'School of Arts and Sciences', 'Philosophy and Religious Studies', NULL, 'rep.prs', 'rep.prs', 1),
	('Justine Marie', 'Beltran', 'juztine1828@yahoo.com', '09156700029', 6, 'School of Arts and Sciences', 'Psychology', NULL, 'rep.psych', 'rep.psych', 1),
	('Chrionni Bernard', 'Decrepito', 'king_cbhd@yahoo.com', '09335320311', 6, 'School of Arts and Sciences', 'Anthropology, Sociology and History', NULL, 'rep.ash', 'rep.ash', 1),
	('Norielyn', 'Abalos', 'norielynabalo@gmail.com', '09173266755', 6, 'School of Arts and Sciences','Biology', NULL, 'rep.bio', 'rep.bio', 1),
	('Ligaya', 'Suico', 'missuico@gmail.com', '09333558016', 6, 'School of Arts and Sciences', 'Chemistry', NULL, 'rep.chem', 'rep.chem', 1),
	('Don Bryan', 'Singh', 'sample@yahoo.com', '123456789', 6, 'School of Arts and Sciences','Computer and Information Sciences', NULL, 'rep.dcis', 'rep.dcis', 1),
	('Jay Reulla', 'Bacalso', 'jayreulla@yahoo.com', '09322928192', 6, 'School of Arts and Sciences', 'Mathematics', NULL, 'rep.math', 'rep.math', 1),
	('Marissa', 'Pastor', 'ngpastor@gmail.com', '09178431115', 6, 'School of Arts and Sciences', 'Physics', NULL, 'rep.phys', 'rep.phys', 1),

	/* SED */
	('Mariter', 'Malonjao', 'mtmalonjao@gmail.com', '09228281770', 5, 'School of Education', 'Teacher Education Coordinator', NULL, 'coord.ted', 'coord.ted', 1),
	('Monell John', 'Cañizares', 'monelljohnz@gmail.com', '09069233841', 5, 'School of Education', 'Science and Mathematics Coordinator', NULL, 'coord.sm', 'coord.sm', 1),
	('Marino', 'Garcia', 'marz_928@yahoo.com', '09436915794', 6, 'School of Education', 'Physical Education', NULL, 'rep.pe', 'rep.pe', 1),

	/* SHCP */
	('Laarne', 'Pontillas', 'lcepontillas@yahoo.com', '09324711411', 5, 'School of Health Care Professions', 'Nursing Coordinator', NULL, 'coord.nursing', 'coord.nursing', 1),
	('Glenda', 'Abapo', 'glendagayabapo@gmail.com', '09163975711', 5, 'School of Health Care Professions', 'Pharmacy Coordinator', NULL, 'coord.pharma', 'coord.pharma', 1),
	('Girlie', 'Libato', 'gveracruz70@yahoo.com', '09424647065', 6, 'School of Health Care Professions', 'Nutrition and Dietetics', NULL, 'rep.nd', 'rep.nd', 1),

	/* SLG */
	('Glenn', 'Capanas', 'glenncapanas@gmail.com', '09228502093', 5, 'School of Law and Governance', 'Law Cordinator', NULL, 'coord.law', 'coord.law', 1),
	('Kay', 'Conales', 'ksconales@gmail.com', '09420297653', 5, 'School of Law and Governance', 'Political Science Coordinator', NULL, 'coord.polsci', 'coord.polsci', 1),

	/* SBE */
	('Angela', 'Gomo', 'asgomo70@gmail.com', '09428101770', 5, 'School of Business and Economics', 'Business and Economics Coordinator', NULL, 'coord.sbe', 'coord.sbe', 1),
	('Jun Marlon', 'Denila', 'junmarlonmdenila@gmail.com', '09238799046', 6, 'School of Business and Economics', 'Accountancy', NULL, 'rep.acc', 'rep.acc', 1),
	('Liberato', 'Reyes', 'liberato_reyes@yahoo.com', '09189194249', 6, 'School of Business and Economics', 'Business Administration', NULL, 'rep.ba', 'rep.ba', 1),
	('Alan', 'Tabanao', 'aatabanao@gmail.com', '099998813543', 6, 'School of Business and Economics', 'Economics', NULL, 'rep.econ', 'rep.econ', 1),
	('Angela', 'Gomo', 'asgomo70@gmail.com', '09428101770', 6, 'School of Business and Economics', 'Hospitality Management', NULL, 'rep.hm', 'rep.hm', 1),

	/* SOE */
	('Alex', 'Melchor', 'axmelchor@yahoo.com', '09327867835', 5, 'School of Engineering', 'Engineering Coordinator', NULL, 'coord.eng', 'coord.eng', 1),
	('Previta', 'Fuentes', 'bettyjabines54@yahoo.com', '09228766670', 6, 'School of Engineering', 'Chemical Engineering', NULL, 'rep.cheme', 'rep.cheme', 1),
	('Joey Cyndell', 'Atillo', 'joweyatillo@gmail.com', '09227296324', 6, 'School of Engineering', 'Civil Engineering', NULL, 'rep.ce1', 'rep.ce1', 1),
	('Kathrina', 'Malinao', 'kathyinot@gmail.com', '09336653861', 6, 'School of Engineering', 'Civil Engineering', NULL, 'rep.ce2', 'rep.ce2', 1),
	('Ana Liza', 'Tabanao', 'analiza_tabanao@gmail.com', '09274751269', 6, 'School of Engineering', 'Computer Engineering', NULL, 'rep.come', 'rep.come', 1),
	('Albert', 'Bañacia', 'abanacia@yahoo.com', '09255577004', 6, 'School of Engineering', 'Electronics and Communications Engineering', NULL, 'rep.ece', 'rep.ece', 1),
	('Marcon Philip Ignacio', 'Wong', 'marconphilip@yahoo.com', '09228573029', 6,'School of Engineering', 'Electronics Engineering', NULL, 'rep.ee', 'rep.ee', 1),
	('James Anthony', 'Toledo', 'dhmcarrer@gmail.com', '09326060111', 6,'School of Engineering', 'Industrial Engineering', NULL, 'rep.ie', 'rep.ie', 1),
	('Van Gaitano', 'Vergara', 'vanvergz@yahoo.com', '09229784815',  6,'School of Engineering', 'Mechanical Engineering', NULL, 'rep.me', 'rep.me', 1),

	/* Support Units */
	('Marvin', 'Avergonzado', 'athletics@usc.edu.com', '09275679437',  6, 'Support Units', 'Athletics Office', NULL, 'su.athletics', 'su.athletics', 1),
	('Fr. Roger', 'Bag-ao, SVD', 'touch_usc@yahoo.com', NULL, 6, 'Support Units', 'Campus Ministry, Talamban', NULL, 'su.cmtc1', 'su.cmtc1', 1),
	('Arthur', 'Malicsi', 'dmalicsi@yahoo.com', NULL, 6, 'Support Units', 'Campus Ministry, Talamban', NULL, 'su.cmtc2', 'su.cmtc2', 1),
	('Cipriano', 'Olita', 'cip_olita@yahoo.com', '09324973634', 6, 'Support Units', 'Guidance Center', NULL, 'su.guidance', 'su.guidance', 1),
	('Fe', 'Planas', 'danny_fe@yahoo.com', '09182913004', 6, 'Support Units', 'Director of Library', NULL, 'su.library', 'su.library', 1),
	('Marilyn', 'Andales', 'marilynandales@yahoo.com', NULL,  5,'Support Units', 'OSA Downtown', NULL, 'su.osadc', 'su.osadc', 1),
	('Teodis', 'Buma-at', 'teodis_bumaat@yahoo.com',NULL,  5,'Support Units', 'OSA Talamban', NULL, 'su.osatc', 'su.osatc', 1),
	('Dan Jules', 'Jorolan', 'djjorolan@yahoo.com', NULL,  6,'Support Units', 'Club Mega', NULL, 'su.clubmega1', 'su.clubmega1', 1),
	('Ekim', 'Makañap', NULL, NULL,  6,'Support Units', 'Club Mega', NULL, 'su.clubmega2', 'su.clubmega2', 1),
	('Adrian', 'Tan', NULL, NULL,  6,'Support Units', 'Pathways', NULL, 'su.pathways1', 'su.pathways1', 1),
	('Emmanuel', 'Suarez', NULL, NULL,  6,'Support Units', 'Pathways', NULL, 'su.pathways2', 'su.pathways2', 1),
	('Jeff', 'Go', 'jeff_go12@yahoo.com', NULL,  6,'Support Units', 'USC-Supreme Student Council', NULL, 'su.ssc', 'su.ssc', 1),

	/* Deans */
	('Sample', 'Sample', 'sample@yahoo.com', '123456789', 3, 'School of Architecture, Fine Arts and Design', NULL, NULL, 'dean.safad', 'dean.safad', 1),
	('Delia', 'Belleza', 'sample@yahoo.com', '123456789', 3, 'School of Arts and Sciences', NULL, NULL, 'dean.sas', 'dean.sas', 1),
	('Sample', 'Sample', 'sample@yahoo.com', '123456789', 3, 'School of Education', NULL, NULL, 'dean.sed', 'dean.sed', 1),
	('Sample', 'Sample', 'sample@yahoo.com', '123456789', 3, 'School of Health Care Professions', NULL, NULL, 'dean.shcp', 'dean.shcp', 1),
	('Sample', 'Sample', 'sample@yahoo.com', '123456789', 3, 'School of Law and Governance', NULL, NULL, 'dean.slg', 'dean.slg', 1),
	('Sample', 'Sample', 'sample@yahoo.com', '123456789', 3, 'School of Business and Economics', NULL, NULL, 'dean.sbe', 'dean.sbe', 1),
	('Sample', 'Sample', 'sample@yahoo.com', '123456789', 3, 'School of Engineering', NULL, NULL, 'dean.soe', 'dean.soe', 1),
	
	/* Chairs */
	('Sample', 'Sample', 'sample@yahoo.com', '123456789', 4, 'School of Architecture, Fine Arts and Design', 'Architecture Chairman', NULL, 'chair.archi', 'chair.archi', 1),
	('Sample', 'Sample', 'sample@yahoo.com', '123456789', 4, 'School of Architecture, Fine Arts and Design', 'Fine Arts Chairman', NULL, 'chair.finearts', 'chair.finearts', 1),

	('Sample', 'Sample', 'sample@yahoo.com', '123456789', 4, 'School of Arts and Sciences', 'Languages and Literature', NULL, 'chair.linglit', 'chair.linglit', 1),
	('Sample', 'Sample', 'sample@yahoo.com', '123456789', 4, 'School of Arts and Sciences', 'Philosophy and Religious Studies', NULL, 'chair.prs', 'chair.prs', 1),
	('Sample', 'Sample', 'sample@yahoo.com', '123456789', 4, 'School of Arts and Sciences', 'Psychology', NULL, 'chair.psych', 'chair.psych', 1),
	('Sample', 'Sample', 'sample@yahoo.com', '123456789', 4, 'School of Arts and Sciences', 'Anthropology, Sociology and History', NULL, 'chair.ash', 'chair.ash', 1),
	('Sample', 'Sample', 'sample@yahoo.com', '123456789', 4, 'School of Arts and Sciences','Biology', NULL, 'chair.bio', 'chair.bio', 1),
	('Sample', 'Sample', 'sample@yahoo.com', '123456789', 4, 'School of Arts and Sciences', 'Chemistry', NULL, 'chair.chem', 'chair.chem', 1),
	('Mary Jane', 'Sabellano', 'sample@yahoo.com', '123456789', 4, 'School of Arts and Sciences', 'Computer and Information Sciences', NULL, 'chair.dcis', 'chair.dcis', 1),
	('Sample', 'Sample', 'sample@yahoo.com', '123456789', 4, 'School of Arts and Sciences', 'Mathematics', NULL, 'chair.math', 'chair.math', 1),
	('Sample', 'Sample', 'sample@yahoo.com', '123456789', 4, 'School of Arts and Sciences', 'Physics', NULL, 'chair.phys', 'chair.phys', 1),

	('Sample', 'Sample', 'sample@yahoo.com', '123456789', 4, 'School of Education', 'Physical Education', NULL, 'chair.pe', 'chair.pe', 1),

	('Sample', 'Sample', 'sample@yahoo.com', '123456789', 4, 'School of Health Care Professions', 'Nursing', NULL, 'chair.nursing', 'chair.nursing', 1),
	('Sample', 'Sample', 'sample@gmail.com', '123456789', 4, 'School of Health Care Professions', 'Pharmacy', NULL, 'chair.pharma', 'chair.pharma', 1),
	('Sample', 'Sample', 'sample@yahoo.com', '123456789', 4, 'School of Health Care Professions', 'Nutrition and Dietetics', NULL, 'chair.nd', 'chair.nd', 1),

	('Sample', 'Sample', 'sample@gmail.com', '123456789', 4, 'School of Law and Governance', 'Political Science', NULL, 'chair.polsci', 'chair.polsci', 1),

	('Sample', 'Sample', 'sample@gmail.com', '123456789', 4, 'School of Business and Economics', 'Accountancy', NULL, 'chair.acc', 'chair.acc', 1),
	('Sample', 'Sample', 'sample@yahoo.com', '123456789', 4, 'School of Business and Economics', 'Business Administration', NULL, 'chair.ba', 'chair.ba', 1),
	('Sample', 'Sample', 'sample@gmail.com', '123456789', 4, 'School of Business and Economics', 'Economics', NULL, 'chair.econ', 'chair.econ', 1),
	('Sample', 'Sample', 'sample@gmail.com', '123456789', 4, 'School of Business and Economics', 'Hospitality Management', NULL, 'chair.hm', 'chair.hm', 1),

	('Sample', 'Sample', 'sample@yahoo.com', '123456789', 4, 'School of Engineering', 'Chemical Engineering', NULL, 'chair.cheme', 'chair.cheme', 1),
	('Sample', 'Sample', 'sample@gmail.com', '123456789', 4, 'School of Engineering', 'Civil Engineering', NULL, 'chair.ce1', 'chair.ce1', 1),
	('Sample', 'Sample', 'sample@gmail.com', '123456789', 4, 'School of Engineering', 'Civil Engineering', NULL, 'chair.ce2', 'chair.ce2', 1),
	('Sample', 'Sample', 'sample@gmail.com', '123456789', 4, 'School of Engineering', 'Computer Engineering', NULL, 'chair.come', 'chair.come', 1),
	('Sample', 'Sample', 'sample@yahoo.com', '123456789', 4, 'School of Engineering', 'Electronics and Communications Engineering', NULL, 'chair.ece', 'chair.ece', 1),
	('Sample', 'Sample', 'sample@yahoo.com', '123456789', 4, 'School of Engineering', 'Electronics Engineering', NULL, 'chair.ee', 'chair.ee', 1),
	('Sample', 'Sample', 'sample@gmail.com', '123456789', 4, 'School of Engineering', 'Industrial Engineering', NULL, 'chair.ie', 'chair.ie', 1),
	('Sample', 'Sample', 'sample@yahoo.com', '123456789', 4, 'School of Engineering', 'Mechanical Engineering', NULL, 'chair.me', 'chair.me', 1),

	/* Co-curricular SO */
	('Sample', 'Sample', 'sample@yahoo.com', '123456789', 7, 'School of Arts and Sciences', 'Computer and Information Sciences', 'Dynacom Society', 'dynacom', 'dynacom', 1);

