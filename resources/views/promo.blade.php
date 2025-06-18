<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    @if($a && $b)
    barang : {{$a}}
    promo : {{ $b }}
    @elseif ($a)
    promo untuk {{ $a }}
    @else 
    semua promo barang
    @endif
</body>
</html>
