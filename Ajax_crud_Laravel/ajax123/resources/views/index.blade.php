<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">


        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Add new
        </button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Modal form</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form  id="xyz" method="post" enctype="multipart/form-data" >
                    @csrf
                <div class="modal-body">

                        <div class="mb-3">
                          <label for="name" class="form-label">name</label>
                          <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                          <label for="address" class="form-label">address</label>
                          <input type="text" class="form-control" id="address" name="address">
                        </div>
                        <div class="mb-3">
                          <label for="image" class="form-label">image here</label>
                          <input type="file" class="form-control" id="image" name="image">
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button id="add_data" type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
              </div>
            </div>
          </div>



    </div>


        <div id="userdata_table"></div>

        <div class="modal fade" id="editEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Employee</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form id="edit_employee_form" class="row g-3" method="post" enctype="multipart/form-data">

                        @csrf

                        <input type="hidden" name="emp_avatar" id="user_image">
                        <input type="hidden" name="emp_id" id="user_id">
                        <div class="modal-body">


                            <div class="row">

                                <div class="col-md-6">
                                    <label for="name" class="form-label">First Name : </label>
                                    <input type="text" name="name" class="form-control" id="name">
                                </div>

                                <div class="col-md-6">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" name="address" class="form-control" id="address">
                                </div>

                                <div class="col-md-12">
                                    <label for="image" class="form-label">Avatar</label>
                                    <input type="file" name="image" class="form-control" id="image">
                                </div>

                                <div id="image"></div>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="add_emplyoee_btn">Save</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>

        $('#xyz').submit(function(e)
        {
                e.preventDefault();

                dx = new FormData(this);
                // console.log(dx);


                $.ajax({

                    url : "{{route('store')}}",
                    type : 'POST',
                    data : dx,
                    dataType : 'json',
                    contentType : false,
                    processData : false,
                    success : function(response)
                    {
                        console.log(response);
                    }
                })
            }
        )

        $.ajax({
            url : "{{route('fetchall')}}",
            type : 'GET',
            success : function(response)
            {
                console.log(response);
                $('#userdata_table').html(response);

            }

            })


            $(document).on('click','.editIcon',function(e){

                let id= $(this).attr('id')
                //    alert(id)
                $.ajax({
                url:"{{route('edit')}}",
                method:'get',
                data:{
                    id:id
                },
                success:function(response)
                {
                    console.log(response.first_name)
                    $('#name').val(response.name)
                    $('#address').val(response.address)
                    $('#image').html(`<img src='storage/images/${response.image}' width='100px'/>`)
                    $('#user_id').val(response.id)
                    $('#user_image').val(response.image)
                }
                })
            })

    </script>
</body>
</html>
