CREATE DATABASE corsell_db;

use corsell_db;

ALTER DATABASE `corsell_db`
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;

CREATE TABLE users_category (
    id TINYINT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL
);

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    pseudo VARCHAR(100),
    adress TEXT NOT NULL,
    age TINYINT NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT null,
    avatar TEXT,
    prime BOOL DEFAULT false,
    id_users_category TINYINT NOT NULL,
    FOREIGN KEY (id_users_category) REFERENCES users_category(id)
);

CREATE TABLE payment (
    id TINYINT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL
);

CREATE TABLE delivery (
    id TINYINT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL
);

CREATE TABLE commands (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_user INT NOT NULL,
    id_payment TINYINT NOT NULL,
    id_delivery TINYINT NOT NULL,
    FOREIGN KEY (id_user) REFERENCES users(id),
    FOREIGN KEY (id_payment) REFERENCES payment(id),
    FOREIGN KEY (id_delivery) REFERENCES delivery(id)
);

CREATE TABLE brands (
    id SMALLINT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    picture TEXT NOT NULL,
    description TEXT
);

CREATE TABLE category (
    id TINYINT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    picture TEXT NOT NULL
);

CREATE TABLE subcategory (
    id TINYINT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    id_category TINYINT,
    FOREIGN KEY (id_category) REFERENCES category(id)
);

CREATE TABLE products (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    picture TEXT NOT NULL,
    description TEXT NOT NULL,
    price INT NOT NULL,
    promo INT,
    quantity INT,
    sell_number INT,
    id_category TINYINT,
    id_brands SMALLINT,
    id_subcategory TINYINT,
    id_seller INT,
    FOREIGN KEY (id_subcategory) REFERENCES subcategory(id),
    FOREIGN KEY (id_category) REFERENCES category(id),
    FOREIGN KEY (id_brands) REFERENCES brands(id),
    FOREIGN KEY (id_seller) REFERENCES users(id)
);

CREATE TABLE products_command (
    id_command INT,
    id_products INT,
    FOREIGN KEY (id_command) REFERENCES commands(id),
    FOREIGN KEY (id_products) REFERENCES products(id),
    PRIMARY KEY (id_command, id_products)
);

INSERT INTO delivery (name)
VALUES
("taverne"),
("coco");

INSERT INTO payment (name)
VALUES
("couronnes");

INSERT INTO users_category (name) 
VALUES
("Pirate"),
("Marchand"),
("Corsaire");

INSERT INTO brands (name,picture, description)
VALUES
('Anchor','Anchor.png', "Anchor est une société américaine créée en 900 par Philip Knight et Bill Bowerman. Basée à Beaverton dans l'Oregon, elle est spécialisée dans la fabrication d'articles."),
('Los Piratas','Los-Piratas.png', "L'idée de Los Piratas naît en 970 chez Niestlé : la multinationale suisse imagine alors un concept constitué d'un système intégré fermé où l'on introduirait des produits. La première application brevetée remonte ainsi à 1000, selon un procédé inventé par l'ingénieur vaudois Éric Favre3."),
('Shark','Shark.png', "La couche-culotte jetable Sharks fut inventée par l'ingénieur chimiste Victor Mills (897-997), alors qu'il travaillait chez Procter & Gamble dans les années 950, mais l'invention du concept revient à la britannique Valerie Hunter Gordon (921-1016) pour la société Robinson and Sons en 949 avec la gamme Paddi Pads, leader jusqu'en 960.");

INSERT INTO category (name,picture)
VALUES
('Familiers','Animaux.svg'),
('Armes','Armes.svg'),
('Ressources','Rawmaterial.svg'),
('Navires','Ship.svg'),
('Vêtements','Vetements.svg'),
('Victuailles','Victuaille.svg');


INSERT INTO subcategory (name,id_category)
VALUES
('Terrestre',1),
('Volant',1),
('Distance',2),
('Corps à corps',2),
('Munition',2),
('Animal',3),
('Végétale',3),
('Minéral',3),
('Radeau',4),
('Sloop',4),
('Brigantine',4),
('Galion',4),
('Couvre chef',5),
('Haut',5),
('Bas',5),
('Soulier',5),
('Boisson',6),
('Fruit',6),
('Pain',6),
('Pièce détachée',4),
('Navale',2);

INSERT INTO products (name,picture,description,price,promo,quantity,sell_number,id_brands,id_category,id_subcategory)
VALUES
("Gourdin","Bludgeon.jpg","Un gourdin est une des armes les plus primitives, arme dite de mêlée ou de contact qui semble avoir été universellement utilisée par l'homme.",76,0,32,12,1,2,4),
("Poing américain","BrassKnuckles.jpg","Un coup-de-poing américain est une arme blanche contondante constituée d'une pièce de métal dans laquelle on passe les doigts.",420,0,36,94,3,2,4),
("Harpon","Harpoon.png","Une arbalète de chasse sous-marine ou fusil harpon est une arme de trait sous-marine dont le but est de propulser une flèche permettant la capture de poissons et de céphalopodes.",602,0,43,12,2,2,4),
("Fléau","Flail.png","Le fléau d'armes est une arme blanche contondante utilisée au Moyen Âge européen.",789,0,12,89,3,2,4),
("Tromblon","Blunderbuss.png","Le tromblon, aussi appelé espingole ou mousqueton est une arme à feu que l'on charge par la bouche, et dont le canon est légèrement évasé.",2800,0,36,56,2,2,3),
("Bolas","Bolas.png","Les mots espagnols bolas ou boleadoras, parfois traduits en français par lasso à boules, désignent une arme de jet comprenant plusieurs masses sphériques réunies par des liens, destinées à capturer les animaux en entravant leurs pattes.",15,10,215,69,3,2,3),
("Arc","Bow.jpg","L'arc est une arme de trait destinée à lancer des flèches. Il est constitué principalement d'une pièce courbe flexible qui emmagasine et restitue l'énergie comme un ressort, et d'une corde qui permet l'armement de l'arc, puis la transmission de l'impulsion à la flèche lors de la détente.",200,0,12,167,1,2,3),
("Fusil à silex","Carabine.jpg","La platine à silex est un type de mécanisme autrefois utilisé dans les armes à feu, mise au point par l'arquebusier Marin Bourgeois en combinant le système de deux platines existantes.",2048,0,42,64,2,2,3),
("Arbalète","Crossbow.jpg","L'arbalète (du latin arcuballista) est une arme de trait, constituée d'un arc monté sur un fût et lançant des projectiles appelés « carreaux ». Sa puissance est supérieure à celle d'un arc ainsi que sa précision mais son rechargement long la pénalise.",214,0,24,12,1,2,3),
("Pistolet à silex","Flintlock_Pistol_.jpg","La platine à silex est un type de mécanisme autrefois utilisé dans les armes à feu, mise au point par l'arquebusier Marin Bourgeois en combinant le système de deux platines existantes.",620,540,22,3,3,2,3),
("Canon léger","Light_Canon.jpg","Ce canon, relativement léger, est de loin le plus utilisé par les pirates.",1042,0,7,34,3,2,21),
("Canon lourd","Heavy_Canon.jpg","Ce canon, relativement lourd, est de loin le plus utilisé par les pirates. Pour infliger de lourd dégâts aux navires enemis.",2248,0,23,64,2,2,21),
("Pierrier","Swivel_Gun.jpg","Un pierrier est un petit canon monté sur pivot, de façon à pouvoir disposer d’une grande latitude de tir en gisement et en site.",230,0,14,45,1,2,21),
("Mortier","Mortar.jpg","Un mortier est une arme légère, sans culasse – la force de recul étant absorbée par le sol –, à mise à feu du boulet de canon par gravité, et de ce fait ne pouvant tirer qu’en tir proche de la verticale, ce qui lui permet d'atteindre un site proche très masqué.",1067,0,12,34,1,2,21),
("Boulet chaînés","Chain-bar-shot.jpg","boulets chaînés ou enchaînés : 2 boulets ou demis boulets reliés par une chaîne.",80,0,300,135,3,2,5),
("Boulet de canon","Canonball.jpg","Le boulet de canon, ou boulet, est un projectile d'artillerie sphérique en pierre ou en métal.",60,0,600,800,3,2,5),
("Boulet de canon enflammé","Flaming-Cannonball.jpg","Le boulet rouge est un boulet que l'on fait chauffer dans un gril (ou four) particulier jusqu'à ce qu'il ait la couleur rouge cerise clair. Pour tirer, le canon reçoit sa charge de poudre dans une gargousse.",300,0,20,48,1,2,5),
("Baril de poudre noire","Powder.jpg","La poudre noire, parfois dénommée poudre à canon ou poudre à fusil, est le plus ancien explosif chimique connu. De couleur noire, elle est constituée d'un mélange déflagrant de soufre, de nitrate de potassium (salpêtre) et de charbon de bois. ",50,0,222,603,1,2,5),
("Balle","Bullet.jpg","Une balle est un projectile d'arme à feu d'un calibre inférieur à 20 mm, de type pistolet, carabine, fusil.",150,0,200,1253,1,2,5),
("Flèches","Arrow.jpg","Une flèche est une arme de tir, constituée d'un long tube ou fût muni d'une pointe à une extrémité, d'un empennage et une encoche à l'autre, et utilisée principalement pour la chasse et pour la guerre.",120,0,230,456,2,2,5),
("Carreaux d'arbalète","Crossbow-arrow.jpg","Le carreau d'arbalète, ou simplement le carreau ou encore le trait d’arbalètea, est le projectile utilisé avec une arbalète, dont le fer pyramidal à quatre pans a une base carrée.",50,34,120,643,2,2,5),
("Radeau en bambou","Raft_Bamboojpg.jpg","Radeau de fortune en bambou.",12,0,1036,2780,2,4,9),
("Radeau à voile","Raft_Sail.jpg","Un radeau, désigne à l'origine un assemblage de poutres1. C'est un type d'embarcation basse sur l'eau, souvent sommaire, permettant de naviguer ou d'atteindre la terre ferme, parfois dans des conditions particulières.",80,0,23,223,2,4,9),
("Sloop Renard","Fox_Sloop.jpg","Le Renard était un voilier du XIX e siècle, de type cotre à hunier. Il fut le dernier navire armé pour la course par le corsaire malouin Robert Surcouf.",1645,0,5,6,3,4,10),
("Sloop des ombres","Shadow_Sloop.jpg","Le Sloop des ombres était un voilier du XIX e siècle, de type cotre à hunier. Il fut l'un des dernier navire armé.",1812,0,4,3,3,4,10),
("Brigantine Friedrich","Freidrich_Brigantine.png","L'Oeil du Vent est une Brigantine voilié gréé construite en 1911 au C.H.Lühring port dans Brake, en Allemagne, originaire du meilleur construteur de bâteau nommé Friedrich.",7524,0,5,6,3,4,11),
("Brigantine Soren","Soren_Brigantine.jpg","Le Søren Larsen est un brick-goélette au pavillon britannique.",8700,0,7,3,3,4,11),
("Galeon Warded","Warded_Galeon.jpg","Un galion est un grand navire à voiles armé, naviguant en escorte, destiné aux échanges avec les colonies européennes entre le XVIᵉ et le XVIIIᵉ siècle. Il s'agit de navires à plusieurs ponts, à château arrière et avant, entre trois et cinq mâts gréés en voiles carrées, avec une voile latine sur le mât arrière.",9910,0,2,3,1,4,12),
("Galeon Neptune","Neptune-Galleon.jpg","Un galion est un grand navire à voiles armé, naviguant en escorte, destiné aux échanges avec les colonies européennes entre le XVIᵉ et le XVIIIᵉ siècle. Il s'agit de navires à plusieurs ponts, à château arrière et avant, entre trois et cinq mâts gréés en voiles carrées, avec une voile latine sur le mât arrière.",9990,0,1,1,1,4,12),
("Barre","Steering_wheel_Sedov.jpg","La barre d'un navire est utilisée pour orienter un navire à moteur ou à voile dans la direction voulue. Ensemble, avec le mécanisme de pilotage, ils forment la gouverne. La barre est soit connectée à un système mécanique, servo-électrique ou hydraulique soit directement relié au gouvernail.",642,0,25,154,1,4,20),
("Voile","Sail.jpg","Une voile est un assemblage de pièces de tissu, dont la taille peut varier de quelques mètres carrés à plusieurs centaines de mètres carrés, qui, grâce à l'action du vent, sert à faire avancer un véhicule.",680,0,16,456,2,4,20),
("Coffre","Chest.jpg","Un coffre est un meuble fermé destiné à contenir ou protéger des objets, pouvant le cas échéant permettre leur transport. Généralement plat, le coffre peut également être surmonté d'un couvercle à double pente.",120,0,254,1329,2,4,20),
("Hamac","Hammock.jpg","Un hamac est une toile ou un filet suspendu entre deux points d'ancrage, destiné à dormir ou à se reposer. Un hamac peut être soit individuel, soit familial. Il peut être doublé, rembourré au niveau du couchage et avoir des poches intérieures ou extérieures, ainsi que des fioritures diverses pour le décorer.",15,0,424,528,2,4,20),
("Pain blanc","Bread.jpeg","Le pain blanc est un pain à base de farine de blé de laquelle ont été retirés le son et les germes, ce qui lui donne cette couleur bien blanche, ainsi qu'une date de durabilité minimale plus longue, lui évitant un certain rancissement par rapport à d'autres pains.",100,0,214,6412,2,6,19),
("Pain au céréales","Cereal_Bread.png","Un mélange subtil de farines céréales et de graines savoureuses, idéal au petit-déjeuner pour faire le plein d'énergie. Le pain peut être conservé dans un endroit sec, dans son emballage, sac en lin ou sac en coton.",864,420,57,678,2,6,19),
("Pomme","Apple.jpg","La pomme est un fruit comestible produit par un pommier. Les pommiers sont cultivés mondialement et représentent l'espèce la plus cultivée du genre Malus. L'arbre est originaire d'Asie centrale, où son ancêtre sauvage, le Malus sieversii peut encore être trouvé de nos jours.",5,0,500,35,3,6,18),
("Poires","Pears.jpg","La poire est le fruit à pépins comestible au goût doux et sucré, produit par le poirier commun, arbre de la famille des Rosaceae. Le terme de « poire » désigne aussi par extension le fruit de tout arbre du genre Pyrus. Parmi les 68 espèces de Pyrus, assez peu sont cultivées pour leurs fruits comestibles.",900,871,43,67,3,6,18),
("Fruit du Dragon","Dragon_Fruit.jpg","Le fruit du dragon, également connu sous le nom espagnol de pitaya ou pithaya ou pitahaya, est le fruit de différentes espèces de cactus hémiépiphytes, et plus particulièrement de celles de l’espèce Hylocereus undatus. Sur les étals, c'est le nom pitaya qui est très majoritairement employé.",420,0,47,64,3,6,18),
("Banane","Banannas.jpg","La banane est le fruit ou la baie dérivant de l’inflorescence du bananier. Les bananes sont des fruits très généralement stériles issus de variétés domestiquées. Seuls les fruits des bananiers sauvages et de quelques cultivars domestiques contiennent des graines.",453,0,24,875,3,6,18),
("Rhum","Rum.jpg","Le rhum est une eau-de-vie originaire des Amériques, produite soit par distillation de sous-produits fermentés de l'industrie sucrière ou mélasse : le rhum industriel ou traditionnel, soit à partir du jus de canne à sucre fermenté : le rhum agricole.",404,0,500,7810,3,6,17),
("Bière","Beer.jpeg","La sensation d'amertume prolonge le goût de la bière tout en laissant une sensation de fraîcheur en bouche. C'est grâce au houblon, ou plus précisément à l'acide alpha qui s'en dégage au moment de la cuisson, que l'on doit cette amertume, qui doit être fine et discrète.",200,0,300,4017,3,6,17),
("Tonneau d'eau","Barrel_Water.png","Le tonneau est entièrement bouché, à l'exception d'un mince tube. On ajoute de l'eau dans le tube qui se remplit alors jusqu'en haut. Cette eau fait augmenter la pression dans le tonneau, ce qui dans l'expérience fait exploser le tonneau.",22,0,120,624,3,6,17),
("Charbon","Coal.jpeg","Le charbon est une roche sédimentaire combustible, riche en carbone, de couleur noire ou marron foncé, formée à partir de la dégradation partielle de la matière organique des végétaux. Il est exploité dans des mines appelées charbonnages en tant que combustible.",320,0,55,547,1,3,8),
("Quartz","Quartz.jpg","Le quartz est une espèce minérale du groupe des silicates, sous-groupe des tectosilicates, composé de dioxyde de silicium, ou silice, de formule chimique SiO₂, avec des traces de différents éléments tels que Al, Li, B, Fe, Mg, Ca, Ti, Rb, Na, OH.",2068,0,43,86,1,3,8),
("Cuivre","Copper.jpg","Le cuivre est l'élément chimique de numéro atomique 29, de symbole Cu. Le corps simple cuivre est un métal.",1703,0,69,129,1,3,8),
("Fer","Iron-ore.jpg","Le fer est l'élément chimique de numéro atomique 26, de symbole Fe. Le corps simple est le métal et le matériau ferromagnétique le plus courant dans la vie quotidienne, le plus souvent sous forme d'alliages divers.",2302,2024,36,817,1,3,8),
("Fibre","Fibre.jpg","Une fibre végétale est une expansion cellulaire filiforme et morte, principalement composée de cellulose, d'hémicelluloses, de lignines, et de pectines. Elle est isolée ou compose avec d'autres un faisceau.",963,0,79,124,2,3,7),
("Huile","Oile.jpg","Une huile est un corps gras qui est à l'état liquide à température ambiante et qui ne se mélange pas à l'eau. Les huiles sont des liquides gras, visqueux, d'origine animale, végétale, minérale ou synthétique. Elles se différencient des graisses qui sont pâteuses dans les conditions normales d'utilisation.",314,0,21,334,2,3,7),
("Tronc d'arbre","Wood.jpg","Le tronc est la partie de l'arbre qui se décompose le plus lentement, d'autant plus lentement qu'il s'agit d'un bois dur et qu'il n'est pas exposé à l'humidité.",1400,0,54,613,2,3,7),
("Sucre","Sugar.jpg","Le sucre est une substance de saveur douce extraite principalement de la canne à sucre et de la betterave sucrière. Le sucre est une molécule de saccharose. Il est également possible d'obtenir du sucre à partir d'autres plantes.",1034,0,200,167,2,3,7),
("Canne à Sucre","SugarCanne.png","La canne à sucre est une plante cultivée appartenant au genre Saccharum, cultivée principalement pour la production du sucre extrait des tiges.",678,0,216,165,2,3,7),
("Cacahuète","Peanuts.jpg","L’arachide, dont le fruit s'appelle cacahuète ou cacahouète, arachide, pois de terre, pistache de terre et pinotte au Canada est une plante de la famille des légumineuses originaire du nord-ouest.",924,654,25,214,2,3,7),
("Dodo","Dodo.jpg","Le Dronte de Maurice est une espèce d'oiseaux de l'ordre des Columbiformes, endémique de l'île Maurice, disparue depuis le XVIᵉ siècle. Il est plus connu sous le nom de dodo, nom vernaculaire également utilisé pour désigner le Solitaire de Bourbon, bien que celui-ci appartienne à un autre ordre. ",800,0,13,180,2,3,6),
("Mouton","Sheep.jpg","Le mouton est un mammifère domestique herbivore de la famille des bovidés. ... Le mouton n'est pas très grand, il mesure entre 1 et 1,5 mètre de long. Les mâles pèsent entre 45 et 160 kg, tandis que les femelles sont un peu plus petites et pèsent au plus 100 kg.",1300,0,23,46,2,3,6),
("Vache","Cow.png","Vache est le nom vernaculaire donné à la femelle du mammifère domestique de l'espèce Bos taurus, un ruminant appartenant à la famille des bovidés, généralement porteur de deux cornes sur le front. Les individus mâles sont appelés taureaux et les jeunes, veaux.",1801,0,6,42,2,3,6),
("Cheval","Horse.jpg","Le cheval est un grand mammifère herbivore et ongulé à sabot unique ; c'est l'une des espèces de la famille des Équidés, lesquelles ont évolué, au cours des derniers 45 à 55 millions d'années, à partir d'un petit mammifère possédant plusieurs doigts.",2000,0,3,19,2,3,6),
("Écureuils volant","Flying-squirrel.png","Le terme écureuil [ekyʁœj] est un nom vernaculaire ambigu qui désigne en français de nombreuses espèces de rongeurs grimpeurs de taille moyenne, parfois même « volants ». Leur queue, plus ou moins touffue selon les espèces, forme un panache ou un plumeau caractéristique.",69,0,48,34,2,1,2),
("Perroquet","Parrot.jpg","Les perroquets sont des oiseaux des forêts ; il en existe 350 espèces différentes, connues sous des noms variés, tels que ara, perruche, cacatoès... ... Ce sont des oiseaux souvent très colorés. Ils ont un gros bec crochu, qui leur sert à manger des graines, des fruits, et des noix (fruits charnus).",1800,0,56,89,1,1,2),
("Mouette","Seagull.jpg","Mouette est un nom vernaculaire ambigu en français. On nomme mouettes les oiseaux de plusieurs genres de la sous-famille des Larinae et de la tribu des Larini, qui comprend aussi les goélands.",8,4,200,3,1,1,2),
("Macareu","Puffin.jpg","Le Macareux moine, également dit « perroquet de mer », est une espèce d'oiseau marin pélagique nord-atlantique qui vit en haute mer, sauf lors de sa reproduction qui le contraint à rejoindre la terre ferme où il niche sur les pentes enherbées, les îles ou sur des falaises.",340,320,64,62,1,1,2),
("Singe","Monkey.jpg","Les singes sont des mammifères de l'ordre des primates, généralement arboricoles, à la face souvent glabre et caractérisés par un encéphale développé et de longs membres terminés par des doigts.",949,0,49,1001,1,1,1),
("Tortue","Tortoise.jpg","Les Tortues, ou Chéloniens, forment un ordre de reptiles dont la caractéristique est d'avoir une carapace.",400,0,14,12,1,1,1),
("Chien","Dog.jpg","Le Chien est la sous-espèce domestique de Canis lupus, un mammifère de la famille des Canidés, laquelle comprend également le dingo, chien domestique retourné à l'état sauvage.",1200,200,300,2,1,1,1),
("Chat","Cat.jpg","Le Chat domestique est la sous-espèce issue de la domestication du Chat sauvage, mammifère carnivore de la famille des Félidés. Il est l’un des principaux animaux de compagnie et compte aujourd’hui une cinquantaine de races différentes reconnues par les instances de certification.",1500,1499,6,124,1,1,1),
("Tricorne","Tricorne.png","Le tricorne est un chapeau très en vogue au XVIIIᵉ siècle, de forme triangulaire à bords repliés sur la calotte en trois cornes, d’où son nom. Pour autant, il fallut attendre le XIXᵉ siècle pour que ce couvre-chef prenne ce nom. Il est apparu vers 1690. Ce sont les militaires qui en répandirent l’usage.",118,0,218,71,3,5,13),
("Chapeau de paille","StrawHat.jpg","Le chapeau de paille est un chapeau qui est tressé avec de la paille ou du roseaux. Il est conçu pour protéger la tête des ardeurs du soleil. Déjà porté dans l'Antiquité, on n'en connaît pas les premières formes.",2,0,74,112,3,5,13),
("Casque en cuir","LeatherHat.jpg","Le Heaumes Médiévaux est un casque de la chevalerie qui protège la totalité de la tête. Il est constitué d'une cervelière, d'une plaque faciale couvrant le visage et percée de trous pour la vision et l'aération, et d'une plaque protégeant la nuque et entourant toute la tête.",33,0,26,5,3,5,13),
("Pourpoint","Doublet.jpeg","Le pourpoint est un vêtement du haut, porté au Moyen Âge et à la Renaissance par les hommes. Les fabricants de pourpoints s'appelaient des gipponiers. C'est une sorte de veste courte et matelassée qui couvre le corps du cou à la ceinture.",49,42,30,26,3,5,14),
("Manteau en cuir","Leather-Coat.jpg","Vêtements de Pirates permettant d'affronter les tempêratures les plus froides lorsqu'ils naviguent sur les différents Océans.",360,0,29,41,2,5,14),
("Gant en cuir","Leather-Gloves.jpg","Vêtements de Pirates permettant d'affronter les tempêratures les plus froides lorsqu'ils naviguent sur les différents Océans.",8,0,16,36,2,5,14),
("Gant en cuir et métal","Leather-Gloves-and-Iron.jpg","Vêtements de Pirates permettant d'affronter les tempêratures les plus froides lorsqu'ils naviguent sur les différents Océans.",629,0,8,9,2,5,14),
("Kilt en cuir","Kilt.jpg","Le kilt en cuir avec doubles poches à charge est une coupe décontractée avec une torsion spéciale. Au lieu des tissus traditionnels, ce kilt est fabriqué à partir de cuir de vache broyé de qualité supérieure, ce qui lui confère une sensation somptueuse sans compromettre sa force.",64,0,35,99,2,5,15),
("Braies","Braies.jpg","Les braies, en latin braca, sont un vêtement en forme de pantalon, ajusté ou flottant, qui était porté par plusieurs peuples de l'Antiquité, en particulier les Gaulois, ainsi qu'au Moyen Âge.",56,54,2,212,2,5,15),
("Landskneck","Landkneck.jpg","Les Landsknechte étaient des mercenaires allemands utilisés dans les formations de brochets et de fusils au début de la période moderne.",152,0,12,45,2,5,15),
("Espadrille","Espadrille.jpg","Une espadrille est une chaussure légère en toile avec une semelle en corde de chanvre ou de spart tressée, traditionnelle dans plusieurs régions chaudes du monde. Au Canada francophone, le terme espadrille est utilisé pour désigner des chaussures de sport.",15,0,36,45,3,5,16),
("Botte","Boots.jpg","La botte est une chaussure unisexe, dont la tige enferme la jambe et le pied jusqu'à une hauteur qui dépend de l'usage auquel elle est destinée : cuisse, genou ou mollet.",302,203,23,18,3,5,16),
("Chaussure","Shose.jpg","Les chaussures, ou souliers en Amérique du Nord francophone, constituent un élément d'habillement dont le rôle est de protéger les pieds. Il s'agit également d'un accessoire de mode qui vêt les femmes comme les hommes.",123,0,42,3,3,5,16);