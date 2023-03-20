<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <aside>
        <div>
            <a href="{{ route('index') }}">Home</a>
        </div>
        <div>
            <a href="{{ route('skor') }}">Skor</a>
        </div>
        <div>
            <a href="{{ route('klasemen') }}">Klasemen</a>
        </div>
    </aside>
    <h1>TAMPILAN KLASEMEN</h1>
    <div class="card-body" style="padding: 25px">
        <h3>Klasemen</h3>

        <table border="1" width="100%">
            <tr>
                <th>No</th>
                <th>Klub</th>
                <th>Ma</th>
                <th>Me</th>
                <th>S</th>
                <th>K</th>
                <th>GM</th>
                <th>GK</th>
                <th>Point</th>
            </tr>

            @foreach ($data as $index => $k )
            <tr align="center">
                <td>{{ $index+1 }}</td>
                <td>{{ $k->klub }}</td>
                <td>{{ $k->main }}</td>
                <td>{{ $k->skor }}</td>
                <td>{{ $k->skor }}</td>
                <td>{{ $k->skor }}</td>
                <td>{{ $k->gm }}</td>
                <td>{{ $k->skor }}</td>
                <td>{{ $k->skor }}</td>
            </tr>
            @endforeach
        </table>
    </div>


</body>
</html>