@extends('backpack::layout')

@section('header')
    <!-- <section class="content-header">
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

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand" href="#" name="cari">Pencarian</a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="defaultNavbar1">
    <form class="navbar-form navbar-left" role="search" action="{{route('surat.cari.execute')}}">  
      <ul class="nav navbar-nav">
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Filter<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <span class="label label-info" name="jenis">Jenis Surat</span>
        <li><input type="checkbox" value="" name="sMasuk">Surat Masuk</li>
              <li><input type="checkbox" value="" name="sKeluar">Surat Keluar</li>
            <li role="separator" class="divider"></li>
            <span class="label label-warning">Berdasarkan</span>
              <li><input type="radio" name="sortname">Nama Surat</li>
            <li><input type="radio" name="tag">Tag Surat</li>
          </ul>
        </li>
      </ul>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default" name="submi">Submit</button>
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
      </tbody>
    </table>
  </div>
</div>

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js"></script>

@endsection