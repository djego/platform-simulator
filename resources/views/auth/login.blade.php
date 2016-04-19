@extends('layouts.app')

@section('content')
<div id="login" class="animate form">
    <section class="login_content">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
        <h1>Login</h1>
         {!! csrf_field() !!}
        <div>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div>
            <input type="password" class="form-control" placeholder="Password" required="" name="password" />
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div>
            <button type="submit" class="btn btn-default">
                <i class="fa fa-btn fa-sign-in"></i> Login
            </button>
        </div>
        <div class="clearfix"></div>
        <div class="separator">

          <p class="change_link">New to site?
            <a href="{{ url('register') }}" class="to_register"> Create Account </a>
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
