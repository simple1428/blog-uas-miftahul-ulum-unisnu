@extends('auth.app')

@section('konten')


<div class="unix-login">
  <div class="container-fluid">
      <div class="row justify-content-center">
          <div class="col-lg-6">
              <div class="login-content">
                  <div class="login-logo">
                      <a href="index.html"><span>Aqila Jati </span></a>
                      @if(session()->has('success'))
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        @endif
                      @if(session()->has('loginError'))
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        @endif
                  </div>
                  <div class="login-form">
                      <h4>Administrator login</h4>
                      <form action="{{ url('/login') }}" method="post">
                        @csrf
                          <div class="form-group">
                              <label>Email address</label>
                              <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email')}}">
                              @error('email')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                          </div>
                          <div class="form-group">
                              <label>Password</label>
                              <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password">
                              @error('password')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                          </div>
                          
                          <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
                          <div class="register-link m-t-15 text-center">
                              <p>Don't have account ? <a href="{{ url('/register') }}"> Sign Up Here</a></p>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>


  @endsection