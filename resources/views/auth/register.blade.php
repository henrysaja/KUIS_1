<x-auth-layout>
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100 py-5">
            <div class="col-12 col-md-6 col-lg-5">
                <div class="card shadow border-0 rounded-3 p-4 bg-white">
                    <div class="card-body">

                        <h2 class="text-center mb-4 text-navy fw-bold">Daftar Akun Baru</h2>

                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <ul class="mb-0 ps-3">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <form action="{{ route('register') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label fw-semibold">Nama Lengkap</label>
                                <input type="text"
                                       name="name"
                                       id="name"
                                       class="form-control @error('name') is-invalid @enderror"
                                       value="{{ old('name') }}"
                                       placeholder="Nama lengkap Anda"
                                       required
                                       autofocus>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label fw-semibold">Email</label>
                                <input type="email"
                                       name="email"
                                       id="email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       value="{{ old('email') }}"
                                       placeholder="nama@email.com"
                                       required>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label fw-semibold">Password</label>
                                <input type="password"
                                       name="password"
                                       id="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       placeholder="Minimal 8 karakter"
                                       required>
                            </div>

                            <div class="mb-4">
                                <label for="password_confirmation" class="form-label fw-semibold">Konfirmasi Password</label>
                                <input type="password"
                                       name="password_confirmation"
                                       id="password_confirmation"
                                       class="form-control"
                                       placeholder="Ulangi password Anda"
                                       required>
                            </div>

                            <button type="submit" class="btn btn-navy w-100 py-2 fw-semibold shadow-sm">Daftar</button>
                        </form>

                        <div class="text-center mt-4">
                            <p class="small text-muted mb-0">Sudah punya akun? <a href="{{ route('login') }}" class="text-decoration-none text-navy fw-bold">Masuk di sini</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-auth-layout>
