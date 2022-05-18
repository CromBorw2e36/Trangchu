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
                    <div class="col-12 bg-secondary rounded-2 p-1 mb-3">
                        <div>
                            <p><b>Công bố</b></p>
                        </div>
                        <div>
                            <div>
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
                            <div class="d-flex">
                                <input type="submit" value="Công bố" name="submit" class="btn btn-primary justyfi">
                            </div>

                        </div>

                    </div>
                    <div class="col-12 p-1 rounded-2 bg-success">
                        <p class="text-center">Loại danh sách bài viết</p>
                    </div>
                </div>
            </div>
            <div class="bg-warning p-1 rounded-2">
                <div>
                    <?php include './overview.php'; ?>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>