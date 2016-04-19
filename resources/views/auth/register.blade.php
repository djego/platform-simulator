@extends('layouts.app')

@section('content')
<div id="register" class="animate form">
    <section class="login_content">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
            {!! csrf_field() !!}
        <h1>Create Account</h1>
        <div>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name">
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
        <div>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-mail">
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div>
            <input type="password" class="form-control" name="password" placeholder="Password">
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div>
            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
        </div>        
        <div>
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-btn fa-user"></i>Register
            </button>
        </div>
        <div class="clearfix"></div>
        <div class="separator">

          <p class="change_link">Already a member ?
            <a href="{{ url('/login')}}" class="to_register"> Log in </a>
          </p>
          <div class="clearfix"></div>
          <br />
          <div>
            <h1><i class="fa fa-gamepad" style="font-size: 26px;"></i> Lecsim</h1>
            <p>©2015 All Rights Reserved.</p>
          </div>
        </div>
      </form>
      <!-- form -->
    </section>
</div>
@endsection
