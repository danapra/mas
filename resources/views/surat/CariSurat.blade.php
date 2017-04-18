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
  <div class="panel-body">
  <div style="width: 100%" class="col-xs-8 col-xs-offset-2 col-md-offset-0">
    <div class="input-group">
      <div class="input-group-btn search-panel">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> <span id="search_concept">Filter by</span> <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#contains">Contains</a></li>
          <li><a href="#its_equal">It's equal</a></li>
          <li><a href="#greather_than">Greather than ></a></li>
          <li><a href="#less_than">Less than < </a></li>
          <li class="divider"></li>
          <li><a href="#all">Anything</a></li>
        </ul>
      </div>
      <input type="hidden" name="search_param" value="all" id="search_param">
      <input type="text" class="form-control" name="x" placeholder="Search term...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
      </span></div>
  </div> </div> </div><div>
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