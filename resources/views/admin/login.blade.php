<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $nama }}</title>
</head>
<body>
    ini adalah halaman login di admin - {{ $nama }}

    {{ $kelas }}

    {!!n$kelas !!}

    <?php 
        if($lampu == 1) {
    ?>
    <h2>LAMPU NYALA</h2>
    <?php
        } else { 
    ?>
    <?php 
        }
    ?>

    @if ($lampu == 1)
        <h2>LAMPU NYALA</h2>
    @else
        <h2>LAMPU MATI</h2>
    @endif

    @switch($nilai)
        @case('A')
            <h3>Memuaskan</h3>
        @break

        @case('B')
            <h3>Baik</h3>   
        @break

        @case('C')
            <h3>Cukup</h3>   
        @break

        @default
            <h3>Kurang</h3>
        @break       
    @endswitch

    <ul>
        @for ($i = 1; $i <= $limit; $i++)
            <li>{{ $i }}</li>
        @endfor
    </ul>

    <ul>
        @for ($i = 0; $i < count($hobbies); $i++)
            <li>{{ $hobbies [$i] }} </li>
        @endfor
    </ul>

    <ul>
        @foreach ($hobbies as $hobi)
            <li>{{ $hobi}} </li>         
        @endforeach
    </ul>

    <ul>
        @forelse ($hobbies as $hobi)
            <li>{{ $hobi}} </li> 
        @empty
            Data Kosong  
        @endforelse
    </ul>

    {{-- ini adalah teks komentar --}}
</body>
</html>