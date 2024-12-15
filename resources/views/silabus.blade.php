@extends('layouts.main')

@section('container')

<main>

    <div class="row">
        <div class="col-3">
          <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end">
            <nav class="nav flex-column">
              <strong><a class="nav-link" href="#item-1" style="text-decoration: none; color: #404040">Sorting</a></strong>
              <nav class="nav flex-column">
                <a class="nav-link ms-3 my-1" href="#item-1" style="text-decoration: none; color: #066AC9">Konsep Dasar Sorting</a>
                <a class="nav-link ms-3 my-1" href="#item-1-1" style="text-decoration: none; color: #066AC9">Bubble Sort</a>
                <a class="nav-link ms-3 my-1" href="#item-1-2" style="text-decoration: none; color: #066AC9">Selection Sort</a>
                <a class="nav-link ms-3 my-1" href="#item-1-3" style="text-decoration: none; color: #066AC9">Insertion Sort</a>
                <a class="nav-link ms-3 my-1" href="#item-1-4" style="text-decoration: none; color: #066AC9">Merge Sort</a>
                <a class="nav-link ms-3 my-1" href="#item-1-5" style="text-decoration: none; color: #066AC9">Quick Sort</a>
              </nav>
            </nav>
          </nav>
        </div>

        <div class="col-8">
          <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">
            <div id="item-1">
              <h4 style="text-align: center">Konsep Dasar Sorting</h4>
              {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea consectetur cum laborum eos voluptatem temporibus adipisci veniam laudantium nulla ipsa dicta laboriosam eum nemo molestiae, quod esse nisi assumenda architecto.</p> --}}
              <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/sort/1.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/sort/2.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/sort/3.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/sort/4.png" class="d-block w-100" alt="...">
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
              <br><br><br>
            </div>

            <br><br>

            <div id="item-1-1">
              <h5 style="text-align: center">Bubble Sort</h5>
              <p>Bubble Sort adalah algoritma sederhana yang berulang kali menukar elemen yang berdekatan jika berada dalam urutan yang salah.</p>
              <img src="img/sort/5.png" class="rounded mx-auto d-block w-100" alt="..."><br>
              {{-- <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/sort/5.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/sort/6.png" class="d-block w-100" alt="...">
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
              </div> --}}
            </div>

            <br><br>

            <div id="item-1-2">
              <h5 style="text-align: center">Selection Sort</h5>
              <p>Selection Sort adalah algoritma yang membagi array menjadi bagian terurut dan tidak terurut. Algoritma ini berulang kali memilih elemen terkecil dari bagian tidak terurut dan menukarnya dengan elemen pertama dari bagian tidak terurut.</p>
              <img src="img/sort/8.png" class="rounded mx-auto d-block w-100" alt="..."><br>
              {{-- <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/sort/7.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/sort/8.png" class="d-block w-100" alt="...">
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
            </div> --}}
            </div>

            <br><br>

            <div id="item-1-3">
              <h5 style="text-align: center">Insertion Sort</h5>
              <p>Insertion Sort adalah algoritma yang membangun array yang diurutkan satu per satu dengan cara memasukkan elemen baru ke posisi yang tepat dalam array yang sudah diurutkan.</p>
              <img src="img/sort/10.png" class="rounded mx-auto d-block w-100" alt="..."><br>
              {{-- <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/sort/9.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/sort/10.png" class="d-block w-100" alt="...">
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
            </div> --}}
            </div>

            <br><br>

            <div id="item-1-4">
              <h5 style="text-align: center">Merge Sort</h5>
              <p>Merge Sort adalah algoritma divide and conquer yang membagi array menjadi dua bagian, mengurutkan setiap bagian secara rekursif, dan kemudian menggabungkan kedua bagian tersebut.</p>
              <img src="img/sort/12.png" class="rounded mx-auto d-block w-100" alt="..."><br>
              {{-- <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/sort/11.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/sort/12.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/sort/13.png" class="d-block w-100" alt="...">
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
            </div> --}}
            </div>

            <br><br>

            <div id="item-1-5">
                <h5 style="text-align: center">Quick Sort</h5>
                <p>Quick Sort adalah algoritma divide and conquer yang memilih elemen pivot, membagi array menjadi dua subarray (elemen yang lebih kecil dari pivot dan elemen yang lebih besar dari pivot), dan kemudian mengurutkan kedua subarray tersebut secara rekursif.</p>
                <img src="img/sort/14.png" class="rounded mx-auto d-block w-100" alt="..."><br>
                {{-- <div id="carouselExample" class="carousel slide">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="img/sort/14.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="img/sort/15.png" class="d-block w-100" alt="...">
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
                </div> --}}
              </div>
          </div>
        </div>
      </div>




</main>



@endsection
