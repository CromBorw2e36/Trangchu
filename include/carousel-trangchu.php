<div id="carouselExampleControls" class="carousel slide carouselTrangChu" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleControls" data-slide-to="1"></li>
        <li data-target="#carouselExampleControls" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner img-fluid">
        <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo $arrayImg[0]['imageURL'] ?>" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo $arrayImg[1]['imageURL'] ?>" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo $arrayImg[2]['imageURL'] ?>" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>