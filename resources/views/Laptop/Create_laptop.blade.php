@extends('layout.layout1.template')

@section('content')
    
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Mahasiswa</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Mahasiswa</li>

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
        <form method="POST" action="{{ $url_form }}">
          @csrf
          {!! (isset($smp))? method_field('PUT') : '' !!}

          <div class="form-group">
            <label>Merk</label>
            <input class="form-control @error('merk') is-invalid @enderror" value="{{ isset($smp)? $smp->merk : old('merk') }}" name="merk" type="text" />
            @error('merk')
              <span class="error invalid-feedback">{{ $message }} </span>
            @enderror
          </div>
          <div class="form-group">
            <label>Seri</label>
            <input class="form-control @error('seri') is-invalid @enderror" value="{{ isset($smp)? $smp->seri : old('seri') }}" name="seri" type="text"/>
            @error('seri')
              <span class="error invalid-feedback">{{ $message }} </span>
            @enderror
          </div>
          <div class="form-group">
            <label>Processor</label>
            <input class="form-control @error('processor') is-invalid @enderror" value="{{ isset($smp)? $smp->processor : old('processor') }}" name="processor" type="text"/>
            @error('processor')
              <span class="error invalid-feedback">{{ $message }} </span>
            @enderror
          </div>
          <div class="form-group">
            <label>Display</label>
            <input class="form-control @error('display') is-invalid @enderror" value="{{ isset($smp)? $smp->display : old('display') }}" name="display" type="text"/>
            @error('display')
              <span class="error invalid-feedback">{{ $message }} </span>
            @enderror
          </div>
          <div class="form-group">
            <label>Ram</label>
            <input class="form-control @error('ram') is-invalid @enderror" value="{{ isset($smp)? $smp->ram : old('ram') }}" name="ram" type="text"/>
            @error('ram')
              <span class="error invalid-feedback">{{ $message }} </span>
            @enderror
          </div>
          <div class="form-group">
            <label>Internal</label>
            <input class="form-control @error('internal') is-invalid @enderror" value="{{ isset($smp)? $smp->internal : old('internal') }}" name="internal" type="text"/>
            @error('internal')
              <span class="error invalid-feedback">{{ $message }} </span>
            @enderror
          </div>
          <div class="form-group">
            <label>Battery</label>
            <input class="form-control @error('battery') is-invalid @enderror" value="{{ isset($smp)? $smp->battery : old('battery') }}" name="battery" type="text"/>
            @error('battery')
              <span class="error invalid-feedback">{{ $message }} </span>
            @enderror
          </div>
          <div class="form-group">
            <label>Harga</label>
            <input class="form-control @error('harga') is-invalid @enderror" value="{{ isset($smp)? $smp->harga : old('harga') }}" name="harga" type="text"/>
            @error('harga')
              <span class="error invalid-feedback">{{ $message }} </span>
            @enderror
          </div>
          <div class="form-group">
            <a href="{{ url('smartphone')}}" class="btn btn-sm btn-primary">Batal</a>
            <button class="btn btn-sm btn-primary">Simpan</button>
          </div>
        </form>
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