<?php
if(isset($_GET['idDelete'])){
    $idDelete = $_GET['idDelete'];
    Delete($db,$idDelete);
}

function Delete($conn,$idDelete){
    $query = "DELETE FROM calrouselimg WHERE id = $idDelete";
    $result = $conn->query($query);
    $notification = "xóa thành công";
}