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

    <div class="container">

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
