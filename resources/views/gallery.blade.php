<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<style>
	
	#thumbnail{

			background-image: linear-gradient(rgba(0,0,0,0.50),rgba(0,0,0,0.50)),url('/assets/image/godkiller.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
			
		}

	#thumbnail1{

			background-image: linear-gradient(rgba(0,0,0,0.50),rgba(0,0,0,0.50)),url('/assets/image/demon.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
			
		}

	#thumbnail2{

			background-image: linear-gradient(rgba(0,0,0,0.50),rgba(0,0,0,0.50)),url('/assets/image/fallenangle.png');
			background-repeat: no-repeat;
			background-size: cover;
			object-position: top;
			
		}

	#thumbnail3{

			background-image: linear-gradient(rgba(0,0,0,0.50),rgba(0,0,0,0.50)),url('/assets/image/truck.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
			
		}

	#thumbnail4{

			background-image: linear-gradient(rgba(0,0,0,0.50),rgba(0,0,0,0.50)),url('/assets/image/akkord.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
			
		}

	#thumbnail5{

			background-image: linear-gradient(rgba(0,0,0,0.50),rgba(0,0,0,0.50)),url('/assets/image/leviathan.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
			
		}

</style>
@extends('app')
<body>

	<div class="grid grid-cols-1 2xl:grid-cols-3 gap-y-1 gap-x-1 justify-items-center items-center">
		
		<div class="h-56 4xl:h-80 5xl:h-96 w-full bg-blend-overlay hover:bg-blue-800  hover:cursor-pointer hover:text-opacity-100" id="thumbnail">
			<a href=""><span class="grid justify-center items-center text-white font-bold 2xl:text-2xl 3xl:text-3xl 4xl:text-5xl 5xl:text-6xl text-opacity-0 w-full h-full hover:text-opacity-100 hover:transition duration-500 ease-in-out ">GODKILLER</span>	</a>
		</div>
		<div class="h-56 4xl:h-80 5xl:h-96 w-full bg-blend-overlay hover:bg-blue-800  hover:cursor-pointer hover:text-opacity-100" id="thumbnail1">
			<a href=""><span class="grid justify-center items-center text-white font-bold 2xl:text-2xl 3xl:text-3xl 4xl:text-5xl 5xl:text-6xl text-opacity-0 w-full h-full hover:text-opacity-100 hover:transition duration-500 ease-in-out ">DAEMON</span></a>
		</div>
		<div class="h-56 4xl:h-80 5xl:h-96 w-full bg-blend-overlay hover:bg-blue-800  hover:cursor-pointer hover:text-opacity-100" id="thumbnail2">
			<a href=""><span class="grid justify-center items-center text-white font-bold 2xl:text-2xl 3xl:text-3xl 4xl:text-5xl 5xl:text-6xl text-opacity-0 w-full h-full hover:text-opacity-100 hover:transition duration-500 ease-in-out ">FALLEN ANGEL</span></a>
		</div>
		<div class="h-56 4xl:h-80 5xl:h-96 w-full bg-blend-overlay hover:bg-blue-800  hover:cursor-pointer hover:text-opacity-100" id="thumbnail3">
			<a href=""><span class="grid justify-center items-center text-white font-bold 2xl:text-2xl 3xl:text-3xl 4xl:text-5xl 5xl:text-6xl text-opacity-0 w-full h-full hover:text-opacity-100 hover:transition duration-500 ease-in-out ">LONG EXILE</span></a>
		</div>
		<div class="h-56 4xl:h-80 5xl:h-96 w-full bg-blend-overlay hover:bg-blue-800  hover:cursor-pointer hover:text-opacity-100" id="thumbnail4">
			<a href=""><span class="grid justify-center items-center text-white font-bold 2xl:text-2xl 3xl:text-3xl 4xl:text-5xl 5xl:text-6xl text-opacity-0 w-full h-full hover:text-opacity-100 hover:transition duration-500 ease-in-out ">AKKORD</span></a>
		</div>
		<div class="h-56 4xl:h-80 5xl:h-96 w-full bg-blend-overlay hover:bg-blue-800  hover:cursor-pointer hover:text-opacity-100" id="thumbnail5">
			<a href=""><span class="grid justify-center items-center text-white font-bold 2xl:text-2xl 3xl:text-3xl 4xl:text-5xl 5xl:text-6xl text-opacity-0 w-full h-full hover:text-opacity-100 hover:transition duration-500 ease-in-out ">LEVIATHAN</span></a>
		</div>

	</div>

</body>
</html>