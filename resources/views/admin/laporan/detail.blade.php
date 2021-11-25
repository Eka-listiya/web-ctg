@extends('admin.layout.master')


@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h3>Detail Pemeriksaan</h1>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="idPemeriksaan">Id Pemeriksaan</label>
                                    <input type="text" class="form-control" id="idPemeriksaan" value="1">
                                </div>
                                <div class="form-group">
                                    <label for="namaPasien">Nama Pasien</label>
                                    <input type="text" class="form-control" id="namaPasien" value="Yofan">
                                </div>
                                <div class="form-group">
                                    <label for="fhr">FHR</label>
                                    <input type="text" class="form-control" id="fhr" value="120">
                                </div>
                                <div class="form-group">
                                    <label for="toco">TOCO</label>
                                    <input type="text" class="form-control" id="toco" value="98">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal">Tanggal Pemeriksaan</label>
                                    <input type="text" class="form-control" id="tanggal" value="10-10-2021">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <canvas id="myChart" style="height: 85%; width: 100%">

                    </canvas>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <script src="{{ asset('js/grafik.js') }}"></script>
    <script>
        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>

@endsection
