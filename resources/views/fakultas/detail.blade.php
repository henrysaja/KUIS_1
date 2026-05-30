<x-layout>
    <div class="bg-navy p-4 rounded-top">
        <h3 class="fw-bold text-white mb-1">Detail Data Fakultas</h3>
        <p class="text-white-50 small mb-0">Informasi lengkap tentang fakultas yang dipilih</p>
    </div>

    <div class="card-body p-4 bg-white">
        <div class="mb-4">
            <h5 class="fw-bold text-secondary mb-2">Foto Kaprodi:</h5>
            @if($fakultas->prodi->isNotEmpty() && $fakultas->prodi->first()->foto_kaprodi)
                <img src="{{ Storage::url($fakultas->prodi->first()->foto_kaprodi) }}" alt="Foto Kaprodi" class="img-thumbnail" style="max-width: 150px; max-height: 150px;">
            @else
                <span class="badge bg-secondary px-3 py-2 fs-6 rounded-3 shadow-xs">Foto Kaprodi Tidak Tersedia</span>
            @endif
        </div>
        <div class="mb-4">
            <h5 class="fw-bold text-secondary mb-2">Nama Fakultas:</h5>
            <p class="text-dark fs-6">{{ $fakultas->nama_fakultas }}</p>
        </div>

        <div class="mb-4">
            <h5 class="fw-bold text-secondary mb-2">Daftar Program Studi:</h5>
            @if($fakultas->prodi->isEmpty())
                <p class="text-muted">Belum ada program studi yang terdaftar untuk fakultas ini.</p>
            @else
                <ul class="list-group">
                    @foreach($fakultas->prodi as $prodi)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $prodi->nama_prodi }}
                            <span class="badge bg-navy rounded-pill">{{ $prodi->alias_prodi ?? '-' }}</span>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
</x-layout>
