
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Add employee</title>
    </head>
<body>
    <h1>Add employee</h1>
    <a href="home">back to home</a>

    <fieldset>
        <legend>employee register</legend>
        <form action="" method="POST">
           @csrf
            <label for="name">Name  : </label><input type="text" name="name" id="name"> <br>
            <label for="email">Email  : </label><input type="email" name="email" id="email"> <br>
            <label for="dept">Department  : </label><input type="text" name="dept" id="dept"> <br>
            <label for="empid">Employee ID : </label><input type="text" name="empid" id="empid"> <br> <hr>


            <button type="submit" name="reg">Register here</button>

        </form>
    </fieldset>
</body>
</html>
