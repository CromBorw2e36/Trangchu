<?php
#truy van carousel image
$arrayImg = array();
$connect = mysqli_connect("localhost", "root", "", "trangchu-carousel");
$select = "SELECT * FROM `calrouselimg` ORDER BY uploaded_on desc LIMIT 3";
$imgList = mysqli_query($connect, $select);
if (mysqli_num_rows($imgList) > 0) {
    while ($item = mysqli_fetch_assoc($imgList)) {
        $obj = [
            "id" => $item["id"], "name" => $item["name"],
            "file_name" => $item["file_name"], "uploaded_on" => $item["uploaded_on"],
            "status" => $item["status"], "imageURL" => 'admin/uploads/' . $item["file_name"]
        ];
        array_push($arrayImg, $obj);
    }   
}
#truy van thong tin gia su

#demo link danh gia cua phu huynh
$link = 'https://pdp.edu.vn/wp-content/uploads/2021/01/hinh-anh-girl-xinh-toc-ngan-de-thuong.jpg';
?>