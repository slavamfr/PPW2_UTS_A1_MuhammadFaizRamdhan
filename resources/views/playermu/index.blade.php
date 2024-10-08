<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" 
            content="width=device-width, user-scalable=no initial-scale=1.0,
            maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Pemain MU</title>
    </head>
    <body>
        <h1>Daftar Pemain</h1>
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pemain</th>
                    <th>Nomor Punggung</th>
                    <th>Posisi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_pemain as $pemain)
                <tr>
                    <td>{{ $pemain->id }}</td>
                    <td>{{ $pemain->nama_pemain }}</td>
                    <td>{{ $pemain->no_punggung }}</td>
                    <td>{{ $pemain->posisi }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
