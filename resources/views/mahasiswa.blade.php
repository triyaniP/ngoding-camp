<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Data Mahasiswa</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $mahasiswa)
                    <tr>
                        <td>{{ $loop ->iteration}}</td>
                        <td>{{ $mahasiswa ->nim}}</td>
                        <td>{{ $mahasiswa ->name}}</td>
                        <td>{{ $mahasiswa ->address}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div style="padding-top: 10px">
        <form action="{{url ('mahasiswa/create') }}" method="POST">
            <label for="nim">Nim</label><br>
            <input type="text" name="nim" id="nim"></input><br>
            <label for="name">Nama</label><br>
            <input type="text" name="name" id="name"></input><br>
            <label for="address">Alamat</label><br>
            <input type="text" name="address" id="address"></input><br>
            <button type="submit" style ="margin-top: 10px">Simpan</button>
        </form>
    </div>
    @include ('sweetalert::alert')
</body>
</html>
