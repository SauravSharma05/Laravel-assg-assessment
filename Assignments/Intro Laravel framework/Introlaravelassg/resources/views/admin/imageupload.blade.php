<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>image upload page</h2>

    <fieldset>
        <legend>image upload here</legend>
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="name">Name  : </label><input type="text" name="name" id="name" placeholder="Enter Name of image"> <br> <hr>
            <label for="image">Image : </label><input type="file" name="image" id="image" accept="image/*"> <br> <hr>
            <button type="submit">upload image</button>
        </form>
    </fieldset>

</body>
</html>
