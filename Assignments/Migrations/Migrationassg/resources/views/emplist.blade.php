

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>employees list</title>
</head>
<body>
    <a href="home">back to home</a>


    <table border="" cellspacing="0" cellpadding="0" width="60%">

        <tr>
            <th>Name</td>
            <th>Email</th>
            <th>Department</th>
            <th>Employee ID</th>
            <th>Action</th>

        </tr>

        <?php
foreach ($emplist as $value)
 {
    echo "<tr>";
    echo  "<td>".$value->name."</td>";
    echo  "<td>".$value->email."</td>";
    echo  "<td>".$value->dept."</td>";
    echo  "<td>".$value->empid."</td>";
    echo  "<td>"."<form method='post' action='/emplist/{$value->id}'>";
   ?> @csrf
   <?php echo "<button type='submit' name='del' value={{ $value->id }}>delete emp</button>
    <button type='submit' name='upd' href='{{ url('updateemp/'.$value->id) }}'>Update emp</button></form>"."</td>";

    echo "</tr>";
}


?>



    </table>

</body>
</html>
