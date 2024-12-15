@extends('layouts.main')

@section('container')

<main>

<!-- Title -->
<div class="row mb-4">
    <div class="col-lg-5 mx-auto text-center">
        <h2 class="fs-1"><strong>Tentang EduCo</strong></h2><br>
        <div class="position-relative p-2">
            <img src="img/about.png" height="300px" alt="">
        </div><br>
        <p class="mb-0">Tujuan dibuatnya website ini guna memberdayakan para pendidik dengan perangkat lunak yang mudah digunakan dan konten yang menarik untuk memberikan pendidikan terbaik bagi siswa mereka.</p>
    </div>
</div>

<br><br><br>

<div class="row g-4 justify-content-sm-center">
    <!-- Widget 1 START -->
    <div class="col-lg-3" style="align-content: center">
        <!-- logo -->
        <picture style="width:200px">
            <img src="img/guru.png" class="card-img-top" alt="..." style="align-content: center">
        </picture>
        <!-- Deskripsi -->
        <div class="col-body" style="text-align: center">
            <h5 class="col-title p-2">Guru</h5>
            <p class="col-text">Untuk mempermudah guru dalam merancang, menyampaikan, dan mengevaluasi materi pemrograman secara interaktif dan terstruktur.</p>
        </div>
    </div>
    <!-- Widget 1 END -->

    <!-- Widget 2 START -->
    <div class="col-lg-3" style="align-content: center">
        <!-- logo -->
        <picture style="width:200px">
            <img src="img/siswa.png" class="card-img-top" alt="..." style="align-content: center">
        </picture>
        <!-- Deskripsi -->
        <div class="col-body" style="text-align: center">
            <h5 class="col-title p-2">Siswa</h5>
            <p class="col-text">Untuk menemukan pelajaran video mereka yang sempurna dan mendapatkan statistik siswa secara instan</p>
        </div>
    </div>
    <!-- Widget 2 END -->

    <!-- Widget 3 START -->
    <div class="col-lg-3" style="align-content: center">
        <!-- logo -->
        <picture style="width:200px">
            <img src="img/sekolah.png" class="card-img-top" alt="..." style="align-content: center">
        </picture>
        <!-- Deskripsi -->
        <div class="col-body" style="text-align: center">
            <h5 class="col-title p-2">Sekolah</h5>
            <p class="col-text">Untuk mendukung sekolah dalam meningkatkan kualitas pembelajaran digital, memperkuat kompetensi siswa di bidang teknologi, dan membangun ekosistem pembelajaran berbasis teknologi.</p>
        </div>
    </div>
    <!-- Widget 3 END -->

    {{-- <a class="btn btn-outline-success" href="https://drive.google.com/file/d/1Wq-VQYVcQoB-Sxw5Yfw8RWN2NuF6Ib7t/view?usp=sharing" role="button"><i class="bi bi-file-earmark-arrow-down-fill" target="blank"></i>   Buku Panduan</a> --}}

</div><!-- Row END -->


</main>




@endsection
