<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/codemirror.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/codemirror.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/mode/python/python.min.js"></script>
</head>
    <!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap">
    {{-- Bootstrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/app.css">
    {{-- <link rel="stylesheet" href="/js/Pertanyaan.js">
    <link rel="stylesheet" href="/js/appkuis.js"> --}}
    <title>EduCo</title>
    <style>
        /* Tambahkan CSS di sini */
        #scrollTopBtn {
            display: none; /* Button initially hidden */
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 25px;
            border: none;
            outline: none;
            background-color: #f4f4f4;
            color: #b6d3ef;
            cursor: pointer;
            padding: 5px;
            border-radius: 10px;
        }

        #scrollTopBtn:hover {
            background-color: #b6d3ef;
        }
    </style>
</head>
<body>
    @include('partials.navbar')

    <div class="container mt-4">
        @yield('container')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <br><br>
    <!-- Tombol Scroll to Top -->
    <button id="scrollTopBtn" title="Go to top"><i class="bi bi-arrow-up-circle-fill" style="color: #066ac9"></i></button>

    <!-- Tambahkan JavaScript di sini -->
    <script>
        // Get the button
        var scrollTopBtn = document.getElementById("scrollTopBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                scrollTopBtn.style.display = "block";
            } else {
                scrollTopBtn.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        scrollTopBtn.onclick = function() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
        };
    </script>


    <br><br><br>


    <!-- ========Footer START -->
<footer class="pt-5">
	<div class="container">
		<!-- Row START -->
		<div class="row g-4">

			<!-- Widget 1 START -->
			<div class="col-lg-3">
				<!-- logo -->
				<a class="me-0" href="/">
					<img class="light-mode-item h-20px" width="150px" src="img/logo.png" alt="logo">
				</a>
				<!-- Social media icon -->
				<ul class="list-inline mb-0 mt-3">
					<li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-facebook" href="https://www.facebook.com/kemala.adinda"><i class="bi bi-facebook" style="color: #3b5998" target="blank"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-instagram" href="https://www.instagram.com/kemaladinda/"><i class="bi bi-instagram" style="color: #c32aa3" target="blank"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-linkedin" href="https://www.linkedin.com/in/kemala-adinda-salwa-62171716a/"><i class="bi bi-linkedin" style="color: #007bb5" target="blank"></i></a> </li>
				</ul>
			</div>
			<!-- Widget 1 END -->

			<!-- Widget 2 START -->
			<div class="col-lg-6">
				<div class="row g-4">
				</div>
			</div>
			<!-- Widget 2 END -->

			<!-- Widget 3 START -->
			<div class="col-lg-3">
				<h5 class="mb-2 mb-md-4">Contact</h5>
				<!-- Time -->
				<p class="mb-2">
					Developer<span class="h6 fw-light ms-2">Kemala Adinda Salwa</span>
				</p>

				<p class="mb-0">Email:<span class="h6 fw-light ms-2">adindaakemalaa@gmail.com</span></p>

			</div>
			<!-- Widget 3 END -->
		</div><!-- Row END -->

		<!-- Divider -->
		<hr class="mt-4 mb-0">

		<!-- Bottom footer -->
		<div class="py-2">
			<div class="container px-0">
				<div class="d-lg-flex justify-content-between align-items-center py-2 text-center text-md-left">
					<!-- copyright text -->
					<div class="text-body text-primary-hover"> Copyrights ©2024 EduCo.Corp</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- =======================
Footer END -->



<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="assets/vendor/tiny-slider/tiny-slider.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.js"></script>
<script src="assets/vendor/purecounterjs/dist/purecounter_vanilla.js"></script>

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>


    {{-- <!-- FOOTER -->
    <div class="footer footer-expand-lg footer-light bg-info" style="padding: 2px">
    <footer class="container">
        <p>&copy; 2024–2025 CodingAcademy.Company, Inc. &middot; <a href="/">Home</a> &middot; <a href="#">About</a></p>
    </footer>
    </div> --}}
</body>
</html>
