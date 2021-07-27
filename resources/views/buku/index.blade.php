@extends('template')
@section('isi')
    <div class="container">
        <div class="card text-left">
            <div class="card-body">
                <h4 class="card-title">Data Buku</h4>

                <a href="{{ route('product.add') }}" class="btn btn-outline-info">Add Buku</a>

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Id Buku</th>
                        <th>Kode Buku</th>
                        <th>Judul Buku</th>
                        <th>Penulis Buku</th>
                        <th>Penerbit Buku</th>
                        <th>Tahun Penerbitan</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($bukus as $buku)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>HAPUS</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
