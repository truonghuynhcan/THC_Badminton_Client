<!DOCTYPE html>
<html lang="en" data-bs-theme="">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script src="https://kit.fontawesome.com/0e14ebdea1.js" crossorigin="anonymous"></script>
	<!-- Bootstrap 5 -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

	<!-- My CSS -->
	<link rel="stylesheet" href="{{ asset('css/styleAd.css') }}">
	<link rel="stylesheet" href="{{ asset('css/a_style.css') }}">

	<title>@yield('title')</title>
</head>

<body class="">
	@include('ad_layout_header')

	<!-- CONTENT -->
<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu'></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode bg-secondary"><i class="fa-regular fa-sun ms-1 me-2"></i><i class="fa-regular fa-moon"></i></label>
			<script>
				document.addEventListener("DOMContentLoaded", function () {
					const switchMode = document.getElementById("switch-mode");
					const body = document.body;
					const html = document.documentElement;

					switchMode.addEventListener("click", function () {
						if (switchMode.checked) {
							body.classList.add("dark");
							html.setAttribute("data-bs-theme", "dark");
						} else {
							body.classList.remove("dark");
							html.setAttribute("data-bs-theme", "light");

						}
					});
				});

			</script>
			<a href="#" class="notification">
			<i class="fa-solid fa-bell"></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile rounded-pill shadow">
				<img src="{{ asset('img/avatar/nam.jpg') }}" >
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
		@yield('content')

		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->


	

	<script src="{{asset('js/styleAd.js')}}"></script>
	<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>