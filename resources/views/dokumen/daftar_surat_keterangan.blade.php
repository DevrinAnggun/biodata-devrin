@extends('layouts.app')

@section('content')
<div class="container mt-3 mb-5 min-vh-100">
    <h2 class="text-center mb-4">Daftar Surat Keterangan Panitia</h2>
    <div class="row">
        @php
            $suratList = [
                [
                    'judul' => 'Surat Keterangan Mahasiswa Jamberskuy',
                    'file'  => 'Surat_Keterangan_Mahasiswa_Jamberskuy.pdf'
                ],
                [
                    'judul' => 'SK Panitia Bukber.pdf',
                    'file'  => 'SK_Panitia_Bukber.pdf'
                ],
                [
                    'judul' => 'SK Panitia LDK & MAKRAB HMSE',
                    'file'  => 'SK_Panitia_LDK_dan_MAKRAB.pdf'
                ],
                [
                    'judul' => 'Surat Keterangan Anggota UKM Seni Tari',
                    'file'  => '039_SUKET_Devrin_Anggun_Saputri.pdf'
                ],
                [
                    'judul' => 'SK_dan_Sertifikat Jamberskuy',
                    'file'  => 'SK_dan_Sertifikat.pdf'
                ],
                [
                    'judul' => 'Surat Keterangan Penetapan Panitia FLS2N',
                    'file'  => 'SK_Penetapan_Panitia_FLS2N.pdf'
                ],
            ];
        @endphp

        @foreach($suratList as $surat)
            <div class="col-md-3 mb-3">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h6 class="text-dark border border-primary p-2">{{ $surat['judul'] }}</h6>
                       <a href="{{ asset('surat/' . $surat['file']) }}"  
                           target="_blank" 
                           class="btn btn-success btn-sm mt-2">
                           Lihat PDF
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
