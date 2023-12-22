<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>post blog</title>
</head>
<body>

    <ul>
        <li><a href="home">back to home</a></li>
    </ul>
    <fieldset>
        <legend>blog posting</legend>
        <form action="" method="POST">
           @csrf
            <label for="name">Title  : </label><input type="text" name="name" id="name"> <br>
            <label for="desc">Content ...   </label><br><textarea name="desc" id="desc" cols="30" rows="10"></textarea> <br>
            <button type="submit" name="reg">Post it !!!</button>

        </form>
    </fieldset>
    

</body>
</html>
