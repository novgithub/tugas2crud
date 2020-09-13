<!DOCTYPE HTML>

<html>
	<head>
		<title>nova's web</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a>Nova's<span> website</span></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="">Home</a></li>
					<li><a href="#main">About me</a></li>
					<li><a href="#share">Sharing</a></li>
					<li><a href="#model">Model List</a></li>
				</ul>
			</nav>

		@yield('content')


		<!-- Footer -->
			<footer id="footer">
				<div class="bawah">
					<p>Thanks for coming to my web</p>
				</div>
			</footer>

        <!-- Scripts -->
            <script src="{{ asset('js/jquery.min.js') }}"></script>
            <script src="{{ asset('js/scrolly.min.js') }}"></script>
            <script src="{{ asset('js/scrollex.min.js') }}"></script>
            <script src="{{ asset('js/skel.min.js') }}"></script>
            <script src="{{ asset('js/util.js') }}"></script>
            <script src="{{ asset('js/main.js') }}"></script>



			
			
	</body>
</html>