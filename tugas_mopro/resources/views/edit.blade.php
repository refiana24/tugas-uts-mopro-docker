@extends('app')
@section('content')
<div class="row">
    <div class="col-md-6">
      
        <form action="{{route('dataUser.ubah')}}" method="POST">
            @csrf
            <input type="hidden" name="id" value="$data->id">
            <div class="form-group">
                <label>Nama Penduduk</label>
                <input class="form-control" type="text" name="nama" value="{{$data->namaUser}}" />
            </div>
            <div class="form-group">
                <label>NIK KTP</label>
                <input class="form-control" type="text" name="ktp" value="{{$data->ktpUser}}" />
            </div>
     
  
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a class="btn btn-danger" href="{{route('awal')}}">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection