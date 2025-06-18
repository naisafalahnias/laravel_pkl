<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Barang : <b>{{ $a }}</b><br>
    Jumlah : <b>{{ $b }}</b><br>
    @if($b > 100)
    Anda Mendapatkan Cashback sebesar 10%
    @elseif ($b > 50)
    Anda Mendapatkan Cashback sebesar 10%
    @else 
    Anda tidak mendapat Cashback
    @endif
</body>
</html>