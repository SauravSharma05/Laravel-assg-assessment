
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Update employee</title>
    </head>
<body>
    <h1>Update employee</h1>
    <a href="home">back to home</a>


    <fieldset>
        <legend>employee updation</legend>
        <form action="" method="POST">
           @csrf
           @foreach($data as $item)

           <label for="name">Name  : </label><input type="text" value="{{ $item->name }}" name="name" id="name"> <br>
           <label for="email">Email  : </label><input type="email" value="{{ $item->email }}" name="email" id="email"> <br>
           <label for="dept">Department  : </label><input type="text" value="{{ $item->dept }}" name="dept" id="dept"> <br>
           <label for="empid">Employee ID : </label><input type="text" value="{{ $item->empid }}" name="empid" id="empid"> <br> <hr>
           @endforeach


            <button type="submit" name="updemp_data" value="{{ item->id }}">update now</button>

        </form>
    </fieldset>
</body>
</html>
