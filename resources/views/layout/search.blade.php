<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table style="border: solid 1px;">
    @foreach($books as $b)       
            <tr>
                <td>{{$b->book_id}}</td>
                <td>{{$b->book_name}}</td>
                <td>{{$b->book_price}}</td>
                <td>{{$b->book_img}}</td>
            </tr>
    @endforeach
</table>
</body>
</html>