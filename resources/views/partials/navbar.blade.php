<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Theme CSS -->
	<link rel="stylesheet" href="css/style.css">
    <title>EduCo</title>
</head>
<body>

<!-- Navbar Header -->
<nav class="navbar bg-body-tertiary navbar-light">
    <div class="container-fluid ml-5">
    <strong>
      <a class="navbar-brand" href="/" style="padding-left: 50px">
        <img src="img/logo.png" alt="Logo" height="50px" class="d-inline-block align-text-top">
      </a>
    </strong>
    <!-- Navbar Center -->
    <strong>
        <ul class="navbar justify-content-center" style="list-style: none">
            <li class="nav-item">
                <a class="nav-link" href="/" style="text-decoration: none; color: #404040">Home</a>
            </li>
            <li class="nav-item dropdown mt-0">
                <a class="nav-link-dropdown-toggle p-3" href="#" id="demoMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-decoration: none; color: #404040">Course</a>
                <ul class="dropdown-menu" aria-labelledby="demoMenu">
                    <li> <a class="dropdown-item" href="/silabus">Sorting</a></li>
                    <li> <a class="dropdown-item" href="/silabus2">Stack & Queue</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/coding" style="text-decoration: none; color: #404040">Live Coding</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/library" style="text-decoration: none; color: #404040">Library</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about" style="text-decoration: none; color: #404040">About</a>
            </li>
        </ul>
    </strong>

        <ul class="navbar justify-content-end" style="list-style: none">
            {{-- <li class="nav-item">
                <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#015DB4" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                    </svg>
                </a>
            </li> --}}
        </ul>
    </div>
</nav>








    {{-- <!-- Header START -->
<header class="navbar-light navbar-sticky header-static">
	<!-- Nav START --> --}}
	{{-- <nav class="navbar navbar-expand-xl">
		<div class="container-fluid px-3 px-xl-5" style="justify-content: space-between; align-items: center;">
			<!-- Logo START -->
			<a class="navbar-brand text-primary" href="/">
				{{-- <img class="light-mode-item navbar-brand-item" src="assets/images/logo.svg" alt="logo">
				<img class="dark-mode-item navbar-brand-item" src="assets/images/logo-light.svg" alt="logo"> --}}
                {{-- EduCo</a> --}}
			<!-- Logo END -->

			{{-- <!-- Responsive navbar toggler -->
			<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-animation">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</button> --}}

			{{-- <!-- Main navbar START -->
			<div class="navbar-collapse w-100 collapse" id="navbarCollapse">

				<!-- Nav Main menu START -->

				<ul class="navbar-nav navbar-nav-scroll me-auto">
					<!-- Nav item 1 Demos -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle active" href="#" id="demoMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Syllabus</a>
						<ul class="dropdown-menu" aria-labelledby="demoMenu">
							<li> <a class="dropdown-item" href="index.html">Introduction C++</a></li>
							<li> <a class="dropdown-item" href="index-2.html">Fundamental C++</a></li>
						</ul>
					</li> --}}

                    {{-- <!-- Nav item 2 -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle active" href="#" id="demoMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Library</a>
						<ul class="dropdown-menu" aria-labelledby="demoMenu">
							<li> <a class="dropdown-item" href="course-detail.html">Started with C++</a></li>
							<li> <a class="dropdown-item" href="course-detail-min.html">Your first C++ program</a></li>
							<li> <a class="dropdown-item" href="course-detail-adv.html">C++ Comments</a></li>
							<li> <a class="dropdown-item" href="course-detail-module.html">C++ Variables</a></li>
							<li> <a class="dropdown-item" href="course-video-player.html">C++ Data Types</a></li>
                            <li> <a class="dropdown-item" href="course-video-player.html">C++ Basic Input/Output</a></li>
						</ul>
					</li> --}}

                    {{-- <!-- Nav item 3 -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle active" href="#" id="demoMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
						<ul class="dropdown-menu" aria-labelledby="demoMenu">
							<li> <a class="dropdown-item" href="#">About Website</a></li>
							<li> <a class="dropdown-item" href="#">About Developer</a></li>
						</ul>
					</li>
				</ul>
				<!-- Nav Main menu END --> --}}

			{{-- <!-- Profile START -->
			<div class="dropdown ms-1 ms-lg-0" style="justify-content: center; align-items: center;">
				<a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
					<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                    </svg>
				</a>
				<ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
						<div class="bg-light dark-mode-switch theme-icon-active d-flex align-items-center p-1 rounded mt-2">
							<button type="button" class="btn btn-sm mb-0" data-bs-theme-value="light">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sun fa-fw mode-switch" viewBox="0 0 16 16">
									<path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
									<use href="#"></use>
								</svg> Light
							</button>
							<button type="button" class="btn btn-sm mb-0" data-bs-theme-value="dark">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars fa-fw mode-switch" viewBox="0 0 16 16">
									<path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z"/>
									<path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
									<use href="#"></use>
								</svg> Dark
							</button>
						</div>
					</li>
					<!-- Dark mode options END-->
				</ul>
			</div>
			<!-- Profile START --> --}}
		</div>
	</nav>
	<!-- Nav END -->
</header>
<!-- Header END -->
</body>
</html>










{{-- <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="/">Live-Coding</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Syllabus
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="/silabus">C++</a></li>
            <li><a class="dropdown-item" href="/file">Library</a></li>
          </ul>
        </li>
        </li>
            <li class="nav-item">
                <a class="nav-link" href="/home">Project</a>
            </li>
        </ul>
          </li>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/home">Profil</a>
            </li>
          </ul>
      </div>
      {{-- <div class="font-medium text-base text-gray-800">{{ Auth::user()->name   }}</div> --}}

      {{-- <div class="navbar-nav">
        <div class="nav-item text-nowrap">
        <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        {{ __('Keluar') }}
                    </x-jet-responsive-nav-link>
                </form>
        </div>
    </div> --}}
{{-- </nav> --}}



