@extends('admin.layout.master')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">LAPORAN MEDIS PASIEN</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th>
                                            ID
                                        </th>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Alamat
                                        </th>
                                        <th>
                                            Umur
                                        </th>
                                        <th>
                                            FHR
                                        </th>
                                        <th>
                                            TOCO
                                        </th>
                                        <th>
                                            Aksi
                                        </th>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $key => $value)
                                        <tr>
                                            <td>
                                                {{ ++$key }}
                                            </td>
                                            <td>
                                                {{$value}}
                                            </td>
                                            <td>
                                                Banyuwangi
                                            </td>
                                            <td>
                                                21
                                            </td>
                                            <td>
                                                120
                                            </td>
                                            <td>
                                                98
                                            </td>
                                            <td>
                                                <a href="{{ route('laporan-detail', 1) }}"
                                                    class="btn btn-primary">Detail</a>

                                                <form action="{{ route('laporan-delete', 1) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit">Hapus</button>
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
    </div>
@endsection
