<x-layout>
    <x-slot:title>Tambah Fakultas</x-slot:title>

    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

        <div class="bg-navy p-4">
            <h3 class="fw-bold text-white mb-1">Tambah Data Fakultas</h3>
            <p class="text-white-50 small mb-0">Masukkan informasi fakultas baru ke dalam sistem basis data</p>
        </div>

        <div class="card-body p-4 bg-white">
            <form action="{{ route('fakultas.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label fw-bold text-secondary">Nama Fakultas</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light text-muted border-end-0 rounded-start-3">
                            🏢
                        </span>
                        <input type="text" name="nama_fakultas"
                               class="form-control form-control-lg border-start-0 rounded-end-3 fs-6"
                               placeholder="Contoh: Fakultas Sains dan Teknologi"
                               value="{{ old('nama_fakultas') }}" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold text-secondary">Nama Dekan</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light text-muted border-end-0 rounded-start-3">
                            👨‍💼
                        </span>
                        <input type="text" name="nama_dekan"
                               class="form-control form-control-lg border-start-0 rounded-end-3 fs-6"
                               placeholder="Masukkan nama dekan beserta gelar lengkap"
                               value="{{ old('nama_dekan') }}" required>
                    </div>
                </div>

                <div class="d-flex gap-2 pt-2 border-top">
                    <button type="submit" class="btn btn-custom-dark fw-bold px-4 py-2 rounded-3 shadow-sm transition-all hover-scale">
                        💾 Simpan Data
                    </button>
                    <a href="{{ route('fakultas.index') }}" class="btn btn-light border fw-semibold px-4 py-2 rounded-3 text-muted">
                        Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-layout>
