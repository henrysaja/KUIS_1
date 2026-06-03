<x-layout>
    <x-slot:title>Detail Program Studi - {{ $prodi->nama_prodi }}</x-slot:title>

    <div class="card border-0 shadow-sm rounded-4 overflow-hidden mb-4">
        <div class="bg-navy p-4">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                <div>
                    <h3 class="fw-bold text-white mb-1">Detail Data Program Studi</h3>
                    <p class="text-white-50 small mb-0">Informasi lengkap tentang program studi yang dipilih</p>
                </div>
                <a href="{{ route('prodi.index') }}" class="btn btn-light fw-bold px-4 py-2 rounded-3 text-navy shadow-sm">
                    ← Kembali
                </a>
            </div>
        </div>

        <div class="card-body p-4 p-md-5">
            <div class="row g-5 align-items-start">

                <div class="col-md-4 text-center">
                    @if ($prodi->foto_kaprodi)
                        <div class="position-relative d-inline-block" style="cursor: pointer; transition: transform 0.2s;" onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'" data-bs-toggle="modal" data-bs-target="#fotoModal">
                            <img src="{{ Storage::url($prodi->foto_kaprodi) }}" alt="Foto Kaprodi" class="img-thumbnail shadow-sm rounded-4" style="width: 100%; max-width: 280px; object-fit: cover; aspect-ratio: 1/1;">
                            <div class="mt-3 text-secondary small fw-semibold bg-light py-2 px-3 rounded-pill d-inline-flex align-items-center gap-2 border">
                                🔍 Klik foto untuk memperbesar
                            </div>
                        </div>

                        <div class="modal fade" id="fotoModal" tabindex="-1" aria-labelledby="fotoModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content bg-transparent border-0">
                                    <div class="modal-header border-0 p-0 mb-2 justify-content-end">
                                        <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="modal" aria-label="Close" style="filter: invert(1); opacity: 0.8;"></button>
                                    </div>
                                    <div class="modal-body text-center p-0">
                                        <img src="{{ Storage::url($prodi->foto_kaprodi) }}" alt="Foto Kaprodi Lengkap" class="img-fluid rounded-4 shadow-lg" style="max-height: 85vh;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="bg-light rounded-4 d-flex align-items-center justify-content-center flex-column p-4 " style="aspect-ratio: 1/1; max-width: 280px; margin: 0 auto;">
                            <span class="fs-1 d-block mb-3 text-secondary">📷</span>
                            <span class="badge bg-secondary px-3 py-2 fs-6 rounded-3 shadow-xs">Foto Tidak Tersedia</span>
                        </div>
                    @endif
                </div>

                <div class="col-md-8">
                    <div class="bg-light bg-opacity-50 rounded-4 p-4 p-lg-5 border border-light-subtle h-100">
                        <h5 class="fw-bold text-navy border-bottom border-secondary-subtle pb-3 mb-4">
                            Informasi Program Studi
                        </h5>

                        <div class="row mb-4 align-items-center">
                            <div class="col-sm-4 text-muted fw-medium small text-uppercase tracking-wider">Nama Program Studi</div>
                            <div class="col-sm-8 fw-bold text-dark fs-5">{{ $prodi->nama_prodi }}</div>
                        </div>

                        <div class="row mb-4 align-items-center">
                            <div class="col-sm-4 text-muted fw-medium small text-uppercase tracking-wider">Alias Program Studi</div>
                            <div class="col-sm-8 text-dark fw-medium fs-6">{{ $prodi->alias_prodi ?? '-' }}</div>
                        </div>

                        <div class="row mb-4 align-items-center">
                            <div class="col-sm-4 text-muted fw-medium small text-uppercase tracking-wider">Nama Kepala Prodi</div>
                            <div class="col-sm-8 text-dark fw-medium fs-6">{{ $prodi->nama_kaprodi }}</div>
                        </div>

                        <div class="row mb-0 align-items-center">
                            <div class="col-sm-4 text-muted fw-medium small text-uppercase tracking-wider">Fakultas</div>
                            <div class="col-sm-8">
                                @if ($prodi->fakultas)
                                    <span class="badge bg-navy px-4 py-2 fs-6 rounded-pill shadow-sm">{{ $prodi->fakultas->nama_fakultas }}</span>
                                @else
                                    <span class="badge bg-secondary px-4 py-2 fs-6 rounded-pill shadow-sm">Fakultas Tidak Ditemukan</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-layout>
