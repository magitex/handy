-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 03, 2021 at 02:10 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `handyman`
--

-- --------------------------------------------------------

--
-- Table structure for table `cmspage`
--

DROP TABLE IF EXISTS `cmspage`;
CREATE TABLE IF NOT EXISTS `cmspage` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(255) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `page_description` text NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `date_added` date NOT NULL,
  `date_modified` date NOT NULL,
  `is_deleted` enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`page_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cmspage`
--

INSERT INTO `cmspage` (`page_id`, `page_name`, `page_title`, `page_description`, `meta_title`, `meta_keyword`, `meta_description`, `date_added`, `date_modified`, `is_deleted`) VALUES
(1, 'About', 'About Us', '<p>We are a group of senior publishing professionals who have gotten together to create a business that allows us to work in today’s fast-paced globalized environment while remaining true to the time-honoured values of quality-focussed publishing. We believe in curating ideas worldwide and aim to take research and scholarship on/about South Asia across the globe and to bring the best of world scholarship to the region, in the form of books/journals/research projects/reports. We engage with the entire range of disciplines within the humanities and the social sciences.</p>\r\n<p>We see South Asia not merely as a geographical locale, but rather a cultural idea revolving around connectedness, diversity, and pluralism. This thought is reflected in our logo, the inspiration for which was the halo of one of the famed Buddha statues at the Great Stupa at Sanchi. For us the image signifies the pursuit and dissemination of knowledge, endless possibilities, and borderlessness.</p>\r\n<p>Each of us has roughly 15 to 20 years of experience working for some of the most prestigious and successful knowledge management and publishing firms, international and domestic. We offer a wide range of services encompassing the full spectrum of the publishing cycle, including editorial, pre-press, production, both print and digital, marketing, sales, and finance. We value the traditional professionalism and personal touch of the publishing business and hope to bring it back in a meaningful way in today’s context.</p>\r\n<p>We will be happy to respond to proposals and queries about any aspect of our work from universities, institutions, business firms, other networks, and individuals.</p>\r\n<p>Based in New Delhi, India we are in the process of setting up offices in other parts of the world.</p>', '', '', '', '2021-09-22', '2021-09-22', 'N'),
(3, 'Service', 'Services', '<h2>Services for academic institutions and businesses</h2>\r\n<p>Ours is a platform that sustains a seamless flow of ideas and quality content and copyright across the globe through a variety of structural and non-structural interventions.</p>\r\n<p>Besides our publishing programme we offer services in the following areas:</p>\r\n<ul>\r\n                    <li>Editorial services in the Humanities, Social Sciences &amp; Science and Technology</li>\r\n                    <li>Project management</li>\r\n                    <li>Arrangements for South Asian editions of works published outside of the region</li>\r\n                    <li>Workshops on research and publishing</li>\r\n                    <li>Setting up and/or running publishing operations for universities/business firms/ organizations</li>\r\n                    <li>Editorial support for business firms/corporate houses/institutions and individuals</li>\r\n                </ul>\r\n<h2>Customized Support :</h2>\r\n<p>We offer three different kinds of packages depending on the level of intervention and nature of services required.</p>\r\n<p>The first two packages cover editorial interventions while the third one covers publishing and distribution as well.</p>\r\n<ul>\r\n<li><strong>PACKAGE -1:</strong> Preparing scripts for submission to publishers</li>\r\n<li><strong>PACKAGE -2:</strong> Study of Expert Comments, Editorial, Pre-press, Indexing</li>\r\n<li><strong>PACKAGE -3:</strong> End to End Publishing Services</li>\r\n</ul>', '', '', '', '2021-09-22', '2021-09-22', 'N'),
(4, 'Publish With Us', 'Publish With Us', '<p>We will be happy to receive book proposals on any discipline within the humanities and social sciences. The proposed publications may be for an academic and scholarly audience or for a wider educated, but non-specialist target readership.</p>\r\n                <p>Ask us for our book proposal form.</p>\r\n                <p><a href=\"editorial@southasiapress.com\">editorial@southasiapress.com</a></p>', '', '', '', '2021-09-22', '2021-09-22', 'N'),
(5, 'Work With Us', 'Work With Us', '<p>We are looking for dynamic, creative, and sincere individuals with excellent communication skills, written as well as oral, to work with us both in the Editorial and Commissioning/Product Development fields. The educational background of candidates may be in any field of the humanities or social sciences.</p>\r\n                <p>We encourage work-from-home and freelance arrangements.</p>\r\n                <p>Contact us with your current CVs indicating your interests and relevant experience.</p>\r\n                <p><a href=\"editorial@southasiapress.com\">editorial@southasiapress.com</a></p>', '', '', '', '2021-09-22', '2021-09-22', 'N'),
(6, 'Contact Us', 'Contact Us', '', '', '', '', '2021-09-22', '2021-09-22', 'N'),
(2, 'Book', 'Book Store', '', '', '', '', '2021-09-22', '2021-09-22', 'N'),
(8, 'Privacy Policy', 'Privacy Policy', '<p>We are committed to protecting your privacy and this page outlines our policy concerning your personal information. By using the CollegeStreet.net website, you accept the practices described in this Privacy Policy. We aim to maintain consistently high levels of best practice in the processing of your personal data.</p>\r\n                <h2>What information do we collect ?</h2>\r\n                <p>CollegeStreet.net collects the details provided by you when you order or register on our site. CollegeStreet.net does NOT collect information about the transactions you undertake including details of payment cards used. The credit card transaction information is collected by our payment processors, Razorpay. Information we collect from you may be used in one or more of the following ways: To personalize your experience (your information helps us to better respond to your individual needs) To improve our website (we continually strive to improve our website offerings based on the information and feedback we receive from you) To improve our customer service (your information helps us to more effectively respond to your customer service requests and support needs)</p>\r\n                <h2>How do we protect your information ?</h2>\r\n                <p>We follow strict security procedures in the storage and disclosure of customer information. All sensitive credit information is transmitted in our payment processor\'s web site via Secure Socket Layer (SSL) technology. SSL is the industry standard method of encrypting personal information and credit/debit card details so that they can be securely transferred over the internet.</p>\r\n                <h2>Do we use Cookies ?</h2>\r\n                <p>Yes, this site uses cookies if enabled in your browser. Cookies are pieces of information sent by a web server to a web browser, which enables the server to collect certain information from the browser. CollegeStreet.net uses cookies for a number of purposes, for instance to enable us to simplify the logging on process for registered users, to help ensure the security and authenticity of registered users, to provide the mechanisms for online shopping and to enable traffic monitoring. </p>\r\n                <h2>Do we disclose any information to outside parties ?</h2>\r\n                <p>We do not sell, trade or otherwise transfer to outside parties your personally identifiable information.<br>We are not responsible for the privacy policy of other websites.</p>\r\n                <h2>Changes to our Privacy Policy</h2>\r\n                <p>We reserve the right to make changes to this Privacy Policy at anytime. Any changes made will be updated on our website.</p>\r\n                <h2>Access Rights</h2>\r\n                <p>You have the right at any time to access the personal data that we hold about you by furnishing us with a written request. There is no fee for providing this information. We are concerned to ensure that at all times such personal data as we hold about you, is accurate, up to date and is not in excess of what we require to enable you to avail of our services. Therefore, if your personal information changes, or indeed if you no longer wish to receive communications from us, please let us know and we will correct, update or delete your personal data as appropriate. This can be done by emailing us at collegestreetnet@gmail.com </p>\r\n            ', '', '', '', '2021-09-22', '2021-09-22', 'N'),
(9, 'Cancellation Policy', 'Cancellation Policy', '<h2>For Paid orders(paid via online) </h2>\r\n                <p>The customer has the right to cancel the order immediatley after has placed and paid for the order online using the Net Banking . CC/ DC or wallets. However, once order shipped , can\'t be cancelled. \r\nFor cancelled order a refund coupon will be generated and same can be redeemed in future orders. For any query related to cancellation of the order please whatsapp at 98742 63413.</p>\r\n                <h2>For Cash-on-delivery</h2>\r\n                <p>The customer can cancel their COD order before or during tele-verification. Once the customer confirm the COD order with tele-verification, it cant be cancelled. If any COD order get returned from address due to unavailability / denial of accpetenace of the shipment , no further COD order will be processed for the same address</p>\r\n                <h2>Unavailability of the one or more ordered books</h2>\r\n                <p>If any one or more book(s) are unavailble ( due to out of print or any other reason ) in any Paid orders , we will issue discount coupon of the same value for customer which can be redeemed in future orders. </p>\r\n                <p><b>Example:</b> if in an order placed of amount INR 630/- ( book values are of INR 200/-, INR 250/- &amp; INR 180/-), book value of INR 250/- can\'t be delivered due to out of print or any other reason we will issue a discount coupon of Rs. 250/- and same will be send with other two available books This discount coupon can be redeemed in future order. </p>\r\n            ', '', '', '', '2021-09-22', '2021-09-22', 'N'),
(10, 'Shipping Rules', 'Shipping Rules', '<p>Comong soon...</p>', 'Shipping Rules', 'Shipping Rules', 'Shipping Rules', '2021-09-22', '2021-11-01', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_add`
--

DROP TABLE IF EXISTS `tbl_add`;
CREATE TABLE IF NOT EXISTS `tbl_add` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) NOT NULL DEFAULT 0,
  `page_name` varchar(128) NOT NULL,
  `title` varchar(128) NOT NULL,
  `multi_file` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT 0,
  `createdDtm` date DEFAULT NULL,
  `meta_title` varchar(128) NOT NULL,
  `meta_description` varchar(128) NOT NULL,
  `meta_tag` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_add`
--

INSERT INTO `tbl_add` (`id`, `parent_id`, `page_name`, `title`, `multi_file`, `description`, `isDeleted`, `createdDtm`, `meta_title`, `meta_description`, `meta_tag`) VALUES
(17, 0, 'Our Goal', 'Our Goal', 'sayak3.png', '<p>Our Goal</p>', 1, '0000-00-00', 'Our Goal', 'Our Goal', 'Our Goal'),
(18, 0, 'Our Goal', 'Our Goal', 'sayak4.png', '<p>Our Goal</p>', 1, '2021-06-10', 'Our Goal', 'Our Goal', 'Our Goal'),
(19, 0, 'Our Mission', 'Our Mission', 'Tombstone_with_Engravings_-_Gandzasar_Monastery_-_Nagorno-Karabakh_(19204575815).jpg', '<p class=\"MsoNormal\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: 14.6667px;\">Caucasus Heritage Watch was founded in 2020 to monitor and document endangered and damaged cultural heritage using high-resolution satellite imagery. We strive to reveal visual evidence regarding past and present cultural erasure using the latest technologies of earth observation. Our purpose is to encourage accountability, inform public policy, support truth and reconciliation, and remove cultural heritage from the front lines of regional conflicts.</span></span></p>', 0, '2021-06-26', 'Our Mission', 'Our Mission', 'Our Mission'),
(20, 0, 'Our Goals', 'Our Goals', 'Asset_1.png', '<ul style=\"margin-top: 0cm;\" type=\"disc\">\r\n<li class=\"MsoNormal\" style=\"color: black; margin-top: 12.0pt; mso-list: l0 level1 lfo1; tab-stops: list 36.0pt; vertical-align: baseline;\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: 14.6667px;\">Truth-telling: &nbsp;Investigating and monitoring past and future damage to cultural heritage can contribute to the work of truth and reconciliation. In contexts of war and genocide, cultural aerospace can bear witness to the condition of cultural heritage sites. These facts provide proof to counter state denialism, falsification, and other abuses that place heritage sites at the center of political conflict. Social repair can only happen when societies come to terms with troubled pasts and difficult truths.</span></span></li>\r\n<li class=\"MsoNormal\" style=\"color: black; margin-top: 12.0pt; mso-list: l0 level1 lfo1; tab-stops: list 36.0pt; vertical-align: baseline;\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: 14.6667px;\">Deterrence: There are few instruments for deterring the destruction of cultural heritage within a state&rsquo;s sovereign borders. Satellite-based monitoring has the potential to discourage or restrain state actors from intentional erasure both through the act of bearing witness, and by the dissemination of authoritative research to relevant national and international agencies and public.</span></span></li>\r\n<li class=\"MsoNormal\" style=\"color: black; margin-top: 12.0pt; mso-list: l0 level1 lfo1; tab-stops: list 36.0pt; vertical-align: baseline;\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: 14.6667px;\">Accountability: In contexts of conflict and genocide, abuses to cultural heritage are often clandestine, making it difficult to hold actors accountable. Satellite-based monitoring that reveals the destruction of cultural heritage can provide a forensic resource so that the public can hold responsible parties accountable for harms, including their own leaders.&nbsp;&nbsp;</span></span></li>\r\n<li class=\"MsoNormal\" style=\"color: black; margin-top: 12.0pt; mso-list: l0 level1 lfo1; tab-stops: list 36.0pt; vertical-align: baseline;\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: 14.6667px;\">Innovation: Caucasus Heritage Watch works to develop new techniques in the use of geospatial technologies for sustained, large-scale monitoring of cultural heritage at risk. As researchers, we seek to innovate new and transferrable methodologies that can amplify our practical impact and disseminate workflows that can empower partners in the region and assist researchers in other parts of the world.</span></span></li>\r\n</ul>', 0, '2021-07-01', 'Our Goals', 'Our Goals', 'Our Goals'),
(21, 0, 'What We Do', 'What We Do', 'ReportSH_053-0.png', '<p class=\"MsoNormal\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: 14.6667px;\"><span style=\"text-decoration: underline;\">Heritage Monitoring</span>: Our inventory of cultural heritage sites in Nagorno-Karabakh currently includes over 2000 entries spread across an area of approximately 12,000 square kilometers.</span></span><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: 14.6667px;\">At any particular moment, we have hundreds of discrete locations under satellite surveillance, including churches and mosques, cemeteries and fields of carved stones, bridges, and other cultural properties that tell the dynamic story of centuries of life in the region. The locations that we monitor will change as conditions on the ground change. Our site inventory is the result of extensive consultations with our partners, who share our concern for heritage preservation in the South Caucasus. Our partners are fundamental to what we do, providing expertise, experience, and eyes on the ground.</span></span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: 14.6667px;\">Because the CHW team is composed of archaeologists with a long history of working in Armenia, thus far our partners are Yerevan-based. As we undertake the time-consuming work of developing a geospatial inventory of Azerbaijani cultural heritage sites in Nagorno-Karabakh, we welcome new partnerships with specialists in Azerbaijani cultural heritage who support our mission and wish to assist in this work.</span></span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: 14.6667px;\">At present, our primary focus is on monitoring the condition of hundreds of Armenian historical monuments that now are under Azerbaijan&rsquo;s jurisdiction following a November 2020 ceasefire. As described in our summary assessment, we have determined through research and consultation that these monuments are currently under the most severe threat. This assessment is bolstered by both historical research into Azerbaijan&rsquo;s erasure of Armenian monuments in the province of Nakhchivan/Nakhichevan and by explicit threats of cultural erasure issued by Azerbaijani officials, from the President and Minister of Culture to the Chairman of the Union of Architects.</span></span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: 14.6667px;\">CHW&rsquo;s monitoring effort is specifically focused on heritage monuments. It is not within our mission to document the wider destruction of towns, villages and cities over the 30 years of conflict in the Nagorno-Karabakh region.&nbsp;</span></span><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: 14.6667px;\">We focus on historic sites that have been the subject of archaeological, architectural, or art historical research and are included on Soviet or post-Soviet state inventories of cultural properties. But it is important to note that we see the wider, heart-breaking destruction that has impacted the lives of so many Azerbaijani and Armenian families. We deplore the combination of violence and poverty that has created Nagorno-Karabakh&rsquo;s ravaged landscape. And we surveil these areas with a deep sense of empathy for the lives lost and futures upended. Nevertheless, we draw a distinction between the destruction and abandonment of villages over the course of this long-standing conflict and the systematic attempts to eradicate heritage properties as a means to erase communities from the region&rsquo;s past and thus rewrite the region&rsquo;s history. It is our hope that in the years we study this region we will see it bloom with new hope and a lasting peace.</span></span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: 14.6667px;\">There are some kinds of threats to cultural heritage that CHW is not well-equipped to address. Satellite imagery provides evidence of damage, but it cannot detect acts of desecration or directly combat heritage appropriation. Since the cease-fire, representatives of Azerbaijan&rsquo;s government have embarked on an extensive campaign to claim Armenian heritage sites as either non-existent or as &ldquo;Caucasian Albanian&rdquo;. Both represent fraudulent historical claims unsupported by international research. The vast majority of experts in the region&rsquo;s art, architecture, and archaeology have all rejected Azerbaijan&rsquo;s revisionist claims as patently false. Nevertheless, the Caucasian Albanian propaganda has sparked some iconoclastic efforts to erase Armenian imagery and inscriptions from buildings and monuments. We are aware of these threats and track them via social media, but as these subtle but significant forms of erasure are not visible from our satellite imagery, we will have to rely on partners to document these activities.</span></span></p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: 14.6667px;\">Archival Research: In addition to monitoring current threats in and around Nagorno-Karabakh, we are also working to provide further documentation of cultural genocide in Nakhichevan/Nakhchivan and research accusations regarding the abuse of Islamic sites in Nagorno-Karabakh. This archival dimension of our research requires extensive work with lower resolution archival satellite imagery and hence will necessarily proceed at a slower pace than our monitoring of current threats.</span></span></p>', 0, '2021-06-26', 'What We Do', 'What We Do', 'What We Do'),
(22, 0, 'How We Work', 'How We Work', 'ReportHT_069-1.png', '<p><em>Satellite Tasking:</em>&nbsp;CHW documents changes in the built environment of cultural landscapes using high resolution satellite imagery. In order to monitor the condition of currently endangered sites, we task satellites to capture images throughout the year, providing a regularly updated stream of information on the physical integrity of cultural heritage sites in the region. We request imagery based on known or reported threats as well as our analysis of potential risks. Each site is examined by comparing recent captures to baseline imagery. For the purposes of this report, baseline imagery is satellite data that predates the 2020 conflict. These images are then compared with new captures from spring 2021 in order to detect and describe change at each heritage site of interest. Subsequent reports will compare newly tasked images with previously tasked images.</p>\r\n<p>Evidence for damage or destruction is passed from individual monitors to the team for group evaluation. If full agreement is reached, the site is flagged as either destroyed, damaged, or threatened. Consultations are held with our partners as the team works toward a strategic response. When CHW and its partners conclude that public scrutiny might blunt further intentional or accidental damage to a site or other sites in the vicinity, we use social media to broadcast the threat and to help focus the attention of relevant organizations, analysts, journalists and authorities. A GIS-powered dashboard on our website provides a summary of our current understanding of damaged and destroyed sites, as well as those that may be at elevated risk due to changes on the landscape. And at regular intervals during the year, we produce summary reports that document in greater detail evidence for impacts on cultural heritage, including findings of damage beyond those reported on social media.</p>\r\n<p><em>Archival Analysis:</em>&nbsp;CHW recognizes that the cultural heritage of Nagorno-Karabakh and Nakhichevan/Nakhchivan has already suffered multiple waves of destruction in its recent history. We are actively engaged in several forensic research projects to document aspects of past episodes of destruction using declassified and public-domain satellite imagery, and will release these reports on our website as they become available.</p>\r\n<p>The methodology for our archival work entails identifying suitable images in existing repositories (e.g. declassified Cold War-era satellite imagery and aerial photographs) and working to document substantial changes to cultural heritage sites from the late Soviet period to the years following the first Nagorno-Karabakh war.</p>\r\n<p><em>Our Tools:&nbsp;</em>At the turn of the 21st century, publicly available high-resolution, multispectral satellite imagery provided archaeologists a new ability to remotely monitor damage inflicted on archaeological sites from looting and regional conflicts in places like Syria and Iraq. Since then, expanding commercial and public-domain satellite ventures offer important opportunities to harness evolving technologies of earth observation more directly in service of heritage monitoring. Each satellite platform carries trade-offs that must be weighed, including cost, spatial resolution, and frequency of image capture. For the purposes of monitoring threatened sites in Nagorno-Karabakh, the ability to control when and where a satellite flies over a site is vital in the forensic assessment of site destruction. Unlike the unpredictable and spotty coverage of the South&nbsp;Caucasus available on Google Earth, Planet Lab&rsquo;s SkySat platform provides us the ability to \"task\" their satellites to provide their highest resolution (52 cm), multispectral imagery of specific at-risk locations essentially on-demand. The SkySat constellation consists of 21 satellites orbiting the Earth and capturing imagery 5-7 times per day, providing us the data we need to regularly assess site conditions and inform regional stakeholders in a timely manner.</p>\r\n<p>Our baseline data on the condition of heritage in Nagorno-Karabakh prior to the 2020 conflict comes from Maxar satellite platforms. As the project moves forward, we will be developing a significant archive of baseline data for comparison to the most recent image captures.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\"><strong>Tasking satellites for monitoring:</strong></p>\r\n<p class=\"MsoNormal\">In order to monitor the condition of currently endangered sites, we task satellites to capture images throughout the year, providing a regularly updated stream of information on the physical integrity of cultural heritage sites in the region. We request imagery based on known or reported threats as well as our analysis of potential risks. Each site is examined by comparing recent captures to baseline imagery.</p>\r\n<p class=\"MsoNormal\">Evidence for damage or destruction is passed from individual monitors to the team for group evaluation. If full agreement is reached, the site is flagged as either destroyed, damaged, or at heightened risk. Consultations are held with our partners as the team works toward a strategic response. When CHW and its partners conclude that public scrutiny might blunt further intentional or accidental damage to a site or other sites in the vicinity, we use social media to broadcast the threat and to help focus the attention of relevant organizations, analysts, journalists and authorities. A GIS-powered dashboard on our website provides a summary of our current understanding of damaged and destroyed sites, as well as those that may be at elevated risk due to changes on the landscape. And at regular intervals during the year, we produce summary reports that document in greater detail evidence for impacts on cultural heritage, including findings of damage that may not have been reported on social media.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\"><strong>Using archival imagery to investigate past destruction:</strong></p>\r\n<p class=\"MsoNormal\">CHW recognizes that the cultural heritage of Nagorno-Karabakh and Nakhichevan/Nakhchivan has already suffered multiple waves of destruction in its recent history. We are actively engaged in several forensic research projects to document aspects of past episodes of destruction using declassified and public-domain satellite imagery, and will release these reports on our website as they become available.</p>\r\n<p class=\"MsoNormal\">The methodology for our archival work entails identifying suitable images in existing repositories (e.g. declassified archival satellite imagery, aerial photographs) and working to document substantial changes to cultural heritage sites from the late Soviet period to the years following the first Nagorno-Karabakh war.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\"><strong>Our tools:</strong></p>\r\n<p class=\"MsoNormal\">At the turn of the 21st century, publicly available high-resolution, multispectral satellite imagery provided archaeologists a new ability to remotely monitor damage inflicted on archaeological sites from looting and regional conflicts in places like Syria and Iraq. Since then, expanding commercial and public-domain satellite ventures offer important opportunities to harness evolving technologies of earth observation more directly in service of heritage monitoring. Each satellite platform carries trade-offs that must be weighed, including cost, spatial resolution, and frequency of image capture. For the purposes of monitoring threatened sites in Nagorno-Karabakh, the ability to control when and where a satellite flies over a site is vital in the forensic assessment of site destruction. Unlike the unpredictable and spotty coverage of the South Caucasus available on Google Earth, Planet Lab&rsquo;s SkySat platform provides us the ability to &ldquo;task&rdquo; their satellites to provide their highest resolution (50 cm), multispectural imagery of specific at-risk locations essentially on-demand. The SkySat constellation consists of 21 satellites orbiting the Earth and capturing imagery 5-7 times per day, providing us the data we need to regularly assess site conditions and inform regional stakeholders in a timely manner.</p>', 0, '2021-06-28', 'How We Work', 'How We Work', 'How We Work'),
(23, 0, 'Why We Do This', 'Why We Do This', 'Footer.png', '<p class=\"MsoNormal\" style=\"margin: 12.0pt 0cm 12.0pt 0cm;\">There are a number of reasons why we founded CHW. None of them are about partisanship in the Nagorno-Karabakh conflict. We value the heritage of all communities. But we deplore and condemn heritage erasure and other deliberate abuses of tangible heritage. We seek to not only prevent destruction where we can but also clearly and soberly place responsibility where it belongs. That said, we recognize that the public deployment of satellite surveillance is a unique strategy and hence need to clearly justify both the time and expense of the effort.</p>\r\n<p class=\"MsoNormal\" style=\"margin: 12.0pt 0cm 12.0pt 0cm;\">CHW assesses the current threat to Armenian heritage monuments to be both present and long-term, necessitating a sustained program of surveillance. Archaeology has only rarely had the capacity to document an episode of heritage erasure in real time. By joining new technologies with the expertise of descendant communities, CHW is attempting to intervene in the kinds of silent erasure that took place first in Turkey, in the aftermath of the Armenian Genocide, and more recently in Nakhichevan/Nakhchivan. The destruction of the khachkars at the cemetery of Djulfa is already well-documented, including by advanced satellite image analysis, and historical research has also established the destruction of numerous Armenian churches, including at least seven just in the village of Agulis alone. Azerbaijan&rsquo;s leaders have gone on record with hostile remarks that clearly endorse attacks on Armenian heritage sites, including explicit calls for the erasure or falsification of cultural monuments. Delays in providing UNESCO inspectors access to the region suggest an effort to control the scope of such a mission. Given the bellicose rhetoric from Baku and the unwillingness to allow unfettered expert oversight, it can be no surprise that CHW has concluded that state-sponsored heritage destruction, combined with vandalism inspired by a governmental failure to protect heritage sites, represents a clear and immediate threat to the region&rsquo;s Armenian heritage.&nbsp;</p>\r\n<p class=\"MsoNormal\" style=\"margin: 12.0pt 0cm 12.0pt 0cm;\">It might be naive to suggest that we can forestall heritage erasure once initiated; but by documenting events in something close to real time, we change the traditional form of narrating cultural genocide. Forensic accounts of cultural genocide are typically elegies of loss, where accountability is clouded by distortions of the historical record by those in power. By doing the forensic work in real time, we are sounding an alarm rather than writing an elegy. And where possible, we are assigning culpability directly rather than diffusely.&nbsp;</p>\r\n<p class=\"MsoNormal\" style=\"margin: 12.0pt 0cm 12.0pt 0cm;\">To acknowledge cultural erasure in both Turkey and Nakhchivan/Nakhichevan is not to be partisan. It is to state historical facts corroborated by the preponderance of evidence. Where we are unsure, we will say so. Where the images clearly demonstrate, we will say so. Where we simply don&rsquo;t know, we will say so.</p>\r\n<p class=\"MsoNormal\" style=\"margin: 12.0pt 0cm 12.0pt 0cm;\">Past damage to cultural heritage does not justify or excuse current or future attacks. CHW does not condone assaults on cultural heritage past or present by either party in this conflict. And we strongly reject the moral logic of &ldquo;what about-ism&rdquo; that seeks to justify damage today by pointing to destruction in the past. Our goal is to break that cycle of endless recrimination by recognizing past destruction but also keeping a watchful eye on the present. Only through regular, publicly visible surveillance can we hope to clearly establish accountability and ultimately take the region&rsquo;s heritage off of the front lines of the conflict.</p>\r\n<p class=\"MsoNormal\" style=\"margin: 12.0pt 0cm 12.0pt 0cm;\">&nbsp;</p>\r\n<p class=\"MsoNormal\" style=\"margin: 12.0pt 0cm 12.0pt 0cm;\">&nbsp;</p>\r\n<p class=\"MsoNormal\" style=\"margin: 12.0pt 0cm 12.0pt 0cm;\"><strong>Why do we make our findings public?</strong></p>\r\n<p class=\"MsoNormal\" style=\"margin: 12.0pt 0cm 12.0pt 0cm;\">Our goal is not to simply document heritage destruction but to deter it; it is therefore important for our observations to be broadly disseminated. We have chosen Twitter (@CaucasusHW) and Facebook as platforms for broadcasting impact notices and threat alerts. These are meant to complement our regular reports by providing more timely assessments. Before we tweet, our threat alerts and damage assessments go through a series of protocols that require careful thought, consultation and evaluation. If a CHW monitor detects damage or an immediate potential threat, the full CHW team is notified. If the other team members verify the situation of concern, our next step is to consider what steps to take. A decision to push the issue to social media is taken only when CHW believes public scrutiny might ameliorate the situation and/or spur public bodies to action, including journalists, multinational organizations, and civil society activists. If concerns emerge that publicity might make a situation worse, we reserve the observation for the next report. If we determine that public attention is merited, we then consult with our partner stakeholders, experts in the archaeology and architecture of the region, to seek their input on both our monitoring observation and publication plan. We then prepare the impact imagery from our archive and compose the written assessment for our report and/or social media.&nbsp;</p>', 0, '2021-06-28', 'Why We Do This', 'Why We Do This', 'Why We Do This'),
(24, 21, 'Monitoring', 'Heritage Monitoring', 'VankasarSmall.jpg', '<p class=\"MsoNormal\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: 14.6667px;\">Our inventory of cultural heritage sites in Nagorno-Karabakh currently includes over 2000 entries spread across an area of approximately 12,000 square kilometers.</span></span><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: 14.6667px;\">At any particular moment, we have hundreds of discrete locations under satellite surveillance, including churches and mosques, cemeteries and fields of carved stones, bridges, and other cultural properties that tell the dynamic story of centuries of life in the region. The locations that we monitor will change as conditions on the ground change. Our site inventory is the result of extensive consultations with our partners, who share our concern for heritage preservation in the South Caucasus. Our partners are fundamental to what we do, providing expertise, experience, and eyes on the ground.</span></span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: 14.6667px;\">Because the CHW team is composed of archaeologists with a long history of working in Armenia, thus far our partners are Yerevan-based. As we undertake the time-consuming work of developing a geospatial inventory of Azerbaijani cultural heritage sites in Nagorno-Karabakh, we welcome new partnerships with specialists in Azerbaijani cultural heritage who support our mission and wish to assist in this work.</span></span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: 14.6667px;\">At present, our primary focus is on monitoring the condition of hundreds of Armenian historical monuments that now are under Azerbaijan&rsquo;s jurisdiction following a November 2020 ceasefire. As described in our summary assessment, we have determined through research and consultation that these monuments are currently under the most severe threat. This assessment is bolstered by both historical research into Azerbaijan&rsquo;s erasure of Armenian monuments in the province of Nakhchivan/Nakhichevan and by explicit threats of cultural erasure issued by Azerbaijani officials, from the President and Minister of Culture to the Chairman of the Union of Architects.</span></span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: 14.6667px;\">CHW&rsquo;s monitoring effort is specifically focused on heritage monuments. It is not within our mission to document the wider destruction of towns, villages and cities over the 30 years of conflict in the Nagorno-Karabakh region.&nbsp;</span></span><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: 14.6667px;\">We focus on historic sites that have been the subject of archaeological, architectural, or art historical research and are included on Soviet or post-Soviet state inventories of cultural properties. But it is important to note that we see the wider, heart-breaking destruction that has impacted the lives of so many Azerbaijani and Armenian families. We deplore the combination of violence and poverty that has created Nagorno-Karabakh&rsquo;s ravaged landscape. And we surveil these areas with a deep sense of empathy for the lives lost and futures upended. Nevertheless, we draw a distinction between the destruction and abandonment of villages over the course of this long-standing conflict and the systematic attempts to eradicate heritage properties as a means to erase communities from the region&rsquo;s past and thus rewrite the region&rsquo;s history. It is our hope that in the years we study this region we will see it bloom with new hope and a lasting peace.</span></span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: 14.6667px;\">There are some kinds of threats to cultural heritage that CHW is not well-equipped to address. Satellite imagery provides evidence of damage, but it cannot detect acts of desecration or directly combat heritage appropriation. Since the cease-fire, representatives of Azerbaijan&rsquo;s government have embarked on an extensive campaign to claim Armenian heritage sites as either non-existent or as &ldquo;Caucasian Albanian&rdquo;. Both represent fraudulent historical claims unsupported by international research. The vast majority of experts in the region&rsquo;s art, architecture, and archaeology have all rejected Azerbaijan&rsquo;s revisionist claims as patently false. Nevertheless, the Caucasian Albanian propaganda has sparked some iconoclastic efforts to erase Armenian imagery and inscriptions from buildings and monuments. We are aware of these threats and track them via social media, but as these subtle but significant forms of erasure are not visible from our satellite imagery, we will have to rely on partners to document these activities.</span></span></p>', 0, '2021-06-30', 'Monitoring', 'Monitoring', 'Monitoring'),
(25, 21, 'Historical Research', 'Historical Research', 'Historical-Agulis.jpg', '<p class=\"MsoNormal\" style=\"margin: 12.0pt 0in 12.0pt 0in;\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: 14.6667px;\">In addition to monitoring current threats in and around Nagorno-Karabakh, we are also working to provide further documentation of cultural genocide in Nakhichevan/Nakhchivan and research accusations regarding the abuse of Islamic sites in Nagorno-Karabakh.&nbsp;</span></span><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: 14.6667px;\">This archival dimension of our work requires analysis of lower resolution historic satellite imagery and hence will necessarily proceed at a slower pace than our monitoring of current threats.</span></span></p>\r\n<p class=\"MsoNormal\" style=\"margin: 12.0pt 0in 12.0pt 0in;\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: 14.6667px;\">CHW\'s archival research utilizes the USGS Earth Resources Observation and Science (EROS) center\'s extensive database of declassified US surveillance images, including the CORONA, Gambit, and Hexagon missions. These reconnaissance operations utilized medium- to high-resolution cameras using photographic film to image strategic locations, including many in the South Caucasus.</span></span></p>\r\n<p class=\"MsoNormal\" style=\"margin: 12.0pt 0in 12.0pt 0in;\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: 14.6667px;\">Analyses of historical imagery can be paired with more recent earth observation platforms available through Google Earth or other free providers to create a documentary record of cultural erasure.</span></span></p>', 0, '2021-06-26', 'Historical Research', 'Historical Research', 'Historical Research'),
(26, 23, 'Why do we make our findings public', 'Why do we make our findings public', 'South-Caucasus-map-Google-6181.jpg', '<p><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: 14.6667px;\">Our goal is not to simply document heritage destruction but to deter it; it is therefore important for our observations to be broadly disseminated. We have chosen Twitter (@CaucasusHW) and Facebook as platforms for broadcasting impact notices and threat alerts. These are meant to complement our regular reports by providing more timely assessments. Before we tweet, our threat alerts and damage assessments go through a series of protocols that require careful thought, consultation and evaluation. If a CHW monitor detects damage or an immediate potential threat, the full CHW team is notified. If the other team members verify the situation of concern, our next step is to consider what steps to take. A decision to push the issue to social media is taken only when CHW believes public scrutiny might ameliorate the situation and/or spur public bodies to action, including journalists, multinational organizations, and civil society activists. If concerns emerge that publicity might make a situation worse, we reserve the observation for the next report. If we determine that public attention is merited, we then consult with our partner stakeholders, experts in the archaeology and architecture of the region, to seek their input on both our monitoring observation and publication plan. We then prepare the impact imagery from our archive and compose the written assessment for our report and/or social media.</span></span></p>', 1, '2021-06-24', 'Why do we make our findings public', 'Why do we make our findings public', 'Why do we make our findings public'),
(27, 22, 'Tasking satellites for monitoring', 'Tasking satellites for monitoring', 'The-Caucasus-20191.jpg', '<p class=\"MsoNormal\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: 14.6667px;\">In order to monitor the condition of currently endangered sites, we task satellites to capture images throughout the year, providing a regularly updated stream of information on the physical integrity of cultural heritage sites in the region. We request imagery based on known or reported threats as well as our analysis of potential risks. Each site is examined by comparing recent captures to baseline imagery.</span></span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: 14.6667px;\">&nbsp;</span></span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: 14.6667px;\">&nbsp;</span></span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: 14.6667px;\">Evidence for damage or destruction is passed from individual monitors to the team for group evaluation. If full agreement is reached, the site is flagged as either destroyed, damaged, or at heightened risk. Consultations are held with our partners as the team works toward a strategic response. When CHW and its partners conclude that public scrutiny might blunt further intentional or accidental damage to a site or other sites in the vicinity, we use social media to broadcast the threat and to help focus the attention of relevant organizations, analysts, journalists and authorities. A GIS-powered dashboard on our website provides a summary of our current understanding of damaged and destroyed sites, as well as those that may be at elevated risk due to changes on the landscape. And at regular intervals during the year, we produce summary reports that document in greater detail evidence for impacts on cultural heritage, including findings of damage that may not have been reported on social media.</span></span></p>', 1, '2021-06-24', 'Tasking satellites for monitoring', 'Tasking satellites for monitoring', 'Tasking satellites for monitoring'),
(28, 22, 'Using archival imagery to investigate past destruction', 'Using archival imagery to investigate past destruction', 'South-Caucasus-map-Google-6182.jpg', '<p class=\"MsoNormal\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: 14.6667px;\">CHW recognizes that the cultural heritage of Nagorno-Karabakh and Nakhichevan/Nakhchivan has already suffered multiple waves of destruction in its recent history. We are actively engaged in several forensic research projects to document aspects of past episodes of destruction using declassified and public-domain satellite imagery, and will release these reports on our website as they become available.</span></span></p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: 14.6667px;\">The methodology for our archival work entails identifying suitable images in existing repositories (e.g. declassified archival satellite imagery, aerial photographs) and working to document substantial changes to cultural heritage sites from the late Soviet period to the years following the first Nagorno-Karabakh war.</span></span></p>', 1, '2021-06-24', 'Using archival imagery to investigate past destruction', 'Using archival imagery to investigate past destruction', 'Using archival imagery to investigate past destruction'),
(29, 22, 'Our tools', 'Our tools', 'South-Caucasus-map-Google-6183.jpg', '<p class=\"MsoNormal\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: 14.6667px;\">At the turn of the 21st century, publicly available high-resolution, multispectral satellite imagery provided archaeologists a new ability to remotely monitor damage inflicted on archaeological sites from looting and regional conflicts in places like Syria and Iraq. Since then, expanding commercial and public-domain satellite ventures offer important opportunities to harness evolving technologies of earth observation more directly in service of heritage monitoring. Each satellite platform carries trade-offs that must be weighed, including cost, spatial resolution, and frequency of image capture. For the purposes of monitoring threatened sites in Nagorno-Karabakh, the ability to control when and where a satellite flies over a site is vital in the forensic assessment of site destruction. Unlike the unpredictable and spotty coverage of the South Caucasus available on Google Earth, Planet Lab&rsquo;s SkySat platform provides us the ability to &ldquo;task&rdquo; their satellites to provide their highest resolution (50 cm), multispectural imagery of specific at-risk locations essentially on-demand. The SkySat constellation consists of 21 satellites orbiting the Earth and capturing imagery 5-7 times per day, providing us the data we need to regularly assess site conditions and inform regional stakeholders in a timely manner.</span></span></p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: 14.6667px;\">Our baseline data on the condition of heritage in Nagorno-Karabakh prior to the 2020 conflict comes from Maxar satellite platforms. As the project moves forward, we will be developing a significant archive of baseline data for comparison to the most recent image captures.</span></span></p>', 1, '2021-06-24', 'Our tools', 'Our tools', 'Our tools'),
(30, 0, 'Who we are', 'Who we are', 'South-Caucasus-map-Google-6184.jpg', '<p><em><span style=\"text-decoration: underline;\"><strong>Details need to be provided by the CHW</strong></span></em></p>', 0, '2021-06-22', 'Who we are', 'Who we are', 'Who we are'),
(31, 0, 'About Us', 'About Us', 'depositphotos_318221368-stock-illustration-missing-picture-page-for-website.jpg', '<p><span style=\"color: #333333;\"><span style=\"font-size: 14px;\"><span style=\"font-family: Calibri, sans-serif;\">CHW is a research initiative led by archaeologists at Cornell and Purdue Universities. We use satellite imagery to monitor and document endangered and damaged cultural heritage.</span></span></span></p>', 0, '2021-06-30', 'About Us', 'About Us', 'About Us'),
(32, 0, 'Mission Statement', 'Mission Statement', 'historic1.jpg', '<p><span id=\"docs-internal-guid-a226ff47-7fff-2591-5559-66689a34e932\"><span style=\"font-size: 11pt; font-family: Arial; font-variant-ligatures: normal; font-variant-east-asian: normal; font-variant-position: normal; vertical-align: baseline; white-space: pre-wrap;\">Caucasus Heritage Watch was founded in 2020 to monitor and document endangered and damaged cultural heritage using high-resolution satellite imagery. We strive to reveal visual evidence regarding past and present cultural erasure using the latest technologies of earth observation. Our purpose is to encourage accountability, inform public policy, support truth and reconciliation, and remove cultural heritage from the front lines of regional conflicts.</span></span></p>', 0, '2021-07-20', 'Mission Statement', 'Mission Statement', 'Mission Statement'),
(33, 0, 'TEst', 'test', 'images.jpg', '<p><span style=\"color: #202122; font-family: sans-serif; font-size: 14px; font-style: italic; background-color: #ffffff;\"><a title=\"google\" href=\"https://www.google.com/\" target=\"_blank\" rel=\"noopener\">google</a>This article is about Mother Teresa of Calcutta, the Catholic nun and saint. For other uses, see&nbsp;</span><a class=\"mw-disambig\" style=\"color: #0645ad; background: none #ffffff; outline-color: #3366cc; font-family: sans-serif; font-size: 14px; font-style: italic;\" title=\"\" href=\"https://en.wikipedia.org/wiki/Mother_Teresa_(disambiguation)\">Mother Teresa (disambiguation)</a><span style=\"color: #202122; font-family: sans-serif; font-size: 14px; font-style: italic; background-color: #ffffff;\">. </span><span style=\"color: #202122; font-family: sans-serif; font-size: 14px; font-style: italic; background-color: #ffffff;\"><a title=\"Google\" href=\"https://en.wikipedia.org/wiki/Mother_Teresa\">Google</a></span></p>', 0, '2021-07-01', 'test', 'test', 'test'),
(34, 0, 'TEst', 'TEst', 'WhatsApp_Image_2021-07-06_at_20_38_27.jpeg', '<p><span style=\"color: #202122; font-family: sans-serif; font-size: 14px; font-style: italic; background-color: #ffffff;\"><a title=\"google\" href=\"https://www.google.com/\" target=\"_blank\" rel=\"noopener\">google</a>This article is about Mother Teresa of Calcutta, the Catholic nun and saint. For other uses, see&nbsp;</span><a class=\"mw-disambig\" style=\"color: #0645ad; background: none #ffffff; outline-color: #3366cc; font-family: sans-serif; font-size: 14px; font-style: italic;\" title=\"\" href=\"https://en.wikipedia.org/wiki/Mother_Teresa_(disambiguation)\">Mother Teresa (disambiguation)</a><span style=\"color: #202122; font-family: sans-serif; font-size: 14px; font-style: italic; background-color: #ffffff;\">.&nbsp;</span><span style=\"color: #202122; font-family: sans-serif; font-size: 14px; font-style: italic; background-color: #ffffff;\"><a title=\"Google\" href=\"https://en.wikipedia.org/wiki/Mother_Teresa\">Google</a></span></p>', 1, '2021-07-07', 'TEst', 'TEst', 'TEst');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

DROP TABLE IF EXISTS `tbl_blog`;
CREATE TABLE IF NOT EXISTS `tbl_blog` (
  `blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL DEFAULT 0,
  `meta_title` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_tag` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_title` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_image` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `short` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_dtm` date NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`blog_id`, `category_id`, `meta_title`, `meta_description`, `meta_tag`, `page_name`, `blog_title`, `blog_image`, `blog_description`, `short`, `created_dtm`, `isDeleted`) VALUES
(1, 2, 'Caucasus Heritage', 'Caucasus Heritage', 'Caucasus Heritage', 'Caucasus Heritage', 'Caucasus Heritage', 'agbu-about-history1_crop11.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2021-06-30', 1),
(3, 3, 'Cricket', 'Cricket', 'Cricket', '3', 'Cricket', 'Aragats-Foundation-2014-logo2.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>Why do we use it?</p>\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2021-06-30', 1),
(4, 2, 'Caucasus Heritage', 'Caucasus Heritage', 'Caucasus Heritage', '2', 'Caucasus Heritage', 'download.png', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>&nbsp;</p>\r\n<p>Why do we use it?</p>\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2021-06-30', 1),
(5, 3, 'India', 'India', 'India', '3', 'India', 'explora-Patagonia-South-America.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>&nbsp;</p>\r\n<p>Why do we use it?</p>\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2021-06-30', 1),
(6, 2, 'Under construction', 'Under construction', 'Under construction', '2', 'Caucasus Heritage', 'Asset_1.png', '<p>Under Construction.</p>', 'Under construction', '2021-07-20', 0),
(7, 2, 'Under Construction', 'Under Construction', 'Under Construction', '', 'Under Construction', 'WhatsApp_Image_2021-07-06_at_20_38_27.jpeg', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-07-20', 0),
(8, 5, 'Under Construction', 'Under Construction', 'Under Construction', '', 'Under Construction', 'agbu-about-history1_crop12.jpg', '<p>Test</p>', 'Test', '2021-07-22', 0),
(9, 0, 'Under Construction', 'Under Construction', 'Under Construction', '', 'Under Construction', 'LOGO-CHW.png', '<p>Test</p>', 'Test', '2021-07-21', 0),
(10, 0, 'Under Construction', 'Under Construction', 'Under Construction', '', 'Under Construction', 'Aragats-Foundation-2014-logo3.jpg', '<p>Under Construction</p>', 'Under Construction', '2021-07-01', 0),
(11, 0, 'India', 'India', 'India', '', 'India', 'agbu-about-history1_crop13.jpg', '<p>India</p>', 'India', '2020-08-16', 1),
(12, 0, 'India', 'India', 'India', '', 'India', 'agbu-about-history1_crop14.jpg', '<p>India</p>', 'India', '2021-08-16', 1),
(13, 0, 'India', 'India', 'India', '', 'India', 'Aragats-Foundation-2014-logo4.jpg', '<p>India</p>', 'India', '2021-08-16', 1),
(14, 2, 'India', 'India', 'India', '', 'India', 'agbu-about-history1_crop15.jpg', '<p>India</p>', 'India', '2021-08-18', 1),
(15, 2, '', '', '', '', 'Under Construction', 'Adobe_Post_20210425_1232450_36346907660008776.png', '<p>Under Construction</p>', 'Under Construction', '2021-08-20', 1),
(16, 0, 'Test', 'Test', 'Test', '', 'Caucasus Heritage', 'DSC_0669.jpg', '<p>Test</p>', 'Test', '2021-08-23', 1),
(17, 0, 'Caucasus Heritage', 'Caucasus Heritage', 'Caucasus Heritage', '', 'Caucasus Heritage', 'Aragats-Foundation-2014-logo5.jpg', '<p>Caucasus Heritage</p>', 'Caucasus Heritage', '2021-02-10', 0),
(18, 0, 'Caucasus Heritage', 'Caucasus Heritage', 'Caucasus Heritage', '', 'Caucasus Heritage', 'Aragats-Foundation-2014-logo6.jpg', '<p>Caucasus Heritage</p>', 'Caucasus Heritage', '2021-04-25', 0),
(19, 0, 'Caucasus Heritage', 'Caucasus Heritage', 'Caucasus Heritage', '', 'Caucasus Heritage', 'Aragats-Foundation-2014-logo7.jpg', '<p>Caucasus Heritage</p>', 'Caucasus Heritage', '2021-12-25', 0),
(20, 0, 'Caucasus Heritage', 'Caucasus Heritage', 'Caucasus Heritage', '', 'Caucasus Heritage', 'Aragats-Foundation-2014-logo8.jpg', '<p>Caucasus Heritage</p>', 'Caucasus Heritage', '2021-05-24', 0),
(21, 0, 'Caucasus Heritage', 'Caucasus Heritage', 'Caucasus Heritage', '', 'Caucasus Heritage', 'Aragats-Foundation-2014-logo9.jpg', '<p>Caucasus Heritage</p>', 'Caucasus Heritage', '2021-05-27', 0),
(22, 0, 'Caucasus Heritage', 'Caucasus Heritage', 'Caucasus Heritage', '', 'Caucasus Heritage', 'Aragats-Foundation-2014-logo10.jpg', '<p>Caucasus Heritage</p>', 'Caucasus Heritage', '2021-12-05', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bms`
--

DROP TABLE IF EXISTS `tbl_bms`;
CREATE TABLE IF NOT EXISTS `tbl_bms` (
  `bms_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `link` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(128) NOT NULL,
  `created_dtm` date NOT NULL,
  `isdeleted` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`bms_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_bms`
--

INSERT INTO `tbl_bms` (`bms_id`, `title`, `link`, `description`, `image`, `created_dtm`, `isdeleted`) VALUES
(3, 'Caucasus Heritage Watch', 'https://codoptix.com/caucasusadmin/home', '<p>&nbsp;&nbsp;</p>', 'Slider3.jpg', '2021-06-26', 0),
(6, 'Welcome To Caucasus Heritage', 'https://codoptix.com/caucasusadmin/home', '<p>Banner2</p>', 'pp-1.jpg', '2021-06-18', 1),
(7, 'Welcome To Caucasus Heritage', 'https://codoptix.com/caucasusadmin/home', '<p>Banner 3</p>', 'Earth-Today-04-Caspian-Sea-GE2.jpg', '2021-06-21', 1),
(8, 'Test Banner', 'https://codoptix.com/caucasusadmin/', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>', 'WhatsApp_Image_2021-07-06_at_20_38_27.jpeg', '2021-07-07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE IF NOT EXISTS `tbl_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_category` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_dtm` date NOT NULL,
  `isdeleted` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `p_category`, `p_category_name`, `cat_slug`, `category_name`, `category_icon`, `created_dtm`, `isdeleted`) VALUES
(1, '', '', 'utsav', 'Utsav', 'Buddhism-in-Nipal-final__11.jpg', '2021-09-28', 0),
(2, '1', 'Utsav', 'heritage-monitoring', 'Heritage Monitoring', 'Employment-Social-Protection-and-Inclusive-Growth-14-09-18.jpg', '2021-09-28', 0),
(3, '2', 'Heritage Monitoring', 'sports', 'Sports', 'Dr-Rajendra-Prasad-9-7-18-front.jpg', '2021-09-28', 0),
(4, '3', 'Sports', 'country', 'Country', 'CLASSICS-IN-PHILOSOPHY-Kants-Prolegomena.jpg', '2021-09-28', 0),
(5, '4', 'Country', 'under-construction', 'Under Construction', 'Buddhism-in-Nipal-final__1.jpg', '2021-09-28', 1),
(7, '4', 'Country', 'test2', 'test2', 'bhagwad-gita-final-2.jpg', '2021-09-28', 1),
(9, 'Select Parent Category', '', 'test1', 'test1', 'IMG-20210903-WA0010_(1).jpg', '2021-09-13', 1),
(10, '5', '', 'test', 'test', 'IMG-20210903-WA00102.jpg', '2021-09-14', 1),
(11, '4', 'Country', 'dfghg', 'dfghg', 'IMG-20210903-WA00108.jpg', '2021-09-28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

DROP TABLE IF EXISTS `tbl_contact`;
CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(128) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `address` varchar(128) NOT NULL,
  `fb_link` varchar(128) NOT NULL,
  `insta_link` varchar(128) DEFAULT NULL,
  `linkedin_link` varchar(128) NOT NULL,
  `description` text DEFAULT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `email`, `phone`, `address`, `fb_link`, `insta_link`, `linkedin_link`, `description`) VALUES
(1, 'chw@cornell.edu', 1800456789123, '411 University St, Seattle, USA', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/', 'Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days. We will be happy to answer your questions.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_currency`
--

DROP TABLE IF EXISTS `tbl_currency`;
CREATE TABLE IF NOT EXISTS `tbl_currency` (
  `currency_id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) NOT NULL,
  `currency_title` varchar(255) NOT NULL,
  `currency_code` varchar(255) NOT NULL,
  `currency_symbol` varchar(255) NOT NULL,
  `isdeleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_date` date NOT NULL,
  PRIMARY KEY (`currency_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_currency`
--

INSERT INTO `tbl_currency` (`currency_id`, `slug`, `currency_title`, `currency_code`, `currency_symbol`, `isdeleted`, `created_date`) VALUES
(1, 'indian', 'Indian', '1', 'Rs', 0, '2021-11-03'),
(2, 'american', 'American', '2', '$', 1, '2021-11-03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

DROP TABLE IF EXISTS `tbl_customer`;
CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `isdeleted` tinyint(4) NOT NULL DEFAULT 0,
  `isapproved` tinyint(4) NOT NULL DEFAULT 0,
  `created_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `slug`, `name`, `email`, `phone`, `address`, `image`, `dob`, `isdeleted`, `isapproved`, `created_date`) VALUES
(1, 'test2', 'test2', 'test@gmail.com', '9876543210', 'kolkata', 'download4.png', '2021-11-13', 0, 0, '2021-11-02'),
(2, 'test1', 'test1', 'test@gmail.com', '9876543210', 'kolkata', 'download5.png', '2021-11-20', 1, 0, '2021-11-02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

DROP TABLE IF EXISTS `tbl_faq`;
CREATE TABLE IF NOT EXISTS `tbl_faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `isdeleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_faq`
--

INSERT INTO `tbl_faq` (`id`, `slug`, `question`, `answer`, `isdeleted`, `created_date`) VALUES
(1, 'test', 'test', '<p>adfdaf</p>', 0, '2021-11-03'),
(2, 'test12', 'test12', '<p>edfefbhjh</p>', 1, '2021-11-03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_funders`
--

DROP TABLE IF EXISTS `tbl_funders`;
CREATE TABLE IF NOT EXISTS `tbl_funders` (
  `funders_id` int(11) NOT NULL AUTO_INCREMENT,
  `funders_name` varchar(128) NOT NULL,
  `funders_image` varchar(250) NOT NULL,
  `created_dtm` date NOT NULL,
  `isdeleted` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`funders_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_funders`
--

INSERT INTO `tbl_funders` (`funders_id`, `funders_name`, `funders_image`, `created_dtm`, `isdeleted`) VALUES
(7, 'The Armenian General Benevolent Union', 'th_a6ce9748e0b1593912c6e51db927fa3c_1624282753Press_Release_AGBU_Logo.jpg', '2021-06-25', 0),
(8, 'The Aragats Foundation', 'Aragats-Foundation-2014-logo.jpg', '2021-06-25', 0),
(9, 'Cornell University', 'Screenshot_(27).png', '2021-06-25', 0),
(10, 'Purdue University', 'Screenshot_(26).png', '2021-06-25', 0),
(11, 'Test', 'WhatsApp_Image_2021-07-06_at_20_38_27.jpeg', '2021-07-07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_historic`
--

DROP TABLE IF EXISTS `tbl_historic`;
CREATE TABLE IF NOT EXISTS `tbl_historic` (
  `historic_id` int(11) NOT NULL AUTO_INCREMENT,
  `meta_title` varchar(128) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_tag` varchar(128) NOT NULL,
  `historic_title` varchar(128) NOT NULL,
  `historic_image` varchar(128) NOT NULL,
  `historic_description` text NOT NULL,
  `short` varchar(255) NOT NULL,
  `created_dtm` date NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`historic_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_historic`
--

INSERT INTO `tbl_historic` (`historic_id`, `meta_title`, `meta_description`, `meta_tag`, `historic_title`, `historic_image`, `historic_description`, `short`, `created_dtm`, `isDeleted`) VALUES
(1, 'History', 'History', 'History', 'Historic', 'download4.png', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '2021-06-22', 1),
(2, 'Violent erasure', 'Violent erasure', 'Violent erasure', 'Violent erasure', 'historic1.jpg', '<p class=\"text-comp cb-item\" style=\"box-shadow: none; outline: 0px; box-sizing: border-box; -webkit-tap-highlight-color: transparent; margin: 1.67rem 0px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 1.67rem; line-height: 2.5rem; font-family: \'Greta Text Light\', times, serif; vertical-align: baseline; -webkit-font-smoothing: antialiased; color: #0d0d0d; background-color: #ffffff;\"><span style=\"color: #0d0d0d; font-family: Greta Text Light, times, serif;\"><span style=\"font-size: 26.72px;\">Until Stone Dreams, Aylisli had been Azerbaijan&rsquo;s most famous author, a revered figure, his books translated into more than 30 languages. Nevertheless, in the eyes of the president, the 2012 book committed the gravest of sins: &ldquo;deliberate distortion&rdquo; of history, a particular fixation of Azerbaijan&rsquo;s authoritarian leader. To him, the history communicated by Aylisli was nothing more than &ldquo;fake news&rdquo;.</span></span></p>\r\n<p class=\"text-comp cb-item\" style=\"box-shadow: none; outline: 0px; box-sizing: border-box; -webkit-tap-highlight-color: transparent; margin: 1.67rem 0px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 1.67rem; line-height: 2.5rem; font-family: \'Greta Text Light\', times, serif; vertical-align: baseline; -webkit-font-smoothing: antialiased; color: #0d0d0d; background-color: #ffffff;\"><span style=\"color: #0d0d0d; font-family: Greta Text Light, times, serif;\"><span style=\"font-size: 26.72px;\">&nbsp;</span></span></p>\r\n<p class=\"text-comp cb-item\" style=\"box-shadow: none; outline: 0px; box-sizing: border-box; -webkit-tap-highlight-color: transparent; margin: 1.67rem 0px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 1.67rem; line-height: 2.5rem; font-family: \'Greta Text Light\', times, serif; vertical-align: baseline; -webkit-font-smoothing: antialiased; color: #0d0d0d; background-color: #ffffff;\"><span style=\"color: #0d0d0d; font-family: Greta Text Light, times, serif;\"><span style=\"font-size: 26.72px;\">From 1997 to 2006, Aylisli witnessed the violent erasure of historical traces that President Aliyev deemed unfit for existence. The successive Aliyev presidents, father and son Heydar and Ilham, along with their loyal relative and local satrap Vasif Talibov, engaged in the covert destruction of Nakhichevan&rsquo;s entire indigenous Armenian-Christian heritage. This included 89 churches, 5,840 cross-stones, and more than 22,000 tombstones, an estimate based on independent researcher Argam Ayvazyan&rsquo;s documentation from 1964-87.</span></span></p>\r\n<p class=\"text-comp cb-item\" style=\"box-shadow: none; outline: 0px; box-sizing: border-box; -webkit-tap-highlight-color: transparent; margin: 1.67rem 0px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 1.67rem; line-height: 2.5rem; font-family: \'Greta Text Light\', times, serif; vertical-align: baseline; -webkit-font-smoothing: antialiased; color: #0d0d0d; background-color: #ffffff;\"><span style=\"color: #0d0d0d; font-family: Greta Text Light, times, serif;\"><span style=\"font-size: 26.72px;\">&nbsp;</span></span></p>\r\n<p class=\"text-comp cb-item\" style=\"box-shadow: none; outline: 0px; box-sizing: border-box; -webkit-tap-highlight-color: transparent; margin: 1.67rem 0px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 1.67rem; line-height: 2.5rem; font-family: \'Greta Text Light\', times, serif; vertical-align: baseline; -webkit-font-smoothing: antialiased; color: #0d0d0d; background-color: #ffffff;\"><span style=\"color: #0d0d0d; font-family: Greta Text Light, times, serif;\"><span style=\"font-size: 26.72px;\">Azerbaijani officials now say that the Armenian monuments of Nakhichevan never existed at all, despite having previously labelled them, erroneously, as &ldquo;Caucasian Albanian&rdquo;, in reference to a long-extinct people. After a decade-long investigation, this erasure was exposed by this writer in Hyperallergic in 2019. The Guardian rated the expos&eacute; &ldquo;rock solid&rdquo;; a top Azerbaijani diplomat, on the other hand, called the research &ldquo;a figment of Armenia&rsquo;s imagination&rdquo;.</span></span></p>\r\n<p class=\"text-comp cb-item\" style=\"box-shadow: none; outline: 0px; box-sizing: border-box; -webkit-tap-highlight-color: transparent; margin: 1.67rem 0px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 1.67rem; line-height: 2.5rem; font-family: \'Greta Text Light\', times, serif; vertical-align: baseline; -webkit-font-smoothing: antialiased; color: #0d0d0d; background-color: #ffffff;\"><span style=\"color: #0d0d0d; font-family: Greta Text Light, times, serif;\"><span style=\"font-size: 26.72px;\">&nbsp;</span></span></p>\r\n<p class=\"text-comp cb-item\" style=\"box-shadow: none; outline: 0px; box-sizing: border-box; -webkit-tap-highlight-color: transparent; margin: 1.67rem 0px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 1.67rem; line-height: 2.5rem; font-family: \'Greta Text Light\', times, serif; vertical-align: baseline; -webkit-font-smoothing: antialiased; color: #0d0d0d; background-color: #ffffff;\"><span style=\"color: #0d0d0d; font-family: Greta Text Light, times, serif;\"><span style=\"font-size: 26.72px;\">But the timeline of the destruction of the estimated 28,000 monuments can be reconstructed with precision. Aylisli sent a telegram to his country&rsquo;s president, which was published in English for the first time in the 2019 investigation. &ldquo;Honorable Mr. President,&rdquo; wrote Aylisli to President Heydar Aliyev on 10 June 1997. &ldquo;Recently it became known to me that in my native village of Aylis large-scale work is underway [by the military] for the eradication of Armenian churches and cemeteries...&rdquo; Aylisli concluded with &ldquo;hope that urgent measures will be undertaken on your part for ending this evil vandalism&rdquo;.</span></span></p>\r\n<p class=\"text-comp cb-item\" style=\"box-shadow: none; outline: 0px; box-sizing: border-box; -webkit-tap-highlight-color: transparent; margin: 1.67rem 0px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 1.67rem; line-height: 2.5rem; font-family: \'Greta Text Light\', times, serif; vertical-align: baseline; -webkit-font-smoothing: antialiased; color: #0d0d0d; background-color: #ffffff;\">&nbsp;</p>', 'Until Stone Dreams, Aylisli had been Azerbaijan’s most famous author, a revered figure, his books translated into more than 30 languages. Nevertheless, in the eyes of the president, the 2012 book committed the gravest of sins: “deliberate distortion” of h', '2021-06-22', 1),
(3, 'Historical Research', 'The Churches of Nakhichevan', 'The Churches of Nakhichevan', 'The Churches of Nakhichevan', 'StThomas_Agulis-1900s.jpg', '<p>Recent investigations indicate the near total destruction of Armenian ecclesiastical structures in the Azerbaijani province of Nakhichevan. CHW has already provided documentation of church destruction in the town of Agulis, exemplified in the images at right, and will be extending this research.</p>', 'The Churches of Nakhichevan', '2021-06-26', 0),
(4, 'Historical Research', 'The Mosques of Nagorno-Karabakh', 'The Mosques of Nagorno-Karabakh', 'The Mosques of Nagorno-Karabakh', 'ShushaMosque.jpg', '<p class=\"text-comp cb-item\" style=\"box-shadow: none; outline: 0px; box-sizing: border-box; -webkit-tap-highlight-color: transparent; margin: 1.67rem 0px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 1.67rem; line-height: 2.5rem; font-family: \'Greta Text Light\', times, serif; vertical-align: baseline; -webkit-font-smoothing: antialiased; color: #0d0d0d; background-color: #ffffff;\"><span style=\"color: #0d0d0d; font-family: Greta Text Light, times, serif;\"><span style=\"font-size: 26.72px;\">CHW is working to develop a database of Islamic religious heritage in the Nagorno-Karabakh region. To date our efforts have been slowed by the lack of authoritative lists with geographic coordinates. We invite stakeholders to send us information they may have in order to aid in this research.</span></span></p>', 'The Mosques of Nagorno-Karabakh', '2021-06-26', 0),
(5, 'Under Construction', 'Under Construction', 'Under Construction', 'Under Construction', 'WhatsApp_Image_2021-07-06_at_20_38_27.jpeg', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', '2021-07-07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_language`
--

DROP TABLE IF EXISTS `tbl_language`;
CREATE TABLE IF NOT EXISTS `tbl_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `isocode` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `isdeleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_language`
--

INSERT INTO `tbl_language` (`id`, `title`, `slug`, `isocode`, `image`, `isdeleted`, `created_date`) VALUES
(1, 'test', 'test', '123', 'download8.png', 1, '2021-11-02'),
(2, 'test1', 'test1', '123', 'download9.png', 1, '2021-11-02'),
(3, 'test3', 'test3', '1234', 'download10.png', 1, '2021-11-02'),
(4, 'test1234', 'test1234', '1234', '163312778043342644767.jpeg', 1, '2021-11-03'),
(5, 'English', 'english', '1234', '1633127780433426447671.jpeg', 0, '2021-11-03'),
(6, 'Hindi', 'hindi', '12345', '1633127780433426447672.jpeg', 0, '2021-11-03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_last_login`
--

DROP TABLE IF EXISTS `tbl_last_login`;
CREATE TABLE IF NOT EXISTS `tbl_last_login` (
  `iii` int(11) NOT NULL AUTO_INCREMENT,
  `id` bigint(20) NOT NULL,
  `userId` bigint(20) NOT NULL,
  `sessionData` varchar(2048) NOT NULL,
  `machineIp` varchar(1024) NOT NULL,
  `userAgent` varchar(128) NOT NULL,
  `agentString` varchar(1024) NOT NULL,
  `platform` varchar(128) NOT NULL,
  `createdDtm` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`iii`)
) ENGINE=InnoDB AUTO_INCREMENT=284 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_last_login`
--

INSERT INTO `tbl_last_login` (`iii`, `id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES
(122, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '::1', 'Chrome 91.0.4472.77', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', 'Windows 10', '2021-06-10 10:42:32'),
(123, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '::1', 'Chrome 91.0.4472.77', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', 'Windows 10', '2021-06-10 10:42:41'),
(124, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '::1', 'Chrome 91.0.4472.77', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', 'Windows 10', '2021-06-10 13:49:56'),
(125, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '::1', 'Chrome 91.0.4472.77', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', 'Windows 10', '2021-06-10 15:19:47'),
(126, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '::1', 'Chrome 91.0.4472.77', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', 'Windows 10', '2021-06-10 16:45:17'),
(127, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '::1', 'Chrome 91.0.4472.77', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', 'Windows 10', '2021-06-10 19:28:12'),
(128, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '::1', 'Chrome 91.0.4472.77', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', 'Windows 10', '2021-06-10 19:31:37'),
(129, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '::1', 'Chrome 91.0.4472.77', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', 'Windows 10', '2021-06-11 10:40:55'),
(130, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '115.187.51.135', 'Chrome 91.0.4472.77', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', 'Windows 10', '2021-06-11 07:56:48'),
(131, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '49.37.41.246', 'Chrome 91.0.4472.77', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', 'Windows 7', '2021-06-11 07:58:15'),
(132, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '115.187.51.135', 'Chrome 91.0.4472.77', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36 Edg/91.0.864.41', 'Windows 10', '2021-06-11 08:18:44'),
(133, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '49.37.41.246', 'Chrome 91.0.4472.77', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', 'Windows 7', '2021-06-11 09:01:38'),
(134, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '45.116.191.229', 'Firefox 89.0', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:89.0) Gecko/20100101 Firefox/89.0', 'Linux', '2021-06-11 10:21:08'),
(135, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '49.37.41.246', 'Chrome 91.0.4472.77', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', 'Windows 7', '2021-06-11 11:40:47'),
(136, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '45.250.247.143', 'Chrome 91.0.4472.77', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', 'Windows 7', '2021-06-11 11:41:04'),
(137, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '49.37.41.246', 'Chrome 91.0.4472.77', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', 'Windows 7', '2021-06-11 11:59:33'),
(138, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '49.37.41.246', 'Chrome 91.0.4472.77', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', 'Windows 7', '2021-06-11 13:24:22'),
(139, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '115.187.51.135', 'Chrome 91.0.4472.77', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36 Edg/91.0.864.41', 'Windows 10', '2021-06-11 17:32:30'),
(140, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '115.187.51.135', 'Chrome 91.0.4472.77', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', 'Windows 10', '2021-06-12 07:53:47'),
(141, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '103.249.39.45', 'Chrome 91.0.4472.77', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', 'Windows 10', '2021-06-14 05:44:58'),
(142, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '23.227.142.228', 'Chrome 91.0.4472.101', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.101 Safari/537.36', 'Windows 7', '2021-06-14 08:41:09'),
(143, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '103.249.39.98', 'Chrome 91.0.4472.77', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', 'Windows 10', '2021-06-14 09:34:05'),
(144, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '103.249.39.98', 'Chrome 91.0.4472.77', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', 'Windows 10', '2021-06-14 10:00:34'),
(145, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '103.249.39.98', 'Chrome 91.0.4472.77', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', 'Windows 10', '2021-06-15 06:38:03'),
(146, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '49.37.41.62', 'Chrome 91.0.4472.101', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.101 Safari/537.36', 'Windows 7', '2021-06-15 12:04:54'),
(147, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '103.249.39.98', 'Chrome 91.0.4472.77', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', 'Windows 10', '2021-06-15 13:26:28'),
(148, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '103.249.39.98', 'Chrome 91.0.4472.101', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.101 Safari/537.36', 'Windows 10', '2021-06-16 05:24:45'),
(149, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '49.37.43.32', 'Chrome 91.0.4472.101', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.101 Safari/537.36', 'Windows 7', '2021-06-17 06:35:24'),
(150, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '115.187.51.116', 'Chrome 91.0.4472.101', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.101 Safari/537.36', 'Windows 10', '2021-06-17 06:46:27'),
(151, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '115.187.51.116', 'Chrome 91.0.4472.101', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.101 Safari/537.36', 'Windows 10', '2021-06-17 08:31:50'),
(152, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '115.187.46.91', 'Chrome 91.0.4472.101', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.101 Safari/537.36', 'Windows 7', '2021-06-17 10:02:46'),
(153, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '49.37.43.32', 'Chrome 91.0.4472.101', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.101 Safari/537.36', 'Windows 7', '2021-06-17 10:40:19'),
(154, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '45.64.224.171', 'Chrome 91.0.4472.106', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', 'Windows 10', '2021-06-17 14:36:14'),
(155, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '45.64.224.171', 'Chrome 91.0.4472.106', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', 'Windows 10', '2021-06-17 14:58:43'),
(156, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '115.187.51.116', 'Chrome 91.0.4472.106', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', 'Windows 10', '2021-06-18 06:08:28'),
(157, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '49.37.43.168', 'Chrome 91.0.4472.106', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', 'Windows 7', '2021-06-18 08:56:29'),
(158, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '49.37.43.168', 'Chrome 91.0.4472.106', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', 'Windows 7', '2021-06-18 13:15:18'),
(159, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '103.76.82.233', 'Chrome 91.0.4472.114', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'Windows 10', '2021-06-18 14:14:48'),
(160, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '103.76.82.233', 'Chrome 91.0.4472.114', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'Windows 10', '2021-06-18 14:21:40'),
(161, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '103.76.82.233', 'Chrome 91.0.4472.114', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'Windows 10', '2021-06-18 14:21:52'),
(162, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '103.76.82.233', 'Chrome 91.0.4472.114', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'Windows 10', '2021-06-18 15:00:55'),
(163, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '103.76.82.233', 'Chrome 91.0.4472.114', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'Windows 10', '2021-06-18 15:03:10'),
(164, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '49.37.43.168', 'Chrome 91.0.4472.106', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', 'Windows 7', '2021-06-18 15:08:41'),
(165, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '182.66.142.132', 'Chrome 91.0.4472.101', 'Mozilla/5.0 (Linux; Android 10; RMX1992) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.101 Mobile Safari/537.36', 'Android', '2021-06-18 15:35:45'),
(166, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '49.37.33.96', 'Chrome 91.0.4472.106', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', 'Windows 10', '2021-06-18 16:30:08'),
(167, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '109.233.17.2', 'Chrome 91.0.4472.101', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.101 Safari/537.36', 'Windows 10', '2021-06-18 16:42:16'),
(168, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '67.249.85.26', 'Safari 605.1.15', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.1.1 Safari/605.1.15', 'Mac OS X', '2021-06-18 17:05:28'),
(169, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '67.249.85.26', 'Safari 605.1.15', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.1.1 Safari/605.1.15', 'Mac OS X', '2021-06-18 17:09:45'),
(170, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '115.187.51.116', 'Chrome 91.0.4472.114', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'Windows 10', '2021-06-21 05:39:07'),
(171, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '115.187.51.116', 'Chrome 91.0.4472.114', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'Windows 10', '2021-06-21 07:24:42'),
(172, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '115.187.51.116', 'Chrome 91.0.4472.114', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'Windows 10', '2021-06-21 12:06:15'),
(173, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '115.187.51.116', 'Chrome 91.0.4472.114', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'Windows 10', '2021-06-22 06:17:30'),
(174, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '49.37.41.222', 'Chrome 91.0.4472.106', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', 'Windows 7', '2021-06-22 06:22:07'),
(175, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '115.187.51.116', 'Chrome 91.0.4472.114', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'Windows 10', '2021-06-22 08:36:23'),
(176, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '49.37.41.222', 'Chrome 91.0.4472.106', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', 'Windows 7', '2021-06-22 12:34:26'),
(177, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '67.249.85.26', 'Safari 605.1.15', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.1.1 Safari/605.1.15', 'Mac OS X', '2021-06-22 15:56:55'),
(178, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '103.249.39.85', 'Chrome 91.0.4472.114', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'Windows 10', '2021-06-23 06:30:51'),
(179, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '49.37.43.32', 'Chrome 91.0.4472.114', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'Windows 7', '2021-06-23 08:49:34'),
(180, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '45.64.224.171', 'Chrome 91.0.4472.114', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'Windows 10', '2021-06-23 10:43:40'),
(181, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '103.249.39.85', 'Chrome 91.0.4472.114', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'Windows 10', '2021-06-24 06:09:38'),
(182, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '45.64.224.171', 'Chrome 91.0.4472.114', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'Windows 10', '2021-06-24 07:52:38'),
(183, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '157.40.211.165', 'Chrome 91.0.4472.114', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'Windows 10', '2021-06-24 12:33:11'),
(184, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '103.249.39.85', 'Chrome 91.0.4472.114', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'Windows 10', '2021-06-24 12:51:26'),
(185, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '103.249.39.85', 'Chrome 91.0.4472.114', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'Windows 10', '2021-06-24 12:51:39'),
(186, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '103.249.39.85', 'Chrome 91.0.4472.124', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'Windows 10', '2021-06-25 06:00:47'),
(187, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '103.249.39.85', 'Chrome 91.0.4472.124', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'Windows 10', '2021-06-25 09:11:55'),
(188, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '45.64.224.171', 'Chrome 91.0.4472.114', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'Windows 10', '2021-06-25 14:42:06'),
(189, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '67.249.85.26', 'Safari 605.1.15', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.1.1 Safari/605.1.15', 'Mac OS X', '2021-06-26 00:13:04'),
(190, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '67.249.85.26', 'Safari 605.1.15', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.1.1 Safari/605.1.15', 'Mac OS X', '2021-06-26 16:39:58'),
(191, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '67.249.85.26', 'Chrome 91.0.4472.101', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.101 Safari/537.36', 'Windows 10', '2021-06-26 17:10:09'),
(192, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '67.249.85.26', 'Chrome 91.0.4472.101', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.101 Safari/537.36', 'Windows 10', '2021-06-27 14:20:39'),
(193, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '45.64.224.171', 'Chrome 91.0.4472.114', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'Windows 10', '2021-06-28 05:09:27'),
(194, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '103.249.39.85', 'Chrome 91.0.4472.124', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'Windows 10', '2021-06-28 05:27:27'),
(195, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '103.249.39.85', 'Chrome 91.0.4472.124', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'Windows 10', '2021-06-28 12:18:52'),
(196, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '103.249.39.85', 'Chrome 91.0.4472.124', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'Windows 10', '2021-06-29 05:35:29'),
(197, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '103.249.39.85', 'Chrome 91.0.4472.124', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'Windows 10', '2021-06-29 09:13:27'),
(198, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '103.249.39.85', 'Chrome 91.0.4472.124', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'Windows 10', '2021-06-30 04:55:04'),
(199, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '157.40.249.25', 'Chrome 91.0.4472.124', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'Windows 7', '2021-06-30 08:08:32'),
(200, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '45.64.224.171', 'Chrome 91.0.4472.114', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'Windows 10', '2021-06-30 09:33:49'),
(201, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '49.37.47.21', 'Chrome 91.0.4472.124', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'Windows 7', '2021-06-30 11:21:26'),
(202, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '49.37.47.21', 'Chrome 91.0.4472.124', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'Windows 7', '2021-06-30 13:23:17'),
(203, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '49.37.47.21', 'Chrome 91.0.4472.124', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'Windows 7', '2021-06-30 13:39:28'),
(204, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '104.162.231.159', 'Safari 605.1.15', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.1.1 Safari/605.1.15', 'Mac OS X', '2021-06-30 14:10:30'),
(205, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '67.249.85.26', 'Safari 605.1.15', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.1.1 Safari/605.1.15', 'Mac OS X', '2021-06-30 15:08:38'),
(206, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '103.249.39.85', 'Chrome 91.0.4472.124', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'Windows 10', '2021-06-30 17:31:13'),
(207, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '104.162.231.159', 'Safari 605.1.15', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.1.1 Safari/605.1.15', 'Mac OS X', '2021-06-30 23:55:05'),
(208, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '67.249.85.26', 'Safari 605.1.15', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.1.1 Safari/605.1.15', 'Mac OS X', '2021-07-01 01:43:03'),
(209, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '45.64.224.171', 'Chrome 91.0.4472.114', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'Windows 10', '2021-07-01 05:30:04'),
(210, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '103.249.39.85', 'Chrome 91.0.4472.124', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'Windows 10', '2021-07-01 05:30:44'),
(211, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '23.227.141.156', 'Chrome 91.0.4472.124', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'Windows 7', '2021-07-01 05:43:41'),
(212, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '49.37.45.63', 'Chrome 91.0.4472.124', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'Windows 7', '2021-07-01 07:25:59'),
(213, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '45.64.224.171', 'Chrome 91.0.4472.114', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'Windows 10', '2021-07-01 10:25:18'),
(214, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '104.162.231.159', 'Safari 605.1.15', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.1.1 Safari/605.1.15', 'Mac OS X', '2021-07-01 13:15:32'),
(215, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '67.249.85.26', 'Safari 605.1.15', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.1.1 Safari/605.1.15', 'Mac OS X', '2021-07-01 13:16:06'),
(216, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '67.249.85.26', 'Safari 605.1.15', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.1.1 Safari/605.1.15', 'Mac OS X', '2021-07-01 13:22:59'),
(217, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '104.162.231.159', 'Safari 605.1.15', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.1.1 Safari/605.1.15', 'Mac OS X', '2021-07-01 13:23:30'),
(218, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '67.249.85.26', 'Chrome 91.0.4472.101', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.101 Safari/537.36', 'Windows 10', '2021-07-01 13:25:20'),
(219, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '103.249.39.75', 'Chrome 91.0.4472.124', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'Windows 10', '2021-07-01 13:33:39'),
(220, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '103.249.39.75', 'Chrome 91.0.4472.124', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'Windows 10', '2021-07-01 16:56:08'),
(221, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '45.64.224.171', 'Chrome 91.0.4472.124', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'Windows 10', '2021-07-02 05:09:42'),
(222, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '103.249.39.75', 'Chrome 91.0.4472.124', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'Windows 10', '2021-07-02 15:34:15'),
(223, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '103.249.39.120', 'Chrome 91.0.4472.124', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'Windows 10', '2021-07-06 06:55:00'),
(224, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '103.249.39.120', 'Chrome 91.0.4472.124', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'Windows 10', '2021-07-06 06:55:17'),
(225, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '103.249.39.120', 'Chrome 91.0.4472.124', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'Windows 10', '2021-07-06 06:55:46'),
(226, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '49.37.45.159', 'Chrome 91.0.4472.124', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'Windows 7', '2021-07-07 16:14:51'),
(227, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '49.37.45.159', 'Chrome 91.0.4472.124', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'Windows 7', '2021-07-07 16:16:02'),
(228, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '115.187.51.199', 'Chrome 91.0.4472.124', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'Windows 10', '2021-07-07 16:16:14'),
(229, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '115.187.51.199', 'Chrome 91.0.4472.124', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'Windows 10', '2021-07-07 16:58:52'),
(230, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '150.242.150.39', 'Chrome 91.0.4472.124', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'Windows 10', '2021-07-08 15:33:15'),
(231, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '150.242.150.39', 'Chrome 91.0.4472.124', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'Windows 10', '2021-07-08 16:11:17'),
(232, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '202.142.80.52', 'Chrome 91.0.4472.114', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'Mac OS X', '2021-07-12 15:20:53'),
(233, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '49.37.45.35', 'Chrome 91.0.4472.124', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'Windows 7', '2021-07-13 11:01:18'),
(234, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '150.242.150.104', 'Chrome 91.0.4472.124', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'Windows 10', '2021-07-14 06:05:37'),
(235, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '150.242.150.104', 'Chrome 91.0.4472.124', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'Windows 10', '2021-07-15 05:40:15'),
(236, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '150.242.150.55', 'Chrome 91.0.4472.124', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'Windows 10', '2021-07-16 07:49:59'),
(237, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '49.37.47.169', 'Chrome 91.0.4472.124', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'Windows 7', '2021-07-16 08:28:53'),
(238, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '150.242.150.55', 'Chrome 91.0.4472.124', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'Windows 10', '2021-07-16 19:31:34'),
(239, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '150.242.150.195', 'Chrome 91.0.4472.124', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'Windows 10', '2021-07-20 06:47:04'),
(240, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '150.242.150.198', 'Chrome 91.0.4472.124', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'Windows 10', '2021-07-20 11:43:48'),
(241, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '45.64.224.130', 'Chrome 91.0.4472.124', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'Windows 10', '2021-07-20 11:48:08'),
(242, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '45.64.224.130', 'Chrome 91.0.4472.124', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'Windows 10', '2021-07-21 07:07:16'),
(243, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '115.187.60.55', 'Chrome 92.0.4515.107', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', 'Windows 10', '2021-07-22 06:34:00'),
(244, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '115.187.60.55', 'Chrome 92.0.4515.107', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', 'Windows 10', '2021-07-23 09:16:13'),
(245, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '115.187.60.55', 'Chrome 92.0.4515.107', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', 'Windows 10', '2021-07-23 11:32:35'),
(246, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '103.249.39.124', 'Chrome 92.0.4515.107', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', 'Windows 10', '2021-07-28 13:59:50'),
(247, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '103.249.39.124', 'Chrome 92.0.4515.107', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', 'Windows 10', '2021-07-29 11:39:50'),
(248, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '103.249.39.124', 'Chrome 92.0.4515.107', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', 'Windows 10', '2021-08-03 05:35:44'),
(249, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '103.249.39.124', 'Chrome 92.0.4515.107', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', 'Windows 10', '2021-08-03 15:19:01'),
(250, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '103.249.39.124', 'Chrome 92.0.4515.131', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', 'Windows 10', '2021-08-05 12:24:11'),
(251, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '115.187.51.164', 'Chrome 92.0.4515.131', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', 'Windows 10', '2021-08-10 06:13:34'),
(252, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '103.249.39.122', 'Chrome 92.0.4515.131', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', 'Windows 10', '2021-08-16 05:03:32'),
(253, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '202.142.80.27', 'Chrome 92.0.4515.131', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', 'Mac OS X', '2021-08-16 07:38:59'),
(254, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '115.187.51.101', 'Chrome 92.0.4515.159', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', 'Windows 10', '2021-08-18 05:11:25'),
(255, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '115.187.51.101', 'Chrome 92.0.4515.159', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', 'Windows 10', '2021-08-20 05:34:24'),
(256, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '115.187.51.101', 'Chrome 92.0.4515.159', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', 'Windows 10', '2021-08-23 14:41:26'),
(257, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '115.187.51.101', 'Chrome 92.0.4515.159', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', 'Windows 10', '2021-08-24 08:04:58'),
(258, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '223.223.155.197', 'Chrome 93.0.4577.63', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36', 'Windows 10', '2021-09-06 12:45:01'),
(259, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '::1', 'Chrome 93.0.4577.63', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36', 'Windows 10', '2021-09-13 15:35:53'),
(260, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '::1', 'Chrome 93.0.4577.63', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36', 'Windows 10', '2021-09-13 16:12:08'),
(261, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '::1', 'Chrome 93.0.4577.63', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36', 'Windows 10', '2021-09-14 10:34:38'),
(262, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '::1', 'Chrome 93.0.4577.63', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36', 'Windows 10', '2021-09-15 10:57:46'),
(263, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '::1', 'Chrome 93.0.4577.63', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36', 'Windows 10', '2021-09-16 13:59:54'),
(264, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '::1', 'Chrome 93.0.4577.63', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36', 'Windows 10', '2021-09-16 17:39:57'),
(265, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '::1', 'Chrome 93.0.4577.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'Windows 10', '2021-09-17 10:18:37'),
(266, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '::1', 'Chrome 93.0.4577.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'Windows 10', '2021-09-17 16:03:03'),
(267, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '::1', 'Chrome 93.0.4577.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'Windows 10', '2021-09-20 10:29:59'),
(268, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Caucasus Heritage\"}', '::1', 'Chrome 93.0.4577.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'Windows 10', '2021-09-28 13:55:26'),
(269, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Handyman\"}', '::1', 'Chrome 93.0.4577.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'Windows 10', '2021-09-28 14:20:54'),
(270, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Handyman\"}', '::1', 'Chrome 93.0.4577.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'Windows 10', '2021-09-28 15:34:25'),
(271, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Handyman\"}', '::1', 'Chrome 93.0.4577.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'Windows 10', '2021-09-29 10:33:18'),
(272, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Handyman\"}', '::1', 'Chrome 94.0.4606.61', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', 'Windows 10', '2021-09-30 18:37:34'),
(273, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Handyman\"}', '::1', 'Chrome 94.0.4606.81', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 'Windows 10', '2021-10-28 10:34:47'),
(274, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Handyman\"}', '::1', 'Chrome 94.0.4606.81', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 'Windows 10', '2021-10-28 18:52:00'),
(275, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Handyman\"}', '::1', 'Chrome 94.0.4606.81', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 'Windows 10', '2021-10-29 10:12:04'),
(276, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Handyman\"}', '::1', 'Chrome 94.0.4606.81', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 'Windows 10', '2021-10-29 14:17:17'),
(277, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Handyman\"}', '::1', 'Chrome 94.0.4606.81', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 'Windows 10', '2021-11-01 12:32:32'),
(278, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Handyman\"}', '::1', 'Chrome 94.0.4606.81', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 'Windows 10', '2021-11-01 12:44:34'),
(279, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Handyman\"}', '::1', 'Chrome 94.0.4606.81', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 'Windows 10', '2021-11-01 17:05:16'),
(280, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Handyman\"}', '::1', 'Chrome 94.0.4606.81', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 'Windows 10', '2021-11-01 17:50:26'),
(281, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Handyman\"}', '::1', 'Chrome 94.0.4606.81', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 'Windows 10', '2021-11-02 10:20:03'),
(282, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Handyman\"}', '::1', 'Chrome 94.0.4606.81', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 'Windows 10', '2021-11-02 15:30:55'),
(283, 0, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Handyman\"}', '::1', 'Chrome 94.0.4606.81', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 'Windows 10', '2021-11-03 11:06:09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mail`
--

DROP TABLE IF EXISTS `tbl_mail`;
CREATE TABLE IF NOT EXISTS `tbl_mail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_dtm` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_mail`
--

INSERT INTO `tbl_mail` (`id`, `name`, `email`, `message`, `created_dtm`) VALUES
(1, 'Garen Age', 'garen.a5466@gmail.com', 'Test', '2021-06-16'),
(2, 'John Paul', 'paul.john5620@gmail.com', 'Test', '2021-06-16'),
(3, 'Jorden Hayek', 'j.hayek542@gmail.com', 'Test', '2021-06-16'),
(4, 'Angel Mathew', 'angel1999@gmail.com', 'Test', '2021-06-16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

DROP TABLE IF EXISTS `tbl_news`;
CREATE TABLE IF NOT EXISTS `tbl_news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `position` int(11) NOT NULL,
  `meta_title` varchar(128) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_tag` varchar(128) NOT NULL,
  `news_title` varchar(128) NOT NULL,
  `news_image` varchar(128) NOT NULL,
  `news_description` text NOT NULL,
  `short` varchar(255) NOT NULL,
  `created_dtm` date NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `position`, `meta_title`, `meta_description`, `meta_tag`, `news_title`, `news_image`, `news_description`, `short`, `created_dtm`, `isDeleted`) VALUES
(10, 4, 'Under construction', 'Under construction', 'Under construction', 'Under Construction', 'Asset_1.png', '<p style=\"box-sizing: border-box; margin: 1em 0px; line-height: 1.4em; font-size: 16.64px; color: #222222; overflow-wrap: break-word; font-family: Montserrat, Helvetica, Arial, sans-serif;\">Section Under Construction.</p>', 'Under construction', '2021-06-23', 0),
(11, 1, 'Under Construction', 'Under Construction', 'Under Construction', 'Under Construction', 'WhatsApp_Image_2021-07-06_at_20_38_27.jpeg', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\"> is simply dummy text of the printing and typesetting industry. <a title=\"google\" href=\"https://www.google.co.in/\" target=\"_blank\" rel=\"noopener\">google</a></span></p>', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', '2021-07-14', 0),
(13, 3, 'News', 'News', 'News', 'News', 'partner1.png', '<p>News</p>', 'News', '2021-07-14', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package`
--

DROP TABLE IF EXISTS `tbl_package`;
CREATE TABLE IF NOT EXISTS `tbl_package` (
  `package_id` int(11) NOT NULL AUTO_INCREMENT,
  `package_name` varchar(255) NOT NULL,
  `package_price` varchar(255) NOT NULL,
  `created_dtm` date NOT NULL,
  `isdeleted` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`package_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_package`
--

INSERT INTO `tbl_package` (`package_id`, `package_name`, `package_price`, `created_dtm`, `isdeleted`) VALUES
(1, 'Monthly', '7.99', '2021-09-28', 0),
(2, '6 Months', '39.99', '2021-09-28', 0),
(3, '12 Months', '79.99', '2021-09-28', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_partners`
--

DROP TABLE IF EXISTS `tbl_partners`;
CREATE TABLE IF NOT EXISTS `tbl_partners` (
  `partners_id` int(11) NOT NULL AUTO_INCREMENT,
  `partners_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partners_image` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `partners_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_dtm` date NOT NULL,
  `isdeleted` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`partners_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_partners`
--

INSERT INTO `tbl_partners` (`partners_id`, `partners_name`, `partners_image`, `partners_link`, `created_dtm`, `isdeleted`) VALUES
(1, 'Monument Watch', 'unnamed.png', 'https://monumentwatch.org', '2021-06-25', 0),
(2, 'Institute of Archaeology and Ethnography, Republic of Armenia (TBD)', 'Հնագիտության-և-ազգագրության-ինստիտուտ-150x150.png', 'https://iae.am/en', '2021-06-26', 0),
(3, 'Research on Armenian Architecture', 'RAALogo.jpg', 'http://www.raa-am.com/raa/public/home.php?first=1', '2021-06-26', 0),
(4, 'Test', 'WhatsApp_Image_2021-07-06_at_20_38_27.jpeg', 'https://monumentwatch.org', '2021-07-07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_provider`
--

DROP TABLE IF EXISTS `tbl_provider`;
CREATE TABLE IF NOT EXISTS `tbl_provider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `hourly_rate` varchar(255) NOT NULL,
  `work_ecperiance` varchar(255) NOT NULL,
  `work_done` varchar(255) NOT NULL DEFAULT '0',
  `description` text NOT NULL,
  `created_date` date NOT NULL,
  `isdeleted` tinyint(4) NOT NULL DEFAULT 0,
  `isapproved` tinyint(4) NOT NULL DEFAULT 0,
  `package_id` int(11) NOT NULL DEFAULT 0,
  `package_start_date` date NOT NULL,
  `package_end_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_provider`
--

INSERT INTO `tbl_provider` (`id`, `image`, `slug`, `name`, `age`, `phone`, `address`, `hourly_rate`, `work_ecperiance`, `work_done`, `description`, `created_date`, `isdeleted`, `isapproved`, `package_id`, `package_start_date`, `package_end_date`) VALUES
(1, 'download1.png', 'test', 'Test', '100', '9876543210', 'bhbhj', '10', '10', '10', '<p>ghghhgg</p>', '2021-11-02', 0, 0, 2, '2021-11-10', '2021-11-18'),
(2, 'download2.png', 'test1', 'test1', '10', '9876543210', 'kolkata', '10', '10', '10', '<p>dsfvfsgfdg</p>', '2021-11-02', 1, 0, 2, '2021-11-07', '2021-11-28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_provider_image_video`
--

DROP TABLE IF EXISTS `tbl_provider_image_video`;
CREATE TABLE IF NOT EXISTS `tbl_provider_image_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `provider_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_provider_service`
--

DROP TABLE IF EXISTS `tbl_provider_service`;
CREATE TABLE IF NOT EXISTS `tbl_provider_service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `work_rate` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_report`
--

DROP TABLE IF EXISTS `tbl_report`;
CREATE TABLE IF NOT EXISTS `tbl_report` (
  `report_id` int(11) NOT NULL AUTO_INCREMENT,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `meta_tag` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `month` varchar(20) NOT NULL,
  `report_title` varchar(255) NOT NULL,
  `report_description` text NOT NULL,
  `report_file` text NOT NULL,
  `created_dtm` date NOT NULL,
  `isDeleted` int(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`report_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_report`
--

INSERT INTO `tbl_report` (`report_id`, `meta_title`, `meta_description`, `meta_tag`, `year`, `month`, `report_title`, `report_description`, `report_file`, `created_dtm`, `isDeleted`) VALUES
(8, 'Report', 'Report', 'Report', 2021, '6', 'Report of June', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.</p>', '<iframe style=\"border: 1px solid #777;\" src=\"https://indd.adobe.com/embed/29f1209a-86e5-45a6-a53e-974eda2177b6?startpage=1&allowFullscreen=true\" width=\"650px\" height=\"460px\" frameborder=\"0\" allowfullscreen=\"\"></iframe>', '2021-06-24', 1),
(10, 'Report of May', 'Report of May', 'Report of May', 2021, '5', 'Report of May', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s</p>', '<iframe style=\"border: 1px solid #777;\" src=\"https://indd.adobe.com/embed/29f1209a-86e5-45a6-a53e-974eda2177b6?startpage=1&allowFullscreen=true\" width=\"650px\" height=\"460px\" frameborder=\"0\" allowfullscreen=\"\"></iframe>', '2021-06-24', 1),
(11, 'June 2021', 'See our June 2021 report.', 'June 2021 report', 2021, '4', 'June 2021', '<p>Our latest report</p>', '<iframe style=\"border: 1px solid #777;\" src=\"https://indd.adobe.com/embed/29f1209a-86e5-45a6-a53e-974eda2177b6?startpage=1&allowFullscreen=true\" width=\"650px\" height=\"460px\" frameborder=\"0\" allowfullscreen=\"\"></iframe>', '2021-06-26', 1),
(12, 'CHW June 2021 Monitoring Report', 'CHW', 'Reports', 2021, '6', 'June 2021 Report', '<p>Khatchadourian, Lindsay, Smith 2021</p>', '<iframe style=\"border: 1px solid #777;\" src=\"https://indd.adobe.com/embed/29f1209a-86e5-45a6-a53e-974eda2177b6?startpage=1&allowFullscreen=true\" width=\"650px\" height=\"460px\" frameborder=\"0\" allowfullscreen=\"\"></iframe>', '2021-06-26', 0),
(13, 'Under Construction', 'Under Construction', 'Under Construction', 2021, '8', 'Under Construction', '<p>Under Construction</p>', '<iframe style=\"border: 1px solid #777;\" src=\"https://indd.adobe.com/embed/29f1209a-86e5-45a6-a53e-974eda2177b6?startpage=1&allowFullscreen=true\" width=\"650px\" height=\"460px\" frameborder=\"0\" allowfullscreen=\"\"></iframe>', '2021-07-07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

DROP TABLE IF EXISTS `tbl_roles`;
CREATE TABLE IF NOT EXISTS `tbl_roles` (
  `roleId` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'role id',
  `role` varchar(50) NOT NULL COMMENT 'role text',
  PRIMARY KEY (`roleId`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`roleId`, `role`) VALUES
(1, 'System Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service`
--

DROP TABLE IF EXISTS `tbl_service`;
CREATE TABLE IF NOT EXISTS `tbl_service` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_service` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_date` date NOT NULL,
  `isdeleted` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_service`
--

INSERT INTO `tbl_service` (`service_id`, `p_service`, `p_service_name`, `slug`, `service_name`, `service_image`, `service_description`, `created_date`, `isdeleted`) VALUES
(1, '', '', 'test', 'Test', '', '<p>bjbjjhjh</p>', '2021-11-03', 1),
(2, '1', 'Test', 'test1', 'Test1', '', '<p>gjjhj</p>', '2021-11-03', 1),
(3, '1', 'Test', 'test12', 'Test12', '1633127780433426447673.jpeg', '<p>xcvfxbxv</p>', '2021-11-03', 0),
(4, '3_Test12', 'Test12', 'service12', 'service12', '1633127780433426447674.jpeg', '<p>sdfdfbhjj</p>', '2021-11-03', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team`
--

DROP TABLE IF EXISTS `tbl_team`;
CREATE TABLE IF NOT EXISTS `tbl_team` (
  `team_id` int(11) NOT NULL AUTO_INCREMENT,
  `team_name` text NOT NULL,
  `designation` text NOT NULL,
  `col2` varchar(128) DEFAULT NULL,
  `team_image` varchar(128) DEFAULT NULL,
  `created_dtm` date NOT NULL,
  `isdeleted` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`team_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_team`
--

INSERT INTO `tbl_team` (`team_id`, `team_name`, `designation`, `col2`, `team_image`, `created_dtm`, `isdeleted`) VALUES
(2, 'Dr. Lori Khatchadourian', 'Associate Professor, Department of Near Eastern Studies, Cornell University', NULL, 'lori-khatchadourian3.jpg', '2021-06-18', 0),
(3, 'Dr. Adam T. Smith', 'Distinguished Professor of Arts & Sciences, Department of Anthropology, Cornell University', NULL, 'adam-smith.jpg', '2021-06-18', 0),
(4, 'Dr. Ian Lindsay', 'Associate Professor, Department of Anthropology, Purdue University', '', 'ian-lindsay.jpg', '2021-06-26', 0),
(8, 'Salpi Bocchieriyan', 'MA, Spatial Analyst', NULL, 'Salpi_Bio_Pic.png', '2021-06-22', 0),
(10, 'Dr. Husik Ghulyan', 'Ph.D., Research Consultant', NULL, '2.jpg', '2021-06-22', 0),
(11, 'Test', 'Test', 'Test', 'WhatsApp_Image_2021-07-06_at_20_38_27.jpeg', '2021-07-07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `empid` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL COMMENT 'login email',
  `dob` date NOT NULL,
  `password` varchar(128) NOT NULL COMMENT 'hashed login password',
  `name` varchar(128) DEFAULT NULL COMMENT 'full name of user',
  `mobile` varchar(20) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `roleId` tinyint(4) NOT NULL,
  `fathername` varchar(250) DEFAULT NULL,
  `multi_file` varchar(250) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT 0,
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userId`, `empid`, `email`, `dob`, `password`, `name`, `mobile`, `address`, `roleId`, `fathername`, `multi_file`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, '', 'admin', '0000-00-00', '$2y$10$7pwp3Cira8TMfiG0/Pa.zebyvquTmkVC.tMia8hyv1sowg8qcGBUS', 'Handyman', '7685052883', '', 1, '', '', 0, 0, '2015-07-01 18:56:49', 1, '2021-06-14 10:26:46');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
