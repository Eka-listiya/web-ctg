@extends('admin.layout.master')

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header">
                <h4 class="card-title ">DETAIL DATA PASIEN</h4>
              </div>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data"
                    class="form-horizontal">
                    @csrf
                    @method('put')
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" placeholder="" value="{{ $data->nama_pasien}}">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat_pasien" name="alamat_pasien" placeholder="" value="{{ $data->alamat_pasien}}">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Umur</label>
                    <input type="text" class="form-control" id="umur_pasien" name="umur_pasien" placeholder="" value="{{ $data->umur_pasien}}">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="" value="{{ $data->email}}">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Total Pemeriksaan</label>
                    <input type="text" class="form-control" id="total_pemeriksaan" name="total_pemeriksaan" placeholder="" value="{{ $data->total_pemeriksaan}}">
                  </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection