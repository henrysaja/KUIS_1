<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'KUIS 1 Henry' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bg-navy { background-color: #001f3f !important; }
        .text-navy { color: #001f3f !important; }
        .btn-custom-dark { background-color: #000000 !important; color: #ffffff !important; border: 1px solid #000000; }
        .btn-custom-dark:hover { background-color: #222222 !important; color: #ffffff !important; }
    </style>
</head>
<body class="bg-light">

    <!-- Navbar Navy -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-navy shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">KUIS 1 Henry</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item me-2">
                        <a class="nav-link btn btn-custom-dark px-3 btn-sm my-1 text-white" href="{{ route('fakultas.index') }}">Fakultas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-custom-dark px-3 btn-sm my-1 text-white" href="{{ route('prodi.index') }}">Prodi</a>
                    </li>
                  </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <!-- Feedback Flash Message Global -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
                <strong>Sukses!</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Validasi Error Global -->
        @if ($errors->any())
            <div class="alert alert-danger shadow-sm">
                <strong class="d-block mb-2">Periksa Kembali Inputan Anda:</strong>
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Slot isi konten halaman -->
        {{ $slot }}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
