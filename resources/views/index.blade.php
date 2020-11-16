<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{ route('calculator.age') }}" method="get">
    @csrf
    Ngay sinh:
    <input type="date" name="birthday">
    <button type="submit">Tinh</button>
</form>
@if(isset($age))
    Tuổi của bạn là: {{ $age }}
@endif
</body>
</html>
