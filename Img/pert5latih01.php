<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File Gambar</title>
</head>
<body>
    

    <form method="POST" action="file01.php" enctype="multipart/form-data">
        File Upload<br>
        <input type="file" name="fldata">
        <br>
        <button type="submit" name="kirimdata">Upload File</button>
    </form>
</body>
</html>