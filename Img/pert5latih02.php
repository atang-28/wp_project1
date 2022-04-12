<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Multi File</title>
</head>
<body>
    
    <form method="POST" action="file02.php" enctype="multipart/form-data">
        Upload File<br>
        <input type="file" name="fldata[]" multiple>
        <br><br>
        <button type="submit" name="kirimfile">Upload File</button>
    </form>

</body>
</html>