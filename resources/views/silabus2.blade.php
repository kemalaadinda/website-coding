@extends('layouts.main')

@section('container')

<main>

    <div class="row">
        <div class="col-3">
          <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end">
            <nav class="nav flex-column">
              <strong><a class="nav-link" href="#item-2" style="text-decoration: none; color: #404040">Stack and Queue</a></strong>
              <nav class="nav flex-column">
                <a class="nav-link ms-3 my-1" href="#item-2-1" style="text-decoration: none; color: #066AC9">Konsep Dasar Stack</a>
                <a class="nav-link ms-3 my-1" href="#item-2-2" style="text-decoration: none; color: #066AC9">Konsep Dasar Queue</a>
              </nav>
            </nav>
          </nav>
        </div>

        <div class="col-8">
            <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">
              <div id="item-2-1">
                <h3 style="text-align: center">Konsep dasar Stack</h3><br>
                <div id="carouselExample" class="carousel slide">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="img/stack/1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="img/stack/2.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="img/stack/3.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="img/stack/4.png" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>

              <br><br>

              <div id="item-2-2">
                <h3 style="text-align: center">Konsep dasar Queue</h3>
                <div id="carouselExample" class="carousel slide">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="img/stack/5.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="img/stack/6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="img/stack/7.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="img/stack/8.png" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
            </div>
          </div>

    </div>
</main>



@endsection
