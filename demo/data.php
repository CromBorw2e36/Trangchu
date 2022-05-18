<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is a test</h1>
    <div id="content">
        this is GET
        <br>
        <?php echo print_r($_GET)?>
        <br>================================================================
        <br>this is post
        <br><?php echo print_r($_POST)?>
    </div>
</body>
</html>