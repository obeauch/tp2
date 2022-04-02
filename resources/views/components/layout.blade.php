<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
    <title>{{ $title ?? 'Cadriciel Web - Travail pratique 2' }}</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/templatemo_style.css') }}">
</head>

<body>
	<header class="site-header container animated fadeInDown">
		<div class="header-wrapper">
			<div class="row">
				<div class="col-md-4">
					<div class="site-branding">
						<h1><a href="/">Cat facts</a></h1>
					</div>
				</div>
			</div>
		</div>
	</header>

    {{ $slot }}

    <footer class="site-footer container text-center">
		<div class="row">
			<div class="col-md-12">
				<div class="main-footer">
					<ul class="social">
						<li><a href="/faits">Liste de faits</a></li>
						<li><a href="/ajout">Ajouter un fait</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
