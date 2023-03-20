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
            <a href="{{ route('tambah.skor') }}">Skor</a>
        </div>
        <div>
            <a href="{{ route('klasemen') }}">Klasemen</a>
        </div>
    </aside>
    <h1>ini adalah home</h1>
    <form action="{{ route('tambah.data') }}" method="POST">
        @csrf
        <div>
            <label for="">Nama Klub</label>
            <input type="text" name="klub" id="klub">
        </div>
        <br>
        <div>
            <label for="">Nama Kota</label>
            <input type="text" name="kota" id="kota">
        </div>
        <button type="submit">Save</button>
    </form>
    <br>
    <div>
        <table border="1">
            <tr>
                <th>klub</th>
                <th>kota</th>
            </tr>
            @foreach ($data as $d )
            <tr>
                <td>{{ $d->klub }}</td>
                <td>{{ $d->kota }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>