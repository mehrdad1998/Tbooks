<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page | Tbooks</title>
</head>
<body>
<h1 style="text-align: center">Tbooks Library</h1>
<div>
    @foreach($books as $book)
        <div style="width: 24%;float: left;border: #1b1e21 solid 1px;border-radius: 5px;margin: 5px;min-height: 150px;text-align: center;">
            <h3><a href="{{'./books/'.$book->name}}">{{$book->name}}</a></h3>
            <small>Pages: {{$book->pages}}</small>
            <br><br>
            <b style="color: #2fa360">Price: {{$book->price}}$</b>
        </div>
    @endforeach
</div>
</body>
</html>