<!DOCTYPE html>
<html>
<head>
	<title>Daemon</title>

    <link rel="preload" as="image" href="/assets/image/leviathan/1.jpg">
    <link rel="preload" as="image" href="/assets/image/akkord/1.jpg">
    <link rel="preload" as="image" href="/assets/image/longexile/1.jpg">
    <link rel="preload" as="image" href="/assets/image/fallenangel/1.jpg">
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

		section.other a:hover{

			font-weight: 800;

		}

		#image-hover{

			background-image: linear-gradient(rgba(0,0,0,0.50),rgba(0,0,0,0.50)),url('/assets/image/godkiller/1.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;

		}

        .link{
            display: inline-block
        }



</style>

@include('app')
@include('nav')
<body class="font-degular bg-black">
<div class="z-40">
@include('sidebar')
@include('fullscreen')

</div>

	<section>
	<div class="px-4 xl:px-32 mt-32 grid gap-y-9">
		<div class="flex justify-between items-center">
			<p class="text-4xl font-light text-white">DAEMON</p>
			<div class="flex gap-2 items-center">
				<button><img src="/assets/button/all-net.svg" id="all-btn" class="w-4"></button><span class="text-white text-lg">|</span><button><img id="grid-btn" src="/assets/button/gallery.svg" class="btn-gallery w-4 fill-current"></button>
			</div>
		</div>
		<div>
			@include('gallery-daemon')
		</div>
	</div>
	</section>

	<section class="other w-screen px-4 xl:px-32 my-20">

		<div class="grid grid-cols-3">

			<div class="col-span-3 xl:col-span-1 grid gap-3">
				<p class="text-white font-extralight">Other <br> Projects</p>
				<div class="grid text-white text-4xl">
				<a onmouseover="changeImage()" data-image-id='longexile' href="/long-exile" class="link magic-hover">LONG EXILE</a>
				<a onmouseover="changeImage()" data-image-id='leviathan' href="/leviathan" class="link magic-hover">LEVIATHAN</a>
				<a onmouseover="changeImage()" data-image-id='akkord' href="/akkord" class="link magic-hover">AKKORD</a>
				<a onmouseover="changeImage()" data-image-id='godkiller' href="/godkiller" class="link magic-hover">GODKILLER</a>
				<a onmouseover="changeImage()" data-image-id='fallenangel' href="/fallen-angel" class="link magic-hover">FALLEN ANGEL</a>
				</div>
			</div>
			<div id="image-hover" class="col-span-3 h-52 xl:h-full xl:col-span-2 bg-blend-hard-light bg-yellow-500 "></div>
		</div>

	</section>

	<section id="test2" class="h-32 3xl:h-52 bg-white w-full 2xl:w-screen">

	<div class="px-10 3xl:px-32 grid gap-y-4 2xl:flex justify-start 2xl:justify-between pt-4 2xl:pt-6 3xl:pt-8 4xl:pt-14">
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

	<script>
        var isGrid = true


        function changeImage(){
            document.getElementById('image-hover').style.backgroundImage = `linear-gradient(rgba(0,0,0,0.50),rgba(0,0,0,0.50)),url('/assets/image/${event.target.dataset.imageId}/1.jpg')`
        }

        document.getElementById("all-btn").addEventListener('click', function() {
            if(!isGrid)return
            document.getElementById("all-btn").src = "/assets/button/all.svg"
            document.getElementById("grid-btn").src = "/assets/button/gallery-net.svg"
            document.getElementById("galleryContainer").classList.remove('3xl:grid-cols-3','grid-cols-2')
            document.getElementById("galleryContainer").classList.add('3xl:grid-cols-1','grid-cols-1')


            document.querySelectorAll(".all-img").forEach(element => element.style.display = 'block')
            document.querySelectorAll(".view").forEach(element => element.style.display = 'none')

            document.querySelectorAll(".thumbnail").forEach(element => {
                element.classList.remove('h-52','4xl:h-96')
                element.classList.add('h-auto')
            });

            isGrid = false
        });
        document.getElementById("grid-btn").addEventListener('click', function() {
            if(isGrid)return
            document.getElementById("all-btn").src = "/assets/button/all-net.svg"
            document.getElementById("grid-btn").src = "/assets/button/gallery.svg"
            document.getElementById("galleryContainer").classList.remove('3xl:grid-cols-1','grid-cols-1')
            document.getElementById("galleryContainer").classList.add('3xl:grid-cols-3','grid-cols-2')

            document.querySelectorAll(".all-img").forEach(element => element.style.display = 'none')

            document.querySelectorAll(".view").forEach(element => element.style.display = 'block')

            document.querySelectorAll(".thumbnail").forEach(element => {
                element.classList.add('h-52','4xl:h-96')
                element.classList.remove('h-auto')

            });

            isGrid = true
        });


	</script>

</body>
</html>
