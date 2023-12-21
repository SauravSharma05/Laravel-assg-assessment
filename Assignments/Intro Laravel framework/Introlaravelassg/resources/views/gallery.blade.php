
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
    <h1>gallery page</h1>
    <a href="home">back to home</a>
    <hr><hr>

    @forelse ($images as $item)
    <table border="" cellspacing="0" cellpadding="0" width="60%">

        <tr class="table-primary">
            <td>{{ $item->name }}</td>
            <td>
                <img src="/{{ $item->image }}" height="100px" width="100px" alt="No image found"></td>
            </tr>

            @empty
            <tr>
                <td colspan="5">No Category Available</td>
            </tr>
        </table>
        @endforelse
</body>
</html>
