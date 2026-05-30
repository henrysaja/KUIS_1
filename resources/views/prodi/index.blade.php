<x-layout>
    <x-slot:title>Daftar Program Studi</x-slot:title>

    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
        <div class="bg-navy p-4 d-flex justify-content-between align-items-center">
            <div>
                <h3 class="fw-bold text-white mb-1">Daftar Program Studi</h3>
                <p class="text-white-50 small mb-0">Manajemen data program studi aktif universitas</p>
            </div>
            <a href="{{ route('prodi.create') }}" class="btn btn-light fw-bold px-4 py-2 rounded-3 text-navy shadow-sm">
                + Tambah Prodi
            </a>
        </div>

        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light border-bottom text-uppercase text-secondary" style="font-size: 0.85rem; letter-spacing: 0.5px;">
                        <tr>
                            <th class="ps-4 py-3" style="width: 15%;">Foto Kaprodi</th>
                            <th class="ps-4 py-3" style="width: 15%;">Fakultas</th>
                            <th class="py-3" style="width: 25%;">Nama Program Studi</th>
                            <th class="py-3" style="width: 20%;">Nama Kaprodi</th>
                            <th class="ps-4 py-3" style="width: 10%;">Alias</th>
                            <th class="pe-4 py-3 text-center" style="width: 15%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="border-top-0">
                        @forelse($prodi as $p)
                        <tr>
                            <td class="ps-4 py-3">
                                @if($p->foto_kaprodi)
                                    <img src="{{ Storage::url($p->foto_kaprodi) }}" alt="Foto Kaprodi" class="img-thumbnail" style="max-width: 100px; max-height: 100px;">
                                @else
                                    <span class="badge bg-secondary px-3 py-2 fs-6 rounded-3 shadow-xs">Foto Tidak Tersedia</span>
                                @endif
                            </td>

                            <td class="ps-4 py-3">
                                @if($p->fakultas)
                                    <span class="badge bg-navy px-3 py-2 fs-6 rounded-3 shadow-xs">{{ $p->fakultas->nama_fakultas }}</span>
                                @else
                                    <span class="badge bg-secondary px-3 py-2 fs-6 rounded-3 shadow-xs">Fakultas Tidak Ditemukan</span>
                                @endif
                            </td>

                            <td class="py-3">
                                <span class="fw-bold text-dark fs-6 d-block">{{ $p->nama_prodi }}</span>
                                <span class="text-muted small">ID Prodi: #{{ $p->id }}</span>
                            </td>

                            <td class="py-3 text-secondary fw-medium">
                                {{ $p->nama_kaprodi }}
                            </td>

                            <td class="ps-4 py-3 text-secondary fw-medium">
                                {{ $p->alias_prodi ?? '-' }}
                            </td>

                            <td class="pe-4 py-3 text-center">
                                <div class="d-inline-flex gap-2">
                                    <a href="{{ route('prodi.show', $p->id) }}" class="btn btn-outline-info btn-sm fw-bold px-3 rounded-2">
                                        Detail
                                    </a>
                                    <a href="{{ route('prodi.edit', $p->id) }}" class="btn btn-outline-warning btn-sm fw-bold px-3 rounded-2">
                                        Edit
                                    </a>
                                    <form action="{{ route('prodi.destroy', $p->id) }}" method="POST" class="d-inline m-0">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm fw-bold px-3 rounded-2" onclick="return confirm('Yakin ingin menghapus prodi ini?')">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center py-5 text-muted">
                                <span class="fs-1 d-block mb-2">🎓</span>
                                <span class="fw-medium">Belum ada data program studi yang terdaftar.</span>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="mt-4 d-flex justify-content-between align-items-center">
        <a href="{{ url('/') }}" class="btn btn-custom-dark px-4 rounded-3 shadow-sm">
            ← Kembali ke Home
        </a>
        <span class="text-muted small fw-medium">Total Data: {{ count($prodi) }} Item</span>
    </div>
</x-layout>
