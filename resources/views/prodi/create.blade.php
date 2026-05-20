<x-layout>
    <x-slot:title>Tambah Program Studi</x-slot:title>

    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
        <div class="bg-navy p-4">
            <h3 class="fw-bold text-white mb-1">Tambah Data Program Studi</h3>
            <p class="text-white-50 small mb-0">Tambahkan informasi program studi baru ke dalam sistem</p>
        </div>

        <div class="card-body p-4 bg-white">
            <form action="{{ route('prodi.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label fw-bold text-secondary">Nama Program Studi</label>
                    <input type="text" name="nama_prodi" class="form-control form-control-lg rounded-3" value="{{ old('nama_prodi') }}" placeholder="Masukkan nama program studi" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold text-secondary">Nama Kaprodi</label>
                    <input type="text" name="nama_kaprodi" class="form-control form-control-lg rounded-3" value="{{ old('nama_kaprodi') }}" placeholder="Masukkan nama kepala program studi" required>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold text-secondary">Alias Prodi (Misalnya SI, IF, AK, dll)</label>
                    <input type="text" name="alias_prodi" class="form-control form-control-lg rounded-3" value="{{ old('alias_prodi') }}" placeholder="Contoh: SI" required>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-custom-dark fw-bold px-4 py-2 rounded-3 shadow-sm">
                        Simpan Data
                    </button>
                    <a href="{{ route('prodi.index') }}" class="btn btn-light border fw-semibold px-4 py-2 rounded-3 text-muted">
                        Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-layout>
