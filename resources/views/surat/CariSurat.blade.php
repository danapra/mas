@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
        {{ trans('backpack::base.dashboard') }}<small>{{ trans('backpack::base.first_page_you_see') }}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">{{ trans('backpack::base.dashboard') }}</li>
      </ol>
    </section>
@endsection

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">
    <h1 class="panel-title text-uppercase text-center"><strong>pencarian surat</strong></h1>
  </div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#inverseNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand" href="#">Pencarian</a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="inverseNavbar1">
      <ul class="nav navbar-nav">
        <li class="active"></li>
        <li></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Jenis Surat<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Surat Masuk</a></li>
            <li><a href="#">Surat Keluar</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Nama Surat">
          <input type="text" class="form-control" placeholder="Tag">
        </div>
        <button type="submit" class="btn btn-default">Cari</button>
      </form>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
<div class="panel-body">
  <table width="95%" border="2">
    <tbody>
      <tr>
        <td width="29" align="center">NO</td>
        <td width="88" align="center">Nama User </td>
        <td width="99" align="center">Nama Surat </td>
        <td width="126" align="center">Tanggal Surat </td>
        <td width="138" align="center"> Tanggal Upload</td>
        <td width="72" align="center">Tag </td>
        <td width="121" align="center">Keterangan</td>
        <td width="63" align="center">Unduh</td>
        @hasrole('admin')
        <td width="63" align="center">Hapus</td>
        @endhasrole
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        @hasrole('admin')
        <td>&nbsp;</td>
        @endhasrole
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        @hasrole('admin')
        <td>&nbsp;</td>
        @endhasrole
      </tr>
    </tbody>
  </table> 
  <br>
</div>
<div class="panel-footer text-center"><strong>MAS (Mailing Administrator System)</strong></div>
</div>

@endsection