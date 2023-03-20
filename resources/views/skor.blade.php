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
    <h1>TAMPILAN INPUT SKOR</h1>
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
            </div><br>
            <button type="submit">Save</button>
        </form>
        <br>
        <table border="1" width="100%">

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
        <form action="" method="post">
            @csrf
            <table border="2" width='100%' id="table1">
                <thead>
                    <tr>
                        <th>Klub</th>
                        <th>Skor</th>
                        <th>Aksi</th>
                    </tr>
                    <tr>
                        <td contenteditable="true" class="klub"></td>
                        <td contenteditable="true" class="skor"></td>
                        <td contenteditable="true"><button id="delete">hapus</button></td>
                    </tr>
                </thead>
            </table>
            <br>
            <button class="btn" id="add">add</button>
            <button class="btn" id="save">save</button>
        </form>
        <br>
    </div>


</body>
</html>
<script>
    $(document).ready(function() {
        let baris = 1
        $(document).on('click', '#add', function() {
            baris = baris + 1

            var html = "<tr id='baris'" + baris + ">"
            html = " <td contenteditable='true' class='klub' class='klub'></td>"
            html = " <td contenteditable='true' class='skor' class='skor'></td>"
            html = " <td contenteditable='true'><button id='delete'></button></td>"
            html += "</tr>"

            $('#table1').append(html)
        })
    })
</script>