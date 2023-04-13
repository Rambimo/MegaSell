@extends('layout.layout1.template')

@section('content')
    
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Laptop</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Laptop</li>

          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Kelas 2B</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <a href="{{url('laptop/create')}}" class="btn btn-sm btn-success my-2">Tambah Data</a>
        <form action="{{url('laptop')}}" method="get">
          <div class="input-group mb-3 w-25">
              <input type="text" name="search" class="form-control" placeholder="Search"
                     value="{{request()->search}}">
              <div class="input-group-append">
                  <button class="btn btn-primary" type="submit">Search</button>
              </div>
          </div>
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Merk</th>
              <th>Seri</th>
              <th>Processor</th>
              <th>Display</th>
              <th>Ram</th>
              <th>Internal</th>
              <th>Battery</th>
              <th>Harga</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @if($lpt->count() > 0)
              @foreach ($lpt as $i => $m)
                  <tr>
                    <td>{{++$i}}</td>
                    <td>{{$m->merk}}</td>
                    <td>{{$m->seri}}</td>
                    <td>{{$m->processor}}</td>
                    <td>{{$m->display}}</td>
                    <td>{{$m->ram}}</td>
                    <td>{{$m->internal}}</td>
                    <td>{{$m->battery}}</td>
                    <td>{{$m->harga}}</td>
                    <td>
                      <a href="{{ url('/laptop/'. $m->id.'/edit') }}" class="btn btn-sm btn-warning">Edit</a>
                      <form method="POST" action="{{ url('/laptop/'.$m->id)}}" class="d-inline pl-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                      </form>
                    </td>
                  </tr>
              @endforeach
            @else
              <tr>
                <td colspan="9" class="text-center">Data tidak ada</td>
              </tr>
            @endif
          </tbody>
        </table>
        {{ $lpt->links() }}
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        Footer
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>

@endsection