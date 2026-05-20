<x-layout>
    <x-slot:title>Daftar Fakultas</x-slot:title>

    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
        <div class="bg-navy p-4 d-flex justify-content-between align-items-center">
            <div>
                <h3 class="fw-bold text-white mb-1">Daftar Fakultas</h3>
                <p class="text-white-50 small mb-0">Manajemen data fakultas aktif universitas</p>
            </div>
            <a href="{{ route('fakultas.create') }}" class="btn btn-light fw-bold px-4 py-2 rounded-3 text-navy shadow-sm transition-all hover-scale">
                <i class="bi bi-plus-lg me-1"></i> + Tambah Fakultas
            </a>
        </div>

        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light border-bottom text-uppercase text-secondary" style="font-size: 0.85rem; letter-spacing: 0.5px;">
                        <tr>
                            <th class="ps-4 py-3" style="width: 45%;">Nama Fakultas</th>
                            <th class="py-3" style="width: 35%;">Nama Dekan</th>
                            <th class="pe-4 py-3 text-center" style="width: 20%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="border-top-0">
                        @forelse($fakultas as $f)
                        <tr class="align-middle">
                            <td class="ps-4 py-3">
                                <span class="fw-bold text-dark fs-6 d-block">{{ $f->nama_fakultas }}</span>
                                <span class="text-muted small">ID Fakultas: #{{ $f->id }}</span>
                            </td>
                            <td class="py-3 text-secondary fw-medium">
                                {{ $f->nama_dekan }}
                            </td>
                            <td class="pe-4 py-3 text-center">
                                <div class="d-inline-flex gap-2">
                                    <a href="{{ route('fakultas.edit', $f->id) }}" class="btn btn-outline-warning btn-sm fw-bold px-3 rounded-2 shadow-xs">
                                        Edit
                                    </a>
                                    <form action="{{ route('fakultas.destroy', $f->id) }}" method="POST" class="d-inline m-0">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm fw-bold px-3 rounded-2 shadow-xs" onclick="return confirm('Yakin ingin menghapus fakultas ini?')">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="text-center py-5 text-muted">
                                <span class="fs-1 d-block mb-2">📁</span>
                                <span class="fw-medium">Belum ada data fakultas yang terdaftar.</span>
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
        <span class="text-muted small fw-medium">Total Data: {{ count($fakultas) }} Item</span>
    </div>
</x-layout>
