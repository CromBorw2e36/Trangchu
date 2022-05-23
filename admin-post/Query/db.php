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
        $querySelect = 'SELECT id, title, content, status, time, kind FROM admin_post';
        $result = $conn->query($querySelect);
        if (($result->num_rows) > 0) {
            while ($row = $result->fetch_assoc()) {
?>
                <tr>
                    <th scope="row">
                        <p>
                            <?php echo $row['id'] ?>
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
    if (isset($_POST['Button']) && !empty($_POST['title']
        && !empty($_POST['content']))) {
        $kind = $_POST['radioKind'];
        $status = 0;
        $title = $_POST['title'];
        $content = $_POST['content'];

        $queryInsert  = "INSERT INTO admin_post(id, title, content, status, time, kind) 
            VALUES (NULL,'" . $title . "','" . $content . "'," . $status . ",CURRENT_TIMESTAMP(),'" . $kind . "');";
        $conn->query($queryInsert);
        // chua lam regex
    }
}
?>