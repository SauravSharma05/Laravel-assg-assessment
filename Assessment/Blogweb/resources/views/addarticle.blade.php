<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add article</title>
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

    <form action="" method="POST" id="Article"  onsubmit="event.preventDefault(); addarticle() " >
        @csrf

        <div class="input-block mb-3 row">
            <label class="col-form-label col-md-2">Name</label>
            <div class="col-md-10">
                <input type="text" name="name" id="name" placeholder="Enter Name " required class="form-control">
            </div>
        </div>

        <div class="input-block mb-3 row">
            <label class="col-form-label col-md-2">Description</label>
            <div class="col-md-10">
                <input type="text" name="description" id="description" placeholder="add Description here ... " required class="form-control">
            </div>
        </div>

        <div class="input-block mb-3 row">
            <label class="col-form-label col-md-2">Category</label>
            <div class="col-md-10">
                <input type="text" name="category" id="category" placeholder="actegory section " required class="form-control">
            </div>
        </div>

        <button type="submit">Post now</button>

    </form>

</div>


<script>

function addarticle()
{
        var result = { };
        $.each($('#Article').serializeArray(), function() {
            result[this.name] = this.value;
        });
        fetch("http://localhost:8000/api/add-article", {
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
