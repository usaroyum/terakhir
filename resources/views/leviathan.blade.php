<!DOCTYPE html>
<html>
<head>
	<title>Leviathan</title>
</head>

<style>

		body{
			 
  			 overflow-x: hidden;

  			  /* Hide horizontal scrollbar */
		}

		/* Hide scrollbar for Chrome, Safari and Opera */
		body::-webkit-scrollbar {
  		display: none;
		}

		/* Hide scrollbar for IE, Edge and Firefox */
		body {
  		-ms-overflow-style: none;  /* IE and Edge */
  		scrollbar-width: none;  /* Firefox */
		}
	

</style>

@include('app')
@include('nav')
<body class="font-degular">
<div class="z-40">
@include('sidebar')
</div>

	<section class="h-full w-screen bg-cover">
		<img src="/assets/image/leviathan/1.jpg">
	</section>
	<section class="h-full w-screen bg-cover">
		<img src="/assets/image/leviathan/2.jpg">
	</section>
	<section class="h-full w-screen bg-cover">
		<img src="/assets/image/leviathan/7.jpg">
	</section>
	<section class="h-full w-screen bg-cover grid grid-cols-2">
		<img src="/assets/image/leviathan/5.jpg" class="h-full">
		<img src="/assets/image/leviathan/6.jpg">
	</section>
	<section class="h-full w-screen bg-cover">
		<img src="/assets/image/leviathan/3.jpg">
	</section>
	<section class="h-full w-screen bg-cover">
		<img src="/assets/image/leviathan/4.jpg">
	</section>


</body>
</html>