<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action='{{url ('data-dumy')}}' method='post'>
        @csrf
        <input type="number" name="nim" id="nim" value="{{ Session::get ('nim')}}">
        <input type="text" name="nama" id="nama" value="{{ Session::get ('nama')}}">
        <button type="submit" name="submit">submit</button>
    </form>
</body>
</html>