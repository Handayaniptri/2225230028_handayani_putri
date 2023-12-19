@extends('students.layout')
@section('content')
    <div class="container">
        <div class="row">
        <style> body    {
    background: rgb(211, 15, 32);
    background: linear-gradient(90deg, rgb(117, 29, 40) 0%, rgb(161, 228, 107) 95%);
    font-family: 'Raleway', sans-serif;
    font-weight: 100;
    color: rgb(241, 0, 0);
    height: 100vh;
    margin: 0;
}
</style>
 
            <div class="position-relative">
                <div class="card">
                    <div class="card-header">
                        <h2>Data Kartu Mahasiswa Matematika</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/student/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Tambah Data Mahasiswa Pendidikan Matematika
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-success table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>NIM</th>
                                        <th>Jurusan</th>
                                        <th>Alamat</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->nim }}</td>
                                        <td>{{ $item->jurusan}}</td>
                                        <td>{{ $item->alamat }}</td>

 
                                        <td>
                                            <a href="{{ url('/student/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/student/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/student' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" ><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection