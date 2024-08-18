<?php
include "query.php";
$sql = "select * from newsTable order by newsId desc;";
$news = mysqli_query($con,$sql);
?>
<style>
    @media (max-width: 767px){.carousel-inner .carousel-item >div{display: none}.carousel-inner .carousel-item >div:first-child{display: block}}.carousel-inner .carousel-item.active, .carousel-inner .carousel-item-next, .carousel-inner .carousel-item-prev{display: flex}@media (min-width: 768px){.carousel-inner .carousel-item-end.active, .carousel-inner .carousel-item-next{transform: translateX(25%)}.carousel-inner .carousel-item-start.active, .carousel-inner .carousel-item-prev{transform: translateX(-25%)}}.carousel-inner .carousel-item-end, .carousel-inner .carousel-item-start{transform: translateX(0)}
</style>
<div class="container text-center my-3">
    <h2 class="font-weight-light">Top News</h2>
    <div class="row mx-auto my-auto justify-content-center">
        <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                
  <?php while($row = mysqli_fetch_assoc($news)){?>
    
                     <div class="carousel-item active" >
                    <div class="col-md-3">
                        <div class="card" style="height:350px" onclick="newsChanger('<?=$row["categories"]?>')">
                            <div class="card-img"> <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['newsImg']); ?>"
                                    class="img-fluid" style="height:350px;filter: brightness(70%);" > </div>
               
                                    <div class="card-img-overlay" style="color:white;font-size:medium;margin-top:130px"><?=$row["newsTitle"]?></div>
                        
                                </div>
                    </div>
                </div>

                <?php } ?>
                
                
                
              
               
            </div> <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button"
                data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </a> <a
                class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button"
                data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </a>
        </div>
    </div>
    <h5 class="mt-2 fw-light">Treading news</h5>
</div>

<script>
    let items = document.querySelectorAll('.carousel .carousel-item')

items.forEach((el) => {
    const minPerSlide = 4
    let next = el.nextElementSibling
    for (var i=1; i<minPerSlide; i++) {
        if (!next) {
            // wrap carousel by using first child
        	next = items[0]
      	}
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
    }
})
</script>