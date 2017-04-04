@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">


        <div class="form-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-3 col-md-6">
                        <form class="form-horizontal" action="{{ route('login') }}" method="POST" role="form">
                            {{ csrf_field() }}
                            <div class="header">LOG IN</div>
                            <div class="form-content">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <label class="control-label" ><i class="fa fa-envelope"></i></label>
                                        <input name="email" class="form-control" placeholder="Email" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <label class="control-label" ><i class="fa fa-key"></i></label>
                                        <input name="password" class="form-control" placeholder="Password" type="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-4">
                                            <button type="submit" class="btn btn-success">
                                                Login
                                            </button>

                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                Forgot Your Password?
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
@endsection


