<?php
include './db-php/upload-img.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tải hình chủ đề</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid d-flex justify-content-center">
        <form class="form-horizontal text-dark" action method="post" enctype="multipart/form-data" style="width: 50%;
    background-color: #F9F9F9;
    padding: 25px;
    border-radius: 15px;
    box-shadow: 10px 10px 5px #aaaaaa;">
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
            <div class="form-group text-center ">
                <button name="upload-button" class="text-center rounded border bg-success text-light" type="submit">Tải lên</button>
            </div>
        </form>
        <link href='https://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700' rel='stylesheet' type='text/css'>
    </div>
    <div class="container">
        <!-- <?php include './db-php/query-imge-carousel.php'; ?> -->
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>