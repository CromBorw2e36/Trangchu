<?php
include './db-php/queryphp.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang Chủ</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <!-- carousel silde  -->
    <header>
        <div id="carouselExampleIndicators" class="carousel slide carouselTrangChu" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo $arrayImg[0]['imageURL'] ?>" class="d-block w-100" alt="<?php echo $arrayImg[1]['name'] ?>">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo $arrayImg[1]['imageURL'] ?>" class="d-block w-100" alt="<?php echo $arrayImg[1]['name'] ?>">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo $arrayImg[2]['imageURL'] ?>" class="d-block w-100" alt="<?php echo $arrayImg[2]['name'] ?>">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>
    <!-- bieu tuong chat luong day kem  -->
    <!-- cần chỉnh sửa icon khi thu nhỏ tỉ lệ khung hình -->
    <section class="container">
        <div class="container text-center mt-4">
            <div class="row">
                <div class="col-4">
                    <div class="row">
                        <div class="col-12"><img class="rounded-circle" alt="Uy tín" src="https://top1quangnam.com/wp-content/uploads/2021/06/UY-TIN-2.png" width="80" height="80"></div>
                        <div class="col-lg-12 col-12 ml-1">
                            <h4>Uy tín</h4>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="row">
                        <div class="col-12"><img class="rounded-circle" alt="Tận tâm" src="http://cityhomes.net.vn/wp-content/uploads/2019/06/icon-tan-tam.png" width="80" height="80"></div>
                        <div class="col-lg-12 col-12 ml-1">
                            <h4>Tận tâm</h4>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="row">
                        <div class="col-lg-12 col-12"><img class="rounded-circle" alt="Chuyên nghiệp" src="https://binbrand.vn/upload/images/1Thiet%20ke%20Logo/top%20c%C3%B4ng%20ty%20thi%E1%BA%BFt%20k%E1%BA%BF%20logo%20chuy%C3%AAn%20nghi%E1%BB%87p.png" width="80" height="80"></div>
                        <div class="col-lg-12 col-12 ml-1">
                            <h4>Chuyên nghiệp</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- lop gia su hien co moi nhat  -->
    <section>
        <hr>
        <h2 class="text-center mb-5">Lớp gia sư hiện có mới nhất</h2>
        <div class="container">
            <div class="row">
                <div class="col-3 pb-1 pb-md-0">
                    <div class="card">
                        <img class="card-img" src="https://vcdn-vnexpress.vnecdn.net/2021/11/23/3f5a6625-jpeg-9062-1637677284-8914-2910-1637686227.jpg" alt="Card image cap" style="height: 150px">
                        <div class="card-body">
                            <h5 class="card-title text-center ">Card title</h5>
                            <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary ">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 pb-1 pb-md-0">
                    <div class="card">
                        <img class="card-img-top" src="images/400X200.gif" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center ">Card title</h5>
                            <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary ">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 pb-1 pb-md-0">
                    <div class="card">
                        <img class="card-img-top" src="images/400X200.gif" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center ">Card title</h5>
                            <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary ">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 pb-1 pb-md-0">
                    <div class="card">
                        <img class="card-img-top" src="images/400X200.gif" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center ">Card title</h5>
                            <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary ">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-3 pb-1 pb-md-0">
                    <div class="card">
                        <img class="card-img-top" src="images/400X200.gif" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center ">Card title</h5>
                            <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary ">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 pb-1 pb-md-0">
                    <div class="card">
                        <img class="card-img-top" src="images/400X200.gif" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center ">Card title</h5>
                            <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary ">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 pb-1 pb-md-0">
                    <div class="card">
                        <img class="card-img-top" src="images/400X200.gif" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center ">Card title</h5>
                            <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary ">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 pb-1 pb-md-0">
                    <div class="card">
                        <img class="card-img-top" src="images/400X200.gif" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center ">Card title</h5>
                            <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary ">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-3 pb-1 pb-md-0">
                    <div class="card">
                        <img class="card-img-top" src="images/400X200.gif" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center ">Card title</h5>
                            <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary ">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 pb-1 pb-md-0">
                    <div class="card">
                        <img class="card-img-top" src="images/400X200.gif" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center ">Card title</h5>
                            <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary ">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 pb-1 pb-md-0">
                    <div class="card">
                        <img class="card-img-top" src="images/400X200.gif" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center ">Card title</h5>
                            <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary ">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 pb-1 pb-md-0">
                    <div class="card">
                        <img class="card-img-top" src="images/400X200.gif" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center ">Card title</h5>
                            <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary ">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gioi thieu gia su day kem tai nha la gi -->
    <section class="mt-5 d-flex align-items-center justify-content-center" style="height: 300px; background-color: #A1E3D8;">
        <div class="jumbotron text-center mt-2">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>Gia sư dạy kèm tại nhà là gì?</h1>
                        <p>Trang "gia sư tại nhà" là trang được xây dựng với nhu cầu có thể giúp con em các phụ huynh có thể học tập đạt thành tích tốt. Sự uy tín trong kiểm duyệt, tính chuyên nghiệp của các gia sư có tại đây là đại diện cho toàn bộ bộ mặt của trang.</p>
                        <p><a id="buttonClickScroll" class="btn btn-primary btn-lg smoothScroll" href="#subInfor" role="button">Xem thêm »</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- thong tin loi ich tu viec hoc day kem  -->
    <section>
        <h2 id="subInfor" class="text-center mt-4 mb-5">LỢI ÍCH VIỆC HỌC DẠY KÈM</h2>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-6">
                    <h3 class='text-center mb-5'>dạy học một-một</h3>
                    <p class="text-justify">Một điểm tích cực từ việc học gia sư là khoảng thời gian một học sinh sẽ nhận được từ một giáo viên. Vì học gia sư thường trên cơ sở một-một, giáo viên có thể tập trung sự chú ý của họ vào một học sinh. Điều này rõ ràng là một lợi thế rất lớn so với các lớp học từ 20 - 30 học sinh, nơi mà thời gian của giáo viên được chia ra và cá nhân có thể dễ dàng bị lạc trong đám đông. Với ít phiền nhiễu, người dạy kèm có thể đánh giá tốt hơn và tập trung cải thiện các điểm yếu của học sinh.</p>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <h3 class='text-center mb-5'>học sinh tự tin hơn</h3>
                    <p class="text-justify">Vì học gia sư thường là một-một, nên những người dạy kèm và học sinh có thể làm việc chặt chẽ hơn và phát triển mối quan hệ tốt hơn. Đối với những học sinh nhút nhát, trong môi trường học tập với ít người hơn cũng có thể giúp họ chứng tỏ bản thân vì ít chịu áp lực từ bạn bè.</p>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <h3 class='text-center mb-3'>hoàn thành hiệu quả bài tập</h3>
                    <p class="text-justify">Bài tập ở nhà có thể rất nhàm chán và đôi khi gây khó chịu cho học sinh. Gia sư dạy kèm có thể giúp học sinh tập trung và sẽ đảm bảo rằng bài tập về nhà không chỉ được hoàn thành tốt hơn mà còn giúp học sinh hiểu được những điều cần học từ những bài tập đó. Tương tự, gia sư có thể mang lại hiệu quả trong việc chuẩn bị bài kiểm tra. Những lời khuyên và sự hỗ trợ mà họ cung cấp có thể khắc phục những điểm yếu trong kiến thức của học sinh.</p>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <h3 class='text-center mb-3'>linh hoạt và dễ dàng</h3>
                    <p class="text-justify">Dạy kèm tại nhà ngày càng trở nên linh hoạt và thuận tiện. Người dạy kèm thường có thể đến nhà học sinh, giúp tiết kiệm rất nhiều thời gian di chuyển cho cả học sinh và phụ huynh. Việc tổ chức một thời khóa biểu thích hợp cũng dễ dàng đạt được. Ngoài ra, với sự ra đời của hình thức gia sư trực tuyến, học sinh có thể học ở bất cứ đâu và mọi lúc họ muốn.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- danh gia cua moi nguoi ve trang gia su day kem  -->
    <section style="background-color: #6a41ed; color: #FFFFFF;">
        <div id="carouselDanhGiaPhuHuynh" class="carousel slide carouselDanhGiaPhuHuynh" data-ride="carousel">
            <h2 class="text-center pt-5">Mọi người nghĩ gì về trang dạy kèm tại nhà?</h2>
            <div class="carousel-inner">
                <div class="carousel-item active mt-2">
                    <div class="row d-block w-100 ">
                        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="<?php echo $link ?>" data-holder-rendered="true">
                            <h3>Lorem ipsum</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item mt-2">
                    <div class="row d-block w-100 ">
                        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="<?php echo $link ?>" data-holder-rendered="true">
                            <h3>Lorem ipsum</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item mt-2">
                    <div class="row d-block w-100 ">
                        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                            <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="<?php echo $link ?>" data-holder-rendered="true">
                            <h3>Lorem ipsum</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- bootstrap 4 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- Smooth Scrolling  -->
    <script src="js/scroll.js"></script>
</body>

</html>