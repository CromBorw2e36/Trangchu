<?php
// Get images from the database
$query = $db->query("SELECT * FROM calrouselimg ORDER BY uploaded_on DESC");
if ($query->num_rows > 0) {
    while ($row = $query->fetch_assoc()) {
        $id = $row['id'];
        $imageURL = 'uploads/' . $row["file_name"];
        $imageName = $row["name"];
        $status = $row["status"];
        //dùng để ẩn hoặc hiện hình này ở trang chủ
        $txt = "Hiển thị";
        $changeStatus = 1;
        if($status == 1){
            $txt = "Ẩn";
            $changeStatus = 0;
        }
?>
        <div class="col mb-3">
            <div class="card" style="width: 18rem;"><img class="card-img-top" src="<?php echo $imageURL; ?>" alt="<?php echo $imageName; ?>">
                <div class="card-body">
                    <h5 class="card-title" name="imageName"><?php echo $imageName; ?></h5>
                    <div class="d-flex justify-content-around">
                        <a href="admin-insert-img.php?imageid=<?php echo $id;?>&status=<?php echo $changeStatus;?>" class="btn btn-success"><?php echo $txt?></a>
                        <a href="admin-insert-img.php?idDelete=<?php echo $id;?>" class="btn btn-danger">Xóa</a></div>
                </div>
            </div>
        </div>
    <?php
    }
} else { ?>
    <p>No image(s) found...</p>
<?php
}
$db->close();
?>