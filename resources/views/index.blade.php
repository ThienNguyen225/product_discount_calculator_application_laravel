<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
<form method="post" action="{{route('display')}}">
    @csrf
    <p>
        <input type="text" name="product" placeholder="Product Description">
    </p>
    <p>
        <input type="number" name="price" placeholder="Price">
    </p>
    <p>
        <input type="number" name="percent" placeholder="Discount Percent">
    </p>
    <p>
        <button type="submit">Display</button>
    </p>
</form>
</body>
</html>
