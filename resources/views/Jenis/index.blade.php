@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="font-weight-blod">
                            Data Jenis Transaksi
                         </h5>
                        <div class="mt-3 mb-3">
                            <a href="{{route('ambil-form.jenis')}}" class="btn btn-info"> Tambah Jenis</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Transaksi</th>
                                        <th>Nominal</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Mobil</td>
                                        <td>Rp.50.000</td>
                                        <td>
                                            <form action="" method="post">
                                                <a href="http://" class="btn btn-warning btn-sm">Edit</a>
                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection