<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tbooks | {{$book->name}}</title>
</head>
<body>
<h1 style="color: white;background-color: #113049;width: -moz-max-content;padding: 5px 15px;border-top-right-radius: 15px;">{{$book->name}}</h1>
<p>ISBN : {{$book->isbn}}</p>
<small>Pages : {{$book->pages}}</small>
<br><br>
<a href="#" style="background-color: #2a9055;border-radius: 15px;padding: 10px;color: white">Buy Now {{$book->price}}$</a>
</body>
</html>