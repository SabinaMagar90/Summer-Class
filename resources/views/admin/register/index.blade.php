<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

    <!-- Bootstrap CSS & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <style>
        body {
            background: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .login-container {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1.5rem;
        }

        .login-card {
            max-width: 420px;
            width: 100%;
            padding: 2rem;
            border-radius: 0.75rem;
            background-color: #fff;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #0d6efd;
        }

        .btn-primary {
            width: 100%;
            background-color: #0d6efd;
            border-color: #0d6efd;
        }

        .btn-primary:hover {
            background-color: #0b5ed7;
        }

        .text-danger {
            font-size: 0.875rem;
        }

        .form-label {
            font-weight: 500;
        }

        .text-center a {
            color: #0d6efd;
        }

        .text-center a:hover {
            text-decoration: underline;
        }

        @media (max-width: 576px) {
            .login-card {
                padding: 1.5rem;
            }
        }
    </style>
</head>

<body>

    <div class="login-container">
        <div class="login-card">
            <h4 class="text-center mb-4">Register</h4>

            <form method="POST" action="{{ route('admin.register.store') }}">
                @csrf

                <!-- Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name"
                        name="name" value="{{ old('name') }}" required>
                    @error('name')
                    <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email"
                        name="email" value="{{ old('email') }}" required>
                    @error('email')
                    <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Enter your password" required>
                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                            <i class="bi bi-eye-slash pw-hide-show"></i>
                        </button>
                    </div>
                    @error('password')
                    <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                            placeholder="Confirm your password" required>
                        <button class="btn btn-outline-secondary" type="button" id="togglePasswordConfirm">
                            <i class="bi bi-eye-slash pw-hide-show-confirm"></i>
                        </button>
                    </div>
                    @error('password_confirmation')
                    <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Register Button -->
                <button type="submit" class="btn btn-primary">Register</button>
            </form>

            <p class="text-center mt-3 mb-0">Already have an account?
                <a href="{{ route('admin.login.index') }}">Login</a>
            </p>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script for toggling password visibility (same as login) -->
    <script>
        $(document).ready(function () {
            $(".pw-hide-show").click(function () {
                if ($('#password').attr('type') === 'text') {
                    $('#password').attr('type', 'password');
                    $(this).addClass('bi-eye-slash').removeClass('bi-eye');
                } else {
                    $('#password').attr('type', 'text');
                    $(this).addClass('bi-eye').removeClass('bi-eye-slash');
                }
            });

            $(".pw-hide-show-confirm").click(function () {
                if ($('#password_confirmation').attr('type') === 'text') {
                    $('#password_confirmation').attr('type', 'password');
                    $(this).addClass('bi-eye-slash').removeClass('bi-eye');
                } else {
                    $('#password_confirmation').attr('type', 'text');
                    $(this).addClass('bi-eye').removeClass('bi-eye-slash');
                }
            });
        });
    </script>

</body>

</html>
