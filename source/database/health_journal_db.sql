-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2021 at 03:14 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health_journal_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `mail_id` int(11) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `email` varchar(45) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `sendDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description_en` varchar(255) NOT NULL,
  `keywords_en` varchar(255) NOT NULL,
  `description_gr` varchar(255) NOT NULL,
  `keywords_gr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `title`, `description_en`, `keywords_en`, `description_gr`, `keywords_gr`) VALUES
(1, 'bmi calculator', 'ΒMI Calculator is a tool used to calculate the Body Mass Index which is a value derived from the mass and height of a person.', 'body mass index BMI calculator weight height', 'Ο Υπολογιστής ΔΜΣ είναι ένα εργαλείο για τον υπολογισμό του Δείκτη Μάζας Σώματος, τιμή που εξαρτάται από τη μάζα και το ύψος ενός ατόμου.', 'δείκτης μάζας σώματος ΔΜΣ υπολογιστής βάρος ύψος'),
(2, 'first aid', 'First aid is the first and immediate assistance given to any person suffering from either a minor or serious illness or injury.', 'first aid injuries burns poisonous bites allergies choking hazards drowning heart attack stroke help', 'Οι πρώτες βοήθειες είναι η πρώτη και άμεση βοήθεια που παρέχεται σε οποιοδήποτε άτομο που πάσχει είτε από ελαφριές ή σοβαρές ασθένειες ή τραυματισμούς.', 'πρώτες βοήθειες τραυματισμοί εγκαύματα δηλητηριώδη τσιμπήματα αλλεργίες πνιγμός καρδιακή προσβολή εγκεφαλικό'),
(3, 'alzheimer', 'Alzheimer\'s is a neurodegenerative disease that usually starts slowly and progressively worsens. The most common early symptom is difficulty in remembering recent events. The speed of progression of the disease can vary.', 'alzheimer disease neurodegenerative dementia remembering memory loss aging cognitive AD caretaker', 'Η νόσος του Alzheimer είναι μια νευροεκφυλιστική ασθένεια που συνήθως αρχίζει αργά και προοδευτικά επιδεινώνεται. Το πιο συνηθισμένο πρώιμο σύμπτωμα είναι η δυσκολία στην ανάμνηση πρόσφατων συμβάντων. Η ταχύτητα εξέλιξης μπορεί να ποικίλει.', 'alzheimer ασθένεια νευροεκφυλιστική άνοια ανάμνηση απώλεια μνήμη γήρανση γνωστικές αλτσχάιμερ φροντίδα'),
(4, 'be healthy', 'This page is focused on giving advice to help people be healthy. It provides them with suggestions on nutrition, fitness, meditation and finding their purpose regarding health.', 'be healthy nutrition fitness meditation purpose', 'Η σελίδα αυτή επικεντρώνεται στην παροχή συμβουλών για να βοηθήσει τον κόσμο να μείνει υγιής. Παρέχει προτάσεις για τη διατροφή, την φυσική κατάσταση, τον διαλογισμό και την εύρεση στόχου για την υγεία.', 'μένω υγιής διατροφή φυσική κατάσταση διαλογισμός στόχος'),
(5, 'cancer', 'Cancer is the name given to a collection of related diseases in which some of the body\'s cells begin to divide without stopping and spread into surrounding tissues. Cancer can start almost anywhere in the human body.', 'cancer cells growth tumor ulceration inherited genetic mutations environmental lifestyle radiation tobacco disease', 'Ο καρκίνος είναι το όνομα μιας ομάδας συναφών ασθενειών στις οποίες μερικά από τα κύτταρα του σώματος αρχίζουν να διαιρούνται χωρίς διακοπή και εξαπλώνονται στους γύρω ιστούς. Ο καρκίνος μπορεί να ξεκινήσει σχεδόν οπουδήποτε στο ανθρώπινο σώμα.', 'καρκίνος κύτταρα νεοπλασία όγκος έλκος κληρονομική γενετική μετάλλαξη περιβαλλοντικός τρόπος ζωής ακτινοβολία καπνός ασθένεια'),
(6, 'cerebrovascular diseases', 'Cerebrovascular disease includes a variety of medical conditions that affect the blood vessels of the brain and the cerebral circulation. Hypertension is the most important contributing risk factor for stroke and cerebrovascular diseases.', 'cerebrovascular disease blood vessels brain cerebral circulation arteries ischemic stroke hemorrhagic hypertension pressure atherosclerosis', 'Η εγκεφαλοαγγειακή νόσος περιλαμβάνει μια ποικιλία ιατρικών παθήσεων που επηρεάζουν τα αιμοφόρα αγγεία του εγκεφάλου και την εγκεφαλική κυκλοφορία. Η υπέρταση είναι ο πιο σημαντικός παράγοντας κινδύνου για εγκεφαλικό και εγκεφαλοαγγειακά νοσήματα.', 'εγκεφαλοαγγειακή νόσος ασθένεια αίμα εγκέφαλος κυκλοφορία αρτηρίες ισχαιμικό εγκεφαλικό αιμορραγικό υπέρταση πίεση αθηροσκλήρωση'),
(7, 'covid', 'Coronavirus, also known as Sars-Cov-2, is a life-threatening but also very contagious virus, as it can be transmitted via the air. The state of lockdown that had to be enforced has led people in physical and mental distress.', 'covid-19 coronavirus sars-cov-2 virus mask lockdown social distance pandemic quarantine vaccinated fever cough', 'Ο Κορωνοϊός, επίσης γνωστός ως Sars-Cov-2, είναι ένας απειλητικός για τη ζωή αλλά και πολύ μεταδοτικός ιός, καθώς μπορεί να μεταδοθεί μέσω του αέρα. Το καθεστώς του lockdown που έπρεπε να επιβληθεί οδήγησε τους ανθρώπους σε σωματική και ψυχική δυσφορία.', 'covid-19 coronavirus sars-cov-2 κορωνοϊός ιός μάσκα lockdown social distancing πανδημία καραντίνα εμβόλιο πυρετός βήχας'),
(8, 'about diseases', 'A disease is a particular abnormal condition that negatively affects the structure or function of all or part of an organism, and that is not due to any immediate external injury. A list of common diseases is presented.', 'disease medical condition symptoms pathogens internal dysfunctions immune system disorders', 'Μια ασθένεια είναι μια ιδιαίτερη μη φυσιολογική κατάσταση που επηρεάζει αρνητικά τη δομή ή τη λειτουργία όλου ή μέρους ενός οργανισμού και δεν οφείλεται σε άμεσο εξωτερικό τραυματισμό. Παρουσιάζεται λίστα συνηθέστερων ασθενειών.', 'ασθένεια ιατρική κατάσταση συμπτώματα παθογόνα εσωτερικές δυσλειτουργίες ανοσοποιητικό σύστημα διαταραχές'),
(9, 'heart disease', 'The term “heart disease” refers to several types of heart conditions. Decreased blood flow can cause a heart attack. Signs or symptoms of a heart attack, heart failure, or an arrhythmia are indicators of heart disease.', 'heart disease blood flow attack coronary artery failure arrhythmia pressure cardiac', 'Ο όρος «καρδιακή νόσος» αναφέρεται σε διάφορους τύπους καρδιακών παθήσεων. Η μειωμένη ροή αίματος μπορεί να προκαλέσει καρδιακή προσβολή. Σημάδια ή συμπτώματα καρδιακής προσβολής, καρδιακής ανεπάρκειας ή αρρυθμίας υποδεικνύουν καρδιακή νόσο.', 'καρδιακή νόσος ασθένεια ροή αίματος προσβολή στεφανιαία αρτηριακή ανεπάρκεια αρρυθμία πίεση'),
(10, 'hepatitis', 'Hepatitis is inflammation of the liver tissue. Some symptoms are jaundice, poor appetite, vomiting, tiredness, abdominal pain, and diarrhea. Hepatitis is acute if it resolves within six months, and chronic if it lasts longer than six months.', 'hepatitis inflammation liver tissue jaundice cirrhosis failure A B C D E acute chronic disease', 'Η ηπατίτιδα είναι φλεγμονή του ηπατικού ιστού. Μερικά συμπτώματα είναι ο ίκτερος, η κακή όρεξη, ο έμετος, η κόπωση, το κοιλιακό άλγος και η διάρροια. Η ηπατίτιδα είναι οξεία εάν υποχωρήσει εντός έξι μηνών και χρόνια εάν διαρκεί περισσότερο από έξι μήνες.', 'ηπατίτιδα φλεγμονή ήπαρ ιστός ίκτερος κίρρωση ανεπάρκεια A B C D E οξεία χρόνια ασθένεια'),
(11, 'hiv', 'Human immunodeficiency virus infection and acquired Immunodeficiency syndrome (HIV / AIDS) is a spectrum of conditions caused by infection with HIV, a retrovirus. Late symptoms of it are referred to as AIDS.', 'disease immunodeficiency virus infection acquired syndrome HIV AIDS immune sexual blood positive undetectable viral', 'Η μόλυνση από τον ιό της ανθρώπινης ανοσοανεπάρκειας και το σύνδρομο επίκτητης ανοσολογικής ανεπάρκειας (HIV / AIDS) είναι ένα φάσμα παθήσεων που προκαλούνται από μόλυνση με τον HIV, έναν ρετροϊό. Όψιμα συμπτώματα μόλυνσης αναφέρονται ως AIDS.', 'ασθένεια ανοσοανεπάρκεια ιός μόλυνση επίκτητης σύνδρομο HIV AIDS ανοσοποιητικό σεξουαλικώς αίμα θετικό μη ανιχνεύσιμο ιικό'),
(12, 'influenza', 'Influenza, commonly called \"the flu\", is an infectious disease caused by influenza viruses. In humans, influenza viruses are primarily transmitted through respiratory droplets produced from coughing and sneezing.', 'influenza flu disease virus nose throat headache coughing fatigue', 'Η γρίπη, είναι μια μολυσματική ασθένεια που προκαλείται από ιούς της γρίπης. Στους ανθρώπους, οι ιοί της γρίπης μεταδίδονται κυρίως μέσω αναπνευστικών σταγονιδίων που παράγονται από τον βήχα και το φτάρνισμα.', 'γρίπη ασθένεια ιός μύτη λαιμός πονοκέφαλος βήχας κόπωση'),
(13, 'news', 'This page contains articles regarding health and well-being. There is a wide range of sections, such as breaking news, latest news, news from Greece and the world, news about technology and its intersections with health, as well as more recent news.', 'news breaking latest world greece technology recent', 'Η σελίδα περιέχει άρθρα σχετικά με την υγεία. Υπάρχει ένα μεγάλο εύρος τμημάτων, όπως τα έκτακτα νέα, τα τελευταία νέα, νέα από την Ελλάδα και τον κόσμο, νέα σχετικά με την τεχνολογία και τις διασταυρώσεις της με την υγεία, καθώς και πιο πρόσφατα νέα.', 'ειδήσεις νέα έκτακτα τελευταία κόσμος ελλάδα τεχνολογία πρόσφατα'),
(14, 'respiratory diseases', 'Respiratory diseases, or lung diseases, are pathological conditions affecting the organs and tissues that make gas exchange difficult in air-breathing animals. They include conditions of the respiratory tract.', 'respiratory diseases lung breathing cold influenza pharyngitis pneumonia tuberculosis asthma cough cancer smoking', 'Οι αναπνευστικές ασθένειες ή οι πνευμονικές παθήσεις είναι παθολογικές καταστάσεις που επηρεάζουν τα όργανα και τους ιστούς και καθιστούν δύσκολη την ανταλλαγή αερίων σε ζώα που αναπνέουν αέρα. Περιλαμβάνουν παθήσεις της αναπνευστικής οδού.', 'αναπνευστικές ασθένειες πνεύμονας αναπνοή κρυολόγημα γρίπη φαρυγγίτιδα πνευμονία φυματίωση άσθμα βήχας καρκίνος κάπνισμα');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `post_topic` varchar(255) NOT NULL,
  `post_context` text NOT NULL,
  `post_date` datetime NOT NULL,
  `post_replies` int(11) NOT NULL,
  `last_update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `user_id`, `post_topic`, `post_context`, `post_date`, `post_replies`, `last_update`) VALUES
(60, 1, 'Welcome to the Health Journal megathread!', 'This is an introductory post. Here you may find answers to common questions you may have about our website. The purpose of this post is to keep the forum section from overflowing with new posts.', '2021-06-15 12:29:02', 0, '2021-06-15 12:29:02'),
(61, 1, 'Καλωσήρθατε στη κύρια συζήτηση για την σελίδα Health Journal!', 'Η ανάρτηση αυτή είναι εισαγωγική. Εδώ μπορεί να βρείτε απαντήσεις σε συνήθεις ερωτήσεις που μπορεί να έχετε σχετικά με τον ιστότοπό μας. Ο σκοπός αυτής της ανάρτησης είναι να μην υπερχειλίζει ο τομέας του φόρουμ με νέες δημοσιεύσεις.', '2021-06-15 12:29:21', 0, '2021-06-15 12:29:21');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `reply_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `reply_text` text DEFAULT NULL,
  `reply_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(70) NOT NULL,
  `level` enum('admin','user','') NOT NULL,
  `profileImage` int(11) NOT NULL,
  `forumPosts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstName`, `lastName`, `userName`, `email`, `password`, `level`, `profileImage`, `forumPosts`) VALUES
(1, 'admin', 'admin', 'Administrator', 'healthjournal@gmail.com', '$2y$10$h71JRTt5KvMsCMWgEpatjOcI.fQgcfKuZGlhJ8QEwWSCtBvUfqPwa', 'admin', 0, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`mail_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `post_user` (`user_id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`reply_id`),
  ADD KEY `reply_user` (`user_id`),
  ADD KEY `reply_post` (`post_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `mail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `reply_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `replies`
--
ALTER TABLE `replies`
  ADD CONSTRAINT `replies_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `replies_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
