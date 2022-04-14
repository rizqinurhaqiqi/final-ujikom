@extends('layout.master')

@section('content')

<DOCTYPE html>
    <html>
        <head>
            <title></title>
        </head>

        <body>
            <div class="container">
                <div class="row">


<!-- Default Table -->
                 </div>
                 <div class="col-10">
                       <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Tambah data
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Perjalanan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

<form action="/perjalanan/create" method="POST">
@csrf

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Suhu tubuh</label>
        <input name="suhu_tubuh" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Jam</label>
        <input name="jam" type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tanggal</label>
        <input name="tanggal" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    {{--alamat--}}
                                {{--provinsi--}}
                                <div class="row mb-3">
                                    <label for="company" class="col-md-4 col-lg-3 col-form-label">Provinsi</label>
                                    <div class="col-md-8 col-lg-9">
                                        <select class="custom-select" name="selectProvinsi" id="selectProvonsi">
                                            {{--<option>provinsi</option>--}}
                                        </select>
                                    </div>
                                </div>
                                  {{-- kabupaten/kota --}}
                                  <div class="row mb-3">
                                    <label for="company" class="col-md-4 col-lg-3 col-form-label">kabupaten/kota</label>
                                       <div class="col-md-8 col-lg-9">
                                          <select class="custom-select" name="selectKabupaten" id="selectKabupaten">
                                              {{-- <option>Kabupaten</option> --}}
                                          </select>
                                      </div>
                                  </div>
                                  {{-- kecamatan --}}
                                  <div class="row mb-3">
                                    <label for="company" class="col-md-4 col-lg-3 col-form-label">kecamatan</label>
                                       <div class="col-md-8 col-lg-9">
                                          <select class="custom-select" name="selectKecamatan" id="selectKecamatan">
                                              {{-- <option value="Kecamatan"></option> --}}
                                          </select>
                                      </div>
                                  </div>
                                  {{-- kelurahan --}}
                                  <div class="row mb-3">
                                    <label for="company" class="col-md-4 col-lg-3 col-form-label">Kelurahan</label>
                                       <div class="col-md-8 col-lg-9">
                                          <select class="custom-select" name="selectKelurahan" id="selectKelurahan">
                                              {{-- <option> Kelurahan </option> --}}
                                          </select>
                                      </div>
                                  </div>

                                  {{-- final alamat --}}
                                  <div class="form-group">
                                      <label class="form-label">Lokasi</label>
                                      <textarea class="form-control" name="lokasi" id="alamat">{{$data->alamat ?? ''}}</textarea>
                                  </div>


       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
</form>
      </div>
    </div>
  </div>
</div>
        </div>
        <div class="col-10">
        <h5 class="card-title">Perjalanan </h5>
        <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">tanggal</th>
                    <th scope="col">suhu tubuh</th>
                    <th scope="col">jam</th>
                    <th scope="col" ><center> lokasi</center></th>

                  </tr>
                </thead>
                <tbody>
                @foreach ($user->perjalanan as $a => $i)
                  <tr>
                    <th scope="row">{{$a+1}}</th>
                    <th>{{$i->tanggal}}</th>
                    <td>{{$i->suhu_tubuh}}</td>
                    <td>{{$i->jam}}</td>
                    <td> <center> {{$i->lokasi}}</center></td>
                    <td><a href="/perjalanan/delete/{{$i->id}}" class="btn btn-sm btn-danger" >delete</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
  </script>
</html>
@endsection
