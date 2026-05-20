<x-layout>
    <x-slot:title>Edit Fakultas</x-slot:title>

    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
        <div class="bg-navy p-4">
            <h3 class="fw-bold text-white mb-1">Edit Data Fakultas</h3>
            <p class="text-white-50 small mb-0">Perbarui informasi data fakultas yang dipilih</p>
        </div>

        <div class="card-body p-4 bg-white">
            <form action="{{ route('fakultas.update', $fakulta->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label fw-bold text-secondary">Nama Fakultas</label>
                    <input type="text" name="nama_fakultas" class="form-control form-control-lg rounded-3" value="{{ $fakulta->nama_fakultas }}" required>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold text-secondary">Nama Dekan</label>
                    <input type="text" name="nama_dekan" class="form-control form-control-lg rounded-3" value="{{ $fakulta->nama_dekan }}" required>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-warning fw-bold px-4 py-2 rounded-3 text-dark shadow-sm">
                        Update Data
                    </button>
                    <a href="{{ route('fakultas.index') }}" class="btn btn-light border fw-semibold px-4 py-2 rounded-3 text-muted">
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-layout>
