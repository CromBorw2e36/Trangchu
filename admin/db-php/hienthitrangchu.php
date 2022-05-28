<?php 
 if(isset($_GET['imageid'])){
    $id = $_GET['imageid'];
    $status = $_GET['status'];
    //hiển thị ra trên trang chủ
    EidtStatus($db, $id,$status);
 }

 function EidtStatus($db, $id,$status) {
     $query = "UPDATE `calrouselimg` SET `uploaded_on`= CURRENT_TIME(),`status`='$status' WHERE id = $id";
     $result = $db->query($query);
 }