@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

       
    <div class="form-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <form class="form-horizontal" action="{{ route('register') }}" method="POST" role="form">
                {{ csrf_field() }}
                    <div class="header">SIGN UP</div>
                    <div class="form-content">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label class="control-label" ><i class="fa fa-user"></i></label>
                                <input name="name" class="form-control" placeholder="name" type="text">
                            </div>
                        </div>
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
                            <div class="col-sm-12">
                                <label class="control-label" ><i class="fa fa-key"></i></label>
                                <input name="password_confirmation" class="form-control" placeholder="Password" type="password">
                            </div>
                        </div>
                        <div class="clearfix">
                            <button type="submit" class="btn btn-default">REGISTER</button>
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

                       