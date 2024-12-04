<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Bootstrap Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: url('{{ asset('ascent/assets/img/banner.png') }}') no-repeat center center;
      background-size: cover;
      height: 100vh;
    }
  </style>
</head>
<body class="d-flex align-items-center">
  <div class="container">
    <div class="row justify-content-center justify-content-center align-items-center">
      <!-- Login Card -->
      <div class="col-12 col-md-8 col-lg-8">
        <div class="card shadow-lg">
          <div class="card-body p-4">
            <h3 class="card-title text-center mb-5">Register an Account</h3>
            {{-- <p class="text-center text-muted mb-4">Please create an account to proceed</p> --}}

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Fullname</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="password" class="form-label">Password Confirmation</label>
                            <input type="password" class="form-control" id="password" name="password_confirmation" placeholder="Confirm your password" required>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-danger w-100 mb-3">Create Account</button>
                <p class="">Already have an account? <a href="{{ route('login') }}">Login</a></p>
            </form>

            <hr>

            <a class="btn btn-outline-danger w-100 d-flex align-items-center justify-content-center" href="{{ route('auth.google') }}">
              <img src="https://upload.wikimedia.org/wikipedia/commons/4/4a/Logo_2013_Google.png" alt="Google logo" class="me-2" style="height: 20px;">
              Sign up with Google
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
