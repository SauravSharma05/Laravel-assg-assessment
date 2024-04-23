@extends('top.top')


    @section('content')

    <div class="box">
        <form action="{{route('top.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3 form-check">
          <label for="image" class="form-label">Insert image here : </label>
          <input type="file" name="image" id="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

    @endsection
