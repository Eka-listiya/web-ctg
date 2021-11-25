@extends('admin.layout.master')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-warning card-header-icon">
            <div class="card-icon">
              <i class="material-icons">content_copy</i>
            </div>
            <p class="card-category">Daftar Pasien</p>
            <h3 class="card-title">1
              <small>Pasien</small>
            </h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-danger card-header-icon">
            <div class="card-icon">
              <i class="material-icons">info_outline</i>
            </div>
            <p class="card-category">Laporan</p>
            <h3 class="card-title">1</h3>
          </div>
          <div class="card-footer">
            <div class="stats">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    
@endsection