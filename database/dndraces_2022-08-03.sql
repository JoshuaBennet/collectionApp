# ************************************************************
# Sequel Ace SQL dump
# Version 20033
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.8.3-MariaDB-1:10.8.3+maria~jammy)
# Database: dndraces
# Generation Time: 2022-08-03 12:45:04 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table races
# ------------------------------------------------------------

DROP TABLE IF EXISTS `races`;

CREATE TABLE `races` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(5000) DEFAULT NULL,
  `age` varchar(2000) DEFAULT NULL,
  `size` varchar(500) DEFAULT NULL,
  `speed` varchar(5000) DEFAULT NULL,
  `ability` varchar(500) DEFAULT NULL,
  `lang` varchar(200) DEFAULT NULL,
  `other` varchar(1000) DEFAULT NULL,
  `otherAdditional` varchar(1000) DEFAULT NULL,
  `otherAddTwo` varchar(500) DEFAULT NULL,
  `picture` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `races` WRITE;
/*!40000 ALTER TABLE `races` DISABLE KEYS */;

INSERT INTO `races` (`id`, `name`, `description`, `age`, `size`, `speed`, `ability`, `lang`, `other`, `otherAdditional`, `otherAddTwo`, `picture`)
VALUES
	(1,'Dragonborn','The dragonborn walk proudly through a world that greets them with fearful incomprehension. Shaped by the dragons themselves, dragonborn originally hatched from dragon eggs as a unique race, combining the best attributes of dragons and humanoids.\n\n','Young dragonborn grow quickly. They walk hours after hatching, attain the size and development of a 10-year-old human child by the age of 3, and reach adulthood by 15. They live to be around 80.\n','Dragonborn are taller and heavier than humans, standing well over 6 feet tall and averaging almost 250 pounds. Your size is Medium.','Your base walking speed is 30 feet.','Your Strength score increases by 2, and your Charisma score increases by 1.','Languages. You can read, speak, and write Common and Draconic.','Draconic Ancestry: You are distantly related to a particular kind of dragon. Choose a type of dragon from the below list; this determines the damage and area of your breath weapon, and the type of resistance you gain.','Damage Resistance: You have resistance to the damage type associated with your ancestry.',NULL,'dragonbornRace.png'),
	(2,'Dwarf','Kingdoms rich in ancient grandeur, halls carved into the roots of mountains, the echoing of picks and hammers in deep mines and blazing forges, a commitment to clan and tradition, and a burning hatred of goblins and orcs – these common threads unite all dwarves.\n\n','Dwarves mature at the same rate as humans, but they\'re considered young until they reach the age of 50. On average, they live about 350 years.\n','Dwarves stand between 4 and 5 feet tall and average about 150 pounds. Your size is Medium.','Your base walking speed is 25 feet. Your speed is not reduced by wearing heavy armor.','Your Constitution score increases by 2.','Languages. You can speak, read, and write Common and Dwarvish. Dwarvish is full of hard consonants and guttural sounds, and those characteristics spill over into whatever other language a dwarf might ','Darkvision: Accustomed to life underground, you have superior vision in dark and dim conditions. You can see in dim light within 60 feet of you as if it were bright light, and in darkness as if it were dim light. You can\'t discern color in darkness, only shades of gray.','Dwarven Resilience: You have advantage on saving throws against poison, and you have resistance against poison damage.',NULL,'dwarfRace.png'),
	(3,'Elf','Elves are a magical people of otherworldly grace, living in places of ethereal beauty, in the midst of ancient forests or in silvery spires glittering with faerie light, where soft music drifts through the air and gentle fragrances waft on the breeze. Elves love nature and magic, art and artistry, music and poetry.\n\n','Although elves reach physical maturity at about the same age as humans, the elven understanding of adulthood goes beyond physical growth to encompass worldly experience. An elf typically claims adulthood and an adult name around the age of 100 and can live to be 750 years old.\n\n','Elves range from under 5 to over 6 feet tall and have slender builds. Your size is Medium.','Your base walking speed is 30 feet.\n','Your Dexterity score increases by 2.','Languages: You can speak, read, and write Common and Elven.','Darkvision: Accustomed to twilit forests and the night sky, you have superior vision in dark and dim conditions. You can see in dim light within 60 feet of you as if it were bright light, and in darkness as if it were dim light. You can\'t discern color in darkness, only shades of gray.','Fey Ancestry: You have advantage on saving throws against being charmed, and magic can\'t put you to sleep.\nTrance. Elves do not sleep. Instead they meditate deeply, remaining semi-conscious, for 4 hours a day. The Common word for this meditation is \"trance.\" While meditating, you dream after a fashion; such dreams are actually mental exercises that have become reflexive after years of practice. After resting in this way, you gain the same benefit a human would from 8 hours of sleep.','Keen Senses: You have proficiency in the Perception skill.','elfRace.png'),
	(4,'Gnome','A constant hum of busy activity pervades the warrens and neighborhoods where gnomes form their close-knit communities. Louder sounds punctuate the hum: a crunch of grinding gears here, a minor explosion there, a yelp of surprise or triumph, and especially bursts of laughter. Gnomes take delight in life, enjoying every moment of invention, exploration, investigation, creation, and play.\n\n','Gnomes mature at the same rate as humans, and most are expected to settle into adult life around the age of 40. They can live to 350 years on average, but it\'s not too uncommon for them to reach 500 years of age.\n','Gnomes are between 3 and 4 feet tall and weigh around 40 pounds. Your size is Small.','Speed: Your base walking speed is 25 feet.','Your Intelligence score increases by 2.','Languages: You can read, speak, and write Common and Gnomish.','Darkvision: Accustomed to life underground, you have superior vision in dark and dim conditions. You can see in dim light within 60 feet of you as if it were bright light, and in darkness as if it were dim light. You can\'t discern color in darkness, only shades of gray.','Gnome Cunning: You have advantage on all Intelligence, Wisdom, and Charisma saves against magic.',NULL,'gnomeRace.jpeg'),
	(5,'Half-Elf','Walking in two worlds but truly belonging to neither, half-elves combine what some say are the best qualities of their elf and human parents: human curiosity, inventiveness, and ambition tempered by the refined senses, love of nature, and artistic tastes of the elves.\n\n','Half-elves age at much the same rate as humans, reaching adulthood at the age of 20. They live much longer than humans, however, often exceeding 180 years.\n\n\n\n\n\n\n\n\n','Half-elves are more or less the same size as humans, ranging from 5 to 6 feet tall. Your size is Medium.\nSpeed. Your base walking speed is 30 feet.','Some half-elves in Faerun have a racial trait in place of the Skill Versatility trait. If your DM allows it, your half-elf character can forgo Skill Versatility and instead take the elf trait Keen Senses or one of the following traits based on your elf parentage:\n\nElf Weapon Training (High or Wood Elf Heritage): You have proficiency with the longsword, shortsword, shortbow, and longbow.\n\nCantrip (High Elf Heritage): You know one cantrip of your choice from the wizard spell list. Intelligence is your spellcasting ability for it.\n\nFleet of Foot (Wood Elf Heritage): Your base walking speed increases to 35 feet.\n\nMask of the Wild (Wood Elf Heritage): You can attempt to hide even when you are only lightly obscured by foliage, heavy rain, falling snow, mist, and other natural phenomena.\n\nDrow Magic (Dark Elf Heritage): You know the Dancing Lights cantrip. When you reach 3rd level, you can cast Faerie Fire once, and it recharges after a long rest. When you reach 5th level, you can cast Darkness once, and it recharges after a long rest. Charisma is your spellcasting ability for these spells.\n\nSwim Speed (Sea Elf Heritage): You have a swimming speed of 30 feet.','Your Charisma score increases by 2, and two other ability scores of your choice each increase by 1.','Languages: You can read, speak, and write Common, Elven, and one language of your choice.','Darkvision: Thanks to your elven heritage, you have superior vision in dark and dim conditions. You can see in dim light within 60 feet of you as if it were bright light, and in darkness as if it were dim light. You can\'t discern color in darkness, only shades of gray.','Fey Ancestry: You have advantage on saving throws against being charmed, and magic can\'t put you to sleep.','Skill Versatility: You gain proficiency in two skills of your choice.','half-ElfRace.png'),
	(6,'Halfling','The comforts of home are the goals of most halflings\' lives: a place to settle in peace and quiet, far from marauding monsters and clashing armies. Others form nomadic bands that travel constantly, lured by the open road and the wide horizon to discover the wonders of new lands and peoples. Halflings work readily with others, and they are loyal to their friends, whether halfling or otherwise. They can display remarkable ferocity when their friends, families, or communities are threatened.\n\n','A halfling reaches adulthood at the age of 20 and generally lives into the middle of his or her second century.\n\n\n\n\n\n\n\n\n','Halflings average about 3 feet tall and weigh about 40 pounds. Your size is small.','Your base walking speed is 25 feet.\n','Your Dexterity score increases by 2','Languages: You can speak, read, and write Common and Halfling.','Lucky: When you roll a 1 on an attack roll, ability check, or saving throw, you can reroll the die. You must use the new result, even if it is a 1.','Brave: You have advantage on saving throws against being frightened.','Nimble: You can move through the space of any creature that is of a size larger than yours.','half-OrcRace.png'),
	(7,'Half-Orc','When alliances between humans and orcs are sealed by marriages, half-orcs are born. Some half-orcs rise to become proud chiefs of orc tribes, their human blood giving them an edge over their full-blooded orc rivals. Some venture into the world to prove their worth among humans and other more civilized races. Many of these become adventurers, achieving greatness for their mighty deeds and notoriety for their barbaric customs and savage fury.\n\n','Half-orcs mature a little faster than humans, reaching adulthood around age 14. They age noticeably faster and rarely live longer than 75 years.\n\n\n\n\n\n\n\n\n','Half-orcs are somewhat larger and bulkier than humans, and they range from 5 to well over 6 feet tall. Your size is Medium.','Your base walking speed is 30 feet.','Your Strength score increases by 2, and your Constitution score increases by 1.','Languages: You can speak, read, and write Common and Orc. Orc is a harsh, grating language with hard consonants. It has no script of its own but is written in the Dwarvish script.','Darkvision: Thanks to your orc blood, you have superior vision in dark and dim conditions. You can see in dim light within 60 feet of you as if it were bright light, and in darkness as if it were dim light. You can\'t discern color in darkness, only shades of gray.','Menacing: You gain proficiency in the Intimidation skill.','Relentless Endurance: When you are reduced to 0 hit points but not killed outright, you can drop to 1 hit point instead. You can\'t use this feature again until you finish a long rest.\n\nSavage Attacks: When you score a critical hit with a melee weapon attack, you can roll one of the weapon\'s damage dice one additional time and add it to the extra damage of the critical hit.','halflingRace.ong'),
	(8,'Human','In the reckonings of most worlds, humans are the youngest of the common races, late to arrive on the world scene and short-lived in comparison to dwarves, elves, and dragons. Perhaps it is because of their shorter lives that they strive to achieve as much as they can in the years they are given. Or maybe they feel they have something to prove to the elder races, and that\'s why they build their mighty empires on the foundation of conquest and trade. Whatever drives them, humans are the innovators, the achievers, and the pioneers of the worlds.\n\n','Humans reach adulthood in their late teens and live less than a century.\n','Humans vary widely in height and build, from barely 5 feet to well over 6 feet tall. Regardless of your position in that range, your size is Medium.','Your base walking speed is 30 feet.','Your ability scores each increase by 1.','Languages: You can speak, read, and write Common and one extra language of your choice. Humans typically learn the languages of other peoples they deal with, including obscure dialects. ',NULL,NULL,NULL,'humanRace.png'),
	(9,'Tiefling','To be greeted with stares and whispers, to suffer violence and insult on the street, to see mistrust and fear in every eye: this is the lot of the tiefling. And to twist the knife, tieflings know that this is because a pact struck generations ago infused the essence of Asmodeus, overlord of the Nine Hells (and many of the other powerful devils serving under him) into their bloodline. Their appearance and their nature are not their fault but the result of an ancient sin, for which they and their children and their children\'s children will always be held accountable.','Tieflings mature at the same rate as humans but live a few years longer.\n\n\n\n\n','Tieflings are about the same size and build as humans. Your size is Medium.','Your base walking speed is 30 feet.','Your Charisma score increases by 2.','Languages: You can speak, read, and write Common and Infernal.','Darkvision: Thanks to your infernal heritage, you have superior vision in dark and dim conditions. You can see in dim light within 60 feet of you as if it were bright light, and in darkness as if it were dim light. You can’t discern color in darkness, only shades of gray.\n','Hellish Resistance: You have resistance to fire damage.',NULL,'tieflingRace.png');

/*!40000 ALTER TABLE `races` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;