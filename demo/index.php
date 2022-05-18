<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <script>
        $(document).ready(function(){
            $('#process').click(function(){
                var url = 'data.php';
                var data = {"id" : "1"}
                $('#container').load(url, data, function(response){
                    console.log(response)
                });
            });
            $("#filldata").click(function(){
                var url = 'info.php';
                $("#fill").load(url);
            })
        });
    </script>
    <div id="container">
        Read...
    </div>
    <input type="button" id="process" name="button" value="Read">

    <br> ================================ <br>
    <form action="" method="post">
        <input type="text" name="name" id="name">
        <input type="submit" value="submit">
    </form>
    <input type="button" id="filldata"value="fill data">
    <div id="fill">
        this is data
    </div>
</body>
</html>