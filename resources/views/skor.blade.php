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
    <h1>ini adalah home</h1>
    <div class="card-body" style="padding: 25px">
        <h3>Singgle Input</h3>
        <form action="{{ route('tambah.skor') }}" method="post">
            @csrf
            <div>
                <label for="">Nama Klub</label>
                <select name="klub" id="klub">
                    @foreach ($data as $d )
                    <option value="{{ $d->id }}">{{ $d->klub }}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div>
                <label for="">Skor : </label>
                <input type="text" name="skor" id="skor">
            </div>
            <button type="submit">Save</button>
        </form>
        <br>
        <table border="1">

            <tr align="center">
                <td>Klub :
                    <br>
                    skor :
                </td>
                @foreach ($klub as $kl )
                <td>{{ $kl->klub }}
                    <br>
                    {{ $kl->skor }}
                </td>

                @endforeach
            </tr>
        </table>
    </div>
    <div class="card-body" style="padding: 25px">
        <h3>Multiple Input</h3>
        <form action="{{ route('tambah.skor') }}" method="post">
            @csrf
            <div>
                @foreach ($data as $d )
                <input type="text" name="klub" id="klub" value="{{ $d->klub }}">
                <input type="text" name="skor" id="skor">
                @endforeach
            </div>
            <br>
            <div>
                <label for="">Skor : </label>


            </div>
            <button type="submit">Save</button>
        </form>
        <br>
        <table border="1">

            <tr align="center">
                @foreach ($klub as $kl )
                <td>{{ $kl->klub }}
                    <br>
                    {{ $kl->skor }}
                </td>

                @endforeach
            </tr>
        </table>
    </div>

</body>
</html>