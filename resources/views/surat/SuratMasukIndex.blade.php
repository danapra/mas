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
      
      <div class="col-xs-12">
        <form class="navbar-form navbar-left" role="search" action="{{route('surat.masuk')}}">  
        
          <div class="form-group row align-items-center">
            <div class="col-9">
              <a class="btn btn-primary" href="{{route('surat.create')}}" name="upload">Upload</a> 
              <input type="text" class="form-control" placeholder="Search" name="cari">
              <button type="submit" class="btn btn-default" name="submit">Submit</button>
            </div>
          </div>
          
        </form>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</nav>
<div class="container">
  <h2>Hasil Pencarian</h2>
  <div class="table-responsive">
    <table class="table table-striped">   
      <thead>
        <tr>
          <th>Surat</th>
          <th>User</th>
          <th>Tgl Surat</th>
          <th>Tgl Upload</th>
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
       <td>{{ substr($d-> tanggal_surat,0,10) }}</td>
       <td>{{ substr($d-> created_at,0,10) }}</td>
       <td>{{ $d-> tag }}</td>
       <td>{{ $d-> keterangan }}</td>
       <td><a href="{{ $d-> image}}" download="filename.{{ $d-> mime}}">Download</a></td>
       @hasrole('admin')
       <td><a href="{{route('surat.delete',$d->id)}}">Delete</a></td>
       @endhasrole
      </tr>
       @endforeach
      </tbody>
    </table>
  </div>
  {{ $data->render()

  }}
</div>

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js"></script>
    </div>
  <div class="panel-footer text-center"><strong>MAS (Mailing Administrator System)</strong></div>
  </div>

@endsection
