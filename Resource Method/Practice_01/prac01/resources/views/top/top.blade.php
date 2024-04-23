<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .box{
            width: 50%;
            margin: 50px auto;
            border: 2px solid black;
            padding: 20px;
        }
        img{
            height: 100px;
            width: 100px;
        }
    </style>
</head>
<body>
    <a href="{{ route('top.create') }}">add user</a>


  @yield('content')

  <div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-6">

            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
   @foreach($users as $user)

   <tr>
      <th scope="row">1</th>
      <td>
        <img src="{{$user->image}}" alt="" srcset="">
      </td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>
       {{-- <form action="{{route('users.destroy',$user->id)}}" method="post"> --}}

       @csrf
       @method('DELETE')
       {{-- <button><a href="{{route('users.show',$user->id)}}">View</a></button> --}}
        {{-- <button><a href="{{route('users.edit',$user->id)}}">Edit</a></button> --}}
        <button type="submit">Delete</button>
       </form>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>

</body>
</html>
