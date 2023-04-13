@extends('layout.layout1.template')

@section('content')
    
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
        <h1>Dashboard</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Menu</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </div>
  </div>
</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

<!-- Default box -->
<div class="container-fluid">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-6 col-4">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>Fergie Fatah Ardiansyah</h3>
          <p>08</p>
        </div>
        <div class="icon">
          <i class="fas fa-user"></i>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-4">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>Rambimo Regeng Pangestu</h3>
          <p>19</p>
        </div>
        <div class="icon">
          <i class="fas fa-user"></i>
        </div>
      </div>
    </div>
    <!-- ./col -->
  </div>
  <!-- /.row -->
  <!-- Main row -->
  
  <!-- /.row (main row) -->
</div>
  <!-- /.card-body -->
</div>
<!-- /.card -->


@endsection