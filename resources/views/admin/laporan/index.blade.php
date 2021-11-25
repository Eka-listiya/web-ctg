@extends('admin.layout.master')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">LAPORAN MEDIS PASIEN</h4>
                        <p class="card-category"> Here is a subtitle for this table</p>
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
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            Yofan
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
                                            <a href="#" class="btn btn-primary">Detail</a>

                                            <form  method="post">
                                                <button class="btn btn-danger" type="submit">Hapus</button>
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
</div>
@endsection