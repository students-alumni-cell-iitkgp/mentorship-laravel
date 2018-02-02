<!--
	It is the main page for profile page which contains its own navabar and footer
	It also has a section called content
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome  </title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<!-- Generic page styles -->
	<link rel="stylesheet" href="css/style.css">
	<style type="text/css">
	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }
	body {
		background-image: url('../img/bg.jpg');
	}
</style>
</head>
<body>
	@include('profile.navbar')
	@yield('content')
</body>	
@include('profile.footer')


</html>



