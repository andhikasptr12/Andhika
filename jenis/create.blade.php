@extends('layout.app')

@section('contet')
    <div class="container">
    <div class="row">  
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="alert alert-danger">
                    <h5 class="fond-weight-bold"> perhatian!!!</h5>
                    <h5> isi ini dengan benar   </h5>
                </div>
                <form action="" method="post">
                      @csrf
                        <div class="row">
                            <div class="col-md-6">
                          <label for="">Jenis Kendaraan</label>
                          <input type="text" name="jenis_kendaraan" id="" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="">Biaya</label>
                            <input type="text" name="biaya" id="" class="form-control">
                          <div>
                </div>
                <div class="col-md-6">
                         <button type="submit" class="btn btn-info">simpan</button>
                         <a href="{{route('tampilkan-data.jenis')}}" class="btn btn-secondary">kembali</a>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
    </div>
</div>
@endsection