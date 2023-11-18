@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Login</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('post.login') }}">
                        @csrf

                        @if(session('error_message'))
                            <div class="alert alert-danger">
                                {{ session('error_message') }}
                            </div>
                        @endif

                        <div class="form-group mb-2">
                            <label for="email">Alamat Email</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                            <span id="emailError" class="text-danger"></span>
                        </div>

                        <div class="form-group mb-2">
                            <label for="password">Kata Sandi</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                            <span id="passwordError" class="text-danger"></span>
                        </div>

                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                Ingat Saya
                            </label>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">
                                Masuk
                            </button>
                        </div>

                        <hr />

                        <div class="mb-2 text-center">
                            <span>Belum memiliki akun? <a href="{{ route('register') }}">daftar disini</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const emailInput = document.getElementById('email');
    const emailError = document.getElementById('emailError');

    emailInput.addEventListener('input', function() {
        const emailValue = emailInput.value.trim();

        if (isValidEmail(emailValue)) {
            emailInput.classList.add('valid-email');
            emailInput.classList.remove('invalid-email');
            emailError.innerText = '';
        } else {
            emailInput.classList.add('invalid-email');
            emailInput.classList.remove('valid-email');
            emailError.innerText = 'Invalid email';
        }
    });

    function isValidEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    const passwordInput = document.getElementById('password');
    const passwordError = document.getElementById('passwordError');

    passwordInput.addEventListener('input', function() {
        const passwordValue = passwordInput.value.trim();

        if (passwordValue.length >= 5) {
            passwordInput.classList.add('valid-password');
            passwordInput.classList.remove('invalid-password');
            passwordError.innerText = '';
        } else {
            passwordInput.classList.add('invalid-password');
            passwordInput.classList.remove('valid-password');
            passwordError.innerText = 'Password kurang';
        }
    });
    
</script>




@endsection
