<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BCP - Student Information System</title>

        @include('_partials.style')
        
    </head>

    <body class="antialiased">
        
        <main>
            <div class="container">
        
              <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class=" bg-light col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
        
                      <div class="d-flex justify-content-center pt-4">
                        <a href="index.html" style="text-decoration: none;" class="logo d-flex align-items-center w-auto">
                          <img src="https://elc-public-images.s3.ap-southeast-1.amazonaws.com/bcp-olp-logo-mini2.png" alt="Logo">
                          <span class="d-none d-lg-block pe-2">Student Information System</span>
                        </a>
                      </div><!-- End Logo -->
        
                      <div class="card mb-3 bg-transparent border-0 shadow-none">
        
                        <div class="card-body bg-transparent">
        
                          <div class="pt-4 pb-2">
                            <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                            <p class="text-center small">Enter your username & password to login</p>
                          </div>
        
                          <form method="POST" action="{{ route('login.user') }}" class="row g-3 needs-validation" novalidate >
                            @csrf
                            <div class="col-12">
                              <label for="yourUsername" class="form-label">Username</label>
                              <div class="input-group has-validation">
                                <input type="text" name="username" class="form-control" id="yourUsername" required>
                                <div class="invalid-feedback">Please enter your username.</div>
                              </div>
                            </div>
        
                            <div class="col-12">
                              <label for="yourPassword" class="form-label">Password</label>
                              <input type="password" name="password" class="form-control" id="yourPassword" required>
                              <div class="invalid-feedback">Please enter your password!</div>
                            </div>
        
                            <div class="col-12">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Remember me</label>
                              </div>
                            </div>
                            <div class="col-12">
                              <button class="btn btn-primary w-100" type="submit">Login</button>
                            </div>
                            @if($errors->any())
                              <div class="col-12">
                                <strong>{{ $errors->first() }}</strong>
                              </div>
                            @endif
                            <div class="col-12">
                              <p class="small mb-0">Don't have account? <a href="pages-register.html">Create an account</a></p>
                            </div>
                          </form>
        
                        </div>
                      </div>
        
                      <div class="credits pb-3">
                        BCP - SIS Team 2024
                      </div>
        
                    </div>
                  </div>
                </div>
        
              </section>
        
            </div>
        </main>

        @include('_partials.script')

    </body>

</html>
