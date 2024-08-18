<?php
include "query.php";
$sql = "select * from newsTable where newsYt!=' ' order by newsId desc";
$video = mysqli_query($con,$sql);
?>
  <style>
    #vid{
        max-height: 100%;
    max-width: 100%;
    display: flex;
    justify-content: center;
    align-content: center;
    flex-wrap: wrap;
    margin-top: 7%;
    }
    .ratio{
       height: 300px;
        width: 160px;
        margin: 10px;
    }
    
  @media only screen and (max-width:500px) {
    #vid{
        max-height: 100%;
    max-width: 100%;
    display: flex;
    justify-content: center;
    align-content: center;
    margin-top: 19%;
 
    }
    .ratio{
       height: 300px;
        width: 130px;
        margin: 10px;

    }
}
  </style>

<div id="vid">
<?php while($row = mysqli_fetch_assoc($video)){?>
 
            <iframe class="ratio" id="<?= $row["newsId"]?>" src="<?= $row["newsYt"]?>" title="YouTube video" allowfullscreen></iframe>
            
            <?php } ?>

        </div>
     
   
