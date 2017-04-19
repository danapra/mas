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
      <h1 class="panel-title text-uppercase text-center"><strong>FORM UPLOAD SURAT MASUK</strong></h1>
    </div>
    <div class="panel-body">
      <label for="fileField">Pilih File : </label>
      <input type="file" name="fileField" id="fileField"><br>
      <label for="textfield">Masukan Nama Surat :</label><br>
      <input type="text" name="textfield" id="textfield"><br><br>
      <label for="date">Tanggal Surat :</label><br>
      <input type="date" name="date" id="date"><br><br>
      <label for="textfield2">Tag : </label><br>
      <input type="text" name="textfield2" id="textfield2"><br><br>
      <label for="textarea">Keterangan Surat : </label><br>
      <textarea name="textarea" id="textarea"></textarea><br><br>
    <button type="button" class="btn btn-primary">Upload</button>
    <button type="button" class="btn btn-danger">Reset</button>
  &nbsp;</div>
  <div class="panel-footer text-center"><strong>MAS (Mailing Administrator System)</strong></div>
  </div>
@endsection