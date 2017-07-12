@extends('backpack::layout')

<!-- Main Content -->
@section('content')
<!--     <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="box-title">Hubungi WebAdmin</div>
                </div>
                <div class="box-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url(config('backpack.base.route_prefix', 'admin').'/password/email') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">{{ trans('backpack::base.email_address') }}</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> -->
<h1 style="font-family: courier;text-align: left;color: #33334d"><b>CONTACT US<b></h1>

<div class="cont-right">
    <!-- Start First Contact Div  -->
    <div class="contact one" style="min-width:350px">
      <span class="ico">
        <i class="fa fa-map-marker"
           aria-hidden="true">
        </i>
      </span>
      <span class="txt">
        Jl.Semolowaru 45, Surabaya 60118
      </span>
    </div>
    <!-- End First Contact Div  -->

    <!-- Start Second Contact Div  -->
    <div class="contact tow" style="min-width:350px">
      <span class="ico">
        <i class="fa fa-phone" 
           aria-hidden="true">
        </i>
      </span>
      <span class="txt">
        Telp
      </span>
    </div>
    <!-- End Second Contact Div  -->

    <!-- Start Thrid Contact Div  -->
    <div class="contact three" style="min-width:350px">
      <span class="ico">
        <i class="fa fa-at"
           aria-hidden="true">
        </i>
      </span>
      <span class="txt">
        Email
      </span>
    </div>
    <!-- End Thrid Contact Div  -->

    <!-- Start Forth Contact Div  -->
    <div class="contact four" style="min-width:350px">
      <span class="ico">
        <i class="fa fa-whatsapp"
           aria-hidden="true">
        </i>
      </span>
      <span class="txt">
        Whatsapp
      </span>
    </div>
    <!-- End Forth Contact Div  -->
  </div>

                      <!--   <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-envelope"></i> {{ trans('backpack::base.send_reset_link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
@endsection
