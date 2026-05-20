<x-layout>
    <x-slot:title>KUIS 1 Henry - Beranda</x-slot:title>

    <div class="text-center py-5 bg-white rounded shadow-sm p-4">
        <div class="mb-4">
            <span class="fs-1 p-3 bg-navy text-white rounded-circle shadow-sm">💻</span>
        </div>
        <h1 class="display-5 fw-bold text-navy mb-3">KUIS 1 - Pengembangan Aplikasi Web I - Henry</h1>
        <p class="lead text-muted mx-auto" style="max-width: 600px;">
            Sistem Informasi Manajemen Data Kampus (Fakultas & Program Studi)
        </p>

        <h5 class="text-secondary mt-5 mb-3 fw-semibold">Silakan pilih menu di bawah ini:</h5>
        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
            <a href="{{ route('fakultas.index') }}" class="btn btn-custom-dark btn-lg px-4 shadow-sm fw-bold">📁 Kelola Data Fakultas</a>
            <a href="{{ route('prodi.index') }}" class="btn btn-custom-dark btn-lg px-4 shadow-sm fw-bold">🎓 Kelola Data Prodi</a>
        </div>
    </div>
</x-layout>
