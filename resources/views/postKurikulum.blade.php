@extends('layouts.main')

@section('container')
<div class="backWhite">
    <div id="judul">
        <p>KURIKULUM TINGKAT SATUAN PENDIDIKAN (KTSP) 2006</p>
    </div>
        
    <div class="daftarIsiKurikulum">
        <h4>Daftar Isi</h4>
        <ol>
            <li>Tujuan Kurikulum</li>
            <li>Karakteristik Kurikulum</li>
            <li>Strategi Pembelajaran</li>
            <li>Organisasi Kurikulum</li>
            <li>Proses Pembelajaran</li>
            <li>Belajar dan Pembelajaran</li>
            <li>Evaluasi</li>
        </ol>
    </div>

    <div id="logoKurikulum">
        <img src="/assets/image/guru/{{ $image_post_kurikulum }}" alt="Logo Kurikulum">
    </div>

    <div class="kontenKurikulum">
        <ol>
            <li>Tujuan Kurikulum</li>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien 
               dui mattis dui, non pulvinar lorem felis nec erat.</p>
            <li>Karakteristik Kurikulum</li>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien 
               dui mattis dui, non pulvinar lorem felis nec erat.</p>
            <li>Strategi Pembelajaran</li>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien 
               dui mattis dui, non pulvinar lorem felis nec erat.</p>
            <li>Organisasi Kurikulum</li>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien 
               dui mattis dui, non pulvinar lorem felis nec erat.</p>
            <li>Proses Pembelajaran</li>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien 
               dui mattis dui, non pulvinar lorem felis nec erat.</p>
            <li>Belajar dan Pembelajaran</li>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien 
               dui mattis dui, non pulvinar lorem felis nec erat.</p>
            <li>Evaluasi</li>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien 
               dui mattis dui, non pulvinar lorem felis nec erat.</p>
        </ol>
    </div>
</div>

@endsection