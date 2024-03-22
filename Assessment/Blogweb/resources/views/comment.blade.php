<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <style>
        .box{
            margin: 50px auto;
            width: 50%;
            border: 2px solid black;
        }
    </style>

</head>

<body>
    <li><a href="home">Home</a></li>

    <div class="box">

    <form  method="POST" id="AuthorForm"  onsubmit="event.preventDefault(); addauthor() " >
        @csrf

        <div class="input-block mb-3 row">
            <label class="col-form-label col-md-2">Name</label>
            <div class="col-md-10">
                <input type="text" name="name" id="name" placeholder="Enter Name " required class="form-control">
            </div>
        </div>

        <div class="input-block mb-3 row">
            <label class="col-form-label col-md-2">password</label>
            <div class="col-md-10">
                <input type="password" name="password" id="password" placeholder="Enter password " required class="form-control">
            </div>
        </div>

        <div class="input-block mb-3 row">
            <label class="col-form-label col-md-2">email</label>
            <div class="col-md-10">
                <input type="email" name="email" id="email" placeholder="Enter email" required class="form-control">
            </div>
        </div>

        <button class="btn btn-success float-end" type="submit">Save</button>

        <div class="div">
            already have an account ? : <a href="verify-author">login here</a>
        </div>

    </form>

</div>


<script>

function addauthor()
{
        var result = { };
        $.each($('#AuthorForm').serializeArray(), function() {
            result[this.name] = this.value;
        });
        fetch("http://localhost:8000/api/add-author", {
            method: "POST", // *GET, POST, PUT, DELETE, etc.
            mode: "cors", // no-cors, *cors, same-origin
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(result), // body data type must match "Content-Type" header
            // console.log();
        }).then((res)=>res.json()).then((response)=>{
            console.log(response);
            // getallProductsData()
        })
    }
</script>



</body>
</html>