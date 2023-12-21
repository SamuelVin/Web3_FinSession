<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PersonnesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB:: table('personnes')-> insert([

            [
                'nom' => 'Kelly',
                'prenom' => 'Ryan',
                'genre' => 'divers',
                'Metier'=> 'acteur',
                'image' => 'https://deadline.com/wp-content/uploads/2017/03/lucifer-212_scn33pt1_mc0149_hires2.jpg?w=681&h=383&crop=1',
                'dateNaissance' => '21 juillet 1972'
             ],
             
             [
                'nom' => 'Murnix',
                'prenom' => 'Peter',
                'genre' => 'divers',
                'Metier'=> 'acteur',
                'image' => 'https://th.bing.com/th/id/R.06ef75c0d8943a1fb741ae46af35d5c7?rik=l8A91bLPc6KQ%2bw&riu=http%3a%2f%2fimages2.fanpop.com%2fimage%2fphotos%2f10000000%2fJames-Variety-Studio-At-Sundance-Day-1-james-franco-10084000-358-500.jpg&ehk=qZJXeKdW6lGtxrp4ZqBjGyFnP7Pt%2fw2SkDMsfHihAvk%3d&risl=&pid=ImgRaw&r=0',
                'dateNaissance' => ' 11 juillet 1973'
            ],
       
            [
                'nom' => 'Vescio',
                'prenom' => 'Dave',
                'genre' => 'divers',
                'Metier'=> 'acteur',
                'image' => 'https://th.bing.com/th/id/R.e4d07dc81a9675e91ff27c5376530ccd?rik=nx66w%2biifraYwQ&riu=http%3a%2f%2fimg3.wikia.nocookie.net%2f__cb20140729061957%2funderthedome%2fimages%2f4%2f43%2fJunior_205.png&ehk=4VCvUCZmilT1cAPHDUPm88a7anAwTWCcLUwawOAcYHc%3d&risl=&pid=ImgRaw&r=0',
                'dateNaissance' => '10 marsc1970'
             ],
             
             [
                 'nom' => 'Moris',
                 'prenom' => '  Jessyca',
                 'genre' => 'divers',
                 'Metier'=> 'acteur',
                 'image' => 'https://i.pinimg.com/736x/40/51/2c/40512c141e5f1968a466588e903a3cfd.jpg',
                 'dateNaissance' => '09 fevrier 1974 '
             ],
       
             [
                'nom' => 'Wanloss',
                'prenom' => 'Lynn',
                'genre' => 'divers',
                'Metier'=> 'acteur',
                'image' => 'https://m.media-amazon.com/images/M/MV5BMTM1MjQ1OTA1NF5BMl5BanBnXkFtZTcwNzUwNzkwMw@@._V1_FMjpg_UX636_.jpg',
                'dateNaissance' => '11 mars 1975'
             ],
            
             
            
             [
                 'nom' => 'Rogers',
                 'prenom' => 'Ingrid',
                 'genre' => 'divers',
                 'Metier'=> 'acteur',
                 'image' => 'https://th.bing.com/th/id/R.45974cec4d2aabc3a86fb10e8b1298cd?rik=8Iw6Rc8St1IIAw&riu=http%3a%2f%2ftheingridrogers.com%2fwp-content%2fuploads%2f2017%2f06%2fIMG_2393.jpg&ehk=UQfJGj6aCVoaHD%2b0wpUKcGZSLRclNQLhUZvx704Wcq4%3d&risl=&pid=ImgRaw&r=0',
                 'dateNaissance' => '20 mars 1980 '
             ],
       
             [
                'nom' => 'Pine',
                'prenom' => 'Lary',
                'genre' => 'divers',
                'Metier'=> 'acteur',
                'image' => 'https://live.staticflickr.com/3360/4616081603_b1181d36ab_b.jpg',
                'dateNaissance' => '25 janvier 1970'
             ],
             
             [
                 'nom' => 'Klein',
                 'prenom' => 'Robert',
                 'genre' => 'divers',
                 'Metier'=> 'acteur',
                 'image' => 'https://th.bing.com/th/id/R.66c9139ca10c565b46538eb764de187b?rik=EOmo7OBg9GiU4Q&riu=http%3a%2f%2fwww1.pictures.gi.zimbio.com%2fRobert%2bKlein%2bPremiere%2bOf%2bSicko%2b6VBpR-mKAB_l.jpg&ehk=boMcncFOUNiL%2bPTYuZrMN6Yfi6yYp3oZScvm9eXmVkQ%3d&risl=&pid=ImgRaw&r=0',
                 'dateNaissance' => '20 janvier 1972'
             ],
       
             [
                'nom' => 'Carter',
                'prenom' => 'Joelle',
                'genre' => 'divers',
                'Metier'=> 'acteur',
                'image' => 'https://celebmafia.com/wp-content/uploads/2017/03/joelle-carter-nbcuniversal-summer-press-day-in-beverly-hills-3-20-2017-1.jpg',
                'dateNaissance' => '27 avril 1983'
             ],
             
             [
                 'nom' => 'Hendra',
                 'prenom' => 'Tony',
                 'genre' => 'divers',
                 'Metier'=> 'acteur',
                 'image' => 'https://thecomicscomic.com/wp-content/uploads/2016/09/TonyHendra.png',
                 'dateNaissance' => '18 mai 1984 '
             ],
    
             
            
             [
                'nom' => 'Corbero',
                'prenom' => 'Ursula',
                'genre' => 'divers',
                'Metier'=> 'acteur',
                'image' => 'https://img.ecartelera.com/noticias/55700/55721-m.jpg?v=2.0',
                'dateNaissance' => '01 avril 1970'
             ],
             
             [
                 'nom' => 'Alonso',
                 'prenom' => 'Pedro',
                 'genre' => 'divers',
                 'Metier'=> 'acteur',
                 'image' => 'https://i.pinimg.com/originals/77/2e/29/772e29822a9b8307772423e8082043d3.jpg',
                 'dateNaissance' => '30 a vril 1969'
             ],
       
             [
                'nom' => 'Morte',
                'prenom' => 'Alvaro',
                'genre' => 'divers',
                'Metier'=> 'acteur',
                'image' => 'https://miro.medium.com/max/3000/1*7OjGpnvGSE1CL28w4oNlrA.jpeg',
                'dateNaissance' => '10 Decembre 1974'
             ],
             
             [
                 'nom' => 'Cuesta',
                 'prenom' => 'Belan',
                 'genre' => 'divers',
                 'Metier'=> 'acteur',
                 'image' => 'https://phantom-elmundo.unidadeditorial.es/0edcb4ec7295c7d49e3bc41ebcff4480/resize/746/f/jpg/assets/multimedia/imagenes/2020/04/06/15861639056629.jpg',
                 'dateNaissance' => '30 avril 1980'
             ],
       
             [
                'nom' => 'Ituno',
                'prenom' => 'Itziar',
                'genre' => 'divers',
                'Metier'=> 'acteur',
                'image' => 'https://mx.hola.com/imagenes/actualidad/20200320163611/itziar-ituno-casa-papel-coronavirus-gt/0-800-927/portadaitziar-m.jpg',
                'dateNaissance' => '31 decembre 1978'
             ],
             
           
 
             [
                 'nom' => 'Gosling',
                 'prenom' => 'Ryan',
                 'genre' => 'divers',
                 'Metier'=> 'acteur',
                 'image' => 'https://th.bing.com/th/id/OIP.jh19UsSmTTJLG5UFvTJlWwHaGS?pid=ImgDet&rs=1',
                 'dateNaissance' => '20 mai 1970'
             ],
       
             [
                'nom' => 'Henwick',
                'prenom' => 'Jessyca',
                'genre' => 'divers',
                'Metier'=> 'acteur',
                'image' => 'https://img.starbiz.com/resize/750x-/2020/12/21/jessica-henwick-the-gray-man-cast-2021-19b7.jpg',
                'dateNaissance' => '25 mai 1986'
             ],
             
             [
                'nom' => 'Evans',
                'prenom' => 'Christ',
                'genre' => 'divers',
                'Metier'=> 'acteur',
                'image' => 'https://66.media.tumblr.com/2f882f0d9fcc8274c43342ea608f3ef4/b5302c37eb792a64-67/s500x750/dd75c2ba521330a227bcba5887464f87a35fb600.jpg',
                'dateNaissance' => '25 mai 1986'
             ],
 
             [
                'nom' => 'Woodard',
                'prenom' => 'Alfre',
                'genre' => 'divers',
                'Metier'=> 'acteur',
                'image' => 'https://cont4.naekranie.pl/wp-content/uploads/2019/12/clemency-alfre-woodard_5df8cc2daf3e2.jpeg',
                'dateNaissance' => '25 mai 1986'
             ],
 
             [
                'nom' => 'Arnas',
                'prenom' => 'de Ana',
                'genre' => 'divers',
                'Metier'=> 'acteur',
                'image' => 'https://cinevisao.pt/wp-content/uploads/2020/12/Ana-de-Armas-no-filme-The-Gray-Man.jpg',
                'dateNaissance' => '25 mai 1986'
             ],
 
            
             [
                'nom' => 'Washington',
                'prenom' => 'Denzel',
                'genre' => 'divers',
                'Metier'=> 'acteur',
                'image' => 'https://images.rtl.fr/~r/880v587/rtl/www/1137154-denzel-washington-dans-flight.jpg',
                'dateNaissance' => '25 mai 1986'
             ],
 
             [
                'nom' => 'Cheadle',
                'prenom' => 'Don',
                'genre' => 'divers',
                'Metier'=> 'acteur',
                'image' => 'https://th.bing.com/th/id/R.64c33a2026eb1b091f22d9f910742a80?rik=d0jN9%2f1iLihiEA&riu=http%3a%2f%2fwww.blackfilm.com%2fread%2fwp-content%2fuploads%2f2012%2f08%2fFlight-3.jpg&ehk=p5Es2DsXjVf8BQj5ceadOKbmgDsZ4uNNgM4fQH%2bKw8Y%3d&risl=&pid=ImgRaw&r=0',
                'dateNaissance' => '25 mai 1986'
             ],
 
             [
                'nom' => 'Geraghty',
                'prenom' => 'Brian',
                'dateNaissance' => '25 mai 1986',
                'genre' => 'divers',
                'Metier'=> 'acteur',
                'image' => 'https://th.bing.com/th/id/R.a2ab9f2fa87ac76a539c9fd28eb9d000?rik=aZNEmj7zISGP6A&riu=http%3a%2f%2fhd.hdklaps.ru%2fuploads%2fposts%2f2020-05%2f1588666033-607203271-6.jpg&ehk=cBmj0wId19xg14Q8SYJLf0MaWOzcCxqcADhxr8Es5nE%3d&risl=&pid=ImgRaw&r=0',
             ],
 
             [
                'nom' => 'Goodman',
                'prenom' => 'John',
                'dateNaissance' => '25 mai 1986',
                'genre' => 'divers',
                'Metier'=> 'acteur',
                'image' => 'https://th.bing.com/th/id/R.f2e9edc687b6b1998af0f3684fd4f140?rik=%2bPRdMF1%2b6kIibQ&riu=http%3a%2f%2fbostonartsdiary.com%2fwordpress%2fwp-content%2fuploads%2f2012%2f12%2fFlight_JohnGoodman_18.jpg&ehk=5hQhvGv0S8sgqQRKwsmhMWtkJCSX1PzqzqfpMWsPma8%3d&risl=&pid=ImgRaw&r=0&sres=1&sresct=1',
             ],
 
             [
                'nom' => 'Reily',
                'prenom' => 'Kelly',
                'genre' => 'divers',
                'Metier'=> 'acteur',
                'image' => 'https://ilarge.lisimg.com/image/11458612/740full-kelly-reilly.jpg',
                'dateNaissance' => '25 mai 1986'
             ],
          
           
             [
                'nom' => 'Lachey',
                'prenom' => 'Nick',
                'genre' => 'top',
                'Metier'=> 'acteur',
                'image' => 'https://th.bing.com/th/id/OIP.ofc3IvIBCvlBUs1DUjwUiQHaHa?pid=ImgDet&rs=1',
                'dateNaissance' => '25 mai 1986'
             ],
 
             [
                'nom' => 'Zapata',
                'prenom' => 'Malllorm',
                'genre' => 'top',
                'Metier'=> 'acteur',
                'image' => 'https://images2.minutemediacdn.com/image/fetch/w_850,h_560,c_fill,g_auto,f_auto/https://netflixlife.com/files/image-exchange/2022/02/ie_83316-850x560.jpeg',
                'dateNaissance' => '25 mai 1986'
             ],
 
             [
                'nom' => 'Lachey',
                'prenom' => 'Vanessa',
                'genre' => 'top',
                'Metier'=> 'acteur',
                'image' => 'https://th.bing.com/th/id/OIP.wPERmQObWZfYXwqT8NhxkwHaFj?pid=ImgDet&rs=1',
                'dateNaissance' => '25 mai 1986'
             ],
       
             [
                'nom' => 'Thompson',
                'prenom' => 'Nick',
                'genre' => 'top',
                'Metier'=> 'acteur',
                'image' => 'https://th.bing.com/th/id/OIP.nhBCvPrEmmge-9QH0ZWLwgHaEK?pid=ImgDet&rs=1',
                'dateNaissance' => '25 mai 1986'
             ],
 
             [
                'nom' => 'Ruhl',
                'prenom' => 'Danielle',
                'genre' => 'top',
                'Metier'=> 'producteur',
                'image' => 'https://assetblast.b-cdn.net/wp-content/uploads/2022/03/222431911_131540629131117_6068187972769295212_n-819x1024.jpg',
                'dateNaissance' => '25 mai 1986'
             ],
 
 
 
             [
                'nom' => 'Grint',
                'prenom' => 'Rupert',
                'genre' => 'top',
                'Metier'=> 'producteur',
                'image' => 'https://th.bing.com/th/id/OIP.PRSITIVwQc2-ErOglA-8bwHaE8?pid=ImgDet&rs=1',
                'dateNaissance' => '26 mai 1986'
             ],
 
             [
                'nom' => 'Glover',
                'prenom' => 'Crispin',
                'genre' => 'top',
                'Metier'=> 'producteur',
                'image' => 'https://th.bing.com/th/id/R.8c960fdc1b47716f499e7a5cbba84789?rik=E7Dy%2b61M%2fz0bhg&riu=http%3a%2f%2ffr.web.img5.acsta.net%2fmedias%2fnmedia%2f18%2f35%2f06%2f83%2fp1.jpg&ehk=0AFSYuWDRynZYFHFecJ7mWMiT5KCu1XnZQk4f2BoOrA%3d&risl=&pid=ImgRaw&r=0',
                'dateNaissance' => '27 mai 1986'
             ],
 
             [
                'nom' => 'Keppy',
                'prenom' => 'Kevin',
                'genre' => 'top',
                'Metier'=> 'producteur',
                'image' => 'https://secureservercdn.net/50.62.194.59/bhs.d5e.myftpupload.com/wp-content/uploads/2019/01/02-768x768.jpg',
                'dateNaissance' => '28 mai 1986'
             ],
 
             [
                'nom' => 'Morris',
                'prenom' => 'Ishan',
                'genre' => 'top',
                'Metier'=> 'producteur',
                'image' => 'https://64.media.tumblr.com/tumblr_lcnmh6hmSh1qc7z81o1_640.jpg',
                'dateNaissance' => '29 mai 1989'
             ],
 
            
             [
                'nom' => 'Spader',
                'prenom' => 'James',
                'genre' => 'top',
                'Metier'=> 'producteur',
                'image' => 'https://th.bing.com/th/id/OIP.t7IfT_jvrZt0HoLUlSgElgHaEK?pid=ImgDet&rs=1',
                'dateNaissance' => '1 mai 1976'
             ],
 
             [
                'nom' => 'Tomei',
                'prenom' => 'Marisa',
                'genre' => 'top',
                'Metier'=> 'producteur',
                'image' => 'https://th.bing.com/th/id/R.0d806af77ec1ecad658c458c09c7de1b?rik=CZs5Wt03W71udg&riu=http%3a%2f%2fmr.comingsoon.it%2fimgdb%2fPersone%2f102186.jpg&ehk=3MG9bdpAy%2bJnre1hL6pYO4M4tsFby8T%2fra7wqBGH%2bkU%3d&risl=&pid=ImgRaw&r=0',
                'dateNaissance' => '2 mai 1986'
             ],
 
             [
                'nom' => 'Reeves',
                'prenom' => 'Keanu',
                'genre' => 'top',
                'Metier'=> 'producteur',
                'image' => 'https://th.bing.com/th/id/R.7f4828f062f2c128af77889be1e41736?rik=HUmmKIwtrGUWcw&riu=http%3a%2f%2fimages4.fanpop.com%2fimage%2fphotos%2f15500000%2fThe-Watcher-keanu-reeves-15524361-720-480.jpg&ehk=OKEpoCyd%2fhnKS9dZ3c%2fu7bYIM7Ni8s%2bO%2b8D%2bViox8QY%3d&risl=&pid=ImgRaw&r=0',
                'dateNaissance' => '3 mai 1986'
             ],
 
             [
                'nom' => 'Ellis',
                'prenom' => 'Chris',
                'genre' => 'top',
                'Metier'=> 'producteur',
                'image' => 'https://notednames.com/ImgBig/mkko_Bigimg.jpg',
                'dateNaissance' => '4 mai 1986'
             ],
 
             [
                'nom' => 'Hudson',
                'prenom' => 'Ernie',
                'genre' => 'top',
                'Metier'=> 'producteur',
                'image' => 'https://th.bing.com/th/id/OIP.IkbSm_m0sM421SjwEvkSHAHaEK?pid=ImgDet&rs=1',
                'dateNaissance' => '5 mai 1986'
             ],
 
             
             [
                'nom' => 'Figus',
                'prenom' => 'Francesca',
                'genre' => 'top',
                'Metier'=> 'producteur',
                'image' => 'https://www.filmtv.it/imgbank/PORTRAIT/R202002/Passeggeri_Notturni_Francesca_Figus_3_-1.jpg',
                'dateNaissance' => '6 mai 1986'
             ],
 
             [
                'nom' => 'De Salve',
                'prenom' => 'Angelica',
                'genre' => 'top',
                'Metier'=> 'producteur',
                'image' => 'https://img.static-rmg.be/a/view/q100/w/h450/2147770/ange-png.png',
                'dateNaissance' => '7 mai 1986'
             ],
 
             [
                'nom' => 'Cavallotti',
                'prenom' => 'Elisabetta',
                'genre' => 'top',
                'Metier'=> 'producteur',
                'image' => 'https://www.geneticmatrix.com/resources/photos/Elisabetta%20Cavallotti23943.jpg',
                'dateNaissance' => '8 mai 1986'
             ],
 
             [
                'nom' => 'Prosperi',
                'prenom' => 'Marco',
                'genre' => 'top',
                'Metier'=> 'producteur',
                'image' => 'https://www.macchinedilinews.it/files/2013/01/Marco-Prosperi-web-300x222.jpg',
                'dateNaissance' => '9 mai 1986'
             ],
 
             [
                'nom' => 'Zanella',
                'prenom' => 'Claudia',
                'genre' => 'top',
                'Metier'=> 'producteur',
                'image' => 'https://fr.web.img3.acsta.net/medias/nmedia/18/74/03/83/19227279.jpg',
                'dateNaissance' => '10 mai 1986'
             ],
 
    
             [
                'nom' => 'Kroll',
                'prenom' => 'Nick',
                'genre' => 'top',
                'Metier'=> 'producteur',
                'image' => 'https://th.bing.com/th/id/R.ad73e30a6c544d3d3d8d07f10c7d494f?rik=CaCAm45CObJ1vw&riu=http%3a%2f%2fi.huffpost.com%2fgen%2f2857704%2fimages%2fn-NICK-KROLL-large300.jpg&ehk=odsnP1gXUBAYp6EwTDQGeVpcrurkzjotMhdn8YRoxCo%3d&risl=&pid=ImgRaw&r=0',
                'dateNaissance' => '11 mai 1986'
             ],
 
             [
                'nom' => 'Slate',
                'prenom' => 'Jenny',
                'genre' => 'top',
                'Metier'=> 'producteur',
                'image' => 'https://th.bing.com/th/id/OIP.rAtJC3O4XQAFUZ_H2KEivAHaE7?pid=ImgDet&rs=1',
                'dateNaissance' => '12 mai 1986'
             ],
 
             [
                'nom' => 'Klein',
                'prenom' => 'Jessi',
                'genre' => 'top',
                'Metier'=> 'producteur',
                'image' => 'https://img.sharetv.com/people/standard/jessi_klein.jpg',
                'dateNaissance' => '13 mai 1986'
             ],
 
             [
                'nom' => 'Armisen',
                'prenom' => 'Fred',
                'genre' => 'top',
                'Metier'=> 'producteur',
                'image' => 'https://th.bing.com/th/id/R.bbfcf5886c1808f6dbf37c115456da9e?rik=6WJ9bu%2bQ4cJREQ&riu=http%3a%2f%2fi.huffpost.com%2fgen%2f621770%2fthumbs%2fs-FRED-ARMISEN-large.jpg&ehk=1nWZq6phIQmvn2bIbuviY8QxP%2bsHQzAYsGLjpmkX3Yg%3d&risl=&pid=ImgRaw&r=0',
                'dateNaissance' => '14 mai 1986'
             ],
 
             [
                'nom' => 'Mulaney',
                'prenom' => 'John',
                'genre' => 'top',
                'Metier'=> 'producteur',
                'image' => 'https://torontolife.com/wp-content/uploads/2017/09/John-Mulaney-480x0-c-default.jpg',
                'dateNaissance' => '15 mai 1986'
             ],
 
  
             [
                'nom' => 'Worsham',
                'prenom' => 'Will',
                'genre' => 'top',
                'Metier'=> 'producteur',
                'image' => 'https://static.tvtropes.org/pmwiki/pub/images/will5.jpg',
                'dateNaissance' => '16 mai 1986'
             ],
 
             [
                'nom' => 'March',
                'prenom' => 'Jane',
                'genre' => 'top',
                'Metier'=> 'producteur',
                'image' => 'https://www.thefamouspeople.com/profiles/thumbs/jane-march-2.jpg',
                'dateNaissance' => '17 mai 1986'
             ],
 
             [
                'nom' => 'Young',
                'prenom' => 'Danny',
                'genre' => 'top',
                'Metier'=> 'producteur',
                'image' => 'https://images.gawker.com/17hanvpo69b4ajpg/original.jpg',
                'dateNaissance' => '18 mai 1986'
             ],
 
             [
                'nom' => 'Matter',
                'prenom' => 'Jennifer',
                'genre' => 'top',
                'Metier'=> 'producteur',
                'image' => 'https://m.media-amazon.com/images/M/MV5BYWJiZTZlMzktMGY1Zi00YTE5LWJlZmEtMWUzNDczMjRkM2FlXkEyXkFqcGdeQXVyMjEwMTMwOTM@._V1_UY317_CR11,0,214,317_AL_.jpg',
                'dateNaissance' => '19 mai 1986'
             ],
 
             [
                'nom' => 'Terry',
                'prenom' => 'Triana',
                'genre' => 'top',
                'Metier'=> 'producteur',
                'image' => 'https://m.media-amazon.com/images/M/MV5BNTE3ZDFmMTYtZDRjNi00MWZjLWIxYWItYmE5YjIyNWU0MDRlXkEyXkFqcGdeQXVyMjAwMDI3NDc@._V1_UY317_CR6,0,214,317_AL_.jpg',
                'dateNaissance' => '20 mai 1986'
             ],
 
 
             [
                'nom' => 'Khourry',
                'prenom' => 'Zeina',
                'genre' => 'top',
                'Metier'=> 'producteur',
                'image' => 'https://th.bing.com/th/id/R.f44807b832a069bd5ab41c82a5f1bb72?rik=g1ny54A2oZcjIQ&riu=http%3a%2f%2fhighmarkuae.com%2fnewsite%2fwp-content%2fuploads%2f2021%2f05%2fzeina-website-pic-1-266x300.jpg&ehk=0wa9HcFBeOJWY49H1lZhNrVbJZHhjfT3R%2fWaVNmAiCA%3d&risl=&pid=ImgRaw&r=0',
                'dateNaissance' => '21 mai 1986'
             ],
 
             [
                'nom' => 'Body',
                'prenom' => 'Farhana',
                'genre' => 'top',
                'Metier'=> 'producteur',
                'image' => 'https://1.bp.blogspot.com/-zR7L7mW5e9w/YCm1erd0SwI/AAAAAAABJTk/1-C57Kk5YSM8dW2QczbniJ1ct05qvI3-wCLcBGAsYHQ/s320/farhanabodi_20210213_4.png',
                'dateNaissance' => '22 mai 1986'
             ],
 
             [
                'nom' => 'Siddiqui',
                'prenom' => 'Sofa',
                'genre' => 'top',
                'Metier'=> 'producteur',
                'image' => 'https://www.growthforgood.com/wp-content/uploads/2018/10/liliana_marques.jpg',
                'dateNaissance' => '23 mai 1986'
             ],
 
             [
                'nom' => 'Fade',
                'prenom' => 'Kris',
                'genre' => 'top',
                'Metier'=> 'producteur',
                'image' => 'https://mm.aiircdn.com/480/5b5e1ebe0a21e.jpg',
                'dateNaissance' => '1 Avril 1990'
             ],
 
             [
                'nom' => 'Adada',
                'prenom' => 'Laujain',
                'genre' => 'top',
                'Metier'=> 'producteur',
                'image' => 'https://imagebox.cz.osobnosti.cz/foto/laura-167/laura-167.jpg',
                'dateNaissance' => '2 avril 1990'
             ],
 
 
             [
                'nom' => 'Gervin',
                'prenom' => 'Kate',
                'genre' => 'top',
                'Metier'=> 'producteur',
                'image' => 'https://th.bing.com/th/id/OIP.dwH0nUb98tHuphMOF3yfKwHaHa?pid=ImgDet&rs=1',
                'dateNaissance' => '3 avril 1990'
             ],
 
             [
                'nom' => 'Shukla',
                'prenom' => 'Ray',
                'genre' => 'top',
                'Metier'=> 'producteur',
                'image' => 'https://healthyceleb.com/wp-content/uploads/2019/12/Saurabh-Shukla-as-seen-in-March-2011-281x420.jpg',
                'dateNaissance' => '3 avril 1996'
             ],
 
             [
                'nom' => 'Paylor',
                'prenom' => 'Lauren',
                'genre' => 'top',
                'Metier'=> 'producteur',
                'image' => 'https://safebars.org/wp-content/uploads/2019/01/paylor2-e1616011311191-300x300.jpg',
                'dateNaissance' => '4 avril 1986'
             ],
 
             [
                'nom' => 'Zrafi',
                'prenom' => 'Tao',
                'genre' => 'top',
                'Metier'=> 'producteur',
                'image' => 'https://th.bing.com/th/id/OIP.yJZerfNhJumXQlvL8ZW8vwAAAA?pid=ImgDet&w=250&h=300&rs=1',
                'dateNaissance' => '5 avril 1986'
             ],
 
             [
                'nom' => 'Kapri',
                'prenom' => 'Robinson',
                'genre' => 'top',
                'Metier'=> 'producteur',
                'image' => 'https://th.bing.com/th/id/OIP.ILxVvLTlVblB1iAIutSErAHaLK?pid=ImgDet&rs=1',
                'dateNaissance' => '6 avril 1986'
             ],
 
  
             [
                'nom' => 'Renner',
                'prenom' => 'Jeremy',
                'genre' => 'top',
                'Metier'=> 'producteur',
                'image' => 'https://th.bing.com/th/id/OIP.leNdLLTmerdOtnEz_4cksgAAAA?pid=ImgDet&rs=1',
                'dateNaissance' => '7 avril 1986'
             ],
 
             [
                'nom' => 'Newton',
                'prenom' => 'Matt',
                'genre' => 'top',
                'Metier'=> 'realisateur',
                'image' => 'https://th.bing.com/th/id/OIP.ILxVvLTlVblB1iAIutSErAHaLK?pid=ImgDet&rs=1',
                'dateNaissance' => '8 avril 1986'
             ],
 
             [
                'nom' => 'Davidson',
                'prenom' => 'Bruce',
                'genre' => 'top',
                'Metier'=> 'realisateur',
                'image' => 'https://vignette4.wikia.nocookie.net/avatar/images/4/42/Bruce_Davison.png/revision/latest?cb=20140628112833',
                'dateNaissance' => '9 avril 1986'
             ],
 
             [
                'nom' => 'Basco',
                'prenom' => 'Dion',
                'genre' => 'top',
                'Metier'=> 'realisateur',
                'image' => 'https://deadorkicking.com/wp-content/uploads/featured-img/d/dion-basco.jpg',
                'dateNaissance' => '10 avril 1986'
             ],
 
 
   
             [
                'nom' => 'Kirk',
                'prenom' => 'Douglas',
                'genre' => 'top',
                'Metier'=> 'realisateur',
                'image' => 'https://cdn.smartfacts.ru/326248/kirk-douglas-1_0.jpg',
                'dateNaissance' => '11 avril 1986'
             ],
 
             [
                'nom' => 'Lewis',
                'prenom' => 'Fiona',
                'genre' => 'top',
                'Metier'=> 'realisateur',
                'image' => 'https://w.notrecinema.com/images/usercontent/new2018/images/stars/15000/vign/v_158788.jpg',
                'dateNaissance' => '12 avril 1986'
             ],
 
             [
                'nom' => 'Durming',
                'prenom' => 'Charles',
                'genre' => 'top',
                'Metier'=> 'realisateur',
                'image' => 'https://2.bp.blogspot.com/-X8ZMDovNHYY/UR6syQc8n2I/AAAAAAAAJEM/nSyQIxFIFHQ/s1600/charles-durning-actor.JPG',
                'dateNaissance' => '13 avril 1986'
             ],
 
             [
                'nom' => 'Steven',
                'prenom' => 'Andrew',
                'genre' => 'top',
                'Metier'=> 'realisateur',
                'image' => 'https://i.pinimg.com/736x/0c/e4/4a/0ce44a1e339b0d03862bd86c9f17bd91--celebrity-actors.jpg',
                'dateNaissance' => '14 avril 1990'
             ],
 
             [
                'nom' => 'Irving',
                'prenom' => 'Amy',
                'genre' => 'top',
                'Metier'=> 'realisateur',
                'image' => 'https://cloudimages.broadwayworld.com/photoops/20th/72460016.jpg',
                'dateNaissance' => '15 avril 1996'
             ],
 
            
       
            [
                'nom' => 'Carson',
                'prenom' => 'Sofia',
                'genre' => 'drame',
                'Metier'=> 'realisateur',
                'image' => 'https://static.cinemagia.ro/img/resize/db/actor/55/69/73/sofia-carson-853090l-poza.jpg',
                'dateNaissance' => '16 Avril 1995'
             ],
             
             [
                 'nom' => 'Ashby',
                 'prenom' => 'Linden',
                 'genre' => 'drame',
                 'Metier'=> 'realisateur',
                 'image' => 'https://th.bing.com/th/id/OIP.W7dnTYMg2gSx7G_83t9eZQAAAA?pid=ImgDet&rs=1',
                 'dateNaissance' => ' 11 juillet 1973'
             ],
        
             [
                 'nom' => 'Harlan Kim',
                 'prenom' => 'John',
                 'genre' => 'drame',
                 'Metier'=> 'realisateur',
                 'image' => 'https://mx.web.img2.acsta.net/c_310_420/pictures/22/10/06/23/55/5371716.png',
                 'dateNaissance' => '10 marsc1970'
              ],
              
              [
                  'nom' => 'Cunning',
                  'prenom' => '  Kat',
                  'genre' => 'drame',
                  'Metier'=> 'realisateur',
                  'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/80/Kat_cunning_2019.jpg/220px-Kat_cunning_2019.jpg',
                  'dateNaissance' => '09 fevrier 1974 '
              ],
        
              [
                 'nom' => 'Chosen',
                 'prenom' => 'Jacobs',
                 'genre' => 'drame',
                 'Metier'=> 'realisateur',
                 'image' => 'https://th.bing.com/th/id/R.2fe3134a3df7649fffded8b0eeee912c?rik=miv1cgSH70ikKw&riu=http%3a%2f%2fwww.abandomoviez.net%2fdb%2fpersona%2fChosen_Jacobs.jpg&ehk=4zYIH9%2fQdLtNK9jd1w4HMQTqpGWsGbKKdUr%2bwouGSdk%3d&risl=&pid=ImgRaw&r=0',
                 'dateNaissance' => '11 mars 1975'
              ],
               
              
              [
                  'nom' => 'Malek',
                  'prenom' => 'Rami',
                  'genre' => 'drame',
                  'Metier'=> 'realisateur',
                  'image' => 'https://i.pinimg.com/736x/54/ac/99/54ac990d6c9bd925cfcfed0c120c3270.jpg',
                  'dateNaissance' => '20 mars 1980 '
              ],
        
              [
                 'nom' => 'Hyatt',
                 'prenom' => 'Michael',
                 'genre' => 'drame',
                 'Metier'=> 'realisateur',
                 'image' => 'https://d29zunrt9sid73.cloudfront.net/speaker_media/asset/27882/portrait_70_Michael_Hyatt_Headshot_2021_.jpg',
                 'dateNaissance' => '25 janvier 1970'
              ],
              
              [
                  'nom' => 'Leto',
                  'prenom' => 'Jared',
                  'genre' => 'drame',
                  'Metier'=> 'realisateur',
                  'image' => 'https://i.pinimg.com/236x/1b/ab/70/1bab701924723ebdde30cda9742fad09.jpg',
                  'dateNaissance' => '20 janvier 1972'
              ],
        
              [
                 'nom' => 'Bauer',
                 'prenom' => 'Chris',
                 'genre' => 'drame',
                 'Metier'=> 'realisateur',
                 'image' => '',
                 'dateNaissance' => '27 avril 1983'
              ],
              
              [
                  'nom' => 'Kinney',
                  'prenom' => 'Terry',
                  'genre' => 'drame',
                  'Metier'=> 'realisateur',
                  'image' => 'https://www.notrecinema.com/images/usercontent/kpitalrisk/images/stars/16000/vign/v_34076.jpg',
                  'dateNaissance' => '18 mai 1984 '
              ],
     
              
              [
                 'nom' => 'Bullock',
                 'prenom' => 'Sandra',
                 'genre' => 'drame',
                 'Metier'=> 'realisateur',
                 'image' => 'https://townsquare.media/site/44/files/2011/07/sandra-bullock.jpg',
                 'dateNaissance' => '01 avril 1970'
              ],
              
              [
                  'nom' => 'Viola',
                  'prenom' => 'Devis',
                  'genre' => 'drame',
                  'Metier'=> 'realisateur',
                  'image' => 'https://th.bing.com/th/id/R.3756e3c45d8cbdabf84595ebc66a77fe?rik=7T%2fvAhOFQMt86g&riu=http%3a%2f%2fwww.gotceleb.com%2fwp-content%2fuploads%2fphotos%2fviola-davis%2f2017-screen-actors-guild-awards-in-los-angeles%2fViola-Davis%3a-2017-Screen-Actors-Guild-Awards--18-300x420.jpg&ehk=oZ9PZJcvQZZa%2ffLL1H%2fpIoRJEsqYDHE7LnUQ%2fDA9EZE%3d&risl=&pid=ImgRaw&r=0',
                  'dateNaissance' => '30 a vril 1969'
              ],
        
              [
                 'nom' => 'Morgan',
                 'prenom' => 'Rob',
                 'genre' => 'drame',
                 'Metier'=> 'realisateur',
                 'image' => 'https://images.fandango.com/ImageRenderer/300/0/redesign/static/img/default_poster.png/0/images/masterrepository/performer%20images/p796216/RobMorgan.jpg',
                 'dateNaissance' => '10 Decembre 1974'
              ],
              
              [
                  'nom' => 'Francis',
                  'prenom' => 'Andrew',
                  'genre' => 'drame',
                  'Metier'=> 'realisateur',
                  'image' => 'https://static.tvtropes.org/pmwiki/pub/images/af_4.jpg',
                  'dateNaissance' => '30 avril 1980'
              ],
        
              [
                 'nom' => 'Bernthal',
                 'prenom' => 'Jon',
                 'genre' => 'drame',
                 'Metier'=> 'realisateur',
                 'image' => 'https://m.media-amazon.com/images/M/MV5BMTcwNzA5MDg0OV5BMl5BanBnXkFtZTcwMTU2NjE0Nw@@._V1_SX300_.jpg',
                 'dateNaissance' => '31 decembre 1978'
              ],
              
             
              [
                  'nom' => 'De Niro',
                  'prenom' => 'Robert',
                  'genre' => 'drame',
                  'Metier'=> 'realisateur',
                  'image' => 'https://th.bing.com/th/id/R.3907e661509f09d69cb5b5b304bad3b2?rik=5TDYN%2fFV01eWkA&riu=http%3a%2f%2fwww.contactmusic.com%2fpics%2fmn%2f20150425%2ftff_closing_night_260415_03%2frobert-de-niro-closing-of-the-2015-tribeca_4697537.jpg&ehk=Y7ln%2fF5cJ%2bmQWB9X21lL0wLNw1hzsnnRsMeNU%2fQyplk%3d&risl=&pid=ImgRaw&r=0',
                  'dateNaissance' => '20 mai 1970'
              ],
        
              [
                 'nom' => 'Paquin',
                 'prenom' => 'Anna',
                 'genre' => 'drame',
                 'Metier'=> 'realisateur',
                 'image' => 'https://th.bing.com/th/id/OIP.TWA_7PG8xMCDZbms3fuvewAAAA?pid=ImgDet&rs=1',
                 'dateNaissance' => '25 mai 1993'
              ],
              
              [
                 'nom' => 'AlPacino',
                 'prenom' => 'Mohammed',
                 'genre' => 'drame',
                 'Metier'=> 'realisateur',
                 'image' => 'https://i.pinimg.com/236x/4b/55/9a/4b559aba98d4aa8781066f98f3e06bcf--al-pacino-celebs.jpg',
                 'dateNaissance' => '2 fevriermai 1986'
              ],
 
              [
                 'nom' => 'Graham',
                 'prenom' => 'Stephen',
                 'genre' => 'drame',
                 'Metier'=> 'realisateur',
                 'image' => 'https://th.bing.com/th/id/OIP.7jmIwDy2iYz2gbCDMK7lwgAAAA?pid=ImgDet&rs=1',
                 'dateNaissance' => '3 fevriermai 1987'
              ],
 
              [
                 'nom' => 'Romano',
                 'prenom' => 'Ray',
                 'genre' => 'drame',
                 'Metier'=> 'realisateur',
                 'image' => 'https://www.onthisday.com/images/people/ray-romano-medium.jpg',
                 'dateNaissance' => '4 fevriermai 1987'
              ],
 
              [
                 'nom' => 'Miller',
                 'prenom' => 'Siena',
                 'genre' => 'drame',
                 'Metier'=> 'realisateur',
                 'image' => 'https://the-hollywood-gossip-res.cloudinary.com/iu/s--183Zb_Ro--/t_full/cs_srgb,f_auto,fl_strip_profile.lossy,q_auto:420/v1364524605/no-longer-miller-time.jpg',
                 'dateNaissance' => '5 fevriermai 1987'
              ],
 
              [
                 'nom' => 'Konis',
                 'prenom' => 'Cole',
                 'genre' => 'drame',
                 'Metier'=> 'realisateur',
                 'image' => 'https://i.pinimg.com/236x/b2/c1/45/b2c145b04faafb4fe63f05a29d290409--lincoln-melcher-dove-cameron.jpg',
                 'dateNaissance' => '6 fevriermai 1987'
              ],
 
              [
                 'nom' => 'Close',
                 'prenom' => 'Eric',
                 'genre' => 'drame',
                 'Metier'=> 'realisateur',
                 'image' => 'https://www.reppedby.com/FileServer/Archive/Headshot/thumbnails/Eric-Strong-2ba5dfd4-4d94-48a0-b7c5-623321371cb6.jpg',
                 'dateNaissance' => '7 fevriermai 1987'
              ],
 
              [
                 'nom' => 'Reed',
                 'prenom' => 'Ben',
                 'genre' => 'drame',
                 'Metier'=> 'realisateur',
                 'image' => 'https://th.bing.com/th/id/OIP.8QqGwl5HtqpkAhXAK9sl7gAAAA?pid=ImgDet&rs=1',
                 'dateNaissance' =>'8 fevriermai 1987'
              ],
 
              [
                 'nom' => 'Jaeger',
                 'prenom' => 'Sam',
                 'genre' => 'drame',
                 'Metier'=> 'realisateur',
                 'image' => 'https://m.media-amazon.com/images/M/MV5BMjM2NDEyMDQxNl5BMl5BanBnXkFtZTgwNTg0ODU2MzE@._V1_UY411_.jpg',
                 'dateNaissance' => '9 fevriermai 1987'
              ],
 
 
      
            [
                'nom' => 'Faxx',
                'prenom' => 'Jamie',
                'genre' => 'horreur',
                'Metier'=> 'realisateur',
                'image' => 'https://th.bing.com/th/id/OIP.IOF7QrtbrPfumBVOsDE5pQAAAA?pid=ImgDet&rs=1',
                'dateNaissance' => '21 juillet 1972'
             ],
             
             [
                 'nom' => 'Franco',
                 'prenom' => 'Dave',
                 'genre' => 'horreur',
                 'Metier'=> 'realisateur',
                 'image' => 'https://i.pinimg.com/236x/e6/9f/38/e69f3860d055a98a9d5e905f1ba17714--mark-feehily-special-person.jpg',
                 'dateNaissance' => ' 11 juillet 1973'
             ],
        
             [
                 'nom' => 'Good',
                 'prenom' => 'Meagan',
                 'genre' => 'horreur',
                 'Metier'=> 'realisateur',
                 'image' => 'https://th.bing.com/th/id/R.843e0eed650c9d8d09365b9ad4343d4d?rik=ZHIkSfcqqCrmmQ&riu=http%3a%2f%2fmedia.hollywood.com%2fimages%2f225x335%2f7616339.jpg&ehk=rXIrLeBXtisoLiJh6MqqqzsmNne%2bSAm8SyFWn41d4mY%3d&risl=&pid=ImgRaw&r=0',
                 'dateNaissance' => '10 marsc1970'
              ],
              
              [
                  'nom' => 'Souza',
                  'prenom' => '  Karla',
                  'genre' => 'horreur',
                  'Metier'=> 'realisateur',
                  'image' => 'https://i.pinimg.com/736x/67/52/de/6752de2435c60ef227b9771f2b21447a--karla-souza-artemis.jpg',
                  'dateNaissance' => '09 fevrier 1974'
              ],
        
              [
                 'nom' => 'Dogg',
                 'prenom' => 'Snoop',
                 'genre' => 'horreur',
                 'Metier'=> 'realisateur',
                 'image' => 'https://www.factmag.com/wp-content/uploads/2011/10/05094809/snoop_dogg-399-300x300.jpg',
                 'dateNaissance' => '11 mars 1975'
              ],
              
              
              [
                  'nom' => 'Harris',
                  'prenom' => 'Danielle',
                  'genre' => 'horreur',
                  'Metier'=> 'realisateur',
                  'image' => 'https://fr.web.img6.acsta.net/medias/nmedia/18/64/91/85/19634308.jpg',
                  'dateNaissance' => '20 mars 1980'
              ],
        
              [
                 'nom' => 'Faerch',
                 'prenom' => 'Daerg',
                 'genre' => 'horreur',
                 'Metier'=> 'realisateur',
                 'image' => 'https://media.gettyimages.com/photos/actor-daeg-faerch-arrives-at-spike-tvs-scream-2007-held-at-the-greek-picture-id161260306?s=612x612',
                 'dateNaissance' => '25 janvier 1970'
              ],
              
              [
                  'nom' => 'Mc Dowell',
                  'prenom' => 'Malcom',
                  'genre' => 'horreur',
                  'Metier'=> 'realisateur',
                  'image' => 'https://www.releasedetails.com/wp-content/uploads/2018/10/malcolm-mcdowell-1.jpg',
                  'dateNaissance' => '20 janvier 1972'
              ],
        
              [
                 'nom' => 'Maner',
                 'prenom' => 'Tayler',
                 'genre' => 'horreur',
                 'Metier'=> 'realisateur',
                 'image' => 'https://i.pinimg.com/736x/f1/8c/8f/f18c8fb0a859eeb59b74f1e447500679.jpg',
                 'dateNaissance' => '27 avril 1983'
              ],
              
              [
                  'nom' => 'Dourif Brad',
                  'prenom' => 'Tony',
                  'genre' => 'horreur',
                  'Metier'=> 'realisateur',
                  'image' => 'https://vignette.wikia.nocookie.net/shield-files/images/b/b5/Brad-dourif-37th-saturn-awards-room-0J6hkO.jpg/revision/latest/scale-to-width-down/309?cb=20140307135816',
                  'dateNaissance' => '18 mai 1984 '
              ],
     
              
              [
                 'nom' => 'Colette',
                 'prenom' => 'Toni',
                 'genre' => 'horreur',
                 'Metier'=> 'realisateur',
                 'image' => 'https://healthyceleb.com/wp-content/uploads/2019/03/Toni-Collette-as-seen-on-her-Instagram-Profile-in-February-2019-300x420.jpg',
                 'dateNaissance' => '01 avril 1970'
              ],
              
              [
                  'nom' => 'Byrne',
                  'prenom' => 'Gabriel',
                  'genre' => 'horreur',
                  'Metier'=> 'realisateur',
                  'image' => 'https://media.gettyimages.com/photos/gabriel-byrne-during-2002-tribeca-film-festival-vanity-fair-party-at-picture-id104979916?s=594x594',
                  'dateNaissance' => '30 a vril 1969'
              ],
        
              [
                 'nom' => 'Wolf',
                 'prenom' => 'Alex',
                 'genre' => 'horreur',
                 'Metier'=> 'realisateur',
                 'image' => 'https://i.pinimg.com/736x/42/42/80/424280fa77cc6a542d47dad8facb5b65--werewolves-horror-movies.jpg',
                 'dateNaissance' => '10 Decembre 1974'
              ],
              
              [
                  'nom' => 'Dowd',
                  'prenom' => 'Ann',
                  'genre' => 'horreur',
                  'Metier'=> 'realisateur',
                  'image' => 'https://m.media-amazon.com/images/M/MV5BMTUyNDkyODc4MF5BMl5BanBnXkFtZTcwMDE3MjQ5OA@@._V1_SY500_CR0,0,351,500_AL_.jpg',
                  'dateNaissance' => '30 avril 1980'
              ],
        
              [
                 'nom' => 'Bechtel',
                 'prenom' => 'Mallory',
                 'genre' => 'horreur',
                 'Metier'=> 'realisateur',
                 'image' => 'https://leblow.co.uk/wp-content/uploads/2012/08/Juliette-Lewis-as-Mallory-in-Natural-Born-Killers-3.jpg',
                 'dateNaissance' => '31 decembre 1978'
              ],
              
        
              [
                  'nom' => 'Hechninger',
                  'prenom' => 'Fred',
                  'genre' => 'horreur',
                  'Metier'=> 'realisateur',
                  'image' => 'https://br.web.img3.acsta.net/c_310_420/pictures/22/02/23/15/30/2194035.jpg',
                  'dateNaissance' => '20 mai 1970'
              ],
        
              [
                 'nom' => 'Amoia',
                 'prenom' => 'Charlene',
                 'genre' => 'horreur',
                 'Metier'=> 'realisateur',
                 'image' => 'https://th.bing.com/th/id/R.7ffd28c568c6d986cb849e0625797cf2?rik=dMFRmHyR3aX%2fgw&riu=http%3a%2f%2fimage.tmdb.org%2ft%2fp%2fw342%2fzG75UPVB0sGkbbSKeuGrJLI0epH.jpg&ehk=Vy6BcTmwlmBppNLRNO5GQCFYoPhIEnfLgWXnZ9dy2j4%3d&risl=&pid=ImgRaw&r=0',
                 'dateNaissance' => '25 mai 1986'
              ],
              
              [
                 'nom' => 'Zukeman',
                 'prenom' => 'Ashley',
                 'genre' => 'horreur',
                 'Metier'=> 'realisateur',
                 'image' => 'https://media.gettyimages.com/photos/danny-deferrari-attends-the-xy-screening-at-the-bmcc-tribeca-pac-in-picture-id535277888?s=612x612',
                 'dateNaissance' => '25 mai 1986'
              ],
 
              [
                 'nom' => 'Ford',
                 'prenom' => 'Jeremy',
                 'genre' => 'horreur',
                 'Metier'=> 'realisateur',
                 'image' => 'https://www.rsdoublage.com/acteurs/ford_jeremy.jpg',
                 'dateNaissance' => '25 mai 1986'
              ],
 
              [
                 'nom' => 'Flores',
                 'prenom' => 'Benjamin',
                 'genre' => 'horreur',
                 'Metier'=> 'realisateur',
                 'image' => 'https://media.gettyimages.com/photos/benjamin-flores-jr-attends-the-premiere-of-netflixs-fear-street-at-picture-id1326018165?s=594x594',
                 'dateNaissance' => '25 mai 1986'
              ],
 
              [
                 'nom' => 'Rains',
                 'prenom' => 'Claude',
                 'genre' => 'horreur',
                 'Metier'=> 'realisateur',
                 'image' => 'https://i.ebayimg.com/images/g/uloAAOSwuOZd6n6v/s-l400.jpg',
                 'dateNaissance' => '25 mai 1986'
              ],
 
              [
                 'nom' => 'Travers',
                 'prenom' => 'Henry',
                 'genre' => 'horreur',
                 'Metier'=> 'realisateur',
                 'image' => 'https://th.bing.com/th/id/OIP.e0vnsfbYOl9mW5Sj7DG4MQHaJY?pid=ImgDet&rs=1',
                 'dateNaissance' => '25 mai 1965'
              ],
 
              [
                 'nom' => 'Stuart',
                 'prenom' => 'Gloria',
                 'genre' => 'horreur',
                 'Metier'=> 'realisateur',
                 'image' => 'https://th.bing.com/th/id/R.5ca61ff5002714f4ce96c9ad595c2f17?rik=EsbpB73L8X0huA&riu=http%3a%2f%2fcbsnews2.cbsistatic.com%2fhub%2fi%2fr%2f2010%2f09%2f28%2f9522ea21-a642-11e2-a3f0-029118418759%2fresize%2f620x465%2fe60a91346d8c9fcb29a07bfed9e7bd07%2f51723800.jpg%23&ehk=HeMMK%2bgkm0QdHy%2ffUrMkKbazyF7I%2fUfGMJ8wrRH%2bDnM%3d&risl=&pid=ImgRaw&r=0',
                 'dateNaissance' => '25 mai 1986'
              ],
 
              [
                 'nom' => 'Digges',
                 'prenom' => 'Dudley',
                 'genre' => 'horreur',
                 'Metier'=> 'realisateur',
                 'image' => '',
                 'dateNaissance' => '25 mai 1952'
              ],
 
              [
                 'nom' => 'Harrigan',
                 'prenom' => 'William',
                 'genre' => 'horreur',
                 'Metier'=> 'realisateur',
                 'image' => 'https://mdxvitals-res.cloudinary.com/private_images/q_auto/professionals/1508091/photo.jpg',
                 'dateNaissance' => '25 mai 1986'
              ],
 
      
            [
                'nom' => 'Cameron',
                'prenom' => 'Sarah',
                'genre' => 'jeunesse',
                'Metier'=> 'realisateur',
                'image' => 'https://img2.bdbphotos.com/images/orig/v/g/vghy349n16zsvsh1.jpg?skj2io4l',
                'dateNaissance' => '21 juillet 1972'
             ],
             
             [
                 'nom' => 'Heyward',
                 'prenom' => 'Pope',
                 'genre' => 'jeunesse',
                 'Metier'=> 'realisateur',
                 'image' => 'https://th.bing.com/th/id/OIP.6Qmkk0HG7HRUU9mP6B_DJQHaJQ?pid=ImgDet&rs=1',
                 'dateNaissance' => ' 11 juillet 1973'
             ],
        
             [
                 'nom' => 'Daviss',
                 'prenom' => 'Jonathan',
                 'genre' => 'jeunesse',
                 'Metier'=> 'realisateur',
                 'image' => 'https://wikiodin.com/wp-content/uploads/2020/04/1587649091_561_Whats-The-Net-Worth-of-Jonathan-Daviss-Thecelebscloset.jpg',
                 'dateNaissance' => '10 mars 1970'
              ],
              
              [
                  'nom' => 'Starkey',
                  'prenom' => '  Prew',
                  'genre' => 'jeunesse',
                  'Metier'=> 'realisateur',
                  'image' => 'https://th.bing.com/th/id/R.a23ed39c18b3036aca48753943079cff?rik=XDF9coFO3scWcg&pid=ImgRaw&r=0',
                  'dateNaissance' => '09 fevrier 1974 '
              ],
        
              [
                 'nom' => 'Bailey',
                 'prenom' => ' Madiso',
                 'genre' => 'jeunesse',
                 'Metier'=> 'realisateur',
                 'image' => 'https://images.wallpapersden.com/image/download/madison-bailey-in-outer-banks-netflix_71955_360x640.jpg',
                 'dateNaissance' => '11 mars 1975',
              ],
             
              
              [
                  'nom' => 'Howick',
                  'prenom' => 'Jim',
                  'genre' => 'jeunesse',
                  'Metier'=> 'realisateur',
                  'image' => 'https://cdn.images.express.co.uk/img/dynamic/20/590x/secondary/howick-870567.jpg',
                  'dateNaissance' => '20 mars 1980 '
              ],
        
              [
                 'nom' => 'Bluemel',
                 'prenom' => 'Edouard',
                 'genre' => 'jeunesse',
                 'Metier'=> 'realisateur',
                 'image' => 'https://pm1.narvii.com/7096/590db354323c0cfcdcb3bccb8b965744bde6925cr1-1200-1600v2_hq.jpg',
                 'dateNaissance' => '25 janvier 1970'
              ],
              
              [
                  'nom' => 'Spiro',
                  'prenom' => 'Samantha',
                  'genre' => 'jeunesse',
                  'Metier'=> 'realisateur',
                  'image' => 'https://file.namu.moe/file/8bc9e381797334eb33da66e3ba501be1c26fe3c912c22a27062ae740e4fd4193c4baeb8a41cb11404c2f24dd6cc8b7fe9e87b8677afd109d6f04c02ce13fbefe989968d3bb3903606e00016800ca83b3',
                  'dateNaissance' => '20 janvier 1972'
              ],
        
              [
                 'nom' => 'Jenks',
                 'prenom' => 'Chris',
                 'genre' => 'jeunesse',
                 'Metier'=> 'realisateur',
                 'image' => 'https://static.cinemagia.ro/img/resize/db/actor/18/65/707/chris-jenks-923215l-600x0-w-fe3ffa23.jpg',
                 'dateNaissance' => '27 avril 1983'
              ],
              
              [
                  'nom' => 'Wilkinson',
                  'prenom' => 'Joe',
                  'genre' => 'jeunesse',
                  'Metier'=> 'realisateur',
                  'image' => 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/4Ti7DUnXyvjmnejzSzj1EbdiMIm.jpg',
                  'dateNaissance' => '18 mai 1984 '
              ],
      
              
              [
                 'nom' => 'xxx',
                 'prenom' => 'xxx',
                 'genre' => 'jeunesse',
                 'Metier'=> 'realisateur',
                 'image' => '',
                 'dateNaissance' => '***'
              ],
              
              [
               'nom' => 'xxx',
               'prenom' => 'xxx',
               'genre' => 'jeunesse',
               'Metier'=> 'realisateur',
               'image' => '',
               'dateNaissance' => '***'
            ],
        
            [
               'nom' => 'xxx',
               'prenom' => 'xxx',
               'genre' => 'jeunesse',
               'Metier'=> 'realisateur',
               'image' => '',
               'dateNaissance' => '***'
            ],
              
            [
               'nom' => 'xxx',
               'prenom' => 'xxx',
               'genre' => 'jeunesse',
               'Metier'=> 'realisateur',
               'image' => '',
               'dateNaissance' => '***'
            ],
        
            [
               'nom' => 'xxx',
               'prenom' => 'xxx',
               'genre' => 'jeunesse',
               'Metier'=> 'realisateur',
               'image' => '',
               'dateNaissance' => '***'
            ],
              
            
              [
                  'nom' => 'Minette',
                  'prenom' => 'Dylan',
                  'genre' => 'jeunesse',
                  'Metier'=> 'realisateur',
                  'image' => 'https://i.pinimg.com/736x/07/29/ce/0729ce5753adef4fcce5a4702b56c6c0.jpg',
                  'dateNaissance' => '20 mai 1970'
              ],
        
              [
                 'nom' => 'Prentice',
                 'prenom' => 'Justin',
                 'genre' => 'jeunesse',
                 'Metier'=> 'realisateur',
                 'image' => 'https://th.bing.com/th/id/R.db62d2f36f247a3d1e4cfb0c78b7dd07?rik=tqLWE0o90MSGLg&riu=http%3a%2f%2fwww3.pictures.zimbio.com%2fgi%2fJustin%2bPrentice%2b58th%2bMonte%2bCarlo%2bTV%2bFestival%2bxSpiDnszxCMl.jpg&ehk=QSDkMvp%2feY1aitC2qYF9AKG9adPGomuQYH63M8%2bH01Q%3d&risl=&pid=ImgRaw&r=0',
                 'dateNaissance' => '25 juin 1996'
              ],
              
              [
                 'nom' => 'Langfort',
                 'prenom' => 'Katherine',
                 'genre' => 'jeunesse',
                 'Metier'=> 'realisateur',
                 'image' => 'https://th.bing.com/th/id/R.5449ea0cfcb76720e2ba096c9c8794e2?rik=kGtaM75KqXbPJg&pid=ImgRaw&r=0',
                 'dateNaissance' => '25 juin 1988'
              ],
 
              [
                 'nom' => 'Boe',
                 'prenom' => 'Alisha',
                 'genre' => 'jeunesse',
                 'Metier'=> 'realisateur',
                 'image' => 'https://static.kinokopilka.pro/system/images/photos/images/000/310/267/310267_large.jpg',
                 'dateNaissance' => '25 juin 1986'
              ],
 
              [
                 'nom' => 'Heizfart',
                 'prenom' => 'Miles',
                 'genre' => 'jeunesse',
                 'Metier'=> 'realisateur',
                 'image' => 'https://i.pinimg.com/736x/4c/d3/2c/4cd32c887e7ca7165418e07386b387b9---reasons.jpg',
                 'dateNaissance' => '2 juin 1986'
              ],
 
               [
                  'nom' => 'xxx',
                  'prenom' => 'xxx',
                  'genre' => 'jeunesse',
                  'Metier'=> 'realisateur',
                  'image' => '',
                  'dateNaissance' => '***'
               ],
 
               [
                  'nom' => 'xxx',
                  'prenom' => 'xxx',
                  'genre' => 'jeunesse',
                  'Metier'=> 'realisateur',
                  'image' => '',
                  'dateNaissance' => '***'
               ],
 
                  [
                     'nom' => 'xxx',
                     'prenom' => 'xxx',
                     'genre' => 'jeunesse',
                     'Metier'=> 'realisateur',
                     'image' => '',
                     'dateNaissance' => '***'
                  ],
                  
               [
                  'nom' => 'xxx',
                  'prenom' => 'xxx',
                  'genre' => 'jeunesse',
                  'Metier'=> 'realisateur',
                  'image' => '',
                  'dateNaissance' => '***'
               ],
 
               [
                  'nom' => 'xxx',
                  'prenom' => 'xxx',
                  'genre' => 'jeunesse',
                  'Metier'=> 'realisateur',
                  'image' => '',
                  'dateNaissance' => '***'
               ],
 
 /* Héros et héroines noir Héros et héroines noir Héros et héroines noir Héros et héroines noir Héros et héroines noir Héros et héroines noir */  
      
            [
                'nom' => 'Snipes',
                'prenom' => 'Wesley',
                'genre' => 'noir',
                'Metier'=> 'realisateur',
                'image' => 'https://nientepopcorn.b-cdn.net/persone-img/big/wesley-snipes-10814.jpg',
                'dateNaissance' => '21 juillet 1972'
             ],
             
             [
                 'nom' => 'Varela',
                 'prenom' => 'Leonor',
                 'genre' => 'noir',
                 'Metier'=> 'acteur',
                 'image' => 'https://th.bing.com/th/id/R.c804c3dbc1722bd2507e9957b730097e?rik=cd7PDM5%2fzBO2%2bg&pid=ImgRaw&r=0',
                 'dateNaissance' => ' 11 juillet 1973'
             ],
        
             [
                 'nom' => 'Goss',
                 'prenom' => 'Lukes',
                 'genre' => 'noir',
                 'Metier'=> 'acteur',
                 'image' => 'https://cdn.idolnetworth.com/images/24/luke-goss-7.jpg',
                 'dateNaissance' => '10 marsc1970'
              ],
              
              [
                  'nom' => 'Schulze',
                  'prenom' => '  Matt',
                  'genre' => 'noir',
                  'Metier'=> 'acteur',
                  'image' => 'https://th.bing.com/th/id/OIP.lVzbK3vP2zDL3yBZL5XX0QAAAA?pid=ImgDet&rs=1',
                  'dateNaissance' => '09 fevrier 1974 '
              ],
        
              [
                 'nom' => 'Curran',
                 'prenom' => 'Tony',
                 'genre' => 'noir',
                 'Metier'=> 'acteur',
                 'image' => 'https://cps-static.rovicorp.com/2/Open/Getty_Images_406/Person/332936/_2by3/_derived_jpg_q90_500x500_m0/GettyImages-450477870.jpg?partner=allrovi.com',
                 'dateNaissance' => '11 mars 1975'
              ],
             
              
              [
                  'nom' => 'Pattinson',
                  'prenom' => 'Robert',
                  'genre' => 'noir',
                  'Metier'=> 'acteur',
                  'image' => 'https://th.bing.com/th/id/OIP.A0g0YLIl8OhCvPoC-TsUlgHaJu?pid=ImgDet&rs=1',
                  'dateNaissance' => '20 mars 1980 '
              ],
        
              [
                 'nom' => 'Johnson',
                 'prenom' => 'Aoron Taylor',
                 'genre' => 'noir',
                 'Metier'=> 'acteur',
                 'image' => 'https://th.bing.com/th/id/R.1d6c4ac182929fef036a6ff0de03e911?rik=Yi7WHfV2b52nmw&riu=http%3a%2f%2fbr.web.img2.acsta.net%2fr_1280_720%2fpictures%2f18%2f09%2f18%2f20%2f35%2f2991394.jpg&ehk=riZN87VojIwM1x0hCckCn5umiOWRP00WgYqPz%2b5Az8M%3d&risl=&pid=ImgRaw&r=0',
                 'dateNaissance' => '25 janvier 1970'
              ],
              
              [
                  'nom' => 'Avery',
                  'prenom' => 'Sean',
                  'genre' => 'noir',
                  'Metier'=> 'acteur',
                  'image' => 'https://th.bing.com/th/id/R.6fe6fdefdc2f92c39e2db7d90b98df5d?rik=qb%2frCntoefUzCw&riu=http%3a%2f%2fimages.nymag.com%2fimages%2f2%2fdaily%2f2009%2f01%2f20090105_mrdashing_250x375.jpg&ehk=rZ2hHI2izAUftmOhDypgyqQB6U47ULT8QqIo%2b0wcDww%3d&risl=&pid=ImgRaw&r=0',
                  'dateNaissance' => '20 janvier 1972'
                ],
        
              [
                 'nom' => 'Donovan',
                 'prenom' => 'Martin',
                 'genre' => 'noir',
                 'Metier'=> 'acteur',
                 'image' => 'https://m.media-amazon.com/images/M/MV5BNWIzNTAyZTktZmYzMC00MmQ1LWFhOTItYmZhZGViMWYwNzdjXkEyXkFqcGdeQXVyMjQwMDg0Ng@@._V1_UY317_CR1,0,214,317_AL_.jpg',
                 'dateNaissance' => '27 avril 1983'
              ],
              
              [
                  'nom' => 'Howard',
                  'prenom' => 'Andrew',
                  'genre' => 'noir',
                  'Metier'=> 'acteur',
                  'image' => 'https://th.bing.com/th/id/OIP.5Wiin1HGRn-Ds2A3rb3fsQAAAA?pid=ImgDet&rs=1',
                  'dateNaissance' => '18 mai 1984 '
                ],
      
              
              [
                 'nom' => 'Walters',
                 'prenom' => 'Ashley',
                 'genre' => 'noir',
                 'Metier'=> 'acteur',
                 'image' => 'https://cps-static.rovicorp.com/2/Open/Getty_Images_406/Person/511307/_2by3/_derived_jpg_q90_500x500_m0/GettyImages-454319023.jpg?partner=allrovi.com',
                 'dateNaissance' => '01 avril 1970'
              ],
              
              [
                  'nom' => 'Pinnocht',
                  'prenom' => 'Nicholes',
                  'genre' => 'noir',
                  'Metier'=> 'acteur',
                  'image' => 'https://media.gettyimages.com/photos/nicholas-pinnock-attends-the-into-film-awards-at-the-empire-cinema-on-picture-id467410656?s=594x594',
                  'dateNaissance' => '30 a vril 1969'
              ],
        
              [
                 'nom' => 'Wereing',
                 'prenom' => 'Kierstorn',
                 'genre' => 'noir',
                 'Metier'=> 'acteur',
                 'image' => 'https://th.bing.com/th/id/OIP.aS62xsa5NpbwL-rvqoYDOwAAAA?pid=ImgDet&rs=1',
                 'dateNaissance' => '10 Decembre 1974'
                ],
                
              [
                  'nom' => 'Dwan',
                  'prenom' => 'Lisa',
                  'genre' => 'noir',
                  'Metier'=> 'acteur',
                  'image' => 'https://media.gettyimages.com/photos/irish-actress-lisa-dwan-poses-in-paris-on-february-3-2015-afp-photo-picture-id462710714?s=612x612',
                  'dateNaissance' => '30 avril 1980'
              ],
        
              [
                 'nom' => 'Jobson',
                 'prenom' => 'Jasmine',
                 'genre' => 'noir',
                 'Metier'=> 'acteur',
                 'image' =>'https://th.bing.com/th/id/R.ea3de4475bd7383fbb2ba719b1ed0380?rik=2JgJq76DCCygMw&riu=http%3a%2f%2fwww.celebzz.com%2fwp-content%2fuploads%2f2019%2f09%2fjasmine-jobson-at-raindance-film-festival-premiere-of-everybody-flies.-vue-west-end-leicester-square-london-0.jpg&ehk=MDcprW7wJvCklNiv%2fhxTWzSHmJXfGFfRwKXasBLeSU0%3d&risl=&pid=ImgRaw&r=0',
                 'dateNaissance' => '31 decembre 1978'
                ],
              
             
              [
                  'nom' => 'Qamata',
                  'prenom' => 'Ama',
                  'genre' => 'noir',
                  'Metier'=> 'acteur',
                  'image' => 'https://assets.mycast.io/actor_images/actor-ama-qamata-213274_large.jpg?1620872244',
                  'dateNaissance' => '20 mai 1970'
              ],
        
              [
                 'nom' => 'Nguema',
                 'prenom' => 'Khosi',
                 'genre' => 'noir',
                 'Metier'=> 'acteur',
                 'image' => 'https://image.chilimovie.com/public/300px/20200531/lmNd3QN0huNZxRm2jAD4LgJckJg.jpg',
                 'dateNaissance' => '25 mai 1986'
                ],
              
              [
                 'nom' => 'Mabalane',
                 'prenom' => 'Gail',
                 'genre' => 'noir',
                 'Metier'=> 'acteur',
                 'image' => 'https://fakazanews.com/wp-content/uploads/2020/08/gail.jpg',
                 'dateNaissance' => '25 mai 1986'
              ],
 
              [
                 'nom' => 'Molaba',
                 'prenom' => 'Thabong',
                 'genre' => 'noir',
                 'Metier'=> 'acteur',
                 'image' => 'https://www.thewikifeed.com/wp-content/uploads/2020/12/thabong-molaba-2.jpg',
                 'dateNaissance' => '25 mai 1986'
              ],
 
              [
                 'nom' => 'Windvogel',
                 'prenom' => 'Dillon',
                 'genre' => 'noir',
                 'Metier'=> 'acteur',
                 'image' => 'https://fr.web.img3.acsta.net/c_310_420/pictures/20/05/27/16/06/5015096.jpg',
                 'dateNaissance' => '25 mai 1986'
                ],
 
              [
                 'nom' => 'Keith',
                 'prenom' => 'David',
                 'genre' => 'noir',
                 'Metier'=> 'acteur',
                 'image' => 'https://th.bing.com/th/id/OIP.k2Luk2oMqO_dW7K83nvXvwHaLH?pid=ImgDet&rs=1',
                 'dateNaissance' => '25 mai 1986'
              ],
 
              [
                 'nom' => 'Whitfield',
                 'prenom' => 'Lynn',
                 'genre' => 'noir',
                 'Metier'=> 'acteur',
                 'image' => 'https://th.bing.com/th/id/OIP.EflxRAKIrDXz2vILXanWcgAAAA?pid=ImgDet&rs=1',
                 'dateNaissance' => '25 mai 1986'
              ],
 
              [
                 'nom' => 'Lovie',
                 'prenom' => 'Simone',
                 'genre' => 'noir',
                 'Metier'=> 'acteur',
                 'image' => 'https://www.gotceleb.com/wp-content/uploads/photos/lovie-simone/2017-bet-awards-in-los-angeles/Lovie-Simone:-2017-BET-Awards--04-662x997.jpg',
                 'dateNaissance' => '25 mai 1986'
              ],
 
              [
                 'nom' => 'Dandrige',
                 'prenom' => 'Merle',
                 'genre' => 'noir',
                 'Metier'=> 'acteur',
                 'image' => 'https://th.bing.com/th/id/OIP.0-JsJ0T6sDf5tgq0bxWhugHaLH?pid=ImgDet&rs=1',
                 'dateNaissance' => '25 mai 1986'
              ],
 
              [
                 'nom' => 'Ross',
                 'prenom' => 'Desire',
                 'genre' => 'noir',
                 'Metier'=> 'acteur',
                 'image' => 'https://i2.lisimg.com/16943572/280full.jpg',
                 'dateNaissance' => '25 mai 1986'
              ],
 
             
         ]);
     }
 }
            