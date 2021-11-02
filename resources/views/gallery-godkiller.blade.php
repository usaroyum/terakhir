<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<style>

	#thumbnail{

			background-image: linear-gradient(rgba(0,0,0,0.50),rgba(0,0,0,0.50)),url('/assets/image/godkiller/1.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;

		}

</style>
@extends('app')
<body>

	<div class="grid grid-cols-1 3xl:grid-cols-3 gap-y-1 gap-x-1 justify-items-center items-center" id="galleryContainer">
        @for ($i = 1; $i <= 22; $i++)

		<div class="thumbnail h-52 4xl:h-80 w-full bg-blend-overlay hover:bg-blue-800  hover:cursor-pointer hover:text-opacity-100" style="background-image: linear-gradient(rgba(0,0,0,0.50),rgba(0,0,0,0.50)),url('/assets/image/godkiller/{{$i}}.jpg');" id="thumbnail">
            <a href="" onclick="previewImage('/assets/image/godkiller/{{$i}}.jpg')"><span class="grid justify-center items-center text-white font-bold 2xl:text-2xl 3xl:text-3xl 4xl:text-5xl 5xl:text-6xl text-opacity-0 w-full h-full hover:text-opacity-100 hover:transition duration-500 ease-in-out">View</span></a>
		</div>
        @endfor

	</div>

</body>
</html>
