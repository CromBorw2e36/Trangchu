<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viết bài viết</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.0.2/tinymce.min.js" integrity="sha512-Cwez4r594AFwCqWzXklkW90mGiJCKJBhcFb8GsWWtb0coKuR9uv1ozODWidI/8Lr9iKunYaXLPf6VJtL3rXzyQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            menubar: false
        });
    </script>
</head>

<body>
    <section class="container-fluid d-flex justify-content-center text-center">
    <div class="row container">
            <div class="col-8  p-4">
                <form action="" method="POST">
                    <div class="row mt-3">
                        <input name="NameContent" class="col-12 rounded-3" type="text" placeholder="Thêm tiêu đề" value="Học dạy kèm có vấn đề khó gì không">
                    </div>
                    <div class="row mt-3">
                        <textarea class="col-12" name="textareaContent" id="textarea" placeholder="Nội dung"></textarea>
                    </div>
                </form>
            </div>
            <div class="col-4 p-4">
                <div class="row text-start">
                    <div class="col-12 border shadow rounded-2 p-1 mb-3">
                        <div class="text-center p-1 pb-0">
                            <h6>
                                <b>
                                    Công bố
                                </b>
                            </h6>
                        </div>
                        <hr>
                        <div class="p-3 pt-0">
                            <div class="d-flex justify-content-between pb-2">
                                <input type="button" value="Lưu lại">
                                <input type="button" value="Xem trước">
                            </div>
                            <div>
                                <div>
                                    <p>Trang thái: <b>
                                            <snap></snap>
                                        </b><a href="#">chỉnh sửa</a></p>
                                    <p>Quyền riêng tư: <b>
                                            <snap></snap>
                                        </b><a href="#">chỉnh sửa</a></p>
                                    <p>Ngày công bố: <b>
                                            <snap></snap>
                                        </b><a href="#">chỉnh sửa</a></p>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-end">
                                <input type="submit" value="Công bố" name="submit" class="btn btn-primary justyfi">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 p-1 rounded-2 border shadow">
                        <h6 class="text-center"><b>Loại danh sách bài viết</b></h6>
                        <hr>
                        <ul class="list-unstyled p-3 pt-0">
                            <li class="form-check">
                                <input class="form-check-input" type="radio" name="radioKind" value="" id="radioKind" checked>
                                <label class="form-check-label" for="radioKind">Trích dẫn</label>
                            </li>
                            <li class="form-check">
                                <input class="form-check-input" type="radio" name="radioKind" value="" id="radioKind">
                                <label class="form-check-label" for="radioKind">Bài viết</label>
                            </li>
                            <li class="form-check">
                                <input class="form-check-input" type="radio" name="radioKind" value="" id="radioKind">
                                <label class="form-check-label" for="radioKind">Hướng dẫn</label>
                            </li>
                            <li class="form-check">
                                <input class="form-check-input" type="radio" name="radioKind" value="" id="radioKind">
                                <label class="form-check-label" for="radioKind">Thông tin chung</label>
                            </li>
                            <li class="form-check">
                                <input class="form-check-input" type="radio" name="radioKind" value="" id="radioKind">
                                <label class="form-check-label" for="radioKind">Giới thiệu</label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="border shadow p-1 rounded-2">
                <!-- DOM cái này bằng PHP -->
                <div class="container w-70">
                    <h4 class="text-center">Danh sách bài đăng</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Số thứ tự</th>
                                <th scope="col">Tiêu đề</th>
                                <th scope="col">Thời gian</th>
                                <th scope="col">Trạng thái</th>
                                <th scope="col">Thể loại</th>
                                </th>
                                <th scope="col"></th>
                                <th scope="col">Chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                include './Query/db.php';
                                FillPostToTable($conn);
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
        #footer
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>