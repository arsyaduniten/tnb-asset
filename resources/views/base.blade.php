<!DOCTYPE html>
<html>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107922045-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	 gtag('config', 'UA-107922045-1');
	</script>-->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TNB</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--<link type="text/css" rel="stylesheet" href="/css/bulma.css">-->
	  <!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

	<!-- Compiled and minified JavaScript -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="/css/base.css">
  	<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
	crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
	<!--<script src="//code.tidio.co/mpdmpvfvuqobv9jcelylcl2aogjgljlh.js"></script>-->
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.4/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.4/jquery.lazy.plugins.min.js"></script>
	@yield('head')
</head>
<body>
	 @yield('content')
	 @yield('script')
</body>
</html>