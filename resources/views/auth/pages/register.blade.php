@extends('auth.app')
@section('konten')
<div class="unix-login">
  <div class="container-fluid">
      <div class="row justify-content-center">
          <div class="col-lg-6">
              <div class="login-content">
                  <div class="login-logo">
                      <a href="index.html"><span>Aqila Jati</span></a>
                  </div>
                  <div class="login-form">
                      <h4>Register to Administration</h4>
                      <form action="{{ url('/register') }}" method="post">
                        @csrf
                          <div class="form-group">
                              <label> Name</label>
                              <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="  Name" name="name" value="{{ old('name')}}">
                              @error('name')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                          </div>
                          <div class="form-group">
                              <label>User Name</label>
                              <input type="text" class="form-control @error('username') is-invalid @enderror" placeholder="User Name" name="username" value="{{ old('username')}}">
                              @error('username')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                          </div>
                          <div class="form-group">
                              <label>Email address</label>
                              <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email')}}">
                              @error('email')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                          </div>
                          <div class="form-group">
                              <label>Password</label>
                              <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" value="{{ old('password')}}">
                              @error('username')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror

                          </div>
                          <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>

                          
                          
                          <div class="register-link m-t-15 text-center">
                              <p>Already have account ? <a href="{{ url('/login') }}"> Sign in</a></p>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
  @endsection