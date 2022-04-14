@extends('layout.master')

@section('content')

<h1>
    hi! {{ Auth()->user()->name ?? "None"}}
</h1>
<br>
Selamat Datang di PeduliDiri
@stop
