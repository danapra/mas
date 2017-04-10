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
  <!doctype html>
  <html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Surat Masuk</title>
  <!-- <link href="css/bootstrap.css" rel="stylesheet" type="text/css"> -->
  <link href="css/bootstrap-3.3.5.css" rel="stylesheet" type="text/css">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  </head>

  <body>
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
      <textarea name="textarea" id="textarea"></textarea>
  &nbsp;</div>
  <div class="panel-footer text-center"><strong>MAS (Mailing Administrator System)</strong></div>
  </div>
  </body>
  </html>
@endsection