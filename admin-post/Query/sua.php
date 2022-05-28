<?php
include './db.php';
//chức năng edit
$id = "";
$title = "";
$content = "";
$kind = "";
$statusSelect = "";

if(isset($_GET['idEdit'])){
    $id = $_GET['idEdit'];
    $Select = "SELECT * FROM `admin_post` WHERE id = $id";
    $result = $conn->query($Select);
    //gán giá trị cho từng biến để dễ truy vấn hơn
    $row = $result->fetch_assoc();
    $title = $row['title'];
    $content = $row['content'];
    $kind = $row['kind'];
    $statusSelect = $row['status'];
}

//chức năng xóa
if(isset($_GET['idDelete'])){
    $idDelete = $_GET['idDelete'];
    $Delete = "DELETE FROM admin_post WHERE id = ".$idDelete;
    $conn->query($Delete);
}
if(isset($_POST['SaveEdit'])){
    QueryInsert($conn,$id,$statusSelect);
    header('location: ../index.php');
}
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
    #header
    <section class="container-fluid d-flex justify-content-center text-center">
        <form action="" method="POST">
            <div class="row container">
                <div class="col-8  p-4">
                    <div class="row mt-3">
                        <input name="NameContent" class="col-12 rounded-3" type="text" placeholder='Tiêu đề bài viết' value="<?php echo $title ?>">
                    </div>
                    <div class="row mt-3">
                        <textarea class="col-12" name="textareaContent" id="textarea" placeholder="Nội dung"><?php echo $content ?></textarea>
                    </div>
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
                                <div>
                                    <div>
                                        <p>
                                            Trạng thái:
                                            <b>
                                                <snap>
                                                    <input type="checkbox" name="status" id="status">
                                                    <label for="status">Hiểu thị ở trang chủ</label>
                                                </snap>
                                            </b>
                                        <p>Quyền riêng tư: <b>
                                                <snap>Công khai</snap>
                                            </b>
                                            <a href="#">chỉnh sửa</a>
                                        </p>
                                        <p>Ngày công bố: <b>
                                                <snap>
                                                    <?php
                                                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                                                    $date = date('d/m/Y', time());
                                                    echo $date;
                                                    ?>
                                                </snap>
                                            </b><a href="#">chỉnh sửa</a></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-end">
                                    <!-- dẫn đến trang khác cho xem sau khi cập nhật lại -> trang đó làm mới thì sẽ chuyển sang trang đầu tiền  -->
                                    <input type="submit" name="SaveEdit" class="btn btn-success" value="Lưu lại">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 p-1 rounded-2 border shadow">
                            <h6 class="text-center"><b>Loại danh sách bài viết</b></h6>
                            <hr>
                            <ul class="list-unstyled p-3 pt-0">
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="radioKind" value="Trích dẫn" id="radioKind1" <?php if ($kind == 'Trích dẫn') echo 'checked' ?>>
                                    <label class="form-check-label" for="radioKind1">Trích dẫn</label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="radioKind" value="Bài viết" id="radioKind2" <?php if ($kind == 'Bài viết') echo 'checked' ?>>
                                    <label class="form-check-label" for="radioKind2">Bài viết</label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="radioKind" value="Hướng dẫn" id="radioKind3" <?php if ($kind == 'Hướng dẫn') echo 'checked' ?>>
                                    <label class="form-check-label" for="radioKind3">Hướng dẫn</label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="radioKind" value="Thông tin chung" id="radioKind4" <?php if ($kind == 'Thông tin chung') echo 'checked' ?>>
                                    <label class="form-check-label" for="radioKind4">Thông tin chung</label>
                                </li>
                                <li class="form-check">
                                    <input class="form-check-input" type="radio" name="radioKind" value="Giới thiệu" id="radioKind5" <?php if ($kind == 'Giới thiệu') echo 'checked' ?>>
                                    <label class="form-check-label" for="radioKind5">Giới thiệu</label>
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
                                    FillPostToTable($conn,$linkEditpageEdit, $linkEditpgaeDelete);
                                ?>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end pb-3">
                            <input class="m-1 btn btn-success" type="button" value="Xóa" name="delete">
                            <input class="m-1 btn btn-success" type="button" value="Hiển thị" name="showInfo">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    #footer
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>