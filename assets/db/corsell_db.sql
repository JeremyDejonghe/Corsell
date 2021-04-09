-- MySQL dump 10.13  Distrib 5.5.62, for Win64 (AMD64)
--
-- Host: localhost    Database: corsell_db
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.17-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `brands` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `picture` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` VALUES (1,'Anchor','Anchor.png'),(2,'Los Piratas','Los-Piratas.png'),(3,'Shark','Shark.png');
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `picture` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Animaux de compagnie','Animaux.svg'),(2,'Armes','Armes.svg'),(3,'Matières premières','Rawmaterial.svg'),(4,'Navires','Ship.svg'),(5,'Vêtements','Vetements.svg'),(6,'Victuailles','Victuaille.svg');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commands`
--

DROP TABLE IF EXISTS `commands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `commands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_payment` tinyint(4) NOT NULL,
  `id_delivery` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  KEY `id_payment` (`id_payment`),
  KEY `id_delivery` (`id_delivery`),
  CONSTRAINT `commands_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  CONSTRAINT `commands_ibfk_2` FOREIGN KEY (`id_payment`) REFERENCES `payment` (`id`),
  CONSTRAINT `commands_ibfk_3` FOREIGN KEY (`id_delivery`) REFERENCES `delivery` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commands`
--

LOCK TABLES `commands` WRITE;
/*!40000 ALTER TABLE `commands` DISABLE KEYS */;
/*!40000 ALTER TABLE `commands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `delivery`
--

DROP TABLE IF EXISTS `delivery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `delivery` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `delivery`
--

LOCK TABLES `delivery` WRITE;
/*!40000 ALTER TABLE `delivery` DISABLE KEYS */;
/*!40000 ALTER TABLE `delivery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment`
--

LOCK TABLES `payment` WRITE;
/*!40000 ALTER TABLE `payment` DISABLE KEYS */;
/*!40000 ALTER TABLE `payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `promo` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `sell_number` int(11) DEFAULT NULL,
  `id_category` tinyint(4) DEFAULT NULL,
  `id_brands` smallint(6) DEFAULT NULL,
  `id_subcategory` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_subcategory` (`id_subcategory`),
  KEY `id_category` (`id_category`),
  KEY `id_brands` (`id_brands`),
  CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_subcategory`) REFERENCES `subcategory` (`id`),
  CONSTRAINT `products_ibfk_2` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`),
  CONSTRAINT `products_ibfk_3` FOREIGN KEY (`id_brands`) REFERENCES `brands` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Gourdin','Bludgeon.jpg','Un gourdin est une des armes les plus primitives, arme dite de mêlée ou de contact qui semble avoir été universellement utilisée par l\'homme.',76.00,0,32,12,2,1,4),(2,'Poing américain','BrassKnuckles.jpg','Un coup-de-poing américain est une arme blanche contondante constituée d\'une pièce de métal dans laquelle on passe les doigts.',420.00,0,36,94,2,3,4),(3,'Harpon','Harpoon.png','Une arbalète de chasse sous-marine ou fusil harpon est une arme de trait sous-marine dont le but est de propulser une flèche permettant la capture de poissons et de céphalopodes.',602.00,0,43,12,2,2,4),(4,'Fléau','Flail.png','Le fléau d\'armes est une arme blanche contondante utilisée au Moyen Âge européen.',789.00,0,12,89,2,3,4),(5,'Tromblon','Blunderbuss.png','Le tromblon, aussi appelé espingole ou mousqueton est une arme à feu que l\'on charge par la bouche, et dont le canon est légèrement évasé.',2800.00,0,36,56,2,2,3),(6,'Bolas','Bolas.png','Les mots espagnols bolas ou boleadoras, parfois traduits en français par lasso à boules, désignent une arme de jet comprenant plusieurs masses sphériques réunies par des liens, destinées à capturer les animaux en entravant leurs pattes.',15.00,10,215,69,2,3,3),(7,'Arc','Bow.jpg','L\'arc est une arme de trait destinée à lancer des flèches. Il est constitué principalement d\'une pièce courbe flexible qui emmagasine et restitue l\'énergie comme un ressort, et d\'une corde qui permet l\'armement de l\'arc, puis la transmission de l\'impulsion à la flèche lors de la détente.',200.00,0,12,167,2,1,3),(8,'Fusil à silex','Carabine.jpg','La platine à silex est un type de mécanisme autrefois utilisé dans les armes à feu, mise au point par l\'arquebusier Marin Bourgeois en combinant le système de deux platines existantes.',2048.00,0,42,64,2,2,3),(9,'Arbalète','Crossbow.jpg','L\'arbalète (du latin arcuballista) est une arme de trait, constituée d\'un arc monté sur un fût et lançant des projectiles appelés « carreaux ». Sa puissance est supérieure à celle d\'un arc ainsi que sa précision mais son rechargement long la pénalise.',214.00,0,24,12,2,1,3),(10,'Pistolet à silex','Flintlock_Pistol_.jpg','La platine à silex est un type de mécanisme autrefois utilisé dans les armes à feu, mise au point par l\'arquebusier Marin Bourgeois en combinant le système de deux platines existantes.',620.00,540,22,3,2,3,3),(11,'Pistolet à silex','Flintlock_Pistol_.jpg','La platine à silex est un type de mécanisme autrefois utilisé dans les armes à feu, mise au point par l\'arquebusier Marin Bourgeois en combinant le système de deux platines existantes.',620.00,540,22,3,2,3,3),(12,'Canon léger','Light_Canon.jpg','Ce canon, relativement léger, est de loin le plus utilisé par les pirates.',1042.00,0,7,34,2,3,21),(13,'Canon lourd','Heavy_Canon.jpg','Ce canon, relativement lourd, est de loin le plus utilisé par les pirates. Pour infliger de lourd dégâts aux navires enemis.',2248.00,0,23,64,2,2,21),(14,'Pierrier','Swivel_Gun.jpg','Un pierrier est un petit canon monté sur pivot, de façon à pouvoir disposer d’une grande latitude de tir en gisement et en site.',230.00,0,14,45,2,1,21),(15,'Mortier','Mortar.jpg','Un mortier est une arme légère, sans culasse – la force de recul étant absorbée par le sol –, à mise à feu du boulet de canon par gravité, et de ce fait ne pouvant tirer qu’en tir proche de la verticale, ce qui lui permet d\'atteindre un site proche très masqué.',1067.00,0,12,34,2,1,21),(16,'Boulet chaînés','Chain-bar-shot.jpg','boulets chaînés ou enchaînés : 2 boulets ou demis boulets reliés par une chaîne.',80.00,0,300,135,2,3,5),(17,'Boulet de canon','Canonball.jpg','Le boulet de canon, ou boulet, est un projectile d\'artillerie sphérique en pierre ou en métal.',60.00,0,600,800,2,3,5),(18,'Boulet de canon enflammé','Flaming-Cannonball.jpg','Le boulet rouge est un boulet que l\'on fait chauffer dans un gril (ou four) particulier jusqu\'à ce qu\'il ait la couleur rouge cerise clair. Pour tirer, le canon reçoit sa charge de poudre dans une gargousse.',300.00,0,20,48,2,1,5),(19,'Baril de poudre noire','Powder.jpg','La poudre noire, parfois dénommée poudre à canon ou poudre à fusil, est le plus ancien explosif chimique connu. De couleur noire, elle est constituée d\'un mélange déflagrant de soufre, de nitrate de potassium (salpêtre) et de charbon de bois. ',50.00,0,222,603,2,1,5),(20,'Balle','Bullet.jpg','Une balle est un projectile d\'arme à feu d\'un calibre inférieur à 20 mm, de type pistolet, carabine, fusil.',150.00,0,200,1253,2,1,5),(21,'Flèches','Arrow.jpg','Une flèche est une arme de tir, constituée d\'un long tube ou fût muni d\'une pointe à une extrémité, d\'un empennage et une encoche à l\'autre, et utilisée principalement pour la chasse et pour la guerre.',120.00,0,230,456,2,2,5),(22,'Carreaux d arbalète','Crossbow-arrow.jpg','Le carreau d\'arbalète, ou simplement le carreau ou encore le trait d’arbalètea, est le projectile utilisé avec une arbalète, dont le fer pyramidal à quatre pans a une base carrée.',50.00,34,120,643,2,2,5),(23,'Radeau en bambou','Raft_Bamboojpg','Radeau de fortune en bambou.',12.00,0,1036,2780,4,2,9),(24,'Radeau à voile','Raft_Sail.jpg','Un radeau, désigne à l\'origine un assemblage de poutres1. C\'est un type d\'embarcation basse sur l\'eau, souvent sommaire, permettant de naviguer ou d\'atteindre la terre ferme, parfois dans des conditions particulières.',80.00,0,23,223,4,2,9),(25,'Sloop Renard','Fox_Sloop.jpg','Le Renard était un voilier du XIX e siècle, de type cotre à hunier. Il fut le dernier navire armé pour la course par le corsaire malouin Robert Surcouf.',1645.00,0,5,6,4,3,10),(26,'Sloop des ombres','Shadow_Sloop.jpg','Le Sloop des ombres était un voilier du XIX e siècle, de type cotre à hunier. Il fut l\'un des dernier navire armé.',1812.00,0,4,3,4,3,10),(27,'Brigantine Friedrich','Freidrich_Brigantine.png','L\'Oeil du Vent est une Brigantine voilié gréé construite en 1911 au C.H.Lühring port dans Brake, en Allemagne, originaire du meilleur construteur de bâteau nommé Friedrich.',7524.00,0,5,6,4,3,11),(28,'Brigantine Soren','Soren_Brigantine.jpg','Le Søren Larsen est un brick-goélette au pavillon britannique.',8700.00,0,7,3,4,3,11),(29,'Galeon Warded','Warded_Galeon.jpg','Un galion est un grand navire à voiles armé, naviguant en escorte, destiné aux échanges avec les colonies européennes entre le XVIᵉ et le XVIIIᵉ siècle. Il s\'agit de navires à plusieurs ponts, à château arrière et avant, entre trois et cinq mâts gréés en voiles carrées, avec une voile latine sur le mât arrière.',9910.00,0,2,3,4,1,12),(30,'Galeon Neptune','Neptune-Galleon.jpg','Un galion est un grand navire à voiles armé, naviguant en escorte, destiné aux échanges avec les colonies européennes entre le XVIᵉ et le XVIIIᵉ siècle. Il s\'agit de navires à plusieurs ponts, à château arrière et avant, entre trois et cinq mâts gréés en voiles carrées, avec une voile latine sur le mât arrière.',9990.00,0,1,1,4,1,12),(31,'Barre','Steering_wheel_Sedov.jpg','La barre d\'un navire est utilisée pour orienter un navire à moteur ou à voile dans la direction voulue. Ensemble, avec le mécanisme de pilotage, ils forment la gouverne. La barre est soit connectée à un système mécanique, servo-électrique ou hydraulique soit directement relié au gouvernail.',642.00,0,25,154,4,1,20),(32,'Voile','Sail.jpg','Une voile est un assemblage de pièces de tissu, dont la taille peut varier de quelques mètres carrés à plusieurs centaines de mètres carrés, qui, grâce à l\'action du vent, sert à faire avancer un véhicule.',680.00,0,16,456,4,2,20),(33,'Coffre','Chest.jpg','Un coffre est un meuble fermé destiné à contenir ou protéger des objets, pouvant le cas échéant permettre leur transport. Généralement plat, le coffre peut également être surmonté d\'un couvercle à double pente.',120.00,0,254,1329,4,2,20),(34,'Hamac','Hammock.jpg','Un hamac est une toile ou un filet suspendu entre deux points d\'ancrage, destiné à dormir ou à se reposer. Un hamac peut être soit individuel, soit familial. Il peut être doublé, rembourré au niveau du couchage et avoir des poches intérieures ou extérieures, ainsi que des fioritures diverses pour le décorer.',15.00,0,424,528,4,2,20),(35,'Pain blanc','Bread.jpeg','Le pain blanc est un pain à base de farine de blé de laquelle ont été retirés le son et les germes, ce qui lui donne cette couleur bien blanche, ainsi qu\'une date de durabilité minimale plus longue, lui évitant un certain rancissement par rapport à d\'autres pains.',100.00,0,214,6412,6,2,19),(36,'Pain au céréales','Cereal_Bread.png','Un mélange subtil de farines céréales et de graines savoureuses, idéal au petit-déjeuner pour faire le plein d\'énergie. Le pain peut être conservé dans un endroit sec, dans son emballage, sac en lin ou sac en coton.',864.00,420,57,678,6,2,19),(37,'Pomme','Apple.jpg','La pomme est un fruit comestible produit par un pommier. Les pommiers sont cultivés mondialement et représentent l\'espèce la plus cultivée du genre Malus. L\'arbre est originaire d\'Asie centrale, où son ancêtre sauvage, le Malus sieversii peut encore être trouvé de nos jours.',5.00,0,500,35,6,3,18),(38,'Poires','Pears.jpg','La poire est le fruit à pépins comestible au goût doux et sucré, produit par le poirier commun, arbre de la famille des Rosaceae. Le terme de « poire » désigne aussi par extension le fruit de tout arbre du genre Pyrus. Parmi les 68 espèces de Pyrus, assez peu sont cultivées pour leurs fruits comestibles.',900.00,871,43,67,6,3,18),(39,'Fruit du Dragon','Dragon_Fruit.jpg','Le fruit du dragon, également connu sous le nom espagnol de pitaya ou pithaya ou pitahaya, est le fruit de différentes espèces de cactus hémiépiphytes, et plus particulièrement de celles de l’espèce Hylocereus undatus. Sur les étals, c\'est le nom pitaya qui est très majoritairement employé.',420.00,0,47,64,6,3,18),(40,'Banane','Banannas.jpg','La banane est le fruit ou la baie dérivant de l’inflorescence du bananier. Les bananes sont des fruits très généralement stériles issus de variétés domestiquées. Seuls les fruits des bananiers sauvages et de quelques cultivars domestiques contiennent des graines.',453.00,0,24,875,6,3,18),(41,'Rhum','Rum.jpg','Le rhum est une eau-de-vie originaire des Amériques, produite soit par distillation de sous-produits fermentés de l\'industrie sucrière ou mélasse : le rhum industriel ou traditionnel, soit à partir du jus de canne à sucre fermenté : le rhum agricole.',404.00,0,500,7810,6,3,17),(42,'Bière','Beer.jpeg','La sensation d\'amertume prolonge le goût de la bière tout en laissant une sensation de fraîcheur en bouche. C\'est grâce au houblon, ou plus précisément à l\'acide alpha qui s\'en dégage au moment de la cuisson, que l\'on doit cette amertume, qui doit être fine et discrète.',200.00,0,300,4017,6,3,17),(43,'Tonneau d\'eau','Barrel_Water.png','Le tonneau est entièrement bouché, à l\'exception d\'un mince tube. On ajoute de l\'eau dans le tube qui se remplit alors jusqu\'en haut. Cette eau fait augmenter la pression dans le tonneau, ce qui dans l\'expérience fait exploser le tonneau.',22.00,0,120,624,6,3,17),(44,'Charbon','Coal.jpeg','Le charbon est une roche sédimentaire combustible, riche en carbone, de couleur noire ou marron foncé, formée à partir de la dégradation partielle de la matière organique des végétaux. Il est exploité dans des mines appelées charbonnages en tant que combustible.',320.00,0,55,547,3,1,8),(45,'Quartz','Quartz.jpg','Le quartz est une espèce minérale du groupe des silicates, sous-groupe des tectosilicates, composé de dioxyde de silicium, ou silice, de formule chimique SiO₂, avec des traces de différents éléments tels que Al, Li, B, Fe, Mg, Ca, Ti, Rb, Na, OH.',2068.00,0,43,86,3,1,8),(46,'Cuivre','Copper.jpg','Le cuivre est l\'élément chimique de numéro atomique 29, de symbole Cu. Le corps simple cuivre est un métal.',1703.00,0,69,129,3,1,8),(47,'Fer','Iron-ore.jpg','Le fer est l\'élément chimique de numéro atomique 26, de symbole Fe. Le corps simple est le métal et le matériau ferromagnétique le plus courant dans la vie quotidienne, le plus souvent sous forme d\'alliages divers.',2302.00,2024,36,817,3,1,8),(48,'Fibre','Fibre.jpg','Une fibre végétale est une expansion cellulaire filiforme et morte, principalement composée de cellulose, d\'hémicelluloses, de lignines, et de pectines. Elle est isolée ou compose avec d\'autres un faisceau.',963.00,0,79,124,3,2,7),(49,'Huile','Oile.jpg','Une huile est un corps gras qui est à l\'état liquide à température ambiante et qui ne se mélange pas à l\'eau. Les huiles sont des liquides gras, visqueux, d\'origine animale, végétale, minérale ou synthétique. Elles se différencient des graisses qui sont pâteuses dans les conditions normales d\'utilisation.',314.00,0,21,334,3,2,7),(50,'Tronc d\'arbre','Wood.jpg','Le tronc est la partie de l\'arbre qui se décompose le plus lentement, d\'autant plus lentement qu\'il s\'agit d\'un bois dur et qu\'il n\'est pas exposé à l\'humidité.',1400.00,0,54,613,3,2,7),(51,'Sucre','Sugar.jpg','Le sucre est une substance de saveur douce extraite principalement de la canne à sucre et de la betterave sucrière. Le sucre est une molécule de saccharose. Il est également possible d\'obtenir du sucre à partir d\'autres plantes.',1034.00,0,200,167,3,2,7),(52,'Canne à Sucre','SugarCanne.png','La canne à sucre est une plante cultivée appartenant au genre Saccharum, cultivée principalement pour la production du sucre extrait des tiges.',678.00,0,216,165,3,2,7),(53,'Cacahuète','Peanuts.jpg','L’arachide, dont le fruit s\'appelle cacahuète ou cacahouète, arachide, pois de terre, pistache de terre et pinotte au Canada est une plante de la famille des légumineuses originaire du nord-ouest.',924.00,654,25,214,3,2,7),(54,'Dodo','Dodo.jpg','Le Dronte de Maurice est une espèce d\'oiseaux de l\'ordre des Columbiformes, endémique de l\'île Maurice, disparue depuis le XVIᵉ siècle. Il est plus connu sous le nom de dodo, nom vernaculaire également utilisé pour désigner le Solitaire de Bourbon, bien que celui-ci appartienne à un autre ordre. ',800.00,0,13,180,3,2,6),(55,'Mouton','Sheep.jpg','Le mouton est un mammifère domestique herbivore de la famille des bovidés. ... Le mouton n\'est pas très grand, il mesure entre 1 et 1,5 mètre de long. Les mâles pèsent entre 45 et 160 kg, tandis que les femelles sont un peu plus petites et pèsent au plus 100 kg.',1300.00,0,23,46,3,2,6),(56,'Vache','Cow.png','Vache est le nom vernaculaire donné à la femelle du mammifère domestique de l\'espèce Bos taurus, un ruminant appartenant à la famille des bovidés, généralement porteur de deux cornes sur le front. Les individus mâles sont appelés taureaux et les jeunes, veaux.',1801.00,0,6,42,3,2,6),(57,'Cheval','Horse.jpg','Le cheval est un grand mammifère herbivore et ongulé à sabot unique ; c\'est l\'une des espèces de la famille des Équidés, lesquelles ont évolué, au cours des derniers 45 à 55 millions d\'années, à partir d\'un petit mammifère possédant plusieurs doigts.',2000.00,0,3,19,3,2,6),(58,'Écureuils volant','Flying-squirrel.png','Le terme écureuil [ekyʁœj] est un nom vernaculaire ambigu qui désigne en français de nombreuses espèces de rongeurs grimpeurs de taille moyenne, parfois même « volants ». Leur queue, plus ou moins touffue selon les espèces, forme un panache ou un plumeau caractéristique.',69.00,0,48,34,1,2,2),(59,'Perroquet','Parrot.jpg','Les perroquets sont des oiseaux des forêts ; il en existe 350 espèces différentes, connues sous des noms variés, tels que ara, perruche, cacatoès... ... Ce sont des oiseaux souvent très colorés. Ils ont un gros bec crochu, qui leur sert à manger des graines, des fruits, et des noix (fruits charnus).',1800.00,0,56,89,1,1,2),(60,'Mouette','Seagull.jpg','Mouette est un nom vernaculaire ambigu en français. On nomme mouettes les oiseaux de plusieurs genres de la sous-famille des Larinae et de la tribu des Larini, qui comprend aussi les goélands.',2.00,1,200,3,1,1,2),(61,'Macareu','Puffin.jpg','Le Macareux moine, également dit « perroquet de mer », est une espèce d\'oiseau marin pélagique nord-atlantique qui vit en haute mer, sauf lors de sa reproduction qui le contraint à rejoindre la terre ferme où il niche sur les pentes enherbées, les îles ou sur des falaises.',340.00,320,64,62,1,1,2),(62,'Singe','Monkey.jpg','Les singes sont des mammifères de l\'ordre des primates, généralement arboricoles, à la face souvent glabre et caractérisés par un encéphale développé et de longs membres terminés par des doigts.',949.00,0,49,1001,1,1,1),(63,'Tortue','Tortoise.jpg','Les Tortues, ou Chéloniens, forment un ordre de reptiles dont la caractéristique est d\'avoir une carapace.',400.00,0,14,12,1,1,1),(64,'Chien','Dog.jpg','Le Chien est la sous-espèce domestique de Canis lupus, un mammifère de la famille des Canidés, laquelle comprend également le dingo, chien domestique retourné à l\'état sauvage.',1200.00,200,300,2,1,1,1),(65,'Chat','Cat.jpg','Le Chat domestique est la sous-espèce issue de la domestication du Chat sauvage, mammifère carnivore de la famille des Félidés. Il est l’un des principaux animaux de compagnie et compte aujourd’hui une cinquantaine de races différentes reconnues par les instances de certification.',150.00,1499,6,124,1,1,1),(66,'Tricorne','Tricorne.png','Le tricorne est un chapeau très en vogue au XVIIIᵉ siècle, de forme triangulaire à bords repliés sur la calotte en trois cornes, d’où son nom. Pour autant, il fallut attendre le XIXᵉ siècle pour que ce couvre-chef prenne ce nom. Il est apparu vers 1690. Ce sont les militaires qui en répandirent l’usage.',118.00,0,218,71,5,3,13),(67,'Chapeau de paille','StrawHat.jpg','Le chapeau de paille est un chapeau qui est tressé avec de la paille ou du roseaux. Il est conçu pour protéger la tête des ardeurs du soleil. Déjà porté dans l\'Antiquité, on n\'en connaît pas les premières formes.',2.00,0,74,112,5,3,13),(68,'Casque en cuir','LeatherHat.jpg','Le Heaumes Médiévaux est un casque de la chevalerie qui protège la totalité de la tête. Il est constitué d\'une cervelière, d\'une plaque faciale couvrant le visage et percée de trous pour la vision et l\'aération, et d\'une plaque protégeant la nuque et entourant toute la tête.',33.00,0,26,5,5,3,13),(69,'Pourpoint','Doublet.jpeg','Le pourpoint est un vêtement du haut, porté au Moyen Âge et à la Renaissance par les hommes. Les fabricants de pourpoints s\'appelaient des gipponiers. C\'est une sorte de veste courte et matelassée qui couvre le corps du cou à la ceinture.',49.00,42,30,26,5,3,14),(70,'Manteau en cuir','Leather-Coat.jpg','Vêtements de Pirates permettant d\'affronter les tempêratures les plus froides lorsqu\'ils naviguent sur les différents Océans.',360.00,0,29,41,5,2,14),(71,'Gant en cuir','Leather-Gloves.jpg','Vêtements de Pirates permettant d\'affronter les tempêratures les plus froides lorsqu\'ils naviguent sur les différents Océans.',8.00,0,16,36,5,2,14),(72,'Gant en cuir et métal','Leather-Gloves-and-Iron.jpg','Vêtements de Pirates permettant d\'affronter les tempêratures les plus froides lorsqu\'ils naviguent sur les différents Océans.',629.00,0,8,9,5,2,14),(73,'Kilt en cuir','Kilt.jpg','Le kilt en cuir avec doubles poches à charge est une coupe décontractée avec une torsion spéciale. Au lieu des tissus traditionnels, ce kilt est fabriqué à partir de cuir de vache broyé de qualité supérieure, ce qui lui confère une sensation somptueuse sans compromettre sa force.',64.00,0,35,99,5,2,15),(74,'Braies','Braies.jpg','Les braies, en latin braca, sont un vêtement en forme de pantalon, ajusté ou flottant, qui était porté par plusieurs peuples de l\'Antiquité, en particulier les Gaulois, ainsi qu\'au Moyen Âge.',56.00,54,2,212,5,2,15),(75,'Landskneck','Landkneck.jpg','Les Landsknechte étaient des mercenaires allemands utilisés dans les formations de brochets et de fusils au début de la période moderne.',152.00,0,12,45,5,2,15),(76,'Espadrille','Espadrille.jpg','Une espadrille est une chaussure légère en toile avec une semelle en corde de chanvre ou de spart tressée, traditionnelle dans plusieurs régions chaudes du monde. Au Canada francophone, le terme espadrille est utilisé pour désigner des chaussures de sport.',15.00,0,36,45,5,3,16),(77,'Botte','Boots.jpg','La botte est une chaussure unisexe, dont la tige enferme la jambe et le pied jusqu\'à une hauteur qui dépend de l\'usage auquel elle est destinée : cuisse, genou ou mollet.',302.00,203,23,18,5,3,16),(78,'Chaussure','Shose.jpg','Les chaussures, ou souliers en Amérique du Nord francophone, constituent un élément d\'habillement dont le rôle est de protéger les pieds. Il s\'agit également d\'un accessoire de mode qui vêt les femmes comme les hommes.',123.00,0,42,3,5,3,16);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products_command`
--

DROP TABLE IF EXISTS `products_command`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products_command` (
  `id_command` int(11) NOT NULL AUTO_INCREMENT,
  `id_products` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_command`),
  KEY `id_products` (`id_products`),
  CONSTRAINT `products_command_ibfk_1` FOREIGN KEY (`id_command`) REFERENCES `commands` (`id`),
  CONSTRAINT `products_command_ibfk_2` FOREIGN KEY (`id_products`) REFERENCES `products` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products_command`
--

LOCK TABLES `products_command` WRITE;
/*!40000 ALTER TABLE `products_command` DISABLE KEYS */;
/*!40000 ALTER TABLE `products_command` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subcategory`
--

DROP TABLE IF EXISTS `subcategory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subcategory` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `id_category` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_category` (`id_category`),
  CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subcategory`
--

LOCK TABLES `subcategory` WRITE;
/*!40000 ALTER TABLE `subcategory` DISABLE KEYS */;
INSERT INTO `subcategory` VALUES (1,'Terrestre',1),(2,'Volant',1),(3,'Distance',2),(4,'Corps à corps',2),(5,'Munition',2),(6,'Animal',3),(7,'Végétale',3),(8,'Minéral',3),(9,'Radeau',4),(10,'Sloop',4),(11,'Brigantine',4),(12,'Galion',4),(13,'Couvre chef',5),(14,'Haut',5),(15,'Bas',5),(16,'Soulier',5),(17,'Boisson',6),(18,'Fruit',6),(19,'Pain',6),(20,'Pièce détachée',4),(21,'Navale',2);
/*!40000 ALTER TABLE `subcategory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `pseudo` varchar(100) DEFAULT NULL,
  `adress` text NOT NULL,
  `age` tinyint(4) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(50) DEFAULT NULL,
  `prime` tinyint(1) DEFAULT 0,
  `id_users_category` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_users_category` (`id_users_category`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_users_category`) REFERENCES `users_category` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_category`
--

DROP TABLE IF EXISTS `users_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_category` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_category`
--

LOCK TABLES `users_category` WRITE;
/*!40000 ALTER TABLE `users_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'corsell_db'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-09 12:09:46
