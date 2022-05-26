<?php
// Include the database configuration file
include 'dbConfig.php';

// Get images from the database
$query = $db->query("SELECT * FROM calrouselimg ORDER BY uploaded_on DESC");
if ($query->num_rows > 0) {
    while ($row = $query->fetch_assoc()) {
        $imageURL = 'uploads/' . $row["file_name"];
        $imageName = $row["name"];
?>
        <div class="col mb-3">
            <div class="card" style="width: 18rem;"><img class="card-img-top" src="<?php echo $imageURL; ?>" alt="<?php echo $imageName; ?>">
                <div class="card-body">
                    <h5 class="card-title" name="imageName"><?php echo $imageName; ?></h5>
                    <div class="d-flex justify-content-around"><a href="#" class="btn btn-success">Hiển thị</a><a href="#" class="btn btn-danger">Xóa</a></div>
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