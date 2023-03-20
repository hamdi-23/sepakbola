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
            <table border="2" id="table1">
                <div>
                    @foreach ($data as $d )
                    <td>
                        Klub: <input type="text" name="klub" id="klub" value="{{ $d->klub }}"><br>
                        SKor: <input type="text" name="skor" id="skor" contenteditable="true" class="skor">
                    </td>
                    @endforeach
                </div>
                <br>
                <div>
                    <label for="">Skor : </label>
                </div>
            </table>
            <br>
            <div>
                <button class="btn btn-primary" id="add">Add</button>
                <button type="submit" class="btn btn-success" id="save">Save</button>
            </div>
        </form>
        <br>
    </div>
    <div>
        <div id="myDIV" class="header">
            <h2>My To Do List</h2>
            <input type="text" id="myInput" placeholder="Title...">
            <span onclick="newElement()" class="addBtn">Add</span>
        </div>

    </div>

</body>
</html>
<script>
    $(document).ready(function() {
        let baris = 1
        $(document).on('click', '#add', function() {
            baris = baris + 1
            var html = "<tr id='baris'" + baris + ">"
            html = " <td contenttable='true' class'skor'></td>"
            html += "</tr>"

            $('#table1').append(html)
        })
    })
</script>
<script>
    function newElement() {
        var li = document.createElement("li");
        var inputValue = document.getElementById("myInput").value;
        var t = document.createTextNode(inputValue);
        li.appendChild(t);
        if (inputValue === '') {
            alert("You must write something!");
        } else {
            document.getElementById("myUL").appendChild(li);
        }
        document.getElementById("myInput").value = "";

        var span = document.createElement("SPAN");
        var txt = document.createTextNode("\u00D7");
        span.className = "close";
        span.appendChild(txt);
        li.appendChild(span);

        for (i = 0; i < close.length; i++) {
            close[i].onclick = function() {
                var div = this.parentElement;
                div.style.display = "none";
            }
        }
    }
</script>