<!DOCTYPE html>
<html>
<head>
	<title>STRAY | OFFICIAL WEBSITE</title>

	<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.15/css/all.css">

	<style>
		body{

  			 overflow-x: hidden;

  			  /* Hide horizontal scrollbar */
		}

		/* Hide scrollbar for Chrome, Safari and Opera */
		body::-webkit-scrollbar {
  		display: none;
		}

		 Hide scrollbar for IE, Edge and Firefox
		body {
  		-ms-overflow-style: none;   IE and Edge
  		scrollbar-width: none;
		}
		 section{

		 	scroll-snap-align: start;
		 }


		#home{
			background-image: url('/assets/image/hero.png');
			background-repeat: no-repeat;
			background-size: ;
			background-position: center;
		}

		#image{
			background-image: linear-gradient(rgba(0,0,0,0.50),rgba(0,0,0,0.50)),url('/assets/image/truck.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
		}

		#showimage{

			background-image: linear-gradient(rgba(0,0,0,0.50),rgba(0,0,0,0.50)),url('/assets/image/godkiller.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;

		}

		#showimage2{

			background-image: linear-gradient(rgba(0,0,0,0.50),rgba(0,0,0,0.50)),url('/assets/image/demon.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;

		}

		#showimage3{

			background-image: linear-gradient(rgba(0,0,0,0.50),rgba(0,0,0,0.50)),url('/assets/image/fallenangle1.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			object-position: top;

		}

		#showimage4{

			background-image: linear-gradient(rgba(0,0,0,0.50),rgba(0,0,0,0.50)),url('/assets/image/truck.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;

		}

		#showimage5{

			background-image: linear-gradient(rgba(0,0,0,0.50),rgba(0,0,0,0.50)),url('/assets/image/akkord1.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;

		}

		#showimage6{

			background-image: linear-gradient(rgba(0,0,0,0.50),rgba(0,0,0,0.50)),url('/assets/image/leviathan.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;

		}

		button.connet{

			    color: rgb(255,255,255);
  			  	border: 1px solid rgb(28, 31, 30);
  				transition: 0.2s 0.1s;
		}

		button.connect:hover{

			 color: black;
			 background: white;
  			 transition: 0.2s 0.1s;

		}

		button.connet:hover::before{

			width: 0%;
		}

		button.connect::after{

			 height: 100%;
  			 left: 0;
  			 top: 0;
  			 width: 0;
		}

		button.connet::before {

			top: 0; bottom: 0; left: 0;
  			height: 100%; width: 100%;

		}

		/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}


/* Button center underline animate */

h1.view {
    height: auto;
    cursor: pointer;
}

h1.view:after {
    display      : block;
    content      : '';
    border-bottom: solid 2px #fff;
    transform    : scaleX(0);
    transition   : transform 300ms ease-in-out;
}

h1.view:hover:after {
    transform: scaleX(1);
}





	</style>
</head>
@extends('app')
@include('nav')
<body class="bg-black font-degular">
<div class="z-40">
@include('sidebar')
</div>
	<div class="row">
	<section id="home" class="h-screen w-screen bg-cover grid items-center" >
	<div class="grid gap-y-9 2xl:hidden justify-center px-0">
	</div>
	<div class="grid pt-8 px-4  text-white w-screen">
	 <div class="text-white text-center font-bold text-8xl 2xl:text-9xl 3xl:text-9xl 4xl:text-10xl 5xl:text-13xl font-balboa mix-blend-exclusion grid justify-items-center">
		<p class="absolute bottom-4">FICTION MEETS FUNCTION</p>
	</div>

	</section>

	<section id="about" class="mt-10 3xl:mt-0 px-10 3xl:px-20 h-full 2xl:h-screen w-screen grid gap-5 2xl:gap-0 grid-cols-1 2xl:grid-cols-3 text-white items-center">

		<div class="col-span-2">
			<div class="grid gap-3">
				<p class="font-base 4xl:text-2xl 5xl:text-5xl">About Stray</p>
				<p class="font-base text-3xl 2xl:text-5xl 4xl:text-7xl 5xl:text-9xl"><span class="font-black text-yellow-500">STRAY</span> IS A CONCEPT ART <br> OUTSOURCING STUDIO THAT <br> STRIVES TO FIND <span class="font-semibold">INNOVATE</span> <br> <span class="font-semibold">SOLUTIONS</span> THROUGH <br> EXCELLENT <span class="font-semibold">ARTISTRY &</span> <br> <span class="font-semibold">CRAFTSMANSHIP.</span></p>
			</div>
		</div>
		<div class="flex justify-between 2xl:grid gap-y-9 justify-center">
			<div class="grid gap-y-0 2xl:gap-y-5 4xl:gap-y-7 5xl:gap-y-8 mb-10 mt-0 4xl:mb-48 5xl:mb-80 5xl:pb-5">
				<p class="font-medium text-base 4xl:text-2xl 5xl:text-5xl">Services</p>
				<p class="text-sm 4xl:text-base 5xl:text-3xl">
				<a href="">World building</a> <br>
				<a href="">Production design</a> <br>
				<a href="">Character/creature</a> <br>
				<a href="">Keyframes</a> <br>
				<a href="">Environment</a> <br>
			</div>
			<div class="grid-none 2xl:grid 2xl:gap-y-5 4xl:gap-y-9 5xl:gap-y-9">
				<p class="font-medium text-base 4xl:text-2xl 5xl:text-5xl">Contact</p>
				<p class="text-sm 4xl:text-base 5xl:text-3xl">For inquiries please <br> contact us at: <br><span class=" text-sm 4xl:text-base 5xl:text-3xl underline ">info@stray-studios.com</span></p>
			</div>
		</div>

	</section>

	<section id="gallery" class="section2 py-4 h-full 2xl:h-screen w-screen grid items-center pt-20">

		<div class="slideshow flex justify-between px-10 3xl:px-20 items-center 3xl:pt-12 4xl:pt-24" id="slideshow">

					<button class="prev magic-hover " onclick="plusSlides(-1)"><i class="fas fa-chevron-left text-white font-light  text-xs 2xl:text-base 4xl:text-2xl"></i></button>
					<a href="/godkiller" class="magic-hover mySlides fade grid justify-items-center items-center rounded-xl h-60 2xl:h-64 3xl:h-96 4xl:h-100 5xl:h-103 w-10/12 bg-blend-overlay hover:bg-blue-800  hover:cursor-pointer hover:text-opacity-100" id="showimage">
					<span class="grid justify-center items-center text-white font-bold 2xl:text-2xl 3xl:text-5xl 4xl:text-6xl 5xl:text-8xl text-opacity-0 w-full h-full hover:text-opacity-100 hover:transition duration-500 ease-in-out ">GODKILLER</span>
					</a>

					<a href="/fantasy-stuff" class="magic-hover mySlides fade grid justify-items-center items-center rounded-xl h-60 2xl:h-64 3xl:h-96 4xl:h-100 5xl:h-103 w-10/12 bg-blend-overlay hover:bg-blue-800  hover:cursor-pointer hover:text-opacity-100" id="showimage2">
					<span class="grid justify-center items-center text-white font-bold 2xl:text-2xl 2xl:text-2xl 3xl:text-5xl 4xl:text-6xl 5xl:text-8xl text-opacity-0 w-full h-full hover:text-opacity-100 hover:transition duration-500 ease-in-out">DAEMON</span>
					</a>

						<a href="/fallen-angel" class="magic-hover mySlides fade grid justify-items-center items-center rounded-xl h-60 2xl:h-64 3xl:h-96 4xl:h-100 5xl:h-103 w-10/12
						object-top
						bg-blend-overlay
					    hover:bg-blue-800  hover:cursor-pointer hover:text-opacity-100" id="showimage3">
						<span class="grid justify-center items-center text-white font-bold 2xl:text-2xl 2xl:text-2xl 3xl:text-5xl 4xl:text-6xl 5xl:text-8xl  text-opacity-0 w-full h-full hover:text-opacity-100 hover:transition duration-500 ease-in-out">FALLEN ANGEL</span>
						</a>

							<a href="/long-exile" class="magic-hover mySlides fade grid justify-items-center items-center rounded-xl h-60 2xl:h-64 3xl:h-96 4xl:h-100 5xl:h-103 w-10/12 bg-blend-overlay hover:bg-blue-800  hover:cursor-pointer hover:text-opacity-100" id="showimage4">
							<span class="grid justify-center items-center text-white font-bold 2xl:text-2xl 3xl:text-5xl 4xl:text-6xl 5xl:text-8xl  text-opacity-0 w-full h-full hover:text-opacity-100 hover:transition duration-500 ease-in-out">LONG EXILE</span>
							</a>

								<a href="/akkord" class="magic-hover mySlides fade grid justify-items-center items-center rounded-xl h-60 2xl:h-64 3xl:h-96 4xl:h-100 5xl:h-103 w-10/12 bg-blend-overlay hover:bg-blue-800  hover:cursor-pointer hover:text-opacity-100" id="showimage5">
								<span class="grid justify-center items-center text-white font-bold 2xl:text-2xl 3xl:text-5xl 4xl:text-6xl 5xl:text-8xl  text-opacity-0 w-full h-full hover:text-opacity-100 hover:transition duration-500 ease-in-out">AKKORD</span>
								</a>

								<a href="/leviathan" class="magic-hover mySlides fade grid justify-items-center items-center rounded-xl h-60 2xl:h-64 3xl:h-96 4xl:h-100 5xl:h-103 w-10/12 bg-blend-overlay hover:bg-blue-800  hover:cursor-pointer hover:text-opacity-100" id="showimage6">
								<span class="grid justify-center items-center text-white font-bold 2xl:text-2xl 3xl:text-5xl 4xl:text-6xl 5xl:text-8xl  text-opacity-0 w-full h-full hover:text-opacity-100 hover:transition duration-500 ease-in-out">LEVIATHAN</span>
								</a>

					<button class="next magic-hover" onclick="plusSlides(1)"><i class="fas fa-chevron-right text-white text-xs 2xl:text-base 4xl:text-2xl"></i></button>

			</div>

			<div class="gallery hidden px-10 3xl:px-20" id="gallery">
			@include('gallery')
			</div>



			<div class="grid justify-center my-6 2xl:my-0">
							<h1 class="magic-hover view w-24 4xl:w-40 5xl:w-64 text-xs 2xl:text-sm 3xl:text-base 4xl:text-xl 5xl:text-4xl pb-2 text-white text-center hover:rounded-full" id="showandhide" onclick="slideshow()">View All</h1>

		</div>

	</section>

	<section id="contacts" class="h-full 2xl:h-screen w-screen grid items-center px-10 2xl:px-20 3xl:px-24 pt-20">

		<div class="grid grid-cols-1 2xl:grid-cols-2 items-center">
			<div class="flex gap-8 mb-20">

				<div class="z-0 mt-2 2xl:mt-3 3xl:mt-3 4xl:mt-3 5xl:mt-4 mr-0 4xl:mr-6 5xl:mr-10">
					<div class="z-0 animate-ping bg-yellow-600 w-6 h-6 4xl:w-10 4xl:h-10 5xl:w-14 5xl:h-14 5xl:w-16 5xl:h-16  rounded-full grid justify-center items-center">
						<div class="z-0 bg-yellow-500 w-2 h-2 2xl:w-3 2xl:h-3 4xl:w-5 4xl:h-5 4xl:h-5 5xl:w-7 5xl:h-7 rounded-full"></div>
					</div>

				</div>
				<div class="">
					<p class="text-4xl 2xl:text-4xl 3xl:text-5xl 4xl:text-6xl 5xl:text-8xl font-medium text-white">BRIDGE <br> YOUR VISION</p>

					<p class="text-white w-full mt-8 text-xs 2xl:text-xs 3xl:text-sm 4xl:text-lg 5xl:text-2xl">We are a creative bridge, we serve to connect,<br>
						carry and deliver your visions. Dedicated to <br> integrate, cultivate and visualize your next <br> imaginative worlds</p>
				</div>
			</div>
			<div>

				<form class="grid gap-4 text-white" autocomplete="off">
					<input type="text" name="name" class="focus:outline-none pb-1 bg-transparent border-b-2 font-light w-full text-xs 2xl:text-sm 3xl:text-lg 4xl:text-xl 5xl:text-4xl" placeholder="Name" autocomplete="off">

					<input type="text" name="name" class="focus:outline-none pb-1 bg-transparent border-b-2 font-light w-full text-xs  2xl:text-sm 3xl:text-lg 4xl:text-xl 5xl:text-4xl" placeholder="Email" autocomplete="off">

					<input type="text" name="name" class="focus:outline-none pb-1 bg-transparent border-b-2 font-light w-full text-xs  2xl:text-sm 3xl:text-lg 4xl:text-xl 5xl:text-4xl" placeholder="Subject" autocomplete="off">

					<textarea class="bg-gray-900 text-white px-6 pt-4 rounded-xl h-32 2xl:h-44 3xl:h-52 4xl:h-80 mt-6 text-xs 2xl:text-xs 3xl:text-sm 4xl:text-xl 5xl:text-4xl" placeholder="Your messege here"></textarea>

					<div class="grid justify-end items-center">
				<button class="magic-hover connect border-2 text-white rounded-lg w-full px-4 font-light mt-4 text-sm  2xl:text-sm 3xl:text-sm 4xl:text-lg 5xl:text-2xl 5xl:h-12" type="submit">Connect with us</button>
					</div>

				</form>
			</div>
		</div>

	</section>

	<section id="section4" class="h-screen w-screen grid items-center pt-20">

			<div id="image" class="h-72 2xl:h-72 3xl:h-96 4xl:h-100 5xl:h-103 flex gap-x-9 items-center px-10 3xl:px-20">

				<div class="mb-20 3xl:mb-24 4xl:mb-32 5xl:mb-60 4xl:mt-3 5xl:mt-9 mr-0 4xl:mr-6 5xl:mr-10">

					<div class="animate-ping bg-yellow-600 w-6 h-6 2xl:w-6 2xl:h-6 4xl:w-10 4xl:h-10 5xl:w-14 5xl:h-14 rounded-full grid justify-center items-center">
						<div class="relative bg-yellow-500 w-2 h-2 2xl:w-3 2xl:h-3 4xl:w-5 4xl:h-5 5xl:w-7 5xl:h-7 rounded-full"></div>

					</div>



				</div>



				<div class="text-white text-3xl 2xl:text-3xl 3xl:text-4xl 4xl:text-6xl 5xl:text-8xl font-medium grid gap-2">
			<p>LEARN, WITNESS, AND </p> <p>ENVISION CREATIVE</p> <p class="bg-white text-black w-full">DISCOVERIES.</p>
				</div>

			</div>

		<div class="px-4 2xl:px-10 3xl:px-40 grid gap-4 justify-start 2xl:flex 2xl:justify-between 2xl:gap-0 mb-2 items-center">

				<div class="text-white font-light text-center 2xl:text-left text-xs 2xl:text-sm 3xl:text-base 4xl:text-lg 5xl:text-3xl w-full">
					<p>Our artists have <br> previously worked with : </p>
				</div>

				<div class="grid justify-items-center w-full">
					<img src="/assets/image/client.png" class=" w-full 2xl:w-11/12 px-4 2xl:ml-16 2xl:px-0">
				</div>
		</div>

	</section>

	<section id="test2" class="h-32 3xl:h-52 bg-white w-full 2xl:w-screen">

	<div class="px-10 3xl:px-40 grid gap-y-4 2xl:flex justify-start 2xl:justify-between pt-4 2xl:pt-6 3xl:pt-8 4xl:pt-14">
		<div>
			<p class="lg:text-sm 2xl:text-sm 3xl:text-base 4xl:text-3xl font-bold">Contact</p>
			<div class="flex gap-3">
				<a href="" class="underline lg:text-xs 2xl:text-sm 5xl:text-xl">info@stray-studios.com</a>
				<i class="fas fa-long-arrow-alt-right 3xl:text-base 5xl:text-2xl pt-1"></i>
			</div>
		</div>
		<div class="">
			<p class="text-gray-400 lg:text-xs 2xl:text-sm 3xl:text-sm 4xl:text-xl">&copy; 2021 Hivemind Studios, Ltd.</p>
		</div>
	</div>

	</section>

</div>
	<script>

		$('.view').on('click', function() {
		$('.gallery').fadeToggle(300);
	});

		$('.view').on('click', function() {
		$('.slideshow').fadeToggle(300);
	});

	</script>

	<script>
		var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
	</script>


</body>
</html>
