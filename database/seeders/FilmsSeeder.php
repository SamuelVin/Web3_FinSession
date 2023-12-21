<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class FilmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB:: table('films')-> insert([

         
    /* Ma Liste Ma Liste Ma Liste Ma Liste Ma Liste Ma Liste Ma Liste Ma Liste Ma Liste Ma Liste Ma Liste */  
/* 1 */       
[
    'titre' => 'Lucifer',
    'genre' => 'divers',
    'année' => '2016',
    'realisateur' => 'Tiffany castro',
    'duree' => '2H10',
    'type' => 'Action',
    'brand' => 'Lionsgate',
    'cote' => 'R',
    'rating' => '8.0',
    'langues' => 'Anglais',
    'soustitres' => 'Français, Espagnol',
    'Personnes' => 'Tout public',
    'description' => " Au commencement l'ange Lucifer fut banni du Paradis et condamné à régner sur les Enfers pour l'éternité jusqu'à ce qu'il décide de prendre des vacances.Lassé et fatigué d'être le  Seigneur des Enfers.",
    'image' => 'lucifer.png',
    'video' =>'https://www.youtube.com/embed/X4bF_quwNtw'


 ],
/* 2 */            
 
 [
     'titre' => 'Suits',
     'genre' => 'divers',
     'année' => '1999',
     'realisateur' => 'Eric weber',
     'duree' => '2H10',
     'type' => 'Action',
    'brand' => 'Lionsgate',
    'cote' => 'R',
    'rating' => '8.0',
    'langues' => 'Anglais',
    'soustitres' => 'Français, Espagnol',
    'Personnes' => 'Tout public',
     'description' => "Mike Ross est un jeune homme brillant dont le rêve d'enfant était de devenir avocat, rêve brisé après que des imprévus l'eurent poussé à abandonner ses études. Intelligent et doté d'une mémoire eidétique.",
     'image' => 'suits.jpg',
     'video' =>'https://www.youtube.com/embed/85z53bAebsI'
  ],

/* 3 */           
  [
     'titre' => 'La casa de papel',
     'genre' => 'divers',
     'année' => '2017',
     'realisateur' => 'Jesus colmenar',
     'duree' => '2H10',
     'type' => 'Action',
    'brand' => 'Lionsgate',
    'cote' => 'R',
    'rating' => '8.0',
    'langues' => 'Anglais',
    'soustitres' => 'Français, Espagnol',
    'Personnes' => 'Tout public',
     'description' => "Huit voleurs font une prise d'otages dans la Maison royale de la Monnaie d'Espagne, tandis qu'un génie du crime manipule la police pour mettre son plan à exécution.",
     'image' => 'casa.jpg',
     'video' =>'https://www.youtube.com/embed/0ULjL4cbSro'
  ],

/* 4 */          
  [
     'titre' => 'The Gray man',
     'genre' => 'divers',
     'année' => '2022',
     'realisateur' => 'Anthony & Joe russo',
     'duree' => '2H10',
     'type' => 'Action',
    'brand' => 'Lionsgate',
    'cote' => 'R',
    'rating' => '8.0',
    'langues' => 'Anglais',
    'soustitres' => 'Français, Espagnol',
    'Personnes' => 'Tout public',
     'description' => "En 2003, Court Gentry est incarcéré dans une prison de Floride. Il est alors recruté par Donald Fitzroy de la CIA. Il fait alors partie du programme Sierra, sous le nom de code Sierra Six.",
     'image' => 'man.jpeg',
     'video' =>'https://www.youtube.com/embed/BmllggGO4pM'
  ],

/* 5 */          
  [
    'titre' => 'Flight',
    'genre' => 'divers',
    'année' => '2012',
    'realisateur' => 'Robert zemeckis',
    'duree' => '2H10',
    'type' => 'Science-fiction, Action',
    'brand' => 'Warner Bros. Pictures',
    'cote' => 'R',
    'rating' => '6.2',
    'langues' => 'Anglais',
    'soustitres' => 'Français, Espagnol',
    'Personnes' => 'Adolescents et adultes',
    'description' => "Whip Whitaker, pilote de ligne chevronné, réussit à faire atterrir son avion en catastrophe après une défaillance en plein ciel. Six personnes meurent dans l'accident.Il est reçu en héros après l'accident.",
    'image' => 'flight.jpg',
    'video' =>'https://www.youtube.com/embed/Aqn2L6kQQt8'
 ],

/* Top 10 des series  aujourd'hui: Canada  Top 10 des series  aujourd'hui: Canada  Top 10 des series  aujourd'hui: Canada */    
/* 1 */       
 [
    'titre' => 'Love is Blind',
    'genre' => 'top',
    'année' => '2022',
    'realisateur' => 'Allan dwan',
    'duree' => '2H10',
    'type' => 'Science-fiction, Action',
    'brand' => 'Warner Bros. Pictures',
    'cote' => 'R',
    'rating' => '6.2',
    'langues' => 'Anglais',
    'soustitres' => 'Français, Espagnol',
    'Personnes' => 'Adolescents et adultes',
    'description' => " Présentée par Nick et Vanessa Lachey, l'émission propose à des célibataires, qui désirent être aimés pour leur personnalité et non pour leur physique, de tenter une approche un peu spéciale pour trouver l'amour.",
    'image' => 'blind.webp',
    'video' =>'https://www.youtube.com/embed/CLgdOu5VeFk'
 ],

/* 2 */       
 [
    'titre' => 'Le cabinet de curiosités',
    'genre' => 'top',
    'année' => '2022',
    'realisateur' => 'Guillermo del toro',
    'duree' => '2H10',
    'type' => 'Science-fiction, Action',
    'brand' => 'Warner Bros. Pictures',
    'cote' => 'R',
    'rating' => '6.2',
    'langues' => 'Anglais',
    'soustitres' => 'Français, Espagnol',
    'Personnes' => 'Adolescents et adultes',
    'description' => "Nick Appleton, un vétéran raciste et aux idées d'extrême droite, a contracté des dettes. Pour tenter de les rembourser, il participe à des enchères dans des boxes de stockage.",
    'image' => 'cabinet.webp',
    'video' =>'https://www.youtube.com/embed/rEcvRIOWtww'
 ],

/* 3 */ 
 [
    'titre' => 'The watcher',
    'genre' => 'top',
    'année' => '2018',
    'realisateur' => 'Tim hunter',
    'duree' => '2H10',
    'type' => 'Science-fiction, Action',
    'brand' => 'Warner Bros. Pictures',
    'cote' => 'R',
    'rating' => '6.2',
    'langues' => 'Anglais',
    'soustitres' => 'Français, Espagnol',
    'Personnes' => 'Adolescents et adultes',
    'description' => "Après le décès tragique de leur petite fille, un couple en deuil, Ray et Maggie, achète un motel isolé dans le désert pour démarrer une nouvelle vie.",
    'image' => 'watcher.jpg',
    'video' =>'https://www.youtube.com/embed/5HDkw100sXQ'
 ],
/* 4 */ 
 [
    'titre' => 'Le goût de vivre',
    'genre' => 'top',
    'année' => '2007',
    'realisateur' => 'Ilaria cirino',
    'duree' => '2H10',
    'type' => 'Science-fiction, Super-héros',
    'brand' => 'Marvel Studios',
    'cote' => 'PG-13',
    'rating' => '6.7',
    'langues' => 'Anglais',
    'soustitres' => 'Français, Espagnol',
    'Personnes' => 'Tout public',
    'description' => " Le Goût de vivre relate l'histoire d'une Afro-Américaine tombée sous le charme d'un chef sicilien pendant ses études à Florence. Amy part vivre avec lui à Los Angeles...",
    'image' => 'vivre.jpg',
    'video' =>'https://www.youtube.com/embed/0fXNYuYjPCo'
 ],
/* 5*/ 

 [
    'titre' => 'Big mouth',
    'genre' => 'top',
    'année' => '2017',
    'realisateur' => 'Joel moser',
    'duree' => '2H10',
    'type' => 'Science-fiction, Super-héros',
    'brand' => 'Marvel Studios',
    'cote' => 'PG-13',
    'rating' => '6.7',
    'langues' => 'Anglais',
    'soustitres' => 'Français, Espagnol',
    'Personnes' => 'Tout public',
    'description' => "La série suit les aventures d’élèves de 5e d’un collège de la côte est près de New York confrontés aux affres de la puberté et de leurs premiers pas vers la vie active.",
    'image' => 'big.webp',
    'video' =>'https://www.youtube.com/embed/-0UOv6lOwmI'
 ],
/* 6 */ 

 [
    'titre' => 'I am a stalker',
    'genre' => 'top',
    'année' => '2010',
    'realisateur' => 'Martin kemp',
    'duree' => '2H10',
    'type' => 'Science-fiction, Super-héros',
    'brand' => 'Marvel Studios',
    'cote' => 'PG-13',
    'rating' => '6.7',
    'langues' => 'Anglais',
    'soustitres' => 'Français, Espagnol',
    'Personnes' => 'Tout public',
    'description' => "Dans cette série documentaire, des harceleurs condamnés et des victimes livrent des récits glacants de persécution, d'abus et d'autres crimes.",
    'image' => 'stalker.jpg',
    'video' =>'https://www.youtube.com/embed/34SMvtauHlw'
 ],
/* 7 */           

 [
    'titre' => 'Dubai bling',
    'genre' => 'top',
    'année' => '2022',
    'realisateur' => 'Zoya akhtar',
    'duree' => '2H10',
    'type' => 'Science-fiction, Super-héros',
    'brand' => 'Marvel Studios',
    'cote' => 'PG-13',
    'rating' => '6.7',
    'langues' => 'Anglais',
    'soustitres' => 'Français, Espagnol',
    'Personnes' => 'Tout public',
    'description' => "Ingrid est aveugle. Elle vit avec son mari Morten. Dès qu’il quitte l’appartement, elle s’assoit à la fenêtre avec une tasse de thé pour écouter la radio ou les bruits.",
    'image' => 'dubai.png',
    'video' =>'"https://www.youtube.com/embed/3VKESwIpzqk'
 ],
/* 8 */           

 [
    'titre' => 'Drink masters',
    'genre' => 'top',
    'année' => '2022',
    'realisateur' => 'Zoya akhtar',
    'duree' => '2H10',
    'type' => 'Science-fiction, Super-héros',
    'brand' => 'Marvel Studios',
    'cote' => 'PG-13',
    'rating' => '6.7',
    'langues' => 'Anglais',
    'soustitres' => 'Français, Espagnol',
    'Personnes' => 'Tout public',
    'description' => "Pour leur première épreuve, les mixologues passent derrière le bar et doivent réinventer le cocktail le plus demandé au monde: la margarita.",
    'image' => 'drink.jpg',
    'video' =>'https://www.youtube.com/embed/5H4uHjHC7cc'
 ],

/* 9 */ 
 [
    'titre' => 'Dahmer',
    'genre' => 'top',
    'année' => '2022',
    'realisateur' => 'David jacobson',
    'duree' => '2H10',
    'type' => 'Science-fiction, Aventure',
    'brand' => 'Warner Bros. Pictures',
    'cote' => 'PG-13',
    'rating' => '8.4',
    'langues' => 'Anglais',
    'soustitres' => 'Français, Espagnol',
    'Personnes' => 'Tout public',
    'description' => "Dahmer raconte l'histoire vraie de Jeffrey Dammer, un serial killer américain qui aurait assassiné près de 15 personnes, en les droguant puis en les étranglant.",
    'image' => 'dahmer.jpg',
    'video' =>'https://www.youtube.com/embed/NVHHs-xllqo'
 ],
/* 10 */           

 [
    'titre' => 'Planete en furie',
    'genre' => 'top',
    'année' => '2020',
    'realisateur' => 'Brian de palma',
    'duree' => '2H10',
    'type' => 'Science-fiction, Aventure',
    'brand' => 'Warner Bros. Pictures',
    'cote' => 'PG-13',
    'rating' => '8.4',
    'langues' => 'Anglais',
    'soustitres' => 'Français, Espagnol',
    'Personnes' => 'Tout public',
    'description' => "Des chasseurs de tempêtes, des survivants et des secouristes temoignent de leurs expériences terrifiantes face à des volcans, tornades, ouragans et séismes.",
    'image' => 'furie.jpg',
    'video' =>'https://www.youtube.com/embed/PJTkKIxNJAg'
 ],

/* Drames Drames Drames Dranes Drames Drames Drames Drames Drames Drames Drames */
/* 1 */          
 [
    'titre' => 'Nos coeurs meurtris',
    'genre' => 'drame',
    'année' => '2022',
    'realisateur' => 'Elizabeth allen',
    'duree' => '2H10',
    'type' => 'Guerre, Drame',
    'brand' => 'Universal Pictures',
    'cote' => 'R',
    'rating' => '8.3',
    'langues' => 'Anglais',
    'soustitres' => 'Français, Espagnol',
    'Personnes' => 'Adolescents et adultes',
    'description' => "Cassie est une jeune musicienne fauchée. Elle n'arrive pas à payer son loyer et son traitement contre le diabète. Luke est un soldat du corps des Marines...",
    'image' => 'coeur.jpg',
    'video' =>'https://www.youtube.com/embed/Z6YuN7HKD78'
 ],
/* 2 */         

 [
    'titre' => 'The little things',
    'genre' => 'drame',
    'année' => '2021',
    'realisateur' => 'Mark johnson',
    'duree' => '2H10',
    'type' => 'Guerre, Drame',
    'brand' => 'Universal Pictures',
    'cote' => 'R',
    'rating' => '8.3',
    'langues' => 'Anglais',
    'soustitres' => 'Français, Espagnol',
    'Personnes' => 'Adolescents et adultes',
    'description' => "Au milieu des années 1990, dans la région de Los Angeles, les dépouilles de jeunes femmes assassinées aux mains d'un sinistre tueur en série sont retrouvées.",
    'image' => 'little.jpg',
    'video' =>'https://www.youtube.com/embed/-xQp6G56N4Y'
 ],
/* 3 */        

 [
    'titre' => 'Impardonnable',
    'genre' => 'drame',
    'année' => '2021',
    'realisateur' => 'Nora fingscheidt',
    'duree' => '2H10',
    'type' => 'Guerre, Drame',
    'brand' => 'Universal Pictures',
    'cote' => 'R',
    'rating' => '8.3',
    'langues' => 'Anglais',
    'soustitres' => 'Français, Espagnol',
    'Personnes' => 'Adolescents et adultes',
    'description' => "Libérée de prison, une femme condamnée pour meurtre réintègre une société qui refuse de la pardonner et cherche la petite sœur qu'elle a été forcée d'abandonner.",
    'image' => 'impardonnable.jpg',
    'video' =>'https://www.youtube.com/embed/rqJAethv9kM'
 ],
/* 4 */        

 [
    'titre' => 'The Irishman',
    'genre' => 'drame',
    'année' => '2019',
    'realisateur' => 'Martin scorsese',
    'duree' => '2H10',
    'type' => 'Guerre, Drame',
    'brand' => 'Universal Pictures',
    'cote' => 'R',
    'rating' => '8.3',
    'langues' => 'Anglais',
    'soustitres' => 'Français, Espagnol',
    'Personnes' => 'Adolescents et adultes',
    'description' => "Depuis sa maison de retraite, Frank Sheeran se remémore sa vie. Vétéran de la Seconde Guerre mondiale, « The Irishman » officie à Philadelphie comme chauffeur de camion.",
    'image' => 'irishman.jpg',
    'video' =>'https://www.youtube.com/embed/WHXxVmeGQUc'
 ],
/* 5 */        

 [
    'titre' => 'Tireur d_élite americain',
    'genre' => 'drame',
    'année' => '2021',
    'realisateur' => 'Daouda Tchanya',
    'duree' => '2H10',
    'type' => 'Guerre, Drame',
    'brand' => 'Universal Pictures',
    'cote' => 'R',
    'rating' => '8.3',
    'langues' => 'Anglais',
    'soustitres' => 'Français, Espagnol',
    'Personnes' => 'Adolescents et adultes',
    'description' => "Chris Kyle est un champion de rodéo vivant au Texas. Durant son enfance, il est élevé avec son frère cadet dans la foi chrétienne. ",
    'image' => 'tireur.jpg',
    'video' =>'https://www.youtube.com/embed/biaNCv--D4s'
 ],
/*Films d'horreur   Films d'horreur    Films d'horreur    Films d'horreur    Films d'horreur  */     
/*1 */
 [
    'titre' => 'Day shift',
    'genre' => 'horreur',
    'année' => '2022',
    'realisateur' => 'J.J.Pery',
    'duree' => '2H10',
    'type' => 'Super-héros, Science-fiction',
    'brand' => 'Marvel Studios',
    'cote' => 'PG-13',
    'rating' => '6.9',
    'langues' => 'Anglais',
    'soustitres' => 'Français, Espagnol',
    'Personnes' => 'Adolescents et adultes',
    'description' => "À Los Angeles, un chasseur de vampires a une semaine afin de réunir l'argent nécessaire pour payer l'école et l'appareil dentaire de sa fille. Il va devoir se saigner...",
    'image' => 'dayShift.jpg',
    'video' =>'https://www.youtube.com/embed/GN_IwBptKi4'
 ],
/* 2 */        

 [
    'titre' => 'Halloween',
    'genre' => 'horreur',
    'année' => '2018',
    'realisateur' => 'Rob zombie',
    'duree' => '2H10',
    'type' => 'Super-héros, Science-fiction',
    'brand' => 'Marvel Studios',
    'cote' => 'PG-13',
    'rating' => '6.9',
    'langues' => 'Anglais',
    'soustitres' => 'Français, Espagnol',
    'Personnes' => 'Adolescents et adultes',
    'description' => "L'intrigue du film se porte sur les retrouvailles macabres entre le tueur psychopathe Michael Myers et Laurie Strode. Myers est l'auteur d'un massacre sanglant...",
    'image' => 'halloween.webp',
    'video' =>'https://www.youtube.com/embed/i_mAWKyfj6c'
 ],
/* 3 */       

 [
    'titre' => 'Hereditary',
    'genre' => 'horreur',
    'année' => '2021',
    'realisateur' => 'Ari aster',
    'duree' => '2H10',
    'type' => 'Super-héros, Science-fiction',
    'brand' => 'Marvel Studios',
    'cote' => 'PG-13',
    'rating' => '6.9',
    'langues' => 'Anglais',
    'soustitres' => 'Français, Espagnol',
    'Personnes' => 'Adolescents et adultes',
    'description' => "Quand Ellen, la matriarche de la famille Graham, décède, sa fille, Annie, retourne habiter dans la grande demeure familiale avec son mari Steve et ses deux enfants.",
    'image' => 'hereditary.jpg',
    'video' =>'https://www.youtube.com/embed/V6wWKNij_1M'
 ],

/* 4 */
 [
    'titre' => 'Fear street partie1 1994',
    'genre' => 'horreur',
    'année' => '2021',
    'realisateur' => 'Leigh janiak',
    'duree' => '2H10',
    'type' => 'Super-héros, Science-fiction',
    'brand' => 'Marvel Studios',
    'cote' => 'PG-13',
    'rating' => '6.9',
    'langues' => 'Anglais',
    'soustitres' => 'Français, Espagnol',
    'Personnes' => 'Adolescents et adultes',
    'description' => " La ville de Shadyside est secouée par une nouvelle nuit meurtrière au cours de laquelle Heather Watkins, une lycéenne employée au centre commercial de la ville est assassinée.",
    'image' => 'fear.jpg',
    'video' =>'https://www.youtube.com/embed/UyUuzCGblqc'
 ],
/* 5 */

 [
    'titre' => 'L_Homme invisible',
    'genre' => 'horreur',
    'année' => '2000',
    'realisateur' => 'James whales',
    'duree' => '2H10',
    'type' => 'Super-héros, Science-fiction',
    'brand' => 'Marvel Studios',
    'cote' => 'PG-13',
    'rating' => '6.9',
    'langues' => 'Anglais',
    'soustitres' => 'Français, Espagnol',
    'Personnes' => 'Adolescents et adultes',
    'description' => "Le Dr Jack Griffin est un scientifique qui a inventé une substance qui rend invisible. Mais l'ayant essayée sur lui-même, il se retrouve dans un état d'invisibilité...",
    'image' => 'invisible.jpg',
    'video' =>'https://www.youtube.com/embed/WO_FJdiY9dA'
 ],

/* Films et serie jeunesse   Films et serie jeunesse   Films et serie jeunesse   Films et serie jeunesse   Films et serie jeunesse*/
/* 1 */
 [
    'titre' => 'Outer banks',
    'genre' => 'jeunesse',
    'année' => '2020',
    'realisateur' => 'Jonas pate',
    'duree' => '2H10',
    'type' => 'Fantasy, Aventure',
    'brand' => 'New Line Cinema',
    'cote' => 'PG-13',
    'rating' => '8.9',
    'langues' => 'Anglais',
    'soustitres' => 'Français, Espagnol',
    'Personnes' => 'Tout public',
    'description' => "Dans les Outer Banks en Caroline du Nord, une bande d’adolescents appelée « Pogues » est déterminée à savoir pourquoi le père de John B a mystérieusement disparu...",
    'image' => 'outer.jpg',
    'video' =>'https://www.youtube.com/embed/uk_hFfUFXh4'
 ],

/* 2 */
 [
    'titre' => 'Sex education',
    'genre' => 'jeunesse',
    'année' => '2019',
    'realisateur' => 'Kate herron',
    'duree' => '2H10',
    'type' => 'Fantasy, Aventure',
    'brand' => 'New Line Cinema',
    'cote' => 'PG-13',
    'rating' => '8.9',
    'langues' => 'Anglais',
    'soustitres' => 'Français, Espagnol',
    'Personnes' => 'Tout public',
    'description' => "Le jeune Otis Milburn, dont la mère est sexologue, refuse les questions ou conseils de celle-ci à propos de sa propre sexualité, alors qu'il est vierge et qu'il ne parvient pas à se masturber.",
    'image' => 'sex-education.jpg',
    'video' =>'https://www.youtube.com/embed/zmgYlYw7Uwk'
 ],

/* 3 */
 [
    'titre' => 'Community',
    'genre' => 'jeunesse',
    'année' => '2009',
    'realisateur' => 'Joe russo',
    'duree' => '2H10',
    'type' => 'Fantasy, Aventure',
    'brand' => 'New Line Cinema',
    'cote' => 'PG-13',
    'rating' => '8.9',
    'langues' => 'Anglais',
    'soustitres' => 'Français, Espagnol',
    'Personnes' => 'Tout public',
    'description' => "Quand on découvre que son diplôme en droit est un faux, Jeff Winger reprend ses études et forme un groupe de parias.",
    'image' => 'Community.jpg',
    'video' =>'https://www.youtube.com/embed/b-M5Gcc1hQ8'
 ],
/* 4 */         

 [
    'titre' => 'Reasons why',
    'genre' => 'jeunesse',
    'année' => '2017',
    'realisateur' => 'Brin yorker',
    'duree' => '2H10',
    'type' => 'Fantasy, Aventure',
    'brand' => 'New Line Cinema',
    'cote' => 'PG-13',
    'rating' => '8.9',
    'langues' => 'Anglais',
    'soustitres' => 'Français, Espagnol',
    'Personnes' => 'Tout public',
    'description' => " un adolescent qui découvre sous son porche au retour du lycée une mystérieuse boîte portant son nom...",
    'image' => 'reasons.jpg',
    'video' =>''
 ],
/* 5 */         

 [
    'titre' => 'On my block',
    'genre' => 'jeunesse',
    'année' => '2018',
    'realisateur' => 'Lauren lungerich',
    'duree' => '2H10',
    'type' => 'Fantasy, Aventure',
    'brand' => 'New Line Cinema',
    'cote' => 'PG-13',
    'rating' => '8.9',
    'langues' => 'Anglais',
    'soustitres' => 'Français, Espagnol',
    'Personnes' => 'Tout public',
    'description' => "Dans un quartier difficile de Los Angeles, l'amitié de quatre ados futés et drôles est mise à l'épreuve quand ils rentrent au lycée.",
    'image' => 'block.jpg',
    'video' =>'https://www.youtube.com/embed/H65irEWSg9k'
 ],
/* Héros et héroines noir  Héros et héroines noir  Héros et héroines noir  Héros et héroines noir  Héros et héroines noir  Héros et héroines noir */
/* 1 */

 [
    'titre' => 'Blade2',
    'genre' => 'noir',
    'année' => '2021',
    'realisateur' => 'Guillermo del toro',
    'duree' => '2H10',
    'type' => 'Super-héros, Action',
    'brand' => 'Marvel Studios',
    'cote' => 'PG-13',
    'rating' => '8.0',
    'langues' => 'Anglais',
    'soustitres' => 'Français, Espagnol',
    'Personnes' => 'Adolescents et adultes',
    'description' => "Après avoir vaincu Deacon Frost, Blade aide une troupe de vampires à éliminer une race supérieure, les Reapers, qui s'en prennent tour à tour à leurs confrères suceurs de sang.",
    'image' => 'blade.jpg',
    'video' =>'https://www.youtube.com/embed/EYWdztJwRLg'
 ],
/* 2 */

 [
    'titre' => 'Tenet',
    'genre' => 'noir',
    'année' => '2020',
    'realisateur' => 'Christopher nolan',
    'duree' => '2H10',
    'type' => 'Super-héros, Action',
    'brand' => 'Marvel Studios',
    'cote' => 'PG-13',
    'rating' => '8.0',
    'langues' => 'Anglais',
    'soustitres' => 'Français, Espagnol',
    'Personnes' => 'Adolescents et adultes',
    'description' => "Un agent de la CIA s'infiltre au sein d'une opération clandestine russe : le vol d'un objet mystérieux, supposé être du plutonium, durant une prise d'otages dans un opéra à Kiev. ",
    'image' => 'tenet.jpg',
    'video' =>'https://www.youtube.com/embed/0OoLokmqo0A'
 ],

/* 3 */
 [
    'titre' => 'Top boy',
    'genre' => 'noir',
    'année' => '2011',
    'realisateur' => 'Ronan bennet',
    'duree' => '2H10',
    'type' => 'Super-héros, Action',
    'brand' => 'Marvel Studios',
    'cote' => 'PG-13',
    'rating' => '8.0',
    'langues' => 'Anglais',
    'soustitres' => 'Français, Espagnol',
    'Personnes' => 'Adolescents et adultes',
    'description' => "La série suit les difficultés de Ra'Nell, qui doit faire face aux pièges de la vie dans la cité de Summerhouse, où règne la criminalité...",
    'image' => 'boy.jpg',
    'video' =>'https://www.youtube.com/embed/QX0isXHNBl4'
 ],

/* 4 */
 [
    'titre' => 'Blood & water',
    'genre' => 'noir',
    'année' => '2020',
    'realisateur' => 'Daryna joshua',
    'duree' => '2H10',
    'type' => 'Super-héros, Action',
    'brand' => 'Marvel Studios',
    'cote' => 'PG-13',
    'rating' => '8.0',
    'langues' => 'Anglais',
    'soustitres' => 'Français, Espagnol',
    'Personnes' => 'Adolescents et adultes',
    'description' => "une jeune adolescente qui, lorsqu’elle croise le chemin d’une lycéenne fortunée prénommée Fikile Bhele, se persuade qu’il s’agit de sa sœur aînée, enlevée à la naissance...",
    'image' => 'blood.jpg',
    'video' =>'https://www.youtube.com/embed/YSexLXy9hlQ'
 ],
/* 5 */

 [
    'titre' => 'Greenleaf',
    'genre' => 'noir',
    'année' => '2016',
    'realisateur' => 'Clement virgo',
    'duree' => '2H10',
    'type' => 'Super-héros, Action',
    'brand' => 'Marvel Studios',
    'cote' => 'PG-13',
    'rating' => '8.0',
    'langues' => 'Anglais',
    'soustitres' => 'Français, Espagnol',
    'Personnes' => 'Adolescents et adultes',
    'description' => " la famille Greenleaf dont le père James est le pasteur d'une megachurch de Memphis, Calvary Fellowship4. Grace revient habiter avec la famille, après une absence de plusieurs années...",
    'image' => 'greenleaf.jpg',
    'video' =>'https://www.youtube.com/embed/2W0LQib-WO0'
 ],



]);
}
}
