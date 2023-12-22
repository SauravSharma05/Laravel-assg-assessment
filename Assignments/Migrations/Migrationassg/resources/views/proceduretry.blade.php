<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Procedure page</title>
</head>
<body>
    <a href="home">back to home</a>

    <br><br><hr>
    <table border="" cellspacing="0" cellpadding="0" width="60%">
    <?php
    foreach ($dataSet as $value)
     {
        echo "<tr>";
        echo  "<td>".$value->name."</td>";
        echo  "<td>".$value->email."</td>";
        echo  "<td>".$value->dept."</td>";
        echo  "<td>".$value->empid."</td>";
         echo "</tr>";
    }


    ?>
    </table>
</body>
</html>
