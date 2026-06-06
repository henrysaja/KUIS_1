<x-auth-layout>
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card shadow border-0 rounded-3 p-4 bg-white">
                    <div class="card-body">

                        <h2 class="text-center mb-4 text-navy fw-bold">Masuk</h2>

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

                        <form action="{{ route('login') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label fw-semibold">Email</label>
                                <input type="email"
                                       name="email"
                                       id="email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       value="{{ old('email') }}"
                                       placeholder="nama@email.com"
                                       required
                                       autofocus>
                            </div>

                            <div class="mb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <label for="password" class="form-label fw-semibold mb-0">Password</label>
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="text-decoration-none small text-navy text-muted">Lupa Password?</a>
                                    @endif
                                </div>
                                <input type="password"
                                       name="password"
                                       id="password"
                                       class="form-control mt-2 @error('password') is-invalid @enderror"
                                       placeholder="••••••••"
                                       required>
                            </div>

                            <div class="mb-4 form-check">
                                <input type="checkbox" name="remember" class="form-check-input" id="remember">
                                <label class="form-check-label small text-muted" for="remember">Ingat Saya</label>
                            </div>

                            <button type="submit" class="btn btn-navy w-100 py-2 fw-semibold shadow-sm">Masuk</button>
                        </form>

                        @if (Route::has('register'))
                            <div class="text-center mt-4">
                                <p class="small text-muted mb-0">Belum punya akun? <a href="{{ route('register') }}" class="text-decoration-none text-navy fw-bold">Daftar Sekarang</a></p>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-auth-layout>
