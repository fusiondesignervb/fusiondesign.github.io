<html>        
<head>                
<title>Event Planner</title>                
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet">      
<link href="style.css" rel="stylesheet">
 <script src="js/jquery.min.js"></script>        
<script src="js/bootstrap.min.js"></script>  
<link href="css/style" rel="stylesheet"> 
<style>
.flip-box {
  background-color: transparent;
  width: 270px;
  height: 270px;
  border-radius:15px;
  perspective: 1000px;
  
}

.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);
}

.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-box-front {
  background-color: #bbb;
  color: black;
}

.flip-box-back {
  background-color:#FFB7C5;
  transform: rotateY(180deg);
}
img{
  border-radius:15px;
}
</style>  
</head>  
<body style="background:#f1f1f1;">
<div>
<?php @include 'header.php'; ?> 
</div>
<center>
<div  style="background-image: url('img/seb.jpg');"class="banner2">
  <div class="text">Special Effects for EVENT</div>
</div>
 <br> <br>
  <div class="row">
  <div class="col-sm-12" style="padding:2%">
    <h1 style="font-size:55px;font-weight:bold;color:330066" id="celebrity">Celebrity</h1>
</div>
<div class="col-sm-2 col-md-2" style="margin-left:8%;">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/bactor1.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Hrithik Roshan</h2>
      <p>Hrithik Roshan, often hailed as the "Greek God of Bollywood," is a versatile actor and dancer who has achieved remarkable success in the film industry. </p>
      <p>His portrayal of diverse characters in films like "Koi... Mil Gaya," "Dhoom 2," and "Krrish" further established him as a versatile actor.</p>
    </div>
  </div>
</div> 
     </div> 
     <div class="col-sm-2 col-md-2" style="height:250px;margin-left:5%;">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/bactor3.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Shraddha Kapoor</h2>
      <p>Shraddha Kapoor is a talented Indian actress and singer who has made a mark in the Bollywood film industry.</p>
      <p>Since then, she has delivered several successful films, including "Ek Villain," "Haider," and "Stree." Known for her charming screen presence and versatile acting skills,</p>
    </div>
  </div>
</div> 
     </div>
     <div class="col-sm-2 col-md-2" style="height:250px;margin-left:5%">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/bactor5.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Allu Arjun</h2>
      <p>Arjun has received numerous accolades for his performances, including five Filmfare Awards and three Nandi Awards. </p>
      <p>Some of his notable films include "Arya," "Race Gurram," and "Sarrainodu" which became one of the highest-grossing Telugu films of all time.</p>
    </div>
  </div>
</div> 
     </div>
     <div class="col-sm-2 col-md-2" style="height:250px;margin-left:5%;margin-bottom:5%">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/bactor4.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Tamanna Bhatia</h2>
      <p>Tamanna Bhatia, commonly known as Tamannaah, is a renowned Indian actress who has left an indelible mark on the film industry.</p>
      <p>With her flawless performances in films like "Baahubali: The Beginning" and "Baahubali: The Conclusion," she established herself as one of the leading actresses in the Indian film industry. </p>
    </div>
  </div>
</div> 
     </div>
     <div class="col-sm-2 col-md-2" style="margin-left:8%;">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/hactor1.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Cha Eun Woo</h2>
      <p>Lee Dong-min  known professionally as Cha Eun-woo  is a South Korean singer and actor under the label Fantagio. He is a member of the South Korean boy band Astro. <br>
In 2023, Cha is set to star in the webtoon-based fantasy romance drama A Good Day to Be a Dog.</p>
    </div>
  </div>
</div> 
     </div> 
     <div class="col-sm-2 col-md-2" style="height:250px;margin-left:5%;">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/hactor3.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Song Hye Kyo</h2>
      <p>Song Hye-kyo is a South Korean actress. She gained international popularity through her leading roles in the television dramas Autumn in My Heart (2000), All In (2003), Full House (2004), That Winter, the Wind Blows (2013), Descendants of the Sun (2016), Encounter (2018) and The Glory (2022).  she played a leading role alongside Lee Byung-hun in the gambling drama and so on... </p>
    </div>
  </div>
</div> 
     </div>
     <div class="col-sm-2 col-md-2" style="height:250px;margin-left:5%">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/hactor2.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Chris Hemsworth</h2>
      <p>Christopher Hemsworth  is an Australian actor. He rose to prominence playing Kim Hyde in the Australian television series Home and Away (2004–2007) before beginning a film career in Hollywood. <br> In the Marvel Cinematic Universe (MCU), Hemsworth started playing Thor with the 2011 film of the same name and most recently reprised the role in Thor: Love and Thunder (2022).
</p>
    </div>
  </div>
</div> 
     </div>
     <div class="col-sm-2 col-md-2" style="height:250px;margin-left:5%;margin-bottom:5%">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/hactor4.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Emma Waston</h2>
      <p>Emma Charlotte Duerre Watson  is an English actress, model and activist. Known for her roles in both blockbusters and independent films, as well as for her women's rights work, she has received a selection of accolades, including a Young Artist Award and three MTV Movie Awards. <br>
Harry Potter and the Deathly Hallows – Part 2 became a commercial and critical.</p>
    </div>
  </div>
</div> 
     </div>
<div class="container">
<div class="col-sm-12" style="padding:2%">
    <h1 style="font-size:55px;font-weight:bold;color:330066;" id="Show Artist">Reality Show Artist</h1>
</div>
<div class="col-sm-4 col-md-4" style="height:50%;">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/real1.jpg" height="100%" width="100%">
    </div>
    <div class="flip-box-back">
      <h2>Tejasvi Prakash</h2>
      <p> Tejasswi has participated in reality shows like "Khatron Ke Khiladi 10" and "Bigg Boss 15," where she showcased her versatility and gained immense popularity.</p>
      <p> Tejasswi took part in the reality show "Bigg Boss 15" and emerged as the winner. </p>
    </div>
  </div>
</div> 
     </div> 
     <div class="col-sm-4 col-md-4" style="height:50%;">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/real5.jpg" height="100%" width="100%">
    </div>
    <div class="flip-box-back">
      <h2>Anushka Sen</h2>
      <p>Anushka Sen is an Indian actress and model who is known for her roles in the television shows Baal Veer and Jhansi Ki Rani.</p>
      <p>Anushka Sen is a talented actress who is sure to go a long way in her career. She is a versatile actress who can play a variety of roles.</p>
    </div>
  </div>
</div> 
     </div>
     <div class="col-sm-4 col-md-4" style="height:50%;">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/real2.jpg" height="100%" width="100%">
    </div>
    <div class="flip-box-back">
      <h2>Jasmin Bhasin</h2>
      <p>Jasmin's journey in the entertainment industry began with modeling, and she quickly made a seamless transition to acting.</p>
      <p>Jasmin has also participated in the reality show "Bigg Boss" and captivated viewers with her authentic personality and strong presence.</p>
    </div>
  </div>
</div> 
     </div>
     <div class="col-sm-4 col-md-4" style="height:50%;">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/real4.jpg" height="100%" width="100%">
    </div>
    <div class="flip-box-back">
      <h2>Arjun Bijlani</h2>
      <p>Arjun Bijlani is an Indian actor known for his work in the Hindi television industry. He has established himself as a prominent figure in the industry with his versatile acting skills and charming persona.</p>
      <p>Arjun Bijlani has also participated in reality shows such as "Jhalak Dikhhla Jaa" and "Khatron Ke Khiladi," showcasing his dancing and adventurous skills.</p>
    </div>
  </div>
</div>
     </div>
     <div class="col-sm-4 col-md-4" style="height:50%;">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/real3.jpeg" height="100%" width="100%">
    </div>
    <div class="flip-box-back">
      <h2>Asim Riaz </h2>
      <p>He is a model. He has been featured in many TV commercials like Blackberrys, Blue, Numero Uno, etc. </p>
    </div>
  </div>
</div> 
     </div>
     <div class="col-sm-4 col-md-4" style="height:50%;">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/real6.jpg" height="100%" width="100%">
    </div>
    <div class="flip-box-back">
      <h2>Karan Kundra</h2>
      <p>Karan Kundra is a popular Indian television actor, model, and entrepreneur who has made a significant impact in the entertainment industry.</p>
      <p> Karan Kundra continues to captivate the audience and remains a prominent figure in the Indian entertainment industry. </p>
    </div>
  </div>
</div> 
     </div>
</div>
  <div class="col-sm-12" style="padding:2%">
    <h1 style="font-size:55px;font-weight:bold;color:330066" id="sport">Sport personality</h1>
</div>
<div class="container">
<div class="col-sm-4 col-md-4" style="height:50%">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/sport1.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Virat Kohli</h2>
      <p>Virat Kohli, the epitome of modern-day batting, is an Indian cricketer and one of the finest batsmen in the world.</p>
      <p>Kohli's batting technique is a perfect blend of aggression and finesse. He possesses incredible hand-eye coordination and the ability to score runs across all formats of the game. </p>
    </div>
  </div>
</div> 
     </div> 
     <div class="col-sm-4 col-md-4" style="height:50%">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/sport3.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Sania Mirza</h2>
      <p>Sania Mirza is a renowned Indian tennis player who has carved a special place for herself in the world of tennis.</p>
      <p>She is one of the most successful and influential athletes in Indian sports history. Mirza's remarkable career is highlighted by her achievements in both singles and doubles competitions. </p>
    </div>
  </div>
</div> 
     </div>
     <div class="col-sm-4 col-md-4" style="height:50%">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/sport2.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>MS Dhoni</h2>
      <p>Mahendra Singh Dhoni, commonly known as MS Dhoni, is an Indian former international cricketer and one of the most iconic figures in Indian cricket history.</p>
      <p>Dhoni's contribution to Indian cricket <br> goes beyond his leadership and <br> batting prowess.</p>
    </div>
  </div>
</div> 
     </div>
     <div class="col-sm-4 col-md-4" style="height:50%">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/sport4.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>PV Sindhu</h2>
      <p>Pusarla Venkata Sindhu, born on July 5, 1995, is an Indian badminton player and one of India's most successful sportspersons. </p>
      <p>Sindhu made history by becoming the first and only Indian to win the badminton World Championships, securing a gold medal in 2019.</p>
    </div>
  </div>
</div> 
     </div>
<div class="col-sm-4 col-md-4" style="height:50%">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/sport5.jpeg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Rohit Sharma</h2>
      <p>Rohit Sharma, popularly known as the "Hitman," is an Indian cricketer and one of the most accomplished opening batsmen in the world.</p>
      <p>Rohit's leadership qualities have come to the forefront as he captained the Mumbai Indians (MI) franchise in the Indian Premier League (IPL). Under his captaincy, MI has achieved great success, winning multiple IPL titles.</p>
    </div>
  </div>
</div> 
     </div>
<div class="col-sm-4 col-md-4" style="height:50%">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/sport6.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Geeta Phogat</h2>
      <p>Geeta Phogat is an Indian wrestler who has made significant contributions to the sport of wrestling in India.</p>
      <p> Geeta's contribution to the growth of wrestling in India, along with her achievements on the mat, have left a lasting impact on the sport and continue to inspire aspiring wrestlers to pursue their dreams.</p>
    </div>
  </div>
</div> 
     </div>
</div>
  <div class="col-sm-12" style="padding:2%">
    <h1 style="font-size:55px;font-weight:bold;color:330066;" id="dj">Disk Jockey</h1>
</div>
<div class="container">
<div class="col-sm-4 col-md-4" style="height:50%">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/dj1.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Zaeden</h2>
      <p>Zaeden is an Indian DJ and electronic music producer.Zaeden is known for his unique sound, which blends elements of electronic music with Indian classical music. </p>
      <p>He has been praised for his innovative production skills and his ability to create music that is both danceable and meaningful.</p>
    </div>
  </div>
</div> 
     </div> 
     <div class="col-sm-4 col-md-4" style="height:50%">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/dj3.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Amelie Lens</h2>
      <p>Amelie Lens is a Belgian electronic music DJ, record producer, and owner of the Lenske record label. Lens was working free-time as a DJ under the name Renée .
In 2018, she launched her own label called Lenske. <br> As a resident at Hasselt's Labyrinth Club, Lens started curating her own nights under the name EXHALE.</p>
    </div>
  </div>
</div> 
     </div>
     <div class="col-sm-4 col-md-4" style="height:50%">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/dj2.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Anish Sood</h2>
      <p>Anish Sood is an acclaimed DJ and electronic music producer hailing from India.Apart from his DJ career, Anish has also made a mark as a music producer.</p>
      <p>Known for his energetic live performances and exceptional mixing skills, Anish has shared the stage with some of the biggest names in the industry.</p>
    </div>
  </div>
</div> 
     </div>
     <div class="col-sm-4 col-md-4" style="height:50%">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/dj4.png" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Alison Wonderland</h2>
      <p>Alexandra Margo Sholler  is an Australian  DJ, and singer. Her debut album, Run, was released on 20 March 2015, <br> Her second album, Awake, debuted at No. 1 on Billboard's Top Dance/Electronic Albums. She was listed at No. 96 on DJ Mag's Top 100 DJs in October 2018. She is also the highest billed female DJ in Coachella history.</p>
    </div>
  </div>
</div> 
     </div>
     <div class="col-sm-4 col-md-4" style="height:50%">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/dj6.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Ali Merchant</h2>
      <p>Ali Merchant is a highly talented and skilled DJ, known for his exceptional musical abilities and electrifying performances. </p>
      <p>Ali's eclectic taste in music sets him apart from the rest. He effortlessly blends various genres, creating a unique and captivating experience for his audience. </p>
    </div>
  </div>
</div> 
     </div>
     <div class="col-sm-4 col-md-4" style="height:50%">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/dj5.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Ana Lilia</h2>
      <p>Ana Lilia is an exceptional DJ who has captivated audiences worldwide with her unique talent and infectious energy.</p>
      <p> Her passion for music, coupled with her incredible skill set, continues to push boundaries and redefine what it means to be a DJ in the modern era.</p>
    </div>
  </div>
</div> 
     </div>
    </div>
     <div class="col-sm-12" style="padding:2%">
    <h1 style="font-size:55px;font-weight:bold;color:330066" id="dance">Dancers</h1>
</div>
<div class="col-sm-2 col-md-2" style="margin-left:8%;">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/bdance1.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Nora Fatehi</h2>
      <p>Nora Fatehi is a Canadian-born Indian actress, model, dancer, and singer. She is known for her work in the Indian film industry, and has appeared in Hindi, Telugu, Tamil, and Malayalam films.</p>
      <p>Fatehi is a versatile performer, and is known for her energetic and graceful dance moves.</p>
    </div>
  </div>
</div> 
     </div> 
     <div class="col-sm-2 col-md-2" style="height:250px;margin-left:5%;">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/bdance4.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Prabhu Deva</h2>
      <p>Prabhu Deva has performed and designed dancing styles and has garnered two National Film Awards for Best Choreography.</p>
      <p>He is known for his innovative and energetic dance moves, and his work has been praised by critics and audiences alike. </p>
    </div>
  </div>
</div> 
     </div>
     <div class="col-sm-2 col-md-2" style="height:250px;margin-left:5%">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/bdance2.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Shakti Mohan</h2>
      <p>Shakti Mohan is a renowned Indian dancer, choreographer, and television personality who has mesmerized audiences with her incredible talent and versatility.</p>
      <p>Shakti has showcased her talent on several prestigious platforms, including Bollywood films and music videos.</p>
    </div>
  </div>
</div> 
     </div>
     <div class="col-sm-2 col-md-2" style="height:250px;margin-left:5%;margin-bottom:5%">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/bdance3.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Dharmesh</h2>
      <p>Dharmesh Yelande is a renowned choreographer hailing from India, known for his exceptional dance skills and unique style.</p>
      <p>Following his success on "Dance India Dance," Dharmesh went on to become a prominent figure in the Indian dance industry.</p>
    </div>
  </div>
</div> 
     </div>
     <div class="col-sm-2 col-md-2" style="margin-left:8%;">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/hdance1.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>BTS</h2>
      <p>BTS  also known as the Bangtan Boys, is a South Korean boy band formed in 2010. The band consists of Jin, Suga, J-Hope, RM, Jimin, V, and Jungkook,<br>  who co-write or co-produce much of their material. Originally a hip hop group, they expanded their musical style.</p>
    </div>
  </div>
</div> 
     </div> 
     <div class="col-sm-2 col-md-2" style="height:250px;margin-left:5%;">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/hdance2.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>BlackPink</h2>
      <p>Blackpink  is a South Korean girl group formed by YG Entertainment, consisting of members Jisoo, Jennie, Rosé, and Lisa. The group debuted in August 2016 with their single album Square One, which featured "Whistle" and "Boombayah", their first number-one entries on South Korea's Gaon Digital Chart and the US Billboard World Digital Song Sales chart, respectively.</p>
    </div>
  </div>
</div> 
     </div>
     <div class="col-sm-2 col-md-2" style="height:250px;margin-left:5%">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/hdance3.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>TXT</h2>
      <p>Itzy  is a South Korean girl group formed by JYP Entertainment and consisting of members Yeji, Lia, Ryujin, Chaeryeong, and Yuna. They debuted on February 12, 2019, with the release of their single album It'z Different. Their accolades include Rookie of the Year at the 34th Golden Disc Awards, New Artist of the Year at the 9th Gaon Chart Music Awards and 2019 Melon Music Awards.</p>
    </div>
  </div>
</div> 
     </div>
     <div class="col-sm-2 col-md-2" style="height:250px;margin-left:5%;margin-bottom:5%">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/hdance4.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>ITZY</h2>
      <p>Tomorrow X Together  commonly known as  is a South Korean boy band formed by Big Hit Entertainment, now known as Big Hit Music. The group consists of five members: Yeonjun, Soobin, Beomgyu, Taehyun, and HueningKai. br New Artist of the Year at the 9th Gaon Chart Music Awards and Best New Male Artist at the 2019 Mnet Asian Music Awards.</p>
    </div>
  </div>
</div> 
     </div>
    
  <div class="col-sm-12" style="padding-bottom:2%">
  <h1 style="font-size:55px;font-weight:bold;color:330066" id="anchor">Anchor/Emcee</h1>
</div>
<div class="col-sm-2 col-md-2" style="height:250px;margin-left:8%;">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/ac1.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Bharti Singh</h2>
      <p>Bharti Singh is an Indian comedian and television personality. She is known for her work in stand-up comedy, television shows, and films. </p>
      <p>Singh began her career as a stand-up comedian in 2008, and she quickly became one of the most popular comedians in India.</p>
    </div>
  </div>
</div> 
     </div> 
     <div class="col-sm-2 col-md-2" style="height:250px;margin-left:5%;">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/ac2.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Manish Paul</h2>
      <p>Manish Paul is an Indian actor and television presenter primarily known for his work in Bollywood.</p>
      <p>Manish Paul continues to entertain the audience with his charismatic presence and his knack for connecting with people.</p>
    </div>
  </div>
</div> 
     </div>
     <div class="col-sm-2 col-md-2" style="height:250px;margin-left:5%">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/ac3.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Mona singh</h2>
      <p>Mona Singh continues to captivate the audience with her magnetic persona and incredible acting prowess. </p>
      <p>Her dedication to her craft and ability to connect with her audience make her one of the most beloved and respected actors in the Indian television industry.</p>
    </div>
  </div>
</div> 
     </div>
     <div class="col-sm-2 col-md-2" style="height:250px;margin-left:5%">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/ac4.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Aditya Narayn</h2>
      <p> Narayan has also hosted several popular Indian television shows, including Indian Idol (2004-2005, 2010-2011, 2018-2019), Sa Re Ga Ma Pa (2007-2008, 2011-2012, 2016-2017), and Jhalak Dikhhla Jaa (2010).</p>
      <p> He has also starred in a few Bollywood films, including Shaapit (2010) and Dil Bechara (2020).</p>
    </div>
  </div>
</div> 
     </div>
  <div class="col-sm-12" style="padding:2%">
  <h1 style="font-size:55px;font-weight:bold;color:330066"id="sing">Singers</h1>
</div>
<div class="col-sm-2 col-md-2" style="margin-left:8%;">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/bollywood1.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Darshan Raval</h2>
      <p>Darshan Raval, an Indian singer, kickstarted his career in 2014 by participating in the reality show "India's Raw Star,"</p>
      <p>Darshan Raval has gained popularity and released several hit songs in various languages, including Hindi, Gujarati, and Telugu.</p>
    </div>
  </div>
</div> 
     </div> 
     <div class="col-sm-2 col-md-2" style="height:250px;margin-left:5%;">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/bollywood2.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Shirley Setiya</h2>
      <p>Shirley Setia is a singer and actress originally from Daman, India, who gained fame through her work in the Indian film and music industries.</p>
      <p>Setia's journey from a YouTube musician to an actress has garnered attention and recognition, making her a rising star in the Indian entertainment industry.</p>
    </div>
  </div>
</div> 
     </div>
     <div class="col-sm-2 col-md-2" style="height:250px;margin-left:5%">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/bollywood3.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Arijit singh</h2>
      <p>Arijit Singh is an Indian singer and music composer.
In January and February, six of his songs wereleased. He sang "Jhoome Jo Pathaan" for Pathaan, along with Sukriti Kakar, composed by Vishal–Shekhar and written by Kumaar. He sang "Chedkaniyan" for Shehzada, along with Nikhita Gandhi, composed by Pritam and written by Shloke Lal and IP Singh.</p>
    </div>
  </div>
</div> 
     </div>
     <div class="col-sm-2 col-md-2" style="height:250px;margin-left:5%;margin-bottom:5%">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/bollywood4.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Dhvani Bhanushali</h2>
      <p>Dhvani Bhanushali  is an Indian pop singer.
released a Gujarati song on the occasion of Navaratri 2021 Mehendi with 65 million views on her channel. Her Mera Yaar was released on 1 December 2021 with more than 50 million views. Her latest song, 'Candy' with Yuvan Shankar Raja released on Hitz Music's official YouTube channel.</p>
    </div>
  </div>
</div> 
     </div>
     <div class="col-sm-2 col-md-2" style="margin-left:8%;">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/hollywood1.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Justin Bieber</h2>
      <p>Justin Drew Bieber  is a Canadian singer. He is recognized for his genre-melding musicianship and global influence in modern-day popular music.Bieber was gaining recognition with the release of his debut seven-track EP My World (2009) and soon establishing himself as a teen idol.
In January 2023, Bieber sold his music publishing rights and recording catalogue shares, up to the end of 2021, </p>
    </div>
  </div>
</div> 
     </div> 
     <div class="col-sm-2 col-md-2" style="height:250px;margin-left:5%;">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/hollywood2.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Taylor Swift</h2>
      <p>Taylor Alison Swift  is an American singer-songwriter. Recognized for her genre-spanning discography, songwriting, and artistic reinventions, Swift is a prominent cultural figure of the 21st century and an influence on a generation of music artists.
Among her accolades are 12 Grammy Awards, including three Album of the Year wins</p>
    </div>
  </div>
</div> 
     </div>
     <div class="col-sm-2 col-md-2" style="height:250px;margin-left:5%">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/hollywood4.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Zayn Malik</h2>
      <p>Zain Javadd Malik  known professionally as Zayn Malik or simply Zayn, is an English singer. Malik auditioned as a solo contestant for the British music competition television series The X Factor in 2010. After being eliminated, he was brought back to the competition to form the five-piece boy band One Direction, which went on to become one of the best-selling boy bands of all time.</p>
    </div>
  </div>
</div> 
     </div>
     <div class="col-sm-2 col-md-2" style="height:250px;margin-left:5%;margin-bottom:5%">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/hollywood3.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Ariana Grande</h2>
      <p>Ariana Grande-Butera is an American singer, songwriter, and actress. <br> Grande has received numerous accolades throughout her career, including two Grammy Awards, one Brit Award, one Bambi Award, two Billboard Music Awards, three American Music Awards, nine MTV Video Music Awards, and 30 Guinness World Records.</p>
    </div>
  </div>
</div> 
     </div>
    <div class="col-sm-12"  style="padding-bottom:2%"><h1 style="font-size:55px;font-weight:bold;color:330066" id="comedian">Standup Comedian</h1>
</div>
<div class="col-sm-2 col-md-2" style="height:250px;margin-left:8%;">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/com2.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Anubhav Singh</h2>
      <p>Anubhav Singh Bassi is an Indian actor and stand-up comedian. His career as a standup comic started after an open mic in 2017. Bassi's YouTube videos have got 200 million+ views and he has over 4 million subscribers along with 2 million+ followers on Instagram.
</p>
    </div>
  </div>
</div> 
     </div> 
     <div class="col-sm-2 col-md-2" style="height:250px;margin-left:5%;">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/com3.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Aditi Mittal</h2>
      <p>Aditi Mittal is an Indian stand-up comedian, actress and writer.One of the first women to do stand-up comedy in India, Mittal has been rated amongst India's top 10 stand-up comedians by The Times of India.</p>
    </div>
  </div>
</div> 
     </div>
     <div class="col-sm-2 col-md-2" style="height:250px;margin-left:5%">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/com6.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>AbhiShek Upmanyu</h2>
      <p>Abhishek Upmanyu, one of India's leading standup comedian.
It’s been a busy start to the year for Upmanyu. Apart from his own special, he also directed Anubhav Singh Bassi’s Bas Kar Bassi, which spent two weeks as the #1 on Amazon Prime Video, beating Ajay Devgn starrer Drishyam to the top spot.  </p>
    </div>
  </div>
</div> 
     </div>
     <div class="col-sm-2 col-md-2" style="height:250px;margin-left:5%">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/com5.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Kaneez Surkha</h2>
      <p>Kaneez Surka is a South African improv artist, actress, comedian and a YouTuber of an Indian descent, who works mainly in India. She started her career with the show The Week That Wasn't. She has performed on various stand up platforms. </p>
    </div>
  </div>
</div> 
     </div>
     <div class="col-sm-12"  style="padding-bottom:2%;padding-top:2%">
     <h1 style="font-size:55px;font-weight:bold;color:330066" id="rj">Radio Jockey</h1>
</div>
<div class="col-sm-2 col-md-2" style="height:250px;margin-left:8%;">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/rj1.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Divya</h2>
      <p>Radio Divya Jyoti is an online radio station associated to Divya Jyoti Jagrati Sansthan, the non-profit organisation. Its programming includes Bhajan Pravah, Swar Sadhna, Chintan, Divya Raaga and News Hour.</p>
    </div>
  </div>
</div> 
     </div> 
     <div class="col-sm-2 col-md-2" style="height:250px;margin-left:5%;">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/rj3.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>King</h2>
      <p>King Radio Corporation was an avionics company started by Ed King. King was an engineering student at Kansas State University. In 1948 he founded his first company manufacturing components for Arthur A. Collins of Collins Radio. After selling his first venture in 1959, King founded King Radio in a rural area outside Kansas City.</p>
    </div>
  </div>
</div> 
     </div>
     <div class="col-sm-2 col-md-2" style="height:250px;margin-left:5%">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/rj2.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Megha</h2>
      <p>Megha has hosted over a 1800 events in India & abroad, over 2500 On-Air Radio shows with Radio Mirchi, 100+ TV shows with 7 national channels, Talk/Chat Shows on Youtube, Gaana, Facebook head-quarters, and most recently as a soft skills trainer and a digital marketer collaborating with top notch corporates & lifestyle brands.</p>
    </div>
  </div>
</div> 
     </div>
     <div class="col-sm-2 col-md-2" style="height:250px;margin-left:5%">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/rj4.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Anurag Pandey</h2>
      <p>Anuraag Pandey, encyclopedia of Bollywood and popularly known as Picture Pandey has mesmerized the audience on the radio for the past three decades with his voice.
His work has been recognized and he has been awarded with Rapa Award for "KWAHISH" Great Achievement Award Suvidha Gaurav Award </p>
    </div>
  </div>
</div> 
     </div>
     <div class="col-sm-12"  style="padding-bottom:2%;padding-top:2%"><h1 style="font-size:55px;font-weight:bold;color:330066" id="sand">Sand Artist</h1>
</div>
<div class="col-sm-2 col-md-2" style="height:250px;margin-left:8%;">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/sa1.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Vivek Patil</h2>
      <p>Vivek patil  participated in India’s Got Talent and animated the sand grains in front of the astonished audienc.
He has presented live sand art performances in cultural, sports, and corporate events.</p>
    </div>
  </div>
</div> 
     </div> 
     <div class="col-sm-2 col-md-2" style="height:250px;margin-left:5%;">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/sa3.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Ilana Yahav</h2>
      <p>Ilana Yahav is a sand animation artist from Israel. She has performed in front of live audiences,in video clips and in advertisements.</p>
    </div>
  </div>
</div> 
     </div>
     <div class="col-sm-2 col-md-2" style="height:250px;margin-left:5%">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/sa2.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Fatmir Mura</h2>
      <p>Fatmir Mura employed his art innovatively to present a show called “Save the World”; aiming to honor nature, the artist employed elements of nature, sand, and water, to create art that expresses the earth; in other words, he incorporated nature to speak of itself. </p>
    </div>
  </div>
</div> 
     </div>
     <div class="col-sm-2 col-md-2" style="height:250px;margin-left:5%">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/sa4.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Knesiya Simonva</h2>
      <p>Kseniya Oleksandrivna Paskar (Ukrainian: Ксенія Олександрівна Паскар; née Simonova; Ukrainian: Си́монова; born 22 April 1985) is a Ukrainian performance artist who does sand animation, graphic design, illustration, cinema, and literature.  She holds the title of Merited Artist of Ukraine and rose to prominence in 2009 after winning Ukraine's Got Talent.</p>
    </div>
  </div>
</div> 
     </div>
     <div class="col-sm-12"  style="padding-bottom:2%;padding-top:2%"><h1 style="font-size:55px;font-weight:bold;color:330066" id="music">Musical Bands</h1>
</div>
<div class="col-sm-2 col-md-2" style="height:250px;margin-left:8%;">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/mb1.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Cold Play</h2>
      <p>Coldplay are a British rock band formed in London in 1997. They consist of vocalist and pianist Chris Martin, guitarist Jonny Buckland, bassist Guy Berryman, drummer Will Champion and creative director Phil Harvey.They met at University College London and began playing music together from 1997 to 1998, initially calling themselves Big Fat Noises and later Starfish.</p>
    </div>
  </div>
</div> 
     </div> 
     <div class="col-sm-2 col-md-2" style="height:250px;margin-left:5%;">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/mb2.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Imagine Dragons</h2>
      <p>Imagine Dragons is an American pop rock band based in Las Vegas, Nevada, consisting of lead singer Dan Reynolds, guitarist Wayne Sermon, bassist Ben McKee and drummer Daniel Platzman.</p>
    </div>
  </div>
</div> 
     </div>
     <div class="col-sm-2 col-md-2" style="height:250px;margin-left:5%">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/mb3.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Avenged Sevenfold</h2>
      <p>Avenged Sevenfold (abbreviated as A7X) is an American heavy metal band from Huntington Beach, California, formed in 1999. The band's current lineup consists of vocalist M. Shadows, rhythm guitarist Zacky Vengeance, lead guitarist Synyster Gates, bassist Johnny Christ, and drummer Brooks Wackerman.</p>
    </div>
  </div>
</div> 
     </div>
     <div class="col-sm-2 col-md-2" style="height:250px;margin-left:5%">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/mb4.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Maroon 5</h2>
      <p>Maroon 5 is an American pop rock band from Los Angeles, California. It consists of lead vocalist Adam Levine, keyboardist and rhythm guitarist Jesse Carmichael, lead guitarist James Valentine, drummer Matt Flynn, keyboardist PJ Morton and multi-instrumentalist and bassist Sam Farrar.</p>
    </div>
  </div>
</div> 
     </div>
     <div class="col-sm-12" style="padding:2%;padding-top:2%"><h1 style="font-size:55px;font-weight:bold;color:330066" id="">Instrumentalist</h1>
</div>
<div class="col-sm-2 col-md-2" style="height:250px;margin-left:8%;">
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/ins1.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>omera Apollo</h2>
      <p>Omar Apolonio Velasco (born May 20, 1997), known professionally as Omar Apollo, is an American singer and songwriter. After signing a record deal with Warner Records, his debut album, Ivory, was released in 2022 to positive reviews, and earned him a Grammy Award nomination for Best New Artist at the 65th Annual Grammy Awards. Apollo sings in both English and Spanish.</p>
    </div>
  </div>
</div> 
     </div> 
     <div class="col-sm-2 col-md-2" style="height:250px;margin-left:5%;">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/ins2.png" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Domi & Jd</h2>
      <p>Domi and JD Beck (stylized as DOMi & JD BECK) are a jazz duo consisting of French keyboardist Domi Louna and American drummer JD Beck. The two met in 2018 and have since worked with Thundercat, Anderson .Paak, Herbie Hancock, Eric Andre, Ariana Grande, Earl Sweatshirt, Bruno Mars and many more. They released their first single, "Smile", and debut album, Not Tight, as a duo in 2022.</p>
    </div>
  </div>
</div> 
     </div>
     <div class="col-sm-2 col-md-2" style="height:250px;margin-left:5%">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/ins4.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Molly Tuttle</h2>
      <p>Molly Rose Tuttle (born January 14, 1993)is an American vocalist, songwriter, banjo player and guitarist, recording artist and teacher in the bluegrass tradition, noted for her flatpicking, clawhammer,and crosspickingguitar prowess. She has cited Laurie Lewis, Kathy Kallick, Alison Krauss and Hazel Dickens as role models.</p>
    </div>
  </div>
</div> 
     </div>
     <div class="col-sm-2 col-md-2" style="height:250px;margin-left:5%">
     <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <img src="img/ins5.jpg" height="270px" width="270px">
    </div>
    <div class="flip-box-back">
      <h2>Wet Leg</h2>
      <p>Wet Leg is a British indie rock group from the Isle of Wight, founded in 2019 by Rhian Teasdale and Hester Chambers. They debuted with the single "Chaise Longue" in 2021. Their self-titled debut album debuted in 2022 at number one on the UK Albums Chart, Australia's ARIA Albums Chart and the Irish Albums Chart. The album was shortlisted for the 2022 Mercury Prize.</p>
    </div>
  </div>
</div> 
     </div>
  </div>
  </div>
     <br> <br><br><br><br><br>
<?php @include 'footer.php'; ?> 
</body>
</html>