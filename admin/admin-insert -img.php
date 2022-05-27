<?php
include './db-php/upload-img.php';
?>
<!doctype html>
<html lang="en">

<head>
    <title>Chỉnh sửa hình ảnh</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style2.css">
</head>

<body>
    <div class="container-fluid ">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-10">
                <div class="d-flex justify-content-center">
                    <form class="form text-dark m-5" action method="post" enctype="multipart/form-data">
                        <h1><strong>Tải hình ảnh trang chủ</strong></h1>
                        <div class="form-group">
                            <label for="title">Tên hình <span>Tên hình gồm các kí tự: *, _, -, chữ và số</span></label>
                            <input type="text" name="title" id="title" class="form-controll rounded border text-dark" />
                        </div>
                        <div class="form-group file-area">
                            <label for="images">Tải hình lên <span>Nên chọn tệp hình ảnh có kích thước 1400x600</span></label>
                            <input type="file" name="file" id="images" required="required" multiple="multiple" />
                            <div class="file-dummy rounded border">
                                <div class="success">Tải thành công</div>
                                <div class="default">Vui lòng chọn lại tệp hình ảnh</div>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button name="upload-button" class="text-center rounded border bg-success text-light" type="submit">Tải lên</button>
                        </div>
                    </form>
                </div>
                <div class="container mt-3">
                    <div id="cards" class="card-group row text-center">
                         <?php include './db-php/query-imge-carousel.php'; ?>
                    </div>
                </div>
                <link href='https://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700' rel='stylesheet' type='text/css'>
            </div>
        </div>
    </div>
    <!-- include javascript  -->
    <!-- jquery  -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>