<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file upload</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="raw">
            <form action="index.php" method="post" enctype="multipart/form-data">
                <h3>upload file</h3>
                <input type="file" name="myfile" >
                <button type="submit" name="save">upload</button>
            </form>
        </div>
    </div>
</body>
</html>