@extends('Layouts.main')

@section('container')

    <div class="row justify-content-center">
    <div class="col-lg-5">
            <main class="form-signin w-100 m-auto">
                <form action="/register" method="POST">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal text-center">From Register</h1>
                    <div class="form-floating">
                        <label for="floatingInput">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name" required value="{{ old('name') }}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                      </div>
                    <div class="form-floating">
                        <label for="floatingInput">User Name</label>
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" required value="{{ old('username') }}">
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                      </div>
                  <div class="form-floating">
                      <label for="floatingInput">Email address</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="emailaddress" required value="{{ old('email') }}">
                      @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                          </div>
                          @enderror
                  </div>
                  <div class="form-floating">
                      <label for="floatingPassword">Password</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required value="{{ old('password') }}">
                      @error('password')
                      <div class="invalid-feedback">
                          {{ $message }}
                          </div>
                          @enderror
                  </div>
                  <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
                </form>
                <small class="d-blcok text-center">Alredy Registerd?<a href="/">Login</a></small>
              </main>
        </div>
</div>

@endsection
