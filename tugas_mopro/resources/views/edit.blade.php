@extends('app')
@section('content')
<div class="row">
    <div class="col-md-6">
      
        <form action="{{route('dataUser.edit')}}" method="POST">
            @csrf
            @method('POST')
            <div class="form-group">
                <label>Nama Penduduk</label>
                <input class="form-control" type="text" name="nama" value="{{old('nama', $row->nama)}}" />
            </div>
            <div class="form-group">
                <label>NIK KTP</label>
                <input class="form-control" type="text" name="ktp" value="{{old('ktp', $row->ktp)}}" />
            </div>
     
  
            <div class="form-group">
                <button class="btn btn-primary">Simpan</button>
                <a class="btn btn-danger" href="{{route('awal')}}">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection