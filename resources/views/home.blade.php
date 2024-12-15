@extends('layouts.main')

@section('container')


<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
    Main Banner START -->
    <section class="position-relative overflow-hidden pt-5 pt-lg-3">

        <!-- SVG START -->
        <figure class="position-absolute top-20 start-0 ms-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FECBA1" class="bi bi-circle-fill" viewBox="0 0 16 16">
                <circle cx="8" cy="8" r="8"/>
              </svg>
        </figure>
         <!-- SVG -->
         <figure class="position-absolute top-0 start-50 translate-middle-x ms-5 mt-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="100px" height="100px" fill="#0CBC87" class="bi bi-star-fill">
                <path d="M10.717,4.757 L14.440,-0.001 L14.215,6.023 L20.142,4.757 L16.076,9.228 L21.435,12.046 L15.430,12.873 L17.713,18.457 L12.579,15.252 L10.717,20.988 L8.856,15.252 L3.722,18.457 L6.005,12.873 L-0.000,12.046 L5.359,9.228 L1.292,4.757 L7.220,6.023 L6.995,-0.001 L10.717,4.757 Z" />
            </svg>
        </figure>
<!-- SVG END -->


        <!-- Content START -->
        <div class="container">
            <!-- Title -->
            <div class="row align-items-center g-5">
                <!-- Left content START -->
                <div class="col-lg-5 col-xl-6 position-relative z-index-1 text-center text-lg-start mb-3 mb-sm-0">
                    <!-- SVG -->
                    <figure class="fill-warning position-absolute bottom-0 end-0 me-5 d-none d-xl-block">
                        <svg xmlns="http://www.w3.org/2000/svg" width="42px" height="42px" fill="#F7C32E" class="bi bi-circle-fill">
                            <path d="M21.000,-0.001 L28.424,13.575 L41.999,20.999 L28.424,28.424 L21.000,41.998 L13.575,28.424 L-0.000,20.999 L13.575,13.575 L21.000,-0.001 Z" />
					    </svg>
				    </figure>

                    <!-- Title -->
                    <h1 class="mb-3 display-7"><b><strong>EduCoding : Website Live Coding</strong></b></h1>
                    <h4 class="mb-0 display-12"><b>Untuk Siswa Kelas X SMAN 3 Nganjuk</b></h4>

                    <!-- Content -->
                    <p class="my-4 lead">Media pembelajaran website yang berguna untuk pembelajaran mata pelajaran Informatika materi berpikir komputasional untuk siswa SMA</p>

                    <!-- Info -->
                    <strong>
                    <ul class="list-inline position-relative justify-content-center justify-content-lg-start mb-4">
                        <li class="list-inline-item me-2"> <i class="bi bi-patch-check-fill h6 me-1" style="color: #F7C32E"></i>Moduls</li>
                        <li class="list-inline-item me-2"> <i class="bi bi-patch-check-fill h6 me-1" style="color: #D12238"></i>Live Coding</li>
                        <li class="list-inline-item"> <i class="bi bi-patch-check-fill h6 me-1" style="color: #0CBC87"></i>Quiz</li>
                    </ul>
                    </strong>

                </div>
                <!-- Left content END -->

                <!-- Right content START -->
                <div class="col-lg-7 col-xl-6 text-center position-relative">
                    <!-- Image -->
                    <div class="position-relative">
                        <img src="img/home.png" width="500px" height="550px" alt="">
                    </div>
                </div>
                <!-- Right content END -->
            </div>
        </div>
        <!-- Content END -->
    </section>
    <!-- =======================
    Main Banner END -->

    <br><br>

    <!-- =======================
    Reviews START -->
    <br><br><br><br>
    <section class="bg-light">
        <div class="container mt-5">
            <div class="row bg-soft g-5 g-lg-5 align-items-center" style="background-color: #E6F0F9; border-block-color: none">
                <div class="col-xl-7 order-2 order-xl-1">
                    <!-- Review -->
                    <div class="col-md-10 position-relative mb-5 mt-0">
                        <!-- SVG -->
                        <figure class="fill-danger opacity-2 position-absolute top-0 start-0 translate-middle mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="211px" height="211px" fill="#066AC9" class="bi bi-star-fill">
                                <path d="M210.030,105.011 C210.030,163.014 163.010,210.029 105.012,210.029 C47.013,210.029 -0.005,163.014 -0.005,105.011 C-0.005,47.015 47.013,-0.004 105.012,-0.004 C163.010,-0.004 210.030,47.015 210.030,105.011 Z"></path>
                            </svg>
                        </figure>

                        <div class="bg-body shadow text-justify p-4 rounded-3 position-relative mb-5 mb-md-0">
                            <!-- Info -->
                            <h4 class="mb-0 text-center"><strong>Tujuan Pembelajaran</strong></h4>
                            <!-- Content -->
                            <blockquote>
                                <p>
                                    <span class="me-1 small"><i class="fas fa-quote-left"></i></span>
                                    <p>1. Secara mandiri, siswa mampu memahami dan menjelaskan beberapa algoritma proses sorting menggunakan literasi digital untuk mencari dan mempelajari sumber belajar online secara mendalam dan tepat.</p>
                                    <p>2. Siswa mampu menerapkan strategi algoritmik untuk menemukan cara yang paling efisien dalam proses sorting pada tugas digital yang diberikan oleh pengajar.</p>
                                    <p>3. Secara mandiri, siswa mampu memahami konsep struktur data stack dan queue serta operasi-operasi yang dapat dikenakan pada struktur data tersebut dengan menggunakan sumber belajar digital dan referensi online dengan benar dan lengkap.</p>
                                    <span class="ms-1 small"><i class="fas fa-quote-right"></i></span>
                                </p>
                            </blockquote>
                            {{-- <!-- Rating -->
                            <ul class="list-inline mb-2">
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
                            </ul> --}}
                        </div>
                    </div>
                    {{-- <div class="row mt-0">
                        <!-- Mentor list -->
                        <div class="col-md-5 mt-5 mt-md-0 d-none d-md-block">
                            <div class="bg-body shadow text-center p-4 rounded-3 d-inline-block position-relative">
                                <!-- Avatar -->
                                <div class="avatar avatar-xl mb-3">
                                    <img class="avatar-img rounded-circle" src="img/avatar2.png" alt="avatar">
                                </div>
                                <!-- Content -->
                                <blockquote>
                                    <p>
                                        <span class="me-1 small"><i class="fas fa-quote-left"></i></span>
                                            At weddings believed laughing although the Moonlight newspaper up its enjoyment agreeable depending.
                                        <span class="ms-1 small"><i class="fas fa-quote-right"></i></span>
                                    </p>
                                </blockquote>
                                <!-- Rating -->
                                <ul class="list-inline mb-2">
                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
                                </ul>
                                <!-- Info -->
                                <h6 class="mb-0">Dennis Barrett</h6>
                            </div>
                        </div>
                    </div> <!-- Row END --> --}}

                    {{-- <div class="row mt-5 mt-xl-0">
                        <!-- Rating -->
                        <div class="col-7 mt-0 mt-xl-5 text-end position-relative z-index-1 d-none d-md-block">
                            <!-- SVG -->
                            <figure	class="fill-danger position-absolute top-0 start-50 mt-n7 ms-6 ps-3 pt-2 z-index-n1 d-none d-lg-block">
                                <svg enable-background="new 0 0 160.7 159.8" height="180px" fill="#066ac9">
                                    <path d="m153.2 114.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z" />
                                    <path d="m116.4 114.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z" />
                                    <path d="m134.8 114.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z" />
                                    <path d="m135.1 96.9c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z" />
                                    <path d="m153.5 96.9c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z" />
                                    <path d="m98.3 96.9c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z" />
                                    <ellipse cx="116.7" cy="99.1" rx="2.1" ry="2.2" />
                                    <path d="m153.2 149.8c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.3 0.9-2.2 2.1-2.2z" />
                                    <path d="m135.1 132.2c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2 0-1.3 0.9-2.2 2.1-2.2z" />
                                    <path d="m153.5 132.2c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.3 0.9-2.2 2.1-2.2z" />
                                    <path d="m80.2 79.3c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2z" />
                                    <path d="m117 79.3c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z" />
                                    <path d="m98.6 79.3c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z" />
                                    <path d="m135.4 79.3c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z" />
                                    <path d="m153.8 79.3c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z" />
                                    <path d="m80.6 61.7c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z" />
                                    <ellipse cx="98.9" cy="63.9" rx="2.1" ry="2.2" />
                                    <path d="m117.3 61.7c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z" />
                                    <ellipse cx="62.2" cy="63.9" rx="2.1" ry="2.2" />
                                    <ellipse cx="154.1" cy="63.9" rx="2.1" ry="2.2" />
                                    <path d="m135.7 61.7c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z" />
                                    <path d="m154.4 44.1c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z" />
                                    <path d="m80.9 44.1c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z" />
                                    <path d="m44.1 44.1c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z" />
                                    <path d="m99.2 44.1c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2z" />
                                    <ellipse cx="117.6" cy="46.3" rx="2.1" ry="2.2" />
                                    <path d="m136 44.1c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z" />
                                    <path d="m62.5 44.1c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z" />
                                    <path d="m154.7 26.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z" />
                                    <path d="m62.8 26.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z" />
                                    <ellipse cx="136.3" cy="28.6" rx="2.1" ry="2.2" />
                                    <path d="m99.6 26.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z" />
                                    <path d="m117.9 26.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2z" />
                                    <path d="m81.2 26.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z" />
                                    <path d="m26 26.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z" />
                                    <ellipse cx="44.4" cy="28.6" rx="2.1" ry="2.2" />
                                    <path d="m136.6 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2 0.1 1.2-0.9 2.2-2.1 2.2z" />
                                    <path d="m155 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2 0.1 1.2-0.9 2.2-2.1 2.2z" />
                                    <path d="m26.3 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2s-0.9 2.2-2.1 2.2z" />
                                    <path d="m81.5 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2s-0.9 2.2-2.1 2.2z" />
                                    <path d="m63.1 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2s-0.9 2.2-2.1 2.2z" />
                                    <path d="m44.7 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2s-0.9 2.2-2.1 2.2z" />
                                    <path d="m118.2 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2 0.1 1.2-0.9 2.2-2.1 2.2z" />
                                    <path d="m7.9 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2 0.1 1.2-0.9 2.2-2.1 2.2z" />
                                    <path d="m99.9 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2z" />
                                </svg>
                            </figure>
                        </div>

                        <!-- Review -->
                        <div class="col-md-5 mt-n6 mb-0 mb-md-5">
                            <div class="bg-body shadow text-center p-4 rounded-3">
                                <!-- Avatar -->
                                <div class="avatar avatar-xl mb-3">
                                    <img class="avatar-img rounded-circle" src="img/avatar3.png" alt="avatar">
                                </div>
                                <!-- Content -->
                                <blockquote>
                                    <p>
                                        <span class="me-1 small"><i class="fas fa-quote-left"></i></span>
                                            At weddings believed laughing although the Moonlight newspaper up its enjoyment agreeable depending.
                                        <span class="ms-1 small"><i class="fas fa-quote-right"></i></span>
                                    </p>
                                </blockquote>
                                <!-- Rating -->
                                <ul class="list-inline mb-2">
                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                    <li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
                                </ul>
                                <!-- Info -->
                                <h6 class="mb-0">Dennis Barrett</h6>
                            </div>
                        </div>
                    </div> <!-- Row END --> --}}
                </div>
                <div class="col-xl-5 order-1 text-center text-xl-start">
                    <!-- Title -->
                    <h2 class="fs-1"><strong>Rencana Pelaksanaan Pembelajaran</strong></h2>
                    <a class="btn btn-outline-success" href="https://drive.google.com/file/d/1Wq-VQYVcQoB-Sxw5Yfw8RWN2NuF6Ib7t/view?usp=sharing" role="button"><i class="bi bi-file-earmark-arrow-down-fill" target="blank"></i>Modul Ajar</a>
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
    Reviews END -->

    <br><br><br>

    <!-- =======================
    Popular course START -->
    <section>
        <div class="container">
            <!-- Title -->
            <div class="row mb-4">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="fs-1"><strong>Courses Library</strong></h2>
                    <p class="mb-0">Pilih materi algoritma mana yang ingin kamu pelajari</p>
                </div>
            </div>

            <!-- Tabs START -->
            <div class="card mb-4" style="background-color: #E6F0F9; border-block-color: none">
                <div class="card-body bg-soft">
                    <ul class="nav nav-pills justify-content-sm-center mb-0 px-2" id="course-pills-tab" role="tablist">
                        <!-- Tab item -->
                        <li class="nav-item me-2 me-sm-5">
                            <button class="nav-link mb-2 mb-md-0 active" id="course-pills-tab-1" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-1" type="button" role="tab" aria-controls="course-pills-tabs-1" aria-selected="false">Sorting</button>
                        </li>
                        <!-- Tab item -->
                        <li class="nav-item me-2 me-sm-5">
                            <button class="nav-link mb-2 mb-md-0" id="course-pills-tab-2" data-bs-toggle="pill" data-bs-target="#course-pills-tabs-2" type="button" role="tab" aria-controls="course-pills-tabs-2"	aria-selected="false">Stack & Queue</button>
                        </li>
                    </ul>
                </div>
            </div>

		<!-- Tabs END -->

            <!-- Tabs content START -->
            <div class="tab-content" id="course-pills-tabContent">
                <!-- Content START -->
                <div class="tab-pane fade show active" id="course-pills-tabs-1" role="tabpanel" aria-labelledby="course-pills-tab-1">
                    <div class="row g-4">

                        <!-- Card item 1 START -->
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="card shadow h-100">
                                <!-- Image -->
                                <img src="img/7.png" class="card-img-top" alt="course image">
                                <!-- Card body -->
                                <div class="card-body pb-0">
                                    <!-- Badge and favorite -->
                                    <div class="d-flex justify-content-between mb-2">
                                        <a href="#" class="badge bg-purple bg-opacity-10 text-purple" style="background-color: #F0ECF9; color:#7245C2; text-decoration:none">All level</a>
                                    </div>
                                    <!-- Title -->
                                    <h5 class="card-title fw-normal"><a href="/silabus#item-1" style="text-decoration: none; color:#066AC9">Konsep Dasar Sorting</a></h5>
                                    <p class="mb-2 text-truncate-2">Penjelasan umum tentang pentingnya sorting dalam pengolahan data.</p>
                                </div>
                                <!-- Card footer -->
                                <div class="card-footer pt-0 pb-3">
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                        <span class="h6 fw-light mb-0">
                                            <a href="https://quizizz.com/join?gc=88422237" style="color: black; text-decoration:none">
                                            <i style="padding-right: 5px"><img src="img/quizizz.png" alt="" width="22px"></i>Quiz</a>
                                        </span>
                                        <span class="h6 fw-light mb-0"><i class="bi bi-file-easel" style="padding-right: 5px; color:#FD790B"></i>Slides</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->

                        <!-- Card item 2 START -->
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="card shadow h-100">
                                <!-- Image -->
                                <img src="img/9.png" class="card-img-top" alt="course image">
                                <div class="card-body pb-0">
                                    <!-- Badge and favorite -->
                                    <div class="d-flex justify-content-between mb-2">
                                        <a href="#" class="badge bg-purple bg-opacity-10 text-purple" style="background-color: #F0ECF9; color:#7245C2; text-decoration:none">All level</a>
                                    </div>
                                    <!-- Title -->
                                    <h5 class="card-title fw-normal"><a href="/silabus#item-1-1" style="text-decoration: none; color:#066AC9">Bubble Sort</a></h5>
                                    <p class="mb-2 text-truncate-2">Penjelasan tentang konsep dasar dan cara kerja algoritma Bubble Sort serta contoh kode pemrograman yang dapat langsung diakses dan dicoba.</p>
                                </div>
                                <!-- Card footer -->
                                <div class="card-footer pt-0 pb-3">
                                    <hr>
                                    <div class="d-flex justify-content-between ">
                                        <span class="h6 fw-light mb-0">
                                            <a href="https://quizizz.com/join?gc=72451595" style="color: black; text-decoration:none">
                                            <i style="padding-right: 5px"><img src="img/quizizz.png" alt="" width="22px"></i>Quiz</a>
                                        </span>
                                        <span class="h6 fw-light mb-0"><i class="bi bi-file-easel" style="padding-right: 5px; color:#FD790B"></i>Slides</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->

                        <!-- Card item 2 START -->
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="card shadow h-100">
                                <!-- Image -->
                                <img src="img/9.png" class="card-img-top" alt="course image">
                                <div class="card-body pb-0">
                                    <!-- Badge and favorite -->
                                    <div class="d-flex justify-content-between mb-2">
                                        <a href="#" class="badge bg-purple bg-opacity-10 text-purple" style="background-color: #F0ECF9; color:#7245C2; text-decoration:none">All level</a>
                                    </div>
                                    <!-- Title -->
                                    <h5 class="card-title fw-normal"><a href="/silabus#item-1-2" style="text-decoration: none; color:#066AC9">Selection Sort</a></h5>
                                    <p class="mb-2 text-truncate-2">Penjelasan tentang konsep dasar dan cara kerja algoritma Selection Sort serta contoh kode pemrograman yang dapat langsung diakses dan dicoba.</p>
                                </div>
                                <!-- Card footer -->
                                <div class="card-footer pt-0 pb-3">
                                    <hr>
                                    <div class="d-flex justify-content-between ">
                                        <span class="h6 fw-light mb-0">
                                            <a href="https://quizizz.com/join?gc=82347373" style="color: black; text-decoration:none">
                                            <i style="padding-right: 5px"><img src="img/quizizz.png" alt="" width="22px"></i>Quiz</a>
                                        </span>
                                        <span class="h6 fw-light mb-0"><i class="bi bi-file-easel" style="padding-right: 5px; color:#FD790B"></i>Slides</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->

                        <!-- Card item 2 START -->
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="card shadow h-100">
                                <!-- Image -->
                                <img src="img/9.png" class="card-img-top" alt="course image">
                                <div class="card-body pb-0">
                                    <!-- Badge and favorite -->
                                    <div class="d-flex justify-content-between mb-2">
                                        <a href="#" class="badge bg-purple bg-opacity-10 text-purple" style="background-color: #F0ECF9; color:#7245C2; text-decoration:none">All level</a>
                                    </div>
                                    <!-- Title -->
                                    <h5 class="card-title fw-normal"><a href="/silabus#item-1-3" style="text-decoration: none; color:#066AC9">Insertion Sort</a></h5>
                                    <p class="mb-2 text-truncate-2">Penjelasan tentang konsep dasar dan cara kerja algoritma Insertion Sort serta contoh kode pemrograman yang dapat langsung diakses dan dicoba.</p>
                                </div>
                                <!-- Card footer -->
                                <div class="card-footer pt-0 pb-3">
                                    <hr>
                                    <div class="d-flex justify-content-between ">
                                        <span class="h6 fw-light mb-0">
                                            <a href="https://quizizz.com/join?gc=71873736" style="color: black; text-decoration:none">
                                            <i style="padding-right: 5px"><img src="img/quizizz.png" alt="" width="22px"></i>Quiz</a>
                                        </span>
                                        <span class="h6 fw-light mb-0"><i class="bi bi-file-easel" style="padding-right: 5px; color:#FD790B"></i>Slides</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->

                        <!-- Card item 2 START -->
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="card shadow h-100">
                                <!-- Image -->
                                <img src="img/9.png" class="card-img-top" alt="course image">
                                <div class="card-body pb-0">
                                    <!-- Badge and favorite -->
                                    <div class="d-flex justify-content-between mb-2">
                                        <a href="#" class="badge bg-purple bg-opacity-10 text-purple" style="background-color: #F0ECF9; color:#7245C2; text-decoration:none">All level</a>
                                    </div>
                                    <!-- Title -->
                                    <h5 class="card-title fw-normal"><a href="/silabus#item-1-4" style="text-decoration: none; color:#066AC9">Merge Sort</a></h5>
                                    <p class="mb-2 text-truncate-2">Penjelasan tentang konsep dasar dan cara kerja algoritma Merge Sort serta contoh kode pemrograman yang dapat langsung diakses dan dicoba.</p>
                                </div>
                                <!-- Card footer -->
                                <div class="card-footer pt-0 pb-3">
                                    <hr>
                                    <div class="d-flex justify-content-between ">
                                        <span class="h6 fw-light mb-0">
                                            <a href="https://quizizz.com/join?gc=78053254" style="color: black; text-decoration:none">
                                            <i style="padding-right: 5px"><img src="img/quizizz.png" alt="" width="22px"></i>Quiz</a>
                                        </span>
                                        <span class="h6 fw-light mb-0"><i class="bi bi-file-easel" style="padding-right: 5px; color:#FD790B"></i>Slides</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->

                        <!-- Card item 2 START -->
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="card shadow h-100">
                                <!-- Image -->
                                <img src="img/9.png" class="card-img-top" alt="course image">
                                <div class="card-body pb-0">
                                    <!-- Badge and favorite -->
                                    <div class="d-flex justify-content-between mb-2">
                                        <a href="#" class="badge bg-purple bg-opacity-10 text-purple" style="background-color: #F0ECF9; color:#7245C2; text-decoration:none">All level</a>
                                    </div>
                                    <!-- Title -->
                                    <h5 class="card-title fw-normal"><a href="/silabus#item-1-5" style="text-decoration: none; color:#066AC9">Quick Sort</a></h5>
                                    <p class="mb-2 text-truncate-2">Penjelasan tentang konsep dasar dan cara kerja algoritma Quick Sort serta contoh kode pemrograman yang dapat langsung diakses dan dicoba.</p>
                                </div>
                                <!-- Card footer -->
                                <div class="card-footer pt-0 pb-3">
                                    <hr>
                                    <div class="d-flex justify-content-between ">
                                        <span class="h6 fw-light mb-0">
                                            <a href="https://quizizz.com/join?gc=89168132" style="color: black; text-decoration:none">
                                            <i style="padding-right: 5px"><img src="img/quizizz.png" alt="" width="22px"></i>Quiz</a>
                                        </span>
                                        <span class="h6 fw-light mb-0"><i class="bi bi-file-easel" style="padding-right: 5px; color:#FD790B"></i>Slides</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->

                    </div> <!-- Row END -->
                </div>
                <!-- Content END -->

                <!-- Content START -->
			<div class="tab-pane fade" id="course-pills-tabs-2" role="tabpanel" aria-labelledby="course-pills-tab-2">
				<div class="row g-4">
					<!-- Card item 1-2 START -->
					<div class="col-sm-6 col-lg-4 col-xl-3">
						<div class="card shadow h-100">
							<!-- Image -->
							<img src="img/s05.png" class="card-img-top" alt="course image">
							<div class="card-body pb-0">
								<!-- Badge and favorite -->
								<div class="d-flex justify-content-between mb-2">
									<a href="#" class="badge bg-purple bg-opacity-10 text-purple" style="background-color: #F0ECF9; color:#7245C2; text-decoration:none">All level</a>
								</div>
								<!-- Title -->
								<h5 class="card-title fw-normal"><a href="/silabus2#item-2-1" style="text-decoration: none; color:#066AC9">Konsep Dasar Stack</a></h5>
								<p class="text-truncate-2 mb-2">Penjelasan konsep stack sebagai struktur data dengan prinsip LIFO (Last In, First Out) dan penjelasan visual tentang operasi push, pop, dan peek.</p>
							</div>
							<!-- Card footer -->
							<div class="card-footer pt-0 pb-3">
								<hr>
								<div class="d-flex justify-content-between mt-2">
									<span class="h6 fw-light mb-0">
                                        <a href="#" style="color: black; text-decoration:none">
                                        <i style="padding-right: 5px"><img src="img/quizizz.png" alt="" width="22px"></i>Quiz</a>
                                    </span>
                                    <span class="h6 fw-light mb-0"><i class="bi bi-file-easel" style="padding-right: 5px; color:#FD790B"></i>Slides</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->

					<!-- Card item 2-2 START -->
					<div class="col-sm-6 col-lg-4 col-xl-3">
						<div class="card shadow h-100">
							<!-- Image -->
							<img src="img/s04.png" class="card-img-top" alt="course image">
							<div class="card-body pb-0">
								<!-- Badge and favorite -->
								<div class="d-flex justify-content-between mb-2">
									<a href="#" class="badge bg-purple bg-opacity-10 text-purple" style="background-color: #F0ECF9; color:#7245C2; text-decoration:none">All level</a>
								</div>
								<!-- Title -->
								<h5 class="card-title fw-normal"><a href="/silabus2#item-2-2" style="text-decoration: none; color:#066AC9">Konsep Dasar Queue</a></h5>
								<p class="text-truncate-2 mb-2">Penjelasan konsep queue sebagai struktur data dengan prinsip FIFO (First In, First Out), Operasi Dasar, dan Jenis-Jenis Queue.</p>
							</div>
							<!-- Card footer -->
							<div class="card-footer pt-0 pb-3">
								<hr>
								<div class="d-flex justify-content-between mt-2">
									<span class="h6 fw-light mb-0">
                                        <a href="#" style="color: black; text-decoration:none">
                                        <i style="padding-right: 5px"><img src="img/quizizz.png" alt="" width="22px"></i>Quiz</a>
                                    </span>
                                    <span class="h6 fw-light mb-0"><i class="bi bi-file-easel" style="padding-right: 5px; color:#FD790B"></i>Slides</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Card item END -->


                </div>
            </div>
            </div>
        </div>
    </section>


</main>
    <!-- **************** MAIN CONTENT END **************** -->




    {{-- <h1 class="text mb-5">Coding Academy</h1> --}}
    {{-- <div id="carouselExampleControls" class="carousel slide mt-5 mb-5" data-bs-ride="carousel"> --}}
        {{-- <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/web1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/web1.jpg" class="d-block w-100" alt="...">
          </div>
          {{-- <div class="carousel-item">
            <img src="img/fotbar2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/fotbar3.jpg" class="d-block w-100" alt="...">
          </div> --}}
        {{-- </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div> --}}

    {{-- <div class="text mt-5" style="text-align: center">
        <h4>Selamat Datang di "E-Learning : Website Live Coding"</h4>
        <p>Media pembelajaran website yang berguna untuk pembelajaran mata pelajaran Informatika materi bahasa pemrograman C++ untuk siswa SMA</p>
    </div> --}}

  {{-- <div class="container marketing" style="padding: 70px">
    <div class="row" style="text-align: center">
        <div class="col-lg-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-menu-button-wide-fill" viewBox="0 0 16 16">
                <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v2A1.5 1.5 0 0 0 1.5 5h13A1.5 1.5 0 0 0 16 3.5v-2A1.5 1.5 0 0 0 14.5 0h-13zm1 2h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1 0-1zm9.927.427A.25.25 0 0 1 12.604 2h.792a.25.25 0 0 1 .177.427l-.396.396a.25.25 0 0 1-.354 0l-.396-.396zM0 8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8zm1 3v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2H1zm14-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2h14zM2 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
              </svg>
            <h2 style="padding: 5px">Syllabus</h2>
          <p>Menyediakan materi tentang dasar-dasar dari bahasa pemrograman C++</p>
          <p><a class="btn btn-secondary" href="/courses">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-ui-checks" viewBox="0 0 16 16">
                <path d="M7 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zM2 1a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm0 8a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2H2zm.854-3.646a.5.5 0 0 1-.708 0l-1-1a.5.5 0 1 1 .708-.708l.646.647 1.646-1.647a.5.5 0 1 1 .708.708l-2 2zm0 8a.5.5 0 0 1-.708 0l-1-1a.5.5 0 0 1 .708-.708l.646.647 1.646-1.647a.5.5 0 0 1 .708.708l-2 2zM7 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zm0-5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
              </svg>
          <h2 style="padding: 5px">Library</h2>
          <p>Menyediakan materi yang dapat memilih slide materi yang relevan</p>
          <p><a class="btn btn-secondary" href="/topik">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-chat-square-text" viewBox="0 0 16 16">
                <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
              </svg>
          <h2 style="padding: 5px">Profil</h2>
          <p>Informasi singkat tentang pengembang media pembelejaran website</p>
          <p><a class="btn btn-secondary" href="/forum">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
  </div> --}}


@endsection
