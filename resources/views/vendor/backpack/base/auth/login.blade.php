@extends('backpack::layout')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="box-title" style="font-family: courier"><strong>Login Form</strong></div>
                </div>
                <div class="box-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url(config('backpack.base.route_prefix').'/login') }}">
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
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">{{ trans('backpack::base.password') }}</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> {{ trans('backpack::base.remember_me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ trans('backpack::base.login') }}
                                </button>

                                <!-- <a class="btn btn-link" href="{{ url(config('backpack.base.route_prefix', 'admin').'/password/reset') }}">{{ trans('backpack::base.forgot_your_password') }}</a> -->
                            </div>
                        </div>
                    </form>
                </div>
                
                <div class="box-header with-border">
                    <div class="box-title" style="font-family: courier"><strong>Fogot Password ?</strong></div>
                </div>
                <div class="box-body">
                    <form class="form-horizontal">
                        <div style="text-align: center;margin-bottom: 10px;"><label>CONTACT US</label></div>

                        <div class="form-group">
                            <label class="col-md-4 fa fa-phone" style="text-align: right; margin-top: 4px"><strong>  TELP KANTOR</strong></label>
                            <div class="col-md-6">
                                <strong>isi Nomor Telp</strong>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 fa fa-whatsapp" style="text-align: right; margin-top: 4px"><strong>  WHATSAPP</strong></label>
                            <div class="col-md-6">
                                <strong>isi No Whatsapp</strong>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 fa fa-at" style="text-align: right; margin-top: 4px"><strong>  E-MAIL</strong></label>
                            <div class="col-md-6">
                                <strong>isi Email</strong>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 fa fa-map-marker" style="text-align: right; margin-top: 4px"><strong>  KANTOR</strong></label>
                            <div class="col-md-6">
                                <strong>Jl.Semolowaru 45, Menur Pumpungan, Sukolilo, Surabaya 60118</strong>
                            </div>
                        </div>
                
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
