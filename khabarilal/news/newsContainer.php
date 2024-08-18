<?php

include "../query.php";

$cont = $_GET["process"];

$sql = "select * from newsTable where categories='".$cont."' order by newsId desc;";
$news = mysqli_query($con,$sql);
?>

<style>
.row{
  margin-top: 90px;
  
}
@media only screen and (max-width:500px) {
 
    .row{
  display: flex;
justify-content: center;
    }
   
}
  </style>
  
<section class="py-3 py-md-5">
  
    <div class="container overflow-hidden">
      <div class="row gy-4 gy-lg-0">

      <?php
    $rowcount=mysqli_num_rows($news);
   if($rowcount!==0){
    while($row = mysqli_fetch_assoc($news)){
      ?>


        <div class="col-12 col-lg-4" style="width:270px;">
          <article>
            <div class="card border-0">
              <figure class="card-img-top m-0 overflow-hidden bsb-overlay-hover">
                <form action="./content.php" method="get">
                  <input type="hidden" name="id" value="<?= $row["newsId"]?>">
                  <input type="hidden" name="token" value="<?= $row["newsToken"]?>">

                <button style="border:none"  type="submit">
                  <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['newsImg']); ?>" alt="<?=$row["imgAlt"]?>">
                </button>
                </form>
                <figcaption>
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye text-white bsb-hover-fadeInLeft" viewBox="0 0 16 16">
                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                  </svg>
                  
                  <h4 class="h6 text-white bsb-hover-fadeInRight mt-2" >Read More</h4>
                 
                </figcaption>
              </figure>
              <div class="card-body border bg-white p-4">
                <div class="entry-header mb-3">
                  <ul class="entry-meta list-unstyled d-flex mb-2">
                    <li>
                      <a class="link-primary text-decoration-none" href="#!" onclick="newsChanger('<?=$row["categories"]?>')"><?=$row["categories"]?></a>
                    </li>
                  </ul>
                  <h2 class="card-title entry-title h4 mb-0">
                    <a class="link-dark text-decoration-none" style="font-size: smaller;" href="#!"><?= $row["newsTitle"]?></a>
                  </h2>
                </div>
              </div>

              <div class="card-footer border border-top-0 bg-white p-4">
                <ul class="entry-meta list-unstyled d-flex align-items-center m-0">
                  <li>
                    <a class="fs-7 link-secondary text-decoration-none d-flex align-items-center" href="#!">
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                        <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                        <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                      </svg>
                      <span class="ms-2 fs-7"><?= $row["newsDate"]?></span>
                    </a>
                  </li>
                  
                </ul>
              </div>
            </div>
          </article>
        </div>

        <?php }}else{?>

<h5 id="h5" class="mt-2 fw-light">Record Not Found!</h5>
<?php } ?>

     </div>
    </div>
  </section>
