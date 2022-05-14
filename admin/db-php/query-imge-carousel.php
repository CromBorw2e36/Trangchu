<?php
// Include the database configuration file
include 'dbConfig.php';

// Get images from the database
$query = $db->query("SELECT * FROM images ORDER BY uploaded_on DESC");
$i = 0;
// cứ 3 cột sẽ xuống 1 dòng 
$j = 3;
// định dạng class của Image hình
$classImg = '';

if ($query->num_rows > 0) {
    while ($row = $query->fetch_assoc()) {
        $imageURL = 'uploads/' . $row["file_name"];
        $imageName = $row["file_name"];
        if ($i % 3 == 0 || $i == 0) {
            echo '<div class=" card-group row text-center">';
            // $classImg = 'class=""';
        } 
        // else {
        //     $classImg = 'class="card-img-top"';
        // }
?>
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="<?php echo $imageURL; ?>" alt="<?php echo $imageURL; ?>">
                <div class="card-body">
                    <button id="<?php echo $imageURL; ?>" name="upload-button-delete" class="text-center btn btn-primary" type="submit">Xóa</button>
                </div>
            </div>
        </div>
    <?php
        $i += 1;
        if ($i == $j) {
            echo '</div>';
            $j += 3;
        }
    }
} else { ?>
    <p>No image(s) found...</p>
<?php }
if ($query->num_rows % 3 != 0) {
?>
    </div>
<?php
}
?>