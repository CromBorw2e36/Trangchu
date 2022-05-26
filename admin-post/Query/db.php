<?php

function connDB()
{
    $localhost = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'trangchu_carousel';

    $conn = new mysqli($localhost, $username, $password, $dbname);
    return $conn;
}
$conn = connDB();
function FillPostToTable($conn)
{
    if (!($conn->connect_errno)) {
        //biến đếm số lượng danh sách trong bảng
        $countNumber = 1;
        $querySelect = 'SELECT id, title, content, status, time, kind FROM admin_post ORDER BY time DESC';
        $result = $conn->query($querySelect);
        if (($result->num_rows) > 0) {
            while ($row = $result->fetch_assoc()) {
?>
                <tr>
                    <th scope="row">
                        <p>
                            <?php echo $countNumber++ ?>
                        </p>
                    </th>
                    <td>
                        <?php echo $row['title'] ?>
                    </td>
                    <td>
                        <?php echo $row['time'] ?>
                    </td>
                    <td>
                        <?php echo $row['status'] ?>
                    </td>
                    <td>
                        <?php echo $row['kind'] ?>
                    </td>
                    <td>
                        <!-- Đường dẫn này sẽ có thông tin cơ bản của phương thức get 
                     -->
                        <a href="#">Chi tiết</a>
                    </td>
                    <td class="text-center">
                        <input class="form-check-input" type="checkbox" value="" id="checkboxPost">
                    </td>
                </tr>
<?php
            }
        }
    } else {
        exit();
    }
}

//post bai viet
function UploadPost($conn)
{
    $NameContent = "";
    $textareaContent = "";
    $radioKind = "";
    $status = 0;

    //thông báo
    $notification = "";
    if (isset($_POST['radioKind'])) {
        //thông báo chưa chọn radio check box
        if (!empty($_POST['NameContent'])) {
            if (!empty($_POST['textareaContent'])) {
                //nên kiểm tra số lượng kí tự bị giới hạn trong này
                $NameContent = $_POST['NameContent'];
                $textareaContent = $_POST['textareaContent'];
                $radioKind = $_POST['radioKind'];
                if(isset($_POST['Posts'])){
                    // status trạng thái 0 là chưa công bố, trạng thái 1 là hiển thị ra trang chủ
                    $status = 1;
                }
                //code insert vao day
                $queryInsert  = "INSERT INTO admin_post(id, title, content, status, time, kind) VALUES (NULL,'" . $NameContent . "','" . $textareaContent . "'," . $status . ",CURRENT_TIMESTAMP(),'" . $radioKind . "');";
                $conn->query($queryInsert);
                //tại vì đây là post nên nó sẽ hiển thị ở trang chủ luôn nên status sẽ là 1
                $notification = "Thêm vào db thành công";
            } else {
                // Thông báo nội dung chưa nhập
                $notification  = "Nội dung chưa nhập";
            }
        } else {
            // Thông báo chưa nhập tiêu đề 
            $notification = "Tiêu đề chưa được nhập";
        }
    }
    else{
        $notification = "radio checkbox chưa được đánh dấu";
    }
}


//chỉnh sửa bài Viết


//truy vấn bài viết từ cơ sở dữ liệu lên.
function QueryPostHomePage($conn)
{
    $query = "SELECT * FROM admin_post WHERE status = 1 ORDER BY time DESC";
    $result = $conn->query($query);
    if ($result->num_rows()  >= 3) {
        //hiển thị ra màn hình trang chủ
    }
}
?>