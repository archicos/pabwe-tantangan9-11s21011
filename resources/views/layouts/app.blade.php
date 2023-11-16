<!DOCTYPE html>
<html>

<head>
    <title>PABWE Praktikum 8</title>
    <link href="{{ asset('assets/vendor/bootstrap-5.2.3-dist/css/bootstrap.min.css') }}" rel="stylesheet"/>
</head>

<body>
<div class="container-fluid p-5">
    <div class="card">
        <div class="card-body">

            <div class="d-flex justify-content-between mb-3">
                <div>
                    <h3>Hay, <span class="text-primary">{{ $auth->name }}</span></h3>
                </div>
                <div>
                    <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editProfile">Profile</a>
                    <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
                </div>
            </div>

            <div class="mb-3">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link {{request()->routeIs('home') ? 'active' : ''}}" href="{{route("home")}}">
                            Kelola Todolist
                        </a>
                    </li>
                    @if($auth->role == 'Admin')
                        <li class="nav-item">
                            <a class="nav-link {{request()->routeIs('admin.users') ? 'active' : ''}}" href="{{route("admin.users")}}">
                                Kelola Users
                            </a>
                        </li>
                    @endif
                </ul>
            </div>

            @yield('content')

        </div>
    </div>
</div>

{{-- MODAL EDIT PROFILE --}}
<div class="modal fade" id="editProfile" tabindex="-1" aria-labelledby="editProfileLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProfileLabel">Edit Profil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('post.todo.add') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="inputActivity" class="form-label">Aktivitas</label>
                        <input type="text" name="activity" class="form-control" id="inputActivity"
                                placeholder="Contoh: Belajar membuat aplikasi website sederhana">
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('assets/vendor/bootstrap-5.2.3-dist/js/bootstrap.min.js') }}"></script>

@yield('other-js')

</body>

</html>
