<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title></title>
</head>
<body>
    <form method='post' action='{{route("tambah")}}'>
        @csrf
    <div class="row g-2">
        <div class="col-sm-2">
            <input type='text' class="form-control" name='nama' placeholder='input nama anda'>
        </div>

        <div class="col-sm-2">
            <input type='text' class="form-control" name='ktp' placeholder='input nik ktp'>
        </div>

        <div class="col-sm-2">
            <input class="btn btn-success" type='submit'>
        </div>
    </div>
    </form>
    
</br>
    <table class="table table-dark table-striped" border='1px'>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>NIK KTP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1 ?>
            @foreach($data as $row)
            <tr>
                <td> {{$no++}} </td>
                <td> {{$row->namaUser}} </td>
                <td> {{$row->ktpUser}} </td>
                <td> <a class="btn btn-sm btn-warning" href="{{route('ubah')}}?id={{$row->id}}">edit</a>
            <a class="btn btn-sm btn-danger" href="{{route('hapus')}}?id={{$row->id}}">hapus</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </br>
</body>
</html>