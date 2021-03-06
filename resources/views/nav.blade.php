<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="shortcut icon" href="/assets/image/favicon.png" type="image/jpg">

	<style>

		html{
			scroll-behavior: smooth;
			scroll-snap-type: y mandatory;
		}

		/* apply style ofter scrolling*/
			.scrolling-active{

			background-color: black;
			transition: background-color 0.5s ease-out;
		}




		nav li {
            position: relative;
			list-style: none;
		}

        .active::after{
            position: absolute;
            content: '';
            bottom: -2px;
            left: 50%;
            transform: translateX(-50%);
            width: 120%;
            height: 2px;
            background: #f5930B;
        }

        *{
            cursor: none;
        }
        @media (max-width: 640px) {
            *{cursor: initial;}
         }
        .customCursor{
            width: 40px;
            height: 40px;
            position: absolute;
            z-index: 10000;
            transform: translate(-50%,-50%);
            pointer-events: none;
            background-size: cover;
            background-position: center;
            background-image: url('/cursor.svg')
        }

        .cursorBeeg{
            position: absolute;
            content: '';
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width:10%;
            height:10%;
            border-radius: 100px;
            background: #f5930B

        }
    </style>

	</style>
</head>
@extends('app')
<body>
        <div src="/cursor.svg" class="customCursor hidden xl:block">
            <div class="cursorBeeg"></div>
        </div>

	<nav class="h-20 5xl:h-40 flex w-full justify-between items-center px-8 2xl:px-12 text-white fixed top-0 font-degular z-50" id="scrolling-active">
		<div class="w-full ml-5 2xl:ml-0 2xl:w-auto flex justify-center 2xl:justify-start">
				<img src="assets/Logo/logo.svg" class="w-24 4xl:w-32 5xl:w-52">
		</div>
		<div id="menu" class="hidden 2xl:flex gap-20 justify-center items-center">

			<li class="home active cursorHover">
				<a href="/#home" class="  text-base 4xl:text-xl 5xl:text-4xl hover:text-yellow-400">Home</a>
			</li>
			{{-- <li class="about  ">
				<a href="/#about" class="  text-base 4xl:text-xl 5xl:text-4xl hover:text-yellow-400">About</a>
			</li> --}}
			<li class="gallery cursorHover ">
				<a href="/#gallery" class="  text-base 4xl:text-xl 5xl:text-4xl hover:text-yellow-400">Gallery</a>
			</li>
			<li class="contacts cursorHover ">
					<a href="/#contacts" class="  4xl:text-xl 5xl:text-4xl hover:text-yellow-400">Contacts</a>
			</li>


		</div>

		 <nav x-data="{ open: false }" class="block 2xl:hidden">
            <button class="text-gray-300 w-10 h-10 relative focus:outline-none" @click="open = !open" id="hamburger">
                <span class="sr-only">Open main menu</span>
                <div class="block w-5 absolute left-1/2 top-1/2   transform  -translate-x-1/2 -translate-y-1/2">
                    <span aria-hidden="true" class="block absolute rounded-full h-1 w-8 bg-white transform transition duration-500 ease-in-out" :class="{'rotate-45': open,' -translate-y-1.5': !open }"></span>

                    <span aria-hidden="true" class="block absolute rounded-full h-1 w-8 bg-white transform  transition duration-500 ease-in-out" :class="{'-rotate-45': open, ' translate-y-1.5': !open}"></span>
                </div>
            </button>
        </nav>

        <div class="down cursorHover ">
        	<a href="#gallery" id="down"><img src="/assets/button/down.svg" class="hidden 3xl:block w-16 4xl:w-20 5xl:w-32 fill-current bg-white hover:bg-yellow-800 rounded-full"></a>
        </div>



	</nav>

	  <div class="down-hp w-screen fixed bottom-10 z-50">
        	<a href="#gallery" id="down-hp" class="grid justify-center"><img src="/assets/button/down.svg" class="block 3xl:hidden w-16 4xl:w-20 5xl:w-32 fill-current bg-white hover:bg-yellow-800 rounded-full"></a>
        </div>

	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

	<script>

		window.addEventListener('scroll', function (){
			let nav = document.querySelector('nav');
			let windowPosition = window.scrollY > 0;
			nav.classList.toggle("scrolling-active", windowPosition);

            if(windowPosition){
                document.querySelector('.down').style.transform = 'rotate(180deg)'
                document.querySelector('.down-hp').style.transform = 'rotate(180deg)'
            }
            else {
                document.querySelector('.down').style.transform = 'rotate(0deg)'
                document.querySelector('.down-hp').style.transform = 'rotate(0deg)'
            }

		})

        document.querySelector('#down').addEventListener('click',function(){
            if(window.scrollY > 0){
                event.preventDefault()
                window.scrollTo(0,0)
            }
        })
        document.querySelector('#down-hp').addEventListener('click',function (){
            if(window.scrollY > 0){
                event.preventDefault()
                window.scrollTo(0,0)
            }
        })


	</script>

	<script>

		 $('#hamburger').click(function(){
   		$('#sidebar').toggleClass('active');
 		});

	</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js" integrity="sha512-z4OUqw38qNLpn1libAN9BsoDx6nbNFio5lA6CuTp9NlK83b89hgyCVq+N5FdBJptINztxn1Z3SaKSKUS5UP60Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script>

    const navLi = document.querySelectorAll("#menu li");
    var current = "";

    window.addEventListener('mousemove',e => {
    document.querySelector('.customCursor').style.top = `${e.pageY}px`
    document.querySelector('.customCursor').style.left = `${e.pageX}px`

    })



    window.onscroll = () => {
        document.querySelectorAll("section").forEach(section => {
            var sectionTop = section.offsetTop;
            if (window.scrollY >= sectionTop - 80) {
                current = section.getAttribute("id");
            }
        });

        navLi.forEach((li) => {
            li.classList.remove("active");
            if (li.classList.contains(current)) {
                li.classList.add("active");
            }
            // else{

            // }
        });
    };


	</script>

</body>
</html>


