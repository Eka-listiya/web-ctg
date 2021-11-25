@extends('admin.layout.master')

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">DATA PASIEN</h4>
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
                    Action
                  </th>
                </thead>
                <tbody>
                  @foreach ($data as $i =>$pass)
                  <tr>
                    <td> {{ ++$i }}</td>
                    <td> {{ $pass->nama_pasien }}</td>
                    <td> {{ $pass->alamat_pasien }} </td>
                    <td> {{ $pass->umur_pasien }} </td>
                    <td>
                      <a href="{{ route('pasien-detail', $pass->id) }}" class="btn btn-primary">Detail</a>

                      <form action="{{ route('pasien-delete', $pass->id) }}" method="post">
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