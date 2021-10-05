<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@php
$halo = 'Hallo';
$nama = 'Priyadi';
$kelas ='XII RPL 2';
$kelamin = 'Laki-Laki';
$alamat = 'Lampegan';
$status = 2;
@endphp



<h1>{{$halo}}<br></h1>
Nama : {{$nama}}<br>
Kelas : {{$kelas}}<br>
Jenis Kelamin :{{$kelamin}}<br>
Alamat : {{$alamat}}<br><br>

@if($status == 1)
Status Kamu Lulus
@elseif($status == 2)
Status Kamu Lulus 100%
@else Status kamu tidak lulus
@endif
<br>
@for ($i = 1; $i <= 10; $i++)
@if($i % 2)
    Angka ke - {{$i}} Bilangan Ganjil<br>
@else
    Angka ke - {{$i}} Bilangan Genap<br>
@endif
@endfor

@php
    $warna = '<div style="color: red">HAHAHIHI</div>'
@endphp
{{-- sajiajsiuw --}}
{{-- {{$warna}} --}}
{!! $warna !!}

</body>
</html>

