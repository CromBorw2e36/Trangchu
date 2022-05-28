<?php
include 'db.php';
$connect = new mysqli($host, $username, $password, $dbname);
#truy van carousel image
$arrayImg = array();

function loadImageToArray($connect)
{
    $ListImgUrl = array();
    // truy vấn danh sach carousel image 
    $select = "SELECT * FROM calrouselimg WHERE status = 1 ORDER BY uploaded_on desc";
    $imgList = $connect->query($select);
    if (($imgList->num_rows) > 0) {
        while ($item = $imgList->fetch_assoc()) {
            $obj = [
                "id" => $item["id"], "name" => $item["name"],
                "file_name" => $item["file_name"], "uploaded_on" => $item["uploaded_on"],
                "status" => $item["status"], "imageURL" => '../admin/uploads/' . $item["file_name"]
            ];
            //sau này đường dẫn này có thể bị sai
            array_push($ListImgUrl, $obj);
        }
    }
    return $ListImgUrl;
}
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

$arrayImg  = loadImageToArray($connect);

function ShowImgCarousel($arrayImg)
{
    $count = 1; // đếm để cái đầu tiên sẽ có trạng thái acitve
    $countItem = 1; // đến số lượng item vì giới hạn chỉ có 3 hình được hiển thị
    foreach ($arrayImg as $item) {
        if($countItem == 4){
            break;
        }else{
            $countItem++;
        }
        if ($count == 1) {
            $count++;
        ?>
            <div class="carousel-item active">
                <img src="<?php echo $item['imageURL']; ?>" class="d-block w-100" alt="<?php echo $item['name']; ?>">
            </div>
        <?php
        } else {
        ?>
            <div class="carousel-item ">
                <img src="<?php echo $item['imageURL']; ?>" class="d-block w-100" alt="<?php echo $item['name']; ?>">
            </div>
<?php
        }
    }
}

#truy van thong tin gia su

#demo link danh gia cua phu huynh
$link = 'https://pdp.edu.vn/wp-content/uploads/2021/01/hinh-anh-girl-xinh-toc-ngan-de-thuong.jpg';
