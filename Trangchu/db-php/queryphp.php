<?php
include 'db.php';
$connect = new mysqli($host, $username, $password, $dbname);
#truy van carousel image
$arrayImg = array();

// truy vấn danh sach carousel image 
$select = "SELECT * FROM calrouselimg ORDER BY uploaded_on desc LIMIT 3";
$imgList = $connect->query($select);
if (($imgList->num_rows) > 0) {
    while ($item = $imgList->fetch_assoc()) {
        $obj = [
            "id" => $item["id"], "name" => $item["name"],
            "file_name" => $item["file_name"], "uploaded_on" => $item["uploaded_on"],
            "status" => $item["status"], "imageURL" => '../admin/uploads/' . $item["file_name"]
        ];
        //sau này đường dẫn này có thể bị sai
        array_push($arrayImg, $obj);
    }
}

#truy van thong tin gia su

#demo link danh gia cua phu huynh
$link = 'https://pdp.edu.vn/wp-content/uploads/2021/01/hinh-anh-girl-xinh-toc-ngan-de-thuong.jpg';

// truy vấn bài viết hiển thị ở trang chủ 
function showPost($connect)
{
    $select = "SELECT id, title, content, status, time, kind FROM admin_post WHERE status = 1 ORDER BY time DESC";
    $result = $connect->query($select);
    $count = 0;
    $NumberElement = $result->num_rows; // lấy só lượng phần tử trong đây
    $lenght = 12 / $NumberElement; // chiều dài chia cột
    while ($row = $result->fetch_assoc()) {
        if ($count == 4)
            break;
        else
            $count++;
        $title = $row['title'];
        $content = $row['content'];
?>
        <div class="col-lg-<?php echo $lenght ?> col-md-<?php echo $lenght ?> col-<?php echo $lenght ?>">
            <h3 class='text-center' style='height: 75px;'><?php echo $title; ?></h3>
            <?php echo $content ?>
        </div>
<?php
    }
}
