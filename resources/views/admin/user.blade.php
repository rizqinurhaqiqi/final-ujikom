@extends('layout.master')

@section('content')

<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <div class="container">

            <div class="row">
                <div class="col-10">
                    <h5 class="card-title">Data User Peduli Diri</h5>
                    <div class="row">
                        <div class="col-md d-flex justify-content-end">
                            <a href="/admin/cetak/user_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
                        </div>
                    </div>
                    <table class="table">
                        <thead
                        <tr>
                            <th scope="col">nik</th>
                            <th scope="col">nama</th>
                            <th scope="col">alamat</th>
                            <th scope="col">email</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $a )
                                <tr>
                                    <td>{{$a->nik}}</td>
                                    <td>{{$a->nama}}</td>
                                    <td>{{$a->alamat}}</td>
                                    <td>{{$a->email}}</td>
                                    <td><a href="/admin/delete/{{$a->id}}" class="btn btn-sm btn-danger">delete</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
@endsection
