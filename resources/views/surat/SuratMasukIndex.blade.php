@extends('backpack::layout')

@section('header')
<!--     <section class="content-header">
      <h1>
        {{ trans('backpack::base.dashboard') }}<small>{{ trans('backpack::base.first_page_you_see') }}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">{{ trans('backpack::base.dashboard') }}</li>
      </ol>
    </section> -->
@endsection

@section('content')

  <div class="panel panel-default">
    <div class="panel-heading">
      <h1 class="panel-title text-uppercase text-center"><strong>INDEX SURAT MASUK</strong></h1>
    </div>
    <div class="panel-body">
      <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" style="margin-top: 8px">
      <a class="btn btn-primary" href="../surat/create" name="upload">Upload</a></div>
      
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="defaultNavbar1">
    <form class="navbar-form navbar-left" role="search" action="{{route('surat.masuk')}}">  
      <ul class="nav navbar-nav">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" name="cari">
        </div>
        <button type="submit" class="btn btn-default" name="submit">Submit</button>
    </form>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
<div class="container">
  <h2>Hasil Pencarian</h2>
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Nama Surat</th>
          <th>Nama User</th>
          <th>Tanggal Surat</th>
          <th>Tanggal Upload</th>
          <th>Tag</th>
          <th>Keterangan</th>
          <th>Unduh</th>
          @hasrole('admin')
          <th>Hapus</th>
          @endhasrole
        </tr>
      </thead>
      <tbody>
  <!--  Input Berupad data-->
       @foreach($data as $d)
      <tr>
       <td>{{ $d-> nama_surat }}</td>
       <td>{{ $d-> id_user }}</td>
       <td>{{ $d-> tanggal_surat }}</td>
       <td>{{ $d-> created_at }}</td>
       <td>{{ $d-> tag }}</td>
       <td>{{ $d-> keterangan }}</td>
      </tr>
       @endforeach
      </tbody>
    </table>
  </div>
</div>

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js"></script>
    </div>
  <div class="panel-footer text-center"><strong>MAS (Mailing Administrator System)</strong></div>
  </div>

@endsection
