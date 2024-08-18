
<?php 
include "query.php";

$id=$_GET["id"];
$token=$_GET["token"];

$sql = "select * from newsTable where newsId='".$id."' and newsToken='".$token."';";
$news = mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>खबरीलाल-हिंदी समाचार</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/blogs/blog-3/assets/css/blog-3.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="js/index.js"></script>
<link rel="icon" type="image/x-icon" href="assets/logo.png">

<style>
  .icon{
    display: flex;
    justify-content: center;
    
  }
#ul{
list-style: none;
display: flex;
 margin-bottom: 0;
}
.social-icon{

height: 30px;
width: 30px;
display: flex;
justify-content: center;
align-items: center;
color: #fff;
font-size: 14px;
border-radius: 7px;
margin-right: 11px;
cursor: pointer;

}

.social-twitter{

background-color: #55acee;
}


.social-facebook{

background-color: #3b5999;
}


.social-linkedin{

background-color: #0077B5;
}


.social-google{

background-color: #dd4b39;
}

.social-whatsapp{
  background-color: springgreen;
}

.social-icon i{

transition: 0.4s all;
}

.social-icon:hover i{

transform: scale(1.1);

}


  .timg{
    margin-top: 10%;
    height: 308px;
    width: 50%;
  }
  .h2{
    margin-left: 12px;
    margin-top: 10px;
    font-size: x-large;
  }
  .p{
  
  margin: 5px;
    font-size: smaller;
    margin-top: 10px;

    overflow-x: auto;
  white-space: pre-wrap;
  white-space: -moz-pre-wrap;
  white-space: -pre-wrap;
  white-space: -o-pre-wrap;
  word-wrap: break-word;
  }
  
@media only screen and (max-width:500px) {
 
 .timg{
width: 100%;
margin-top: 32%;
 }
 
 
}
</style>
</head>
<body>
    <!-- navbar -->
 <!-- Navbar 1 - Bootstrap Brain Component -->
<nav class="navbar navbar-expand-md bg-light bsb-navbar bsb-navbar-hover bsb-navbar-caret fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <!-- <img src="./assets/img/bsb-logo.svg" alt="KHABRILAL Logo" width="135" height="44"> -->
      <p style="    font-size: -webkit-xxx-large;
   color:lightgrey;
    text-shadow:2px 3px grey">खबरीलाल</p>
    </a>
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
      </svg>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#business" onclick="newsChanger('business')">बिज़नेस</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#education" onclick="newsChanger('education')">एजुकेशन</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#entertenment" onclick="newsChanger('entertenment')">मनोरंजन</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#viralNews" onclick="newsChanger('viralNews')">वायरल न्यूज</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#!" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">लाइफस्टाइल </a>
            <ul class="dropdown-menu border-0 shadow bsb-zoomIn" aria-labelledby="accountDropdown">
              <li><a class="dropdown-item" href="#travell" onclick="newsChanger('travell')">ट्रैवल</a></li>
              <li><a class="dropdown-item" href="#fashion" onclick="newsChanger('fashion')">फैशन</a></li>
              <li><a class="dropdown-item" href="#food" onclick="newsChanger('food')">फूड</a></li>

              
              <li><a class="dropdown-item" href="#health-bewty" onclick="newsChanger('health')">हैल्थ & ब्यूटी</a></li>
            </ul>
          </li>
          
         
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#!" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">अन्य</a>
            <ul class="dropdown-menu border-0 shadow bsb-zoomIn" aria-labelledby="servicesDropdown">
              <li><a class="dropdown-item" href="#national" onclick="newsChanger('national')">राष्टीय समाचार</a></li>
              <li><a class="dropdown-item" href="#regional" onclick="newsChanger('regional')">प्रादेशिक</a></li>
              <li><a class="dropdown-item" href="#politics" onclick="newsChanger('politics')">राजनिती</a></li>
              <li><a class="dropdown-item" href="#automobile" onclick="newsChanger('automobile')">ऑटोमोबाइल</a></li>
              <li><a class="dropdown-item" href="#technology" onclick="newsChanger('technology')">टेक्नोलॉजी</a></li>
              <li><a class="dropdown-item" href="#religion" onclick="newsChanger('religion')">धर्म</a></li>
              <li><a class="dropdown-item" href="#crime" onclick="newsChanger('crime')">जुर्म</a></li>
              <li><a class="dropdown-item" href="#world" onclick="newsChanger('world')">वर्ल्ड</a></li>
              <li><a class="dropdown-item" href="#sports" onclick="newsChanger('sports')">स्पोर्ट्स</a></li>
              <li><a class="dropdown-item" href="#agriculture" onclick="newsChanger('agriculture')">कृषि</a></li>
              <li><a class="dropdown-item" href="#horoscope" onclick="newsChanger('horoscope')">राशिफल</a></li>
              <li><a class="dropdown-item" href="#science" onclick="newsChanger('science')">साइंस</a></li>



            </ul>
          </li>
         
          <li class="nav-item">
          <a class="nav-link" href="#contact" onclick="pageChanger('contact')">संपर्क</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<!-- div -->

<div id="ajax">
<?php
    $rowcount=mysqli_num_rows($news);
   if($rowcount!== 0){
    while($row = mysqli_fetch_assoc($news)){
     
      ?>
  <center>
<img class="timg" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['newsImg']); ?>" alt="<?=$row["imgAlt"]?>"><br>
<h2 class="h2"><?=$row["newsTitle"]?></h2><br>

</center>
<a class="fs-7 link-secondary text-decoration-none d-flex align-items-center" style="margin-left: 11%;
    margin-bottom: 10px;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                        <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                        <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                      </svg>
                      <span class="ms-2 fs-7"><?= $row["newsDate"]?></span>
                    </a>

<div class="icon">
<h4>Share</h4>
<ul id="ul">
<a href="https://www.facebook.com/sharer/sharer.php?u=http://localhost/khabarilal/content.php?id=<?=$row["newsId"]?>&token=<?=$row["newsToken"]?>" target="_blank"><li><span class="social-icon social-facebook"><i class="fa fa-facebook"></i></span></li></a>
<a href="https://plus.google.com/share?url=http://localhost/khabarilal/content.php?id=<?=$row["newsId"]?>&token=<?=$row["newsToken"]?>" target="_blank"><li><span class="social-icon social-google"><i class="fa fa-google"></i></span></li></a>
<a href="https://www.linkedin.com/shareArticle?mini=true&url=http://localhost/khabarilal/content.php?id=<?=$row["newsId"]?>&token=<?=$row["newsToken"]?>&title=<?=$row["newsTitle"]?>" target="_blank"><li><span class="social-icon social-linkedin"><i class="fa fa-linkedin"></i></span></li></a>
<a href="https://wa.me/?text=<?=$row["newsTitle"]?>%20http://localhost/khabarilal/content.php?id=<?=$row["newsId"]?>&token=<?=$row["newsToken"]?>" target="_blank"><li><span class="social-icon social-whatsapp" ><i class="fa fa-whatsapp"></i></span></li></a>
<a href="https://twitter.com/intent/tweet?text=<?=$row["newsTitle"]?>&url=http://localhost/khabarilal/content.php?id=<?=$row["newsId"]?>&token=<?=$row["newsToken"]?>" target="_blank"><li><span class="social-icon social-twitter"><i class="fa fa-twitter"></i></span></li></a>
</ul>

</div><hr>

<pre class="p"><?=$row["newsText"]?></pre>
<div class="container">
  <h3>LEAVE A COMMENT</h3>
<form method="post">
<div class="mb-3 mt-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email"  class="form-control" id="email" placeholder="Enter email" name="email">
  </div>
  <div class="mb-3 mt-3">
  <label for="comment">Comments:</label>
  <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
  </div>
  <button  class="btn btn-outline-secondary">Submit</button>
</form>
</div>
<?php }}else{?>

<h5  class="mt-2 fw-light">Record Not Found!</h5>
<?php } ?>
</div>
<?php
include "footer.php";
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>