<html>

<head>
    <title>Laporan PDf</title>
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr td{
            font-size: 9pt;
        }
    </style>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>nik</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Telepon</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1
            @endphp
            @foreach ($user as $p)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$p->nik}}</td>
                    <td>{{$p->nama}}</td>
                    <td>{{$p->email}}</td>
                    <td>{{$p->alamat}}</td>
                    <td>{{$p->no_telp}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
