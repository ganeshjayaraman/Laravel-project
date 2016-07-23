<html>
    <head>
        <title>App Name - @yield('title')</title>
		
			<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
			<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

		
		<style>
		.container {
			background-color : red;
			margin : 10px;
		}
		</style>
    </head>
    <body>

        <div class="container">
			@yield('sidebar')
            @yield('contents')
        </div>
		
		@yield('footer')
    </body>
</html>