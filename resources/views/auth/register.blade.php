@extends('layouts.auth')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">Register</div>

        <div class="card-body">
          <form id="registerForm" method="POST" action="{{ route('post.register') }}">
            @csrf

            <div class="form-group mb-2">
              <label for="name">Nama Lengkap</label>
              <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
              <span id="nameError" class="text-danger"></span>
            </div>

            <div class="form-group mb-2">
              <label for="email">Alamat Email</label>
              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
              <span id="emailError" class="text-danger"></span>
            </div>

            <div class="form-group mb-2">
              <label for="password">Kata Sandi</label>
              <input id="password" type="password" class="form-control" name="password" required>
              <span id="passwordError" class="text-danger"></span>
            </div>

            <div class="text-end">
              <button type="button" class="btn btn-primary" onclick="validateForm()">Daftar</button>
            </div>

            <div class="mb-2 text-center">
              <span>Sudah memiliki akun? <a href="{{ route('login') }}">masuk disini</a></span>
            </div>
            
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  .valid-email {
    background-color: #99ff99; /* Warna hijau ketika email valid */
  }

  .invalid-email {
    background-color: #ff9999; /* Warna merah ketika email tidak valid */
  }

  .input-animate {
    transition: background-color 0.3s;
  }
  .valid-password {
    background-color: #99ff99; /* Warna hijau ketika password valid */
  }

  .invalid-password {
    background-color: #ff9999; /* Warna merah ketika password tidak valid */
  }

  .valid-name {
  background-color: #99ff99; /* Warna hijau ketika nama valid */
}

.invalid-name {
  background-color: #ff9999; /* Warna merah ketika nama tidak valid */
}
</style>

<script>
  const emailInput = document.getElementById('email');
  const emailError = document.getElementById('emailError');

  emailInput.addEventListener('input', function() {
    const emailValue = emailInput.value.trim();
    
    if (isValidEmail(emailValue)) {
      emailInput.classList.add('valid-email', 'input-animate');
      emailInput.classList.remove('invalid-email', 'input-animate');
      emailError.innerText = '';
    } else {
      emailInput.classList.add('invalid-email', 'input-animate');
      emailInput.classList.remove('valid-email', 'input-animate');
      emailError.innerText = 'Alamat Email tidak valid';
    }
  });

  function validateForm() {
    var name = document.getElementById('name').value;
    var emailValue = emailInput.value.trim();
    var password = document.getElementById('password').value;

    // Validasi Nama
    if (!name) {
      document.getElementById('nameError').innerText = 'Nama harus diisi';
      document.getElementById('nameError').classList.add('text-danger');
      return;
    } else {
      document.getElementById('nameError').innerText = '';
      document.getElementById('nameError').classList.remove('text-danger');
    }

    // Validasi Email
    if (!emailValue) {
      document.getElementById('emailError').innerText = 'Alamat Email harus diisi';
      return;
    } else if (!isValidEmail(emailValue)) {
      document.getElementById('emailError').innerText = 'Alamat Email tidak valid';
      return;
    } else {
      document.getElementById('emailError').innerText = '';
    }

    // Validasi Password
    if (!password) {
      document.getElementById('passwordError').innerText = 'Kata Sandi harus diisi';
      document.getElementById('passwordError').classList.add('text-danger');
      return;
    } else {
      document.getElementById('passwordError').innerText = '';
      document.getElementById('passwordError').classList.remove('text-danger');
    }

    // Jika lolos validasi, submit formulir
    document.getElementById('registerForm').submit();
  }

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
            passwordError.innerText = 'Kata Sandi harus lebih dari 5 karakter';
        }
    });


    const nameInput = document.getElementById('name');
const nameError = document.getElementById('nameError');

nameInput.addEventListener('input', function() {
    const nameValue = nameInput.value.trim();

    if (!nameValue) {
        nameInput.classList.add('invalid-email', 'input-animate');
        nameInput.classList.remove('valid-email', 'input-animate');
        nameError.innerText = 'Nama harus diisi';
    } else {
        nameInput.classList.add('valid-email', 'input-animate');
        nameInput.classList.remove('invalid-email', 'input-animate');
        nameError.innerText = '';
    }
});
</script>
@endsection
