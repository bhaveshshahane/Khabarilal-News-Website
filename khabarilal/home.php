
<body>
<?php 
    include "top.php";
  ?>
   <style>
    .heading{
        display: flex;
        justify-content: space-between;
    }
    .heading a{
        text-decoration: none;
        color: black;
        font-size: 1.5rem;
    }
   </style>
 <div class="heading"><h2>वायरल न्यूज</h2><a href="#viralNews" onclick="newsChanger('viralNews')">show more</a></div>
<hr>
  <?php 
      include "news/viralNews.php";
  ?>
  
 <div class="heading"><h2>Our youtube channels</h2><a href="#allvideo" onclick="pageChanger('allvideo')">show more</a></div>

  <hr>
  <?php 
      include "video.php";
  ?>

<div class="heading"><h2>मनोरंजन</h2><a href="#entertenment" onclick="newsChanger('entertenment')">show more</a></div>

<hr>
  <?php 
      include "news/entertenment.php";
  ?>
 <div class="heading"><h2>राष्टीय समाचार</h2><a href="#national" onclick="newsChanger('national')">show more</a></div>

<hr>
  <?php 
      include "news/national.php";
  ?>

<div class="heading"><h2>राजनिती</h2><a href="#polotics" onclick="newsChanger('politics')">show more</a></div>

<hr>
  <?php 
      include "news/politics.php";
  ?>

<div class="heading"><h2>स्पोर्ट्स</h2><a href="#sports" onclick="newsChanger('sports')">show more</a></div>

<hr>
  <?php 
      include "news/sports.php";
  ?>
</body>
