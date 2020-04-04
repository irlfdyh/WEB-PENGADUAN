@extends('partials.master',[$titlePage = 'Laporan', $activePage = 'laporan'])
@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1 class="page-title"> Pengaduan </h1>
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul Pengaduan</th>
                                            <th>Isi Pengaduan</th>
                                            <th>Foto</th>
                                            <th>Tanggal Pengaduan</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $pengaduan)
                                        <tr>
                                            <td>{{ $loop->index+1 }}</td>
                                            <td>{{ $pengaduan->judul }}</td>
                                            <td>{{ $pengaduan->isi_laporan }}</td>
                                            <td>
                                                <img src="{{ asset($pengaduan->foto) }}" alt="" style="width:150px; height:150px">
                                            </td>
                                            <td>{{ $pengaduan->tgl_pengaduan }}</td>
                                            <td>{{ $pengaduan->status }}</td>
                                            <td>
                                                <a href="" class="btn btn-success mb-2">Edit</a>
                                                <a href="" class="btn btn-danger">Hapus</a>
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
    </section>
    <!-- /.content -->
</div>
@endsection