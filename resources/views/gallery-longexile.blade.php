<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<style>

	#thumbnail{

			background-image: linear-gradient(rgba(0,0,0,0.50),rgba(0,0,0,0.50)),url('/assets/image/longexile/1.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;

		}

	#thumbnail1{

			background-image: linear-gradient(rgba(0,0,0,0.50),rgba(0,0,0,0.50)),url('/assets/image/longexile/2.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
			object-position: center;

		}

	#thumbnail2{

			background-image: linear-gradient(rgba(0,0,0,0.50),rgba(0,0,0,0.50)),url('/assets/image/longexile/3.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			object-position: top;
			object-position: center;

		}

	#thumbnail3{

			background-image: linear-gradient(rgba(0,0,0,0.50),rgba(0,0,0,0.50)),url('/assets/image/longexile/4.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;

		}

	#thumbnail4{

			background-image: linear-gradient(rgba(0,0,0,0.50),rgba(0,0,0,0.50)),url('/assets/image/longexile/5.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;

		}

</style>
@extends('app')
<body>

	<div class="grid grid-cols-1 3xl:grid-cols-3 gap-y-1 gap-x-1 justify-items-center items-center" id="galleryContainer">

		<div class="thumbnail h-52 4xl:h-80 w-full bg-blend-overlay hover:bg-blue-800  hover:cursor-pointer hover:text-opacity-100" id="thumbnail">
			<a href="" onclick="previewImage('/assets/image/longexile/1.jpg')"><span class="grid justify-center items-center text-white font-bold 2xl:text-2xl 3xl:text-3xl 4xl:text-5xl 5xl:text-6xl text-opacity-0 w-full h-full hover:text-opacity-100 hover:transition duration-500 ease-in-out">View</span></a>
		</div>
		<div class="thumbnail h-52 4xl:h-80 w-full bg-blend-overlay hover:bg-blue-800  hover:cursor-pointer hover:text-opacity-100" id="thumbnail1">
			<a href="" onclick="previewImage('/assets/image/longexile/2.jpg')"><span class="grid justify-center items-center text-white font-bold 2xl:text-2xl 3xl:text-3xl 4xl:text-5xl 5xl:text-6xl text-opacity-0 w-full h-full hover:text-opacity-100 hover:transition duration-500 ease-in-out ">View</span></a>
		</div>
		<div class="thumbnail h-52 4xl:h-80 w-full bg-blend-overlay hover:bg-blue-800  hover:cursor-pointer hover:text-opacity-100" id="thumbnail2">
			<a href="" onclick="previewImage('/assets/image/longexile/3.jpg')"><span class="grid justify-center items-center text-white font-bold 2xl:text-2xl 3xl:text-3xl 4xl:text-5xl 5xl:text-6xl text-opacity-0 w-full h-full hover:text-opacity-100 hover:transition duration-500 ease-in-out ">View</span></a>
		</div>
		<div class="thumbnail  h-52 4xl:h-80 w-full bg-blend-overlay hover:bg-blue-800  hover:cursor-pointer hover:text-opacity-100" id="thumbnail4">
			<a href="" onclick="previewImage('/assets/image/longexile/5.jpg')"><span class="grid justify-center items-center text-white font-bold 2xl:text-2xl 3xl:text-3xl 4xl:text-5xl 5xl:text-6xl text-opacity-0 w-full h-full hover:text-opacity-100 hover:transition duration-500 ease-in-out ">View</span></a>
		</div>
		<div class="thumbnail  h-52 4xl:h-80 w-full bg-blend-overlay hover:bg-blue-800  hover:cursor-pointer hover:text-opacity-100" id="thumbnail3">
			<a href="" onclick="previewImage('/assets/image/longexile/4.jpg')"><span class="grid justify-center items-center text-white font-bold 2xl:text-2xl 3xl:text-3xl 4xl:text-5xl 5xl:text-6xl text-opacity-0 w-full h-full hover:text-opacity-100 hover:transition duration-500 ease-in-out ">View</span></a>
		</div>

	</div>

</body>
</html>
