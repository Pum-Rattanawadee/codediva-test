@extends('layout.layout')

@section('title')
  Log in
@endsection

@section('content')
<div class="row justify-self-center">
  <h4 class="col col-12 text-center text-red my-3">LOG IN</h4>
</div>
<div class="row justify-content-center">
  <div class="col col-12 col-md-4 justify-content-center">
    {{ Form::open(array('url' => '/member/login', 'method' => 'post')) }}
      <div class="form-group">
        {{ Form::text('loginName', null, array('id' => 'loginName', 'class' => 'form-control', 'placeholder' => 'Email or Username', 'required' => 'required')) }}
      </div>
      <div class="form-group">
        {{ Form::password('password', array('id' => 'password', 'class' => 'form-control', 'placeholder' => 'Password', 'required' => 'required')) }}
      </div>
      <div>
        {{ Form::submit('Log in via Email', array('class' => 'btn common-button w-100')) }}
      </div>
    {{ Form::close() }}
    <div class="line-center my-3">Or</div>
    <div>
      {{ Form::button('Log in via Facebook', array('class' => 'btn blue-button w-100')) }}
    </div>
    <div class="text-center mt-4">
      Have you registered yet? <a href="#"> Sign up </a>
    </div>
    <div class="text-center mt-3 mb-5">
      <a href="#"> Forgot password ? </a>
    </div>
  </div>
</div>
@endsection